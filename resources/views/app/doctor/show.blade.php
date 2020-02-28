@extends('layouts.master')

@section('content')
    <!-- WRAPPER-->

    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(/utob-content/uploads/2016/05/doctors.jpg);!important;"
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
                    <div class="slz-shortcode special-offer margin-top70">
                        <h3 class="title-style-2">دیگر پزشک ها</h3>
                        <div class="special-offer-list">

                            @foreach ($doctors as $doctor)
                                <div class="special-offer-layout post-185 slzexploore_hotel">
                                    <div style="height: 160px!important;" class="image-wrapper">
                                        <a class="link" href="{{ route('doctor', $doctor->id ) }}"><img style="height: 160px!important;" width="342"  src="{{ $doctor->avatar }}" class="img-responsive" alt=""/></a>
                                        <div class="title-wrapper"><a href="{{ route('hotel', $doctor->id ) }}" class="title">{{ $doctor->name }}</a><i class="icons flaticon-circle"></i>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

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
