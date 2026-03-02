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
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .hero-bg-video{position:fixed; top:0; left:0; z-index:-1;}
        .hero-video-box{position:absolute; top:0; left:0; height: 100%; width: 100%; object-fit: cover; object-position: center bottom; z-index:-2;}
    </style>
    <script>
        window.onload = function(){
            heroHeight()

            const vb1 = document.querySelector('#hero-video-box1')
            const vb2 = document.querySelector('#hero-video-box2')
            vb1.addEventListener('ended', function(){
                vb1.style.zIndex = -2
                vb2.style.zIndex = -1
                vb2.play()
            })
            vb2.addEventListener('ended', function(){
                vb2.style.zIndex = -2
                vb1.style.zIndex = -1
                vb1.play()
            })
            vb1.style.zIndex = -1
            vb1.play()
        }

        window.onresize = heroHeight

        function heroHeight(){
            const slogan = document.querySelector('#hero-video-slogan')
            slogan.style.padding = 0
            const navbarHeight = document.querySelector('.navbar').offsetHeight
            const padding = (window.innerHeight-navbarHeight-slogan.offsetHeight-162)
            slogan.style.paddingTop = padding+'px'
        }
    </script>

</head>

<body>

    <?php include_once 'header.php'; ?>



    <main class="main">

        <!-- hero area -->
        <div class="hero-section">
            <div class="hero-wrapper" id="hero-wrapper">
                <div class="hero-bg-video">
                    <video id="hero-video-box1" class="hero-video-box" crossorigin="anonymous" playsinline="" preload="auto" muted="" src="/assets/video/hero.mp4"></video>
                    <video id="hero-video-box2" class="hero-video-box" crossorigin="anonymous" playsinline="" preload="auto" muted="" src="/assets/video/hero-2.mp4"></video>
                </div>
                <div class="container-fluid g-0">
                    <div id="hero-video-slogan" class="row align-items-center justify-content-md-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="hero-content" style="text-align:center;">
                                <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".50s">
                                    Empowering Equitable AI Learning Globally and Ethically
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 align-items-center justify-content-md-center">
                        <div class="col-md-4 col-lg-4">
                            <div class="hero-bottom-btn hero-bottom-btn-green">
                                <h3><a href="/about.php?#our-mission">Our Mission</a></h3>
                                <p>Our Goal, Vision & Commitment</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="hero-bottom-btn hero-bottom-btn-blue">
                                <h3><a href="/impact.php?#our-impact">Our Events & Impact</a></h3>
                                <p>Programs & Results</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="hero-bottom-btn hero-bottom-btn-dark">
                                <h3><a href="/involved.php">Support Us</a></h3>
                                <p>Volunteer, Partner or Donate</p>
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
                                <span class="site-title-tagline">About</span>
                                <h2 class="site-title">Our <span>Mission</span></h2>
                                <h3>Al Learning, Globally and Ethically</h3>
                            </div>
                            <p class="about-text">AI Ethos is a 501(c)(3) nonprofit organization dedicated to transforming global education through ethical, inclusive, and culturally relevant AI tutoring. We operate at the rare intersection of innovation, equity, and access, As a non-profit committed to equity-centered AI tutoring, we design localized, multilingual, and community-inclusive tutoring that prioritize the most underserved learners. Below, we expand on key aspects of our identity and mission.</p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Al Learning, Globally and Ethically</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Nonprofit at Heart</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Empowering Equitable AI Learning</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>AI Tutoring for Underserved Communities Worldwide</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Ethical Tutoring for All</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="about-1.php" class="theme-btn">Discover More</a>
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
                            <span class="site-title-tagline">Leadership Team</span>
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
                                    <a href="leadership.php?id=<?= $v->id; ?>"><?= $v->name; ?></a>
                                </h3>
                                <p class="service-text"><?= substr($v->content, 0, 100) . '...'; ?></p>
                                <div class="service-arrow">
                                    <a href="leadership.php?id=<?= $v->id; ?>" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    unset($m);
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Leadership Team</span>
                            <h2 class="site-title">Board of <span>Advisors</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    require_once 'system/Model.php';
                    $m = new Model();
                    foreach ($m->aboutGetAll(2) as $v) {
                    ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img"><img src="<?= $v->photo; ?>" alt="staff"></div>
                                <h3 class="service-title">
                                    <a href="leadership.php?id=<?= $v->id; ?>"><?= $v->name; ?></a>
                                </h3>
                                <p class="service-text"><?= substr($v->content, 0, 100) . '...'; ?></p>
                                <div class="service-arrow">
                                    <a href="leadership.php?id=<?= $v->id; ?>" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
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
                                <span class="site-title-tagline">Why AI Divides</span>
                                <h2 class="site-title my-3">The <span>Problem</span> We Solve</h2>
                            </div>
                            <p class="mb-30">The current state of AI-powered tutoring has created a stark divide, where privileged learners reap the benefits while underserved communities are left behind due to limited accessibility, cultural irrelevance, and ethical risks. This unequal landscape must be addressed to ensure that the transformative potential of AI in education is harnessed for the greater good.</p>
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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5">
                    <div class="col">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-user-graduate"></i></div>
                            <span class="counter counter-plus" data-count="+" data-to="1500" data-speed="3000">1500</span>
                            <h6 class="title">Students Reached</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-language"></i></div>
                            <span class="counter" data-to="7" data-speed="3000">7</span>
                            <h6 class="title">Languages Supported</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-arrow-up-right-dots"></i></div>
                            <span class="counter counter-percent" data-count="+" data-to="22" data-speed="3000">22</span>
                            <h6 class="title">Average Improvement in Math Scores</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-hands-holding-circle"></i></div>
                            <span class="counter counter-percent" data-count="+" data-to="75" data-speed="3000">75</span>
                            <h6 class="title">Learners from Underserved Communities</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter-box">
                            <div class="icon"><i class="fal fa-microchip-ai"></i></div>
                            <span class="counter counter-percent" data-count="+" data-to="20" data-speed="3000">20</span>
                            <h6 class="title">Neurodiverse Learners Supported</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->



        <!-- faq area -->
        <div class="faq-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Why Choose Us</span>
                                <h2 class="site-title my-3">Our <span>Solutions</span></h2>
                            </div>
                            <p>AI Ethos delivers ethical, inclusive AI tutoring—built for learners most often left behind. We focus on how students learn, not just the technology behind it.</p>
                            <h3 style="padding: 20px 0;">What Makes Our Tutoring Different</h3>
                            <h5>Localized, Learner-Centered Tutoring: </h5>
                            <p>Personalized academic support designed for low-income and rural learners, even in low-connectivity settings.</p>
                            <h5 style="padding-top:16px;">Multilingual & Culturally Responsive Learning: </h5>
                            <p>Tutoring in native languages that reflects local contexts and learning styles.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> Adaptive & Supportive Instruction:
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Socratic, step-by-step guidance that adapts to each learner’s pace, needs, and abilities.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> Privacy-First Student Care:
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Student data is protected by ethical design and never monetized.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> Community-Co-Created Content:
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Lessons shaped with educators and local communities for relevance and trust.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5" style="text-align: center;">
                <div class="site-heading mb-3">
                    <h3>Our Tutoring Principles</h3>
                </div>
                <p class="about-text">Equity • Accessibility • Fairness • Transparency • Dignity</p>
                <p class="about-text">Result: High-quality AI tutoring that supports real learning—without excluding those who need it most.</p>
            </div>
        </div>
        <!-- faq area end -->



        <!-- team-area -->
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Underserved Heroes</span>
                            <h2 class="site-title">Who We <span>Serve</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="mb-30">AI Ethos serves earners and educators often excluded from traditional and AI-powered tutoring—low-income and rural students, multilingual and differently-abled learners, and under-resourced schools. We empower teachers and community educators through open-source, co-designed tutoring, while delivering ethical, privacy-first AI with measurable social impact.</div>
                <div class="row">
                    <div class="col-4">
                        <div class="team-item">
                            <img src="assets/img/team/02.png" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Hannah Whitaker</h5>
                                    <span>Rural School Teacher</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="team-item active">
                            <img src="assets/img/team/03.png" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Jamal Okello</h5>
                                    <span>Minority Youth</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="team-item">
                            <img src="assets/img/team/04.png" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Miguel Torres</h5>
                                    <span>Low Income Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="team-item">
                            <img src="assets/img/team/01.png" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Ethan Harlow</h5>
                                    <span>Neurodiverse Learner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="team-item">
                            <img src="assets/img/team/05.png" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Lila Nguyen</h5>
                                    <span>Multilingual Learner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-4">
                        <div class="team-item">
                            <img src="assets/img/team/06.png" alt="thumb">
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>Sofia Ramirez</h5>
                                    <span>Student with Disability</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <table class="table mt-30">
                    <thead>
                        <tr><th>Audience</th><th>Key Pain Point</th><th>How AI Ethos Helps</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Low-Income & Rural Students</td><td>Limited access to tutors, devices, and reliable internet</td><td>Free, adaptive, offline-capable AI tutoring</td></tr>
                        <tr><td>Multilingual Learners</td><td>Excluded by English-only tutoring tools</td><td>Native-language, culturally relevant tutoring</td></tr>
                        <tr><td>Differently-Abled Learners</td><td>Inaccessible formats and poor personalization</td><td>Inclusive design, tailored pacing, assistive features</td></tr>
                        <tr><td>Teachers in Low-Resource Settings</td><td>High workload, little AI support or training</td><td>Co-designed, open-source tutoring tools</td></tr>
                        <tr><td>Rural & Underserved Schools</td><td>Teacher shortages and infrastructure gaps</td><td>AI tutoring that supplements classroom instruction</td></tr>
                        <tr><td>Community Educators & Volunteers</td><td>Under-resourced and under-trained</td><td>Open-source tools to deliver quality tutoring locally</td></tr>
                        <tr><td>NGOs & Funders</td><td>Ethical risks and lack of transparency in EdTech</td><td>Privacy-first, community-governed platform</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- team-area end -->

    </main>



    <?php include_once 'footer.php'; ?>


</body>

</html>