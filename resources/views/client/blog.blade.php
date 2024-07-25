@extends('client.layout')

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area blog_banner d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h4>Khám Phá Thế Giới Của <br />Sách và Thư Viện</h4>
                <p>Khám phá thế giới hấp dẫn của văn học và thư viện. Tìm đọc sách tuyệt vời tiếp theo của bạn!</p>
                <a href="#" class="btn white_btn button_hover">Khám Phá Ngay</a>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="image/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Tiểu Thuyết</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Khám phá thế giới tưởng tượng của sách tiểu thuyết</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="image/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Phi Tiểu Thuyết</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Khám phá các cuốn sách phi tiểu thuyết thông tin và giáo dục</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="image/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Sự Kiện Thư Viện</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Cập nhật các sự kiện và hoạt động sắp tới tại thư viện địa phương của bạn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Sách,</a>
                                        <a href="#">Thư Viện,</a>
                                        <a href="#">Sự Kiện,</a>
                                        <a href="#">Đánh Giá</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Jane Doe<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">15 Tháng 7, 2024<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.5M Lượt Xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">12 Bình Luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="image/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Niềm Vui Đọc Sách: Tại Sao Sách Quan Trọng</h2>
                                        </a>
                                        <p>Khám phá tác động sâu sắc mà việc đọc sách có thể mang lại cho cuộc sống và sự
                                            phát triển cá nhân của bạn. Bài viết này khám phá niềm vui và lợi ích của việc
                                            trở thành một người đọc sách suốt đời.</p>
                                        <a href="#" class="view_btn button_hover">Đọc Thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Sách,</a>
                                        <a href="#">Thư Viện,</a>
                                        <a href="#">Đánh Giá,</a>
                                        <a href="#">Gợi Ý</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Jane Doe<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">20 Tháng 7, 2024<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.4M Lượt Xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">8 Bình Luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="image/blog/main-blog/m-blog-2.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Các Cuốn Sách Cần Có Trong Mỗi Thư Viện</h2>
                                        </a>
                                        <p>Khám phá các cuốn sách thiết yếu mà mỗi thư viện nên có trên kệ sách của mình.
                                            Hướng dẫn này nêu bật các tác phẩm kinh điển và những cuốn sách hiện đại cần đọc
                                            để làm phong phú thêm bất kỳ bộ sưu tập nào.</p>
                                        <a href="#" class="view_btn button_hover">Đọc Thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Thư Viện,</a>
                                        <a href="#">Sự Kiện,</a>
                                        <a href="#">Cộng Đồng,</a>
                                        <a href="#">Hoạt Động</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">John Smith<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">25 Tháng 7, 2024<i class="lnr lnr-calendar-full"></i></a>
                                        </li>
                                        <li><a href="#">1.3M Lượt Xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">10 Bình Luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="image/blog/main-blog/m-blog-3.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Các Sự Kiện Thư Viện Sắp Tới Mà Bạn Không Thể Bỏ Lỡ</h2>
                                        </a>
                                        <p>Cập nhật các sự kiện thú vị sắp diễn ra tại các thư viện địa phương. Từ các buổi
                                            nói chuyện của tác giả đến hội sách, tìm hiểu những gì sắp tới và cách bạn có
                                            thể tham gia.</p>
                                        <a href="#" class="view_btn button_hover">Đọc Thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Đánh Giá,</a>
                                        <a href="#">Sách,</a>
                                        <a href="#">Thư Viện,</a>
                                        <a href="#">Tác Giả</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">Alice Brown<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">30 Tháng 7, 2024<i class="lnr lnr-calendar-full"></i></a>
                                        </li>
                                        <li><a href="#">1.6M Lượt Xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">15 Bình Luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="image/blog/main-blog/m-blog-4.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Những Tác Giả Nổi Bật Trong Năm 2024</h2>
                                        </a>
                                        <p>Khám phá các tác giả nổi bật và những tác phẩm đáng đọc trong năm 2024. Đọc các
                                            đánh giá và nhận xét về các tác giả mới và những cuốn sách đang thu hút sự chú
                                            ý.</p>
                                        <a href="#" class="view_btn button_hover">Đọc Thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">05</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm bài viết">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle h-50 w-50" src="{{ asset('uploaded/1721883054.jpg') }}"
                                alt="">
                            <h4>Nguyễn Nhật Trường</h4>
                            <p>Lập trình viên Back-end</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Khám phá tác động sâu sắc mà việc đọc sách có thể mang lại cho cuộc sống và sự phát triển cá
                                nhân của bạn. Bài viết này khám phá niềm vui và lợi ích của việc trở thành một người đọc
                                sách suốt đời.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h4 class="widget_title">Sách Phổ Biến</h4>
                            <div class="media post_item">
                                <img src="image/blog/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Great Gatsby</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="image/blog/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="image/blog/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="image/blog/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Danh mục bài viết</h4>
                            <ul class="list_style cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Công nghệ</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Cách sống</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Thời trang</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Nghệ thuật</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Đồ ăn</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Kiến trúc</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Phiêu lưu</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Đăng ký thành viên</h4>
                            <p>
                                Để nhận thông tin mới nhất.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Nhập email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Gửi</a>
                            </div>
                            <p class="text-bottom">Bạn có thể bỏ theo dõi bất cứ lúc nào</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Từ khóa</h4>
                            <ul class="list_style">

                                <li><a href="#">Sách</a></li>
                                <li><a href="#">Thư Viện</a></li>
                                <li><a href="#">Tác Giả</a></li>
                                <li><a href="#">Đánh Giá</a></li>
                                <li><a href="#">Sự Kiện</a></li>
                                <li><a href="#">Tiểu Thuyết</a></li>

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <!--================ start footer Area  =================-->
@endsection
