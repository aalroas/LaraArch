<?php $__env->startSection('main-content'); ?>
<div class="content">
    <?php
$contact_name="";
$contact_text = "";
if (trans('frontend.code') =="en") {
$contact_name =$contact->contact_name_en;
$contact_text =$contact->contact_text_en;
        }elseif (trans('frontend.code') == "tr") {
            $page_name =$contact->contact_name_tr;
            $page_text =$contact->contact_text_tr;
        }else {
            $contact_name =$contact->contact_name_ar;
            $contact_text =$contact->contact_text_ar;
         }
        ?>
    <div class="fixed-column-wrap">
        <div class="pr-bg"></div>
        <div class="fixed-column-wrap-content map-mobile">
            <div class="scroll-nav-wrap color-bg">
                <div class="carnival"><?php echo e(trans('frontend.scroll_down')); ?></div>
                <div class="snw-dec">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <div class="map-container mc_big">
                <div id="map-single" class="map" data-latlog="[<?php echo e($contact->lat); ?> , <?php echo e($contact->long); ?>]"
                    data-popuptext="<?php echo e(GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))); ?>"></div>
            </div>
        </div>
        <!--fixed-column-wrap-content end-->
    </div>
    <!--fixed-column-wrap end-->
    <!--column-wrap-->
    <div class="column-wrap">
        <!--column-wrap-container -->
        <div class="column-wrap-container fl-wrap">
            <div class="col-wc_dec">
                <div class="pr-bg pr-bg-white"></div>
            </div>
            <div class="col-wc_dec col-wc_dec2">
                <div class="pr-bg pr-bg-white"></div>
            </div>
            <!--section-->
            <section id="sec1" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3> <?php echo e($contact_name); ?></h3>
                      <?php echo e($contact_text); ?>

                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <img src="<?php echo e(URL('uploads/contact/'.$contact->contact_image)); ?>" class="respimg" alt="">
                            <div class="cont-det-wrap dark-bg">
                                <div class="pr-bg pr-bg-white"></div>
                                <ul>
                                  <li><span><?php echo e(trans('frontend.call')); ?>:</span><a
                                        href="tel:<?php echo e(GeneralSiteSettings("site_phone")); ?>"><?php echo e(GeneralSiteSettings("site_phone")); ?></a></li>
                                <li><span><?php echo e(trans('frontend.write')); ?> :</span><a
                                        href="mailto:<?php echo e(GeneralSiteSettings("site_email")); ?>"><?php echo e(GeneralSiteSettings("site_email")); ?></a></li>
                                <li><span><?php echo e(trans('frontend.find_us')); ?> : </span><a
                                        href="#"><?php echo e(GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-number right_sn"><span>0</span>1.</div>
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>
            <!--section-->
            <section id="sec2" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3><?php echo e(trans('frontend.get_in_touch')); ?></h3>

                    </div>
                    <div id="contact-form">
                        <div class="pr-bg pr-bg-white"></div>
                        <div id="contact-form">
                            <div class="pr-bg pr-bg-white"></div>
                            <div id="messagex"></div>
                            <form class="custom-form" action="<?php echo e(asset('frontend/php/contact.php')); ?>" name="contactform" id="contactform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" id="name" placeholder="<?php echo e(trans('frontend.name')); ?>" value=""  required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" id="email" placeholder="<?php echo e(trans('frontend.email')); ?>" value="" required  />
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="<?php echo e(trans('frontend.phone')); ?>" value=""  required />
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" name="subject" id="subject" placeholder="<?php echo e(trans('frontend.subject')); ?>" value=""  required />

                                        </div>
                                    </div>
                                    <input type="hidden" name="lang" id="lang"  value="<?php echo e(trans('frontend.boxCode')); ?>"  />
                                <textarea name="message" id="message" cols="40" rows="3"  required placeholder="<?php echo e(trans('frontend.your_message')); ?>"></textarea>

                                    <div class="clearfix"></div>
                                    <button class="btn float-btn flat-btn color-bg" id="submit"><?php echo e(trans('frontend.send')); ?> <i
                                            class="fal fa-long-arrow-right"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    <!-- contact form  end-->
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>2.
                    </div>
                </div>
            </section>
            <!--section end-->
        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->
<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- footer  end -->
<!-- share-wrapper-->
<div class="share-wrapper">
    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> <?php echo e(trans('frontend.close')); ?></div>
    <div class="share-container fl-wrap  isShare"></div>
</div>
<!-- share-wrapper  end -->
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>