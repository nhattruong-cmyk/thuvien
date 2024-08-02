<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Giới thiệu về Nhà sách</h6>
                    <p>Thế giới hiện nay đã trở nên quá nhanh chóng, người ta không muốn đứng lâu để đọc một trang thông tin, họ thích nhìn vào một bài thuyết trình để hiểu thông điệp. Nó đã trở thành một xu hướng...</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Liên kết điều hướng</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                                <li><a href="{{ route('products') }}">Sản phẩm</a></li>
                                <li><a href="{{ route('blog') }}">Bài viết</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Nhóm sách</a></li>
                                <li><a href="#">Giá cả</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Bản tin</h6>
                    <p>Đối với các chuyên gia kinh doanh đang bị mắc kẹt giữa giá OEM cao và chất lượng in ấn và đồ họa trung bình,</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Địa chỉ Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ Email '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget instafeed">
                    <h6 class="footer_title">Người cung cấp dữ liệu</h6>
                    <ul class="list_style instafeed d-flex flex-wrap">
                        <li><img src="{{ asset('image/instagram/Image-01.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-02.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-03.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-04.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-05.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-06.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-07.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('image/instagram/Image-08.jpg') }}" alt=""></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                &copy; Copyright
                <script>
                    document.write(new Date().getFullYear());
                </script>Nhóm <i class="fa fa-heart-o" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
