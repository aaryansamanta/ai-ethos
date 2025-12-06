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
    <title>AI Ethos</title>

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

        <!-- hero area -->
        <div class="hero-section">
            <div class="hero-wrapper">
                <!-- <div class="hero-bg-video" style="position:fixed;top:0;left:0;z-index:-1;">
                    <video crossorigin="anonymous" playsinline="" preload="auto" muted="" loop="" autoplay="" src="/assets/video/hero.mp4" style="height: 100%; width: 100%; object-fit: cover; object-position: center bottom;"></video>
                </div> -->
                <div style="position:fixed;top:0;left:0;width:100%;z-index:-1;">
                    <img src="assets/img/hero/slider-1.jpg" alt="banner">
                </div>
                <div class="container-fluid g-0">
                    <div class="row align-items-center justify-content-md-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="hero-content" style="text-align:center;">
                                <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".25s">
                                    Donate Now
                                </h6>
                                <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".50s">
                                    <span>Explore</span> Our Mission.
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 align-items-center justify-content-md-center">
                        <div class="col-md-3 col-lg-3">
                            <div class="hero-bottom-btn hero-bottom-btn-red">
                                <h3><a href="about.php">Our Mission</a></h3>
                                <p>Our Goal, Vision & Commitment</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="hero-bottom-btn hero-bottom-btn-green">
                                <h3><a href="events.php">Our Events</a></h3>
                                <p>Register & Help Make Change</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="hero-bottom-btn hero-bottom-btn-blue">
                                <h3><a href="donate.php">Get Involved</a></h3>
                                <p>Volunteer, Participate, or Donate</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="hero-bottom-btn hero-bottom-btn-dark">
                                <h3><a href="contact.php">Chat</a></h3>
                                <p>Contact us now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->



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
                            <a href="about.php" class="theme-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


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



        <!-- choose area -->
        <div class="choose-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-img">
                            <img src="assets/img/choose/01.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-content">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Why Choose Us</span>
                                <h2 class="site-title my-3">The <span>Problem</span></h2>
                            </div>
                            <p class="mb-30">Al-powered tutoring systems are Primarily accessible to and designed for students from more affluent and advantaged backgrounds, leaving behind low-income, rural, and non-English speaking students.</p>
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li>
                                            <h5>Limited access for underserved learners</h5>
                                        </li>
                                        <li>
                                            <h5>Lack of cultural relevance and linguistic diversity</h5>
                                        </li>
                                        <li>
                                            <h5>Ethical risks: data privacy, bias, lack of transparency</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose area end -->



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



        <!-- faq area -->
        <div class="faq-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Why Choose Us</span>
                                <h2 class="site-title my-3">Our <span>Solutions</span></h2>
                            </div>
                            <h5>Localized Design</h5>
                            <p>Tailored for low-income,infrastructure-light settings to ensure accessibility.</p>
                            <h5 style="padding-top:16px;">Multilingual & CulturallyRelevant</h5>
                            <p>Offering content in native languages and reflecting diverse cultural backgrounds.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> Open-Source & Transparent
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Co-created with communities, providing full visibility into our Al models and processes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> Privacy-First Approach
                                        ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Prioritizing student data privacy and dignity through ethical Al practices.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> Non-Profit Mission
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Driven by a commitment to public good, not profit, to bridge education gaps.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->



        <!-- team-area -->
        <div class="team-area bg py-120">
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



        <!-- blog-area -->
        <div class="blog-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Events</span>
                            <h2 class="site-title">Our <span>Events</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/01.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><i class="far fa-user-circle"></i> Author</li>
                                        <li><i class="far fa-calendar-alt"></i> May 10, 2025</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="events-content.php">Limited access for underserved learners</a>
                                </h4>
                                <p>Many underserved communities lack the necessary infrastructure,resources</p>
                                <a class="theme-btn" href="events-content.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/02.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><i class="far fa-user-circle"></i> Author</li>
                                        <li><i class="far fa-calendar-alt"></i> May 10, 2025</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="events-content.php">Lack of cultural relevance and linguistic diversity</a>
                                </h4>
                                <p>Existing Al tutoring solutions often fail to accommodate the diverse cultural</p>
                                <a class="theme-btn" href="events-content.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/03.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><i class="far fa-user-circle"></i> Author</li>
                                        <li><i class="far fa-calendar-alt"></i> May 10, 2025</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="events-content.php">Ethical risks: data privacy, bias, lack of transparency</a>
                                </h4>
                                <p>The deployment of Al in education raises critical ethical concerns</p>
                                <a class="theme-btn" href="events-content.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->



    </main>



    <?php include_once 'footer.php'; ?>


</body>

</html>