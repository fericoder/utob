@extends('layouts.master')

@section('content')

    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(wp-content/uploads/2016/05/servic.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="" class="link home">صفحه اصلی</a></li>
                                <li class="active"><a href="" class="link">فرم اطلاعات تکمیلی متقاضی</a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 class="captions" style="margin-bottom: 35px;font-size: 30px">
                                فرم اطلاعات تکمیلی متقاضی</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section -->
            <div class="container">
                <div class="register-wrapper rlp-wrapper">
                    <div style="margin: 30px;" class="register-table rlp-table">
                        <a class="btn-close" href="/">×</a>
                        <a href="http://wp.swlabs.co/exploore/"><img style="width:200px;" src="/wp-content/uploads/2016/06/logo-1.png" class="login" alt="logo"></a>
                        <div style="font-size: 17px" class="register-title rlp-title">
                            باتشکر از اعتماد شما به مجموعه یوتاب مد، خواهشمنداست جهت تکمیل فرآیند فرم زیر را تکمیل نمایید.
                        </div>
                        <form method="post" class="register" novalidate="novalidate">
                            <div class="register-form bg-w-form rlp-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">
                                            نام و نام خانوادگی
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="regname" type="text" placeholder="" class="form-control form-input" value="" name="username" >
                                        <label for="regname" class="username"></label>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="regemail" class="control-label form-label">
                                            نوع خدمت مورد نظر
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="regemail" type="email" placeholder="" class="form-control form-input" value="" name="email" >
                                        <label for="regemail" class="email"></label>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="reregpassword" class="control-label form-label">
                                            سابقه بیماری های قبلی
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input  type="password" placeholder="" class="form-control form-input" name="repassword" >
                                        <label for="reregpassword"></label>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="reregpassword" class="control-label form-label">
                                            سابقه جراحی های قبلی
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input  type="password" placeholder="" class="form-control form-input" name="repassword" >
                                        <label for="reregpassword"></label>
                                    </div>



                                    <div class="col-md-6">
                                        <label for="password" class="control-label form-label">
                                            داروهای مصرفی
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input  type="password" placeholder="" class="form-control form-input" name="password">
                                        <label for="password"></label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="reregpassword" class="control-label form-label">
                                            تاریخ مورد نظر برای سفر به ایران
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="reregpassword" type="password" placeholder="" class="form-control form-input" name="repassword" >
                                        <label for="reregpassword"></label>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="password" class="control-label form-label">
                                            خدمات علاقه مند به استفاده
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="password" type="password" placeholder="" class="form-control form-input" name="password">
                                        <label for="password"></label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="reregpassword" class="control-label form-label">
                                            تصویر
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="reregpassword" type="password" placeholder="" class="form-control form-input" name="repassword" >
                                        <label for="reregpassword"></label>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="password" class="control-label form-label">
                                            سن
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="password" type="password" placeholder="" class="form-control form-input" name="password">
                                        <label for="password"></label>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="reregpassword" class="control-label form-label">
                                            جنسیت
                                            <span class="required" aria-required="true">*</span>
                                        </label>
                                        <input id="reregpassword" type="password" placeholder="" class="form-control form-input" name="repassword" >
                                        <label for="reregpassword"></label>
                                    </div>



                                </div>
                            </div>
                            <div class="register-submit">
                                <input type="submit" class="btn btn-register btn-maincolor" name="register" value="ارسال فرم">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN CONTENT-->
    </div>
    <!-- WRAPPER -->

@endsection
