<!-- starsesi dan konelksi ke mysql -->
<?php   include 'script/startsesiandkoneksimysql.php'; ?>

<!-- Head Html sampai open body -->
<?php include 'script/headhtmlopenbody.php';?>

<!-- Start Header Navbar -->
<?php include 'script/navbar.php';?>

<!-- ======= Hero Section ======= -->
<section id="hero2"></section>

<!-- Tujuan link -->
<?php $tujuan=$_GET['ke']; 

if($tujuan=='berita'){  ?>


<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Berita & Informasi</h2>
            <p>Menampilkan Berita SMAN 1 BAGAN SINEMBAH dari yang paling baru</p>
        </div>
    </div>
</section>
<!-- ======= End Services Section ======= -->
<!-- ======= Team Section ======= -->
<section id="berita" class="berita">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/berita1.jpeg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h4>
                        <p>Udara merupakan salah satu unsur penting dalam kehidupan...</p>
                        <a href="halaman.php?ke=berita-detail">Berita Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/berita2.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h4>

                        <p>Udara merupakan salah satu unsur penting dalam kehidupan...</p>
                        <a href="halaman.php?ke=berita-detail">Berita Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/berita3.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h4>
                        <p>Udara merupakan salah satu unsur penting dalam kehidupan...</p>
                        <a href="halaman.php?ke=berita-detail">Berita Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/berita4.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h4>
                        <p>Udara merupakan salah satu unsur penting dalam kehidupan...</p>
                        <a href="halaman.php?ke=berita-detail">Berita Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/berita3.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h4>
                        <p>Udara merupakan salah satu unsur penting dalam kehidupan...</p>
                        <a href="halaman.php?ke=berita-detail">Berita Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/berita5.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h4>
                        <p>Udara merupakan salah satu unsur penting dalam kehidupan...</p>
                        <a href="halaman.php?ke=berita-detail">Berita Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

<?php }

else if($tujuan=='berita-detail'){   ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Berita Details</li>
            </ol>
            <h2>Berita Details</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Berita Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="assets/img/berita1.jpeg" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/berita2.jpg" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/berita3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="berita">
                        <h2>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h2>
                        <p>
                            Udara merupakan salah satu unsur penting dalam kehidupan, namun seiring dengan
                            meningkatnya penggunaan alat transportasi terutama transportasi darat, kualitas udara
                            telah mengalami perubahan. Perubahan lingkungan udara pada umumnya disebabkan oleh
                            pencemaran
                            udara. Kehadiran bahan atau zat asing di dalam udara dalam jumlah tertentu serta berada
                            di udara dalam waktu yang cukup lama, akan dapat mengganggu kehidupan manusia, hewan dan
                            tumbuhan, maka dari itu SMAN 1 Bagan Sinembah
                            melakukan kunjungan dan pemberian bibit pohon kepada pihak Kecamatan bagan sinembah
                            sebagai bentuk kepedulian SMAN 1 Bagan Sinembah terhadap lingkungan sekitar sekaligus
                            menjalin kerjasama dengan pihak Kecamatan Bagan Sinembah
                            untuk menimbulkan kesadaran pentingnya menjaga keasrian lingkungan.
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="assets/img/berita5.jpg" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/berita4.jpg" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/berita2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-description">
                        <h2>SMA NEGERI 1 BAGAN SINEMBAH MENJALIN KERJASAMA DENGAN CAMAT BAGAN SINEMBAH DALAM RANGKA
                            MENUJU SEKOLAH ADIWIYATA TINGKAT PROVINSI</h2>
                        <p>
                            Udara merupakan salah satu unsur penting dalam kehidupan, namun seiring dengan
                            meningkatnya penggunaan alat transportasi terutama transportasi darat, kualitas udara
                            telah mengalami perubahan. Perubahan lingkungan udara pada umumnya disebabkan oleh
                            pencemaran
                            udara. Kehadiran bahan atau zat asing di dalam udara dalam jumlah tertentu serta berada
                            di udara dalam waktu yang cukup lama, akan dapat mengganggu kehidupan manusia, hewan dan
                            tumbuhan, maka dari itu SMAN 1 Bagan Sinembah
                            melakukan kunjungan dan pemberian bibit pohon kepada pihak Kecamatan bagan sinembah
                            sebagai bentuk kepedulian SMAN 1 Bagan Sinembah terhadap lingkungan sekitar sekaligus
                            menjalin kerjasama dengan pihak Kecamatan Bagan Sinembah
                            untuk menimbulkan kesadaran pentingnya menjaga keasrian lingkungan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Berita Details Section -->
</main>
<!-- End #main -->

<?php } 
else if($tujuan=='pengumuman'){   ?>


<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Pengumuman Sekolah</h2>
            <p>Menampilkan Pengumuman SMAN 1 BAGAN SINEMBAH dari yang paling baru</p>
        </div>
    </div>
</section>
<!-- ======= End Services Section ======= -->

<!-- ======= Team Section ======= -->
<section id="berita" class="berita">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-3">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member-info">
                        <h5>Pengumuman</h5>
                        <h4>PENGUMUMAN KELULUSAN PESERTA DIDIK SMA NEGERI 1 BAGAN SINEMBAH TAHUN PELAJARAN 2021/2022
                        </h4>
                        <p>Hai adik-adik peserta didik di SMA NEGERI 1 BAGAN SINEMBAH, penasaran ya dengan hasil
                            belajar selama 3 tahun di SMA tercinta...</p>
                        <a href="halaman.php?ke=pengumuman-detail">Pengumuman Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

<?php }

else if($tujuan=='pengumuman-detail'){   ?>


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Pengumuman Details</li>
            </ol>
            <h2>Pengumuman Details</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Berita Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="assets/img/lulus.jpg" alt="" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="berita">
                        <h2>PENGUMUMAN KELULUSAN PESERTA DIDIK SMA NEGERI 1 BAGAN SINEMBAH TAHUN PELAJARAN 2021/2022
                        </h2>
                        <p>
                            Hai adik-adik peserta didik di SMA NEGERI 1 BAGAN SINEMBAH, penasaran ya dengan hasil
                            belajar selama 3 tahun di SMA tercinta ?
                            <br /><br />Kami berharap adik-adik semua tidak melupakan jasa para guru-guru dan juga
                            para karyawan di SMA NEGERI 1 BAGAN SINEMBAH. Kami juga berharap kelak ke depan
                            adik-adik dapat menggapai cita-cita yang selama ini
                            diinginkan. Tunjukkan alumni SMA NEGERI 1 BAGAN SINEMBAH bisa bersaing, berkarya untuk
                            mewujudkan keinginan cita-cita luhur. Jangan lupa pula tetap berbakti kepada orang tua,
                            karena jasa mereka tak akan pernah terbalaskan.
                            Doa kami, semoga semua sehat, bahagia dan sukses selalu...!!! Aamiinn.<br /><br />Untuk
                            mengetahui hasilnya, silakan klik tautan di bawah ini : <br /><br />
                            <a href="#">Lihat Pengumuman</a> <br /><br /> Terimakasih...!!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Berita Details Section -->
</main>
<!-- End #main -->



<?php }

else if($tujuan=='agenda'){   ?>

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Agenda Sekolah</h2>
            <p>Menampilkan Agenda SMAN 1 BAGAN SINEMBAH dari yang paling baru</p>
        </div>
    </div>
</section>
<!-- ======= End Services Section ======= -->
<!-- ======= Team Section ======= -->
<section id="berita" class="berita">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member-info">
                        <h5>Agenda</h5>
                        <h4>Kedatangan Mentri pendidikan di SMA NEGERI 1 BAGAN SINEMBAH</h4>
                        <p>Dapat di saksikan langsung secara streaming via youtube</p>
                        <a href="berita-details.html">Link youtube</a>
                        <br /><br />
                        <p>Diupdate : <b>Jumat, 15 Februari 2021</b></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member-info">
                        <h5>Agenda</h5>
                        <h4>Pengembangan minat dan bakat peserta didik SMA NEGERI 1 BAGAN SINEMBAH</h4>
                        <p>Dapat di saksikan langsung secara streaming via youtube</p>
                        <a href="berita-details.html">Link youtube</a>
                        <br /><br />
                        <p>Diupdate : <b>Selasa, 19 Februari 2021</b></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member-info">
                        <h5>Agenda</h5>
                        <h4>Pengajian Idhul Adha 1442H</h4>
                        <p>Dapat di saksikan langsung secara streaming via youtube</p>
                        <a href="berita-details.html">Link youtube</a>
                        <br /><br />
                        <p>Diupdate : <b>Jumat, 22 Februari 2021</b></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="member d-flex flex-wrap align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member-info">
                        <h5>Agenda</h5>
                        <h4>HUT SMA NEGERI 1 BAGAN SINEMBAH</h4>
                        <p>Dapat di saksikan langsung secara streaming via youtube</p>
                        <a href="berita-details.html">Link youtube</a>
                        <br /><br />
                        <p>Diupdate : <b>Rabu, 27 Februari 2021</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

<?php }

else if($tujuan=='struktur'){   ?>

<!-- ======= Struktur Section ======= -->
<section id="strukur" class="struktur section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Struktur Organisasi</h2>
        </div>
        <div class="section-title">
            <div class="icon">
                <img src="assets/img/struktur.png" alt="struktur" class="img-fluid" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Aditya Itachi</h4>
                        <span>KETUA KOMITE</span>
                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Sarah Aditya</h4>
                        <span>KEPALA SEKOLAH</span>
                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Uciha Irfan Arya</h4>
                        <span>KEPALA TATA USAHA</span>
                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Amanda Manopo</h4>
                        <span>WAKIL SALPRASHUM</span>
                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/team/1.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Arthur Pendragon</h4>
                        <span>WAKIL KURIKULUM</span>
                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/team/2.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Makise Kurisu</h4>
                        <span>WAKIL KESISWAAAN</span>
                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/team/3.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Okabe Rintarou</h4>
                        <span>PEMBINA OSIS</span>
                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pic"><img src="assets/img/team/4.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>KOORD ESKUL</span>
                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>KEPALA LAB</span>
                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>KEPALA PERPUS</span>
                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>KOORD OSN</span>
                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Struktur Section -->

<?php }

else if($tujuan=='prestasi-sekolah'){   ?>


<!--=======Section Prestasi=======-->
<section id="prestasi" class="prestasi section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Prestasi Sekolah</h2>
            <p>SMA kami dikenal dengan prestasi yang yang sangat banyak dan membanggakan daerah kami. Inilah
                beberapa prestasi besar yang pernah SMA kami dapatkan.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/prestasi/presS1.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <br><br>
                        <h4>TERAKREDITASI</h4>
                        <span>Terakreditasi A</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="assets/img/prestasi/presS2.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>SEKOLAH PENGGERAK</h4>
                        <span>Menjadi salah satu sekolah penggerak.</span>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End Section Prestasi -->

<?php }

else if($tujuan=='prestasi-siswa'){   ?>

<!-- ======= Section Prestasi ======= -->
<section id="prestasi" class="prestasi section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <br /><br />
            <h2>Prestasi Siswa</h2>
            <p>Berikut adalah sebagian prestasi yang sudah di raih oleh siswa/siswi kami</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/prestasi/presis1.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>JUARA 1</h4>
                        <span>Musically Akustik</span>
                        <p>Didapatkan dengan nilai sempurna oleh juri</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="assets/img/prestasi/presis2.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>JUARA 1</h4>
                        <span>Voli Putri</span>
                        <p>Didapatkan 4 kali berturut-turut</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="assets/img/prestasi/presis3.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>JUARA 1</h4>
                        <span>Bulu tangkis ganda putra</span>
                        <p>Didapatkan 6 kali berturut-turut</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pic"><img src="assets/img/prestasi/presis4.jpg" class="img-fluid" alt="" /></div>
                    <div class="member-info">
                        <h4>JUARA 2</h4>
                        <span>ATLETIK NASIONAL</span>
                        <p>Berhasil menjadi juara 2 pada perlombaan nasional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Prestasi -->

<?php }?>






<!-- footer dan tutup body -->
<?php include 'script/footer.php';?>