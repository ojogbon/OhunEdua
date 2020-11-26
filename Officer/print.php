<?php include "../controllers/Receipt.php";
$officer_Id = $_SESSION["officerId"];
$company__Id = 1;//["company__Id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Atunfato | Print</title>

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
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet"/>
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php //include 'nav.php';
//include 'header.php';?>

<!-- END chat Sidebar-->

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="page-header">
                        <div class="page-title">
                            <form method="post">
                                <button type="submit" name="back"
                                        style="    border: 0px;background-color: transparent;">
                                    <i class="ti-arrow-circle-left"> Back</i>
                                </button>
                                <?php if (isset($_POST['back'])) echo "<script> window.location.replace('Reciept.php')</script>"; ?>
                            </form>
                            <h2 style="margin: 4px;text-align: center;text-transform: capitalize;">

                                <?php
                                 $companys = $company->getAllCompanyById($company__Id);

                                echo $companys[0]["companyName"];
                                ?></h2>
                            <h3 style="margin: 4px;text-align: center;"> <?php echo "Address: " . $companys[0]["companyAddress"]; ?></h3>
                            <h3 style="margin: 4px;text-align: center;"> <?php echo "Phone Number: " . $companys[0]["companyPhoneNumber"]; ?></h3>
                            <h3 style="margin: 4px;text-align: center;"> <?php echo "Email: " . $companys[0]["email"]; ?></h3>
                        </div>
                    </div>
                </div><!-- /# column -->
                <div class="col-lg-4 p-0">

                </div><!-- /# column -->
            </div><!-- /# row -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header">
                                <div class="card-header-right-icon">

                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>Receipt</tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $codeForSells = $_GET["codeForSells"];
                                    $sql = "select * from  receipttable where recieptCode='" . $codeForSells . "'";
                                    $receipts = $receipt->getAllReceiptBySql($sql);
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo "Receipt Code"; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["recieptCode"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Customer Name"; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["visitorName"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Officer In charge"; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["officerIncharge"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Odu Ifa "; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["verse"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Ikilo "; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["warnings"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Ohun Etun "; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["needsNumberAndPrice"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Total Cost"; ?></th>
                                        <th scope="row"><?php echo "N ".$receipts[0]["totalAmount"]; ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo "Date "; ?></th>
                                        <th scope="row"><?php echo $receipts[0]["date"]; ?></th>
                                    </tr>

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
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
