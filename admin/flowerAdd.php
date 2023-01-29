<?php
        


              $conn=mysqli_connect("localhost","root","","e-flowerphp");

            if(isset($_POST['Save']))
            {

   //print_r($_POST);
                //print_r('jsdjsdjkd');

                $Title=$_POST['title'];
                //print_r($Title);
                // $Image=$_POST['photo'];
                $Description=$_POST['description'];




                // image upload 

                  

                  $image=$_FILES['image'];
                 // print_r($image);
                  $image_dir="pictures/";
                  $target_file=$image_dir.basename($_FILES['image']['name']);
                 $file_type=pathinfo($target_file,PATHINFO_EXTENSION);
                if ($file_type == "JPEG" ||$file_type == "jpeg" || $file_type== "png" || $file_type=="jpg" ||$file_type == "JPG" || $file_type=="PNG") 
                {
              //    if (file_exists($target_file)) {
              //  echo "<script>alert('Image already exists !!');location.href='flowerAdd.php';</script>";
              // }
              // else
              // {
                
                //for upload new blog content
                $query="INSERT INTO flower(title,description,image) VALUES('$Title','$Description','$target_file')";
               
                if (mysqli_query($conn,$query)) {
                  move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

                  echo '<script>alert("Successfully Added!!");location.href="flowerList.php"</script>';
                }
                else{
                  echo "<script>alert('Unsuccessful!!');location.href='flowerAdd.php';</script>";
                }
              }
            // }
            // else{
            //   echo "<script>alert('Unsuccessful!! File type is not correct!!');location.href='flowerAdd.php';</script>";
            //      }
                           // echo "<script>alert('Unsuccessful!! File type is not correct!!');</script>";

           
                          

               //  //echo '<script>alert("Name is '.$name.'")</script>';
               //  $conn=mysqli_connect("localhost","root","","e-flower");
               // // print_r($conn);
               //  $query="INSERT INTO flower(title,description) VALUES('$Title','$Description')";
               //  //print_r(mysqli_query($conn,$query));
               // // print_r($query);
               //  if(mysqli_query($conn,$query)){
               //      echo '<script>alert("Successfully Added!!");location.href="flowerList.php"</script>';
                  
               //  }
               //  else{
               //      echo '<script>alert("Uncessfull, please try again!!")</script>';
               //  }

            }
        ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Flower</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Admin Panel</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
       <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
         <!-- <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>  -->
      </form> 

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
       
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item active">
          <a class="nav-link" href="flowerAdd.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Flower</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="flowerList.php">
            <i class="fas fa-fw fa-table"></i>
            <span>FlowerList</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="purchaseList.php">
          <i class="fas fa-fw fa-table"></i>
            <span>Purchase List</span>
          </a>
        </li>
          <li class="nav-item active">
              <a class="nav-link" href="../index.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Home</span>
              </a>
          </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Flower</li>
          </ol>

          <!-- Area Chart Example-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 table-responsive">

               <form  method="POST" action="flowerAdd.php" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="">

                <div class="form-group mt-30">

                    <label>Title</label>
                    <input type="text" name="title" value="" class="form-control" placeholder="title">
                </div>

                  <div class="form-group mt-30">
                     <label>Description</label>
                     <input type="text" name="description" value="" class="form-control" placeholder="description">
                 </div>

                    <div class="form-group mt-30">

                        <label>Image</label>

                        <input type="file" name="image" class="form-control" placeholder="image">
                              
                                      <!--  <img width="80" src=""  alt=""> -->
                      

                    </div>

                 
                <button type="submit" name="Save" class="btn btn-primary btn-block reg-btn">
                  <span>
                            Save
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                </button>
            
              </form>
            </div>
        </div>
    </div>


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website <?php echo date('Y')?></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="Logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>

</html>
