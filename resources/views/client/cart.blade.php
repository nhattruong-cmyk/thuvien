@extends('client.layout')

@section('content')
<style>
    .img-cart {
        display: block;
        max-width: 90%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }

    table tr td {
        border: 1px solid #FFFFFF;
    }

    table tr th {
        background: #eee;
    }

    .modal-dialog {
        max-width: 90%;
        width: 70%;
    }
</style>

<div class="container">
    <div class="my-5">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>

        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            <img class="img-circle img-thumbnail" src="https://bootdey.com/img/Content/user_3.jpg">
                            {{ Auth::user()->name }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã Sách</th>
                                        <th>Tên Sách</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td>{{ $item['maSach'] }}</td>
                                            <td>{{ $item['tenSach'] }}</td>
                                            <td>{{ $item['soLuong'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="{{ route('products') }}" class="btn btn-success">
                    <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Quay về
                </a>

                <a href="#" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Tạo phiếu <span class="glyphicon glyphicon-chevron-right"></span></a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tạo phiếu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="form" action="{{ route('admin.phieumuon.insertPhieuMuon') }}" method="post">
                                    @csrf

                                    <!-- Thông tin khách hàng và phiếu mượn -->
                                    <div class="mb-3">
                                        <label class="form-label">Mã Khách Hàng</label>
                                        <input type="text" name="userId" class="form-control" value="{{ Auth::user()->id }}" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tên Khách Hàng</label>
                                        <input type="text" name="userName" class="form-control" value="{{ Auth::user()->name }}" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" />
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ngày Mượn</label>
                                        <input type="date" name="ngayMuon" class="form-control" value="{{ old('ngayMuon') }}" />
                                        @error('ngayMuon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ngày Trả</label>
                                        <input type="date" name="hanTra" class="form-control" value="{{ old('hanTra') }}" />
                                        @error('hanTra')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Trạng thái</label>
                                        <select name="trangthai" class="form-control">
                                            <option value="1" selected>Chưa xác nhận</option>
                                        </select>
                                        @error('trangthai')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Danh sách sách -->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                        <thead>
                                            <tr>
                                                <th>Mã Sách</th>
                                                <th>Tên Sách</th>
                                                <th>Số lượng</th>
                                                <th>Thêm vào phiếu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart as $index => $item)
                                                <tr>
                                                    <td>{{ $item['maSach'] }}</td>
                                                    <td>{{ $item['tenSach'] }}</td>
                                                    <td>
                                                        <input type="number" name="soluong[]" class="form-control" value="{{ $item['soLuong'] }}" min="1" />
                                                        <input type="hidden" name="maSach[]" value="{{ $item['maSach'] }}" />
                                                        <input type="hidden" name="tenSach[]" value="{{ $item['tenSach'] }}" />
                                                    </td>
                                                    <td><input type="checkbox" name="addBook[]" value="{{ $index }}" checked /></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Hủy</button>
                                        <input type="submit" value="Thêm mới" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
