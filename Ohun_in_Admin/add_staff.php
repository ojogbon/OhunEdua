<?php
    include "../controllers/Officer.php";
    $company_id = $_SESSION["adminId"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Atunfato | Staff</title>

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

<?php include 'nav.php';
include 'header.php';?>

    <!-- END chat Sidebar-->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li class=""><a href="staff.php">Staff</a></li>
                                    <li class="active">Add Staff</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Staff Registration</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close"><a href="staff.php"><i class="ti-plus"></i>View Staff  </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <p>Officer Firstname</p>
                                                <input type="text" name="firstname" class="form-control input-default " placeholder="Officer Firstname" required>
                                            </div>
                                            <div class="form-group">
                                                <p>Officer Lastname </p>
                                                <input type="text" name="lastname" class="form-control input-default " placeholder="Officer Lastname" required>
                                            </div>


                                            <div class="form-group">
                                                <p>Officer Post </p>
                                                <select class="form-control" name="post">
                                                    <option value="Oluwo">Oluwo</option>
                                                    <option value="Erinmi">Erinmi</option>
                                                    <option value="Agbongbon">Agbongbon</option>
                                                    <option value="Amawo">Amawo</option>
                                                    <option value="Omo ekofa">Omo ekofa</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p>Officer DateOfBirth </p>
                                                <input type="date" name="dateOfBirth" class="form-control input-default " placeholder="Officer DateOfBirth" required>
                                            </div>

                                            <div class="form-group">
                                                <p>Officer LocalGovernment </p>
                                                <input type="text" name="localGovernment" class="form-control input-default " placeholder="Officer LocalGovernment" required>
                                            </div>

                                            <div class="form-group">
                                                <p>Officer maritalStatus </p>
                                                <select class="form-control" name="maritalStatus">
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p>Staff Image </p>
                                                <input type="file" name="file" class="form-control input-default " required>
                                            </div>

                                            <div class="form-group">
                                                <p>Password </p>
                                                <input type="text" name="password" class="form-control input-default " placeholder="Officer Password" value="<?php echo "azw)".rand(0000,9999)."ifa".($company_id*10)?>" required>
                                            </div>

								<button type="submit" name="add_staff" class="btn btn-primary btn-flat m-b-30 m-t-30">Add Staff</button>
                                        </form>
                                        <?php
                                                    			 if(isset($_POST["add_staff"])){
                                                                    $firstname =addslashes($_POST["firstname"]);
                                                                    $lastname =addslashes($_POST["lastname"]);
                                                                    $post =addslashes($_POST["post"]);
                                                                    $dateOfBirth =addslashes($_POST["dateOfBirth"]);
                                                                    $localGovernment =addslashes($_POST["localGovernment"]);
                                                                    $maritalStatus =addslashes($_POST["maritalStatus"]);
                                                                    $password = $_POST["password"];

                                                                    $filen =$_FILES["file"]["name"];
                                                                    $filetmp =$_FILES["file"]["tmp_name"];
                                                                    $destination = "../forAllImage/".$filen;
                                                                    move_uploaded_file($filetmp, $destination);
                                                                    $diretry = $destination;


                                                                     if (!$officer->setAllOfficer($company_id,$firstname,$lastname,$post,$dateOfBirth,$localGovernment,$maritalStatus,$filen,$destination,$password)){
                                                                       echo "<script type='text/javascript'>alert('Something Went Wrong');</script>";;
                                                                    }
                                                                    else
                                                                    {
                                                                       echo "<p style='color:#0F0'> <script type='text/javascript'>alert(' Staff added successfully');</script>";
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
