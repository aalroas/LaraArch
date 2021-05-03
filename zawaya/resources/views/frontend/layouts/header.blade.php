<!-- header start  -->
<header class="main-header">
<a href="{{URL('/')}}" class="header-logo ajax"><img src="{{ URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))}}" alt=""></a>
    <!-- sidebar-button -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap">
        <div class="nav-button">
            <span class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">{{ trans('frontend.menu') }}</div>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!-- sidebar-button end-->
    <!--  navigation -->
    <div class="header-contacts">
        <ul>
            <li><span> {{ trans('frontend.call') }} </span> <a href="tel:{{ GeneralSiteSettings("site_phone")}}">{{ GeneralSiteSettings("site_phone")}}</a></li>
            <li><span> {{ trans('frontend.write') }} </span> <a href="mailto:{{ GeneralSiteSettings("site_email")}}">{{ GeneralSiteSettings("site_email")}}</a></li>
        </ul>
    </div>
    <!-- navigation  end -->
</header>
<!-- header end -->
