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
                                افزودن ارسال جدید
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="<?php echo e(route('socials.store')); ?>" z method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    <?php echo csrf_field(); ?>
                    <div class="m-portlet__body">


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">انتخاب شبکه اجتماعی:</label>
                            <div class="col-lg-6">
                                <select class="form-control m-select2" id="m_select2_3"
                                        name="socialMedia">
                                    <option value="telegram">تلگرام</option>
                                    <option value="instagram">اینستاگرام</option>
                                    <option value="all">تلگرام و اینستاگرام</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">زمان:</label>
                            <div class="col-lg-6">
                                <div class="input-group date">
                                    <input type="text" name="published_at"
                                           value="<?php echo e(old('published_at')); ?>"
                                           class="form-control m-input" readonly=""
                                           placeholder="تاریخ و زمان انتشار را وارد نمایید"
                                           id="m_datetimepicker_2">
                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i
                                                                    class="la la-calendar-check-o glyphicon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">انتخاب تصویر:</label>
                            <div class="col-lg-6">
                                <input type="file" name="image" value="<?php echo e(old('image')); ?>" class="custom-file-input"
                                       id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">کپشن (توضیحات) :</label>
                            <div class="col-lg-6">
                                <textarea style="font-family: iranyekan" name="caption" class="form-control m-input" id="" cols="30"
                                          rows="10"><?php echo e(old('caption')); ?></textarea>
                            </div>
                        </div>


                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">افزودن ارسال</button>
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
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js"
            type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>

    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>

    <!--end::Page Scripts -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('.dashboard.layouts.master',  ['title' => 'افزودن ارسال'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/dashboard/socials/create.blade.php ENDPATH**/ ?>