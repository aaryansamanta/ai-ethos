<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Empowering Equitable AI Learning, Globally and Ethically.">
    <meta name="keywords" content="ethical AI tutoring, equitable education, open- source AI, underserved learners">

    <!-- title -->
    <title>About Us - AI Ethos</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/logo-ai-ethos-min.png">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php include_once 'header.php'; ?>



    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img src="assets/img/about/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">About Us</span>
                                <h2 class="site-title">Al Learning, <span>Globally</span> and Ethically</h2>
                            </div>
                            <p class="about-text">A Ethos is a nonprofit organization dedicated to bridging education gaps for underserved learners through ethical and inclusive AI tutoring. lt's mission is to empower global communities with culturally relevant, multilingual, and privacy-focused AI learning solutions.</p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>A non-profit organization</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Empowering Equitable Al Learning</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Al tutoring solutions for underserved learners around the world.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- counter area -->
        <div class="counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-layer-group"></i></div>
                            <span class="counter counter-plus" data-count="+" data-to="1500" data-speed="3000">1500</span>
                            <h6 class="title">Students Reached</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-mug-hot"></i></div>
                            <span class="counter counter-plus" data-count="+" data-to="10" data-speed="3000">10</span>
                            <h6 class="title">Languages Supported</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-user-friends"></i></div>
                            <span class="counter counter-percent" data-count="+" data-to="75" data-speed="3000">75</span>
                            <h6 class="title">From Underserved Communities</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-headset"></i></div>
                            <span class="counter counter-percent" data-count="+" data-to="25" data-speed="3000">25</span>
                            <h6 class="title">Math Score lmprovement</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->


        <!-- service area -->
        <div class="service-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Staff</span>
                            <h2 class="site-title">Board of <span>Directors</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    require_once 'system/Model.php';
                    $m = new Model();
                    foreach ($m->aboutGetAll() as $v) {
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img"><img src="<?= $v->photo; ?>" alt="staff"></div>
                            <h3 class="service-title">
                                <a href="staff.php?id=<?= $v->id; ?>"><?= $v->name; ?></a>
                            </h3>
                            <p class="service-text"><?= substr($v->content, 0, 100) . '...'; ?></p>
                            <div class="service-arrow">
                                <a href="staff.php?id=<?= $v->id; ?>" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    unset($m);
                    ?>
                </div>
            </div>
        </div>
        <!-- service area end -->



        <!-- team-area -->
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Customer</span>
                            <h2 class="site-title">Who We <span>Serve</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="assets/img/team/01.jpg" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Kiran Patel</h5>
                                    <span>Rural School Teacher</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="assets/img/team/02.jpg" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Arron Rodri</h5>
                                    <span>Multilingual Learner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item active">
                            <img src="assets/img/team/03.jpg" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Amara Diop</h5>
                                    <span>Minority Youth</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="assets/img/team/04.jpg" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Tony Pinto</h5>
                                    <span>Low-ncome Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area end -->



    </main>



    <?php include_once 'footer.php'; ?>


</body>

</html>