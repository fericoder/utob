@extends('layouts.master')

@section('content')
    <!-- WRAPPER-->

    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(utob-content/uploads/2016/07/old-1130738_1920.jpg);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li class="active"><a href="/hotels" class="link">هتل
                                        ها</a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 class="captions" style="margin-bottom:35px;">لیست هتل ها</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section -->
            <div class="section section-padding page-detail padding-top padding-bottom">
                <div class="container">
                    <div class="row">
                        <div id="page-content" class="col-md-12 col-xs-12">
                            <div id="post-3807" class="post-3807 page type-page status-publish hentry">
                                <div class="section-page-content clearfix ">
                                    <div class="entry-content">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="hotels-content hotel-result-main result-body slz-shortcode ">
                                                            <div class="loading">
                                                                <div class='spinner sk-spinner-wave'>
                                                                    <div class='rect1'></div>
                                                                    <div class='rect2'></div>
                                                                    <div class='rect3'></div>
                                                                    <div class='rect4'></div>
                                                                    <div class='rect5'></div>
                                                                </div>
                                                            </div>


                                                            <div class="main-right f-none hotel-result-content sc-block-15015746545e24334581b1b">
                                                                <div class="hotel-list">
                                                                    <div class="row">


                                                                    @foreach ($hotels as $hotel)
                                                                            <div class="col-md-4 col-sm-6 col-xs-12 post-84 slzexploore_hotel">
                                                                                <div class="hotels-layout">
                                                                                    <div class="image-wrapper">
                                                                                        <a class="link"
                                                                                           href="{{ route('hotel' , $hotel->id) }}"><img
                                                                                                    width="800" height="540"
                                                                                                    src="{{ $hotel->image }}"
                                                                                                    class="img-responsive"
                                                                                                    alt="hanoi-top-luxury-hotel"
                                                                                                    sizes="(max-width: 800px) 100vw, 800px"/></a>


                                                                                        <div class="title-wrapper">
                                                                                            <a href="{{ route('hotel' , $hotel->id) }}"
                                                                                               class="title">{{ $hotel->name }}</a>
                                                                                            <div class="stars stars{{ $hotel->stars }}">{{ $hotel->stars }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="content-wrapper ">
                                                                                        <div class="content">
                                                                                            <div class="title">
                                                                                                <div class="price"><sup>قیمت از شبی</sup><span
                                                                                                            class="number utob-byekan">{{ $hotel->price }} دلار </span>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div style="margin-top: 20px!important;" class="group-btn-tours"><a href="{{ route('hotel' , $hotel->id) }}" class="left-btn">مشاهده جزییات</a></div>
                                                                                        </div>
                                                                                        <ul style="display: none" class="list-info list-unstyle">
                                                                                            <li class="view"><a
                                                                                                        href="{{ route('hotel' , $hotel->id) }}"
                                                                                                        class="link"><i
                                                                                                            class="icons hidden-icon fa fa-eye"></i><span
                                                                                                            class="number utob-byekan">5068</span></a>
                                                                                            </li>
                                                                                            <li class="wishlist"><a
                                                                                                        href="shop/login/index.html"
                                                                                                        class="link "
                                                                                                        data-item="172"><i
                                                                                                            class="icons hidden-icon fa fa-heart"></i><span
                                                                                                            class="text number utob-byekan">1</span></a>
                                                                                            </li>
                                                                                            <li class="comment"><a
                                                                                                        href="{{ route('hotel' , 1) }}#comments"
                                                                                                        class="link"><i
                                                                                                            class="icons hidden-icon fa fa-comment"></i><span
                                                                                                            class="number utob-byekan">25/2</span></a>
                                                                                            </li>
                                                                                            <li class="share"><a
                                                                                                        href="javascript:void(0);"
                                                                                                        class="link"><i
                                                                                                            class="icons fa fa-share-alt"></i></a>
                                                                                                <ul class="share-social-list">
                                                                                                    <li>
                                                                                                        <a href=""
                                                                                                           class="link-social"
                                                                                                           onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                            <i class="icons fa fa-facebook"></i></a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href=""
                                                                                                           class="link-social"
                                                                                                           onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                            <i class="icons fa fa-twitter"></i></a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href=""
                                                                                                           class="link-social"
                                                                                                           onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                                                                                            <i class="icons fa fa-google-plus"></i></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li class="address"><a
                                                                                                        href="javascript:void(0);"
                                                                                                        class="link"
                                                                                                        title="222 Bang Kabi, Bangkok, Thailand"><i
                                                                                                            class="icons fa fa-map-marker"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    @endforeach




                                                                    </div>
                                                                </div>
                                                                <div class="hide pagination-json"
                                                                     data-json="{&quot;layout&quot;:&quot;accommodation&quot;,&quot;limit_post&quot;:&quot;6&quot;,&quot;author&quot;:[],&quot;offset_post&quot;:0,&quot;sort_by&quot;:&quot;&quot;,&quot;pagination&quot;:&quot;yes&quot;,&quot;category_slug&quot;:[],&quot;facility_slug&quot;:[],&quot;location_slug&quot;:[],&quot;columns&quot;:3,&quot;paged&quot;:&quot;&quot;,&quot;cur_limit&quot;:&quot;&quot;,&quot;show_views&quot;:&quot;1&quot;,&quot;show_reviews&quot;:&quot;1&quot;,&quot;show_wishlist&quot;:&quot;1&quot;,&quot;show_share_post&quot;:&quot;1&quot;,&quot;show_address&quot;:&quot;1&quot;,&quot;post_in&quot;:&quot;&quot;,&quot;bg_color&quot;:&quot;&quot;,&quot;extra_class&quot;:&quot;&quot;,&quot;featured_filter&quot;:&quot;&quot;,&quot;location_list&quot;:&quot;%5B%7B%7D%5D&quot;,&quot;author_list&quot;:&quot;%5B%7B%7D%5D&quot;,&quot;category_list&quot;:&quot;%5B%7B%7D%5D&quot;,&quot;facility_list&quot;:&quot;%5B%7B%7D%5D&quot;,&quot;btn_book&quot;:&quot;Book Now&quot;,&quot;btn_link&quot;:&quot;&quot;,&quot;btn_book_color&quot;:&quot;&quot;,&quot;btn_book_bg_color&quot;:&quot;&quot;,&quot;btn_book_hover_bg_color&quot;:&quot;&quot;,&quot;allow_address_empty&quot;:&quot;&quot;,&quot;content&quot;:&quot;&quot;,&quot;location_list_parse&quot;:[[]],&quot;author_list_parse&quot;:[[]],&quot;category_list_parse&quot;:[[]],&quot;facility_list_parse&quot;:[[]],&quot;taxonomy_slug&quot;:[],&quot;uniq_id&quot;:&quot;block-11830308605e24334581b97&quot;,&quot;thumb-size&quot;:{&quot;large&quot;:&quot;slzexploore-thumb-800x540&quot;,&quot;no-image&quot;:&quot;thumb-800x540.gif&quot;,&quot;small&quot;:&quot;slzexploore-thumb-800x540&quot;},&quot;responsive-class&quot;:&quot;col-md-4 col-sm-6 col-xs-12&quot;}"></div>
                                                                <div class="hide slz-pagination-base"
                                                                     data-base="hotel-grid"></div>
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
                    </div>
                </div>
            </div>
            <!-- #section -->
        </div>
        <!-- MAIN CONTENT-->
    </div>
    <!-- WRAPPER -->
@endsection
