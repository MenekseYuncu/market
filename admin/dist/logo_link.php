<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .buttonhover:hover{
                color: black;
                background-color: white;
                transition-duration: 0.5s;
            }
            
            .sagss{
                position: absolute;
                right: 40px;
                top: 10px;
            }

            .kutus{
                position: relative;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">

    <!-- navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark kutus">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="admin.php">Market</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <div class=""><a href="../../anasayfa.php" class="btn btn-dark buttonhover sagss">Ana sayfa</a></div>
        
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Ürünler
                        </a>
                        
                        <div class="sb-sidenav-menu-heading">Ayarlar</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Kullanıcı hesapları
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Slider yönetimi
                        </a>
                        <a class="nav-link active" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Link & Logo yönetimi
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            header & footer 
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        
        
    
    </div>


    <!-- link -->
    <div class="col-md-4">
    <table class="table">

        <tbody>
        <tr>
            <th>No</th>
            <th>Başlık</th>
            <th>İçerik</th>
            <th>Durum</th>

        </tr>
        <?php
        include("../../conn.php"); //veri tabanına bağlanıyoruz

        //verileri çekiyoruz
        $sorgu = $conn->query("select * from logo_link");

        //verileri yazıyoruz
        while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?php echo $sonuc['id'] ?></td>
                <td><?php echo $sonuc['baslik'] ?></td>
                <td><?php echo $sonuc['icerik'] ?></td>
                <td>
                    <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif" <?php echo $sonuc['aktif']==1?'checked':'' ?>  />
                        <span class="slider round"></span>
                    </label>
                </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
    <h2 id="sonuc"></h2>
</div>
</form>
<!-- js dosyamızı sona ekliyoruz -->
<script src="assets/custom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
