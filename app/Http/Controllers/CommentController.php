<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;

class CommentController extends Controller
{
    use AuthorizesRequests;

    public function send(CommentRequest $request)
    {
        $validated = $request->validated();

        Comment::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),

        ]);

        return redirect()->route('products.detail', ['id' => $validated['product_id'], 'tab' => 'comment'])
            ->with('success', 'Bình luận của bạn đã được gửi.')
            ->with('activeTab', 'comment-tab-pane');
    }

    public function update(UpdateCommentRequest $request, $id)
    {
        $comment = Comment::find($id);

        if (!$comment || $comment->user_id !== Auth::id()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $validated = $request->validated();

        // Cập nhật bình luận và rating
        $comment->update([
            'comment' => $validated['comment'],
            'rating' => $validated['rating'],
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);

        // Lấy thời gian cập nhật mới nhất
        $updatedTime = $comment->updated_at->format('H:i:s d/m/Y');
        $createdTime = $comment->created_at->format('H:i:s d/m/Y');

        return response()->json([
            'success' => true,
            'updated_at' => $updatedTime,
            'comment' => [
                'comment' => $comment->comment,
                'rating' => $comment->rating,
                'created_at' => $createdTime,
                'updated_at' => $updatedTime
            ]
        ]);
    }


    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return response()->json(['success' => 'Bình luận đã được xóa.']);
    }

    public function loadMoreComments(Request $request)
    {
        $productId = $request->input('product_id');
        $skip = $request->input('skip', 5);

        try {
            $comments = Comment::where('product_id', $productId)
                ->with('user')
                ->orderBy('created_at', 'desc')
                ->skip($skip)
                ->take(5)
                ->get();

            $totalComments = Comment::where('product_id', $productId)->count();
            $hasMoreComments = ($totalComments > ($skip + 5));

            $formattedComments = $comments->map(function ($comment) {
                return [
                    'id' => $comment->id,
                    'text' => $comment->comment,
                    'rating' => $comment->rating,
                    'created_at' => $comment->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i:s'),
                    'updated_at' => $comment->updated_at->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i:s'),
                    'user' => [
                        'name' => $comment->user->name,
                        'img' => $comment->user->img,
                    ],
                    'is_user_comment' => Auth::check() && Auth::id() == $comment->user_id,
                ];
            });

            return response()->json([
                'comments' => $formattedComments,
                'hasMoreComments' => $hasMoreComments,
                'totalComments' => $totalComments,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Lỗi trong quá trình tải bình luận.',
            ], 500);
        }
    }





    public function reply(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:255',
            'parent_id' => 'required|exists:comments,id',
            'product_id' => 'required|exists:products,id'
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'comment' => $request->comment,
            'rating' => null,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('products.detail', ['id' => $validated['product_id'], 'tab' => 'comment'])
            ->with('success', 'Phản hồi của bạn đã được gửi.')
            ->with('activeTab', 'comment-tab-pane');
    }
}

