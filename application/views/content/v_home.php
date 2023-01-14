<?php
function format_hari_tanggal($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i:s', strtotime($waktu));

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$hari, $tanggal $bulan $tahun";
}

$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20$website->name..%21%0ASaya%20tertaik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";

?>




<div class="container-xxl about" data-aos="fade-up" data-aos-duration="1000" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block">
                <div class="img">
                    <img src="https://admin103.bctransportasi.com/upload/about_us/<?= $about_us->image; ?>"
                        class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0 ps-5">
                <div class="caption">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-7">
                            <div class="text-heading text-start position-relative">
                                <h1><?= $about_us->title; ?></h1>
                            </div>
                        </div>
                    </div>
                    <?= $about_us->deskripsi; ?>
                </div>
            </div>
            <div class="col-lg-5 d-block d-lg-none mt-4 mt-lg-0">
                <div class="img">
                    <img src="https://admin103.bctransportasi.com/upload/about_us/<?= $about_us->image; ?>"
                        class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-xxl promo px-0" data-aos="fade-up" data-aos-duration="1000">
    <img src="<?= base_url(); ?>assets/img/bg-penawaran.png" class="img-fluid bg" alt="">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                <h2 class="text-white fw-bold">PENAWARAN SPECIAL</h2>
                <a href="<?= $waLink; ?>" target="_blank" class="btn py-3 px-3 rounded-2 mt-3 fw-bolder bg-green"><i
                        class="fa fa-arrow-circle-right"></i> Dapatkan
                    Penawaran</a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-7  col-sm-12 text-white mt-5 mt-md-0">
                <p>Mari bergabung dan bermitra dengan kami hari ini, dan dapatkan penawaran terbaik dari kami untuk Anda
                    yang akan berlangganan dengan kami</p>
                <div class="d-lg-flex d-block mt-3 mt-md-5">
                    <?php
                    $number = $website->phone;
                    $n1 = substr($number, 1, 3);
                    $n2 = substr($number, 4, 4);
                    $n3 = substr($number, 8);
                    $wa = $n1 . ' ' . $n2 . ' ' . $n3;
                    ?>
                    <p class="text-white fw-bold">+62 <?= $wa; ?></p>
                    <p class="text-white ms-0 ms-lg-4"><?= $website->email; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid choise" data-aos="fade-up" data-aos-duration="1000" id="why-us">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 pe-5">
                <div class="caption">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-7">
                            <div class="text-heading text-start position-relative">
                                <h1><?= $why_choise->title; ?></h1>
                            </div>
                        </div>
                    </div>
                    <?= $why_choise->deskripsi; ?>
                </div>
                <div class="fitur mt-5">
                    <div class="row">
                        <?php foreach ($fitur as $f) { ?>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div class="img text-center me-1">
                                    <img src="https://admin103.bctransportasi.com/upload/fitur/<?= $f->image; ?>"
                                        class="img-fluid" alt="">
                                </div>
                                <p><?= $f->title; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="img">
                    <img src="https://admin103.bctransportasi.com/upload/why_choise/<?= $why_choise->image; ?>"
                        class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl our-services" id="services">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11">
                <div class="text-heading text-center position-relative">
                    <h1>Layanan Kami</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-10">
                <div class="slider-container mt-5">
                    <div class="swiper-container services-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($service as $s) { ?>
                            <div class="swiper-slide">
                                <div class="service-box p-4">
                                    <div class="title">
                                        <img src="https://admin103.bctransportasi.com/upload/service/<?= $s->image; ?>"
                                            class="img-fluid bg" alt="">
                                        <img src="https://admin103.bctransportasi.com/upload/service/<?= $s->image_green; ?>"
                                            class="img-fluid bg-ijo" alt="">
                                        <p class="mt-4 text-uppercase fw-bold"><?= $s->title; ?></p>
                                    </div>
                                    <div class="desk mt-3">
                                        <p><?= $s->deskripsi; ?></p>
                                        <div class="btn-klik d-flex">
                                            <i class="fa fa-arrow-circle-right me-1"></i>
                                            <a href="<?= $waLink; ?>" target="_blank"> Dapatkan Penawaran</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl client px-0" id="client">
    <div class="container py-5 px-lg-5">

        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-heading text-center position-relative">
                    <h1>Pelanggan Kami</h1>
                </div>
            </div>
        </div>
        <div class="container  px-lg-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="slider-container px-5 mt-5">
                <div class="swiper-container client-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($client as $c) { ?>
                        <div class="swiper-slide d-flex justify-content-center align-items-center">
                            <div class="client-img d-flex justify-content-center align-items-center">
                                <img src="https://admin103.bctransportasi.com/upload/client/<?= $c->image; ?>"
                                    title="<?= $c->nama; ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl gallery px-0" id="gallery">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-heading text-center position-relative">
                    <h1>Galeri</h1>
                </div>
            </div>
        </div>
        <div class="slider-container mt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="swiper-container gallery-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($gallery as $g) { ?>
                    <div class="swiper-slide">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <a href="https://admin103.bctransportasi.com/upload/gallery/<?= $g->image; ?>"
                                    data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                    <img src="https://admin103.bctransportasi.com/upload/gallery/<?= $g->image; ?>"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="gallery-content text-center">
                                <p class="mb-0 fw-bold"><?= $g->name; ?></p>
                                <small class="fw-bold"><?= format_hari_tanggal($g->createDate); ?></small>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>
</div>

<div class="container-xxl video px-0">
    <div class="container py-5 px-lg-5">

        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-heading text-center position-relative">
                    <h1>Video Hasil Kerja</h1>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4" data-aos="fade-up" data-aos-duration="1000">
            <?php foreach ($youtube as $y) { ?>
            <div class="col-lg-3 col-6">
                <a href="<?= $y->link; ?>" target="_blank">
                    <div class="video-box ">
                        <div class="video-img">
                            <img src="https://admin103.bctransportasi.com/upload/img_youtube/<?= $y->image; ?>"
                                class="img-fluid w-100" alt="">
                        </div>
                        <div class="play">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </div>
                        <div class="video-content text-center text-white">
                            <p class="mb-0 fw-bold"><?= $y->nama; ?></p>
                            <small class="fw-bold"><?= format_hari_tanggal($y->create_date); ?></small>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>