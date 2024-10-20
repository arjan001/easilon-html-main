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
                    <h2 class="page-header__title">Contact Us</h2>
                    <ul class="easilon-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Contact Us</span></li>
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

        <section class="contact-one section-space">
            <div class="container">
                <div class="row gutter-y-50 align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-one__image wow fadeInLeft" data-wow-duration="1500ms" style="background-image: url(assets/images/resources/contact-1-1.jpg);">
                            <div class="contact-one__info list-unstyled">
                                <div class="contact-one__info__shape"></div><!-- /.contact-one__info__shape -->
                                <div class="contact-one__info__inner">
                                    <div class="contact-one__info__item">
                                        <span class="contact-one__info__icon">
                                            <i class="icon-location"></i>
                                        </span><!-- /.contact-one__info__icon -->
                                        <div class="contact-one__info__content">
                                            <h4 class="contact-one__info__title">Mailing Address</h4><!-- /.contact-one__info__title -->
                                            <a href="https://maps.app.goo.gl/wpr8sgirX4NK6VsU7" class="contact-one__info__text">Nairobi kenya, Lavington 086456</a><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__content -->
                                    </div><!-- /.contact-one__info__item -->
                                    <div class="contact-one__info__item">
                                        <span class="contact-one__info__icon">
                                            <i class="icon-telephone"></i>
                                        </span><!-- /.contact-one__info__icon -->
                                        <div class="contact-one__info__content">
                                            <h4 class="contact-one__info__title">Quick Contact</h4><!-- /.contact-one__info__title -->
                                            <a href="tel:+254 722 703235" class="contact-one__info__text">+254 722 703235</a><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__content -->
                                    </div><!-- /.contact-one__info__item -->
                                    <div class="contact-one__info__item">
                                        <span class="contact-one__info__icon">
                                            <i class="icon-mail"></i>
                                        </span><!-- /.contact-one__info__icon -->
                                        <div class="contact-one__info__content">
                                            <h4 class="contact-one__info__title">support email</h4><!-- /.contact-one__info__title -->
                                            <a href="mailto:info@easilon .com" class="contact-one__info__text">info@smsl.co.ke</a><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__content -->
                                    </div><!-- /.contact-one__info__item -->
                                </div><!-- /.contact-one__info__inner -->
                            </div><!-- /.contact-one__info -->
                        </div><!-- /.contact-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <form class="contact-one__form contact-form-validated form-one wow fadeInRight" data-wow-duration="1500ms" action="https://bracketweb.com/easilon-html-main/inc/sendemail.php">
                            <h2 class="contact-one__form__title">Leave us a message</h2><!-- /.contact-one__form__title -->
                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                    <input type="email" name="email" placeholder="Your Email">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <div class="form-one__control__select">
                                        <label class="sr-only" for="select-subject">Select Subject</label>
                                        <select class="selectpicker" id="select-subject" aria-label="Subject line">
                                            <option selected>Select Subject</option>
                                            <option value="1">Personal Loan</option>
                                            <option value="2">emergency Loan</option>
                                            <option value="3">Education Finace</option>
                                            <option value="4">Working capital</option>
                                            
                                           
                                        </select>
                                    </div><!-- /.form-one__control__select -->
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="contact-one__form__btn easilon -btn"><span>send message</span></button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-50 -->
            </div><!-- /.container -->
        </section><!-- /.contact-one section-space -->

        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.822800752907!2d36.767652573959595!3d-1.2799558987078654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19f7fd53fbfd%3A0x40b8907600d98711!2sLavington%20Mall!5e0!3m2!1sen!2ske!4v1728392954587!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- /.google-map -->
            </div><!-- /.container-fluid -->
        </section><!-- /.contact-map -->

       
                <!-- footer code will be here -->

                <?php include 'footer.php'; ?>

             <!-- footer ends here -->