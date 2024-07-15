@extends('cilent.layout')

@section('content')

<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Giới Thiệu</h2>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li class="active">Giới Thiệu</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">Về Chúng Tôi <br>Lịch Sử <br>Sứ Mệnh & Tầm Nhìn</h2>
                    <p>Chúng tôi là một thư viện cộng đồng với mục tiêu cung cấp tài liệu học thuật và văn hóa cho mọi người. Từ những ngày đầu thành lập, thư viện đã không ngừng phát triển và trở thành một phần quan trọng của cộng đồng.</p>
                    <a href="#" class="button_hover theme_btn_two">Yêu Cầu Giá Tùy Chỉnh</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->

<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Các Dịch Vụ Tại Thư Viện</h2>
            <p>Chúng tôi cung cấp nhiều dịch vụ hữu ích và thân thiện với môi trường.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-book"></i>Phòng Đọc Sách</h4>
                    <p>Phòng đọc sách yên tĩnh và thoải mái, trang bị đầy đủ ánh sáng và điều hòa.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-laptop"></i>Truy Cập Internet</h4>
                    <p>Thư viện cung cấp máy tính và wifi miễn phí cho người đọc.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-mic"></i>Câu Lạc Bộ Sách</h4>
                    <p>Các buổi thảo luận sách và sự kiện văn hóa được tổ chức thường xuyên.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Chỗ Đậu Xe</h4>
                    <p>Thư viện có khu vực đậu xe rộng rãi và an toàn.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-pencil"></i>Phòng Nghiên Cứu</h4>
                    <p>Phòng nghiên cứu trang bị đầy đủ tài liệu và thiết bị hỗ trợ học tập.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bookmark"></i>Kho Lưu Trữ</h4>
                    <p>Kho lưu trữ với hàng ngàn đầu sách và tài liệu quý hiếm.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->

<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Lời Chứng Thực Từ Độc Giả</h2>
            <p>Những chia sẻ từ độc giả về thư viện của chúng tôi.</p>
        </div>
        <div class="testimonial_slider owl-carousel">
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">

                <div class="media-body">
                    <p>Thư viện là nơi tuyệt vời để học tập và nghiên cứu. Tôi luôn tìm thấy những cuốn sách mình cần ở đây.</p>
                    <a href="#"><h4 class="sec_h4">Nguyễn Văn A</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>    
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/testtimonial-2.jpg" alt="">
                <div class="media-body">
                    <p>Không gian yên tĩnh và nhân viên thân thiện là điều tôi thích nhất ở thư viện này.</p>
                    <a href="#"><h4 class="sec_h4">Trần Thị B</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>Các sự kiện văn hóa tại thư viện rất bổ ích và thú vị. Tôi đã học được nhiều điều từ các buổi thảo luận sách.</p>
                    <a href="#"><h4 class="sec_h4">Lê Văn C</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>    
            <div class="media testimonial_item">
                <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>Thư viện là nơi lý tưởng để tìm kiếm tài liệu học thuật và nghiên cứu chuyên sâu.</p>
                    <a href="#"><h4 class="sec_h4">Phạm Thị D</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
