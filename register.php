<?php
            session_start();
            if(isset($_POST['submit']))
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $password=$_POST['pass'];
                $confrim=$_POST['confrim'];
                $image=$_FILES['image'];
                 // print_r($image);
                  $image_dir="pic/";
                  $target_file=$image_dir.basename($_FILES['image']['name']);
                 $file_type=pathinfo($target_file,PATHINFO_EXTENSION);
                if ($file_type == "JPEG" ||$file_type == "jpeg" || $file_type== "png" || $file_type=="jpg" ||$file_type == "JPG" || $file_type=="PNG") 
                {




                //echo '<script>alert("Name is '.$name.'")</script>';

                if($name && $email && $password && $confrim && $image){
            if($password==$confrim){



  //               if (empty($username)) {
  //   array_push($errors, "Username is required");
  // }
  // if (empty($password)) {
  //   array_push($errors, "Password is required");
  // }

                
                
                $conn=mysqli_connect("localhost","root","","e-flowerphp");
                $query="INSERT INTO register(name,email,password,image) VALUES('$name','$email','$password','$target_file')";
                if(mysqli_query($conn,$query)){
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                    echo '<script>alert("Registration Successfully Completed!!");location.href="admin/index.php"</script>';
                }
                else{
                    echo '<script>alert("UnSuccessfully!!")</script>';
                }
            }
        }
        
    }
}

        ?>
        <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLOG</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Swiper Master Css -->
    <link rel="stylesheet" href="vendors/swiper-master/css/swiper.min.css">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Slicknav Master -->
    <link rel="stylesheet" href="vendors/slicknav-master/slicknav.min.css">
    <!-- Site Style Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr Js -->
    <script src="vendors/modernizr-js/modernizr.js"></script>
</head>

<body>

    <!-- ================ Start Header Section ================ -->

        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="barnd-logo text-center ptb-40">
                            <a href="index.php" class="logo">
                                <img src="" class="img-fluid" alt="">
                                <h1 style="color: #1c7a99;">"How Does Your Garden Grow?"</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start sitemenu -->
        <div class="sitemenu" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9 col-6 offset-lg-2">
                        <nav class="navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul id="menubar" class="navbar-nav">
                                    <li>
                                        <a href="index.php">home</a>
                                       <!--  <ul>
                                            <li><a href="index-2.html">home 2</a></li>
                                            <li><a href="index-3.html">home 3</a></li>
                                        </ul> -->
                                    </li>
                                     <li><a href="admin/index.php">Admin Panel</a></li>
                                        
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 trvel-user">
                        <ul class="d-flex justify-content-end">
                            <!-- <li class="lang">Eng <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>Ban</li>
                                </ul>
                            </li> -->
                            <!-- <li class="blog-src-btn">
                                <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul  class="blog-secrch">
                                    <li>
                                        <form class="search-post" action="search.php" method ="GET">
                                        <div class="input-group">
                                            
                                            <input type="text" name="search" class="form-control" placeholder="Search your article...">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">Search</button>
                                            </div>
                                        
                                        </div>
                                    </form>
                                    </li>
                                </ul>
                            </li>  -->
                            <li class="user-option">
                                <i class="fa fa-user"></i>
                                <ul>
                                    <li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                                    <li><a href="register.php"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ================ Start Main Section ================ -->
    <div class="main" role="main">

        <!-- Start page title section -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="fz-26 fw-5">Register</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center d-inline-flex">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- start register form -->
        <div class="register-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-12">
                        <div class="register">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 col-12">
                                    <div class="section-title text-center">
                                        <h4 class="fw-7">Create Your Accounts</h4>
                                        <!-- <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                                    <form  method="POST" action="register.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name..">
                                        </div>
                                        <div class="form-group mt-30">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your Email..">
                                        </div>
                                        <div class="form-group mt-30">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="form-control" placeholder="Your Password..">
                                        </div>
                                        <div class="form-group mt-30">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confrim" class="form-control" placeholder="Password Again..">
                                        </div>
                                        <div class="form-group mt-30">
                                            <label>IMAGE</label>
                                            <input type="file" name="image" class="form-control" placeholder="image">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block reg-btn">Submit Now</button>
                                    </form>
                                    <p class="mt-20 text-center already-account">Already Have an Account ? <a href="login.php">Log in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
</body>

</html>
<?php include("footer.php");?>