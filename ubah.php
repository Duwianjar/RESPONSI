<!-- startsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php';  ?>

<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- mengambil petunjuk apa yang ingin di ubah -->
<?php $ubah=$_GET['ubah']; ?>




<!--   form untuk murid -->
<?php   if($ubah=='murid'){

//  Start Header Navbar 
include 'script/navbar.php';?>

<!-- Hero Section -->
<section id="hero2"></section>
<!-- End Hero -->
<?php
$ambil = $koneksi->query("SELECT * FROM murid WHERE id_murid='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
if (!isset($_SESSION['admin'])&&!isset($_SESSION['guru'])&&!isset($_SESSION['murid'])){
echo "<script>alert('maaf anda belum login');</script>";
echo " <script>
location = 'data.php?data=murid';
</script>";
exit();
}
if (!isset($_SESSION['admin'])&&!isset($_SESSION['guru'])&&$_SESSION["murid"]['id_murid']!=$pecah['id_murid']){
    echo "<script>alert('maaf ini bukan id anda');</script>";
    echo " <script>
    location = 'data.php?data=murid';
    </script>";
    exit();
    }  ?>
<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Ubah Data Murid</h2>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/ubah.svg" class="rounded mx-auto d-block" alt="" height="auto" width="80%">
            </div>
            <div class="col-md-4 col-lg-4 ">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Nama Murid</label><br> <input type="text" name="nama" class="form-control"
                            value="<?php echo $pecah['nama_murid'];?>">
                    </div>
                    <div>
                        <label>Email Murid</label><br><input type="text" name="email" class="form-control"
                            value="<?php echo $pecah['email_murid'];?>">
                    </div>
                    <div>
                        <label>Telepon Murid</label><br><input type="text" name="telepon" class="form-control"
                            value="<?php echo $pecah['telepon_murid'];?>">
                    </div>
                    <div>
                        <label>Kelas Murid</label><br><input type="text" name="kelas" class="form-control"
                            value="<?php echo $pecah['kelas'];?>">
                    </div>
                    <div>
                        <label>Password Murid</label><br><input type="text" name="pass" class="form-control"
                            value="<?php echo $pecah['password_murid'];?>">
                    </div><br>
                    <div class="d-grid gap-2">
                        <button name="ubah" class="btn btn-outline-primary btn-kirim">✏️ Ubah</button>
                    </div>
                </form>
            </div>
            <?php       if (isset($_POST['ubah'])){
                        $koneksi->query("UPDATE murid SET nama_murid='$_POST[nama]',
                        email_murid='$_POST[email]',telepon_murid='$_POST[telepon]',
                        kelas='$_POST[kelas]',password_murid='$_POST[pass]'WHERE id_murid='$_GET[id]'");   
                        echo "<script>alert('data murid telah di ubah');</script>";
                        echo "<script>location='data.php?data=murid';</script>";
            }?>
        </div>
    </div>
</section>
<?php }?>



<!--   form untuk guru -->
<?php   if($ubah=='guru'){

include 'script/navbar.php';?>

<!-- Hero Section -->
<section id="hero2"></section>
<?php
        $ambil = $koneksi->query("SELECT * FROM guru WHERE id_guru='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();
if (!isset($_SESSION['admin'])&&!isset($_SESSION['guru'])){
    echo "<script>alert('maaf ini bukan sesi anda');</script>";
echo " <script>
location = 'data.php?data=guru';
</script>";
exit();
} 
if (!isset($_SESSION['admin'])&&$_SESSION["guru"]['id_guru']!=$pecah['id_guru']){
echo "<script>alert('maaf ini bukan id anda');</script>";
echo " <script>
location = 'data.php?data=guru';
</script>";
exit();
} ?>
<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Ubah Data Guru</h2>
        </div>

        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/ubah2.svg" class="rounded mx-auto d-block" alt="" height="auto" width="70%">
            </div>
            <div class="col-md-4 col-lg-4 ">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Nama Guru</label><br>
                        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_guru'];?>">
                    </div>
                    <div>
                        <label>Email Guru</label><br>
                        <input type="text" name="email" class="form-control" value="<?php echo $pecah['email_guru'];?>">
                    </div>
                    <div>
                        <label>Telepon Guru</label><br>
                        <input type="text" name="telepon" class="form-control"
                            value="<?php echo $pecah['telepon_guru'];?>">
                    </div>
                    <div>
                        <label>Password Guru</label><br>
                        <input type="text" name="password" class="form-control"
                            value="<?php echo $pecah['password_guru'];?>">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button name="ubah" class="btn btn-outline-primary btn-kirim">✏️ Ubah</button>
                    </div>
                </form>
            </div>

            <?php 
if (isset($_POST['ubah']))
{

        $koneksi->query("UPDATE guru SET nama_guru='$_POST[nama]',
        email_guru='$_POST[email]',telepon_guru='$_POST[telepon]',
        password_guru='$_POST[password]'WHERE id_guru='$_GET[id]'");
    
    echo "<script>alert('data guru telah di ubah');</script>";
    echo "<script>location='data.php?data=guru';</script>";
}

?>
        </div>
    </div>
</section>
<!-- ======= akhir form data  ======= -->

<?php }?>


<!--   form untuk admin -->
<?php   if($ubah=='admin'){
        $ambil = $koneksi->query("SELECT * FROM admin  WHERE id_admin='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();
if (!isset($_SESSION['admin'])){
echo " <script>
location = 'admin.php';
</script>";
exit();
}
if ($_SESSION["admin"]['id_admin']!=$pecah['id_admin']){
    echo "<script>alert('maaf ini bukan id anda');</script>";
    echo " <script>
    location = 'akun.php?akun=admin';
</script>";
exit();
} ?>

<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Ubah Data Admin</h2>
        </div>
        <?php
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
$pecah = $ambil->fetch_assoc();?>


        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/ubahadmin.svg" class="rounded mx-auto d-block" alt="" height="auto" width="60%">
            </div>
            <div class="col-md-4 col-lg-4 ">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Username Admin</label><br>
                        <input type="text" name="username" class="form-control"
                            value="<?php echo $pecah['username'];?>">
                    </div>
                    <div>
                        <label>Nama Lengkap</label><br>
                        <input type="text" name="nama" class="form-control"
                            value="<?php echo $pecah['nama_lengkap'];?>">
                    </div>
                    <div>
                        <label>Password Admin</label><br>
                        <input type="text" name="password" class="form-control"
                            value="<?php echo $pecah['password'];?>">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button name="ubah" class="btn btn-outline-primary btn-kirim">✏️ Ubah</button>
                    </div>
                </form>
            </div>

            <?php 
if (isset($_POST['ubah']))
{

        $koneksi->query("UPDATE admin SET username='$_POST[username]',
        nama_lengkap='$_POST[nama]',password='$_POST[password]'WHERE id_admin='$_GET[id]'");
    
    echo "<script>alert('data admin telah di ubah');</script>";
    echo "<script>location='akun.php?akun=admin';</script>";
}

?>
        </div>

    </div>
</section>
<!-- ======= akhir form data  ======= -->


<?php }?>

<!--   form untuk mapel -->
<?php   if($ubah=='mapel'){
        $ambil = $koneksi->query("SELECT * FROM mapel WHERE id_mapel='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();
if (!isset($_SESSION['admin'])&&!isset($_SESSION['guru'])){
echo " <script>
location = 'mapel.php';
</script>";
exit();
}
?>

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Ubah Mata Pelajaran</h2>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/ubah3.svg" class="rounded mx-auto d-block" alt="" height="auto" width="60%">
            </div>
            <div class="col-md-4 col-lg-4 ">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Nama Mapel</label><br>
                        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_mapel'];?>">
                    </div>
                    <div>
                        <label>Mapel Kelas</label><br>
                        <input type="text" name="kelas" class="form-control"
                            value="<?php echo $pecah['kelas_mapel'];?>">
                    </div>
                    <div>
                        <label>Guru Mapel</label><br>
                        <input type="text" name="guru" class="form-control" value="<?php echo $pecah['guru_mapel'];?>">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button name="ubah" class="btn btn-outline-primary btn-kirim">✏️ Ubah</button>
                    </div>
                </form>
            </div>
            <?php 
if (isset($_POST['ubah']))
{

        $koneksi->query("UPDATE mapel SET nama_mapel='$_POST[nama]',
        kelas_mapel='$_POST[kelas]',guru_mapel='$_POST[guru]'WHERE id_mapel='$_GET[id]'");
    
    echo "<script>alert('data Mata pelajaran telah di ubah');</script>";
    echo "<script>location='data.php?data=mapel';</script>";
}

?>
        </div>
    </div>
</section>

<?php }?>
<!-- ======= akhir form data  ======= -->

<!--   form untuk nilai -->
<?php   if($ubah=='nilai'){

        $ambil = $koneksi->query("SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]'");
        $pecah = $ambil->fetch_assoc();
        $ambilmurid = $koneksi->query("SELECT * FROM murid WHERE id_murid='$_GET[id]'");
        $pecahmurid = $ambilmurid->fetch_assoc();

 
if (!isset($_SESSION['admin'])&&!isset($_SESSION['guru'])){
    echo "<script>alert('Anda tidak Mengajar matakuliah ini ')</script>";
    echo "<script>location ='akun.php';</script>";
    exit();
}

if (!isset($_SESSION['admin'])&&$pecah['id_guru_mapel']!=$_SESSION["guru"]['id_guru'])
{
echo "<script>
alert('Anda tidak Mengajar matakuliah ini ')
</script>";
echo " <script>
location = 'akun.php?akun=guru';
</script>";
exit();
}
?>
<!-- ======= awal form data  ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">


        <hr class="text-secondary" />
        <h3 class="text-muted">Kelola Nilai <?php echo $pecah['nama_mapel'] ?> untuk
            <?Php echo $pecahmurid['nama_murid'];?>
        </h3>
        <hr class="text-secondary" />
        <div class="row g-5">
            <div class="col-md-6 col-lg-6">
                <img src="assets/img/tambah.svg" class="rounded mx-auto d-block" alt="" height="auto" width="70%">
            </div>
            <div class="col-md-4 col-lg-4 ">
                <h4>Nilai Awal </h4>
                <h4>
                    <?Php echo $pecahmurid[$pecah['nama_mapel']];?>
                </h4>
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label>Ubah nilai jadi </label><br>
                        <input type="text" name="nama" class="form-control"
                            value="<?Php echo $pecahmurid[$pecah['nama_mapel']];?>">
                        <p></p>
                    </div>
                    <div class="d-grid gap-2">
                        <button name="ubah" class="btn btn-outline-primary btn-kirim">✏️ Ubah</button>
                    </div>
                </form>
            </div>


            <?php 
if (isset($_POST['ubah']))
{
    if (isset($_SESSION['admin'])) {
        $koneksi->query("UPDATE murid SET $pecah[nama_mapel]='$_POST[nama]',pengubah='Admin'WHERE id_murid='$_GET[id]'");
        }
    if (isset($_SESSION['guru'])) {
        $koneksi->query("UPDATE murid SET $pecah[nama_mapel]='$_POST[nama]',pengubah='Guru'WHERE id_murid='$_GET[id]'");
        }
    echo "<script>alert('Nilai $pecah[nama_mapel] untuk $pecahmurid[nama_murid] telah di ubah');</script>";
    echo "<script>location='data.php?&mapel=$pecah[nama_mapel]&data=nilai';</script>";
}

?>
        </div>
    </div>
    <br><br>
</section>
<?php }?>
<!-- ======= akhir form data  ======= -->

<!-- End Contact Section -->
</main>
<!-- End #main -->

<!-- footer dan tutup body -->
<?php include 'script/footer.php';?>