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
            <div class="main-content" style="height: 37.8em;">
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
                        <h1>Cập nhật tin tức</h1>
                    </div>
                    <div class="col2">

                        <form action="{{route('capnhattin')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="smp">
                                <div class="clean20"></div>
                                <div class="cleanfix"></div>
                                <div class="form-block">
                                    <label for="" class="md1">
                                        <legend>Tải ảnh lên</legend>
                                    </label>    
                                    <div class="mdfix"></div>
                                    <div  class="md2">
                                            <input multiple type="file" id="file-upload" required name="myfile" />
                                    </div>
                                </div>
                                <div class="cleanfix"></div>
                                <div class="form-block">
                                    <label for="" class="md1">Mô tả</label>
                                    <div class="mdfix"></div>
                                    <input type="text" class="md2" name="description">
                                </div>
                                <div class="cleanfix"></div>
                                <div class="form-block">
                                    <label for="" class="md1">Nội dung</label>
                                    <div class="mdfix"></div>
                                    <input type="text" class="md2" name="notes">
                                </div>
                                <div class="cleanfix"></div>
                                <div class="form-block">
                                    <label for="" class="md1">Loại tin</label>
                                    <div class="mdfix"></div>
                                    <input type="text" class="md2" name="type_new">
                                </div>
                                <div class="cleanfix"></div>
                                <div class="form-block he">
                                    <div style="width: 38%;margin-top: 10px; margin-left: 40px; text-align: center;"> 
                                        <ul style="line-height: 1;">
                                        <p style="font-size: 22px; color: #2196f3; text-align: left;">Loại tin tức</p>
                                            <li style="list-style: none; margin-top: 10px; text-align: left;">1. Mô hình phát triển</li>
                                            <li style="list-style: none; margin-top: 10px; text-align: left;">2. Trang chủ</li>
                                            <li style="list-style: none; margin-top: 10px; text-align: left;">3. Giấy chứng nhận</li>
                                            <li style="list-style: none; margin-top: 10px; text-align: left;">4. Dự án </li>
                                            <li style="list-style: none; margin-top: 10px; text-align: left;">5. Nhận xét</li>
                                        </ul>
                                    </div>
                                                
                                    <!-- <div class="md1 hh">
                                        <div class="select">
                                            <select>
                                                <option selected disabled>Loại tin tức</option>
                                                <option value="1" name="1">1. Mô hình phát triển</option>
                                                <option value="2" name="2">2. Trang chủ</option>
                                                <option value="3" name="3">3. Giấy chứng nhận</option>
                                                <option value="4" name="4">4. Dự án </option>
                                                <option value="4" name="5">5. Nhận xét </option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="md2">
                                        <button type="submit">Cập nhật</button>
                                    </div>
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

<?php

?>