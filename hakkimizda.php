<?php include "conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Market</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <style>
                body {
            font-family: 'Roboto';font-size: 16px;
        }

        .aboutus-section {
            padding: 90px 0;
        }
        .aboutus-title {
            font-size: 30px;
            letter-spacing: 0;
            line-height: 32px;
            margin: 0 0 39px;
            padding: 0 0 11px;
            position: relative;
            text-transform: uppercase;
            color: #000;
        }
        .aboutus-title::after {
            background: #000 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            width: 54px;
        }
        .aboutus-text {
            color: #606060;
            font-size: 13px;
            line-height: 22px;
            margin: 0 0 35px;
        }

        a:hover, a:active {
            color: #000;
            text-decoration: none;
            outline: 0;
        }
        .aboutus-more {
            border: 1px solid #000;
            border-radius: 25px;
            color: #000;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0;
            padding: 7px 20px;
            text-transform: uppercase;
        }
        .feature .feature-box .iconset {
            background: #fff none repeat scroll 0 0;
            float: left;
            position: relative;
            width: 18%;
        }
        .feature .feature-box .iconset::after {
            background: #000 none repeat scroll 0 0;
            content: "";
            height: 150%;
            left: 43%;
            position: absolute;
            top: 100%;
            width: 1px;
        }

        .feature .feature-box .feature-content h4 {
            color: #0f0f0f;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 22px;
            margin: 0 0 5px;
        }


        .feature .feature-box .feature-content {
            float: left;
            padding-left: 28px;
            width: 78%;
        }
        .feature .feature-box .feature-content h4 {
            color: #0f0f0f;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 22px;
            margin: 0 0 5px;
        }
        .feature .feature-box .feature-content p {
            color: #606060;
            font-size: 13px;
            line-height: 22px;
        }
        .icon {
            color : #000;
            padding:0px;
            font-size:40px;
            border: 1px solid #000;
            border-radius: 100px;
            color: #000;
            font-size: 28px;
            height: 70px;
            line-height: 70px;
            text-align: center;
            width: 70px;
        }

    </style>
    <body style="background-color: #F3F0D7;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #fc7b23;">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="anasayfa.php"><i class="bi bi-shop"></i> Market</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="anasayfa.php">Ana Sayfa</a></li>
                        <li class="nav-item"><a class="nav-link active" href="hakkimizda.php">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-light" type="submit">
                        <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/slkvcfos.json"
                                trigger="hover"
                                style="width:30px;height:30px">
                            </lord-icon>
                            SEPET
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        
        
        <div class="aboutus-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="aboutus">
                            <h2 class="aboutus-title">Hakkımızda</h2>
                            <p class="aboutus-text">Türkiye’nin ilk sanal market uygulaması olan ve 1997 yılından bu yana, müşterilerin bir Migros mağazasında bulabilecekleri tüm ürünleri kapıda teslim hizmeti ile sunan Migros Sanal Market, Türkiye’nin uygulamalarında öncü, pazarı geliştiren, en büyük ve yaygın gıda e-ticaret sitesidir. Migros Sanal Market’ten Migros mağazalarında satılan tüm ürünler, Migros mağazaları ile aynı fiyat ve avantajlarla 7 gün 24 saat boyunca internet üzerinden sipariş edilebilmektedir.</p>
                            <p class="aboutus-text">Migros Sanal Market, müşteri odaklı, güvenilir, teknolojik ve yenilikçi yapısı ile yaşam kalitesini ileriye taşımakta öncü rol üstlenmekte, market alışverişini hızlı, kolay ve keyifli bir hale getirmektedir. Internet’ten market alışverişini cazip hale getirerek, alışkanlıkları değiştirmek, müşterilerin rutin market alışverişine ihtiyaç duyduğu noktada bir seçenek olarak akıllarına gelmek, Migros Sanal Market’ten alışveriş yapmanın ayrıcalık olduğunu ve sağlayacağı kolaylık ve zaman kazandırması ile müşterilerinin yaşam kalitelerini arttıracağını anlatmak amaçları arasındadır.</p>
                            <button class="aboutus-more btn btn-light" href="anasayfa.html">Alışverise başlayın</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="aboutus-banner">
                            <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 mt-5">
                        <div class="feature">
                            <div class="feature-box">
                                <div class="clearfix">
                                    
                                    <div class="feature-content">
                                        <h4>kalbimizle çalısıyoruz</h4>
                                        <p>Zengin ürün çeşitliliği ile hizmet veren Migros Sanal Market ile müşteriler, market alışverişlerini hızlı ve güvenli bir şekilde yapabilmekte, siparişlerinin ödemesini online, kapıda kredi kartı veya kapıda nakit olarak tamamlayabilmektedirler. Migros mağazalarında olan tüm ürün ve hizmetler, geçerli tüm fiyat, indirim ve kampanyalar ile kaliteden ödün vermeden müşterilerin “kapısına kadar” aynı gün içinde veya belirtilen gündeki saat tercihine göre ulaştırılmaktadır.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-box">
                                <div class="clearfix">
                                    
                                    <div class="feature-content">
                                        
                                        <p>Hizmetlerini internet ve telefonun yanı sıra akıllı telefon ve tabletler ile de çeşitlendiren Migros Sanal Market 2010 yılında, “Mobil Market” uygulaması ile teknolojik bir yeniliğe öncülük etmiştir. Mobil Market Uygulaması ile “2011-2012 Perakendede Yılın Teknoloji Uygulaması Ödülü” sahibi Migros Sanal Market, bu uygulama ile Türkiye’de ilk olarak alışverişte yeni bir çığır açmıştır. Migros Sanal Market Mobil Uygulaması’nın iPhone/iPad ve Android cihazlar için Türkiye’de ilk olan barkod ile arama ve sipariş etme özelliğinin yanı sıra yine Android cihazlar için Türkiye’de bir ilk olan “Ses ile Ürün Arama Özelliği” sayesinde siparişler hızlıca oluşturulabilmektedir.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer-->
        <footer class="py-5 " style="background-color: #fc7b23;">
            <div class="container mb-5 text-center">
                <button class="btn btn-outline-light" type="submit"><i class="bi bi-facebook"></i> Facebook</button>
                <button class="btn btn-outline-light" type="submit"><i class="bi bi-twitch"></i> Twitch</button>
                <button class="btn btn-outline-light" type="submit"><i class="bi bi-twitter"></i> Twitter</button>

            </div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
