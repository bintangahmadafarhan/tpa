<?php
include "admin/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Tirta Purbalingga Adijaya</title>

    <!-- G FONTS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    </style>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>
    <!-- NAVIGASI -->
    <div class="mobilenav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto align-items-center">
                        <img src="./assets/logo.png" href="admin/index.php" alt=""></a>
                        <a class="nav-link active" aria-current="page" href="#sejarah">Sejarah</a>
                        <a class="nav-link" href="#visimisi">Visi Misi</a>
                        <a class="nav-link" href="#penghargaan">Penghargaan</a>
                        <a class="nav-link" href="#produk">Produk Kami</a>
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                        <a class="nav-link" href="#berita">Berita</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="desktopnav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto align-items-center">
                        <a class="nav-link active" aria-current="page" href="#sejarah">Sejarah</a>
                        <a class="nav-link" href="#visimisi">Visi Misi</a>
                        <a class="nav-link" href="#penghargaan">Penghargaan</a>
                        <a href="admin/index.php"><img class="logo" src="./assets/logo.png" alt=""></a>
                        <a class="nav-link" href="#produk">Produk Kami</a>
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                        <a class="nav-link" href="#berita">Berita</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- END NAVIGASI -->

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                <?php
                $header_result = mysqli_query($dbcon, "SELECT * FROM t_header limit 1 ");
               $header = mysqli_fetch_array($header_result);
               ?>
                    <div class="content">
                        <div class="text-center">
                            <h1> <?php echo $header['judul']?> </h1>
                            <p> <?php echo $header['keterangan']?> </p>
                        </div>
                        <iframe width="100%" height="550" src="<?php echo $header['vidio'] ?> ">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- MITRA -->
    <!-- <section class="mitra">
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-2 text-center">
                    <img class="img-fluid" src="./assets/imgMitra.png" alt="">
                </div>
                <div class="col-11 col-lg-2 text-center">
                    <img class="img-fluid" src="./assets/imgMitra.png" alt="">
                </div>
                <div class="col-11 col-lg-2 text-center">
                    <img class="img-fluid" src="./assets/imgMitra.png" alt="">
                </div>
                <div class="col-11 col-lg-2 text-center">
                    <img class="img-fluid" src="./assets/imgMitra.png" alt="">
                </div>
                <div class="col-11 col-lg-2 text-center">
                    <img class="img-fluid" src="./assets/imgMitra.png" alt="">
                </div>
                <div class="col-11 col-lg-2 text-center">
                    <img class="img-fluid" src="./assets/imgMitra.png" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- END MITRA -->

    <!-- TENTANG -->
    <!-- <section class="tentang">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="content">
                        <h1>Tentang PT. Tirta Purbalingga Adijaya</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="cardz">
                        <img src="./assets/imgTentang.png" alt="">
                        <h4>Sejarah</h4>
                        <p>Lorem Ipsum is simply text of the printing and typesetting </p>
                        <a href="#">Lihat selegkapnya</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cardz">
                        <img src="./assets/imgTentang.png" alt="">
                        <h4>Visi dan Misi</h4>
                        <p>Lorem Ipsum is simply text of the printing and typesetting </p>
                        <a href="#">Lihat selegkapnya</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cardz">
                        <img src="./assets/imgTentang.png" alt="">
                        <h4>Penghargaan</h4>
                        <p>Lorem Ipsum is simply text of the printing and typesetting </p>
                        <a href="#">Lihat selegkapnya</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cardz">
                        <img src="./assets/imgTentang.png" alt="">
                        <h4>Produk</h4>
                        <p>Lorem Ipsum is simply text of the printing and typesetting </p>
                        <a href="#">Lihat selegkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END TENTANG -->

    <!-- SEJARAH -->
    <section class="sejarah" id="sejarah">
        <div class="container-fluid">
            <div class="row rowSejarah">
                <div class="col-lg-6">
                    <div class="content">
                    <?php
                    $result = mysqli_query($dbcon, "SELECT * FROM t_content WHERE Judul = 'Sejarah PT. Tirta Purbaligga Adijaya'");
                    foreach ($result as $result) { ?>
                        <h1><?= $result['Judul'] ?></h1>
                        <p><?= $result['Deskripsi'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-11 col-lg-6" style="padding-right: 0;">
                    <img class="img-fluid" src="./assets/<?= $result['Gambar'] ?>" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END SEJARAH -->

    <!-- VISI MISI -->
    <section class="visimisi" id="visimisi">
        <div class="container">
            <div class="row align-items-center rowVisi">
                <div class="col-lg-6">
                    <?php
                    $result = mysqli_query($dbcon, "SELECT * FROM t_content WHERE Judul = 'Visi PT. Tirta Purbalingga Adijaya'");
                    foreach ($result as $result) { ?>
                <img class="img-fluid" src="./assets/<?= $result['Gambar'] ?>" alt="">
                </div>
                <div class="col-lg-6 col-11">
                    <div class="content">
                        <h1><?= $result['Judul'] ?></h1>
                        <p><?= $result['Deskripsi'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row align-items-center rowVisi2">
                <div class="col-lg-6 col-11">
                    <div class="content2">
                    <?php
                    $result = mysqli_query($dbcon, "SELECT * FROM t_content WHERE Judul = 'Misi PT. Tirta Purbalingga Adijaya'");
                    foreach ($result as $result) { ?>
                        <h1><?= $result['Judul'] ?></h1>
                        <p><?= $result['Deskripsi'] ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="./assets/<?= $result['Gambar'] ?>" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END VISI MISI -->

    <!-- PENGHARGAAN -->
    <section class="penghargaan" id="penghargaan">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="content">
                        <h1>Penghargaan PT. Tirta Purbalingga Adijaya</h1>
                    </div>
                </div>
            </div>
            <div class="row rowPenghargaan">
                <?php
                $result = mysqli_query($dbcon, "SELECT * FROM t_penghargaan");
                foreach ($result as $result) { ?>
                    <div class="col-lg-4 col-10">
                        <div class="cardz">
                            <div class="cardzHead">
                                <img style="border-radius:25px;height:260px;width:100%;" src="./assets/<?= $result["gambar"]; ?>" alt="">
                            </div>
                            <div class="cardzBody">
                                <p>Menerima Tahun <?= date('Y', strtotime($result['tahun'])) ?></p>
                                <h4>  <?= $result['judul'] ?></h4>
                                <!-- <a href="#">Lanjutkan Membaca</a> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END PENGHARGAAN -->

    <!-- PRODUK -->
    <section class="produk" id="produk">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <div class="content">
                        <h1>Produk PT. Tirta Purbalingga Adijaya</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-0">
                <?php
                $result = mysqli_query($dbcon, "SELECT * FROM t_produk");
                $r = 1;
                foreach ($result as $result) { ?>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $r; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed<?= $r; ?>" aria-expanded="true" aria-controls="collapsed<?= $r; ?>">
                                    <p><?= $result['nama'] ?></p>
                                </button>
                            </h2>
                            <div id="collapsed<?= $r; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $r; ?>">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
                                            <img src="assets/<?= $result['gambar'] ?>" alt="" title="">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center mt-xl-none mt-lg-none mt-md-none mt-sm-4 mt-4">
                                            <p>
                                                <?= $result['deskripsi'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    $r++;
                }
                ?>
            </div>
        </div>
    </section>
    <!-- END PRODUK -->

    <!-- BERITA -->
    <section class="berita" id="berita">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="content">
                        <h1>Berita Terbaru PT. <br>
                            Tirta Purbalingga Adijaya</h1>
                    </div>
                </div>
            </div>
            <div class="row rowBerita">
                <?php
                $result = mysqli_query($dbcon, "SELECT * FROM t_berita limit 3");
                foreach ($result as $result) { ?>
                    <div class="col-lg-4 col-10">
                        <div class="cardz">
                            <div class="cardzHead">
                                <img style="border-radius:25px;height:260px;width:100%;" src="./assets/<?= $result["gambar_berita"]; ?>" alt="">
                            </div>
                            <div class="cardzBody">
                                <?php
                                $kategori = $result['kategori'];
                                if ($result['kategori'] == 'Event') {
                                    echo '<p class="event">#Event</p>';
                                } elseif ($result['kategori'] == 'Loker') {
                                    echo '<p class="loker">#Loker</p>';
                                } else {
                                    echo '<p class="pengumuman">#Pengumuman</p>';
                                }
                                ?>
                                <h4><?= $result['judul'] ?></h4>
                                <p class="desc"><?= $result['isi'] ?></p>
                                <a href="">Lanjutkan Membaca</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END BERITA -->

    <!-- TESTIMONI -->
    <section class="testimoni" id="testimoni">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Apa kata mereka tentang <br>
                        PT. Tirta Purbalingga Adijaya</h1>
                </div>
            </div>
            <div class="row rowTestimoni">
                <?php
                $result = mysqli_query($dbcon, "SELECT * FROM t_testimoni");
                foreach ($result as $result) { ?>
                    <div class="col-lg-3 col-10">
                        <div class="cardz">
                            <?php
                            if ($result['rating'] == 5) {
                                for ($i = 1; $i <= 5; $i++) {
                                    echo '<img src="./assets/iconStarSingleActive.svg" alt="">';
                                }
                            } elseif ($result['rating'] == 4) {
                                for ($i = 1; $i <= 4; $i++) {
                                    echo '<img src="./assets/iconStarSingleActive.svg" alt="">';
                                }
                                echo '<img src="./assets/iconStarSinglePasive.svg" alt="">';
                            } elseif ($result['rating'] == 3) {
                                for ($i = 1; $i <= 3; $i++) {
                                    echo '<img src="./assets/iconStarSingleActive.svg" alt="">';
                                }
                                for ($i = 1; $i <= 2; $i++) {
                                    echo '<img src="./assets/iconStarSinglePasive.svg" alt="">';
                                }
                            } elseif ($result['rating'] == 2) {
                                for ($i = 1; $i <= 2; $i++) {
                                    echo '<img src="./assets/iconStarSingleActive.svg" alt="">';
                                }
                                for ($i = 1; $i <= 3; $i++) {
                                    echo '<img src="./assets/iconStarSinglePasive.svg" alt="">';
                                }
                            } else {
                                echo '<img src="./assets/iconStarSingleActive.svg" alt="">';
                                for ($i = 1; $i <= 4; $i++) {
                                    echo '<img src="./assets/iconStarSinglePasive.svg" alt="">';
                                }
                            }
                            ?>
                            <p class="desc"><?= $result['testimoni'] ?></p>
                            <div class="d-flex align-items-center profilWrapper">
                                <img src="./assets/<?= $result["narasumber_foto"]; ?>" alt="">
                                <div>
                                    <h5><?= $result['narasumber'] ?></h5>
                                    <p><?= $result['narasumber_profesi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END TESTIMONI -->

    <!-- GALERI -->
    <section class="galeri">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-6 col-lg-2">
                    <img class="img-fluid" src="./assets/imgGaleri1.png" alt="">
                </div>
                <div class="col-6 col-lg-2">
                    <img class="img-fluid" src="./assets/imgGaleri2.png" alt="">
                </div>
                <div class="col-6 col-lg-2">
                    <img class="img-fluid" src="./assets/imgGaleri3.png" alt="">
                </div>
                <div class="col-6 col-lg-2">
                    <img class="img-fluid" src="./assets/imgGaleri4.png" alt="">
                </div>
                <div class="col-6 col-lg-2">
                    <img class="img-fluid" src="./assets/imgGaleri5.png" alt="">
                </div>
                <div class="col-6 col-lg-2">
                    <img class="img-fluid" src="./assets/imgGaleri6.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- END GALERI -->

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="./assets/logo.png" alt="">
                    <p class="desc">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown
                        printer</p>
                    <p class="cpr">2022 &copy Copyright All Right Reserved</p>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <h5>Information</h5>
                        </li>
                        <li>
                            <a>Sejarah</a>
                        </li>
                        <li>
                            <a>Visi & Misi</a>
                        </li>
                        <li>
                            <a>Penghargaan</a>
                        </li>
                        <li>
                            <a>Produk</a>
                        </li>
                        <li>
                            <a>Testimoni</a>
                        </li>
                        <li>
                            <a>Berita</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <h5>Penghargaan</h5>
                        </li>
                        <li>
                            <a>Sertifikat ISO</a>
                        </li>
                        <li>
                            <a>Visi & Misi</a>
                        </li>
                        <li>
                            <a>Penghargaan</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <h5>Loker</h5>
                        </li>
                        <li>
                            <a>Sejarah</a>
                        </li>
                        <li>
                            <a>Visi & Misi</a>
                        </li>
                        <li>
                            <a>Penghargaan</a>
                        </li>
                        <li>
                            <a>Produk</a>
                        </li>
                        <li>
                            <a>Testimoni</a>
                        </li>
                        <li>
                            <a>Berita</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <h5>Sosial Media</h5>
                        </li>
                        <?php
                        $results = mysqli_query($dbcon, "SELECT * FROM `t_sosial-media`");
                        foreach ($results as $result) : ?>
                            <li>
                                <a href="<?= $result["link"]; ?>"><?= $result["nama"]; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <!-- JS -->
    <script src="./js/script.js"></script>

</body>

</html>