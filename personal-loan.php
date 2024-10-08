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
                    <h2 class="page-header__title">personal loan</h2>
                    <ul class="easilon-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>our services</span></li>
                        <li><span>personal loan</span></li>
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

        <section class="service-details section-space">
            <div class="container">
                <div class="row gutter-y-50">
  
                                        <!-- floans sidebar code will be here -->
 
                                        <?php include 'loans-sidebar.php'; ?>
    
                                       <!-- loans sidebar  ends here -->


                    <div class="col-md-12 col-lg-8">
                        <div class="service-details__content">
                            <div class="service-details__inner">
                                <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <img src="assets/images/services/3.jpg" alt="personal loan">
                                </div><!-- /.service-details__thumbnail -->
                                <h3 class="service-details__title">personal loan</h3><!-- /.service-details__title -->
                                <p class="service-details__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At SMSL, we understand that life can be unpredictable, and sometimes you need a little extra financial support to navigate those challenges. Our personal loans are designed to provide you with the flexibility and convenience you need, whether it's for unexpected expenses, home improvements, or personal projects,</p>

                                <ul>
                                    <li>Quick and Easy Application: Our online application process is straightforward and user-friendly, allowing you to apply for a personal loan from the comfort of your home. Get approved in just a few hours!</li>
                                    <li>Flexible Loan Amounts: We offer a range of loan amounts to suit your needs, whether you require a small sum for a minor expense or a larger amount for significant projects.</li>
                                    <li>Competitive Interest Rates: SMSL is committed to transparency and fairness. We provide competitive interest rates with no hidden fees, ensuring you know exactly what to expect.</li>
                                    <li>Customizable Repayment Plans: We believe in making your financial life easier. Choose from various repayment options tailored to fit your budget, so you can repay your loan comfortably.</li>
                                    <li>Dedicated Customer Support: Our friendly team is here to assist you at every step. Whether you have questions about the application process or need help managing your loan, we are just a call away.</li>
                                </ul>
                                <p>Let SMSL help you take control of your finances and turn your plans into reality with a personal loan that meets your needs. Apply now and experience the difference!</p>
                                <!-- /.service-details__text -->
                            </div><!-- /.service-details__inner -->

                            <div class="service-details__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <ul class="list-unstyled service-details__list">
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Instant Business Growth
                                    </li>
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        24/7 Quality Service
                                    </li>
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Easy Customer Service
                                    </li>
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Quality Cost Service
                                    </li>
                                </ul><!-- /.list-unstyled team-details__list -->
                                <img src="assets/images/services/service-d-list-1.jpg" alt="service-d-list" class="service-details__info__image">
                            </div><!-- /.service-details__info -->
                            

                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <section class="loan-two loan-two--service-details section-space">
            <div class="container">
                <div class="loan-two__inner" style="background-image: url(assets/images/resources/loan-bg-2-1.jpg);">
                    <div class="loan-two__form">
                        <div class="loan-two__form__bg" style="background-image: url(assets/images/shapes/loan-calculator-form-bg-1-1.png);"></div>
                        <!-- /.loan-two__form__bg -->
                        <form action="#" id="loan-calculator-01" data-form-direction="ltr" data-interest-rate="15" class="loan-calculator-form wow fadeInUp" data-wow-duration="1500ms">
                            <h3 class="loan-calculator-form__title">OUR LOAN CALCULATOR</h3>
                            <div class="loan-calculator-form__content">
                                <div class="input-box__top">
                                    <span>KSH 1000</span>
                                    <span>KSH 50000</span>
                                </div><!-- /.input-box__top -->
                                <div class="input-box">
                                    <div class="range-slider-count" id="loan-calculator-01-count"></div>
                                    <input type="hidden" value="" class="min-count" id="loan-calculator-01-min-count">
                                    <input type="hidden" value="" class="max-count" id="loan-calculator-01-max-count">
                                </div><!-- /.input-box -->
                                <div class="input-box__top input-box__top-border">
                                    <span>1 Month</span>
                                    <span>12 Months</span>
                                </div><!-- /.input-box__top -->
                                <div class="input-box">
                                    <div class="range-slider-month" id="loan-calculator-01-month"></div>
                                    <input type="hidden" value="" class="min-month" id="loan-calculator-01-min-month">
                                    <input type="hidden" value="" class="max-month" id="loan-calculator-01-max-month">
                                </div><!-- /.input-box -->
                                <p>
                                    <span>Pay Monthly</span>
                                    <b>KSH <i class="loan-monthly-pay"></i></b>
                                </p>
                                <p>
                                    <span>Term of Use</span>
                                    <b><i class="loan-month"></i> Months</b>
                                </p>
                                <p>
                                    <span>Total Pay Back amount</span>
                                    <b>KSH <i class="loan-total"></i></b>
                                </p>
                                <button type="button" class="easilon-btn loan-calculator-form__btn" onclick="window.location.href='apply-loan.php'">
    <span>Apply for loan</span>
    <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
</button>
<!-- /.easilon -btn -->
                            </div><!-- /.loan-calculator-form__content -->
                        </form><!-- /.loan-calculator-form -->
                    </div><!-- /.loan-two__form -->
                    <img src="assets/images/shapes/loan-money-2-1.png" alt="money" class="loan-two__money">
                </div><!-- /.loan-two__inner -->
            </div><!-- /.container -->
        </section><!-- /.loan-two section-space -->

    <!-- footer code will be here -->

    <?php include 'footer.php'; ?>
    
     <!-- footer ends here -->