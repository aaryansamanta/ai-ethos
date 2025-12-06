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
    <title>Board of Directors - AI Ethos</title>

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
                <h2 class="breadcrumb-title">Board of Directors</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/"><i class="far fa-home"></i> Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="active">Board of Directors</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->



        <!-- privacy policy -->
        <div class="pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="terms-content">
                            <?php
                            require_once 'system/Model.php';
                            $m = new Model();
                            if (isset($_GET['id']) && $_GET['id']) {
                                $result = $m->aboutGet($_GET['id']);
                            ?>
                            <h3><?= $result->title; ?></h3>
                            <p><?= $result->content; ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- privacy policy end -->



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



    </main>



    <?php include_once 'footer.php'; ?>


</body>

</html>