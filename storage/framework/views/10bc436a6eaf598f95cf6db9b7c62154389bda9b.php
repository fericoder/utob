<?php $__env->startSection('content'); ?>
    <!-- WRAPPER-->

    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(/utob-content/uploads/2016/05/doctors.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li class="active"><a href="/doctors" class="link">پزشکان</a></li>
                                <li class="active"><a href="<?php echo e(route('doctor', $doctor->id)); ?>" class="link">اطلاعات پزشک</a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 class="captions" style="margin-bottom:35px;"><?php echo e($doctor->fullName); ?></h2>
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
                                <img src="<?php echo e($doctor->avatar); ?>" width="100" height="100" alt="Exploorer"
                                     class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo"/> </a>
                        </div>
                        <div class="media-right">
                            <div class="author">
                                <a class="name" href=""><?php echo e($doctor->fullName); ?></a>
                            </div>
                            <div class="position"><?php echo e($doctor->title); ?></div>
                            <div class="des"><p>
                                    <?php echo $doctor->body; ?>

                                </p></div>

                        </div>
                    </div>

                </div>


                <div class="container">
                    <div class="slz-shortcode special-offer margin-top70">
                        <h3 class="title-style-2">دیگر پزشک ها</h3>
                        <div class="special-offer-list">

                            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="special-offer-layout post-185 slzexploore_hotel">
                                    <div style="height: 160px!important;" class="image-wrapper">
                                        <a class="link" href="<?php echo e(route('doctor', $doctor->id )); ?>"><img style="height: 160px!important;" width="342"  src="<?php echo e($doctor->avatar); ?>" class="img-responsive" alt=""/></a>
                                        <div class="title-wrapper"><a href="<?php echo e(route('hotel', $doctor->id )); ?>" class="title"><?php echo e($doctor->name); ?></a><i class="icons flaticon-circle"></i>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/app/doctor/show.blade.php ENDPATH**/ ?>