<?php $__env->startSection('headerScripts'); ?>
    <link href="/admin/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>

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
                                ویرایش بیمارستان: <?php echo e($hospital->title); ?>

                            </h3>
                        </div>
                    </div>
                    <a target="_blank" href="/treaments/<?php echo e($hospital->id); ?>"><button style="margin-top: 20px;" type="submit" class="btn btn-sm btn-primary">مشاهده بیمارستان</button></a>
                </div>
                <!--begin::Form-->
                <form action="<?php echo e(route('hospital.update', $hospital->id)); ?>" method="POST" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">عنوان بیمارستان:</label>
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control m-input"
                                       value="<?php echo e($hospital->name); ?>">
                            </div>
                        </div>




                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تصویر بیمارستان</label>
                            <div class="col-lg-6">
                                <input  type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->


                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">آیکون</label>
                            <div class="col-lg-6">
                                <input  type="file" name="icon" class="custom-file-input" id="attachment">
                                <label class="custom-file-label" for="attachment">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->


                        <!--begin::Form-->
                        <div class="m-form__group m-form__group--last form-group row">
                            <div class="col-12 form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">متن بیمارستان</label>
                                <div class="col-lg-10">
                                    <textarea style="direction: rtl; width: 90%!important;" id="body" name="body" rows="18"><?php echo e($hospital->body); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!--end::Form-->


                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">ویرایش</button>
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

    <!--end::Page Scripts -->
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

    <!--end::Page Scripts -->
    <script type="text/javascript">
        CKEDITOR.replace('body', {
            language: 'fa',
            uiColor: '#F3F6F7'
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('.dashboard.layouts.master',  ['title' => 'ویرایش بیمارستان'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/dashboard/hospitals/edit.blade.php ENDPATH**/ ?>