<!DOCTYPE html>
<html lang="en">



<head>
    <!-- header lnks included -->
     <?php include 'header-links.php'; ?>
    <!-- header links end here -->


</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

<!-- topbar.php starts here -->
 
 <?php include 'topbar.php'; ?>

 <!-- topbar.php ends here -->

<!-- main navbar section start -->

<?php include 'navbar.php'; ?>

 <!-- main navbar section ends -->


        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">apply loan</h2>
                    <ul class="easilon -breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>apply loan</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <div class="page-header__border-box">
                <div class="page-header__border page-header__border--1"></div><!-- /.page-header__border -->
                <div class="page-header__border page-header__border--2"></div><!-- /.page-header__border -->
                <div class="page-header__border page-header__border--3"></div><!-- /.page-header__border -->
                <div class="page-header__border page-header__border--4"></div><!-- /.page-header__border -->
                <div class="page-header__border page-header__border--5"></div><!-- /.page-header__border -->
            </div><!-- /.page-header__border-box -->
        </section><!-- /.page-header -->

        <section class="apply-loan section-space">
            <div class="container">
                <form action="#" class="apply-loan__form">
                    <!-- Loan Details -->
                    <div class="apply-loan__details">
                        <h2 class="apply-loan__details__title">Loan Details</h2>
                        <div class="apply-loan__form__row row">
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="loan-amount">Loan Amount*</label>
                                    <input type="text" id="loan-amount" placeholder="$25000.00" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="monthly-income">Monthly Income*</label>
                                    <input type="text" id="monthly-income" placeholder="$1000.00" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>Purpose of Loan*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Purpose of Loan</option>
                                        <option value="1">home loan</option>
                                        <option value="2">bike loan</option>
                                        <option value="3">business loan</option>
                                        <option value="4">education loan</option>
                                        <option value="5">study loan</option>
                                        <option value="6">property loan</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>Loan Years*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Loan Years</option>
                                        <option value="1">1 years</option>
                                        <option value="2">2 years</option>
                                        <option value="3">3 years</option>
                                        <option value="4">4 years</option>
                                        <option value="5">5 years</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                        </div><!-- /.pply-loan__form -->
                    </div><!-- /.apply-loan__details -->

                    <!-- Personal Details -->
                    <div class="apply-loan__details">
                        <h2 class="apply-loan__details__title">Personal Details</h2>
                        <div class="apply-loan__form__row row">
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="full-name">Full Name*</label>
                                    <input type="text" id="full-name" placeholder="Full Name" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="enter-email">Email*</label>
                                    <input type="email" id="enter-email" placeholder="Enter Email" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="mobile-number">Mobile Number*</label>
                                    <input type="tel" id="mobile-number" placeholder="Mobile Number" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>Marital Status*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Marital Status</option>
                                        <option value="1">married</option>
                                        <option value="2">single</option>
                                        <option value="3">widowed</option>
                                        <option value="4">divorced</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="datepicker">Birth Date*</label>
                                    <div class="apply-loan__form__date">
                                        <input type="text" name="date" placeholder="DD / MM / YY" id="datepicker" class="easilon -datepicker">
                                        <span class="apply-loan__form__date__icon">
                                            <i class="icon-down"></i>
                                        </span><!-- /.apply-loan__form__date__icon -->
                                    </div><!-- /.apply-loan__form__field -->
                                </div><!-- /.apply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>Number Of Dependents*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Number Of Dependents</option>
                                        <option value="1">1 depends</option>
                                        <option value="2">2 depends</option>
                                        <option value="3">3 depends</option>
                                        <option value="4">4 depends</option>
                                        <option value="5">5 depends</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                        </div><!-- /.pply-loan__form -->
                    </div><!-- /.apply-loan__details -->

                    <!-- Address Details -->
                    <div class="apply-loan__details">
                        <h2 class="apply-loan__details__title">Address Details</h2>
                        <div class="apply-loan__form__row row">
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="house-info">House No/Name*</label>
                                    <input type="text" id="house-info" placeholder="House No/Name" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="street">Street*</label>
                                    <input type="text" id="street" placeholder="Street" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="city">City*</label>
                                    <input type="text" id="city" placeholder="City Name" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>State*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">State</option>
                                        <option value="1">Barisal Division</option>
                                        <option value="2">Chittagong Division</option>
                                        <option value="3">Dhaka Division</option>
                                        <option value="4">Khulna Division</option>
                                        <option value="5">Rajshahi Division</option>
                                        <option value="6">Rangpur Division</option>
                                        <option value="7">Sylhet Division</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>Country*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Country</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="2">Afghanistan</option>
                                        <option value="3">Russia</option>
                                        <option value="4">Indonesia</option>
                                        <option value="5">Jordan</option>
                                        <option value="6">United Kingdom</option>
                                        <option value="7">United States of America</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="pin-code">Pin Code*</label>
                                    <input type="text" id="pin-code" placeholder="Pin Code" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                        </div><!-- /.pply-loan__form -->
                    </div><!-- /.apply-loan__details -->

                    <!-- Other Details -->
                    <div class="apply-loan__details">
                        <h2 class="apply-loan__details__title">Other Details</h2>
                        <div class="apply-loan__form__row row">
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="employment-industry">Employment Industry*</label>
                                    <input type="text" id="employment-industry" placeholder="Employment Industry" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="employer-name">Employer Name*</label>
                                    <input type="text" id="employer-name" placeholder="Employer Name" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label for="employer-status">Employer Status*</label>
                                    <input type="text" id="employer-status" placeholder="Employer Status" required="">
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                            <div class="col-md-6">
                                <div class="apply-loan__form__control">
                                    <label>Work Phone Number*</label>
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Work Phone Number</option>
                                        <option value="1">(206) 342-8631</option>
                                        <option value="2">(717) 550-1675</option>
                                        <option value="3">(248) 762-0356</option>
                                        <option value="4">(252) 258-3799</option>
                                        <option value="5">(209) 300-2557</option>
                                    </select>
                                </div><!-- /.pply-loan__form__control -->
                            </div>
                        </div><!-- /.pply-loan__form -->
                    </div><!-- /.apply-loan__details -->
                    <button type="submit" class="apply-loan__form__btn easilon -btn">
                        <span>submit now</span>
                        <span class="easilon -btn__icon">
                            <i class="icon-double-right-arrow"></i>
                        </span>
                    </button><!-- /.apply-loan__form__btn easilon -btn -->
                </form><!-- /.apply-loan__form -->
            </div><!-- /.container -->
        </section><!-- /.apply-loan section-space -->

        <footer class="main-footer @@extraClassName">
            <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__top">
                <div class="container">
                    <div class="row gutter-y-40">
                        <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="footer-widget footer-widget--about">
                                <a href="index.php" class="footer-widget__logo">
                                    <img src="assets/images/logo-light.png" width="150" alt="easilon  HTML Template">
                                </a>
                                <p class="footer-widget__about-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><!-- /.footer-widget__about-text -->
                                <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
                                    <input type="text" name="EMAIL" placeholder="Enter Email">
                                    <button type="submit">
                                        <span class="sr-only">submit</span><!-- /.sr-only -->
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </form><!-- /.footer-widget__newsletter mc-form -->
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-xl-4 col-lg-6 -->
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="footer-widget footer-widget--links footer-widget--links-one">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="services.php">Our Services</a></li>
                                    <li><a href="team.php">Meet the Team</a></li>
                                    <li><a href="blog-grid-right.php">Recent News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-xl-2 col-lg-3 col-md-3 col-sm-6 -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="footer-widget footer-widget--links footer-widget--links-two">
                                <h2 class="footer-widget__title">Loan Services</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="service-d-bike-loan.php">bike loan</a></li>
                                    <li><a href="service-d-home-loan.php">home loan</a></li>
                                    <li><a href="service-d-study-loan.php">abroad study loan</a></li>
                                    <li><a href="service-d-business-loan.php">business loan</a></li>
                                    <li><a href="personal-loan.php">personal loan</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-xl-3 col-lg-3 col-md-4 col-sm-6 -->
                        <div class="col-xl-3 col-lg-6 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                            <div class="footer-widget footer-widget--contact">
                                <h2 class="footer-widget__title">Get inTouch</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__info">
                                    <li><a href="https://www.google.com/maps">85 Ketch Harbour Road Bensal PA 19020</a></li>
                                    <li>
                                        <span class="footer-widget__info__icon"><i class="icon-paper-plane"></i></span>
                                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                    </li>
                                    <li>
                                        <span class="footer-widget__info__icon"><i class="icon-telephone"></i></span>
                                        <a href="tel:+9156980036420">+91 5698 0036 420</a>
                                    </li>
                                </ul><!-- /.list-unstyled -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-xl-3 col-lg-6 col-md-5 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <div class="row gutter-y-40 align-items-center">
                            <div class="col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="main-footer__social social-links-two">
                                    <a href="https://facebook.com/">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com/">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com/">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                    <a href="https://youtube.com/">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div><!-- /.main-footer__social -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="main-footer__bottom__copyright">
                                    <p class="main-footer__copyright">
                                        &copy; Copyright <span class="dynamic-year"></span> by easilon  HTML Template.
                                    </p>
                                </div><!-- /.main-footer__bottom__copyright -->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>
            <div class="logo-box logo-retina">
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <span class="mobile-nav__contact__icon"><i class="fa fa-envelope"></i></span>
                    <a href="mailto:needhelp@easilon .com">needhelp@easilon .com</a>
                </li>
                <li>
                    <span class="mobile-nav__contact__icon"><i class="fa fa-phone-alt"></i></span>
                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://youtube.com/">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="easilon -btn">
                    <span class="easilon -btn__icon"><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/easilon .js"></script>
</body>


<!-- Mirrored from bracketweb.com/easilon -html-main/apply-loan.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2024 11:09:54 GMT -->
</html>