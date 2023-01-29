<?php
        
              $conn=mysqli_connect("localhost","root","","e-flowerphp");

            if(isset($_POST['Save']))
            {

   //print_r($_POST);
                //print_r('jsdjsdjkd');

                $Name=$_POST['name'];
                $Phone=$_POST['phone'];
                $Description=$_POST['description'];
                $Transaction_id=$_POST['transaction_id'];
                $Total_amount=$_POST['total_amount'];
                $Address=$_POST['address'];
                {
                $query="INSERT INTO purchase(name,phone,description,transaction_id,total_amount,address) VALUES('$Name','$Phone','$Description','$Transaction_id','$Total_amount','$Address')";
               
                if (mysqli_query($conn,$query)) {
                
                  echo '<script>alert("Successfully Added!!");location.href="index.php"</script>';
                }
                else{
                  echo "<script>alert('Unsuccessful!!');location.href='index.php';</script>";
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
                                <h1 style="color: #1c7a99;">"How Does Purchase Flower?"</h1>
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
                        <h5 class="fz-26 fw-5">Purchase</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center d-inline-flex">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Purchase</li>
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
                                    <!-- <p style="margin-left:200px;margin-bottom:10px;color:red;font-size:20px">Admin bKash A/C:01703986069</p> -->
                                        <h4 class="fw-7"> Admin bKash A/C:01703986069 </h4>
                                        <p class="fz-16 fw-4"> If you want to purchase flowers and want to know about any information flowers details  you have to contact with Admin. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            
                                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                                    <div style="background: greenyellow; display: inline;margin-bottom: 5px;"><?php if (isset($_SESSION['message'])) echo $_SESSION['message'];?></div>
                                   <form  method="POST" action="purchase.php" enctype="multipart/form-data">
                                        <div class="form-group mt-30">
                                            
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name..">
                                        </div>
                                        <div class="form-group mt-30">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Your Address ..">
                                        </div><div class="form-group mt-30">
                                            <label>Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone..">
                                        </div>
                                        <div class="form-group mt-30">
                                            <label>Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="Description..">
                                        </div><div class="form-group mt-30">
                                            <label>Transaction Id</label>
                                            <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ..">
                                        </div><div class="form-group mt-30">
                                            <label>Total Amount</label>
                                            <input type="text" name="total_amount" class="form-control" placeholder="Total Amount..">
                                        </div>
                                       
                                        <button type="submit" name="Save" class="btn btn-primary btn-block reg-btn">Purchase</button>
                                    </form>
                                    
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
