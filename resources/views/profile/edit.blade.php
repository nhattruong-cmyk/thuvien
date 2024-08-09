@extends('client.layout')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name">{{ $user->name }}</h5>
                                <h6 class="user-email">{{ $user->email }}</h6>
                            </div>
                            <div class="about">
                                <ul class="nav navbar-nav menu_nav ml-auto">
                                    <li class="nav-item"> <a class="btn btn-danger" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                            xuất</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <form method="POST" class="" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h4 class="mb-2 text-primary">Thông tin cá nhân</h4>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Tên tài khoản</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Tên tài khoản" value="{{ old('name', $user->name) }}" required>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Địa chỉ Email" value="{{ old('email', $user->email) }}" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <a href="{{ route('auth.change-password') }}">Đổi mật khẩu</a>
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm mt-2">Cập Nhật</button>

                            </div>

                        </div>
                    </div>
                </form>
                <form method="POST" action="{{ route('profile.requestDelete') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="btn btn-warning">Gửi Yêu Cầu Xóa Tài Khoản</button>
                </form>
                
            </div>


        </div>
    </div>

    <style>
        body {
            margin: 0;

            padding-top: 100px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }

        .gutters {
            padding: 0 90px;
        }

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }

        .account-settings .about p {
            font-size: 0.825rem;
        }

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }
    </style>
@endsection
