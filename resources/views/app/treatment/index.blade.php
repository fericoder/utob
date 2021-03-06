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
            <section style="background-image: url(utob-content/uploads/2016/05/Treatment.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li><a href="/treatments" class="link">درمان ها</a></li>
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



                                <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">


                                                     <div style="display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">
                                                               @foreach ($treatments as $treatment)
                                                                    <div style="width: 150px;height: 100px; margin: 5px;padding: 5px;" class="item feature-item">
                                                                        <a style="color: #0e99b6" href="{{ route('treatment', $treatment->id) }}"><img style="width: 40px;height: 40px; margin: auto; margin-bottom: 10px" src="{{ $treatment->icon }}" alt="">
                                                                            <div class="text">
                                                                                {{ $treatment->name }}
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                @endforeach

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
