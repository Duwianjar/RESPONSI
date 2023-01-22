<!-- starsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Team Akatsuki</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/akatsuki.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css?<?php echo time(); ?>" rel="stylesheet" />
    <link href="assets/css/login.css?<?php echo time(); ?>" rel="stylesheet" />

</head>

<body onload="print()">



    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-md-5 col-lg-10 ">
                    <h4 class="fw-bold"><img src="assets/img/sma.png" class="img-fluid animated" alt="" width="50px">
                        <span class=" text-dark"> SMAN 1 Bagan
                            Sinembah</span>
                    </h4>
                </div>
            </div>
            <h5 class="text-dark fw-bold">
                <center>Transkip Nilai</center>
            </h5>
            <br>
            <div class="row g-1">
                <div class="col-3 text-dark">
                    <p>&emsp;&emsp;ID<br>&emsp;&emsp;Nama Siswa
                        <br>&emsp;&emsp;Kelas<br>&emsp;&emsp;Telepon<br>&emsp;&emsp;Email
                    </p>
                </div>
                <div class=" col-5 text-dark">
                    <p>:&emsp;<?php echo $_SESSION["murid"]['id_murid']?><br>:&emsp;<?php echo $_SESSION["murid"]['nama_murid']?><br>:&emsp;<?php echo $_SESSION["murid"]['kelas']?><br>:&emsp;<?php echo $_SESSION["murid"]['telepon_murid']?><br>:
                        &emsp;<?php echo $_SESSION["murid"]['email_murid']?></p>
                </div>
            </div><br>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col" colspan="4">
                            <center>Mata Pelajaran</center>
                        </th>
                        <th rowspan="2">
                            <center>Nilai</center>
                        </th>
                    </tr>
                    <tr class="table-secondary">

                        <th scope="col">ID Mapel</th>
                        <th scope="col">Nama Pelajaran</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nama Guru</th>

                    </tr>
                    <?php $kelas=$_SESSION["murid"]['kelas']; ?>
                    <?php $ambil=$koneksi->query("SELECT * FROM mapel WHERE kelas_mapel<=$kelas");
                    $pembagiratarata='0';
                    $jumlahnilai='0';?>
                    <?php while($pecah = $ambil->fetch_assoc()) {?>
                    <tr>
                        <td class="text-break">
                            <?php echo $pecah['id_mapel'];?>
                        </td>
                        <td class="text-break">
                            <?php echo $pecah['nama_mapel'];?>
                        </td>
                        <td class="text-break">
                            <?php echo $pecah['kelas_mapel'];?>
                        </td>
                        <td class="text-break">
                            <?php echo $pecah['guru_mapel'];?>
                        </td>
                        <td class="text-break text-end">
                            <?php echo $_SESSION["murid"][$pecah['nama_mapel']];?>
                        </td>
                    </tr>
                    <?php   $jumlahnilai=$jumlahnilai+$_SESSION["murid"][$pecah['nama_mapel']];
                        $pembagiratarata=$pembagiratarata+1;
                }?>
                    <?php $ratarata=$jumlahnilai/$pembagiratarata;  ?>
                    <tr>
                        <th scope="row" colspan="4">
                            <center>Jumlah Nilai</center>
                        </th>
                        <th scope="col" class="text-end"><?php echo number_format("$jumlahnilai");?></th>
                    </tr>
                </thead>
            </table>
            <br>
            <div class="row g-2">
                <div class="col-3">
                    <p>&emsp;Rata - Rata Nilai</p>
                    <p>&emsp;Jumlah Mapel</p>
                </div>
                <div class=" col-5">
                    <p>: <?php echo number_format("$ratarata",2);?></p>
                    <p>: <?php echo $pembagiratarata;?> </p>
                </div>
            </div>
        </div>
    </section>





    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>