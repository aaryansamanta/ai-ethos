<!-- footer area -->
<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-8 col-lg-5">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="assets/img/logo/logo-ai-ethos-min.png" alt="logo" style="width:77px;margin:0;">
                            <span style="vertical-align:middle;">AI Ethos</span>
                        </a>
                        <p class="mb-20">Transforming Access. Elevating Equity. Humanizing AI.</p>
                        <?php
                        require_once 'system/Model.php';
                        $m = new Model();
                        $contact = json_decode($m->settingGet('contact')->content);
                        unset($m);
                        ?>
                        <div class="footer-contact">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i><?= $contact->address; ?></li>
                                <li><i class="far fa-phone"></i><?= $contact->tel; ?></li>
                                <?php foreach (explode('<br>', $contact->email) as $email) {
                                    echo '<li><a href="mailto:' . $email . '"><i class="far fa-envelope"></i>' . $email . '</a> </li>';
                                } ?>
                            </ul>
                        </div>
                        <ul class="footer-social">
                            <li><a href="<?= $contact->linkedin; ?>"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="<?= $contact->facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $contact->twitter; ?>"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="<?= $contact->youtube; ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="about.php"><i class="fas fa-caret-right"></i> About</a></li>
                            <li><a href="events.php"><i class="fas fa-caret-right"></i> Events</a></li>
                            <li><a href="contact.php"><i class="fas fa-caret-right"></i> Contact</a></li>
                            <li><a href="donate.php"><i class="fas fa-caret-right"></i> Donate</a></li>
                            <li><a href="volunteer.php"><i class="fas fa-caret-right"></i> Volunteer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe Our Newsletter To Get Latest Events And News</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                    <button class="theme-btn" type="submit">
                                        Subscribe Now <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="copyright-text">&copy; Copyright <span id="date"></span> All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 align-self-center">
                    <ul class="footer-menu">
                        <li><a href="terms.php">Terms Of Services</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->




<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
<!-- scroll-top end -->


<!-- js -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/contact-form.js"></script>
<script src="assets/js/main.js"></script>