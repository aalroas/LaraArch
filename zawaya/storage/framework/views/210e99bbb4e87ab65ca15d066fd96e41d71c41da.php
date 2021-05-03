<!-- header start  -->
<header class="main-header">
<a href="<?php echo e(URL('/')); ?>" class="header-logo ajax"><img src="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))); ?>" alt=""></a>
    <!-- sidebar-button -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap">
        <div class="nav-button">
            <span class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text"><?php echo e(trans('frontend.menu')); ?></div>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!-- sidebar-button end-->
    <!--  navigation -->
    <div class="header-contacts">
        <ul>
            <li><span> <?php echo e(trans('frontend.call')); ?> </span> <a href="tel:<?php echo e(GeneralSiteSettings("site_phone")); ?>"><?php echo e(GeneralSiteSettings("site_phone")); ?></a></li>
            <li><span> <?php echo e(trans('frontend.write')); ?> </span> <a href="mailto:<?php echo e(GeneralSiteSettings("site_email")); ?>"><?php echo e(GeneralSiteSettings("site_email")); ?></a></li>
        </ul>
    </div>
    <!-- navigation  end -->
</header>
<!-- header end -->
