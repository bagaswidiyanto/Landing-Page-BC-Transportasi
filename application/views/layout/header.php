<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">


    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://bctransportasi.com" />
    <meta property="og:image" content="<?= base_url() ?>assets/img/logo_url.png" />

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/img/logo_url.png" sizes="32x32" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-2">
            <div class="container">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img class="img-fluid" src="assets/img/logo_header.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-0 ms-xl-2 py-0">
                        <a href="#home" class="nav-item nav-link active">HOME</a>
                        <a href="#about" class="nav-item nav-link">ABOUT US</a>
                        <a href="#why-us" class="nav-item nav-link">WHY US</a>
                        <a href="#services" class="nav-item nav-link">OUR SERVICES</a>
                        <a href="#client" class="nav-item nav-link">OUR CLIENTS</a>
                        <a href="#gallery" class="nav-item nav-link">OUR GALLERIES</a>
                        <div class="contact d-flex">
                            <?php
                            $number = $website->phone;
                            $n1 = substr($number, 1, 15);
                            $wa = $n1;

                            $numberAPI = $website->phone;
                            $n1API = substr($numberAPI, 1);
                            $apiWa = $n1API;

                            $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20$website->name..%21%0ASaya%20tertaik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                            ?>
                            <p>informasi lanjut hubungi <br><a href="<?= $waLink; ?>" target="_blank">+62<?= $wa ?></a>
                            </p>
                            <div class="icon ms-2">
                                <img src="https://mitramentayalogistics.com/assets/imagenew/telpon.svg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid hero-header" id="home">
            <div class="slider-container">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider as $s) { ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="https://admin103.bctransportasi.com/upload/slider_hero/<?= $s->image; ?>" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <!-- <div class=""> -->
            <div class="container swipper-caption">
                <div class="row">
                    <div class="col-lg-8 text-center text-lg-start text-md-start">
                        <h1 class="text-white mb-3 display-6" data-aos="fade-up" data-aos-duration="500">
                            <?= $website->name; ?>
                        </h1>
                        <h4 class="text-white mb-4 fw-light" data-aos="fade-right" data-aos-duration="500">
                            <?= $text_hero->title; ?></h4>
                        <p class="text-white mb-0" data-aos="flip-left" data-aos-duration="500">
                            <?= $text_hero->deskripsi; ?></p>
                        <p class="text-white fw-bolder" data-aos="fade-right" data-aos-duration="500">
                            <?= $text_hero->kota; ?>
                        </p>
                        <div class="row g-3 mt-5 penawaran" data-aos="fade-down" data-aos-duration="500">
                            <div class="col-xl-5 col-lg-5 col-md-4 col-6">
                                <a href="<?= $waLink; ?>" target="_blank" class="bg-green py-2 px-2 px-sm-3 rounded-pill me-3 fw-bolder w-100 d-inline-block text-center">Dapatkan
                                    Penawaran</a>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-4 col-6 wow fadeRight" data-wow-delay="0.1s">
                                <a href="#" class="border border-1 bg-transparent py-2 px-2 px-sm-3 rounded-pill fw-bolder text-white w-100 d-inline-block text-center">Telusuri
                                    website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
    <!-- Navbar & Hero End -->


    <div class="container-fluid contact-top">
        <div class="container py-5 px-lg-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-2 text-center">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="contact-text">
                                <h5>Hubungi Kami</h5>
                                <p>E-mail : <?= $website->email; ?></p>
                                <p>Tel : <?= $website->phone; ?></p>
                                <div class="d-flex mt-2">
                                    <?php foreach ($sosmed as $s) { ?>
                                        <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" target="_blank" title="<?= $s->name; ?>"><i class="fa <?= $s->icon; ?>"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-2 text-center">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="contact-text">
                                <h5>Lokasi Kami</h5>
                                <?= $website->address; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative">
                    <?= $website->map; ?>
                </div>
            </div>
        </div>
    </div>