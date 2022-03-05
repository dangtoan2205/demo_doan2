@extends('master')
@section('content')


<div class="content">
                    <div class="content_title">
                        <h1>Nhận xét</h1>
                    </div>
                    <div class="clean10"></div>
                    <div class="content_main">
                        <div class="clean10"></div>
                        
                        <div class="nx-body">
                            <div class="nx-col4">
                                <h2 class="main_h2">Bình luận</h2>
                                <div class="clean20"></div>
                                @foreach($comment as $pr)
                                <div class="nx-1">
                                    <ul>
                                        <li style="width: 22%">
                                            <img src="source/image/admin/admin.png" alt="" style="width: 95%">
                                        </li>
                                        <div style="width: 78%">
                                            <div class="t1"><i class="fas as fa-user"></i>
                                                <a href="">{{$pr->full_name}}</a>     
                                            </div>
                                            <div class="t1"> <i class="far as fa-address-card"></i></i>
                                                <a href="">{{$pr->email}}</a>
                                            </div>
                                            <div class="t1">Nội dung:
                                                <p>
                                                    {{$pr->note}}                   
                                                </p>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                @endforeach
                                <div class="clean10"></div>

                            
                            </div>

                            <div class="nx-col6">
                                <h2 class="main_h2">Thêm nhận xét</h2>
                                <div class="clean20"></div>

                                <form action="{{route('nhanxet')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <p>  
                                        <label> Họ và tên *</label>
                                         <input name="name" placeholder="Vui lòng nhập họ và tên của bạn" type="text"> 
                                     </p>
                                     <p>  
                                        <label> Email *</label>
                                         <input name="email" placeholder="Vui lòng nhập địa chỉ Email của bạn" type="email"> 
                                     </p>
                                     <div class="contact_textarea">
                                        <label>Nội dung phản hồi</label>
                                        <textarea placeholder="Nội dung" name="notes" class="form-control2"></textarea>     
                                    </div>
                                    <button type="submit">Bình luận</button>
                                    <div class="clean10"></div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>


@endsection