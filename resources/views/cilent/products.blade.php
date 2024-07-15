@extends('cilent.layout')

@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Accomodation</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Accomodation</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="books_area section_gap">
        <div class="container">

            <div class="section_title text-center">
                <h2 class="title_color">Các loại sách nổi bật</h2>
                <p>Chúng ta đang sống trong một thời đại thuộc về những người trẻ tuổi. Cuộc sống đang trở nên cực kỳ nhanh
                    chóng,</p>
            </div>
            <div class="">
                <h2>Danh Mục</h2>
                <!-- Danh sách danh mục -->
                <ul>
                    <li><a href="#">Danh mục 1</a></li>
                    <li><a href="#">Danh mục 2</a></li>
                    <li><a href="#">Danh mục 3</a></li>
                    <!-- Thêm danh mục cần hiển thị -->
                </ul>
            </div>
            <div class="row mb_30 ">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/dacnhantam.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Đắc Nhân Tâm</h4>
                        </a>
                        <h5>100,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/cotienthayphien.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Có tiền thấy phiền</h4>
                        </a>
                        <h5>150,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/nguoiphunuuyluc.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Người phụ nữ uy lực</h4>
                        </a>
                        <h5>120,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/neuthaythienduong.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Nếu thấy thiên đường</h4>
                        </a>
                        <h5>90,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    <!--================Booking Tabel Area =================-->
    <section class="book_booking_area">
        <div class="container">
            <div class="row book_booking_table">
                <div class="col-md-3">
                    <h2>Book<br> Your Room</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Arrival Date" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Departure Date" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Adult">Adult</option>
                                            <option value="1">Old</option>
                                            <option value="2">Younger</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Child">Child</option>
                                            <option value="1">Child</option>
                                            <option value="2">Baby</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Child">Number of Rooms</option>
                                            <option value="1">Room 01</option>
                                            <option value="2">Room 02</option>
                                            <option value="3">Room 03</option>
                                        </select>
                                    </div>
                                    <a class="book_now_btn button_hover" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Booking Tabel Area  =================-->

    <section class="books_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Các loại sách tại thư viện</h2>
                <p>Chúng ta đang sống trong một thời đại thuộc về những người trẻ tuổi. Cuộc sống đang trở nên cực kỳ nhanh
                    chóng,</p>
            </div>

            <div class="row mb_30 ">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/dacnhantam.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Đắc Nhân Tâm</h4>
                        </a>
                        <h5>100,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/cotienthayphien.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Có tiền thấy phiền</h4>
                        </a>
                        <h5>150,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/nguoiphunuuyluc.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Người phụ nữ uy lực</h4>
                        </a>
                        <h5>120,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/neuthaythienduong.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Nếu thấy thiên đường</h4>
                        </a>
                        <h5>90,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/dacnhantam.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Đắc Nhân Tâm</h4>
                        </a>
                        <h5>100,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/cotienthayphien.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Có tiền thấy phiền</h4>
                        </a>
                        <h5>150,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/nguoiphunuuyluc.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Người phụ nữ uy lực</h4>
                        </a>
                        <h5>120,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="book_img">
                            <img class="img-px" src="{{ asset('image/neuthaythienduong.jpg') }}" alt="">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Nếu thấy thiên đường</h4>
                        </a>
                        <h5>90,000₫</h5>
                        <a href="#" class="btn theme_btn button_hover">Xem ngay</a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ About History Area  =================-->
@endsection
