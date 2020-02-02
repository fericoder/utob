@extends('layouts.master')

@section('content')

<div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(wp-content/uploads/2016/05/Treatment.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li><a href="/hotels" class="link">درمان ها</a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 style="margin-bottom: 35px;" class="captions">
                                درمان ها</h2>

                        </div>
                    </div>
                </div>
            </section>
            <div class="hotel-view-main padding-top padding-bottom entry-content">
                <div class="container">
                    <div class="journey-block">
                        <div class="row">
                            <div id="page-content" class="col-md-12 col-xs-12">
                                <h3 class="title-style-2">با یک سفر ساده بیماری خود را درمان کنید</h3>


                                    <p style="color:#434a54;">
                                        یوباب مد، پلت‌فرم گردشگری سلامت (مدیکال توریسم)، بستری
                                        برای جذب بیماران خارجی و معرفی آن‌ها به پزشکان و
                                        بیمارستان‌های با کیفیت ایرانی است. بیمارانی که به منظور
                                        دریافت خدمات پزشکی، درمانی و زیبایی به ایران سفر
                                        می‌کنند. یوتاب مد در کنار خدمات درمانی برای بیماران،
                                        خدمات اقامتی و گردشگری را نیز توسط تامین‌کنندگان فراهم
                                        آورده است.

                                    </p>
                                <div class="tours-layout">
                                    <div class="content-wrapper">
                                        <ul class="list-info list-inline list-unstyle">
                                            <li class="share">
                                                <a href="javascript:void(0);" class="link"><i
                                                            class="icons fa fa-share-alt"></i></a>
                                                <ul class="share-social-list">
                                                    <li>
                                                        <a href=""
                                                           onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0');; return false;"
                                                           class="link-social">
                                                            <i class="icons fa fa-facebook"></i>
                                                        </a></li>
                                                    <li>
                                                        <a href=""
                                                           onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0');; return false;"
                                                           class="link-social">
                                                            <i class="icons fa fa-twitter"></i>
                                                        </a></li>
                                                    <li>
                                                        <a href=""
                                                           onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0');; return false;"
                                                           class="link-social">
                                                            <i class="icons fa fa-google-plus"></i>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="slz-shortcode item-list-style06 item-list-20322406125e273ad44b5af wrapper-journey "
                                                         data-item=6>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">افزایش حجم / پروتز</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی بینی</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی زیبایی پلک</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}"> لیپوساکشن</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}"> ابدومینوپلاستی
                                                            </a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی زیبایی‌ گوش</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="slz-shortcode item-list-style06 item-list-20322406125e273ad44b5af wrapper-journey "
                                                         data-item=6>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">تزریق ژل و چربی</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">برجسته‌سازی گونه</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی پلکی</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}"> بوتاکس</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}"> کشیدن صورت
                                                          </a>  </div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی فک</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="slz-shortcode item-list-style06 item-list-20322406125e273ad44b5af wrapper-journey "
                                                         data-item=6>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی قلب</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}"> آنژیوگرافی </a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی دندان و لثه</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی مغز و اعصاب</a></div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی پلاستیک
                                                        </a>    </div>
                                                        </div>
                                                        <div class="item feature-item"><i
                                                                    class="fa fa-stethoscope utob-fa"></i>
                                                            <div class="text"><a href="{{ route('treatment', $treatment->id) }}">جراحی اتوپدی</a></div>
                                                        </div>
                                                    </div>
                                                 </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overview-block clearfix slz-shortcode sc-block-13351890685e273ad44c072 ">

                        </div>
                    </div>
                </div>
              
        </div>
        <!-- MAIN CONTENT-->
    </div>
    <!-- WRAPPER -->



@endsection
