<!-- starsesi dan konelksi ke mysql -->
<?php include 'script/startsesiandkoneksimysql.php'; ?>

<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- Start Header Navbar -->
<?php include 'script/navbar.php';

$akun=$_GET['akun']; 

if($akun=='admin'){
        if (!isset($_SESSION['admin'])) {
            echo " <script> location = 'login.php?login=admin';  </script>";
            exit();     }?>

<img src="assets/img/upakun.jpg" alt="" height="80" width="100%">
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class=" col-lg-2"></div>
            <div class="col-md-5 col-lg-4">
                <img src="assets/img/admin.jpg"
                    class="rounded mx-auto d-block rounded-circle border border-biru border-5" alt="" height="200"
                    width="200">
            </div>
            <div class="col-md-5 col-lg-3 ">
                <h1 class="text-capitalize fw-bold "><?php echo $_SESSION["admin"]['nama_lengkap']?></h1>

                <h4 class="border border-biru border-3 rounded-pill">
                    <center> Administrator</center>
                </h4>

                <p>ID / Username : <br><?php echo $_SESSION["admin"]['id_admin']?> /
                    <?php echo $_SESSION["admin"]['username']?></p>
                <a href="logout.php"><INPUT TYPE="button" value="🚫 Logout"
                        class="btn btn-outline-danger btn-kirim"></a>
                <a href="ubah.php?&id=<?php echo $_SESSION["admin"]['id_admin']?>&ubah=admin"><INPUT TYPE="button"
                        value="✏️ Edit Profil" class="btn btn-outline-primary btn-kirim"></a>
                <br />
                <p></p>
            </div>
        </div>
        <hr class="text-secondary" />
        <h2>
            Nilai Murid
        </h2>
        <hr class="text-secondary" />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $ambil=$koneksi->query("SELECT * FROM mapel");?>
                <?php while($pecah = $ambil->fetch_assoc()) {?>
                <tr>
                    <td class="text-break">
                        <?php echo $pecah['nama_mapel'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['kelas_mapel'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['guru_mapel'];?>
                    </td>
                    <td class="text-break">
                        <a href="data.php?&mapel=<?php echo $pecah['nama_mapel'];?>&data=nilai"><INPUT TYPE="button"
                                value="⚙️ Kelola Nilai" class="btn btn-outline-primary btn-kirim btn-sm ">
                        </a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</section>


<?php }

else if ($akun=='guru') {
        if (!isset($_SESSION['guru']))  {
        echo " <script>location='login.php?login=guru';</script>";
        exit();     }?>

<img src="assets/img/upakun.jpg" alt="" height="80" width="100%">

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class=" col-lg-2"></div>
            <div class="col-md-5 col-lg-4">
                <img src="assets/img/guru.jpg"
                    class="rounded mx-auto d-block rounded-circle border border-success border-5" alt="" height="220"
                    width="220">
            </div>
            <div class="col-md-5 col-lg-3 ">
                <h1 class="text-capitalize fw-bold "><?php echo $_SESSION["guru"]['nama_guru']?></h1>

                <h4 class="border border-success border-3 rounded-pill">
                    <center> Teacher </center>
                </h4>

                <p>ID / Email : <br><?php echo $_SESSION["guru"]['id_guru']?> /
                    <?php echo $_SESSION["guru"]['email_guru']?></p>
                <p>No Telepon : <br> <?php echo $_SESSION["guru"]['telepon_guru']?></p>
                <a href="logout.php"><INPUT TYPE="button" value="🚫 Logout"
                        class="btn btn-outline-danger btn-kirim"></a>
                <a href="ubah.php?&id=<?php echo $_SESSION["guru"]['id_guru']?>&ubah=guru"><INPUT TYPE="button"
                        value="✏️ Edit Profil" class="btn btn-outline-primary btn-kirim"></a>
                <?php $idgurumapel=$_SESSION["guru"]['id_guru']; ?>
                <br />
                <p></p>
            </div>
        </div>
        <hr class="text-secondary" />
        <h2>
            Nilai Murid Yang Di Bimbing
        </h2>
        <hr class="text-secondary" />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $ambil=$koneksi->query("SELECT * FROM mapel WHERE id_guru_mapel=$idgurumapel");?>
                <?php while($pecah = $ambil->fetch_assoc()) {?>
                <tr>
                    <td class="text-break">
                        <?php echo $pecah['nama_mapel'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['kelas_mapel'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['guru_mapel'];?>
                    </td>
                    <td class="text-break">
                        <a href="data.php?&mapel=<?php echo $pecah['nama_mapel'];?>&data=nilai"><INPUT TYPE="button"
                                value="⚙️ Kelola Nilai" class="btn btn-outline-primary btn-kirim btn-sm "></a>

                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
</section>

<?php }


else if ($akun='murid') { 
    if (!isset($_SESSION['murid'])) {
        echo " <script>location='login.php?login=murid';</script>";
        exit(); }   ?>

<img src="assets/img/upakun.jpg" alt="" height="80" width="100%">



<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class=" col-lg-2"></div>
            <div class="col-md-5 col-lg-4">
                <img src="assets/img/mrd.png"
                    class="rounded mx-auto d-block rounded-circle border border-success border-5" alt="" height="220"
                    width="220">
            </div>
            <div class="col-md-5 col-lg-3 ">
                <h1 class="text-capitalize fw-bold "><?php echo $_SESSION["murid"]['nama_murid']?></h1>

                <h4 class="border border-success border-3 rounded-pill">
                    <center> Student </center>
                </h4>

                <p>ID / Email : <br><?php echo $_SESSION["murid"]['id_murid']?>
                    <?php echo $_SESSION["murid"]['email_murid']?></p>
                <p>No Telepon : <br> <?php echo $_SESSION["murid"]['telepon_murid']?></p>
                <a href="logout.php"><INPUT TYPE="button" value="🚫 Logout"
                        class="btn btn-outline-danger btn-kirim"></a>
                <a href="ubah.php?&id=<?php echo $_SESSION["murid"]['id_murid']?>&ubah=murid"><INPUT TYPE="button"
                        value="✏️ Edit Profil" class="btn btn-outline-primary btn-kirim"></a>
                <br />
                <p></p>
            </div>
        </div>
        <hr class="text-secondary" />
        <h2>
            Nilai Mata Pelajaran Yang Sudah Di Tempuh
        </h2>
        <hr class="text-secondary " />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col" class="text-end">Nilai</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $kelas=$_SESSION["murid"]['kelas']; ?>
                <?php $ambil=$koneksi->query("SELECT * FROM mapel WHERE kelas_mapel<=$kelas");
                    $pembagiratarata='0';
                    $jumlahnilai='0';?>
                <?php while($pecah = $ambil->fetch_assoc()) {?>
                <tr>
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
                    <td></td>
                </tr>

                <?php   $jumlahnilai=$jumlahnilai+$_SESSION["murid"][$pecah['nama_mapel']];
                        $pembagiratarata=$pembagiratarata+1;
                }?>
            </tbody>
            <?php $ratarata=$jumlahnilai/$pembagiratarata;  ?>
            <tbody>
                <tr>
                    <th scope="col">Jumlah Nilai</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" class="text-end"><?php echo number_format("$jumlahnilai");?></th>
                    <th scope="col"></th>
                </tr>
                <tr>
                    <th scope="col">Jumlah Mapel</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" class="text-end"><?php echo number_format("$pembagiratarata");?></th>
                    <th scope="col"></th>
                </tr>


            </tbody>
            <tr>
                <th scope="col">Rata - Rata Nilai</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" class="text-end"><?php echo number_format("$ratarata",2);?></th>
                <th scope="col"></th>
            </tr>
        </table>
        <a href="cetak.php"><INPUT TYPE="button" value="cetak" class="btn btn-outline-danger btn-kirim"></a>

    </div>
</section>



<?php } ?>




<!-- footer dan tutup body -->
<?php include 'script/footer.php';?>