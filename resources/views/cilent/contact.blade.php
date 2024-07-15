@extends('cilent.layout')

@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Liên Hệ</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                    <li class="active">Liên Hệ</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="mapBox" style="height: 500px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.420494742044!2d105.7556524747934!3d9.982081490122432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1720671481561!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Cần Thơ, Việt Nam</h6>
                            <p>Thường Thạnh, Cái Răng</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">0987 097 0962</a></h6>
                            <p>Thứ 2 đến Thứ 6, 9 giờ sáng đến 6 giờ chiều</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">tiencmpc05891@fpt.edu.vn</a></h6>
                            <p>Gửi cho chúng tôi câu hỏi của bạn bất cứ lúc nào!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nhập tên của bạn">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Nhập địa chỉ email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Nhập tiêu đề">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Nhập tin nhắn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn theme_btn button_hover">Gửi Tin Nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
