<!-- startsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php';  ?>

<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- Start Header Navbar -->
<?php include 'script/navbar.php';?>

<!-- ======= Hero Section ======= -->
<section id="hero2"></section>

<!-- Tujuan link -->
<?php $tujuan=$_GET['ke']; 

if($tujuan=='guru'){?>

<?php if (!isset($_SESSION['admin']))
{
echo " <script>
location = 'guru.php';
</script>";
exit();
}?>
<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Tambah Data Guru</h2>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/tambah.svg" class="rounded mx-auto d-block" alt="" height="auto" width="70%">
            </div>
            <div class="col-md-4 col-lg-4">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Nama Guru</label><br>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div>
                        <label>Email Guru</label><br>
                        <input type=" email" class="form-control" name="email">
                    </div>
                    <div>
                        <label>Telpon Guru</label><br>
                        <input type=" text" class="form-control" name="telepon">
                    </div>
                    <div>
                        <label>Password Guru</label><br>
                        <input type=" text" class="form-control" name="pass">
                    </div><br>
                    <div class="d-grid gap-2">
                        <button name="save" class="btn btn-outline-primary btn-kirim">💾 Simpan</button>
                    </div>
                </form>
            </div>
            <?php 
                if (isset($_POST['save']))
                {        
                    $koneksi->query("INSERT INTO guru (nama_guru,email_guru,telepon_guru,password_guru)VALUES('$_POST[nama]','$_POST[email]','$_POST[telepon]','$_POST[pass]')");

                    echo "<div class='alert alert-info'>Data tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=data.php?data=guru'>";
                }
                ?>
        </div>
</section>
<!-- ======= akhir form data  ======= -->


<?php } 

if($tujuan=='mapel'){

if (!isset($_SESSION['admin'])&!isset($_SESSION['guru']))
{
    echo " <script>location='mapel.php';</script>";
    exit();
}?>
<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Tambah Mata Pelajaran</h2>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/tambah3.svg" class="rounded mx-auto d-block" alt="" height="auto" width="80%">
            </div>
            <div class="col-md-4 col-lg-4">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Nama Matapelajaran</label><br>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div ">
                    <label>Kelas Matapelajaran</label><br>
                    <input type=" text" name="kelas" class="form-control">
                    </div>
                    <div ">
                    <label>Guru Matapelajaran</label><br>
                    <input type=" text" name="guru" class="form-control">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button name="save" class="btn btn-outline-primary btn-kirim">💾 Simpan</button>
                    </div>
                </form>
            </div>
            <?php   if (isset($_POST['save']))
                {
                    $koneksi->query("INSERT INTO mapel (nama_mapel,kelas_mapel,guru_mapel)VALUES('$_POST[nama]','$_POST[kelas]','$_POST[guru]')");
                    echo "<div class='alert alert-info'>Data tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=data.php?data=mapel'>";
                }   ?>
        </div>
    </div>
</section>
<!-- ======= akhir form data  ======= -->

<?php } 

if($tujuan=='murid'){ 

    
if (!isset($_SESSION['admin'])&!isset($_SESSION['guru']))
{
    echo " <script>location='murid.php';</script>";
    exit();
}

?>
<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Tambah Data Murid</h2>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/tambah2.svg" class="rounded mx-auto d-block" alt="" height="auto" width="90%">
            </div>
            <div class="col-md-4 col-lg-4">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Nama Murid</label><br>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div>
                        <label>Email Murid</label><br>
                        <input type=" text" name="email" class="form-control">
                    </div>
                    <div ">
                    <label>Telpon Murid</label><br>
                    <input type=" text" name="telepon" class="form-control">
                    </div>
                    <div ">
                    <label>Kelas Murid</label><br>
                    <input type=" number" name="kelas" class="form-control">
                    </div><br>
                    <div class="d-grid gap-2">
                        <button name="save" class="btn btn-outline-primary btn-kirim">💾 Simpan</button>
                    </div>
                </form>
            </div>
            <?php 
                if (isset($_POST['save']))
                {
                    
                    $koneksi->query("INSERT INTO murid (nama_murid,email_murid,telepon_murid,kelas)VALUES('$_POST[nama]','$_POST[email]','$_POST[telepon]','$_POST[kelas]')");

                    echo "<div class='alert alert-info'>Data tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=data.php?data=murid'>";
                }
                ?>


        </div>
    </div>
</section>
<!-- ======= akhir form data  ======= -->


<?php }?>

<!-- footer dan tutup body -->
<?php include 'script/footer.php';?>