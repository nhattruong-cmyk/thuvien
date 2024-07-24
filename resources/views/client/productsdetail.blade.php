@extends('client.layout')


@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://kit.fontawesome.com/a076d05399.css" rel="stylesheet">
    <link href="{{ asset('css/productdetail.css') }}" rel="stylesheet">
@endpush


@section('content')
    <div class="container mt-4">
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
                            {{-- <p class="short-description">{{ $product->short_description }}</p> <!-- Thêm mô tả ngắn --> --}}
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
                                <a href="#" class="btn btn-primary me-2">
                                    <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                                </a>
                                <a href="#" class="btn btn-outline-secondary me-2"><i class="fa fa-heart"></i> Yêu
                                    thích</a>
                                <a href="#" class="btn btn-outline-info me-2"><i class="fa fa-book"></i> Yêu cầu
                                    mượn sách</a>
                            </div>
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
                                    <button class="nav-link active" id="single-product-description-tab" data-bs-toggle="tab"
                                        data-bs-target="#single-product-description-tab-pane" type="button" role="tab"
                                        aria-controls="single-product-description-tab-pane" aria-selected="true">Tóm
                                        Tắt</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="comment-tab" data-bs-toggle="tab"
                                        data-bs-target="#comment-tab-pane" type="button" role="tab"
                                        aria-controls="comment-tab-pane" aria-selected="false">Bình luận</button>
                                </li>
                            </ul>
                            <div class="tab-content mt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="single-product-description-tab-pane"
                                    role="tabpanel" aria-labelledby="single-product-description-tab" tabindex="0">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div class="tab-pane fade" id="comment-tab-pane" role="tabpanel"
                                    aria-labelledby="comment-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="chat-body no-padding profile-message">
                                                <ul class="list-unstyled">
                                                    <li class="comment-item">
                                                        <div class="comment-avatar">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                class="avatar online" />
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-username">Minh Tiến

                                                                <span class="rating-star" data-value="1">&#9733;</span>
                                                                <span class="rating-star" data-value="2">&#9733;</span>
                                                                <span class="rating-star" data-value="3">&#9733;</span>
                                                                <span class="rating-star" data-value="4">&#9733;</span>
                                                                <span class="rating-star" data-value="5">&#9733;</span>
                                                            </div>
                                                            <div class="comment-text">
                                                                Sản phẩm rất tuyệt nhé ae
                                                            </div>
                                                            <div class="comment-time">Vào 1 giờ trước</div>
                                                        </div>
                                                    </li>
                                                    <li class="comment-item">
                                                        <div class="comment-avatar">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                class="avatar online" />
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-username">Nhật Trường

                                                                <span class="rating-star" data-value="1">&#9733;</span>
                                                                <span class="rating-star" data-value="2">&#9733;</span>
                                                                <span class="rating-star" data-value="3">&#9733;</span>
                                                                <span class="rating-star" data-value="4">&#9733;</span>
                                                                <span class="rating-star" data-value="5">&#9733;</span>
                                                            </div>
                                                            <div class="comment-text">
                                                                Cửa hàng uy tín số 1 nhé, hàng chất lượng cao
                                                            </div>
                                                            <div class="comment-time">Vào 2 giờ trước</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                                                <div>
                                                    <label for="rating">Đánh giá của bạn:</label>
                                                    <span class="rating-star" data-value="1">&#9733;</span>
                                                    <span class="rating-star" data-value="2">&#9733;</span>
                                                    <span class="rating-star" data-value="3">&#9733;</span>
                                                    <span class="rating-star" data-value="4">&#9733;</span>
                                                    <span class="rating-star" data-value="5">&#9733;</span>
                                                </div>
                                                <label for="">Nội dung bình luận</label>
                                                <textarea rows="2" class="form-control" placeholder="Để lại bình luận của bạn..."></textarea>

                                                <div class="margin-top-10 mt-2">
                                                    <button type="submit" class="btn btn-sm btn-primary pull-right">
                                                        Gửi bình luận
                                                    </button>
                                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn"
                                                        rel="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Add Location"><i
                                                            class="fa fa-location-arrow"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn"
                                                        rel="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Add Voice"><i
                                                            class="fa fa-microphone"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn"
                                                        rel="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn"
                                                        rel="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Add File"><i class="fa fa-file"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    <p>Contact section here...</p>
                                </div>
                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                    aria-labelledby="disabled-tab" tabindex="0">
                                    <p>Disabled section here...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($relatedproducts->count())
                        <section class="related-products py-5">
                            <div class="container">
                                <h2 class="title">Sản phẩm liên quan</h2>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/some-cdn-script@1.0.0/dist/script.min.js"></script>
@endpush
