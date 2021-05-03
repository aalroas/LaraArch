<!-- footer -->


{{-- updatedxx --}}
<div class="height-emulator fl-wrap"></div>
<footer class="main-footer fixed-footer">
    <div class="pr-bg"></div>
    <div class="container">
        <div class="fl-wrap footer-inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                    <img src="{{ URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))}}" alt="">
                    </div>
                    <div class="footer_text  footer-box fl-wrap">
                        <p>


                     {{ GeneralSiteSettings("site_meta_description_".trans('frontend.boxCode')) }}


                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-header fl-wrap"><span>01.</span> {{ trans('frontend.contact_us') }}</div>
                    <!-- footer-contacts-->
                    <div class="footer-contacts footer-box fl-wrap">
                        <ul>
                            <li><span>{{ trans('frontend.call') }}:</span><a href="tel:{{ GeneralSiteSettings("site_phone")}}">{{ GeneralSiteSettings("site_phone")}}</a></li>
                            <li><span>{{ trans('frontend.write') }} :</span><a href="mailto:{{ GeneralSiteSettings("site_email")}}">{{ GeneralSiteSettings("site_email")}}</a></li>
                            <li><span>{{ trans('frontend.find_us') }} : </span><a href="#">{{ GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))}}</a></li>
                        </ul>
                    </div>
                    <!-- footer contacts end -->
                    <a href="{{URL('/contact')}}" class="ajax fc_button">{{ trans('frontend.get_in_touch') }} <i class="fal fa-envelope"></i></a>
                </div>
                <div class="col-md-4">
                    <div class="footer-header fl-wrap"><span>02.</span>  {{ trans('frontend.subscribe') }}  </div>
                    <div class="footer-box fl-wrap">
                        {{-- <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send
                            you a notification by email.</p> --}}
                        <div class="subcribe-form fl-wrap">
                            <form id="subscribe" class="fl-wrap">
                            <input class="enteremail" name="email" id="subscribe-email" placeholder="{{ trans('frontend.your_email')}}"
                                    spellcheck="false" type="text">
                                    <input   name="lang" id="lang" value="{{ trans('frontend.boxCode')}}"
                                       type="hidden">

                                <button type="submit" id="subscribe-button" class="subscribe-button"> {{ trans('frontend.send') }} <i
                                        class="fal fa-long-arrow-right"></i></button>
                                <label for="subscribe-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter fl-wrap">
            <!-- policy-box-->
            <div class="policy-box">
                <span>&#169; {{ GeneralSiteSettings("copy_right_" .trans('frontend.boxCode'))}}</span>
            </div>
            <!-- policy-box end-->
            <a href="#" class="to-top-btn to-top">{{ trans('frontend.back_to_top') }} <i class="fal fa-long-arrow-up"></i></a>
        </div>
    </div>
    <div class="footer-canvas">
        <div class="dots gallery__dots" data-dots=""></div>
    </div>
</footer>
<!-- footer  end -->
