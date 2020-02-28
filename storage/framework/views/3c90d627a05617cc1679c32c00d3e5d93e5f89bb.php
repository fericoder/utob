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
                                افزودن هتل جدید
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="<?php echo e(route('hotel.store')); ?>" method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    <?php echo csrf_field(); ?>

                    <div class="m-portlet__body">


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">نام هتل:</label>
                            <div class="col-lg-6">
                                <input type="text" name="name" <?php echo e(old('name')); ?> class="form-control m-input"
                                       placeholder="نام هتل را وارد نمایید">
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">شهر:</label>
                            <div class="col-lg-6">
                                <input type="text" name="city" <?php echo e(old('city')); ?> class="form-control m-input"
                                       placeholder="شهر را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">شروع قیمت:</label>
                            <div class="col-lg-6">
                                <input type="text" name="price" <?php echo e(old('price')); ?> class="form-control m-input"
                                       placeholder="قیمت را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">ترتیب:</label>
                            <div class="col-lg-6">
                                <input type="text" name="order" <?php echo e(old('order')); ?> class="form-control m-input"
                                       placeholder="ترتیب را وارد نمایید">
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تعداد ستاره:</label>
                            <div class="col-lg-6">
                                <select class="form-control m-select2" id="m_select2_3"
                                        name="stars">
                                    <option value="1">۱ ستاره</option>
                                    <option value="2">۲ ستاره</option>
                                    <option value="3">۳ ستاره</option>
                                    <option value="4">۴ ستاره</option>
                                    <option value="5">۵ ستاره</option>
                                    <option value="6">۶ ستاره</option>
                                    <option value="7">۷ ستاره</option>
                                </select>
                            </div>
                        </div>


                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تصویر هتل</label>
                            <div class="col-lg-6">
                                <input  type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->



                        <!--begin::Form-->
                        <div class="m-form__group m-form__group--last form-group row">
                            <div class="col-12 form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">متن هتل</label>
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
                                        <button type="submit" class="btn btn-success">ثبت هتل جدید</button>
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
<?php echo $__env->make('.dashboard.layouts.master',  ['title' => 'افزودن هتل'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alirahmani/Projects/utob/resources/views/dashboard/hotels/create.blade.php ENDPATH**/ ?>