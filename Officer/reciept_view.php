<?php include "../controllers/Receipt.php";
$officer_Id = $_SESSION["officerId"];
$company__Id = $_SESSION["company__Id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Atunfato | History_view</title>

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

<?php include 'nav.php';
include 'header.php'; ?>

<!-- END chat Sidebar-->

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Gallery</h1>
                        </div>
                    </div>
                </div><!-- /# column -->
                <div class="col-lg-4 p-0">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="index.php">Dashboard</a></li>
                                <li class="active">gallery</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /# column -->
            </div><!-- /# row -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>gallery view </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close"><a href="Reciept.php"><i class="ti-plus"></i>Gallery </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Officer Name</th>
                                        <th>Odu Ifa </th>
                                        <th>Ohun Etutu</th>
                                        <th>Cost Price</th>
                                        <th> Date</th>
                                        <th> Re Print</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $select_query = "select * from  receipttable where companyID = '" . $company__Id . "' and activeUser = '" . $officer_Id . "' order by id desc";
                                    $receiptss = $receipt->getAllReceiptBySql($select_query);
                                    $count =0;
                                    foreach ($receiptss as $recipt => $vals) {
                                        $office = $officer->getAllOfficerById($receiptss[$recipt]["officerIncharge"]);
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count++; ?></th>
                                            <td class="color-primary"><?php echo $receiptss[$recipt]["visitorName"]; ?></td>
                                            <td class="color-primary"><?php echo $office[0]["firstname"]." ".$office[0]["lastname"];  ?></td>
                                            <td class="color-primary"><?php echo $receiptss[$recipt]["verse"]; ?></td>
                                            <td class="color-primary"><?php echo $receiptss[$recipt]["needsNumberAndPrice"]; ?></td>
                                            <td class="color-primary"><?php echo $receiptss[$recipt]["totalAmount"]; ?></td>
                                            <td class="color-primary"><?php echo $receiptss[$recipt]["date"]; ?></td>
                                            <td class="color-primary"><?php echo "<a href='print.php?codeForSells=".$receiptss[$recipt]["recieptCode"]."'><i class='ti-printer'></i></a>"; ?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
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
