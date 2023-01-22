<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.html">Akatsuki</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.php?#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php?#about">About</a></li>
                <li><a class="nav-link scrollto" href="halaman.php?ke=struktur">Struktur</a></li>
                <li class="dropdown">
                    <a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" href="halaman.php?ke=berita">Berita & Informasi</a>
                        </li>
                        <li><a class="nav-link scrollto" href="halaman.php?ke=pengumuman">Pengumuman
                                Sekolah</a> </li>
                        <li><a class="nav-link scrollto" href="halaman.php?ke=agenda">Agenda
                                Sekolah</a></li>
                        <li><a class="nav-link scrollto" href="index.php?#portfolio">Infrastruktur</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Prestasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="halaman.php?ke=prestasi-sekolah">Sekolah</a></li>
                        <li><a href="halaman.php?ke=prestasi-siswa">Siswa</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.php?#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" href="data.php?data=guru">Guru</a></li>
                        <li><a class="nav-link scrollto" href="data.php?data=murid">Murid</a></li>
                        <li><a class="nav-link scrollto" href="data.php?data=mapel">Mata Pelajaran</a></li>

                    </ul>
                </li>
                <?php   if (isset($_SESSION['admin'])){
                            $akun='admin';      }
                        else if (isset($_SESSION['guru'])){
                            $akun='guru';       }
                        else if (isset($_SESSION['murid'])){
                            $akun='murid';      }  
                        else{
                            $akun='belumlogin';
                        }  ?>
                <li><a class="getstarted scrollto" href="akun.php?akun=<?php echo $akun; ?>">Akun</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->