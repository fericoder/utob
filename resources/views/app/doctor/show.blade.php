@extends('layouts.master')

@section('content')
    <!-- WRAPPER-->

    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(/wp-content/uploads/2016/05/doctors.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li class="active"><a href="/doctors" class="link">پزشکان</a></li>
                                <li class="active"><a href="{{ route('doctor', $doctor->id) }}" class="link">اطلاعات پزشک</a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 class="captions" style="margin-bottom:35px;">{{ $doctor->fullName }}</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section -->

            <div class="container">

                <div class="blog-author margin-bottom margin-top">
                    <div class="media blog-author-content">
                        <div class="media-left">
                            <a class="media-image" href="">
                                <img src="{{ $doctor->avatar }}" width="100" height="100" alt="Exploorer"
                                     class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 alignnone photo"/> </a>
                        </div>
                        <div class="media-right">
                            <div class="author">
                                <a class="name" href="">{{ $doctor->fullName }}</a>
                            </div>
                            <div class="position">{{ $doctor->title }}</div>
                            <div class="des"><p>
                                    {!! $doctor->body !!}
                                </p></div>

                        </div>
                    </div>

                </div>
                

                <div class="container">
                    <div class="slz-shortcode special-offer margin-top70" style="margin-bottom:50px;">
                        <h3 class="title-style-2">دیگر پزشکان
                        </h3>
                        <div class="special-offer-list">
                            <div class="special-offer-layout post-185 slzexploore_hotel">
                                <div class="image-wrapper">
                                    <a class="link"
                                       href=""><img width="342"
                                                    height="257"
                                                    src="/wp-content/uploads/2016/05/doki2.jpg"
                                                    class="img-responsive"
                                                    alt="316_langham_modern_Exterior"
                                        /></a>
                                    <div class="title-wrapper"><a
                                                href=""
                                                class="title">نرگس زندوکیل</a><i class="icons flaticon-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="special-offer-layout post-172 slzexploore_hotel">
                                <div class="image-wrapper">
                                    <a class="link"
                                       href=""><img width="342"
                                                    height="257"
                                                    src="/wp-content/uploads/2016/05/doki2.jpg"
                                                    class="img-responsive"
                                                    alt="316_langham_modern_Exterior"
                                        /></a>
                                    <div class="title-wrapper"><a
                                                href=""
                                                class="title">نرگس زندوکیل</a><i class="icons flaticon-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="special-offer-layout post-166 slzexploore_hotel">
                                <div class="image-wrapper">
                                    <a class="link"
                                       href=""><img width="342"
                                                    height="257"
                                                    src="/wp-content/uploads/2016/05/doki2.jpg"
                                                    class="img-responsive"
                                                    alt="316_langham_modern_Exterior"
                                        /></a>
                                    <div class="title-wrapper"><a
                                                href=""
                                                class="title">نرگس زندوکیل</a><i class="icons flaticon-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="special-offer-layout post-84 slzexploore_hotel">
                                <div class="image-wrapper">
                                    <a class="link"
                                       href=""><img width="342"
                                                    height="257"
                                                    src="/wp-content/uploads/2016/05/doki2.jpg"
                                                    class="img-responsive"
                                                    alt="316_langham_modern_Exterior"
                                        /></a>
                                    <div class="title-wrapper"><a
                                                href=""
                                                class="title">نرگس زندوکیل</a><i class="icons flaticon-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- #section -->

    </div>
    <!-- MAIN CONTENT-->
    </div>
    <!-- WRAPPER -->
@endsection
