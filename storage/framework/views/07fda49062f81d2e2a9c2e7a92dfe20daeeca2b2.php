<?php $__env->startSection('headerScripts'); ?>
    <link href="/admin/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<style>
    #cke_body{
        width: 90%!important;
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                افزودن تجربه مشتری جدید
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="<?php echo e(route('experience.store')); ?>" method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    <?php echo csrf_field(); ?>

                    <div class="m-portlet__body">


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">نام مشتری:<span style="color: red;font-size: 20px">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="fullName" <?php echo e(old('fullName')); ?> class="form-control m-input"
                                       placeholder="نام مشتری را وارد نمایید">
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">کشور:<span style="color: red;font-size: 20px">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="country" <?php echo e(old('country')); ?> class="form-control m-input"
                                       placeholder="کشور را وارد نمایید">
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">ترتیب:<span style="color: red;font-size: 20px">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="order" <?php echo e(old('order')); ?> class="form-control m-input"
                                       placeholder="ترتیب را وارد نمایید">
                            </div>
                        </div>




                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تصویر چهره مشتری<span style="color: red;font-size: 20px">*</span></label>
                            <div class="col-lg-6">
                                <input  type="file" name="avatar" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->


                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تصویر پرچم کشور<span style="color: red;font-size: 20px">*</span></label>
                            <div class="col-lg-6">
                                <input  type="file" name="flag" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->

                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تصویر واید پست<span style="color: red;font-size: 20px">*</span></label>
                            <div class="col-lg-6">
                                <input  type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->

                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">ویدیو</label>
                            <div class="col-lg-6">
                                <input  type="file" name="video" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->

                        <!--begin::Form-->
                        <div class="m-form__group m-form__group--last form-group row">
                            <div class="col-12 form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">متن تجربه مشتری<span style="color: red;font-size: 20px">*</span></label>
                                <div class="col-lg-10">
                                    <textarea style="direction: rtl; width: 90%!important;"   id="body" name="body" rows="18"><?php echo e(old('body')); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!--end::Form-->


                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">ثبت تجربه مشتری جدید</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <!--end::Form-->
            </div>
        </div>

    </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footerScripts'); ?>

    <!--begin::Page Vendors -->
    <script src="/admin/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js"
            type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/bootstrap-switch.js" type="text/javascript"></script>

    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

    <!--end::Page Scripts -->
    <script type="text/javascript">
        CKEDITOR.replace('body', {
            language: 'fa',
            uiColor: '#F3F6F7'
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('.dashboard.layouts.master',  ['title' => 'افزودن تجربه مشتری'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/dashboard/experiences/create.blade.php ENDPATH**/ ?>