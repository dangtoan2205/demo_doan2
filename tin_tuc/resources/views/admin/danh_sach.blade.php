<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tin tức</title>
    <link rel="stylesheet" href="source/css/backend.css">
    <link rel="shortcut icon" type="image/x-icon" href="source/image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="header-content">
                <div class="logo">
                    <a href="{{route('trangchu')}}">
                        <img src="source/image/logo-ft.png" alt="">
                    </a>
                </div>
                <div class="fixb" style="width: 50%"></div>
                <div class="user" style="width: 20%">

                    @if(Auth::check())
                        <li style="width: 125px;">Chào mừng <a href="" class="fixbody" style="color: yellow;"> {{Auth::user()->full_name}}</a></li>
                         <li><a href="{{route('logout')}}" class="fixbody"><i class="fixbody fas fa-sign-in-alt"></i></a></li>
                    @else
                        <li><a href="{{route('addangnhap')}}">Đăng nhập</a></li>
                    @endif
                </div>
            </div>
            <div class="main-content" style="height: auto;">
                <div class="header-row">
                    <div class="row1">
                        <div class="admin-logo">
                            <img src="source/image/admin/admin.png" alt="">
                            <ul>
                                <li>Chào mừng  {{Auth::user()->full_name}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cleanfix"></div>
                    <div class="col1">
                        <h1>Danh mục</h1>
                        <ul>
                            <li><a href="{{route('danhsachtin')}}">Danh sách tin tức</a></li>
                            <li><a href="{{route('capnhattin')}}" class="bm"> Cập nhật tin tức </a></li>
                            <li><a href="" class="bm">Chỉnh sửa tin tức</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="clean20"></div>
                    <div class="col1">
                        <h1>Danh sách tin tức</h1>
                    </div>
                    <div class="col2">
                        <form action="">
                        <!-- <input type=""> -->
                           <div class="col11">
                               <div class="clean10"></div>
                               
                               <div class="col12">
                                   <div class="col13 bacd">
                                        <div class="top10"> Stt </div>
                                       <div class="col13-top" style="width: 12%"> Loại tin </div>
                                       <div class="col13-top" style="width: 10%"> Ảnh </div>
                                       <div class="col13-top" style="width: 12%"> Mô tả </div>
                                       <div class="col13-top" style="width: 54%">  Nội dung </div>
                                       <div class=" top10" style="width: 7%"> Tùy chỉnh </div>
                                   </div>
                                   @foreach($product as $pr)
                                   <div class="col13 col14">
                                       <div class="top10 col13-bottom">{{$pr->id}}</div>
                                       <div class="col13-top col13-bottom" style="width: 12%">{{$pr->id_type}}</div>
                                       <div class="col13-top col13-bottom" style="width: 10%">
                                           <img src="{{$pr->image}}" alt="">
                                       </div>
                                       <div class="col13-top col13-bottom" style="width: 12%">
                                            {{$pr->description}}
                                       </div>
                                       <div class="col13-top col13-bottom" style="width: 54%">
                                            {{$pr->note}}
                                       </div>
                                       <div class="top10 col13-bottom" style="width: 7%">
                                            <a href="" style="margin-right: 20px;">
                                                <i class="fas bas fa-edit"></i>
                                            </a>
                                            <a href="{{route('xoatin',$pr['id'])}}">
                                                <i class="fas bas fa-trash"></i>
                                            </a>
                                       </div>
                                   </div>
                                   @endforeach
                                   <div class="clean20"></div>
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-content">
                <div class="copyright_area">
                    <p> © 2021 <strong> </strong> Design ❤️ by <a href="https://www.facebook.com/dang.toan23149605/" target="_blank"><strong>Đặng Ngọc Toàn</strong></a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>