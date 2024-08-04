<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'comment' => 'required|string|max:255',
            'rating' => 'nullable|integer|between:1,5',
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'Vui lòng nhập bình luận.',
            'comment.max' => 'Bình luận không được vượt quá 255 ký tự.',
            'rating.nullable' => 'Vui lòng chọn đánh giá.',
            'rating.integer' => 'Đánh giá phải là số nguyên.',
            'rating.between' => 'Đánh giá phải từ 1 đến 5 sao.',

        ];
    }
}
