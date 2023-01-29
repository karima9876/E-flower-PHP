<!-- <?php
    // session_start();
    // if (isset($_SESSION['email'])) {
        // header("location:admin/index.php");
    
?> -->

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
                                     <li><a href="purchase.php">Purchase Details</a></li>
                                        
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
                            <li class="blog-src-btn">
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
                            </li> 
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
                        <h5 class="fz-26 fw-5">Flower grid</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center d-inline-flex">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Flower</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        


        <?php

$conn=mysqli_connect("localhost","root","","e-flowerphp");
$limit=6;
if(isset($_GET['page'])){
$page_number=$_GET['page'];
}else{
  $page_number=1;
}
$offset=($page_number-1) * $limit;
$query = "SELECT * from flower ORDER BY id DESC LIMIT {$offset},{$limit}";
$result=mysqli_query($conn,$query) or die("Query failed.");
$count=mysqli_num_rows($result);
//$count=1;



?>



        <!-- Start blog grid layout -->
         <div class="blog-grid-layout bg-2">
            <div class="container">
                <div class="row">

                  <?php
                        if($count>0){
                        while ($row = mysqli_fetch_assoc($result)) { 
                  ?>

                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="single-article p-0 wrap-reverse">
                            <div class="article-post-img">
                                <img  width="300px" height="300px"  src="admin/<?php echo $row['image'] ?>" />
                            </div>
                            <div class="article-post text-left mt-35">
                                <h3><a href="#"><?php echo $row['title']; ?></a></h3>

                                <p style="word-wrap: break-word;">
                                    <?php 
                                    $string = mb_substr($row['description'], 0, 100, 'utf8').'...';
                                    echo $string;
                                   

                                    ?> 

                                </p>
                                <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="txt-clr-1 read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
               </div>
                
                <?php }

                        }else{
                            echo "No record found";
                        }
                    
                        ?>
                 </div>
               </div>

                 <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <?php 
                  $conn=mysqli_connect("localhost","root","","e-flowerphp");
                  $query2="SELECT * FROM flower";
                  $result2=mysqli_query($conn,$query2);
                  if(mysqli_num_rows($result2)){
                    $total_records=mysqli_num_rows($result2);
                    $total_page=ceil($total_records/$limit);
                    echo "<ul class='pagination justify-content-center'>";
                    if($page_number>1){
                       echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page_number-1).'">prev</a></li>';
                     
                    }
                    
                    for ($i=1; $i <=$total_page ; $i++) { 

                      if($i == $page_number){
                        $active="active";
                      }else{
                        $active="";
                      }
                      echo '<li class="page-item" class='.$active.'><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
                      # code...
                    }
                    if($total_page>$page_number){
                    echo '<li class="page-item"><a class="page-link"  href="index.php?page='.($page_number+1).'">next</a></li>';
                    echo "</ul>";
                  }
                }



                   ?>

                            
                        </nav>

                   
            </div>
        </div>
 </div>
        

        <!-- Start client section -->
        <div class="client-area client-area-3 client-area-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-lg-3 col-md-2 col-12">
                        <div class="section-title text-center">
                            <h4 class="fw-7"> I Am Featured In </h4>
                            <p class="fz-16 fw-4"> Flowers are used by us to provoke the feelings of love and happiness because they have the power to make people happy and cheerful.</p>
                            

                        </div>
                    </div>
                </div>
                 <div class="row">

                     <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/ldli.jpg" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/11.jpg" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/j1.jpg" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/10.jpg" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/8.jpg" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/9.jpg" alt="" class="img-fluid"></a>
                        



                    </div>
 
                </div>

            </div>
        </div>

    </div>

             
</body>
</html>
<?php include("footer.php");?>