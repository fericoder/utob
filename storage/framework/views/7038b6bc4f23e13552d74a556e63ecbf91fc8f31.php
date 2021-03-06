<?php $__env->startSection('content'); ?>

    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <section class="page-banner homepage-04">

                <div class="homepage-hero-module">
                    <div class="video-container">
                        <div class="filter">
                            <video autoplay="" loop="" controls="controls" muted="muted" class="fillWidth">
                                <source src="utob-content/uploads/2016/05/avc_vid.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="homepage-banner-warpper">
                    <div class="homepage-banner-content">
                        <div class="bg-image show-video"><img width="1920" height="1200"
                                                              src="utob-content/uploads/2016/05/home-banner-3.jpg"
                                                              class="img-responsive" alt="home-banner-3"
                                                              srcset="/utob-content/uploads/2016/05/home-banner-3.jpg 1920w, /utob-content/uploads/2016/05/home-banner-3-300x188.jpg 300w, /utob-content/uploads/2016/05/home-banner-3-768x480.jpg 768w, /utob-content/uploads/2016/05/home-banner-3-1024x640.jpg 1024w"
                                                              sizes="(max-width: 1920px) 100vw, 1920px"/></div>
                        <div class="group-logo"><img src="utob-content/uploads/2016/06/logo.png" alt="logo"
                                                     class="img-logo"></div>
                        <div class="group-title">
                            <h1 class="banner title">یوتاب مد، ارایه کننده خدمات پزشکی سلامت</h1>
                            <h4 class="sub-banner text">در ایران و امارات</h4>
                        </div>
                        <div class="group-btn">
                            <a href="/packages" data-hover="کلیک کنید" class="btn-click"><span
                                        class="text">مشاهده پکیج ها</span>
                                <i class="icons fa fa-long-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Content section -->
            <div class="section section-padding page-detail padding-top padding-bottom">
                <div class="container">
                    <div class="row">
                        <div id="page-content" class="col-md-12 col-xs-12">
                            <div id="post-45" class="post-45 page type-page status-publish hentry">
                                <div class="section-page-content clearfix ">
                                    <div class="entry-content">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1463096648310">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="slz-shortcode about-us-wrapper  team-single-10916117745e2fecfb37056">
                                                    <div class="group-title">
                                                        <div class="sub-title"><p class="text">درمان ها</p>
                                                            <i class="icons flaticon-people"></i>
                                                        </div>
                                                        <h2 class="main-title">درمان ها</h2>
                                                    </div>
                                                    <div class="row group-list contact-list">


                                                        <?php $__currentLoopData = $treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treatment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-sm-3 col-xs-3 col-contact">
                                                                <a href="<?php echo e(route('treatment', $treatment->id )); ?>">
                                                                    <div class="media contact-list-media">
                                                                        <div class="media-left">
                                                                            <span class="icons"><img src="<?php echo e($treatment->icon); ?>" alt="icon" class="utob-fa" style="height: 50px;"></span>
                                                                        </div>
                                                                        <?php echo e($treatment->name); ?>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                                                    </div>


                                                </div>
                                                <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper"><a href="/treatments" class="slz-shortcode btn btn-maincolor btn-maincolor-4943618765e1ec8d423916 ">جهت
                                                                    مشاهده تمامی درمان ها کلیک کنید</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1463096648310">
                                            <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1468574547376">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode block-title-16339022535e1ec8d10ad08 ">

                                                            <div class="group-title">
                                                                <div class="sub-title"><p class="text">پکیج ها</p>
                                                                    <i class="icons flaticon-people"></i>
                                                                </div>
                                                                <h2 class="main-title">پکیج ها</h2>
                                                            </div>
                                                            </div>


                                                        <?php echo $__env->make('layouts.partials.packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             class="vc_row wpb_row vc_row-fluid slz-bg_parallax vc_custom_1463027505022 vc_row-has-fill">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode block-title-20999045555e1ec8d11193a ">

                                                            <div class="group-title">
                                                                <div class="sub-title"><p class="text">برترین مراکز
                                                                        درمان</p><i class="icons flaticon-people"></i>
                                                                </div>
                                                                <h2 class="main-title">بیمارستان ها</h2>
                                                            </div>
                                                        </div>
                                                        <div class="slz-shortcode tours-wrapper block-10534581085e1ec8d111dc9">
                                                            <div class="tours-content">
                                                                <div class="tours-list tours-carousel" data-count="3">
                                                                    <div class="tours-layout post-588 slzexploore_tour">
                                                                        <div class="image-wrapper">
                                                                            <a class="link" href="/hospitals/1"><img width="400"
                                                                                                         height="270"
                                                                                                         src="utob-content/uploads/2016/05/parsian.jpg"
                                                                                                         class="img-responsive"
                                                                                                         alt="coast-863378_960_7201"
                                                                                                         sizes="(max-width: 400px) 100vw, 400px"/></a>
                                                                            <div class="title-wrapper"><a href="/hospitals/1"
                                                                                                          class="title">بیمارستان
                                                                                    فوق تخصصی پارسیان</a><i
                                                                                        class="icons flaticon-circle"></i>
                                                                            </div>

                                                                            <div class="ribbon-sale"><i
                                                                                        class="fa fa-bolt"></i><span>بهترین</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="content-wrapper">
                                                                            <ul class="list-info list-inline list-unstyle">
                                                                                <li class="view"><a href=""
                                                                                                    class="link"><i
                                                                                                class="icons fa fa-eye"></i><span
                                                                                                class="text number utob-byekan">11375</span></a>
                                                                                </li>
                                                                                <li class="wishlist"><a href=""
                                                                                                        class="link  list-wist"
                                                                                                        data-item="588"><i
                                                                                                class="icons fa fa-heart"></i><span
                                                                                                class="text number utob-byekan">0</span></a>
                                                                                </li>
                                                                                <li class="share"><a
                                                                                            href="javascript:void(0);"
                                                                                            class="link"><i
                                                                                                class="icons fa fa-share-alt"></i></a>
                                                                                    <ul class="share-social-list">
                                                                                        <li>
                                                                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Ftours%2Fmadrid-tour%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?text=Madrid+Tour&amp;url=http%3A%2F%2F%2Fexploore%2Ftours%2Fmadrid-tour%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Ftours%2Fmadrid-tour%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="comment"><a href=""
                                                                                                       class="link"><i
                                                                                                class="icons fa fa-comment"></i><span
                                                                                                class="text number utob-byekan">5/1</span></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="content">
                                                                                <div class="title">
                                                                                    <div class="price">
                                                                                        <sup>شهر </sup><span
                                                                                                class="number">تهران</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text">بیمارستان ۱۲۰ تختخوابی
                                                                              جم یکی از مجهز ترین بیمارستان ها
                                                                                    کشورمی باشد. این بیمارستان از سال ۴۷
                                                                                    شمسی تاسیس شده و تا به امروز بیش از
                                                                                    یک میلیون بیمار با استفاده از
                                                                                    امکانات این بیمارستان بهبودی حاصل
                                                                                    کردند. بیمارستان جم شامل بخش های
                                                                                    جراحی، داخلی و ...
                                                                                </div>
                                                                                <div class="group-btn-tours"><a href="/hospitals/1"
                                                                                                                class="left-btn">بیشتر
                                                                                        بخوانید</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tours-layout post-155 slzexploore_tour">
                                                                        <div class="image-wrapper">
                                                                            <a class="link" href="/hospitals/1"><img width="400"
                                                                                                         height="270"
                                                                                                         src="utob-content/uploads/2016/05/kosar.jpg"
                                                                                                         class="img-responsive"
                                                                                                         alt="bg-section-banner-1"
                                                                                                         sizes="(max-width: 400px) 100vw, 400px"/></a>
                                                                            <div class="title-wrapper"><a href="/hospitals/1"
                                                                                                          class="title">
                                                                                    بیمارستان فوق تخصصی کوثر</a><i
                                                                                        class="icons flaticon-circle"></i>
                                                                            </div>


                                                                        </div>
                                                                        <div class="content-wrapper">
                                                                            <ul class="list-info list-inline list-unstyle">
                                                                                <li class="view"><a href=""
                                                                                                    class="link"><i
                                                                                                class="icons fa fa-eye"></i><span
                                                                                                class="text number utob-byekan">8633</span></a>
                                                                                </li>
                                                                                <li class="wishlist"><a href=""
                                                                                                        class="link  list-wist"
                                                                                                        data-item="155"><i
                                                                                                class="icons fa fa-heart"></i><span
                                                                                                class="text number utob-byekan">1</span></a>
                                                                                </li>
                                                                                <li class="share"><a
                                                                                            href="javascript:void(0);"
                                                                                            class="link"><i
                                                                                                class="icons fa fa-share-alt"></i></a>
                                                                                    <ul class="share-social-list">
                                                                                        <li>
                                                                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Ftours%2Fstockholm-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?text=Stockholm+City&amp;url=http%3A%2F%2F%2Fexploore%2Ftours%2Fstockholm-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Ftours%2Fstockholm-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="comment"><a href=""
                                                                                                       class="link"><i
                                                                                                class="icons fa fa-comment"></i><span
                                                                                                class="text number utob-byekan">3/1</span></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="content">
                                                                                <div class="title">
                                                                                    <div class="price">
                                                                                        <sup>شهر </sup><span
                                                                                                class="number">تهران</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text">بیمارستان فوق تخصصی
                                                                                    ۱۰۰۰ تختخوابی میلاد یکی از بهترین و
                                                                                    مجهز ترین بیمارستان های ایران می
                                                                                    باشد. این بیمارستان شامل بخش های
                                                                                    جراحی قلب، آنژیوگرافی کرونر، عروق
                                                                                    مغزی و پریفرال، سی تی اسکن، طب هسته
                                                                                    ای، پلاسما فرزیس و….
                                                                                </div>
                                                                                <div class="group-btn-tours"><a href="/hospitals/1"
                                                                                                                class="left-btn">بیشتر
                                                                                        بخوانید</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tours-layout post-152 slzexploore_tour">
                                                                        <div class="image-wrapper">
                                                                            <a class="link" href="/hospitals/1"><img width="400"
                                                                                                         height="270"
                                                                                                         src="utob-content/uploads/2016/05/erfan.jpg"
                                                                                                         class="img-responsive"
                                                                                                         alt="City-of-Rome-Great-View"
                                                                                                         sizes="(max-width: 400px) 100vw, 400px"/></a>
                                                                            <div class="title-wrapper"><a href="/hospitals/1"
                                                                                                          class="title">
                                                                                    بیمارستان فوق تخصصی عرفان</a><i
                                                                                        class="icons flaticon-circle"></i>
                                                                            </div>


                                                                        </div>
                                                                        <div class="content-wrapper">
                                                                            <ul class="list-info list-inline list-unstyle">
                                                                                <li class="view"><a href=""
                                                                                                    class="link"><i
                                                                                                class="icons fa fa-eye"></i><span
                                                                                                class="text number utob-byekan">5383</span></a>
                                                                                </li>
                                                                                <li class="wishlist"><a href=""
                                                                                                        class="link  list-wist"
                                                                                                        data-item="152"><i
                                                                                                class="icons fa fa-heart"></i><span
                                                                                                class="text number utob-byekan">1</span></a>
                                                                                </li>
                                                                                <li class="share"><a
                                                                                            href="javascript:void(0);"
                                                                                            class="link"><i
                                                                                                class="icons fa fa-share-alt"></i></a>
                                                                                    <ul class="share-social-list">
                                                                                        <li>
                                                                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Ftours%2Froma-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?text=Roma+City&amp;url=http%3A%2F%2F%2Fexploore%2Ftours%2Froma-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Ftours%2Froma-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="comment"><a href=""
                                                                                                       class="link"><i
                                                                                                class="icons fa fa-comment"></i><span
                                                                                                class="text number utob-byekan">2/1</span></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="content">
                                                                                <div class="title">
                                                                                    <div class="price">
                                                                                        <sup>شهر </sup><span
                                                                                                class="number">تهران</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text">بیمارستان خصوصی دی از
                                                                                    سال ۱۳۷۰ آغاز به کار کرده و در ۱۰
                                                                                    طبقه و ۲۰۰ تختخواب به بیماران خدمت
                                                                                    می کند. اکثر مراجعین بیمارستان دی
                                                                                    خانم های باردار هستند و برای زایمان
                                                                                    به این بیمارستان مراجعه می کنند و می
                                                                                    توان گفت بیمارستان دی یکی از بهترین
                                                                                    و ...
                                                                                </div>
                                                                                <div class="group-btn-tours"><a href="/hospitals/1"
                                                                                                                class="left-btn">بیشتر
                                                                                        بخوانید</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tours-layout post-148 slzexploore_tour">
                                                                        <div class="image-wrapper">
                                                                            <a class="link" href="/hospitals/1"><img width="400"
                                                                                                         height="270"
                                                                                                         src="utob-content/uploads/2016/05/bahhman.jpg"
                                                                                                         class="img-responsive"
                                                                                                         alt="shanghaicity"
                                                                                                         sizes="(max-width: 400px) 100vw, 400px"/></a>
                                                                            <div class="title-wrapper"><a href="/hospitals/1"
                                                                                                          class="title">بیمارستان
                                                                                    فوق تخصصی بهمن</a><i
                                                                                        class="icons flaticon-circle"></i>
                                                                            </div>


                                                                        </div>
                                                                        <div class="content-wrapper">
                                                                            <ul class="list-info list-inline list-unstyle">
                                                                                <li class="view"><a href=""
                                                                                                    class="link"><i
                                                                                                class="icons fa fa-eye"></i><span
                                                                                                class="text number utob-byekan">2755</span></a>
                                                                                </li>
                                                                                <li class="wishlist"><a href=""
                                                                                                        class="link  list-wist"
                                                                                                        data-item="148"><i
                                                                                                class="icons fa fa-heart"></i><span
                                                                                                class="text number utob-byekan">0</span></a>
                                                                                </li>
                                                                                <li class="share"><a
                                                                                            href="javascript:void(0);"
                                                                                            class="link"><i
                                                                                                class="icons fa fa-share-alt"></i></a>
                                                                                    <ul class="share-social-list">
                                                                                        <li>
                                                                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Ftours%2Fshanghai-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?text=Shanghai+City&amp;url=http%3A%2F%2F%2Fexploore%2Ftours%2Fshanghai-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Ftours%2Fshanghai-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="comment"><a href=" class="
                                                                                                       link"><i
                                                                                            class="icons fa fa-comment"></i><span
                                                                                            class="text number utob-byekan">4/1</span></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="content">
                                                                                <div class="title">
                                                                                    <div class="price">
                                                                                        <sup>شهر </sup><span
                                                                                                class="number">تهران</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text">بیمارستان فجر که
                                                                                    بیمارستان ارتش جمهوری اسلامی ایران
                                                                                    می باشد یک نمونه بهترین بیمارستان
                                                                                    تهران است که در ۶ طبقه و با ۲۸
                                                                                    درمانگاه فوق تخصصی روزانه حدود ۳۰۰۰
                                                                                    بیمار و مراجعه کننده دارد. این
                                                                                    بیمارستان ۱۱۶ تخت فعال دارد و ...
                                                                                </div>
                                                                                <div class="group-btn-tours"><a href="/hospitals/1"
                                                                                                                class="left-btn">بیشتر
                                                                                        بخوانید</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tours-layout post-146 slzexploore_tour">
                                                                        <div class="image-wrapper">
                                                                            <a class="link" href="/hospitals/1"><img width="400"
                                                                                                         height="270"
                                                                                                         src="utob-content/uploads/2016/05/laleh.jpg"
                                                                                                         class="img-responsive"
                                                                                                         alt="du-lich-tokyo"
                                                                                                         sizes="(max-width: 400px) 100vw, 400px"/></a>
                                                                            <div class="title-wrapper"><a href="/hospitals/1"
                                                                                                          class="title">
                                                                                    بیمارستان فوق تخصصی لاله</a><i
                                                                                        class="icons flaticon-circle"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="content-wrapper">
                                                                            <ul class="list-info list-inline list-unstyle">
                                                                                <li class="view"><a href=""
                                                                                                    class="link"><i
                                                                                                class="icons fa fa-eye"></i><span
                                                                                                class="text number utob-byekan">2279</span></a>
                                                                                </li>
                                                                                <li class="wishlist"><a href=""
                                                                                                        class="link  list-wist"
                                                                                                        data-item="146"><i
                                                                                                class="icons fa fa-heart"></i><span
                                                                                                class="text number utob-byekan">0</span></a>
                                                                                </li>
                                                                                <li class="share"><a
                                                                                            href="javascript:void(0);"
                                                                                            class="link"><i
                                                                                                class="icons fa fa-share-alt"></i></a>
                                                                                    <ul class="share-social-list">
                                                                                        <li>
                                                                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Ftours%2Ftokyo-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="https://twitter.com/intent/tweet?text=Tokyo+City&amp;url=http%3A%2F%2F%2Fexploore%2Ftours%2Ftokyo-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Ftours%2Ftokyo-city%2F"
                                                                                               class="link-social"
                                                                                               onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                <i class="icons fa fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="comment"><a href=""
                                                                                                       class="link"><i
                                                                                                class="icons fa fa-comment"></i><span
                                                                                                class="text number utob-byekan">5/1</span></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="content">
                                                                                <div class="title">
                                                                                    <div class="price">
                                                                                        <sup>شهر </sup><span
                                                                                                class="number">تهران</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text">بیمارستان فوق تخصصی
                                                                                    رازی تنها بیمارستان تخصصی بیماری های
                                                                                    پوستی در کشور است. این بیمارستان ۱۲۲
                                                                                    تختخواب فعال دارد و بیماران پوستی از
                                                                                    سراسر کشور به این بیمارستان مراجعه
                                                                                    می کنند. بیمارستان رازی شامل بخش های
                                                                                    درمانگاه پوست و ...
                                                                                </div>
                                                                                <div class="group-btn-tours"><a href="/hospitals/1"
                                                                                                                class="left-btn">بیشتر
                                                                                        بخوانید</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 70px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper"><a href="/Hospitals"
                                                                                                class="slz-shortcode btn btn-maincolor btn-maincolor-4943618765e1ec8d423916 ">جهت
                                                                            مشاهده تمامی بیمارستان ها کلیک کنید</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             data-vc-stretch-content="true"
                                             class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode videos layout-1 banner-20897404385e1ec8d424fb1 ">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="video-wrapper padding-top padding-bottom">
                                                                            <div class="video-wrapper-title"><h5
                                                                                        class="sub-title"> چرا <strong>
                                                                                        ایران </strong> و یوتاب مد؟</h5>
                                                                                <h2 class="title">مزایا درمان در
                                                                                    ایران</h2>
                                                                                <div class="text">ایران در جهان به خدمات پزشکی با کیفیت مخصوصا جراحیهای زیبایی شناخته شده است. به عنوان مثال در سال 2017 خدمات تورسیم پزشکی درآمدی بالغ بر 1.7 میلیارد دلار درآمد داشته است که این عدد در سال 2020 رشدی تا 4 برابر خواهد داشت. ایران کشور مقصد توریست هایی است که برای درمان هایی همچون جراحی بینی، عمل های لاغری، کاشت مو، جراحی سینه، اسلیو معده ، چشم پزشکی و دندانپزشکی است. شاید مهمترین علت تمایل افراد به استفاده از خدمات پزشکی ایران را هزینه بسیار پایین تر آن با حفظ کیفیت مشابه با برترین کشور های دنیا دانست. به عنوان مثال پکیج کامل عمل بینی در ایران 90% ارزانتر از ایلات متحده است.

                                                                                </div>
                                                                            </div>
                                                                            <a href="/about" class="btn btn-maincolor">بیشتر
                                                                                بخوانید</a></div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="video-thumbnail">
                                                                            <video width="" height="" controls>
                                                                                <source src="/utob-content/uploads/2016/05/why-iran.mp4" type="video/mp4">
                                                                            </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             class="vc_row wpb_row vc_row-fluid slz-bg_parallax vc_custom_1463028221790 vc_row-has-fill">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode block-title-5219010795e1ec8d427f08 ">
                                                            <div class="group-title">
                                                                <div class="sub-title"><p class="text">رفاه شما را تضمین
                                                                        می کنیم</p><i class="icons flaticon-people"></i>
                                                                </div>
                                                                <h2 class="main-title">هتل ها</h2>
                                                            </div>
                                                        </div>
                                                        <div class="hotels-content hotel-result-main result-body slz-shortcode ">
                                                            <div class="loading">
                                                                <div class='spinner sk-spinner-wave'>
                                                                    <div class='rect1'></div>
                                                                    <div class='rect2'></div>
                                                                    <div class='rect3'></div>
                                                                    <div class='rect4'></div>
                                                                    <div class='rect5'></div>
                                                                </div>
                                                            </div>
                                                            <div class="main-right f-none hotel-result-content sc-block-7758929165e1ec8d428400">
                                                                <div class="hotel-list">
                                                                    <div class="row">
                                                                        <div class="col-md-6 post-186 slzexploore_hotel">
                                                                            <div class="hotels-layout">
                                                                                <div class="image-wrapper">
                                                                                    <a class="link" href="/hotels/1"><img
                                                                                                width="800" height="540"
                                                                                                src="utob-content/uploads/2016/05/plus.jpeg"
                                                                                                class="img-responsive"
                                                                                                alt="hotelbeauti"
                                                                                                sizes="(max-width: 800px) 100vw, 800px"/></a>
                                                                                    <div class="label-sale"><p
                                                                                                class="text">تخفیف</p>
                                                                                        <p class="number utob-byekan">
                                                                                            35%</p></div>
                                                                                    <div class="ribbon-sale"><i
                                                                                                class="fa fa-bolt"></i><span>جدید</span>
                                                                                    </div>
                                                                                    <div class="title-wrapper">
                                                                                        <a href="" class="title">هتل
                                                                                            اسپیناس پالاس</a>
                                                                                        <div class="stars stars5">5
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="content-wrapper ">
                                                                                    <div class="content">
                                                                                        <div class="title">
                                                                                            <div class="price"><sup>تومان</sup><span
                                                                                                        class="number utob-byekan">300,000</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text"> توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                        </div>
                                                                                        <div class="group-btn-tours"><a
                                                                                                    href="/hotels/1"
                                                                                                    class="left-btn">بیشتر
                                                                                                بخوانید</a></div>
                                                                                    </div>
                                                                                    <ul class="list-info list-unstyle">
                                                                                        <li class="view"><a href=""
                                                                                                            class="link"><i
                                                                                                        class="icons hidden-icon fa fa-eye"></i><span
                                                                                                        class="number utob-byekan">8792</span></a>
                                                                                        </li>
                                                                                        <li class="wishlist"><a href=""
                                                                                                                class="link "
                                                                                                                data-item="186"><i
                                                                                                        class="icons hidden-icon fa fa-heart"></i><span
                                                                                                        class="text number utob-byekan">5</span></a>
                                                                                        </li>
                                                                                        <li class="comment"><a href=""
                                                                                                               class="link"><i
                                                                                                        class="icons hidden-icon fa fa-comment"></i><span
                                                                                                        class="number utob-byekan">3/1</span></a>
                                                                                        </li>
                                                                                        <li class="share"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"><i
                                                                                                        class="icons fa fa-share-alt"></i></a>
                                                                                            <ul class="share-social-list">
                                                                                                <li>
                                                                                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fedemil-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-facebook"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="https://twitter.com/intent/tweet?text=Edemil+Hotel&amp;url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fedemil-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-twitter"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fedemil-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-google-plus"></i></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="address"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"
                                                                                                    title=" 111 Bang Rak, Bangkok, Thailand"><i
                                                                                                        class="icons fa fa-map-marker"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 post-185 slzexploore_hotel">
                                                                            <div class="hotels-layout">
                                                                                <div class="image-wrapper">
                                                                                    <a class="link" href="/hotels/1"><img
                                                                                                width="800" height="540"
                                                                                                src="utob-content/uploads/2016/05/es.jpg"
                                                                                                class="img-responsive"
                                                                                                alt="316_langham_modern_Exterior"
                                                                                                sizes="(max-width: 800px) 100vw, 800px"/></a>
                                                                                    <div class="title-wrapper">
                                                                                        <a href="/hotels/1" class="title">هتل
                                                                                            استقلال</a>
                                                                                        <div class="stars stars5">5
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="content-wrapper ">
                                                                                    <div class="content">
                                                                                        <div class="title">
                                                                                            <div class="price"><sup>تومان</sup><span
                                                                                                        class="number utob-byekan">300,000</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text"> توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                        </div>
                                                                                        <div class="group-btn-tours"><a
                                                                                                    href=""
                                                                                                    class="left-btn">بیشتر
                                                                                                بخوانید</a></div>
                                                                                    </div>
                                                                                    <ul class="list-info list-unstyle">
                                                                                        <li class="view"><a href=""
                                                                                                            class="link"><i
                                                                                                        class="icons hidden-icon fa fa-eye"></i><span
                                                                                                        class="number utob-byekan">4158</span></a>
                                                                                        </li>
                                                                                        <li class="wishlist"><a href=""
                                                                                                                class="link "
                                                                                                                data-item="185"><i
                                                                                                        class="icons hidden-icon fa fa-heart"></i><span
                                                                                                        class="text number utob-byekan">3</span></a>
                                                                                        </li>
                                                                                        <li class="comment"><a href=""
                                                                                                               class="link"><i
                                                                                                        class="icons hidden-icon fa fa-comment"></i><span
                                                                                                        class="number utob-byekan">4/0</span></a>
                                                                                        </li>
                                                                                        <li class="share"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"><i
                                                                                                        class="icons fa fa-share-alt"></i></a>
                                                                                            <ul class="share-social-list">
                                                                                                <li>
                                                                                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fturhal-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-facebook"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="https://twitter.com/intent/tweet?text=Turhal+Hotel&amp;url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fturhal-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-twitter"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fturhal-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-google-plus"></i></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="address"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"
                                                                                                    title=" 333 Soi Song Prapha, Don Mueang, Bangkok, Thailand"><i
                                                                                                        class="icons fa fa-map-marker"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 post-184 slzexploore_hotel">
                                                                            <div class="hotels-layout">
                                                                                <div class="image-wrapper">
                                                                                    <a class="link" href="/hotels/1"><img
                                                                                                width="800" height="540"
                                                                                                src="utob-content/uploads/2016/05/eskan.jpg"
                                                                                                class="img-responsive"
                                                                                                alt="280821"
                                                                                                sizes="(max-width: 800px) 100vw, 800px"/></a>
                                                                                    <div class="title-wrapper">
                                                                                        <a href="" class="title">هتل
                                                                                            اسکان الوند</a>
                                                                                        <div class="stars stars4">4
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="content-wrapper ">
                                                                                    <div class="content">
                                                                                        <div class="title">
                                                                                            <div class="price"><sup>تومان</sup><span
                                                                                                        class="number utob-byekan">200,000</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text"> توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                        </div>
                                                                                        <div class="group-btn-tours"><a
                                                                                                    href="/hotels/1"
                                                                                                    class="left-btn">بیشتر
                                                                                                بخوانید</a></div>
                                                                                    </div>
                                                                                    <ul class="list-info list-unstyle">
                                                                                        <li class="view"><a href=""
                                                                                                            class="link"><i
                                                                                                        class="icons hidden-icon fa fa-eye"></i><span
                                                                                                        class="number utob-byekan">7052</span></a>
                                                                                        </li>
                                                                                        <li class="wishlist"><a href=""
                                                                                                                class="link "
                                                                                                                data-item="184"><i
                                                                                                        class="icons hidden-icon fa fa-heart"></i><span
                                                                                                        class="text number utob-byekan">4</span></a>
                                                                                        </li>
                                                                                        <li class="comment"><a href=""
                                                                                                               class="link"><i
                                                                                                        class="icons hidden-icon fa fa-comment"></i><span
                                                                                                        class="number utob-byekan">5/1</span></a>
                                                                                        </li>
                                                                                        <li class="share"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"><i
                                                                                                        class="icons fa fa-share-alt"></i></a>
                                                                                            <ul class="share-social-list">
                                                                                                <li>
                                                                                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fkadirly-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-facebook"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="https://twitter.com/intent/tweet?text=Kadirly+Hotel&amp;url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fkadirly-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-twitter"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fkadirly-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-google-plus"></i></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="address"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"
                                                                                                    title="111 Pirachai Village, Bangkok, Thailand"><i
                                                                                                        class="icons fa fa-map-marker"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 post-172 slzexploore_hotel">
                                                                            <div class="hotels-layout">
                                                                                <div class="image-wrapper">
                                                                                    <a class="link" href="/hotels/1"><img
                                                                                                width="800" height="540"
                                                                                                src="utob-content/uploads/2016/05/pars.jpg"
                                                                                                class="img-responsive"
                                                                                                alt="hanoi-top-luxury-hotel"
                                                                                                sizes="(max-width: 800px) 100vw, 800px"/></a>
                                                                                    <div class="title-wrapper">
                                                                                        <a href="/hotels/1" class="title">هتل
                                                                                            پارسیان</a>
                                                                                        <div class="stars stars4">4
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="content-wrapper ">
                                                                                    <div class="content">
                                                                                        <div class="title">
                                                                                            <div class="price"><sup>تومان</sup><span
                                                                                                        class="number utob-byekan">200,000</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text"> توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                            توضیحات توضیحات توضیحات
                                                                                        </div>
                                                                                        <div class="group-btn-tours"><a
                                                                                                    href="/hotels/1"
                                                                                                    class="left-btn">بیشتر
                                                                                                بخوانید</a></div>
                                                                                    </div>
                                                                                    <ul class="list-info list-unstyle">
                                                                                        <li class="view"><a href=""
                                                                                                            class="link"><i
                                                                                                        class="icons hidden-icon fa fa-eye"></i><span
                                                                                                        class="number utob-byekan">5068</span></a>
                                                                                        </li>
                                                                                        <li class="wishlist"><a href=""
                                                                                                                class="link "
                                                                                                                data-item="172"><i
                                                                                                        class="icons hidden-icon fa fa-heart"></i><span
                                                                                                        class="text number utob-byekan">1</span></a>
                                                                                        </li>
                                                                                        <li class="comment"><a href=""
                                                                                                               class="link"><i
                                                                                                        class="icons hidden-icon fa fa-comment"></i><span
                                                                                                        class="number utob-byekan">2.5/2</span></a>
                                                                                        </li>
                                                                                        <li class="share"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"><i
                                                                                                        class="icons fa fa-share-alt"></i></a>
                                                                                            <ul class="share-social-list">
                                                                                                <li>
                                                                                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fsarina-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-facebook"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="https://twitter.com/intent/tweet?text=Sarina+Hotel&amp;url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fsarina-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-twitter"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="http://plus.google.com/share?url=http%3A%2F%2F%2Fexploore%2Faccommodations%2Fsarina-hotel%2F"
                                                                                                       class="link-social"
                                                                                                       onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                        <i class="icons fa fa-google-plus"></i></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="address"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="link"
                                                                                                    title="222 Bang Kabi, Bangkok, Thailand"><i
                                                                                                        class="icons fa fa-map-marker"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="text-center wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="vc_empty_space"
                                                                             style="height: 40px"><span
                                                                                    class="vc_empty_space_inner"></span>
                                                                        </div>
                                                                        <a href=""
                                                                           class="slz-shortcode btn btn-maincolor btn-maincolor-13949671765e1ec8d4446d9 ">جهت
                                                                            مشاهده تمامی هتل ها کلیک کنید</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             data-vc-stretch-content="true"
                                             class="vc_row wpb_row vc_row-fluid vc_custom_1463017194672 vc_row-has-fill vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode travelers travel-id-6932734695e1ec8d4458ba ">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="traveler-wrapper padding-top padding-bottom">
                                                                            <div class="group-title white">
                                                                                <div class="sub-title">
                                                                                    <p class="text">سفری ارزشمند</p><i
                                                                                            class="icons flaticon-people"></i>
                                                                                </div>
                                                                                <h2 class="main-title">تجربه
                                                                                    مشتریان</h2></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="traveler-list">
                                                                            <div class="traveler">
                                                                                <div class="cover-image"><img
                                                                                            width="400" height="200"
                                                                                            src="utob-content/uploads/2016/05/america.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="cover-image-4"
                                                                                            sizes="(max-width: 400px) 100vw, 400px"/>
                                                                                </div>
                                                                                <div class="wrapper-content">
                                                                                    <div class="avatar">
                                                                                        <img width="200" height="200"
                                                                                             src="utob-content/uploads/2016/05/avatar-4-200x200.jpg"
                                                                                             class="img-responsive"
                                                                                             alt="avatar-4"
                                                                                             srcset="/utob-content/uploads/2016/05/avatar-4.jpg 200w, /utob-content/uploads/2016/05/avatar-4-150x150.jpg 150w, /utob-content/uploads/2016/05/avatar-4-100x100.jpg 100w"
                                                                                             sizes="(max-width: 200px) 100vw, 200px"/>
                                                                                    </div>
                                                                                    <p class="name">جان اسمیت</p>
                                                                                    <p class="address">نیویورک ، ایالات
                                                                                        متحده</p>
                                                                                    <div class="description">"<p>پزشکان ایرانی در دنیا بهترین هستند. من از نتیجه عملم بسیار راضی ام و عالی شده به نظرم</p>
                                                                                        "
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="traveler">
                                                                                <div class="cover-image"><img
                                                                                            width="400" height="200"
                                                                                            src="utob-content/uploads/2016/05/azar.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="cover-image-3"
                                                                                            sizes="(max-width: 400px) 100vw, 400px"/>
                                                                                </div>
                                                                                <div class="wrapper-content">
                                                                                    <div class="avatar">
                                                                                        <img width="200" height="200"
                                                                                             src="utob-content/uploads/2016/05/azarr.jpg"
                                                                                             class="img-responsive"
                                                                                             alt="avatar-3"

                                                                                             sizes="(max-width: 200px) 100vw, 200px"/>
                                                                                    </div>
                                                                                    <p class="name">جاسم خانی</p>
                                                                                    <p class="address">آذربایجان</p>
                                                                                    <div class="description">
                                                                                        <p> من به علت بیماری قند بیناییم به شدت کاهش یافته بود و هیچ کدوم از دکترهای کشورم حاضر به عمل پر ریسک من نمیشدند</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="traveler">
                                                                                <div class="cover-image"><img
                                                                                            width="400" height="200"
                                                                                            src="utob-content/uploads/2016/05/eng.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="cover-image-2"
                                                                                            sizes="(max-width: 400px) 100vw, 400px"/>
                                                                                </div>
                                                                                <div class="wrapper-content">
                                                                                    <div class="avatar">
                                                                                        <img width="200" height="200"
                                                                                             src="utob-content/uploads/2016/05/avatar-2-200x200.jpg"
                                                                                             class="img-responsive"
                                                                                             alt="avatar-2"
                                                                                             srcset="/utob-content/uploads/2016/05/avatar-2.jpg 200w, /utob-content/uploads/2016/05/avatar-2-150x150.jpg 150w, /utob-content/uploads/2016/05/avatar-2-100x100.jpg 100w"
                                                                                             sizes="(max-width: 200px) 100vw, 200px"/>
                                                                                    </div>
                                                                                    <p class="name">جک استیم</p>
                                                                                    <p class="address">
                                                                                    انگلستان</p>
                                                                                    <div class="description"><p>من برای کاشت مو به ایران سفر کردم
                                                                                        <p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="traveler">
                                                                                <div class="cover-image"><img
                                                                                            width="400" height="200"
                                                                                            src="utob-content/uploads/2016/05/afqanestan.png"
                                                                                            class="img-responsive"
                                                                                            alt="cover-image-1"
                                                                                            sizes="(max-width: 400px) 100vw, 400px"/>
                                                                                </div>
                                                                                <div class="wrapper-content">
                                                                                    <div class="avatar">
                                                                                        <img width="200" height="200"
                                                                                             src="utob-content/uploads/2016/05/afqan.jpg"
                                                                                             class="img-responsive"
                                                                                             alt="avatar-1"

                                                                                             sizes="(max-width: 200px) 100vw, 200px"/>
                                                                                    </div>
                                                                                    <p class="name">مقبوله</p>
                                                                                    <p class="address">کابل، افغانستان</p>
                                                                                    <div class="description">"<p>اگر باز
                                                                                            هم برای درمان قصد سفر داشته
                                                                                            باشم به ایران میایم...
                                                                                        <p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1462950433649">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode news  recent_news-15112070285e1ec8d45dd5d">
                                                            <div class="news-wrapper">

                                                                <div class="group-title">
                                                                    <div class="sub-title"><p class="text">از جدیدترین
                                                                            اخبار یوتاب مد باخبر شوید</p><i
                                                                                class="icons flaticon-people"></i></div>
                                                                    <h2 class="main-title">مقالات</h2>
                                                                </div>
                                                                <div class="news-content margin-top70">
                                                                    <div class="news-list" data-autospeed=6000
                                                                         data-speed=700>

                                                                        <div class="new-layout post-249 post type-post status-publish format-video has-post-thumbnail hentry category-adventure category-discover category-explore tag-adventure tag-explore tag-traveler post_format-post-format-video">
                                                                            <div class="image-wrapper"><a href=""
                                                                                                          class="link"><img
                                                                                            style="max-width: 300px;margin: auto;"
                                                                                            src="utob-content/uploads/2016/05/taqzie.jpeg"
                                                                                            class="img-responsive"
                                                                                            alt="249"/></a></div>
                                                                            <div class="content-wrapper">
                                                                                <a href="<?php echo e(route('blog', 1)); ?>"
                                                                                   class="title heading utob-byekan">قبل از جراحی زیبایی بینی 
 چه رژیم غذایی را رعایت کنیم؟</a>

                                                                                <ul class="info list-inline list-unstyled">
                                                                                    <li><a href=""
                                                                                           class="link utob-byekan">28
                                                                                            دی ماه 1398</a></li>
                                                                                    <li><a href="" class="link"><span>اضافه شده توسط شیرازی</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="text"><p>
تغذیه مناسب باعث  سرعت در بهبودی و کاهش خطر ابتلا به عفونت می شود. بنابراین در هفته های آخر نزدیک به عمل  جراحی،  رعایت رژیم غذایی سالم برای بیماران مهم است.  به طورکلی مصرف سبزیجات و میوه ها ، دانه های غلات حاوی پروتئین و همینطور مکمل های تغذیه بسیار مفید می باشد . مصرف مکمل های خاصی از...
</p>

                                                                                    </div>
                                                                                <a href="<?php echo e(route('blog', 1)); ?>" class="btn btn-maincolor">بیشتر
                                                                                    بخوانید</a>


                                                                            </div>
                                                                        </div>

                                                                        <div class="new-layout post-220 post type-post status-publish format-image has-post-thumbnail hentry category-discover category-the-world category-travel tag-adventure tag-europe tag-explore post_format-post-format-image">
                                                                            <div class="image-wrapper"><a href=""
                                                                                                          class="link"><img
                                                                                            style="max-width: 300px;margin: auto;"                                                                                            src="utob-content/uploads/2016/05/cheshm.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="about-us-1"/></a></div>
                                                                            <div class="content-wrapper">
                                                                                <a href="<?php echo e(route('blog', 1)); ?>" class="title heading">عمل لیزیک و قرنیه ی نازک چشم
</a>

                                                                                <ul class="info list-inline list-unstyled">
                                                                                    <li><a href=""
                                                                                           class="link utob-byekan">29
                                                                                            دی ماه 1398</a></li>
                                                                                    <li><a href="" class="link"><span>اضافه شده توسط شیرازی</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="text"><p>در عمل لیزیک چشم ، بینایی با تغییر شکلِ قرنیه (سطح جلویی چشم) ، با یک لیزر فوق العاده دقیق بهبود میبخشد . در طی این فرآیند ، برخی از بافت های قرنیه حذف می گردند و به ....
 </p>

                                                   </div>
                                                                                <a href="<?php echo e(route('blog', 1)); ?>" class="btn btn-maincolor">بیشتر
                                                                                    بخوانید</a>


                                                                            </div>
                                                                        </div>

                                                                        <div class="new-layout post-208 post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-discover category-explore category-the-world category-travel tag-dream tag-europe tag-traveller">
                                                                            <div class="image-wrapper"><a href=""
                                                                                                          class="link"><img
                                                                                            style="max-width: 300px;margin: auto;"                                                                                            src="utob-content/uploads/2016/05/moo.jpg"
                                                                                            class="img-responsive"
                                                                                            alt="Luxury-Private-Jet"/></a>
                                                                            </div>
                                                                            <div class="content-wrapper">
                                                                                <a href="<?php echo e(route('blog', 1)); ?>"
                                                                                   class="title heading utob-byekan">روش های کاشت مو
</a>

                                                                                <ul class="info list-inline list-unstyled">
                                                                                    <li><a href=""
                                                                                           class="link utob-byekan">14دی
                                                                                            ماه 1398</a></li>
                                                                                    <li><a href="" class="link"><span>اضافه شده توسط رحمانی</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="text"><p> روش FIT :عمل برداشت در این روش از ناحیه بانک مو یعنی پشت سر و بالای گوش ها و به وسیله پانچ صورت خواهد گرفت و سپس به صورت مجدد به وسیله پانچ عمل پیوند صورت می گیرد. با توجه به نیاز هر فرد از هر 5-3 واحد فولیکولی که در بانک مو وجود دارد یکی خارج خواهد شد. این روش کاشت در برخی از بخش های خود شبیه روش FUT است که با ایجاد شکاف های ریز، گرافت ها کاشته خ ....
 </p>


                                                                                </div>
                                                                                <a href="<?php echo e(route('blog', 1)); ?>" class="btn btn-maincolor">بیشتر
                                                                                    بخوانید</a>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             data-vc-stretch-content="true"
                                             class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode banner-sale-1 ">
                                                            <div class="banner-left">
                                                                <div class="title-box">
                                                                    <h2 class="title-overlay title-1 padding-top">
                                                                        تخفیف</h2>
                                                                    <h2 class="title-overlay title-2">شگفت انگیز</h2>
                                                                    <h3 class="title-overlay title-3 padding-bottom">
                                                                        یوتاب مد </h3>
                                                                </div>
                                                            </div>

                                                            <div class="banner-right">
                                                                <div class="text-salebox">
                                                                    <div class="text-left">
                                                                        <div class="sale-box">
                                                                            <div class="sale-box-top">
                                                                                <h2 class="number utob-byekan">50</h2>
                                                                                <span class="sup-1">%</span>
                                                                                <span class="sup-2"></span>
                                                                            </div>
                                                                            <h2 class="text-sale">تخفیف</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right"><h5 class="title"></h5>
                                                                        <p class="text"> توضیحات درباره تخفیف توضیحات
                                                                            درباره تخفیف توضیحات درباره تخفیف توضیحات
                                                                            درباره تخفیف توضیحات درباره تخفیف توضیحات
                                                                            درباره تخفیف توضیحات درباره تخفیف توضیحات
                                                                            درباره تخفیف توضیحات درباره تخفیف توضیحات
                                                                            درباره تخفیف توضیحات درباره تخفیف </p>
                                                                        <div class="group-button"><a href="#"
                                                                                                     class="btn btn-maincolor btn-maincolor1-12960595115e1ec8d471431">اکنون ثبت کنید</a><a href="#"
                                                                                          class="btn btn-maincolor btn-maincolor2-12960595115e1ec8d471431" style="background-color:#ffffff!important; color:#3c3c3c;">بیشتر بخوانید</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             class="vc_row wpb_row vc_row-fluid vc_custom_1463037646466 vc_row-has-fill">
                                            <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-5">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode block-title-20933987305e1ec8d472f4d ">

                                                            <div class="group-title">
                                                                <div class="sub-title"><p class="text">یوتاب مد در جهان</p>
                                                                    <i class="icons flaticon-people"></i>
                                                                </div>
                                                                <h2 class="main-title">پتانسیل ایران در جذب مشتریان</h2>
                                                            </div>
                                                            <p>
                                                                مشتریان یوتاب مد از اقصی نقاط جهان جهت طی مراحل درمان به ایران سفر میکنند
                                                            </p></div>
                                                        <div class="vc_empty_space" style="height: 5px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <div class="slz-shortcode a-fact-list">
                                                            <div class="group-list ">
                                                                <ul class="list-unstyled">
                                                                    <li><p class="text utob-byekan">حدود 20 آمریکایی در
                                                                            سال ۲۰۱8</p></li>
                                                                    <li><p class="text utob-byekan">حدود 9 برزیلی در سال
                                                                            2017</p></li>
                                                                    <li><p class="text utob-byekan">حدود 23 تایلندی در
                                                                            سال های 2016 و 2017</p></li>
                                                                    <li><p class="text utob-byekan">حدود 10 مراجعه کننده
                                                                            از کشور ترکیه در سال 2017</p></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="vc_empty_space" style="height: 25px"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                        <a href="#"
                                                           class="slz-shortcode btn btn-maincolor btn-maincolor-7580382645e1ec8d473b61 ">بیشتر
                                                            بخوانید</a></div>
                                                </div>
                                            </div>

                                            <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-7">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode sc_gallery  gallery_1603767625e1ec8d474506"
                                                             data-id="gallery_1603767625e1ec8d474506">
                                                            <div class="a-fact-image-wrapper">
                                                                <div class="a-fact-image">
                                                                    <a href="#" class="icons icons-1"><i
                                                                                class="fa fa-users"></i></a>
                                                                    <img width="1171" height="443"
                                                                         src="utob-content/uploads/2016/05/warea-5.png"
                                                                         class="attachment-full size-full" alt="warea-5"
                                                                         sizes="(max-width: 1171px) 100vw, 1171px"/>
                                                                </div>

                                                                <div class="a-fact-image">
                                                                    <a href="#" class="icons icons-2"><i
                                                                                class="fa fa-users"></i></a>
                                                                    <img width="1171" height="443"
                                                                         src="utob-content/uploads/2016/05/warea-2.png"
                                                                         class="attachment-full size-full" alt="warea-2"
                                                                         sizes="(max-width: 1171px) 100vw, 1171px"/>
                                                                </div>

                                                                <div class="a-fact-image">
                                                                    <a href="#" class="icons icons-3"><i
                                                                                class="fa fa-users"></i></a>
                                                                    <img width="1171" height="443"
                                                                         src="utob-content/uploads/2016/05/warea-4.png"
                                                                         class="attachment-full size-full" alt="warea-4"
                                                                         sizes="(max-width: 1171px) 100vw, 1171px"/>
                                                                </div>

                                                                <div class="a-fact-image">
                                                                    <a href="#" class="icons icons-4"><i
                                                                                class="fa fa-users"></i></a>
                                                                    <img width="1171" height="443"
                                                                         src="utob-content/uploads/2016/05/warea-1.png"
                                                                         class="attachment-full size-full" alt="warea-1"
                                                                         sizes="(max-width: 1171px) 100vw, 1171px"/>
                                                                </div>

                                                                <div class="a-fact-image">
                                                                    <a href="#" class="icons icons-5"><i
                                                                                class="fa fa-users"></i></a>
                                                                    <img width="1171" height="443"
                                                                         src="utob-content/uploads/2016/05/warea-3.png"
                                                                         class="attachment-full size-full" alt="warea-3"
                                                                         sizes="(max-width: 1171px) 100vw, 1171px"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             data-vc-stretch-content="true"
                                             class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode contact-6023684715e1ec8d47cbee ">
                                                            <div class="contact style-1">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="wrapper-contact-style">
                                                                            <div data-wow-delay="0.5s"
                                                                                 class="contact-wrapper-images wow fadeInLeft">
                                                                                <img width="276" height="536"
                                                                                     src="utob-content/uploads/2016/05/contact-people.png"
                                                                                     class="img-responsive attachment-full"
                                                                                     alt="contact-people"
                                                                                     srcset="/utob-content/uploads/2016/05/contact-people.png 276w, /utob-content/uploads/2016/05/contact-people-154x300.png 154w"
                                                                                     sizes="(max-width: 276px) 100vw, 276px"/>
                                                                            </div>



                                                                            <div class="col-lg-6 col-sm-7 col-lg-offset-4 col-sm-offset-5">
                                                                                <div data-wow-delay="0.4s"
                                                                                     class="contact-wrapper padding-top padding-bottom wow fadeInRight">
                                                                                    <div class="contact-box">
                                                                                        <h5 class="title">باما در ارتباط
                                                                                            باشید</h5>
                                                                                        <p class="text">لحظاتی خوش در
                                                                                            کنار یوتاب مد</p>
                                                                                        <div role="form" class="wpcf7"
                                                                                             id="wpcf7-f46-p45-o1"
                                                                                             lang="en" dir="ltr">
                                                                                            <div class="screen-reader-response"></div>
                                                                                            <form action="<?php echo e(route('mail.footer')); ?>" method="post"
                                                                                                  class="wpcf7-form contact-form"
                                                                                                  novalidate="novalidate">
                                                                                                <?php echo csrf_field(); ?>
                                                                                                <p>
                                                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                                                <input type="text" name="fullName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-input" aria-required="true" aria-invalid="false" placeholder="نام و نام خانوادگی"/>
                                                                                            </span>
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control form-input" aria-required="true" aria-invalid="false" placeholder="آدرس ایمیل"/>
                                                                                            </span>

                                                                                                    <span class="wpcf7-form-control-wrap your-subject">
                                                                                                <textarea name="description" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control form-input" aria-required="true" aria-invalid="false" placeholder="پیام خود را وارد کنید"></textarea>
                                                                                            </span>
                                                                                                </p>
                                                                                                <div class="contact-submit">
                                                                                                    <input type="submit" value="ارسال پیام" class="wpcf7-form-control wpcf7-submit btn btn-slide"/>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #section -->
        </div>
        <!-- MAIN CONTENT-->
    </div>
    <!-- WRAPPER -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/app/index.blade.php ENDPATH**/ ?>