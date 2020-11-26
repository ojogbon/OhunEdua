<?php include "../controllers/Company.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						   Join now, and make consultees happy <b><i>Ifa</i></b>
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid firstname is required: adekola">
						<input class="input100" type="text" name="firstname">
						<span class="focus-input100"></span>
						<span class="label-input100">First Name</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid lastname is required: adebosin">
						<input class="input100" type="text" name="lastname">
						<span class="focus-input100"></span>
						<span class="label-input100">Last Name</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid companyName is required: oluwo Adifa Tradomedical House">
						<input class="input100" type="text" name="companyName">
						<span class="focus-input100"></span>
						<span class="label-input100">Company Name</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required: 234 703 455 6723">
						<input class="input100" type="number" name="phonenumber">
						<span class="focus-input100"></span>
						<span class="label-input100">Phonenumber</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid companyAddress is required: 1 ade street, Ishaga Lagos.">
						<input class="input100" type="text" name="companyAddress">
						<span class="focus-input100"></span>
						<span class="label-input100">Company Address</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
						<input class="input100" type="password" name="confrimpass">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>



					<div class="container-login100-form-btn">
						<button style="background-color:#4BAE3C;"class="login100-form-btn" type="submit" name="saveNow">
							Register
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
                            <a href="../Ohun_in_Admin">or sign up using</a>
						</span>
					</div>

<!--					<div class="login100-form-social flex-c-m">-->
<!--						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">-->
<!--							<i class="fa fa-facebook-f" aria-hidden="true"></i>-->
<!--						</a>-->
<!---->
<!--						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">-->
<!--							<i class="fa fa-twitter" aria-hidden="true"></i>-->
<!--						</a>-->
<!--					</div>-->
                    <?php
                        if (isset($_POST["saveNow"])){
                                $firstname = $_POST["firstname"];
                                $lastname = $_POST["lastname"];
                                $companyName = $_POST["companyName"];
                                $phonenumber = $_POST["phonenumber"];
                                $email = $_POST["email"];
                                $companyAddress = $_POST["companyAddress"];
                                $pass = $_POST["pass"];
                                $confrimpass = $_POST["confrimpass"];

                                if( $pass == $confrimpass){
                                    $sql = "select id from company where email='".$email."' or companyName ='".$companyName."'";
                                    if(empty($company->getAllCompanyBySql($sql)) ){
                                        if($company->setAllCompany($email,sha1($pass),$firstname,$lastname,$companyName,$companyAddress,$phonenumber)){
                                            echo "<script> window.alert('Successful! You are welcome To the House of Gods Voice')</script>";
                                        }else{
                                            echo "<script> window.alert('Something happened! please try again!')</script>";
                                        }
                                    }else{
                                        echo "<script> window.alert('Email or Company Name  Already exist!')</script>";
                                    }
                                }else{
                                    echo "<script> window.alert('Password must match!')</script>";
                                }
                        }
                    ?>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
