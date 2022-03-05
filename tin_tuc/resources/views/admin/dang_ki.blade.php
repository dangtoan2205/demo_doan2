@extends('master')
@section('content')
	<div class="content">
        @if(count($errors)>0)
             <div class="alert alert-danger" style="color: white;">
                @foreach($errors->all() as $err)
                    {{$err}}
                @endforeach
            </div>
        @endif
        @if(Session::has('thanhcong'))
            <div class="alert alert-success" style="color: white;">{{Session::get('thanhcong')}}</div>
        @endif
        <div class="register_form" style="height:23.5em">
            <section class="login_content">

                <form action="{{route('addangki')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h1>Tạo tài khoản</h1>
                    <div>
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ Email" required="" name="email" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Nhập tên tài khoản" required="" name="fullname" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" required="" name="password" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" required="" name="re_password" />
                    </div>
                    <div>
                        <div class="btn-default">
                            <button class="btn subb" type="submit" style="border: none;background: #92a085;width: 100%">
                                Đăng kí
                            </button>
                        </div>
                                    
                    </div>
                    <div class="separator">
                        <p style="font-size: 14px;">Bạn đã có tài khoản!
                            <a href="{{route('addangnhap')}}" class="btn"> Đăng nhập </a>
                        </p>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <div class="clean20"></div>
@endsection

