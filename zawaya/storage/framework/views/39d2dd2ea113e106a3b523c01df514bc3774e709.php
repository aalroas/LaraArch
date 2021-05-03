<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(trans('frontend.direction')); ?>">

<head>

<style>
    .header-logo img {


        height: 82px !important;
        width: 200px !important;
        margin-top: -25px !important;
    }
</style>


    <?php echo $__env->make('frontend/layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if( trans('frontend.direction')=="rtl"): ?>
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul,
        li,
        p,
        a,
        td {
            font-family: 'Tajawal', sans-serif !important;

        }
        .subcribe-form .subscribe-button {

        left: 0;
        right: unset;

        text-align: left;

        }

        .footer_text:before {

            right: 0;
            left: unset;
        }

        .sliding-menu ul {
            float: right !important;
        }

        .sliding-menu a {
            float: right !important;
        }

        .lang-links a {

            float: right !important;
        }

        .lang-links:before {

            right: 20px !important;
        }

        .sliding-menu li:after {

            right: -10px !important;
        }

        .submen-dec:before {
            left: 0 !important;
            right: unset !important;
        }

        .footer-contacts span {

            float: right;
        }

        .footer-header span {
            right: unset;
            left: 0;
        }

        .footer-header:before {



            right: 100px;
            left: 0;

        }

        .footer-header {
            text-align: right;

        }

        .fl-wrap {
            float: right;
        }

        .footer-contacts li {
            text-align: right;
        }

        p {

            text-align: right;
        }

        .footer-logo {
            float: right;

        }

        .to-top-btn:hover i,
        .fc_button i {
            padding-right: 20px;
        }

        .split-sceen-content_title h3 {

            text-align: right;

        }

        .split-sceen-content_title:before {
            left: unset;
            right: 0;
        }

        .pr-subtitle {

            text-align: right;
        }

        .cont-det-wrap li {

            text-align: right;
        }

        .cont-det-wrap li span {
            float: right;
            padding-left: 10px;

        }

        #message {
            text-align: right;
            float: right;
        }

        .grid-det_category a {
            float: right;
            margin-left: 12px;

            text-align: right;
        }

        .grid-det_link {

            text-align: right;

        }

        .grid-det_link:before {
            left: unset;
            right: 0;
        }

        .fixed-filter-panel .gallery-filters a {
            float: right;
            margin-left: 15px;
        }

        .pr-list li span {
            float: right;
            padding-left: 10px;

        }

        .to-top-btn {
            float: left;
        }

        .pr-list li {
            float: right;
            text-align: right;
        }

        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12 {
            float: right;
        }

        .tabs-menu li {
            float: right;
            margin-left: 20px;

        }

        .det-wrap p {

            text-align: right;
        }


        .parallax-header {

            float: right;
        }

        .section-number.right_sn {
            right: inherit;
            top: -60px;
            left: -40px;
        }

        .inline-facts-wrap {
            float: right;


            text-align: right;

        }

        .inline-facts-wrap h6 {


            padding-right: 20px;
        }

        .inline-facts-wrap h6:before {

            right: 0;
            left: unset;

        }

        .header-contacts li:before {

            right: -30px;
            left: unset;
        }

        .half-hero-wrap h1 {




            text-align: right;

        }

        .half-hero-wrap h4 {
            text-align: right;
            font-size: 14px;
            float: right;
        }

        .nav-social_title {
            float: right;

        }

        .nav-social li {
            float: right;


        }

        .team-info {
            float: right;
            width: 100%;
            text-align: right;
            padding: 20px 0 0;
        }

        .testi-item h3 {

            text-align: right;
        }

        .testi-item p {
            text-align: right;
        }

        .policy-box {
            float: right;
        }

        .fixed-column-wrap_title h2 {

            text-align: right;

        }

        .parallax-header span,
        .parallax-header a {
            float: right;
            margin-left: 20px;
        }

        @media  only screen and (max-width: 1064px) {
            .fixed-column-wrap_title p {
                text-align: right;
                float: right;
            }

            .fixed-column-wrap_title h2:before {
                right: inherit;
                right: 0;
            }

        }
    </style>
    <?php endif; ?>
</head>


<body>
    <!--Loader -->
    <div class="loader2">
        <div class="loader loader_each"><span></span></div>
    </div>

    <div id="main">

        <?php echo $__env->make('frontend/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- left-panel -->
        <div class="left-panel">
            <div class="horizonral-subtitle"><span><strong></strong></span></div>
            <div class="left-panel_social">
                <ul>

                    <li><a href="<?php echo e(GeneralSiteSettings("site_facebook_url")); ?>" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo e(GeneralSiteSettings("site_instagram_url")); ?>" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="<?php echo e(GeneralSiteSettings("site_twitter_url")); ?>" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="<?php echo e(GeneralSiteSettings("site_linkedin_url")); ?>" target="_blank"><i
                                class="fab fa-linkedin"></i></a></li>

                                <li><a href="<?php echo e(GeneralSiteSettings("site_whatsapp_url")); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- left-panel end -->

        <!-- share-button -->
        <div class="share-button showshare">
            <span><?php echo e(trans('frontend.share')); ?></span>
        </div>
        <!-- share-button end -->



        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder"
                data-pagetitle="<?php if(ucfirst(Request::segment(1))== "" ): ?> <?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?> <?php else: ?> <?php echo e(ucfirst(Request::segment(1))); ?>  <?php endif; ?>">
                <!-- nav-holder-->
                <div class="nav-holder but-hol">
                    <div class="nav-scroll-bar-wrap fl-wrap">

                        <!-- nav -->
                        <nav class="nav-inner" id="menu">
                            <ul>
                                <li><a class="ajax <?php if(ucfirst(Request::segment(1))== "Portfolios" ): ?>   act-link
                                <?php endif; ?> "  href="<?php echo e(URL('/portfolios')); ?>"><?php echo e(trans('frontend.portfolio')); ?></a></li>

                                <li><a href="<?php echo e(URL('/restoration')); ?>" class="ajax <?php if(ucfirst(Request::segment(1))== "Restoration" ): ?> act-link
                                            <?php endif; ?> "><?php echo e(trans('frontend.restoration')); ?></a></li>


                                <li><a href="<?php echo e(URL('/')); ?>"
                                        class="ajax <?php if(ucfirst(Request::segment(1))== "" ): ?>   act-link
                                <?php endif; ?> "><?php echo e(trans('frontend.interior_design')); ?></a></li>

                                <li><a href="<?php echo e(URL('/exterior_design')); ?>"
                                        class="ajax <?php if(ucfirst(Request::segment(1))== "Exterior_design" ): ?>   act-link
                                <?php endif; ?>"><?php echo e(trans('frontend.exterior_design')); ?></a></li>



                                <li><a href="<?php echo e(URL('/services')); ?>" class=" <?php if(ucfirst(Request::segment(1))== "Services" ): ?>   act-link
                                <?php endif; ?> ajax"><?php echo e(trans('frontend.services')); ?></a>
                                </li>
                                <li><a href="<?php echo e(URL('/blog')); ?>" class="ajax <?php if(ucfirst(Request::segment(1))== "Blog" ): ?>   act-link
                                <?php endif; ?> "><?php echo e(trans('frontend.blog')); ?></a></li>
                                <li><a class="ajax <?php if(ucfirst(Request::segment(1))== "About" ): ?>   act-link
                                <?php endif; ?>"  href="<?php echo e(URL('/about')); ?>"><?php echo e(trans('frontend.about')); ?></a></li>
                                <li><a href="<?php echo e(URL('/contact')); ?>" class="ajax <?php if(ucfirst(Request::segment(1))== "Contact" ): ?>   act-link
                                <?php endif; ?>"><?php echo e(trans('frontend.contact_us')); ?></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- nav end-->
                        <!--lang-links-->
                        <div class="lang-links fl-wrap">
                            <a href="<?php echo e(URL::to('lang/en')); ?>" <?php if(trans('frontend.code')=="en" ): ?> class="act-leng"
                                <?php endif; ?>>EN</a>
                            <a <?php if(trans('frontend.code')=="ar" ): ?> class="act-leng" <?php endif; ?>
                                href="<?php echo e(URL::to('lang/ar')); ?>">AR</a>
                            <a <?php if(trans('frontend.code')=="tr" ): ?> class="act-leng" <?php endif; ?>
                                href="<?php echo e(URL::to('lang/tr')); ?>">TR</a>
                        </div>
                        <!--lang-links end-->
                    </div>
                    <!--nav-social-->
                    <div class="nav-social">
                        <span class="nav-social_title"><?php echo e(trans('frontend.follow_us')); ?> : </span>
                        <ul>

                            <li><a href="<?php echo e(GeneralSiteSettings("site_facebook_url")); ?>" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="<?php echo e(GeneralSiteSettings("site_instagram_url")); ?>" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="<?php echo e(GeneralSiteSettings("site_twitter_url")); ?>" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo e(GeneralSiteSettings("site_linkedin_url")); ?>" target="_blank"><i
                                        class="fab fa-linkedin"></i></a></li>
<li><a href="<?php echo e(GeneralSiteSettings("site_whatsapp_url")); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>

                        </ul>
                    </div>
                    <!--nav-social end -->
                </div>
                <div class="nav-overlay">
                    <div class="element"></div>
                </div>
                <!-- nav-holder end -->



                <?php $__env->startSection('main-content'); ?>

                <?php echo $__env->yieldSection(); ?>




                <?php $__env->startSection('footer-content'); ?>

                <?php echo $__env->yieldSection(); ?>
            </div>
            <!-- wrapper end -->

        </div>
        <!-- Main end -->


        <?php echo $__env->make('frontend/layouts/js', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>


</html>
