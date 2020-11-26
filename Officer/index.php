<?php include "../controllers/Officer.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> OhunEdua | Login</title>

	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/lib/themify-icons/themify-icons.css">
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <div class="header">
       <div class="pull-left">
           <div class="logo"><a href="index.php"><span style="font-size:9px;">OhunEdua Officer</span></a></div>

       </div>

       <div class="pull-right p-r-15">

       </div>
   </div>

    <!-- END chat Sidebar-->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">

                    </div>
                </div>
                <div class="main-content" style="width: 40%;margin: auto;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Officer Login</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <p>Firstname </p>
                                                <input type="text" name="officer_usename" class="form-control input-default " placeholder="Firstname" required>
                                            </div>
                                            <div class="form-group">
                                                <p>Password </p>
                                                <input type="password" name="officer_password" class="form-control input-default " placeholder="Password" required>
                                            </div>

								<button type="submit" name="add_staff" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                                        </form>
                                        <?php
                                                    			 if(isset($_POST["add_staff"])){

                                                                     $officer_usename = $_POST["officer_usename"];
                                                                     $officer_password = $_POST["officer_password"];

                                                                  $sql = "select id,company_id from staffs where 	firstname = '$officer_usename' and password = '$officer_password'";

                                                                  $officer_id = $officer->getAllOfficerBySql($sql);

                                                                  if(!empty($officer_id[0]["id"])){
                                                                    echo "<script type='text/javascript'>alert('Login Successful Admin');</script>";;
                                                                    $_SESSION["officerId"] = $officer_id[0]["id"];
                                                                    $_SESSION["company__Id"] = $officer_id[0]["company_id"];
                                                                    echo ' <script type="text/javascript" > window.location.replace("Dashboard.php");</script>';
                                                                }else {
                                                                  // code...
                                                                  echo "Username or password is incorrect, Please try again.";
                                                                }


                                                                    }
                                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div>
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->







    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->





</body>

</html>
