<?php include "conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="iletisim/giris/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="iletisim/giris/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="iletisim/giris/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/css/util.css">
	<link rel="stylesheet" type="text/css" href="iletisim/giris/css/main.css">
    <style>
        #renk{
            background-color:#FF9F45 ;
        }

        #renk:hover{
            background-color: #F76E11;
        }
    </style>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-43 px-1 py-3 badge-pill text-white d-inline-block" style="background-color: #fc7b23;">
						Giriş Yap
					</span>
					
					
					<div class="wrap-input100 validate-input mt-4" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="telefon">
						<span class="focus-input100"></span>
						<span class="label-input100">Telefon</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Şifre</span>
					</div>

                    <small><em class="text-muted ml-3">*Şifre zorunludur</em></small>

					<div class="container-login100-form-btn my-3">
						<button id="renk" class="login100-form-btn" type="submit" name="giris_yap">
							Giriş Yapın
						</button>
					</div>
                    <div class="container-login100-form-btn">
						<a href="kayitol.php" id="renk" class="login100-form-btn" type="submit" name="kayit_ol">
							Kayıt Ol
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-position: left; background-image: url('iletisim/giris/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
    <?php
    
	if(isset($_POST["giris_yap"])){
		$telefon = $_POST["telefon"];
		$password = $_POST["pass"];

		$sql = "SELECT * FROM kullanici WHERE telefon = '$telefon' and sifre = '$password'";
		$veri = $conn->prepare($sql);
		$veri->execute();
		$data = $veri->fetch(PDO::FETCH_ASSOC);
		$count = $veri->rowCount();

		if($count > 0){
		$_SESSION['telefon'] = $telefon;
		$_SESSION['password'] = $password;
		$_SESSION['id'] = $data['kullanici_id'];
		header("Location: admin/dist/admin.php?status=success");
		}
		else{ 
			header("Location: index.php?status=failed");
		}
	}

    
    ?>

	<script src="iletisim/giris/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="iletisim/giris/vendor/animsition/js/animsition.min.js"></script>
	<script src="iletisim/giris/vendor/bootstrap/js/popper.js"></script>
	<script src="iletisim/giris/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="iletisim/giris/vendor/select2/select2.min.js"></script>
	<script src="iletisim/giris/vendor/daterangepicker/moment.min.js"></script>
	<script src="iletisim/giris/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="iletisim/giris/vendor/countdowntime/countdowntime.js"></script>
	<script src="iletisim/giris/js/main.js"></script>

</body>
</html>