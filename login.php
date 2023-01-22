<!-- startsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php';  ?>

<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<style>
body {
    background-color: gainsboro;
}
</style>

<?php $login=$_GET['login']; 


if($login=='admin'){    ?>

<section>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-tittle text-center">L O G I N</h1>
                <div class="card-text">
                    <form role="form" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user" placeholder="username" />
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="password" />
                        </div>

                        <div class="d-grid gap-2">
                            <button name="login" class="btn btn-primary">Submit For Admin</button>
                            <center>
                                <a href="login.php?login=guru"><INPUT TYPE="button" value="Login Guru"
                                        class="btn btn-primary btn-kirim"></a>
                                <a href="login.php?login=murid"><INPUT TYPE="button" value="Login Murid"
                                        class="btn btn-primary btn-kirim"></a>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['login'])) {
            $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]'AND password ='$_POST[pass]'");
            $yangcocok = $ambil->num_rows;
            if ($yangcocok == 1) {
                $_SESSION['admin'] = $ambil->fetch_assoc();
                echo "<script>alert('Login berhasil [ Selamat datang admin ]')</script>";
                echo "<script>location='index.php'</script>";
            } else {
                echo "<script>alert('Login Gagal [ Coba cek kembali ussername & Password anda ]')</script>";
                echo "<script>location='login.php?login=admin'</script>";
            }
        }
        ?>
</section>
<?php }?>

<?php if($login=='guru'){    ?>

<section>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-tittle text-center">L O G I N</h1>
                <div class="card-text">
                    <form role="form" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="password" />
                        </div>
                        <div class="d-grid gap-2">
                            <button name="login" class="btn btn-primary">Submit For Teacher</button>
                            <center>
                                <a href="login.php?login=admin"><INPUT TYPE="button" value="Login Admin"
                                        class="btn btn-primary btn-kirim"></a>
                                <a href="login.php?login=murid"><INPUT TYPE="button" value="Login Murid"
                                        class="btn btn-primary btn-kirim"></a>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if (isset($_POST['login'])) {
                            $ambil = $koneksi->query("SELECT * FROM guru WHERE email_guru='$_POST[email]'AND password_guru ='$_POST[pass]'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok==1)
                            {
                                $_SESSION['guru']=$ambil->fetch_assoc();
                                echo "<script>alert('Login berhasil [ Selamat datang Guru ]')</script>";
                                echo "<script>location='index.php'</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Login Gagal [ Coba cek kembali ussername & Password anda ]')</script>";
                                echo "<script>location='login.php?login=guru'</script>";
                            }
                        }
                        ?>

</section>

<?php }?>
<?php if($login=='murid'){    ?>

<section>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-tittle text-center">L O G I N</h1>
                <div class="card-text">
                    <form role="form" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="password" />
                        </div>
                        <div class="d-grid gap-2">
                            <button name="login" class="btn btn-primary">Submit For Student</button>
                            <center>
                                <a href="login.php?login=admin"><INPUT TYPE="button" value="Login Admin"
                                        class="btn btn-primary btn-kirim"></a>
                                <a href="login.php?login=guru"><INPUT TYPE="button" value="Login Guru"
                                        class="btn btn-primary btn-kirim"></a>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
                        if (isset($_POST['login']))
                        {
                            $ambil = $koneksi->query("SELECT * FROM murid WHERE email_murid='$_POST[email]'AND password_murid ='$_POST[pass]'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok==1)
                            {
                                $_SESSION['murid']=$ambil->fetch_assoc();
                                echo "<script>alert('Login berhasil [ Selamat datang Murid ]')</script>";
                                echo "<script>location='index.php'</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Login Gagal [ Coba cek kembali ussername & Password anda ]')</script>";
                                echo "<script>location='login.php?login=murid'</script>";
                            }
                        }
                        ?>

</section>

<?php }?>

<!-- footer dan tutup body -->
<?php include 'script/footer.php';?>