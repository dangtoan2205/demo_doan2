<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="source/image/logo.png">
    <title>Công ty Cổ phần tập đoàn công nghệ ADT</title>
    <link rel="stylesheet" href="source/css/signin.css">
    <link rel="stylesheet" href="source/css/up_date.css">
    <link rel="stylesheet" href="source/css/backall.css">
    <!-- new_update -->
    
    <!-- <link rel="stylesheet" href="source/css/style2.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">

            <!-- start header -->
            @include('header')

            <!-- start main -->
            <div class="main_content">
                @yield('content')
            </div>
            
            <!-- start footer -->
            @include('footer')
        </div>
    </div>
</body>
</html>
<!-- <script>
    const reader = new FileReader()
   const fileUpload = document.querySelector("#file-upload");
    fileUpload.addEventListener("change", (event) => {
	const { files } = event.target;
	
	console.log("files", files)
    }) 
</script> -->
<script>
    
    const reader = new FileReader()

fileUpload.addEventListener("change", (event) => {
	const files = event.target.files;
	
	reader.readAsDataURL(files[0])
	
	reader.addEventListener("load", (event) => {
			const url = event.target.results
			
			document.querySelector("img").src ="file:///C:/xampp/htdocs/tin_tuc/public/source/image/blog";
	})
})
</script>