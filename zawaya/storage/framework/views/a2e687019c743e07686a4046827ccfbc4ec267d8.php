<!--=============== basic  ===============-->
<meta charset="UTF-8">
<title><?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode')) . " | "  . ucfirst(Request::segment(1))); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo e(GeneralSiteSettings("site_meta_keywords_" . trans('frontend.boxCode'))); ?>" />
<meta name="description" content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!--=============== css  ===============-->
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('frontend/css/reset.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('frontend/css/plugins.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('frontend/css/color.css')); ?>">
<!--=============== favicons ===============-->
<link rel="shortcut icon" href="<?php echo e(URL('uploads/settings/'.GeneralSiteSettings("site_icon_" . trans('frontend.boxCode')))); ?>">
<meta property="og:title" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode')) . " | "  . ucfirst(Request::segment(1))); ?>">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="telephone=no">
<meta property="og:url" content="<?php echo e(GeneralSiteSettings("site_url")); ?>">
<meta property="og:site_name" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?>">
<meta property="og:type" content="firm">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@architectmag">
<meta property="og:image" content="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))); ?>">
<meta name="twitter:image" content="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))); ?>">
<meta name="twitter:title" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?>">
<meta property="og:description" content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>">
<meta name="twitter:description" content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>">

