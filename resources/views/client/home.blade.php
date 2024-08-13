@extends('client.layout')


@push('styles')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Thoát khỏi cuộc sống đơn điệu</h6>
                    <h2>Thư giãn tâm trí của bạn</h2>
                    <p>Nếu bạn đang tìm kiếm các loại sách mà bạn đang muốn đọc.<br> Bạn có thể tìm ngay tại đây.</p>
                    <a href="#" class="btn theme_btn button_hover">Bắt đầu ngay</a>
                </div>
            </div>
        </div>
        <div class="book_booking_area position">
            <div class="container">
                <div class="book_booking_table">
                    <div class="col-md-3">
                        <h2>Tìm<br> Sách của bạn</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <form action="{{ route('search') }}" method="GET" id="searchForm">
                                <div class="row">
                                
                                    <!-- Input cho tên sách và tác giả -->
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="query" class="form-control"
                                                placeholder="Nhập tên sách hoặc tác giả" value="{{ request('query') }}">
                                        </div>
                                    </div>
                                    <!-- Select cho năm xuất bản -->
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <select class="wide" name="publication_year">
                                                    <option value=""
                                                        {{ request('publication_year') == '' ? 'selected' : '' }}>Chọn năm
                                                    </option>
                                                    @foreach ($publicationYears as $year)
                                                        <option value="{{ $year->publication_year }}"
                                                            {{ request('publication_year') == $year->publication_year ? 'selected' : '' }}>
                                                            {{ $year->publication_year }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select cho thể loại -->
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <select class="wide" name="category_id">
                                                    <option value=""
                                                        {{ request('category_id') == '' ? 'selected' : '' }}>Thể loại
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select cho tác giả -->
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <select class="wide" name="author">
                                                    <option value="" {{ request('author') == '' ? 'selected' : '' }}>
                                                        Tác
                                                        giả</option>
                                                    @foreach ($authors as $author)
                                                        <option value="{{ $author->author }}"
                                                            {{ request('author') == $author->author ? 'selected' : '' }}>
                                                            {{ $author->author }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <button type="submit" class="book_now_btn button_hover mt-3">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- JavaScript để kiểm tra biểu mẫu -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('searchForm');

                // Xử lý kiểm tra trước khi gửi form
                form.addEventListener('submit', function(event) {
                    const query = document.querySelector('input[name="query"]').value;
                    const publicationYear = document.querySelector('select[name="publication_year"]').value;
                    const categoryId = document.querySelector('select[name="category_id"]').value;
                    const author = document.querySelector('select[name="author"]').value;

                    if (!query && !publicationYear && !categoryId && !author) {
                        alert('Vui lòng chọn ít nhất một thông tin để tìm kiếm.');
                        event.preventDefault(); // Ngăn không cho gửi biểu mẫu
                    }
                });
            });
        </script>


    </section>
    <!--================Banner Area =================-->

    <section class="books_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Các loại sách mới tại thư viện</h2>
                <p>Chúng ta đang sống trong một thời đại thuộc về những người trẻ tuổi. Cuộc sống đang trở nên cực kỳ nhanh
                    chóng,</p>
            </div>
            <div class="row mb_30">
                <!-- resources/views/client/home.blade.php -->
                @foreach ($newBooks as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center d-flex flex-column">
                            <div class="book_img">
                                <img class="img-px" src="{{ asset('uploaded/' . $item->img) }}" alt="{{ $item->name }}">
                            </div>
                            <a href="{{ route('products.detail', ['id' => $item->id]) }}" class="flex-grow-1">
                                <h4 class="sec_h4">{{ $item->name }}</h4>
                            </a>
                            <span class="price p-2">{{ number_format($item->price, 0, '.', '.') }}<sup>đ</sup></span>

                            <a href="{{ route('products.detail', ['id' => $item->id]) }}"
                                class="btn theme_btn button_hover mt-auto">Xem ngay</a>
                        </div>
                    </div>
                @endforeach



            </div>


        </div>
    </section>
    <!--================ Books Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Cơ sở vật chất tại thư viện</h2>
                <p>Khám phá các tiện nghi và không gian thân thiện tại thư viện của chúng tôi.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fas fa-chair"></i>Bàn ghế làm việc</h4>
                        <p>Chúng tôi cung cấp các khu vực làm việc với bàn ghế tiện nghi, lý tưởng cho việc học tập và
                            nghiên cứu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fas fa-couch"></i>Nệm ngồi thoải mái</h4>
                        <p>Chúng tôi có khu vực nệm ngồi thoải mái để bạn có thể thư giãn và đọc sách trong môi trường dễ
                            chịu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fas fa-building"></i>Phòng đọc yên tĩnh</h4>
                        <p>Chúng tôi cung cấp các phòng đọc yên tĩnh để bạn có thể tập trung vào việc học mà không bị làm
                            phiền.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fas fa-arrow-up"></i>Khu vực đọc sách trên lầu</h4>
                        <p>Khám phá khu vực đọc sách trên lầu với không gian mở và ánh sáng tự nhiên, lý tưởng cho việc đọc
                            và nghiên cứu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fas fa-cocktail"></i>Nước uống</h4>
                        <p>Chúng tôi cung cấp nước uống miễn phí để bạn có thể giải khát và duy trì sự tỉnh táo khi đọc sách
                            hoặc làm việc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="fas fa-concierge-bell"></i>Lễ tân</h4>
                        <p>Đội ngũ lễ tân của chúng tôi luôn sẵn sàng hỗ trợ bạn với các yêu cầu và thông tin cần thiết
                            trong suốt thời gian bạn ở thư viện.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_content">
                        <h2 class="title_color">Về thư viện của chúng tôi</h2>
                        <p>Khi bạn ở trên mạng, bạn sẽ có thể gặp phải nhiều quảng cáo làm phiền khi đọc thông tin. Để vượt
                            qua vấn đề này, bạn có thể sử dụng công cụ tiện ích của chúng tôi. Việc sử dụng Internet đang
                            trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                        <a href="#" class="button_hover theme_btn_two">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->
@endsection
