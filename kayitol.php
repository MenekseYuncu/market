<?php
session_start();
include("conn.php");
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Market</title>
    <style>
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #F3F0D7;
            }

            .navbar-laravel
            {
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }

            .navbar-brand , .nav-link, .my-form, .login-form
            {
                font-family: Raleway, sans-serif;
            }

            .my-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }

            .login-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .login-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #fc7b23;">
    <div class="container">
    <a class="navbar-brand" ><i class="bi bi-shop"></i> Market</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Giriş Yap</a>
            </li>
            
        </ul>

    </div>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card" style="background-color: #CEE5D0;">
                        <div class="card-header" style="background-color: #FED2AA;">Kayıt ol</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" method="POST" >
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">İsim</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="ad"  style="background-color: #F3F0D7;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Soyad</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="soyad"  style="background-color: #F3F0D7;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Telefon</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="telefon"  style="background-color: #F3F0D7;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Sifre</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control"  style="background-color: #F3F0D7;" name="sifre">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">adres</label>
                                    <div class="col-md-6">
                                        <textarea type="text" id="present_address" class="form-control"  style="background-color: #F3F0D7;" name="adres"></textarea>
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success" name="kayit_ol">
                                        Kayıt ol
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>


</main>
<?php

if (isset($_POST["kayit_ol"])) {
    $ad = $_POST["ad"];
    $sifre = $_POST["sifre"];
    $soyad = $_POST["soyad"];
    $adres = $_POST["adres"];
    $telefon = $_POST["telefon"];

    if (empty($ad) || empty($sifre) || empty($soyad) ||  empty($adres) ||  empty($telefon)) {

        echo "<script>window.alert('boş bırakmayın');</script>";
    } else {
            $verial = $conn->query("SELECT * FROM kullanici where ad= '$ad'", PDO::FETCH_ASSOC);
            $cikti = $verial->fetch(PDO::FETCH_ASSOC);
            if (isset($cikti["ad"])) {
                echo "<script>window.alert('Farklı kulanıcı adı kullanın');</script>";
            } else {

                $veriekle = $conn->prepare("INSERT INTO kullanici set ad=:ad,soyad=:soyad,sifre=:sifre,telefon=:telefon,adres=:adres");
                $verikontrol = $veriekle->execute(array('ad' => $ad, 'sifre' => $sifre, 'soyad' => $soyad, 'adres' => $adres, 'telefon' => $telefon));

                ob_start();
                if ($verikontrol) {
                    echo "<script>alert('Kayıt Yapıldı');</script>";
                    
                } else {
                    echo "<script>alert('Tekrar Deneyin');</script>";
                    
                }
            }
    }
}
?>
<script>
    function validform() {

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["username"].value;
        var d = document.forms["my-form"]["permanent-address"].value;
        var e = document.forms["my-form"]["nid-number"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Username");
            return false;
        }else if (d==null || d=="")
        {
            alert("Please Enter Your Permanent Address");
            return false;
        }else if (e==null || e=="")
        {
            alert("Please Enter Your NID Number");
            return false;
        }

        }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>