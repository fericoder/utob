<?php $__env->startSection('content'); ?>
    <!-- WRAPPER-->

    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(<?php echo e($experience->image); ?>);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li class="active"><a href="/experiences" class="link">تجربه مشتریان</a></li>
                                </ol>
                            <div class="clearfix"></div>
                            <h2 class="captions" style="margin-bottom:35px;">تجربه "<?php echo e($experience->fullName); ?>"</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section -->

            <div class="container">

                <div class="blog-author margin-bottom margin-top">
                    <div class="media blog-author-content">
                        <div class="media-left">
                            <a class="media-image" href="">
                                <img src="/utob-content/uploads/2016/05/Oman-Flag.jpg" width="100" height="100"
                                     alt="Exploorer"
                                     class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo"/> </a>
                        </div>
                        <div class="media-right">
                            <div class="author mb-3">
                                <a class="name mb-3" href=""><?php echo e($experience->fullName); ?> از کشور <?php echo e($experience->country); ?></a>
                            </div>
                            <div class="des">
                                <?php echo $experience->body; ?>

                            </div>
                        </div>
                    </div>

                </div>
                <?php if($experience->video): ?>

                    <div class="container">
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
                             class="vc_row wpb_row vc_row-fluid vc_row-no-padding"
                             style="position: relative; left: -206.5px; box-sizing: border-box; width: 1583px;">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="slz-shortcode videos layout-2 padding-top banner-10693445365e2bd8c5dff89"
                                             style="background-image: url(utob-content/uploads/2016/07/amal1.jpg);!important;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="video-wrapper"><h2 class="title">ویدیو <?php echo e($experience->fullName); ?> و نظراتش درباره اقامت در ایران
                                                            </h2>
                                                            <div class="text"> در این بخش فیلم کوتاهی از نظرات <?php echo e($experience->fullName); ?> در
                                                                درباره اقامت در ایران و درمان او توسط یوتاب مد می بینید.
                                                            </div>
                                                            <div class="video-thumbnail">
                                                                <video width="100%" height="" controls>
                                                                    <source src="<?php echo e($experience->video); ?>" type="video/mp4">
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
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>

                    </div>
                <?php endif; ?>





                <div class="container">
                    <div class="slz-shortcode special-offer margin-top70">
                        <h3 class="title-style-2">دیگر تجربه ها</h3>
                        <div class="special-offer-list">

                            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="special-offer-layout post-185 slzexploore_hotel">
                                    <div style="height: 160px!important;" class="image-wrapper">
                                        <a class="link" href="<?php echo e(route('experience', $experience->id )); ?>"><img style="height: 160px!important;" width="342"  src="<?php echo e($experience->image); ?>" class="img-responsive" alt=""/></a>
                                        <div class="title-wrapper"><a href="<?php echo e(route('experience', $experience->id )); ?>" class="title"><?php echo e($experience->fullName); ?></a><i class="icons flaticon-circle"></i>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web Projects\Laravel\utob\resources\views/app/exprience/show.blade.php ENDPATH**/ ?>