<!-- starsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php'; 

$tujuan=$_GET['hapus']; 


if ($tujuan=='guru') {
    $ambil = $koneksi->query("SELECT * FROM guru WHERE id_guru='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();

    $koneksi->query("DELETE FROM guru WHERE id_guru='$_GET[id]'");

    echo "<script>
alert('Guru Terhapus')
</script>";
    echo "<script>
location = 'data.php?data=guru'
</script>";
}
else if ($tujuan=='murid'){

    $ambil = $koneksi->query("SELECT * FROM murid WHERE id_murid='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    
    $koneksi->query("DELETE FROM murid WHERE id_murid='$_GET[id]'");
    
    echo "<script>alert('Murid Terhapus')</script>";
    echo "<script>location='data.php?data=murid'</script>"; 
}

else if ($tujuan=='mapel'){

    $ambil = $koneksi->query("SELECT * FROM mapel WHERE id_mapel='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();

    $koneksi->query("DELETE FROM mapel WHERE id_mapel='$_GET[id]'");

    echo "<script>alert('Mata Pelajaran Terhapus')</script>";
    echo "<script>location='data.php?data=mapel'</script>";

}

?>