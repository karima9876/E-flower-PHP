
<?php



    $conn=mysqli_connect("localhost","root","","e-flowerphp");
      if (isset($_GET['id'])) {
        $id=$_GET['id'];
        // print_r($id);
        $query = "select * from flower where id='$id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
    }
    



?>









<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLOG DETAILS</title>
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
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

        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="barnd-logo text-center ptb-40">
                            <a href="index.php" class="logo">
                                <!-- <img src="images/logo.png" class="img-fluid" alt=""> -->
                                <h1>"Take Time To Smell The Flowers"</h1>
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
                                        <a href="index.php">Home</a>
                                     
                                    </li>
                                     <li><a href="admin/index.php">Admin Panel</a></li>
                                     <li><a href="purchase.php">Purchase Details</a></li>
                           
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 trvel-user">
                        <ul class="d-flex justify-content-end">
                           
                            <!-- <li class="blog-src-btn">
                                <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul  class="blog-secrch">
                                    <li>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search your article...">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">SEARCH</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->
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
                        <h5 class="fz-26 fw-5">Flower Details</h5>
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

        <!-- Start blog area -->
        <div class="blog-area bg-2">
            <div class="container">
                <div class="row wrap-reverse">
                    
                    <div style="width: 100%;" class="col-lg-8">
                        
                
               
                        <!-- Start article section -->



                        <div class="article">
                            <img src="admin/<?php echo $row['image'] ?>" alt="" class="img-fluid">
                          
                            <!-- <ul class="article-user-info">
                                <li class="list-inline-item ml-10"><a href="#"><i class="fa fa-comment"></i> 24 Comments</a></li>
                            </ul> -->
                            <!-- <h3><a href="#"><?php echo $row['title']; ?></a></h3> -->
                            <h4 class="mtb-20"><a href="#"><?php echo $row['title']; ?></a></h4>
                            <p><?php echo $row['description']; ?></p>
                            
                            

                            

                        </div>

                        <br>
                        <br>
                        <br>

                        <!-- start comment area -->

                        <?php

                        if(isset($_POST['submit'])) {

//                            print_r($_POST);
                            $name = $_POST['cName'];
                            $mail = $_POST['email'];
                            $massage = $_POST['massage'];
                            $queryC = "INSERT INTO comment(blogId,cName,mail,message) VALUES('$id','$name','$mail','$massage')";

//                            print_r($queryC);
                            if (mysqli_query($conn, $queryC)) {

//                                echo  '<div ... onclick="location.href=\''.($id).'\';">..</div>';
                               // header("refresh: 1; url=blog-details.php");
                                //header("refresh:0.000001;url=./blog-details.php/".$id);
                                echo '<script>alert("Successful!!");location.href="blog-details.php?id=".$id.";</script>';

                            } else {
                                echo '<script>alert("Unsuccessful!!");location.href="blog-details.php?id=<?php echo $id;?>";</script>';
                            }
                        }

                        ?>
                        
                        
                        <?php

                            $queryC = "select * from  comment where blogId='$id'";
                            $resultC = mysqli_query($conn, $queryC);
                        $queryCountCommentId = "select count(*) as count_comment from  comment where blogId='$id'";
                        $resultCount = mysqli_query($conn, $queryCountCommentId);
                        $dataCount = mysqli_fetch_assoc($resultCount);

                        ?>
                        <?php
                        // start reply add
                        if(isset($_POST['submitReply'])) {

                            // print_r($_POST);
                            $comment_id = $_POST['comment_id'];
                            //  print_r($comment_id);
                            $name = $_POST['rName'];
                            $mail = $_POST['rMail'];
                            $message = $_POST['rMess'];
                            $queryC = "INSERT INTO replies(comment_id,rName,rMail,rMessage) VALUES('$comment_id','$name','$mail','$message')";

//                            print_r($queryC);
                            if (mysqli_query($conn, $queryC)) {

//                                echo  '<div ... onclick="location.href=\''.($id).'\';">..</div>';
                                // header("refresh: 1; url=blog-details.php");
                                //header("refresh:0.000001;url=./blog-details.php/".$id);
                                echo '<script>alert("Successful!!");location.href="blog-details.php?id="'.$comment_id.'";</script>';

                            } else {
                                echo '<script>alert("Unsuccessful!!");location.href="blog-details.php?id=".$comment_id.";</script>';
                            }
                        }

                        ?>


                        <div class="comments-area">
                            <h4><?php  echo $dataCount['count_comment']; ?> <?php if (empty($dataCount['count_comment'])) echo "Comment"; else echo  "Comments"; ?>   </h4>
                            <?php  while ($rowC = mysqli_fetch_assoc($resultC)) { ?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                              <?php 
                                              // print_r( $rowC['mail']);
                                               $cMail= $rowC["mail"];
                                               
                                                $queryCImage = "select * from register  where email='$cMail' limit 1";
                                                $resultCImage = mysqli_query($conn, $queryCImage);
                                                
                                                $resultCImage=mysqli_fetch_assoc( $resultCImage);
                                                //print_r( $resultCImage['image']);

                                            ?>
                                           
                                        <?php if(!empty($resultCImage['image'])){?>
                                            <img style="height: 70px;width: 70px" src="<?php echo $resultCImage['image']?>" alt="">
                                        <?php }else{?>
                                               <img style="height: 70px;width: 70px" src="pic/dummy_pic.jpg" alt="">
                                        <?php }?>
                                        
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#"> <?php if (!empty( $rowC['cName'])) echo $rowC['cName']; ?></a></h5>
                                            <p class="date"> <?php if (!empty( $rowC['comment_time'])) echo $rowC['comment_time']; ?> </p>
                                            <p class="comment">
                                                <?php if (!empty( $rowC['message'])) echo $rowC['message']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a  onclick="showingReplySec(<?php echo $rowC['id'];?>)" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>

                            <div class="<?php echo $rowC['id'];?>">

                            </div>
                                <?php
                                $rep_id =$rowC['id'];
                               // print_r($rep_id);
                                $queryReply = "select * from  replies where comment_id='$rep_id'";
                                //print_r($queryReply);
                                $resultReply = mysqli_query($conn, $queryReply);
                               // $queryCountReplyId = "select count(*) as count_reply from  replies where comment_id='$rep_id'";
                               // $resultCountReply = mysqli_query($conn, $queryCountReplyId);
                                //$dataCountReply = mysqli_fetch_assoc($resultCountReply);

                                ?>

                            <?php  while ($rowR = mysqli_fetch_assoc($resultReply)) { ?>
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <?php 
                                              // print_r( $rowC['mail']);
                                               $rMail= $rowR["rMail"];
                                               
                                                $queryRImage = "select * from register  where email='$rMail' limit 1";
                                                $resultRImage = mysqli_query($conn, $queryRImage);
                                                
                                                $resultRImage=mysqli_fetch_assoc( $resultRImage);
                                                //print_r( $resultCImage['image']);

                                            ?>
                                        <div class="thumb">
                                            
                                             <?php if(!empty($resultRImage['image'])){?>
                                            <img style="height: 70px;width: 70px" src="<?php echo $resultRImage['image']?>" alt="">
                                        <?php }else{?>
                                              <img style="height: 70px;width: 70px" src="pic/dummy_pic.jpg" alt="">
                                        <?php }?>

                                        </div>
                                        <div class="desc">
                                            <h5><a href="#"> <?php if (!empty( $rowR['rName'])) echo $rowR['rName']; ?></a></h5>
                                            <p class="date"> <?php if (!empty( $rowR['reply_time'])) echo $rowR['reply_time']; ?> </p>
                                            <p class="comment">
                                                <?php if (!empty( $rowR['rMessage'])) echo $rowR['rMessage']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                             <?php }?>
                            <?php }?>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comment-area">
                                    <h5>Leave A Comment</h5>
                                    <form  method="POST" action="blog-details.php?id=<?php echo $id;?>" enctype="multipart/form-data">

                                        <div class="form-group row mb-30">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control form-control-input" placeholder="Your Name" name="cName">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control form-control-input" placeholder="Your Mail" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <textarea class="form-control" placeholder="Your Comment" name="massage" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-30">
                                            <div class="col-lg-6">
                                                <button type="submit" name="submit" class="btn btn-primary comment-submit-btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>            
        </div>

        <!-- Start client section -->
        <div class="client-area client-area-style client-area-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                        <div class="section-title text-center">
                            <h4 class="fw-7">I Am Featured In Different Place</h4>
                            <p class="fz-16 fw-4">Flowers are used by us to provoke the feelings of love and happiness because they have the power to make people happy and cheerful. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/01.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/02.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/03.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/04.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/05.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/06.png" alt="" class="img-fluid"></a></div> -->
                </div>
            </div>
        </div>

    </div>

    <script>
        function showingReplySec(id){
            var comment_id =id;
          //  console.log('comment id'+comment_id);
            var replyBox ='   <div style="margin-left: 10%;" class="comment-list left-padding" id="replySec">\n' +
                '                                        <h5>Leave A reply</h5>\n' +
                '                                       <p id="comment_id"></p>\n' +
                '                                        <br>\n' +
                '                                        <form  method="POST" action="blog-details.php?id=<?php echo $id;?>" enctype="multipart/form-data">\n' +
                '\n' +
                '                                       <input type="hidden" class="form-control form-control-input" id="comment_id" value="'+comment_id+'"  name="comment_id">\n' +

                '                                            <div class="form-group row mb-30">\n' +
                '                                                <div class="col-lg-6">\n' +

                '                                                    <input type="text" class="form-control form-control-input" placeholder="Your Name" name="rName">\n' +
                '                                                </div>\n' +
                '                                                <div class="col-lg-6">\n' +
                '                                                    <input type="email" class="form-control form-control-input" placeholder="Your Mail" name="rMail">\n' +
                '                                                </div>\n' +
                '                                            </div>\n' +
                '                                            <div class="form-group row">\n' +
                '                                                <div class="col-lg-12">\n' +
                '                                                    <textarea class="form-control"   rows="8" name="rMess"></textarea>\n' +
                '                                                </div>\n' +
                '                                            </div>\n' +
                '                                            <div class="form-group row mt-30">\n' +
                '                                                <div class="col-lg-6">\n' +
                '                                                    <button type="submit" name="submitReply" class="btn btn-primary comment-submit-btn">Submit</button>\n' +
                '                                                </div>\n' +
                '                                            </div>\n' +
                '                                        </form>\n' +
                '\n' +
                '                            </div>';
            $('.'+id).html(replyBox);

        }

    </script>
</body>

</html>
<?php include("footer.php");?>