@section('Home/login')
@extends('Home/home')
<body class="authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
<div class="card-body p-4">
    <div class="text-center w-75 m-auto">
        <a href="index.html">
            <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="26"></span>
        </a>
        <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
    </div>

    <h5 class="auth-title">Đăng Nhập</h5>
     @if($errors->any())
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
            <ul>
                @foreach($errors->all() as $errors) 
                <li>{{ $errors}}</li>
                @endforeach
            </ul>
      </div>
     @endif
    <form action="{{route('xu-ly-login')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="ten_dang_nhap">Tên đăng nhập</label>
            <input class="form-control" type="text" id="ten_dang_nhap"  name="ten_dang_nhap" >
        </div>

        <div class="form-group mb-3">
            <label for="mat_khau">Mật khẩu</label>
            <input class="form-control" type="password"  id="mat_khau" name="mat_khau">
        </div>

        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox checkbox-info">
                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
            </div>
        </div>

        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block" type="submit"> Đăng nhập </button>
        </div>

    </form>

    <div class="text-center">
        <h5 class="mt-3 text-muted">Sign in with</h5>
        <ul class="social-list list-inline mt-3 mb-0">
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
            </li>
        </ul>
    </div>

</div>
<div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
@endsection