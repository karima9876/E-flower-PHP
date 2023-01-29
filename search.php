

<?php include"header.php";?>
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
                    if(isset($_GET['search'])){
                    $search=mysqli_real_escape_string($conn,$_GET['search']);
                    
                    ?>


                   <h2 style="margin-left: 14%;color: red;margin-top: 25px;" class="page-heading">Search:<?php echo $search; ?></h2>
        


        <?php

// $conn=mysqli_connect("localhost","root","","e-flowerphp");
$limit=6;
if(isset($_GET['page'])){
$page_number=$_GET['page'];
}else{
  $page_number=1;
}
$offset=($page_number-1) * $limit;
$query = "SELECT * from flower WHERE title LIKE '%{$search}%' ORDER BY id DESC LIMIT {$offset},{$limit}";
$result=mysqli_query($conn,$query) or die("Query failed.");
$count=mysqli_num_rows($result);



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
                                    $string = mb_substr($row['description'], 0, 20, 'utf8').'...';
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
                  $query2="SELECT * FROM flower WHERE title LIKE '%{$search}%'";
                  $result2=mysqli_query($conn,$query2);
                  if(mysqli_num_rows($result2)){
                    $total_records=mysqli_num_rows($result2);
                    $total_page=ceil($total_records/$limit);
                    echo "<ul class='pagination justify-content-center'>";
                    if($page_number>1){
                       echo '<li class="page-item"><a class="page-link" href="search.php?search='.$search.'&page='.($page_number-1).'">prev</a></li>';
                     
                    }
                    
                    for ($i=1; $i <=$total_page ; $i++) { 

                      if($i == $page_number){
                        $active="active";
                      }else{
                        $active="";
                      }
                      echo '<li class="page-item" class='.$active.'><a class="page-link" href="search.php?search='.$search.'&page='.$i.'">'.$i.'</a></li>';
                      # code...
                    }
                    if($total_page>$page_number){
                    echo '<li class="page-item"><a class="page-link"  href="search.php?search='.$search.'&page='.($page_number+1).'">next</a></li>';
                    echo "</ul>";
                  }
                }
            }



                   ?>

                            
                        </nav>

                    </div>
                </div>
            </div>
        </div>

        

        <!-- Start client section -->
        <div class="client-area client-area-3 client-area-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-lg-3 col-md-2 col-12">
                        <div class="section-title text-center">
                            <h4 class="fw-7"><!-- I Am Featured In --> ALL FLOWERS LIST</h4>
                            <p class="fz-16 fw-4"> Flowers are used by us to provoke the feelings of love and happiness because they have the power to make people happy and cheerful.  </p>
                           
                        </div>
                    </div>
                </div>
                 <div class="row">

                     <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/01.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/02.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/03.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/04.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/05.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/06.png" alt="" class="img-fluid"></a>
                        



                    </div>
 
                </div>

            </div>
        </div>

    </div>

             
</body>
</html>
<?php include("footer.php");?>