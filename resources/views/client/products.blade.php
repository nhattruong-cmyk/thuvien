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
                <h2 class="title_color">Kết quả tìm kiếm</h2>
                <p>Chúng tôi đã tìm thấy {{ $products->total() }} kết quả phù hợp với yêu cầu của bạn.</p>
            </div>
            <div class="row">
                <!-- Danh mục nằm bên trái -->
                <div class="col-lg-3">
                    <h2 class="mb-4">Danh Mục</h2>
                    <ul class="list-group category-list">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a href="{{ route('category.products', ['id' => $category->id]) }}"
                                    class="category-link">{{ $category->name }}</a>
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
                                        <img class="img-px" src="{{ asset('uploaded/' . $item->img) }}"
                                            alt="{{ $item->name }}">
                                    </div>
                                    <a href="{{ route('products.detail', ['id' => $item->id]) }}" class="flex-grow-1">
                                        <h4 class="sec_h4">{{ $item->name }}</h4>
                                    </a>
                                    <span
                                        class="price p-2">{{ number_format($item->price, 0, '.', '.') }}<sup>đ</sup></span>
                                    <a href="{{ route('products.detail', ['id' => $item->id]) }}"
                                        class="btn theme_btn button_hover mt-auto">Xem ngay</a>
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

    <!--================ Search Form Area  =================-->
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
    <!--================ Search Form Area  =================-->
@endsection
