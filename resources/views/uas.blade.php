<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS_Tia</title>
        <link rel="icon" type="image/x-icon" href="bootstrap/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="bootstrap/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Definisi</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">7Summits</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#warn">Hal yang Harus Disiapkan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                        <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                    </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">The 7 Summits Of Indonesia</h1>
                    <h5 class="text-white-50 mx-auto mt-2 mb-5">7 puncak tertinggi di 7 kepulauan besar Indonesia</h5>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <h2 class="text-white mb-4">Definisi Gunung</h2>
                        <p class="text-white-50">
                        Gunung adalah suatu bentuk permukaan tanah yang letaknya jauh lebih tinggi daripada tanah-tanah di daerah sekitarnya.
                        Gunung pada umumnya lebih besar dibandingkan dengan bukit, tetapi bukit di suatu tempat bisa jadi lebih tinggi
                        dibandingkan dengan apa yang disebut gunung di tempat yang lain. Gunung pada umumnya memiliki lereng yang curam dan tajam 
                        atau bisa juga dikelilingi oleh puncak-puncak atau pegunungan. Pada beberapa ketinggian gunung bisa memiliki dua atau lebih iklim,
                        jenis tumbuh- tumbuhan, dan kehidupan yang berbeda.
                            <a href="https://id.wikipedia.org/wiki/Gunung">More Info</a>
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="bootstrap/assets/img/gunungg.png" alt="" />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="bootstrap/assets/img/bg-masthead.jpg" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>The 7 Summits Of Indonesia</h4>
                            <p class="text-black-50 mb-0">Bagi Sobat Penjelajah yang anggota komunitas pecinta alam atau hobi naik gunung, negeri kita Indonesia
                             ini adalah negara yang memiliki banyak destinasi gunung yang menarik. Kamu tentu pernah mendengar tentang gunung-gunung di dunia yang
                              terkenal dengan sebutan Seven Summits, yaitu gunung-gunung tertinggi yang ada di tiap-tiap benua di dunia. Berangkat dari istilah itu,
                               sebagian komunitas petualang atau pendaki di Indonesia memberikan julukan Seven Summits Indonesia bagi tujuh gunung tertinggi yang ada
                                di masing-masing pulau besar atau wilayah kepulauan Indonesia yaitu puncak tertinggi yang terletak di Pulau Sumatera, Jawa, Kalimantan,
                                 Nusa Tenggara dan Bali, Sulawesi, Maluku, dan Papua.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Gunung Kerinci</h4>
                                    <p class="mb-0 text-white-50">Gunung Kerinci adalah gunung tertinggi di pulau Sumatera dengan ketinggian 3,805 m dari permukaan laut.
                                      Gunung ini berada di perbatasan provinsi Sumatera Barat dan provinsi Jambi pada posisi geografi 10 ° 25,50 'LS dan 1010 * 160 BT.
                                        Secara administrasi gunung ini berada dalam kawasan yang berwenang Taman Nasional Kerinci Seblat.
                                          Gunung berapi yang masih aktif ini juga merupakan gunung berapi tertinggi di kawasan Asia Tenggara.
                                            Jalur normal pendakian ke gunung ini hanya satu cara dari desa Kersik Tuo dekat dengan kota Sungai Penuh yang berada dalam wilayah provinsi Jambi.</p><br>
                                            <a href="/faktakerinci">‣Fakta-fakta Gunung Kerinci</a></p>
                                            <a href="/jalurpendakiankerinci">‣Jalur Pendakian Gunung Kerinci</a></p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-02.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Gunung Semeru</h4>
                                    <p class="mb-0 text-white-50">Gunung Semeru adalah gunung tertinggi di pulau Jawa, yang merupakan salah satu pulau besar di Indonesia.
                                     Dipulau ini banyak sekali terdapat gunung-gunung yang dengan ketinggian diatas 3.000 m, Gunung Semeru memiliki ketinggian 3.676 m dari permukaan laut.
                                      Posisi gunung ini berada di propinsi Jawa Timur diantara wilayah administrasi Kabupaten Malang dan Lumajang, dengan posisi geografis antara 8°06′ LS dan 120°55′ BT.
                                       Semeru adalah salah satu gunung berapi yang teraktif di Indonesia, setiap lebih kurang 20 menit sekali kawahnya mengeluarkan abu vulkanik berwarna hitam bercampur pasir dan batu-batu kecil.
                                        Gunung ini berada dibawah pengawasan administrasi dari Taman Nasional Bromo Tengger Semeru. Rute pendakian normal gunung ini dimulai dari Desa Ranupane.</p><br>
                                        <a href="/faktasemeru">‣Fakta-fakta Gunung Semeru</a></p>
                                        <a href="/jalurpendakiansemeru">‣Jalur Pendakian Gunung Semeru</a></p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Three Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Gunung Rinjani</h4>
                                    <p class="mb-0 text-white-50">Gunung Rinjani adalah gunung tertinggi di gugusan kepulauan Sunda Kecil, dengan ketinggian 3.726 m dari permukaan laut.
                                     Rinjani juga merupakan gunung berapi kedua tertinggi di Indonesia serta juga masih aktif dan secara periodik memperlihatakan keaktifannya dari kepundan
                                      anak gunung barunya yang muncul dari tengah danau kaldera yang terkenal dari gunung ini yaitu Danau Segara Anak. Gunung ini berada di pulau Lombok propinsi
                                       Nusa Tenggara Barat pada posisi lintang 8º25′ LS dan 116º28′ BT. Secara administrasi gunung ini berada dibawah naungan Taman Nasional Gunung Rinjani.
                                        Rute normal pendakian ke puncak gunung ini ada dua yaitu dari Desa Sembalun dan Desa Senaru.</p><br>
                                        <a href="/faktarinjani">‣Fakta-fakta Gunung Rinjani</a></p>
                                        <a href="/jalurpendakianrinjani">‣Jalur Pendakian Gunung Rinjani</a></p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Four Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-02.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Gunung Bukit Raya</h4>
                                    <p class="mb-0 text-white-50">Dipulau Kalimantan sebenarnya puncak gunung tertingginya adalah gunung Kinabalu,
                                     akan tetapi gunung tersebut berada dibawah kedaulatan negara jiran Malaysia sehingga tidak bisa dimasukan
                                      kedalam kelompok “The Seven Summits of Indonesia”. Oleh karena itu maka puncak gunung tertingginya dipengang
                                       oleh Gunung Bukit Raya dengan ketinggian 2.278 m dari permukaan laut, gunung ini berada di perbatasan
                                        Kalimantan Barat dan Kalimantan Tengah pada posisi 112º 07′ – 112º 56′ BT dan 00º 24′ – 00º 59′ LS.
                                         Gunung ini bukan gunung berapi, dan berada dibawah pengawasan Taman Nasional Bukit Baka – Bukit Raya.
                                          Rute normal pendakian gunung ini berawal dari Desa Rantau Malam, akses ke desa ini bisa dilakukan dari
                                           Pontianak.</p><br>
                                    <a href="/faktabukit">‣Fakta-fakta Gunung Bukit Raya</a></p>
                                    <a href="/jalurpendakianbukit">‣Jalur Pendakian Gunung Bukit Raya</a></p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Five Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Gunung Latimojong</h4>
                                    <p class="mb-0 text-white-50">Gunung Latimojong adalah gunung tertinggi di pulau Sulawesi,
                                     gunung ini bukan gunung berapi akan tetapi merupakan sebuah jajaran pegunungan dengan beberapa
                                      puncak-puncak. Puncak tertingginya bernama Rante Mario memiliki ketinggian 3.430 m dari permukaan laut.
                                       Pegunungan Latimojong ini berada di kabupaten Enrekang propinsi Sulawesi Selatan, pada koordinat 120°01’30″
                                        BT – 03°23’01″ LS. Akses rute normal pendakiannya berawal dari desa Karangan</p><br>
                                    <a href="/faktalatimojong">‣Fakta-fakta Gunung Latimojong</a></p>
                                    <a href="/jalurpendakianlati">‣Jalur Pendakian Gunung Latimojong</a></p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Six Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-02.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Gunung Binaya</h4>
                                    <p class="mb-0 text-white-50">Gunung Binaya adalah merupakan gunung yang tertinggi di Kepulauan Maluku,
                                     kepulauan ini dikelompokan sebagai satu kepulauan utama, puncak Binaiya memiliki ketinggian 3.027 m dari
                                      permukaan laut dan terletak di propinsi Maluku, tepatnya di pulau Seram Kabupaten Maluku Tengah pada
                                       posisi geografis 3° 10′ LS dan 129° 28′ BT. Gunung ini juga bukan gunung berapi. Akses rute normal
                                        pendakian kepuncaknya bisa dimulai dari sisi utara yaitu desa Kanike dan dari sisi selatan yaitu
                                         desa Piliana. Disini hanya dibahas rute pendakian dari Piliana karena rute ini lebih singkat dan
                                          lebih cepat untuk mencapai puncak Gunung Binaya.</p><br>
                                    <a href="/faktabinaya">‣Fakta-fakta Gunung Binaya</a></p>
                                    <a href="/jalurpendakianbinaya">‣Jalur Pendakian Gunung Binaya</a></p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Seven Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="bootstrap/assets/img/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Carstenzs Pyramid</h4>
                                    <p class="mb-0 text-white-50">Carstenzs Pyramid adalah merupakan juga puncak tertinggi di pulau Papua juga
                                     merupakan titik tertinggi Indonesia serta masuk kedalam salah satu Seven Summit di tujuh benua dunia,
                                      puncak gunung ini berketinggian 4.884 m dari permukaan laut. Puncak Carstenzs berada didalam kawasan pegunungan 
                                      Sudirman pada posisi 04º03’48″LS 137º11’09″BT, yang merupakan gunung karang (limestone), dan terdapat hamparan
                                       salju abadi dibeberapa tempat di pegunungan ini. Gunung yang berada di provinsi Papua ini bisa diakses lewat
                                        rute normal yaitu dari desa Ilaga dan Sugapa.</p><br>
                                    <a href="/faktapyramid">‣Fakta-fakta Carstenzs Pyramid</a></p>
                                    <a href="/jalurpendakianpyramid">‣Jalur Pendakian Carstenzs Pyramid</a></p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hal-->
        <section class="about-section text-center" id="warn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <h2 class="text-white mb-4">Hal yang harus disiapkan sebelum mendaki gunung</h2>
                        <p class="text-white-50">1. Persiapkan Fisik dan Stamina<p>
                        <p class="text-white-50">2. Lakukan Riset Kondisi Gunung<p>
                        <p class="text-white-50">3. Persiapkan Alat Pendakian<p>
                        <p class="text-white-50">4. Hitung Kebutuhan Logistik Dengan Cermat<p>
                        <p class="text-white-50">5. Peka Terhadap Kondisi Sekitar dan Diri Sendiri<p>
                        <p class="text-white-50">6. Lakukan Secara Bertahap<p>
                        <p class="text-white-50">7. Jangan Mendaki Sendirian<p>
                            <a href="https://www.skyscanner.co.id/berita/saran/7-hal-yang-harus-dipersiapkan-sebelum-mendaki-gunung">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">Sutojayan, Blitar, Jawa Timur</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" class="small text-black-50">
                                <a href="https://www.gmail.com/mail/help/intl/en/about.html?utm_expid=...">tiawahyueka35@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">+6285748813742</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Your Website 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="bootstrap/js/scripts.js"></script>
    </body>
</html>
