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

    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            font-family: 'Roboto', sans-serif;
        }

        .table thead th {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-align: left;
            text-transform: uppercase;
        }

        .table tbody tr {
            border-bottom: 2px solid #f2f2f2;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table tbody td {
            padding: 10px 15px;
            color: #333;
            font-size: 15px;
        }

        .table tbody tr:hover {
            background-color: #eaf6e8;
            cursor: pointer;
        }

        .table thead th:first-child,
        .table tbody td:first-child {
            padding-left: 20px;
        }

        .table thead th:last-child,
        .table tbody td:last-child {
            padding-right: 20px;
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
                                @if(count($cart) > 0)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã Sách</th>
                                                <th class="text-center">Tên Sách</th>
                                                <th class="text-center">Tác giả</th>
                                                <th class="text-center">Số lượng</th>
                                                <th class="text-center">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart as $item)
                                                <tr>
                                                    <td>{{ $item['maSach'] }}</td>
                                                    <td>{{ $item['tenSach'] }}</td>
                                                    <td>{{ $item['author'] }}</td>
                                                    <td>{{ $item['soLuong'] }}</td>
                                                    <td class="text-center">
                                                        <form action="{{ route('cart.delete', $item['id']) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert alert-info text-center">
                                        Bạn chưa quan tâm sách nào.
                                    </div>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    <a href="{{ route('products') }}" class="btn btn-success">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Quay về
                    </a>
                    
                    <a href="#" class="btn btn-primary pull-right @if(count($cart) === 0) disabled @endif" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Tạo phiếu <span class="glyphicon glyphicon-chevron-right"></span></a>
                    




                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tạo phiếu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>



                                <div class="modal-body">
                                    <form class="form" action="{{ route('admin.phieumuon.insertPhieuMuon') }}"
                                        method="post">
                                        @csrf

                                        <!-- Thông tin khách hàng và phiếu mượn -->
                                        <div class="d-flex justify-content-between align-items-center mb-7">
                                            <div class="w-50 pe-3 mx-1">
                                                <div class="fv-row mb-7">
                                                    <div class="mb-3 d-none">
                                                        <label class="form-label">Mã Khách Hàng</label>
                                                        <input type="text" name="userId" class="form-control"
                                                            value="{{ Auth::user()->id }}" readonly />
                                                        @error('userId')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Tên Khách Hàng</label>
                                                        <input type="text" name="userName" class="form-control"
                                                            value="{{ Auth::user()->name }}" readonly />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Số điện thoại</label>
                                                        <input type="text" name="phone" class="form-control"
                                                            value="{{ old('phone') }}" />
                                                        @error('phone')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="w-50 pe-3 mx-1">
                                                <div class="mb-3">
                                                    <label class="form-label">Ngày Mượn</label>
                                                    <input type="date" name="borrowed_at" class="form-control"
                                                        value="{{ old('borrowed_at') }}" />
                                                    @error('borrowed_at')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Ngày Trả</label>
                                                    <input type="date" name="returned_at" class="form-control"
                                                        value="{{ old('returned_at') }}" />
                                                    @error('returned_at')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 d-none">
                                                <label class="form-label">Trạng thái</label>
                                                <select name="status" class="form-control">
                                                    <option value="1" selected>Chưa xác nhận</option>
                                                </select>
                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


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
                                                            <input type="number" name="quantity_in_card[]"
                                                                class="form-control" value="{{ $item['soLuong'] }}"
                                                                min="1" />
                                                            <input type="hidden" name="bookId[]"
                                                                value="{{ $item['maSach'] }}" />
                                                            <input type="hidden" name="bookName[]"
                                                                value="{{ $item['tenSach'] }}" />
                                                        </td>
                                                        <td><input type="checkbox" name="addBook[]"
                                                                value="{{ $index }}" checked /></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-bs-dismiss="modal">Hủy</button>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy tất cả các nút xóa
        var deleteButtons = document.querySelectorAll('.delete-item');

        // Thêm sự kiện click cho mỗi nút xóa
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.getAttribute('data-id');

                // Gửi yêu cầu Ajax để xóa sản phẩm
                if (confirm('Bạn có chắc muốn xóa sản phẩm này không?')) {
                    fetch('/cart/' + itemId, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json'
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Xóa dòng sản phẩm khỏi bảng
                            this.closest('tr').remove();
                            alert(data.success);
                        } else {
                            alert(data.error);
                        }
                    })
                    .catch(error => console.error('Error:', error));
                }
            });
        });
    });
</script>
