<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo-maha-akbar.png" sizes="32x32">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title> Beranda - PT Maha Akbar Sejahtera </title>
</head>

<style>
    .text-justify {
        text-align: justify;
        text-justify: inter-word;
    }
</style>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Nav Bar -->
    <nav class="site-nav mt-3">
        <div class="container">
            <div class="site-navigation">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <a href="index.html" class="logo m-0 float-start"><img src="images/logo-maha-akbar.png"
                                width="200px" alt=""></a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                        <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                            <li class="active"><a href="index.html">Beranda</a></li>
                            <li><a href="#tentang">Tentang Kami</a></li>
                            <li class="has-children">
                                <a href="#">Menu</a>
                                <ul class="dropdown">
                                    <li><a href="#seringTanya">Visi dan Misi</a></li>
                                    <li><a href="#kamiLakukan">Apa yang Kami Lakukan?</a></li>
                                    <li><a href="#proyekJasa">Proyek dan Jasa </a></li>
                                    <li><a href="#sertifikasi">Sertifikasi </a></li>
                                    <li><a href="#pilihKami">Mengapa Memilih Kami?</a></li>
                                    <li><a href="#kerjaSama">Kerja Sama</a></li>

                                </ul>
                            </li>
                            {{-- <li><a href="blog.html">News</a></li> --}}

                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 text-lg-end">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                            <li class="cta-button"><a href="/contact">Hubungi Kami</a></li>
                        </ul>

                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    <!-- Hero -->
    <div class="hero overlay">
        <div class="img-bg rellax">
            <img src="images/hero.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">

                    <h2 class="text-white font-weight-bolder" data-aos="fade-up">PT. MAHA AKBAR SEJAHTERA</h2>
                    <p class="mb-5 text-justify" data-aos="fade-up">Perusahaan yang bergerak dalam beberapa bidang usaha
                        antara
                        lain Mekanikal & Eektrikal, Jasa Informasi Teknologi, Fire Protection dan General Contructor.
                    </p>

                    {{-- <div data-aos="fade-up">
                        <a href="https://www.youtube.com/watch?v=5n-e6lOhVq0"
                            class="play-button align-items-center d-flex glightbox3">
                            <span class="icon-button me-3">
                                <span class="icon-play"></span>
                            </span>
                            <span class="caption">Lihat Video</span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang Kami -->
    <div class="section section-2" id="tentang">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-lg-2 mb-3 mb-lg-0">
                    <div class="image-stack mb-5 mb-lg-0">
                        <div class="image-stack__item image-stack__item--bottom" data-aos="fade-up">
                            <img src="images/mahab11.jpeg" alt="Image" class="img-fluid rellax ">
                        </div>
                        <div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"
                            data-rellax-percentage="0.5">
                            <img src="images/mahab.jpeg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1 mt-5">
                    <div>
                        <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Tentang Kami</h2>
                        <p class="text-justify" data-aos="fade-up" data-aos-delay="200">Perusahaan kami, PT. Maha
                            Akbar Sejahtera,
                            didirikan pada tahun 2014 sebagai CV. Maha Mega Sejahtera sebelum mengalami transformasi
                            menjadi PT. Maha Akbar Sejahtera pada tahun 2019. Kami adalah perusahaan yang berdedikasi
                            dalam berbagai bidang usaha, termasuk Mekanikal & Elektrikal (ME), layanan Informasi
                            Teknologi (IT), Fire Protection, dan General Contractor.</p>
                        <p class="text-justify" data-aos="fade-up" data-aos-delay="300">Dengan tim sumber daya
                            manusia yang profesional dan
                            berpengalaman, kami berkomitmen untuk memberikan pelayanan terbaik kepada klien kami. Kami
                            mengutamakan kepuasan pelanggan dan berusaha untuk terus berinovasi sesuai dengan visi dan
                            misi perusahaan kami. Kami bertekad untuk terus berkembang dan menjadi perusahaan yang
                            handal serta sukses di bidangnya.</p>
                        <p class="text-justify" data-aos="fade-up" data-aos-delay="400">Bersama-sama, mari kita
                            menciptakan masa depan yang
                            lebih baik melalui inovasi dan kualitas layanan yang kami tawarkan.</p>


                        {{-- <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read more</a></p> --}}
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Visi dan Misi -->
    <div class="section" id="seringTanya">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="images/qst.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="heading mb-5">Visi dan Misi Perusahaan</h2>
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Visi Perusahaan</button>
                            </h2>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    <p class="text-justify">1. Menjadi perusahaan kontraktor jasa dibidang Mekanikal &
                                        Elektrikal (ME). jasa Informasi Teknologi (IT), General Construction & Supplier
                                        terbesar di Indonesia.</p>
                                    <p class="text-justify">2. Menjadi Perusahaan kontraktor jasa dibidang Mekanikal &
                                        Elektrikal (ME), jasa Informasi Teknologi (IT), General Construction & Supplier
                                        berskala Multi Nasional </p>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">Misi Perusahaan</button>
                            </h2>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    <p class="text-justify">1. Memberikan pelayanan terbaik secara profesional,
                                        sistematis dan teknologi terintegrasi.</p>
                                    <p class="text-justify">2. Meningkatkan sumber daya manusia yang berkompeten dan
                                        berpengalaman di bidangnya.</p>
                                    <p class="text-justify">3. Memberikan keuntungan yang maksimal bagi Perusahaan
                                        maupun mitra bisnis.</p>
                                    <p class="text-justify">4. Menyediakan produk berkualitas demi kepuasan klien.</p>
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Apa yang kami lakukan -->
    <div class="section service-section-1" id="kamiLakukan">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="heading-content" data-aos="fade-up">
                        <h2 class="mt-5">Apa yang kami lakukan?</h2>
                        {{-- <h2>Our <span class="d-block">Services</span></h2> --}}
                        {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p> --}}
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="images/svg/gear.svg" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>Mekanikal & Elektrikal</h3>
                                    <p class="text-justify">Kami memberikan solusi terbaik untuk kebutuhan
                                        infrastruktur Anda. Dengan tim
                                        ahli yang berpengalaman, kami siap memberikan pelayanan terbaik dalam
                                        perencanaan, instalasi, dan pemeliharaan sistem mekanikal dan elektrikal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="images/svg/cctv.svg" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>Teknologi Informasi</h3>
                                    <p class="text-justify">Kami adalah mitra terpercaya dalam pemasangan jaringan
                                        tower dan CCTV untuk
                                        kebutuhan Teknologi Informasi Anda. Dengan pengalaman yang luas dan tim
                                        profesional yang terlatih, kami menyediakan layanan pemasangan yang handal dan
                                        berkualitas tinggi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="images/svg/fire.svg" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>Fire Protection</h3>
                                    <p class="text-justify">Kami adalah ahli dalam penyediaan solusi Fire Protection
                                        yang andal dan inovatif
                                        untuk berbagai jenis bangunan dan lingkungan. Dengan pengalaman yang solid dan
                                        tim profesional yang terlatih, kami menawarkan layanan yang dapat diandalkan
                                        untuk melindungi aset berharga Anda dari risiko kebakaran.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="images/svg/users.svg" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>General Contructor</h3>
                                    <p class="text-justify">Kami adalah mitra ideal Anda dalam proyek konstruksi
                                        sebagai General Contractor
                                        yang berpengalaman dan terpercaya. Dengan komitmen pada kualitas, keamanan, dan
                                        kepuasan pelanggan, kami menyediakan layanan konstruksi yang komprehensif untuk
                                        memenuhi kebutuhan proyek Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Proyek dan Jasa -->
    <div class="section section-3" data-aos="fade-up" data-aos-delay="100" id="proyekJasa">
        <div class="container">
            <div class="row align-items-center justify-content-between  mb-5">
                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="heading mb-3">Proyek dan Jasa yang Telah Kami Kerjakan</h2>
                    <p>Berikut adalah beberapa proyek dan jasa yang telah dikerjakan secara profesional oleh tim kami.
                    </p>
                </div>
                <div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
                    <div id="destination-controls">
                        <span class="prev me-3" data-controls="prev">
                            <span class="icon-chevron-left"></span>

                        </span>
                        <span class="next" data-controls="next">
                            <span class="icon-chevron-right"></span>
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="destination-slider-wrap">
            <div class="destination-slider">
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="/detail-proyek">Medan, Sunggal</a></h3>
                        <span class="meta">Pembangunan Masjid</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="images/masjid.jpeg" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Sertifikasi -->
    <div class="section service-section-1" id="sertifikasi">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="heading-content" data-aos="fade-up">
                        <h2 class="heading">Sertifikasi</h2>
                        <p>Berikut beberapa sertifikasi untuk meningkatkan mutu dari perusahaan kami.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded job-position">
                        <div class="row">
                            <div class="col-lg-7">
                                <span class="block subtitle">12 Juli 2026</span>
                                <h2>Sertifikasi ISO 45001:2018</h2>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <a href="#" class="d-inline-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#sertifikatModal"><span class="me-2">Lihat</span> <span
                                        class="icon-link2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded job-position">
                        <div class="row">
                            <div class="col-lg-7">
                                <span class="block subtitle">12 Juli 2026</span>
                                <h2>Sertifikasi ISO 9001:2015</h2>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <a href="#" class="d-inline-flex align-items-center"><span
                                        class="me-2">Lihat</span> <span class="icon-link2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded job-position">
                        <div class="row">
                            <div class="col-lg-7">
                                <span class="block subtitle">12 Juli 2026</span>
                                <h2>Sertifikasi ISO 14001:2015</h2>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <a href="#" class="d-inline-flex align-items-center"><span
                                        class="me-2">Lihat</span> <span class="icon-link2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mengapa Memilih Kami -->
    <div class="section" id="pilihKami">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
                    <img src="images/pilih.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="heading mb-4">Mengapa Memilih Kami?</h2>
                    <p class="text-justify">Kami memiliki tim sumber daya manusia yang profesional dan berpengalaman di
                        bidangnya, siap
                        memberikan pelayanan terbaik untuk menjamin kepuasan klien kami. Dalam setiap proyek, kami
                        mengutamakan kualitas, keamanan, dan inovasi. Kami selalu berkomitmen untuk terus berkembang dan
                        berinovasi sesuai dengan visi dan misi perusahaan kami, demi menjadi perusahaan yang handal dan
                        sukses.</p>
                    <p class="text-justify">Komitmen kami pada kualitas, keamanan, dan kepuasan pelanggan telah membuat
                        kami menjadi pilihan
                        yang tepat dalam memenuhi kebutuhan infrastruktur dan konstruksi Anda. Percayakan proyek Anda
                        kepada kami, PT. Maha Akbar Sejahtera, dan bersama-sama kita akan menciptakan masa depan yang
                        lebih baik melalui solusi yang terbaik dan terpercaya.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Kerja Sama -->
    <div class="section" id="kerjaSama">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="heading-content" data-aos="fade-up">
                        <h2 class="heading">Kerja Sama</h2>
                        <p>Berikut beberapa perusahaan yang telah atau bekerja sama dengan kami.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 ">
                    <a href="#" class="person d-flex flex-column align-items-center">
                        <img src="images/waskita.png" alt="Image" class="img-fluid mb-4">
                        <h3 class="mb-3">PT. Waskita Karya</h3>
                        {{-- <p class="text-muted text-justify">Perusahaan yang bergerak sebagai kontraktor umum yang
                            terlibat dalam kegiatan konstruksi jalan, jembatan, pelabuhan, Bandara, bangunan, pembuangan
                            limbah tanaman, pabrik semen, pabrik dan fasilitas industri</p> --}}
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="person d-flex flex-column align-items-center">
                        <img src="images/waskita.png" alt="Image" class="img-fluid mb-4">
                        <h3 class="mb-3">PT. Waskita Karya</h3>

                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="person d-flex flex-column align-items-center">
                        <img src="images/waskita.png" alt="Image" class="img-fluid mb-4">
                        <h3 class="mb-3">PT. Waskita Karya</h3>

                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="person d-flex flex-column align-items-center">
                        <img src="images/waskita.png" alt="Image" class="img-fluid mb-4">
                        <h3 class="mb-3">PT. Waskita Karya</h3>

                    </a>
                </div>
            </div>

        </div>
    </div>

    {{-- <div class="section bg-light">




		<h2 class="heading mb-5 text-center">Testimonials</h2>

		<div class="text-center mb-5">
			<div id="prevnext-testimonial">
				<span class="prev me-3" data-controls="prev">
					<span class="icon-chevron-left"></span>

				</span>
				<span class="next" data-controls="next">
					<span class="icon-chevron-right"></span>

				</span>
			</div>
		</div>

		<div class="wide-slider-testimonial-wrap">
			<div class="wide-slider-testimonial">
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="images/person_1.jpg" alt="Free template by TemplateUX">
							<h3>John Doe</h3>
							<p class="position mb-5">CEO, Founder</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="images/person_2.jpg" alt="Free template by TemplateUX">
							<h3>James Woodland</h3>
							<p class="position mb-5">Designer at Facebook</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="images/person_3.jpg" alt="Free template by TemplateUX">
							<h3>Rob Smith</h3>
							<p class="position mb-5">Product Designer at Twitter</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="images/person_1.jpg" alt="Free template by TemplateUX">
							<h3>John Doe</h3>
							<p class="position mb-5">CEO, Founder</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="images/person_2.jpg" alt="Free template by TemplateUX">
							<h3>James Woodland</h3>
							<p class="position mb-5">Designer at Facebook</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="images/person_3.jpg" alt="Free template by TemplateUX">
							<h3>Rob Smith</h3>
							<p class="position mb-5">Product Designer at Twitter</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
					</blockquote>
				</div>
			</div>
		</div>



	</div> --}}




    {{-- <div class="section">
		<div class="container">

			<div class="row">
				<div class="col-12"data-aos="fade-up" data-aos-delay="0">

					<h2 class="heading mb-5">Recent Posts</h2>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_1.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_2.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_3.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="media-entry">
						<a href="#">
							<img src="images/gal_4.jpg" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date">May 14, 2020</span>
							<h3><a href="#">Far far away, behind the word mountains</a></h3>
							<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label">Read More</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

    <div class="py-5 bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mb-3 mb-lg-0 text-lg-start">
                    <h3 class="text-white m-0">Jika Anda Tertarik Silahkan Hubungi Kami !</h3>
                </div>
                <div class="col-lg-5 text-center text-lg-end">
                    <a href="/contact" class="btn btn-outline-white">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Kontak -->
    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>PT Maha Akbar Sejahtera<span class="text-primary">.</span> </h3>

                    </div> <!-- /.widget -->
                    <div class="widget">
                        <h3>Sosial Media</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            {{-- <li><a href="#"><span class="icon-twitter"></span></a></li> --}}
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Alamat</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">
                                    <address>Jl. Eka Surya No.48, Gedung Johor, Kec. Medan Johor, Kota Medan, Sumatera
                                        Utara 20147</address>
                                </a></li>

                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                {{-- <div class="col-lg-2">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 --> --}}


                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Kontak</h3>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+6285261498750</a></li>
                            <li><a href="tel://11234567890">+6285261498750</a></li>
                            <li><a href="mailto:info@mydomain.com">mahaakbar@mahasejahtera.com</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="mb-0">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. PT Maha Akbar Sejahtera.
                    </p>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="modal fade" id="sertifikatModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sertifikat ISO 45001:2018</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="images/img-6.jpg" class="img-fluid" alt="Sertifikat ISO">
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/rellax.js"></script>
    <script src="js/flatpickr.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
