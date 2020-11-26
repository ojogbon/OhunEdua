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

    <title>Atunfato | Receipt</title>

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
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
</head>

<style media="screen">
    .gop, .inn {
        width: 70%;
        float: left;
        margin-right: 10px;
    }

    .col-md-6 {
        width: 65%;
        margin-left: 23%;
    }

    .list, .lists {
        margin: 5px;
        padding-left: 5px;
    }

    .list {
        border: 1px dashed;
        padding-top: 10px;
    }

    .lists {
        border: 1px solid;
        padding-top: 9px;
    }

    .p1 {
        float: left;
        width: auto;
        font-size: 18px;
        font-family: fantasy;
        border: 1px solid;
        padding: 4px;
        margin-right: 4px;
        margin-bottom: 5px;
        margin-top: 4px;
        border-radius: 3px;
    }

    .list input {
        float: left;
        width: 10%;
        font-size: 13px;
        font-family: fantasy;
        height: 30px;
        margin-right: 5px;
        border-radius: 5px;
    }

    .lists input {
        float: left;
        width: 80%;
        font-size: 13px;
        font-family: fantasy;
        height: 30px;
        margin-right: 5px;
        border-radius: 5px;
    }

    .lists label {
        font-size: 20px;
        font-family: fantasy;
    }

    .p {
        padding: 4px;
        font-size: 13px;
        font-family: fantasy;
        border: 1px solid lightblue;
        border-radius: 5px;
        width: 20%;
    }

    .pros {
        width: 100%;
        height: 30px;
        margin: 10px;
        cursor: pointer;
        font-family: fantasy;
        font-size: 20px;
        background-color: #097b09;
        color: white;
        width: 93%;
        border-radius: 10px;
    }

    label {
        font-family: fantasy;
        font-weight: bolder;
    }

    input, select {
        font-family: fantasy;
    }

    .film {
        margin-left: 15%;
    }

    .ikiloCover, .ohunEtutuCover {
        padding: 10px;
        border: 1px solid;
        margin: 10px;
    }

    .ikiloCoverCard, .ohunEtutuCoverCard {
        border: 1px solid green;
        border-radius: 5px;
        padding: 5px;
        color: #fff;
        font-size: 12px;
        font-family: cursive;
        width: auto;
        margin: 5px;
    }

    .ikiloCoverCard, .addIkilo {
        background-color: green;
    }

    .ohunEtutuCoverCard, .addOhunEtutu {
        background-color: #199c19;
    }

    .ikiloCoverCard span, .ohunEtutuCoverCard span {
        position: absolute;
        font-size: 7px;
        background-color: #ec7045;
        padding: 2.5px;
        border-radius: 5px;
        top: -7px;
    }

    .addIkilo, .addOhunEtutu {
        border: 0px;
        color: #fff;
        padding: 9px;
        border-radius: 50%;
        margin-top: 11px;
        font-width: bolder;
    }

    .Covers {
        padding: 10px;
        border: 1px solid;
        margin: 0px 1px 10px 1px;
    }

    .pathx {
        border-left: 1px solid #c5c5c5;
    }
</style>
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
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="index.php">Dashboard</a></li>
                                <li class="staff.php">Receipt</li>
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
                                <h4>Receipt </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close"><a href="reciept_view.php"><i class="ti-plus"></i>Receipt History  </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="card-block">
                                        <form method="post" enctype="multipart/form-data">
                                            <?php $relCode = "XDC" . rand(0000, 9999) . "02az"; ?>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="Amount" style="    font-family: inherit;"
                                                           class="col-sm-6 col-form-label">Receipt Code</label>
                                                    <input type="text" name="ReceiptCode"
                                                           class="form-control input-default "
                                                           placeholder="Receipt Code..."
                                                           value="<?php echo $relCode; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row Covers">
                                                <div class="col-sm-6">
                                                    <label for="Amount" style="    font-family: inherit;"
                                                           class="col-sm-6 col-form-label">Customer Name</label>
                                                    <input type="text" name="CustomerName"
                                                           class="form-control input-default "
                                                           placeholder="Customer Name...">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="Amount" style="    font-family: inherit;"
                                                           class="col-sm-6 col-form-label">Customer Address</label>
                                                    <textarea type="text" name="CustomerAddress"
                                                              class="form-control input-default "
                                                              placeholder="Customer Address..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <div class="col-sm-4">
                                                    <label for="Amount" style="    font-family: inherit;"
                                                           class="col-sm-6 col-form-label">Officer Name</label>
                                                    <select class="form-control" name="OfficerName">
                                                        <option value="">Officer Name</option>
                                                        <?php
                                                        $query = "select * from staffs where company_id = '" . $company__Id . "'order by id desc";
                                                        $officers = $officer->getAllOfficerBySql($query);
                                                        $count = 0;
                                                        foreach ($officers as $officer => $value) {
                                                            ?>
                                                            <option value="<?php echo $officers[$officer]["id"] ?>"><?php echo $officers[$officer]["firstname"] . " " . $officers[$officer]["lastname"]; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="col-sm-6">
                                                        <label for="Amount" style="    font-family: inherit;"
                                                               class="col-sm-6 col-form-label">Odu Ifa</label>
                                                        <input type="text" name="OduIfaInput"
                                                               class="form-control input-default "
                                                               placeholder="Odu Ifa...">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="Amount" style="    font-family: inherit;"
                                                               class="col-sm-6 col-form-label">Odu Ifa</label>
                                                        <select class="form-control" name="OduIfaSelect">
                                                            <option value="">Odu Ifa</option>
                                                            <?php
                                                            $query = "select * from verse  where officer_id ='" . $company__Id . "' order by id desc";
                                                            $oduIfas = $oduIfa->getAllOduIfaBySql($query);
                                                            $count = 0;
                                                            foreach ($oduIfas as $oduIfa => $value) {
                                                                ?>
                                                                <option value="<?php echo $oduIfas[$oduIfa]["title"] ?>"><?php echo $oduIfas[$oduIfa]["title"]; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-6">
                                                                <label for="Amount" style="    font-family: inherit;"
                                                                       class="col-sm-6 col-form-label">Ikilo</label>
                                                                <input type="text" name="Ikilo"
                                                                       class="form-control input-default ikiloInput"
                                                                       placeholder="Ikilo fun Ifa...">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="Amount" style="    font-family: inherit;"
                                                                       class="col-sm-6 col-form-label">Ikilo </label>
                                                                <select class="form-control ikiloSelect" name="Ikilo">
                                                                    <option value="">Ikilo fun Ifa</option>
                                                                    <?php
                                                                    $query = "select * from Ikilo where company_id = '" . $company__Id . "'order by id desc";
                                                                    $ikilos = $ikilo->getAllIkiloBySql($query);
                                                                    foreach ($ikilos as $ikilo => $value) {
                                                                        ?>
                                                                        <option value="<?php echo $ikilos[$ikilo]["title"]; ?>"><?php echo $ikilos[$ikilo]["title"]; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-2 clickable">
                                                                <br/>
                                                                <button class="addIkilo" type="button"><i
                                                                            class="ti-plus"></i></i></button>
                                                            </div>
                                                        </div>
                                                        <input class="realIkilo" name="IkiloReal" value=""
                                                               style="display: none"/>
                                                    </div>
                                                    <div class="row ikiloCover">

                                                        <div class="col-md-12 ikiloCoverCard">fun appere..!</div>


                                                    </div>
                                                </div>
                                                <div class="col-sm-6 pathx">
                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                            <div class="col-sm-12">
                                                                <label for="Amount" style="    font-family: inherit;"
                                                                       class="col-sm-6 col-form-label">Ohun
                                                                    etutu</label>
                                                                <select class="form-control OhunetutuSelect"
                                                                        name="Ohunetutu">
                                                                    <option value="">Ohun etutu</option>

                                                                    <?php

                                                                    $query = "select * from  ohunetutu  where 	companyID = '" . $company__Id . "' order by id desc";
                                                                    $ohunEtutus = $ohunEtutu->getAllOhunEtutuBySql($query);
                                                                    foreach ($ohunEtutus as $ohunEtutu => $value) {
                                                                        ?>
                                                                        <option value="<?php echo $ohunEtutus[$ohunEtutu]["name"] . "," . $ohunEtutus[$ohunEtutu]["price"]; ?>"><?php echo $ohunEtutus[$ohunEtutu]["name"] . "    -> {" . $ohunEtutus[$ohunEtutu]["price"] . "}"; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>


                                                            <div class="col-sm-12">
                                                                <br/>
                                                                <div class="col-sm-6">
                                                                    <label for="Amount"
                                                                           style="    font-family: inherit;"
                                                                           class="col-sm-6 col-form-label">Ohun
                                                                        etutu</label>
                                                                    <input type="text" name="OhunetutuIn"
                                                                           class="form-control input-default OhunetutuInput"
                                                                           placeholder="Ohun etutu...">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label for="Amount"
                                                                           style="    font-family: inherit;"
                                                                           class="col-sm-12 col-form-label">Price</label>
                                                                    <input type="number" name="price"
                                                                           class="form-control input-default OhunetutuPrice"
                                                                           placeholder="price...">
                                                                </div>
                                                                <div class="col-sm-2 clickableTeam">
                                                                    <br/>
                                                                    <button class="addOhunEtutu" type="button"><i
                                                                                class="ti-plus"></i></i></button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <input class="realOhunEtutu" name="OhunEtutuAll" value=""
                                                           style="display: none"/>
                                                    <div class="row ohunEtutuCover">
                                                        <div class="col-md-12 ohunEtutuCoverCard">ma je kun<span><i
                                                                        class="ti-close"></i></i></span></div>
                                                    </div>
                                                    <h3>Total: <span
                                                                style='text-decoration: line-through'>N</span>
                                                        <input type="number"
                                                               style="border: 0px;
                                                                font-family: cursive;" class="totalInprice"
                                                               placeholder="Iye ti gbogbo owo je.." name="total"

                                                        ></h3>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <button class="btn btn-default" type="submit" name="save"
                                                        style="    font-family: inherit;">Process
                                                    <i class="icofont icofont-refresh"></i>
                                                </button>
                                            </div>
                                            <!--Generate Staff ID and Password-->
                                        </form>
                                        <?php
                                        if (isset($_POST["save"])) {

                                            $ReceiptCode = addslashes($_POST["ReceiptCode"]);
                                            $CustomerName = addslashes($_POST["CustomerName"]);
                                            $CustomerAddress = addslashes($_POST["CustomerAddress"]);
                                            $OfficerName = addslashes($_POST["OfficerName"]);
                                            $OduIfaInput = addslashes($_POST["OduIfaInput"]);
                                            $OduIfaSelect = addslashes($_POST["OduIfaSelect"]);
                                            $IkiloReal = addslashes($_POST["IkiloReal"]);
                                            $OhunEtutuAll = addslashes($_POST["OhunEtutuAll"]);
                                            $total = addslashes($_POST["total"]);
                                            $Odu = "";

                                            if (!empty($OduIfaInput) && !empty($OduIfaSelect)) {
                                                echo "<script>alert('Odu ifa se koko E mu kon!');</script>";
                                            } else {
                                                if (!empty($OduIfaInput) || !empty($OduIfaSelect)) {
                                                    if (!empty($OduIfaInput)) {
                                                        $Odu = $OduIfaInput;
                                                    } else if (!empty($OduIfaSelect)) {
                                                        $Odu = $OduIfaSelect;
                                                    }
                                                    if (empty($OduIfaInput) && empty($OduIfaSelect)) {
                                                        echo "<script>alert('Odu ifa se koko Efi ikon si be!');</script>";
                                                    } else {
                                                        if (empty($ReceiptCode) || empty($CustomerName) || empty($CustomerAddress) || empty($OfficerName) || empty($IkiloReal) || empty($OhunEtutuAll) || empty($total)) {
                                                            echo "<script>alert('Empty fields is not allowed!');</script>";
                                                        } else {
                                                            if ($receipt->setAllReceipt($company__Id, $officer_Id, $CustomerName, $CustomerAddress, $Odu, $IkiloReal, $OhunEtutuAll, $total, $ReceiptCode)) {
                                                                echo "<script>alert('Success!');</script>";
                                                                echo "<a href='print.php?codeForSells=".$ReceiptCode."' style='border: 1px solid;padding: 10px;border-radius: 10px;'>PRINT!</a>";
                                                            } else {
                                                                echo "<script>alert('Something Happened!');</script>";
                                                            }

                                                        }
                                                    }

                                                }
                                            }


                                        }
                                        ?>
                                    </div>

                                </div>


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
<script type="text/javascript" src="../views/js/receipt.js"></script>
s


</body>

</html>
