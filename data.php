<!-- starsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php';  ?>



<?php $tujuan=$_GET['data']; 

if($tujuan=='guru') {   ?>
<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- Start Header Navbar -->
<?php include 'script/navbar.php';?>


<!-- ======= Hero Section ======= -->
<section id="hero2"></section>
<!-- End Hero -->

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Data Guru</h2>
        </div>
        <!-- ======= awal tabel data guru ======= -->
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Mengajar</th>
                    <?php 
                if (isset($_SESSION['admin']))
                {?>
                    <th scope="col">
                        <center>Aksi</center>
                    </th>
                    <?php }  ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $ambil=$koneksi->query("SELECT * FROM guru");?>
                    <?php while($pecah = $ambil->fetch_assoc()) {?>
                <tr>
                    <th scope="row"><?php echo $pecah['id_guru'];?></th>
                    <td class="text-break">
                        <?php echo $pecah['nama_guru'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['email_guru'];?>
                    </td>

                    <td class="text-break">
                        <?php echo $pecah['telepon_guru'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['Mengajar'];?>
                    </td>
                    <?php 
                if (isset($_SESSION['admin']))
                {?>
                    <td class="text-break">
                        <center>
                            <a href="hapus.php?&id=<?php echo $pecah['id_guru'];?>&hapus=guru"><INPUT TYPE="button"
                                    value="🗑️ Hapus" class="btn btn-outline-danger btn-kirim btn-sm ">

                            </a>
                            <a href="ubah.php?&id=<?php echo $pecah['id_guru'];?>&ubah=guru"><INPUT TYPE="button"
                                    value="✏️ Ubah" class="btn btn-outline-primary btn-kirim btn-sm "></a>
                        </center>
                    </td>
                    <?php }  ?>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <?php if (isset($_SESSION['admin']))
    {?>
        <tr>
            <a href="tambah.php?ke=guru"><INPUT TYPE="button" value="➕ Tambah Data"
                    class="btn btn-outline-success btn-kirim"></a>
        </tr>
        <?php }?>
    </div>
</section>

<!-- ======= akhir tabel data guru ======= -->
<!-- End Contact Section -->
</main>
<!-- End #main -->

<?php }
if($tujuan=='mapel') {   ?>

<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- Start Header Navbar -->
<?php include 'script/navbar.php';?>


<!-- ======= Hero Section ======= -->
<section id="hero2"></section>
<!-- End Hero -->


<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Data Mata Pelajaran</h2>
        </div>
        <!-- ======= awal tabel data guru ======= -->
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Guru</th>
                    <?php 
                    if (isset($_SESSION['admin'])||isset($_SESSION['guru']))
                        {?>
                    <th scope="col">
                        <center>Aksi</center>
                    </th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $ambil=$koneksi->query("SELECT * FROM mapel");?>
                    <?php while($pecah = $ambil->fetch_assoc()) {?>
                <tr>
                    <th scope="row"><?php echo $pecah['id_mapel'];?></th>
                    <td class="text-break">
                        <?php echo $pecah['nama_mapel'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['kelas_mapel'];?>
                    </td>

                    <td class="text-break">
                        <?php echo $pecah['guru_mapel'];?>
                    </td>
                    <?php
                    if (isset($_SESSION['admin'])||isset($_SESSION['guru']))
                        {?>
                    <td>
                        <center>
                            <a href="hapus.php?&id=<?php echo $pecah['id_mapel'];?>&hapus=mapel"><INPUT TYPE="button"
                                    value="🗑️ Hapus" class="btn btn-outline-danger btn-kirim btn-sm "> </a>
                            <a href="ubah.php?&id=<?php echo $pecah['id_mapel'];?>&ubah=mapel"><INPUT TYPE="button"
                                    value="✏️ Ubah" class="btn btn-outline-primary btn-kirim btn-sm "></a>
                        </center>
                    </td>
                    <?php }?>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <?php if (isset($_SESSION['admin'])||isset($_SESSION['guru']))
        {?>
        <tr>
            <a href="tambah.php?ke=mapel"><INPUT TYPE="button" value="➕ Tambah Data"
                    class="btn btn-outline-success btn-kirim"></a>
        </tr>
        <?php }?>
    </div>
</section>
<!-- ======= akhir tabel data guru ======= -->
<!-- End Contact Section -->
</main>
<!-- End #main -->



<?php }

if($tujuan=='murid') {   ?>
<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- Start Header Navbar -->
<?php include 'script/navbar.php';?>


<!-- ======= Hero Section ======= -->
<section id="hero2"></section>
<!-- End Hero -->

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Data Murid</h2>
        </div>
        <!-- ======= awal tabel data murid ======= -->
        <table class="table table-hover table-striped table-bordered table-responsive-sm">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Kelas</th>
                    <?php 
                    if (isset($_SESSION['admin'])||isset($_SESSION['guru']))
                        {?>
                    <th scope="col">
                        <center>Aksi</center>
                    </th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $ambil=$koneksi->query("SELECT * FROM murid");?>
                    <?php while($pecah = $ambil->fetch_assoc()) {?>
                <tr>
                    <th scope="row"><?php echo $pecah['id_murid'];?></th>
                    <td class="text-break">
                        <?php echo $pecah['nama_murid'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['email_murid'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['telepon_murid'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecah['kelas'];?>
                    </td>
                    <?php 
                    if (isset($_SESSION['admin'])||isset($_SESSION['guru']))
                        {?>
                    <td>
                        <center>
                            <a href="hapus.php?&id=<?php echo $pecah['id_murid'];?>&hapus=murid"><INPUT TYPE="button"
                                    value="🗑️ Hapus" class="btn btn-outline-danger btn-kirim btn-sm "></a>
                            <a href="ubah.php?&id=<?php echo $pecah['id_murid'];?>&ubah=murid"><INPUT TYPE="button"
                                    value="✏️ Ubah" class="btn btn-outline-primary btn-kirim btn-sm "></a>
                        </center>
                    </td>
                    <?php }?>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <?php if (isset($_SESSION['admin'])||isset($_SESSION['guru']))
        {?>
        <tr>
            <a href="tambah.php?ke=murid"><INPUT TYPE="button" value="➕ Tambah Data"
                    class="btn btn-outline-success btn-kirim"></a>
        </tr>
        <?php }?>
    </div>
</section>
<!-- ======= akhir tabel data murid ======= -->


<?php }
    if($tujuan=='nilai') {   


if (!isset($_SESSION['admin'])&&!isset($_SESSION['guru']))
{
echo "<script>
alert('Anda tidak Mengajar matakuliah ini ')
</script>";
echo " <script>
location = 'akun.php?akun=murid';
</script>";
exit();
}

$ambil = $koneksi->query("SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]'");
$pecah = $ambil->fetch_assoc();


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
<!DOCTYPE html>
<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';

if (isset($_SESSION['admin'])) {
    $akun='admin';
}
else if (isset($_SESSION['guru'])){
    $akun='guru';
}
else if (isset($_SESSION['murid'])){
    $akun='murid';
}
    ?>


<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto "><a href="akun.php?akun=<?php echo $akun?>">◀️</a></h1>
    </div>
</header>
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">

            <h2>Kelola Nilai <?php echo $pecah['nama_mapel'];?></h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Murid</th>
                    <th scope="col">Nama Murid</th>
                    <th scope="col">Update Terakhir</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $ambilmurid=$koneksi->query("SELECT * FROM murid WHERE kelas>='$pecah[kelas_mapel]'");?>
                <?php while($pecahmurid = $ambilmurid->fetch_assoc()) {?>

                <tr>
                    <td>
                        <?php echo $pecahmurid['id_murid'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecahmurid['nama_murid'];?>
                    </td>
                    <td class="text-break text-success">
                        <?php echo $pecahmurid['pengubah'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecahmurid['kelas'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecahmurid['telepon_murid'];?>
                    </td>
                    <td class="text-break">
                        <?php echo $pecahmurid[$pecah['nama_mapel']];?>
                    </td>
                    <td class="text-break">
                        <a
                            href="ubah.php?&mapel=<?php echo $pecah['nama_mapel'];?>&id=<?php echo $pecahmurid['id_murid'];?>&ubah=nilai"><INPUT
                                TYPE="button" value="🔧 Ubah" class="btn btn-outline-primary btn-kirim btn-sm "></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div><br><br><br><br>
</section>
<?php }?>

<!-- footer dan tutup body -->
<?php include 'script/footer.php';?>