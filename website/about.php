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
    <title>About - AI Ethos</title>

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
                <h2 class="breadcrumb-title">About</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- about area -->
        <div id="our-mission" class="about-area py-120">
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
                                <span class="site-title-tagline">Our Mission</span>
                                <h2 class="site-title">Al Learning, Globally and Ethically</h2>
                            </div>
                            <p class="about-text">AI Ethos is a 501(c)(3) nonprofit organization dedicated to transforming global education through ethical, inclusive, and culturally relevant AI tutoring. We operate at the rare intersection of innovation, equity, and access, As a non-profit committed to equity-centered AI tutoring, we design localized, multilingual, and community-inclusive tutoring that prioritize the most underserved learners. Below, we expand on key aspects of our identity and mission.</p>
                            <div class="site-heading mb-3">
                                <h2 class="site-title">Nonprofit at Heart</h2>
                            </div>
                            <p class="about-text">At its core, AI Ethos operates as a 501(c)(3) nonprofit, prioritizing societal impact over financial gain. This tax-exempt status allows us to focus entirely on the public good, with all resources directed toward bridging educational divides and ensuring donations are tax-deductible for supporters. We collaborate closely with local communities, educators, and NGOs to co-create sustainable solutions. Our open-source model ensures transparency and global adoption without commercial barriers, enabling lightweight, offline-capable tools in low-resource environments—all driven by our dedication to equity and long-term change.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="site-heading mb-3">
                    <h2 class="site-title">Empowering Equitable AI Learning</h2>
                </div>
                <p class="about-text">AI Ethos is dedicated to empowering equitable AI learning by tackling systemic barriers in educational technology. Our AI tutoring systems reduce biases and disparities, serving low-income, rural, multilingual, and neurodiverse students. With localized, infrastructure-light designs, we deliver adaptive learning that measures equity through real impact: reaching over 1,500 students, supporting 10 languages across 7 countries, and achieving a 25% average improvement in math scores.</p>
                <div class="site-heading mb-3">
                    <h2 class="site-title">AI Tutoring for Underserved Communities Worldwide</h2>
                </div>
                <p class="about-text">Our free, adaptive AI tutoring targets underserved groups globally, including low-income students, multilingual learners, differently-abled individuals, teachers, NGOs, rural schools, and minority youth. Operating in low-connectivity areas with culturally relevant content in 10 languages across 7 countries, we've impacted over 1,500 students. Through partnerships and open-source scaling, we ensure even remote regions access personalized, inclusive learning.</p>
                <div class="site-heading mb-3">
                    <h2 class="site-title">Ethical Tutoring for All</h2>
                </div>
                <p class="about-text">Ethical principles guide every aspect of AI Ethos, with a privacy-first approach that protects student data and mitigates risks like bias and opacity. Our open-source, community-co-created systems promote accountability and fairness, setting global standards for AI in education that empower and safeguard all learners—especially the most vulnerable.</p>
            </div>
        </div>
        <!-- about area end -->

        <!-- service area -->
        <div id="leadership-team" class="service-area">
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

        <!-- about area -->
        <div class="about-area py-120">
            <div class="container mt-3">
                <div class="site-heading mb-3">
                    <h2 class="site-title">Emails</h2>
                </div>
                <p class="about-text">Aaryan Samanta - President, Founder & CEO, USA, English & Spanish</p>
                <p class="about-text">Jason Li - Secretary, China, Mandarin, 15618517686@163.com, brucego.lilin@gmail.com, Lin.li@gmail.com, Bruce.li@champ-path.com, Dean_Wilson@housetonacademy.org</p>
                <p class="about-text">Arindam Samanta - Treasurer, USA, English & Bengali</p>
                <p class="about-text">Guillermo Nicolas Villalba Cuesta (William) - Director, Spain & UK, Spanish, gv276@cantab.ac.uk</p>
                <p class="about-text">Dr Alexandar Blum, USA - Advisor, UC Berkeley PhD, Stanford Post Doctoral Scholar</p>
                <p class="about-text">Dr Yan Liu, USA - Advisor, Purdue PhD, Former, Stanford Post Doctoral Scholar, Coursera</p>
                <p class="about-text">Laurence Dang - Advisor, French, Carnegie Mellon University</p>
            </div>
        </div>
        <!-- about area end -->

        <!-- about area -->
        <div class="about-area">
            <div class="container mt-3">
                <div class="site-heading mb-3">
                    <h2 class="site-title">Board of Advisors Role</h2>
                </div>
                <p class="about-text">Provide Expertise: Offer specialized knowledge (e.g., ethics, tech, policy) to guide AI ethics decisions.</p>
                <p class="about-text">Consult & Advise: Educate board on complex AI ethical dilemmas, propose solutions.</p>
                <p class="about-text">No Decision-Making Authority: Unlike a governing board, an advisory board does not have the power to make formal decisions or vote on organizational matters. </p>
                <p class="about-text">Not a Governing Body: They are not responsible for the legal and fiduciary duties of the governing board.</p>
            </div>
        </div>
        <!-- about area end -->

        <!-- about area -->
        <div class="about-area pt-120">
            <div class="container mt-3">
                <div class="site-heading mb-3">
                    <h2 class="site-title">Leadership Positions</h2>
                    <p><strong>Core Governing Roles (Mentioned First)</strong></p>
                </div>
                <p class="about-text">
                    • President<br>
                    • Secretary<br>
                    • Treasurer
                </p>
                <div class="site-heading mb-3">
                    <h2 class="site-title">Honorary Roles</h2>
                </div>
                <p class="about-text">
                    • EVP of Sponsorship (Multiple)<br>
                    • EVP of Membership (Multiple)<br>
                    • EVP of Operations – Spanish<br>
                    • EVP of Operations – English<br>
                    • EVP of Operations – Vietnamese<br>
                    • EVP of Operations – Mandarin<br>
                    • EVP of Communications<br>
                    • Deputy EVP<br>
                    • VP<br>
                    • Deputy VP
                </p>
            </div>
        </div>
        <!-- about area end -->

        <!-- about area -->
        <div id="partners" class="about-area py-120">
            <div class="container mt-3">
                <div class="site-heading mb-3">
                    <span class="site-title-tagline">Academic & Industry Partners</span>
                    <h2 class="site-title">Partners</h2>
                </div>
                <p class="about-text">Legend College Preparatory - Academic Partner</p>
                <p class="about-text">Legend College Preparatory is a prestigious WASC-accredited private high school in the heart of Cupertino, California — the epicenter of global innovation. Serving grades 6–12 through flexible full- and part-time enrollment, LCP delivers a rigorous, UC-approved curriculum tailored for highly motivated students pursuing elite university admissions.</p>
                <p class="about-text">Renowned for its forward-thinking leadership in AI education, the school empowers scholars to master Python, data science, machine learning, ethical AI, and emerging fields like AP Cybersecurity (launching Fall 2026). Students don't merely study AI — they build real-world AI systems, engage in research-oriented internships with expert mentors, and earn specialized certifications that distinguish them in competitive admissions.</p>
                <p class="about-text">With personalized learning, small classes, accelerated Honors/AP pathways, and strategic college guidance, LCP consistently positions graduates for admission to top-tier universities and scholarships. Recognized among the top 20% of private schools in California (WASC, 2023), it combines academic excellence, interdisciplinary innovation, and a future-focused ethos in the vibrant Silicon Valley ecosystem.</p>
                <p class="about-text">Legend College Preparatory — Where exceptional students become visionary leaders in an AI-driven world.</p>
                <p class="about-text"><br> Link: https://legendcp.com/</p>
            </div>
        </div>
        <!-- about area end -->

        <!-- choose area -->
        <div id="the-problem" class="choose-area">
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
                                            <p>Many underserved communities lack the necessary infrastructure, resources, and connectivity to fully leverage AI-powered tutoring tools, creating significant barriers to access.</p>
                                        </li>
                                        <li>
                                            <h5>Lack of cultural relevance and linguistic diversity</h5>
                                            <p>Existing AI tutoring solutions often fail to accommodate the diverse cultural and linguistic needs of learners from underrepresented backgrounds, further widening the educational divide.</p>
                                        </li>
                                        <li>
                                            <h5>Ethical risks: data privacy, bias, lack of transparency</h5>
                                            <p>The deployment of AI in education raises critical ethical concerns, such as data privacy, algorithmic bias, and a lack of transparency, which can disproportionately impact marginalized learners.</p>
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

        <!-- faq area -->
        <div id="our-solution" class="faq-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Why Choose Us</span>
                                <h2 class="site-title my-3">Our <span>Solution</span></h2>
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
            <div class="container mt-3" style="text-align: center;">
                <div class="site-heading mb-3">
                    <h3>Our Tutoring Principles</h3>
                </div>
                <p class="about-text">Equity • Accessibility • Fairness • Transparency • Dignity</p>
                <p class="about-text">Result: High-quality AI tutoring that supports real learning—without excluding those who need it most.</p>
            </div>
        </div>
        <!-- faq area end -->

        <!-- team-area -->
        <div id="who-we-serve" class="team-area">
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
                        <tr>
                            <th>Audience</th>
                            <th>Key Pain Point</th>
                            <th>How AI Ethos Helps</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Low-Income & Rural Students</td>
                            <td>Limited access to tutors, devices, and reliable internet</td>
                            <td>Free, adaptive, offline-capable AI tutoring</td>
                        </tr>
                        <tr>
                            <td>Multilingual Learners</td>
                            <td>Excluded by English-only tutoring tools</td>
                            <td>Native-language, culturally relevant tutoring</td>
                        </tr>
                        <tr>
                            <td>Differently-Abled Learners</td>
                            <td>Inaccessible formats and poor personalization</td>
                            <td>Inclusive design, tailored pacing, assistive features</td>
                        </tr>
                        <tr>
                            <td>Teachers in Low-Resource Settings</td>
                            <td>High workload, little AI support or training</td>
                            <td>Co-designed, open-source tutoring tools</td>
                        </tr>
                        <tr>
                            <td>Rural & Underserved Schools</td>
                            <td>Teacher shortages and infrastructure gaps</td>
                            <td>AI tutoring that supplements classroom instruction</td>
                        </tr>
                        <tr>
                            <td>Community Educators & Volunteers</td>
                            <td>Under-resourced and under-trained</td>
                            <td>Open-source tools to deliver quality tutoring locally</td>
                        </tr>
                        <tr>
                            <td>NGOs & Funders</td>
                            <td>Ethical risks and lack of transparency in EdTech</td>
                            <td>Privacy-first, community-governed platform</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- team-area end -->

        <!-- about area -->
        <div id="why-we-are-rare" class="about-area py-120">
            <div class="container mt-3">
                <div class="site-heading mb-3">
                    <span class="site-title-tagline">The Uniqueness</span>
                    <h2 class="site-title">Why We’re <span>Rare</span></h2>
                </div>
                <p class="about-text">AI Ethos is rare because it combines mission-driven nonprofit values, equity-centered design, dynamic AI tutoring, ethical open-source practices, and multilingual/localized support—an intersection of innovation, ethics, and access that very few organizations occupy.</p>
                <table class="table mt-30">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>AI Ethos</th>
                            <th>Typical AI Tutoring</th>
                            <th>Rarity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Non-Profit + AI</td>
                            <td>✅ Mission-driven, not profit-driven</td>
                            <td>❌ Mostly for-profit</td>
                            <td>Uncommon</td>
                        </tr>
                        <tr>
                            <td>Equity-Centered Design</td>
                            <td>✅ Focus on underserved, multilingual, neurodiverse learners</td>
                            <td>❌ Scale-focused, English-centric</td>
                            <td>Rare</td>
                        </tr>
                        <tr>
                            <td>Dynamic AI Tutoring</td>
                            <td>✅ Socratic, adaptive, personalized</td>
                            <td>❌ Static content or quiz-based</td>
                            <td>Emerging</td>
                        </tr>
                        <tr>
                            <td>Ethical & Privacy-First</td>
                            <td>✅ Transparent, bias-mitigated, privacy-protected</td>
                            <td>❌ Ethics often secondary</td>
                            <td>Rare</td>
                        </tr>
                        <tr>
                            <td>Open-Source / Community-Inclusive</td>
                            <td>✅ Models, datasets, and curricula are auditable & co-created</td>
                            <td>❌ Closed-source, proprietary</td>
                            <td>Very Rare</td>
                        </tr>
                        <tr>
                            <td>Multilingual & Culturally Relevant</td>
                            <td>✅ Supports multiple languages & local curricula</td>
                            <td>❌ Mostly English, Western-focused</td>
                            <td>Rare</td>
                        </tr>
                        <tr>
                            <td>Equity + Technical Adaptation</td>
                            <td>✅ Combines adaptive AI with social impact mission</td>
                            <td>❌ Few combine ethics, equity & technical sophistication</td>
                            <td>Extremely Rare</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- about area end -->

    </main>



    <?php include_once 'footer.php'; ?>


</body>

</html>