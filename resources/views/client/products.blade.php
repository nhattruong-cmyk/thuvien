@extends('client.layout')

@push('styles')

    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">{{ $pageTitle ?? 'Sản phẩm' }}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="active">{{ $pageTitle ?? 'Sản phẩm' }}</li>
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
                <p>Chúng ta đang sống trong một thời đại thuộc về những người trẻ tuổi. Cuộc sống đang trở nên cực kỳ nhanh chóng,</p>
            </div>
            <div class="row">
                <!-- Danh mục nằm bên trái -->
                <div class="col-lg-3">
                    <h2 class="mb-4">Danh Mục</h2>
                    <!-- Danh sách danh mục -->
                    <ul class="list-group category-list">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a href="{{ route('category.products', ['id' => $category->id]) }}" class="category-link">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                <!-- Sản phẩm nằm bên phải -->
                <div class="col-lg-9">
                    <div class="row mb_30">
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                                <div class="accomodation_item text-center d-flex flex-column">
                                    <div class="book_img">
                                        <img class="img-px" src="{{ asset('uploaded/' . $item->img) }}" alt="{{ $item->name }}">
                                    </div>
                                    <a href="{{ route('products.detail', ['id' => $item->id]) }}" class="flex-grow-1">
                                        <h4 class="sec_h4">{{ $item->name }}</h4>
                                    </a>
                                    <span class="price p-2">{{ number_format($item->price, 0, '.', '.') }}<sup>đ</sup></span>
                                    <a href="{{ route('products.detail', ['id' => $item->id]) }}" class="btn theme_btn button_hover mt-auto">Xem ngay</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
    
                    <!-- Phân trang -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    <!--================Booking Tabel Area =================-->
    <section class="book_booking_area">
         <div class="container">
                <div class="book_booking_table">
                    <div class="col-md-3">
                        <h2>Tìm<br> Sách của bạn</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="wide">
                                                    <option data-display="Ngôn ngữ">Ngôn ngữ</option>
                                                    <option value="1">Tiếng Việt</option>
                                                    <option value="2">Tiếng Anh</option>
                                                    <option value="3">Tiếng Pháp</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{-- <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Ngày đi" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div> --}}
                                            <select class="wide">
                                                <option data-display="Chọn năm">Chọn năm</option>
                                                <!-- Bạn có thể thêm nhiều năm khác vào danh sách này -->
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                            </select>
                                  
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Thể loại">Thể loại</option>
                                                <option value="1">Tiểu thuyết</option>
                                                <option value="2">Khoa học</option>
                                                <option value="3">Lịch sử</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Tác giả">Tác giả</option>
                                                <option value="1">Nguyễn Nhật Ánh</option>
                                                <option value="2">J.K. Rowling</option>
                                                <option value="3">George Orwell</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <input type='text' class="form-control" placeholder="Tên sách" />
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Tìm kiếm</a>
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
