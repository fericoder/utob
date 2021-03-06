<?php $__env->startSection('content'); ?>

    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(utob-content/uploads/2016/05/doctors.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li class="active"><a href="/doctos" class="link">لیست پزشک ها</a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 class="captions" style="margin-bottom: 35px;">
                                پزشکان یوتاب مد</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section -->
            <div class="section section-padding page-detail padding-top padding-bottom">
                <div class="container">
                    <div class="row">
                        <div id="page-content" class="col-md-12 col-xs-12">
                            <div id="post-547" class="post-547 page type-page status-publish hentry">
                                <div class="section-page-content clearfix ">
                                    <div class="entry-content">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1463147604723">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="slz-shortcode block-title-10253275145e1e7affb5174 ">
                                                            <h3 class="title-style-2">لیست پزشکان یوتاب مد</h3></div>
                                                        <div class="slz-shortcode row ">
                                                            <div class="wrapper-organization teamlist-1463878591">

                                                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="col-md-4 col-sm-4 col-xs-3 md-organization">
                                                                        <div class="content-organization">
                                                                            <div class="wrapper-img">
                                                                                <a href="<?php echo e(route('doctor', $doctor->id )); ?>">
                                                                                    <img
                                                                                            width="200" height="200"
                                                                                            src="<?php echo e($doctor->avatar); ?>"
                                                                                            class="img img-responsives"
                                                                                            alt="avatar-contact-1"/>
                                                                            </div>
                                                                            <div class="main-organization">
                                                                                <div class="organization-title">
                                                                                    <?php echo e($doctor->fullName); ?>

                                                                                    <p class="text"><?php echo e($doctor->title); ?></p>
                                                                                    </a>
                                                                                </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web Projects\Laravel\utob\resources\views/app/doctor/index.blade.php ENDPATH**/ ?>