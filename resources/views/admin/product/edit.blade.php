@extends('admin.layout')

@section('titlepage', 'Cập nhật sản phẩm')


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
                            <a href="../../demo7/dist/index.html" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item text-muted">Quản lý sản phẩm</li>
                        <li class="breadcrumb-item text-dark">Cập nhật sản phẩm</li>
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
                    <a href="../../demo7/dist/index.html" class="d-flex align-items-center">
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
                            @if (session('success'))
                                <div class="alert alert-success mb-1" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <i class="mdi mdi-checkbox-marked-outline mr-1"></i>
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger mb-1" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <i class="mdi mdi-close-circle-outline mr-1"></i>
                                    {{ session('error') }}
                                </div>
                            @endif
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ route('productlist') }}"><input type="button" value="Danh sách sản phẩm"
                                    class="btn btn-light-primary">

                            </a>
                            <!--end::Button-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>

                    <div class="card-body pt-0">
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form class="form" action="{{ route('productupdate') }}" method="post"
                                enctype="multipart/form-data" name="formadd">
                                @csrf
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                    <div class="fv-row mb-7">
                                        <label class="d-block fw-bold fs-6 mb-5">Ảnh sản phẩm</label>
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url(../assets/media/avatars/blank.png)">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url( {{ asset('uploaded/' . $product->img) }});">
                                            </div>

                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="img" accept=".png, .jpg, .jpeg" />
                                               
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                        <div class="form-text">Các loại tệp được phép: png, jpg, jpeg.</div>
                                        @error('img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Tên sản phẩm</label>
                                        <input type="text" name="name"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Tên sản phẩm" value="{{ $product->name }}" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Giá</label>
                                        <input type="number" name="price"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Giá tiền"
                                            value="{{ $product->price }}" />
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Số lượng</label>
                                        <input type="number" name="quantity"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Số lượng"
                                            value="{{ $product->quantity }}" />
                                        @error('quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <div class="fs-5 fw-bolder form-label mb-3">Mô tả
                                            <i class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7"></i>
                                        </div>
                                        <textarea class="form-control form-control-solid rounded-3" name="description" rows="4">{{ $product->description }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">Danh mục</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Country of origination"></i>
                                        </label>
                                        <select name="category_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                            <option value="0" selected>Vui lòng chọn danh mục</option>
                                            @foreach ($categories as $item)
                                                @if ($item->id == $product->category_id)
                                                    <option value="{{ $item->id }}" selected>{{ $item->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3"
                                        data-kt-permissions-modal-action="cancel">Hủy</button>
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="submit" value="Cập nhật" class="btn btn-primary">

                                </div>

                            </form>


                            <!--end::Form-->
                        </div>




                    </div>
                    <!--end::Card body-->
                </div>

                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->

        <!--end::Footer-->
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputs = document.querySelectorAll('input, textarea, select');

            inputs.forEach(function(input) {
                input.addEventListener('input', function() {
                    var error = this.closest('.fv-row').querySelector('.text-danger');
                    if (error) {
                        error.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
