<!DOCTYPE html>
<!--
Author: Ali Rahmani
Website: http://www.Rieco.ir/
Contact: rahmani@rieco.ir
-->
<html lang="en" direction="rtl" style="direction: rtl;">
<!-- begin::Head -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>

    <title>یوتاب مد - داشبورد مدیریت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <meta name="csrf-token" id="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="/admin/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="/admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors Styles -->


    <link rel="shortcut icon" href="/admin/assets/demo/default/media/img/logo/favicon.ico"/>

    <link href="/admin/assets/demo/default/base/mystyle.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/vendors/base/sweetalert.css" rel="stylesheet" type="text/css"/>
    <?php echo $__env->yieldContent('headerScripts'); ?>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">


<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <?php echo $__env->make('dashboard.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
                    class="la la-close"></i></button>

        <?php echo $__env->make('dashboard.layouts.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">داشبورد یوتاب مد</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">


                            <li class="m-nav__item m-nav__item--home">
                                <a href="#" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>



                            <li class="m-nav__separator">|</li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text"><?php echo e($title); ?></span>
                                </a>
                            </li>



                        </ul>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Section-->
                <?php echo $__env->make('dashboard.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>


    </div>
    <!-- end:: Body -->


    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
					2020 &copy; تمامی حقوق محفوظ است.| طراحی شده در دپارتمان توسعه یوتاب </a>
				</span>
                </div>

            </div>
        </div>
    </footer>
    <!-- end::Footer -->


</div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
<ul class="m-nav-sticky m--margin-top-60" >
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="تنظیمات سیستم" data-placement="left">
        <a href="index7a7b.html?page=builder&amp;demo=default&amp;rtl=1"><i class="la la-cog"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="خرید ها" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
           target="_blank"><i class="la la-cart-arrow-down"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="داکیومنت ها" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="پشتیبانی" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
    </li>
</ul>
<!-- begin::Quick Nav -->
<!--begin::Global Theme Bundle -->
<script src="/admin/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/admin/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<script src="/admin/assets/vendors/base/sweetalert.min.js" type="text/javascript"></script>
<?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });
</script>
<?php echo $__env->yieldContent('footerScripts'); ?>
</body>
<!-- end::Body -->

</html><?php /**PATH E:\Web Projects\Laravel\utob\resources\views//dashboard/layouts/master.blade.php ENDPATH**/ ?>