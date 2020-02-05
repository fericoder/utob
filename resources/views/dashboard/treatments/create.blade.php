@extends('.dashboard.layouts.master',  ['title' => 'افزودن درمان'])

@section('headerScripts')
    <link href="/admin/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
@stop
<style>
    #cke_body{
        width: 90%!important;
    }
</style>
@section('content')
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
                                افزودن درمان جدید
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{ route('treatment.store')  }}" method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">عنوان درمان:</label>
                            <div class="col-lg-6">
                                <input type="text" name="name" {{ old('name') }} class="form-control m-input"
                                       placeholder="عنوان درمان را وارد نمایید">
                            </div>
                        </div>



                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">ارسال در های اجتماعی:</label>
                            <div class="col-lg-6">
                                <div class="m-checkbox-list">
                                    <label class="m-checkbox">
                                        <input data-switch="true" type="checkbox" name="telegram" checked="checked" data-on-text="فعال" data-handle-width="50" data-off-text="غیرفعال" data-on-color="success">
                                    </label>
                                </div>
                            </div>
                        </div>


                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">آیکون درمان</label>
                            <div class="col-lg-6">
                                <input  type="file" name="icon" class="custom-file-input" id="icon">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->



                        <!--begin::Form-->
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تصویر درمان</label>
                            <div class="col-lg-6">
                                <input  type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>
                        </div>
                        <!--end::Form-->



                        <!--begin::Form-->
                        <div class="m-form__group m-form__group--last form-group row">
                            <div class="col-12 form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">متن درمان</label>
                                <div class="col-lg-10">
                                    <textarea style="direction: rtl; width: 90%!important;"   id="body" name="body" rows="18">{{ old('body') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--end::Form-->


                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">ثبت درمان جدید</button>
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

@stop


@section('footerScripts')

    <!--begin::Page Vendors -->
    <script src="/admin/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js"
            type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/bootstrap-switch.js" type="text/javascript"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <!--end::Page Scripts -->
    <script type="text/javascript">
        CKEDITOR.replace('body', {
            language: 'fa',
            uiColor: '#F3F6F7'
        });

    </script>
@stop