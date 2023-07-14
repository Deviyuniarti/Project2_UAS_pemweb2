<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rumah Makan Padang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Padang Resto</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/home" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/service" class="nav-item nav-link">Service</a>
                        <a href="/varianmenu" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="/booking" class="dropdown-item">Booking</a>
                                <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">MASUK</a>
                        <div class="dropdown-menu m-0">
                            <a href="/login" class="dropdown-item">Login</a>
                            <a href="/register" class="dropdown-item">Register</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Traditional</small>
                                    <h6 class="mt-n1 mb-0">Drink</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-heart fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Menu</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/es cendol.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Es Cendol</span>
                                                <span class="text-primary">10k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Berisi cendol, daging durian dan ketan putih dicampur cairan gula aren.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/aia aka.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Aia Aka</span>
                                                <span class="text-primary">10k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Aia Aka atau air daun kacang sekilas mirip es cincau. Dibuat dari perasan cincau hijau diberi kuah santan dan perasan jeruk nipis.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/ees tebak.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Es Tebak</span>
                                                <span class="text-primary">10k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Es Tebak terbuat dari campuran tepung sagu dan ketan yang dibentuk menyerupai cendol, dicampur dengan es serut, cincau, tape, kolang kaling, potongan roti, sirup dan susu kental manis.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/sekoteng.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sekoteng</span>
                                                <span class="text-primary">10k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Sekoteng berisi potongan roti tawar, sagu mutiara, kacang tanah,kolang kaling, kacang hijau dan dicampur air jahe, santan dan susu kental manis.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Kawadaun.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kawa Daun</span>
                                                <span class="text-primary">15k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Aia Kawa Daun terbuat dari tumbuhan kopi yaitu daun kopi, minuman ini dibuat dengan menyeduh daun kopi kering dan bisa ditambahkan dengan gula.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/dadiahh.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Dadiah</span>
                                                <span class="text-primary">15k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Dadiah atau dadih terbuat dari bahan susu kerbau yang difermentasi mirip dengn minuman yougurt.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Jus-Pinang.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Jus Pinang</span>
                                                <span class="text-primary">10k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Jus Pinang terbuat dari bahan dasar buah Pinang yang masih muda dicampur dengan bahan lainnya seperti madu, jahe, dan kuning telur. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Teh Talua.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Teh Talua</span>
                                                <span class="text-primary">15k</span>
                                                <i class="fas fa-shopping-cart text-primary"></i>
                                            </h5>
                                            <small class="fst-italic">Teh Talua terbuat dari bahan dasar seperti campuran kuning telur, gula, bubuk vanili dan tetesan jeruk nipis.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="container-xxl pt-5 pb-3">
                                <div class="container">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h5 class="ff-secondary text-center text-primary fw-normal">Menu Favorite</h5>
                                        <h3>Masakan Padang</h3>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/kalio ayam.jpeg" alt="">
                                                </div>
                                                <h5 class="mb-0">Kalio Ayam Padang</h5>
                                                <small>Kalio adalah sebutan masakan khas Padang yang kuahnya kental, di tengah-tengah antara gulai dan rendang. Bumbu kalio lebih kurang mirip dengan gulai tetapi durasi masak lebih lama jadi rasanya lebih meresap. Selain itu, kuah kalio ayam yang kental cocok makan bareng ketupat atau lontong.</small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/Rendang Sapi.jpeg" alt="">
                                                </div>
                                                <h5 class="mb-0">Rendang Sapi</h5>
                                                <small>Rendang adalah hidangan berbahan daging sapi yang proses memasaknya dengan suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.
                                                    Kelembutan daging dan bumbu yang gurih membuat lidah penikmatnya akan ketagihan ingin menikmatinya lagi.</small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/dendeng.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Dendeng</h5>
                                                <small>Dendeng biasanya juga dibuat dari daging sapi, sama seperti rendang namun tekstur dagingnya lebih keras.
                                                    Dendeng dibuat dengan cara menjemur daging sapi kering.
                                                    Daging sapi yang digunakan sebelum dijemur sudah diberi bumbu berupa rempah-rempah yang membuat daging sapi menjadi lebih awet.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/Gulai Nangka Padang.jpeg" alt="">
                                                </div>
                                                <h5 class="mb-0">Gulai Nangka Padang</h5>
                                                <small>Gulai cubadak atau lebih dikenal dengan nama gulai nangka padang adalah salah satu sayur pendamping makan.
                                                    Daging nangka muda biasa diolah menjadi aneka masakan seperti rendang dan gulai. 
                                                    Gulai nangka ini terbuat dari daging nangka yang masih muda dan dimasak dengan santan dan rempah rempah.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-xxl pt-5 pb-3">
                                <div class="container">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/ayam pop.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Ayam Pop</h5>
                                                <small>Ayam pop termasuk salah satu bentuk hidangan ayam goreng,ayam pop memiliki warna yang masih putih pucat. 
                                                       Hal ini dikarenakan sebelum digoreng, ayam pop yang sudah diberi bumbu direbus terlebih dahulu di dalam rebusan air kelapa dan bawang putih cincang. Setelah itu, ayam baru digoreng sebentar di dalam minyak panas agar matang sempurna.</small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/gulai cumi.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Gulai Cumi</h5>
                                                <small>Gulai cumi Padang adalah hidangan cumi-cumi yang dimasak dalam bumbu gulai khas Padang. Cumi-cumi direbus dengan rempah-rempah seperti cabai, bawang, serai, dan kunyit. 
                                                    Kuah gulai yang kental dan beraroma harum menjadi ciri khas dari hidangan ini.
                                                    Disajikan dengan nasi putih atau ketupat serta lalapan. Rasanya gurih, pedas, dan kaya rempah.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/Gulai Ikan Kakap.jpeg
                                                    " alt="">
                                                </div>
                                                <h5 class="mb-0">Gulai Ikan Kakap</h5>
                                                <small>Gulai kepala ikan kakap adalah menu yang paling favorite. Ciri khas dari gulai kakap khas Sumatera Barat adalah asam kandis dan daun ruku-ruku yang cita rasa dan aromanya mirip sekali dengan daun kemangi.
                                                    perpaduan antara daging ikan kakap yang gurih dan agak manis yang berpadu dengan rempah-rempah menggugah selera dan nasi hangat

                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/Gulai Otak.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Gulai Otak</h5>
                                                <small>Gulai otak adalah hidangan otak sapi yang dimasak dalam kuah gulai khas Padang. Kuahnya kaya rempah dengan tambahan santan untuk rasa creamy. 
                                                    Hidangan ini memiliki tekstur yang lembut dan konsistensi yang kental.
                                                    Disajikan dengan nasi putih atau ketupat, serta bisa disertai lalapan. Memiliki rasa gurih dan pedas.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-xxl pt-5 pb-3">
                                <div class="container">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/ayam bakar.jpeg" alt="">
                                                </div>
                                                <h5 class="mb-0">Ayam Bakar</h5>
                                                <small>Ayam bakar direndam dalam bumbu kaya rempah seperti cabai merah, bawang, lengkuas, kunyit, serai, dan lainnya. Kemudian, ayam dibakar hingga matang dengan kulit yang renyah dan daging yang juicy. Biasanya disajikan dengan nasi putih, sambal lado, dan lalapan. 
                                                    Hidangan ini terkenal karena cita rasa pedas dan gurih yang khas
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/ikan bawal bakar.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Ikan Bawal Bakar</h5>
                                                <small>Ikan bawal bakar Padang adalah ikan bawal utuh yang direndam dalam bumbu khas Padang yang pedas dan gurih. Ikan kemudian dipanggang hingga kulitnya renyah dan dagingnya juicy. 
                                                    Disajikan dengan nasi putih, sambal lado, dan lalapan seperti mentimun, tomat, dan daun kemangi. Cita rasa pedas dan gurih yang khas dari masakan Padang.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/telur dadar.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Telur Dadar</h5>
                                                <small>Telur dadar Padang adalah telur yang dikocok dengan bumbu khas Padang yang pedas dan gurih. Digoreng hingga matang dan disajikan dengan nasi putih serta sambal lado. 
                                                    Telur dadar Padang biasanya memiliki tekstur yang lembut dan padat, dengan lapisan bumbu yang meresap ke dalam telur.
                                                    Hidangan ini memiliki rasa khas masakan Padang yang lezat.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                            <div class="team-item text-center rounded overflow-hidden">
                                                <div class="rounded-circle overflow-hidden m-4">
                                                    <img class="img-fluid" src="img/perkedel.jpg" alt="">
                                                </div>
                                                <h5 class="mb-0">Perkedel</h5>
                                                <small>Perkedel Padang adalah perkedel kentang khas Padang dengan cita rasa gurih dan sedikit pedas. Dibuat dengan kentang yang dihaluskan dan dicampur bumbu khas Padang yang gurih dan sedikit pedas seperti bawang, cabai, dan rempah lainnya. 
                                                    Digoreng hingga garing dan disajikan sebagai lauk pauk atau camilan dengan nasi putih dan lalapan.
                                                </small>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>padangresto@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Terimakasih telah berkunjung ke Padang Resto kami, Semoga Anda menikmati setiap kelezatan dalam makanan diresto kami.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Mahasiswa STT Terpadu Nurul Fikri</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>