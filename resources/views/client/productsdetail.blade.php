@extends('client.layout')


@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://kit.fontawesome.com/a076d05399.css" rel="stylesheet">
    <link href="{{ asset('css/productdetail.css') }}" rel="stylesheet">
@endpush


@section('content')
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">{{ $pageTitle ?? 'Trang' }}</h2>

            </div>
        </div>
    </section>

    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products') }}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle ?? 'Trang' }}</li>
            </ol>
        </nav>
        <main>
            <section class="section-product py-5">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="box-img">
                                <img class="w-60" src="{{ asset('uploaded/' . $product->img) }}"
                                    alt="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h1 class="title-product">{{ $product->name }}</h1>
                            <span class="price">Giá:{{ number_format($product->price, 0, '.', '.') }} <sup>đ</sup></span>
                            <hr>
                            <p>Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product
                                descriptions address your ideal buyer directly and personally. The best product
                                descriptions address your ideal buyer directly and personally.</p>
                            <ul class="list-unstyled">
                                <li><strong>Danh mục:</strong> {{ $product->category->name }}</li>
                                <li><strong>Tác giả:</strong> Nguyễn Thanh Phong</li>
                                <li><strong>Khổ sách:</strong> 15.5x23 cm</li>
                                <li><strong>Số trang:</strong> 368 trang</li>
                                <li><strong>Trọng lượng:</strong> 200 g</li>
                                <li><strong>Năm xuất bản:</strong> 2024</li>
                            </ul>
                            <div class="d-flex mt-3">
                                <input type="number" class="btn border rounded me-2" id="quantity" value="1"
                                    name="quantity" min="1" max="5">
                                <a href="#" class="btn btn-primary me-2">

                                    <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                                </a>
                                <a href="#" class="btn btn-outline-secondary me-2"><i class="fa fa-heart"></i> Yêu
                                    thích</a>
                                <a href="#" class="btn btn-outline-info me-2"><i class="fa fa-book"></i> Yêu cầu
                                    mượn sách</a>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

                                    $('#request-borrow').click(function(e) {
                                        e.preventDefault();

                                        if (!isLoggedIn) {
                                            window.location.href = "{{ route('login') }}";
                                            return;
                                        }

                                        var maSach = $(this).data('ma-sach');
                                        var tenSach = $(this).data('ten-sach');
                                        var soLuong = $('#quantity').val();

                                        $.ajax({
                                            url: "{{ route('add.to.cart') }}",
                                            method: "POST",
                                            data: {
                                                _token: "{{ csrf_token() }}",
                                                maSach: maSach,
                                                tenSach: tenSach,
                                                soLuong: soLuong
                                            },
                                            success: function(response) {
                                                if (response.success) {
                                                    window.location.href = "{{ route('cart') }}";
                                                } else {
                                                    alert('Có lỗi xảy ra, vui lòng thử lại');
                                                }
                                            }
                                        });
                                    });
                                });
                            </script>
                            <section class="share-section mt-2">
                                <span>Chia sẻ</span>
                                <div class="d-flex">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                        class="btn btn-primary me-2" target="_blank">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a href="https://www.youtube.com/channel/UClRvvbzLpIe2XCGi7ds78SQ"
                                        class="btn btn-danger me-2" target="_blank">
                                        <i class="fa fa-youtube"></i> Youtube
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}"
                                        class="btn btn-primary" target="_blank">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </div>
                            </section>
                        </div>
                        <div class="col-12">
                            <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ request('tab') == 'comment' ? '' : 'active' }}"
                                        id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary-tab-pane"
                                        type="button" role="tab" aria-controls="summary-tab-pane"
                                        aria-selected="{{ request('tab') == 'comment' ? 'false' : 'true' }}">Tóm
                                        Tắt</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ request('tab') == 'comment' ? 'active' : '' }}"
                                        id="comment-tab" data-bs-toggle="tab" data-bs-target="#comment-tab-pane"
                                        type="button" role="tab" aria-controls="comment-tab-pane"
                                        aria-selected="{{ request('tab') == 'comment' ? 'true' : 'false' }}">Bình
                                        luận</button>
                                </li>
                            </ul>

                            <div class="tab-content mt-2" id="myTabContent">
                                <div class="tab-pane fade {{ request('tab') == 'comment' ? '' : 'show active' }}"
                                    id="summary-tab-pane" role="tabpanel" aria-labelledby="summary-tab" tabindex="0">
                                    <div class="description" id="description">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <p class="see-more" id="see-more">Xem thêm</p>
                                </div>
                                <div class="tab-pane fade {{ request('tab') == 'comment' ? 'show active' : '' }}"
                                    id="comment-tab-pane" role="tabpanel" aria-labelledby="comment-tab" tabindex="0">
                                    <div class="row" id="rating-stars-form">
                                        <div class="col-md-7">
                                            <div class="comment-list mt-4" id="comment-list">
                                                <ul class="list-unstyled" id="comment-list">
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    @forelse ($comments as $comment)
                                                        <li class="comment-item">
                                                            <div class="comment-avatar">
                                                                <img src="{{ asset('avata/' . $comment->user->img) }}"
                                                                    class="avatar online" />
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-username">
                                                                    {{ $comment->user->name }}
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        <span
                                                                            class="rating-star-display">{{ $i <= $comment->rating ? '★' : '☆' }}</span>
                                                                    @endfor
                                                                </div>
                                                                <div class="comment-text">{{ $comment->comment }}</div>
                                                                <div class="comment-time">
                                                                    {{ $comment->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('H:i:s d/m/Y') }}
                                                                    @if ($comment->updated_at > $comment->created_at)
                                                                        <span class="comment-edited"> (Đã chỉnh sửa lúc
                                                                            {{ $comment->updated_at->setTimezone('Asia/Ho_Chi_Minh')->format('H:i:s d/m/Y') }})</span>
                                                                    @endif
                                                                </div>



                                                                @if (Auth::check() && Auth::id() === $comment->user_id)
                                                                    <div class="comment-actions">
                                                                        <button
                                                                            class="btn btn-warning btn-sm btn-edit-comment"
                                                                            data-id="{{ $comment->id }}"
                                                                            data-comment="{{ $comment->comment }}"
                                                                            data-rating="{{ $comment->rating }}">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-danger btn-sm btn-delete-comment"
                                                                            data-id="{{ $comment->id }}">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </li>

                                                    @empty
                                                        <li class="comment-item">
                                                            <p>Chưa có bình luận nào.</p>
                                                        </li>
                                                    @endforelse

                                                </ul>

                                            </div>
                                            <button id="load-more-comments" class="btn btn-secondary mt-3">Tải thêm bình
                                                luận</button>

                                            <button id="collapse-comments" class="btn btn-secondary mt-3"
                                                style="display: none;">Thu gọn bình luận</button>

                                        </div>
                                        <div class="col-md-5">
                                            @auth
                                                <h4>Đánh giá sản phẩm</h4>
                                                <form method="post" action="{{ route('comments.send') }}">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <div class="mb-3">
                                                        <label for="comment" class="form-label">Bình luận</label>
                                                        <textarea class="form-control" id="comment" name="comment" rows="2"></textarea>
                                                        @error('comment')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    @if ($canRate)
                                                        <div class="mb-3">
                                                            <div class="rating-stars">
                                                                <label for="rating" class="form-label">Đánh giá</label>
                                                                <input type="hidden" id="rating" name="rating">
                                                                <div id="rating-stars" class="rating-stars">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        <span class="rating-star"
                                                                            data-value="{{ $i }}">☆</span>
                                                                    @endfor
                                                                </div>
                                                                @error('rating')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                                                </form>
                                            @else
                                                <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để bình luận.</p>
                                            @endauth
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="productId" data-product-id="{{ $product->id }}"></div>
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                    <!-- Modal Sửa Bình Luận -->
                    <div class="modal fade" id="editCommentModal" tabindex="-1" aria-labelledby="editCommentModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCommentModalLabel">Sửa Bình Luận</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editCommentForm">
                                        <input type="hidden" id="editCommentId" name="id">

                                        <div class="mb-3">
                                            <label for="editCommentText" class="form-label">Nội dung bình luận</label>
                                            <textarea class="form-control" id="editCommentText" name="comment" rows="2"></textarea>
                                        </div>

                                        <div class="mb-3" id="ratingFields">
                                            <label for="editRating" class="form-label">Đánh giá</label>
                                            <input type="hidden" id="editRating" name="rating">
                                            <div id="rating-stars-modal" class="rating-stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <span class="rating-star" data-value="{{ $i }}">☆</span>
                                                @endfor
                                            </div>
                                        </div>

                                        <div id="error-message" class="text-danger"></div>

                                        <button type="submit" class="btn btn-primary">Cập nhật bình luận</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($relatedproducts->count())
                        <section class="related-products py-5">
                            <div class="container">
                                <h3 class="title">Sản phẩm liên quan</h3>
                                <div class="row">
                                    @foreach ($relatedproducts as $relatedProduct)
                                        <div class="col-md-3 mb-4">
                                            <div class="accomodation_item text-center d-flex flex-column">
                                                <div class="book_img">
                                                    <img class="img-px"
                                                        src="{{ asset('uploaded/' . $relatedProduct->img) }}"
                                                        alt="{{ $relatedProduct->name }}">
                                                </div>
                                                <a href="{{ route('products.detail', $relatedProduct->id) }}"
                                                    class="flex-grow-1">
                                                    <h4 class="sec_h4">{{ $relatedProduct->name }}</h4>
                                                </a>
                                                <span
                                                    class="price">{{ number_format($relatedProduct->price, 0, '.', '.') }}<sup>đ</sup>
                                                </span>
                                                <a href="{{ route('products.detail', $relatedProduct->id) }}"
                                                    class="btn theme_btn button_hover mt-auto">Xem ngay</a>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endif


                </div>
            </section>
        </main>
    </div>


@endsection

<script>
    const userStatus = @json($userStatus);
</script>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/some-cdn-script@1.0.0/dist/script.min.js"></script>
    <script src="{{ asset('js/description.js') }}"></script>
    <script src="{{ asset('js/productdetail.js') }}"></script>

@endpush
