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
    <title>Contact Us - AI Ethos</title>

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
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->



        <!-- contact area -->
        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            require_once 'system/Model.php';
                            $m = new Model();
                            $contact = json_decode($m->settingGet('contact')->content);
                            unset($m);
                            ?>
                            <div class="contact-content">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Address</h5>
                                        <p><?= $contact->address; ?></p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Us</h5>
                                        <p><?= $contact->tel; ?></p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Us</h5>
                                        <p><?= $contact->email; ?></p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Open</h5>
                                        <p><?= $contact->officeOpen; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>If you have any questions or suggestions for us, please leave us a message here.</p>
                                </div>
                                <form method="post" action="/braintox/assets/php/contact.php" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn">Send
                                        Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->

        <!-- contact map -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10721.860170075517!2d-76.08510842926998!3d43.02228837042767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d98cb4a84560cf%3A0xc32c839b4827830a!2sOrange%20Crush%20Lacrosse!5e0!3m2!1sen-US!2s!4v1759889303518!5m2!1sen-US!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </main>



    <?php include_once 'footer.php'; ?>


</body>

</html>