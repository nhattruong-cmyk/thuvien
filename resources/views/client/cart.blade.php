@extends('client.layout')

@section('content')
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
                    <a href="{{ route('products') }}" class="btn btn-success"><span
                            class="glyphicon glyphicon-arrow-left"></span>&nbsp;Quay về</a>
                    <a href="#" class="btn btn-primary pull-right">Tạo phiếu<span
                            class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>

        </div>
    </div>

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
    </style>
@endsection
