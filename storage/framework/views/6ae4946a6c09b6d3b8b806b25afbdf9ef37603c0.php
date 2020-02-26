<?php $__env->startSection('headerScripts'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <a href="<?php echo e(route('treatment.index')); ?>">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    تعداد درمان ها
                                </h4><br>
                                <span class="m-widget24__desc">
				            منتشر شده و منتشر نشده
				        </span>
                                <span class="m-widget24__stats m--font-brand byekan">
				            <?php echo e($postsCount); ?>

				        </span>
                            </div>
                        </div>
                    </a>
                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <a href="<?php echo e(route('treatment.index')); ?>">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    تعداد پزشک ها
                                </h4><br>
                                <span class="m-widget24__desc byekan">
				            منتشر شده و منتشر نشده
				        </span>
                                <span class="m-widget24__stats m--font-info">
                            ۳
				        </span>
                                <div class="m--space-10"></div>
                            </div>
                        </div>
                    </a>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                تعداد بیمارستان ها
                            </h4><br>
                            <span class="m-widget24__desc byekan">
				            منتشر شده و منتشر نشده
				        </span>
                            <span class="m-widget24__stats m--font-danger byekan">
                                1
				        </span>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                تعداد نظرات کاربران
                            </h4><br>
                            <span class="m-widget24__desc">
				            منتشر شده و منتشر نشده
				        </span>
                            <span class="m-widget24__stats m--font-success byekan">
                                    1
				        </span>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">


        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footerScripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('.dashboard.layouts.master',  ['title' => 'صفحه اصلی'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/dashboard/index.blade.php ENDPATH**/ ?>