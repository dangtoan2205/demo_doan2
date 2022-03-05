@extends('master')
@section('content')
	<div class="content">
        <div class="register_form" style="height:23.5em">
            <section class="login_content">
                <form action="" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">  
                    <h1>Đăng nhập</h1>
                    @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}"><a style="margin-left: 10em;font-size: 18px;">{{Session::get('message')}}</a></div>
                    @endif
                    <div>
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ Email" required="" name="email" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" required="" name="password" />
                    </div>
                    <div>
                        <div class="btn-default">
                            <button class="btn subb" type="submit" style="border: none;background: #92a085;">
                                Đăng nhập
                            </button>
                        </div>
                    </div>
                    <div class="separator">
                        <p style="font-size: 14px;">Bạn chưa có tài khoản!
                            <a href="{{route('addangki')}}" class="btn" style="display: none;"> Đăng kí </a>
                        </p>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <div class="clean20"></div>
@endsection