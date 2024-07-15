@extends('admin.layout')

@section('titlepage', 'Danh sách sản phẩm')


@section('content')


    <div class=" d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <!--begin::Container-->
            <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                    <!--begin::Heading-->
                    <h1 class="text-dark fw-bolder my-0 fs-2">Quản lý sản phẩm</h1>
                    <!--end::Heading-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.php" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item text-muted">Quản lý sản phẩm</li>
                        <li class="breadcrumb-item text-dark">Danh sách sản phẩm</li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title=-->
                <!--begin::Wrapper-->
                <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                    <!--begin::Aside mobile toggle-->
                    <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Logo-->
                    <a href="index.php" class="d-flex align-items-center">
                        <img alt="Logo" src="assets/media/logos/logo-demo7.svg" class="h-30px" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Toolbar wrapper-->
                <div class="d-flex flex-shrink-0">
                    <!--begin::Invite user-->
                    <div class="d-flex ms-3">
                        <a href="#"
                            class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6"
                            tooltip="New Member" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                        transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class="d-none d-md-inline">New Member</span>
                        </a>
                    </div>
                    <!--end::Invite user-->
                    <!--begin::Create app-->
                    <div class="d-flex ms-3">
                        <a href="#"
                            class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6"
                            tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
                            id="kt_toolbar_primary_button">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                        fill="black" />
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class="d-none d-md-inline">New App</span>
                        </a>
                    </div>
                    <!--end::Create app-->
                    <!--begin::Chat-->
                    <div class="d-flex align-items-center ms-3">
                        <!--begin::Menu wrapper-->
                        <div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white" id="kt_drawer_chat_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                        fill="black" />
                                    <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                    <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class="pulse-ring"></span>
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Chat-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title">

                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1 me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-permissions-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15"
                                    placeholder="Tìm kiếm sản phẩm" />
                            </div>

                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ route('productaddform') }}"><input type="button" value="Thêm mới sản phẩm"
                                    class="btn btn-light-primary">

                            </a>
                            <!--end::Button-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-1" role="alert">
                                <i class="mdi mdi-check-circle-outline me-1"></i> {{-- Sử dụng biểu tượng dấu tích --}}
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert">
                                <i class="mdi mdi-close-circle-outline me-1"></i> {{-- Sử dụng biểu tượng dấu X --}}
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif





                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                    <th class="min-w-125px">Mã sản phẩm</th>
                                    <th class="min-w-125px">Tên sản phẩm</th>
                                    <th class="min-w-125px">Hình ảnh</th>
                                    <th class="min-w-125px">Giá</th>
                                    <th class="min-w-125px">Số lượng</th>
                                    <th class="min-w-125px">Hành động</th>

                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><img src="{{ asset('uploaded/' . $item->img) }}" width="80"
                                                alt=""></td>
                                        <td>{{ number_format($item->price, 0, ',', '.') }} vnđ</td>
                                        <td>{{ $item->quantity }}</td>
                                        {{-- <td>{{ $item->sold }}</td> --}}
                                        {{-- <td>{{ $item->description }}</td> --}}
                                        <td>
                                            <a href="{{ route('productupdateform', $item->id) }}"><input
                                                    class="btn btn-warning" type="button" value="Sửa"></a>
                                            <a href="javascript:void(0);"
                                                onclick="confirmDelete({{ $item->id }})"><input type="button"
                                                    class="btn btn-danger" value="Xóa"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Content-->
        <!--end::Footer-->
    </div>
    <script>
        // function confirmDelete(url) {
        //     var r = confirm("Bạn có chắc chắn muốn xóa?");
        //     if (r == true) {
        //         var xhr = new XMLHttpRequest();
        //         xhr.open("GET", url, true);

        //         xhr.onload = function() {
        //             if (xhr.status == 200) {
        //                 alert('Xóa thành công.');
        //                 window.location.reload(); // Reload trang chỉ khi xóa thành công
        //             } else {
        //                 alert("Không thể xóa danh mục vì có sản phẩm liên kết.");
        //             }
        //         };

        //         xhr.send();
        //     } else {
        //         alert("Xóa đã bị hủy bỏ.");
        //     }
        // }
        function confirmDelete(id) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
                window.location.href = "{{ url('productdelete') }}/" + id;
            } else {
                alert("Thao tác đã được hủy");
            }
        }
    </script>
@endsection
