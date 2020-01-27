@extends('master') @section('content')
<style>
    .lm-underline {
        position: relative
    }

    .lm-underline:after {
        position: absolute;
        content: ' ';
        right: 5%;
        left: 5%;
        bottom: 0;
        height: 1px;
        background-image: -webkit-gradient(linear, left top, right top, from(transparent), color-stop(#fff), to(transparent));
        background-image: linear-gradient(90deg, transparent, #fff, transparent)
    }

    .lm-tabel {
        font-family: 'Open Sans';
        max-width: 1000px;
        width: 100%;
        padding-top: 10px;
        margin: 0 auto
    }

    .lm-item-1 .lm-item-bottom,
    .lm-item-1 .lm-item-top {
        background-color: #341b37;
        background-image: linear-gradient(-45deg, #85468c, #241326)
    }

    .lm-item-2 .lm-item-bottom,
    .lm-item-2 .lm-item-top {
        background-color: #e30a51;
        background-image: linear-gradient(-45deg, #f6266b, #7e052d)
    }

    .lm-item-3 .lm-item-bottom,
    .lm-item-3 .lm-item-top {
        background-color: #286caa;
        background-image: linear-gradient(-45deg, #4d93d5, #1a466f)
    }

    .lm-item {
        -webkit-transform: scale(0.9);
        transform: scale(0.9);
        vertical-align: top;
        width: 33%;
        float: left;
        display: inline-block;
        position: relative;
        -webkit-transition: -webkit-transform 0.3s ease-out, -webkit-filter 0.3s;
        transition: -webkit-transform 0.3s ease-out, -webkit-filter 0.3s;
        transition: transform 0.3s ease-out, filter 0.3s;
        transition: transform 0.3s ease-out, filter 0.3s, -webkit-transform 0.3s ease-out, -webkit-filter 0.3s
    }

    .lm-item:hover {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .lm-item:not(:hover).blur {
        -webkit-filter: blur(3px);
        filter: blur(3px)
    }

    .lm-item:after,
    .lm-item:before {
        z-index: -1;
        content: ' ';
        position: absolute;
        left: 10px;
        top: 80%;
        bottom: 18px;
        right: 10px;
        -webkit-transform-origin: bottom center;
        transform-origin: bottom center;
        box-shadow: 0px 25px 10px -8px rgba(0, 0, 0, 0.4)
    }

    .lm-item:after {
        -webkit-transform: rotate(6deg) translate3d(15px, 0, 0);
        transform: rotate(6deg) translate3d(15px, 0, 0)
    }

    .lm-item:before {
        -webkit-transform: rotate(-6deg) translate3d(-15px, 0, 0);
        transform: rotate(-6deg) translate3d(-15px, 0, 0)
    }

    .lm-item-top {
        padding-top: 20px;
        text-transform: uppercase;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        text-align: center
    }

    .lm-item-title {
        color: #e3dfe2;
        font: 100 30px/70px 'Open Sans'
    }

    .lm-item-price {
        background: rgba(255, 255, 255, 0.05);
        margin-top: 20px;
        font-size: 40px;
        line-height: 50px;
        color: #fff
    }

    .lm-item-price i {
        font-size: 15px
    }

    .lm-item-body {
        padding: 15px;
        background: #fff
    }

    .lm-item-desc {
        text-align: center;
        margin-bottom: 15px;
        text-transform: uppercase
    }

    .lm-item-desc strong {
        color: #868686;
        font: 400 16px 'Open Sans'
    }

    .lm-item-desc p {
        color: #b4b4b4;
        margin: 0
    }

    .lm-item-list {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .lm-item-list li {
        color: #b4b4b4;
        border-bottom: 1px dotted rgba(0, 0, 0, 0.1);
        margin-bottom: 5px
    }

    .lm-item-list li:nth-child(2n+1) {
        background-color: #fbfbfb
    }

    .lm-item-list .icon-cancel,
    .lm-item-list .icon-ok {
        float: right
    }

    .lm-item-list .icon-ok {
        color: #75bc9a
    }

    .lm-item-list .icon-cancel {
        color: #bf7375
    }

    .lm-item-link {
        text-align: center;
        margin-top: 15px
    }

    .lm-item-link a {
        text-decoration: none
    }

    .lm-item-link display inline-block {
        height: 54px
    }

    .lm-item-link display inline-block:hover {
        -webkit-transition: -webkit-transform 0.3s;
        transition: -webkit-transform 0.3s;
        transition: transform 0.3s;
        transition: transform 0.3s, -webkit-transform 0.3s;
        -webkit-transform: translate3d(0, -3px, 0);
        transform: translate3d(0, -3px, 0)
    }

    .lm-item-link display inline-block:active {
        -webkit-transition: -webkit-transform 0.1s;
        transition: -webkit-transform 0.1s;
        transition: transform 0.1s;
        transition: transform 0.1s, -webkit-transform 0.1s;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .lm-item-link text {
        font-size: 21px;
        font-weight: 700;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .lm-item-bottom {
        text-align: center;
        border-bottom-left-radius: 7px;
        border-bottom-right-radius: 7px;
        padding: 15px;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 100;
        min-height: 20px
    }

    .lm-item-bottom span {
        color: #fff;
        font-weight: 400;
        margin-right: 3px;
        -webkit-transform: skewX(-10deg);
        transform: skewX(-10deg);
        display: inline-block
    }

    @font-face {
        font-family: 'fontello';
        src: url("data:application/font-woff;base64,d09GRgABAAAAAAuUAA4AAAAAFCgAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABPUy8yAAABRAAAAEQAAABWPi5I32NtYXAAAAGIAAAAOgAAAUrQHxmxY3Z0IAAAAcQAAAAKAAAACgAAAABmcGdtAAAB0AAABZQAAAtwiJCQWWdhc3AAAAdkAAAACAAAAAgAAAAQZ2x5ZgAAB2wAAAGGAAAB7vzhCgVoZWFkAAAI9AAAADUAAAA2Bty3emhoZWEAAAksAAAAHgAAACQHUgNXaG10eAAACUwAAAAQAAAAEA0cAABsb2NhAAAJXAAAAAoAAAAKAYMAym1heHAAAAloAAAAIAAAACAAkQvkbmFtZQAACYgAAAF3AAACzcydGx1wb3N0AAALAAAAACwAAAA9VFunlXByZXAAAAssAAAAZQAAAHvdawOFeJxjYGR2Z5zAwMrAwVTFtIeBgaEHQjM+YDBkZGJgYGJgZWbACgLSXFMYHF6wveBgDvqfxRDFHMwwDSjMCJIDANm0C4t4nGNgYGBmgGAZBkYGEHAB8hjBfBYGDSDNBqQZGZgYGF5w/P8PUvCCDUSL/4aqBwJGNoYRDwB60ge1AAAAAAAAAAAAAAAAAAB4nK1WaXMTRxCd1WHLNj6CDxI2gVnGcox2VpjLCBDG7EoW4BzylexCjl1Ldu6LT/wG/ZpekVSRb/y0vB4d2GAnVVQoSv2m9+1M9+ueXpPQksReWI+k3HwpprY2aWTnSUg3bFqO4kPZ2QspU0z+LoiCaLXUvu04JCISgap1hSWC2PfI0iTjQ48yWrYlvWpSbulJd9kaD+qt+vbT0FGO3QklNZuhQ+uRLanCqBJFMu2RkjYtw9VfSVrh5yvMfNUMJYLoJJLGm2EMj+Rn44xWGa3GdhxFkU2WG0WKRDM8iCKPslpin1wxQUD5oBlSXvk0onyEH5EVe5TTCnHJdprf9yU/6R3OvyTieouyJQf+QHZkB3unK/ki0toK46adbEehivB0fSfEI5uT6p/sUV7TaOB2RaYnzQiWyleQWPkJZfYPyWrhfMqXPBrVkoOcCFovc2Jf8g60HkdMiWsmyILujk6IoO6XnKHYY/q4+OO9XSwXIQTIOJb1jkq4EEYpYbOaJG0EOYiSskWV1HpHTJzyOi3iLWG/Tu3oS2e0Sag7MZ6th46tnKjkeDSp00ymTu2k5tGUBlFKOhM85tcBlB/RJK+2sZrEyqNpbDNjJJFQoIVzaSqIZSeWNAXRPJrRm7thmmvXokWaPFDPPXpPb26Fmzs9p+3AP2v8Z3UqpoO9MJ2eDshKfJp2uUnRun56hn8m8UPWAiqRLTbDlMVDtn4H5eVjS47CawNs957zK+h99kTIpIH4G/AeL9UpBUyFmFVQC9201rUsy9RqVotUZOq7IU0rX9ZpAk05Dn1jX8Y4/q+ZGUtMCd/vxOnZEZeeufYlyDSH3GZdj+Z1arFdgM5sz+k0y/Z9nebYfqDTPNvzOh1ha+t0lO2HOi2w/UinY2wvaEGT7jsEchGBXMAGEoGwdRAI20sIhK1CIGwXEQjbIgJhu4RA2H6MQNguIxC2l7Wsmn4qaRw7E8sARYgDoznuyGVuKldTyaUSrotGpzbkKXKrpKJ4Vv0rA/3ikTesgbVAukTW/IpJrnxUleOPrmh508S5Ao5Vf3tzXJ8TD2W/WPhT8L/amqqkV6x5ZHIVeSPQk+NE1yYVj67p8rmqR9f/i4oOa4F+A6UQC0VZlg2+mZDwUafTUA1c5RAzGzMP1/W6Zc3P4fybGCEL6H78NxQaC9yDTllJWe1gr9XXj2W5twflsCdYkmK+zOtb4YuMzEr7RWYpez7yecAVMCqVYasNXK3gzXsS85DpTfJMELcVZYOkjceZILGBYx4wb76TICRMXbWB2imcsIG8YMwp2O+EQ1RvlOVwe6F9Ho2Uf2tX7MgZFU0Q+G32Rtjrs1DyW6yBhCe/1NdAVSFNxbipgEsj5YZq8GFcrdtGMk6gr6jYDcuyig8fR9x3So5lIPlIEatHRz+tvUKd1Ln9yihu3zv9CIJBaWL+9r6Z4qCUd7WSZVZtA1O3GpVT15rDxasO3c2j7nvH2Sdy1jTddE/c9L6mVbeDg7lZEO3bHJSlTC6o68MOG6jLzaXQ6mVckt52DzAsMKDfoRUb/1f3cfg8V6oKo+NIvZ2oH6PPYgzyDzh/R/UF6OcxTLmGlOd7lxOfbtzD2TJdxV2sn+LfwKy15mbpGnBD0w2Yh6xaHbrKDXynBjo90tyO9BDwse4K8QBgE8Bi8InuWsbzKYDxfMYcH+Bz5jBoMofBFnMYbDNnDWCHOQx2mcNgjzkMvmDOOsCXzGEQModBxBwGT5gTADxlDoOvmMPga+Yw+IY59wG+ZQ6DmDkMEuYw2Nd0ayhzixd0F6htUBXowPQTFvewONRUGbK/44Vhf28Qs38wiKk/aro9pP7EC0P92SCm/mIQU3/VdGdI/Y0Xhvq7QUz9wyCmPtMvxnKZwV9GvkuFA8ouNp/z98T7B8IaQLYAAQAB//8AD3icZZAxTsMwFIb9nMRJ3RC7UeJEoYQopCmCEqrSNgghunRAogwICViLmBiAgYkDcAYOkJ6AmVv0FCzcoGAXEAODf9t6/3vf048Aoc9bvKGdoykir/sEdrZbHjF9j2xDmpeDQm/nIziCdRCB2OsNy34Bu5C3lRbGoD8s5Qn2emINYj0QDBxVwGZKAi/GqismOH24otaJaUNrXGQc16wDzTVgdOz7O2Nw3bC1kviRv+FkomnTu0vptWhymGWE1Eihc2vNyYtwMAYrckVqr8bxfnPT428XT3xqUWpNjShsOppdnxiYQMn0boc3Xdsldo3ShhmJJNkKTh8bN3IDal3rrieoRutnNUx8yh3o5k7kccoMWnfCMMm7CCGVywee42eUyVyEvsyFAUl3wVSS90fQVjLsrUOpRMhyIPCcTXiHV5WUCVc3//szVlXsQajHbMb+G1mhDIqNkFbhF+RLdkOxwTMluw2/xKUIrWKLRPYv3n+Gwd0Sg4Xgi4QxEN/DZ3Cv1kBft79ItgAAeJxjYGRgYADiJdeUDeP5bb4ycDO/AIowXOI5zwKhl1xhYPifxbyEORjI5WBgAokCADeiCt0AAAB4nGNgZGBgDvqfxRDF/IIBCJiXMDAyoAIWAGFqA7EAAAPoAAACOwAAAxEAAAPoAAAAAAAAAIwAygD3AAAAAQAAAAQAYgABAAAAAAACAAAAEABzAAAAGAtwAAAAAHicdZHNSsNAFEa/aWvVFlQU3HpXUhHTH+hGEAqVutFNkW4ljWmSkmbKZFroa/gOPowv4bP4NZ2KtJiQzLln7ty5mQA4xzcUNleXz4YVjhhtuIRDPDgu0z86rpCfHR+gjlfHVfo3xzXcInJcxwU+WEFVjhlN8elY4UydOi7hRF05LtPfOa6QHxwf4FK9OK7SB45rGKnccR3X6quv5yuTRLGVRv9GOq12V8Yr0VRJ5qfiL2ysTS49mejMhmmqvUDPtjwMo0Xqm224HUehyROdSdtrbdVTmIXGt+H7unq+jDrWTmRi9EwGLkPmRk/DwHqxtfP7ZvPvfuhDY44VDBIeVQwLQYP2hmMHLbT5IwRjZggzN1kJMvhIaXwsuCIuZnLGPT4TRhltyIyU7CHge7bnh6SI61NWMXuzu/GItN4jKbywL4/d7WY9kbIi0y/s+2/vOZbcrUNruWrdpSm6Egx2agjPYz03pQnoveJULO09mrz/+b4f4GSETQB4nGNgYoAALgbsgIWBgZGJkZmRhS0lPycnsYgtOTEvOTWHKT+bgQEAQtQF6XicY/DewXAiKGIjI2Nf5AbGnRwMHAzJBRsZWJ02MjBoQWgOFHonAwMDJzKLmcFlowpjR2DEBoeOiI3MKS4b1UC8XRwNDIwsDh3JIREgJZFAsJGBR2sH4//WDSy9G5kYXAAH0yK4AAAA") format('woff');
        font-weight: normal;
        font-style: normal
    }

    [class^="icon-"]:before,
    [class*=" icon-"]:before {
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: 0.2em;
        text-align: center;
        font-variant: normal;
        text-transform: none;
        line-height: 1em;
        margin-left: 0.2em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-dollar:before {
        content: 'e806'
    }

    .icon-cancel:before {
        content: 'e807'
    }

    .icon-ok:before {
        content: 'e808'
    }
</style>
<div id="wrapper-content">
    <div class="main-content">
        <section class="page-banner homepage-04">
            <div class="homepage-hero-module">
                <div class="video-container">
                    <div class="filter">
                        <video autoplay="" loop="" controls="controls" muted="muted" class="fillWidth">
                            <source src="wp-content/uploads/2016/05/Mountain.mp4" type="video/mp4"> </video>
                    </div>
                </div>
            </div>
            <div class="homepage-banner-warpper">
                <div class="homepage-banner-content">
                    <div class="bg-image show-video"><img width="1920" height="1200" src="wp-content/uploads/2016/05/home-banner-3.jpg" class="img-responsive" alt="home-banner-3" srcset="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/home-banner-3.jpg 1920w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/home-banner-3-300x188.jpg 300w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/home-banner-3-768x480.jpg 768w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/home-banner-3-1024x640.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
                    <div class="group-logo"><img src="wp-content/uploads/2016/06/logo.png" alt="logo" class="img-logo"></div>
                    <div class="group-title">
                        <h1 class="banner title">توریسم سلامت</h1>
                        <h4 class="sub-banner text">شرکت ارکان گستر یوتاب مد</h4></div>
                    <div class="group-btn"> <a href="#" data-hover="کلیک کنید" class="btn-click"><span class="text">مشاهده پکیج ها</span> <i class="icons fa fa-long-arrow-right"></i> </a></div>
                    <div class="btn-video">
                        <div class="btn-click btn-play show-video"><i class="icons fa fa-play"></i></div>
                        <div class="btn-click btn-pause "><i class="icons fa fa-pause"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section section-padding page-detail padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div id="page-content" class="col-md-12 col-xs-12">
                        <div id="post-45" class="post-45 page type-page status-publish hentry">
                            <div class="section-page-content clearfix ">
                                <div class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1463096648310">
                                        <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-7">
                                            <div class="vc_column-inner vc_custom_1468574547376">
                                                <div class="wpb_wrapper">
                                                    <div class="slz-shortcode block-title-16339022535e1ec8d10ad08 ">
                                                        <div class="group-title">
                                                            <div class="sub-title">
                                                                <p class="text">درمان در سفر</p> <i class="icons flaticon-people"></i></div>
                                                            <h2 class="main-title">با یک سفر ساده بیماری خود را درمان کنید</h2></div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="slz-shortcode group-list ">
                                                                        <ul class="list-unstyled about-us-list">
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-magic utob-font" style="color:#0e99b6;"></i> افزایش حجم / پروتز</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-stethoscope utob-font" style="color:#0e99b6;"></i> لیپوساکشن</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-magic utob-font" style="color:#0e99b6;"></i> رینوپلاستی</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-stethoscope utob-font" style="color:#0e99b6;"></i>جراحی پلکی</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="slz-shortcode group-list ">
                                                                        <ul class="list-unstyled about-us-list">
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-magic utob-font" style="color:#0e99b6;"></i>جراحی بینی</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-stethoscope utob-font" style="color:#0e99b6;"></i> ابدومینوپلاستی</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-magic utob-font" style="color:#0e99b6;"></i> تزریق ژل و چربی</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-stethoscope utob-font" style="color:#0e99b6;"></i> بوتاکس</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="slz-shortcode group-list ">
                                                                        <ul class="list-unstyled about-us-list">
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-magic utob-font" style="color:#0e99b6;"></i>جراحی زیبایی پلک</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-stethoscope utob-font" style="color:#0e99b6;"></i>جراحی زیبایی‌ گوش</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-magic utob-font" style="color:#0e99b6;"></i>برجسته‌سازی گونه</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text"><i class="fa fa-stethoscope utob-font" style="color:#0e99b6;"></i> کشیدن صورت</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div> <a href="/treatments" class="slz-shortcode btn btn-maincolor btn-maincolor-15450137705e1ec8d10dfcd mrm mbm">مشاهده تمامی درمان ها</a></div>
                                            </div>
                                        </div>
                                        <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-5">
                                            <div class="vc_column-inner vc_custom_1463109325289">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left wpb_animate_when_almost_visible wpb_appear appear vc_custom_1463027357222">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper vc_box_border_grey"> <img style="margin-top: 70px; Border-radius:25px;" width="600" height="367" src="wp-content/uploads/2016/07/amal2.jpeg" class="vc_single_image-img attachment-full" alt="about-us-1" sizes="(max-width: 450px) 100vw, 450px" /></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1463096648310">
                                        <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-7">
                                            <div class="vc_column-inner vc_custom_1468574547376">
                                                <div class="wpb_wrapper">
                                                    <div class="slz-shortcode block-title-16339022535e1ec8d10ad08 ">
                                                        <div class="group-title">
                                                            <div class="sub-title">
                                                                <p class="text">پکیج ها</p> <i class="icons flaticon-people"></i></div>
                                                            <h2 class="main-title">پکیج ها</h2></div>
                                                    </div>
                                                    <div class="lm-tabel">
                                                        <div class="lm-item lm-item-2">
                                                            <div class="lm-item-top"><span style="font-family: iranyekan" class="lm-item-title lm-underline">مقدماتی</span>
                                                                <div class="lm-item-price"><i class="icon-dollar"></i>1200 دلار</div>
                                                            </div>
                                                            <div class="lm-item-body">
                                                                <div class="lm-item-desc"><strong>CUSTOM AIR</strong>
                                                                    <p>Air, air, air</p>
                                                                </div>
                                                                <ul class="lm-item-list">
                                                                    <li>امکان شماره ۱<i class="icon-cancel"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-cancel"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-cancel"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                </ul>
                                                                <div class="lm-item-link">
                                                                    <a href="#">
                                                                        <svg width="152" height="52" xmlns="http://www.w3.org/2000/svg">
                                                                            <defs>
                                                                                <lineargradient id="lm-gr-2" x1="0" y1="0" x2="100%" y2="100%">
                                                                                    <stop offset="0%" stop-color="#7E052D"></stop>
                                                                                    <stop offset="100%" stop-color="#F6266B"></stop>
                                                                                </lineargradient>
                                                                            </defs>
                                                                            <rect x="1" y="1" width="150" height="50" rx="25" fill="#fff" stroke="url(#lm-gr-2)" stroke-width="1"></rect>
                                                                            <text x="70%" y="65%" fill="url(&quot;#lm-gr-2&quot;)">انتخاب</text>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="lm-item-bottom">اقتصادی</div>
                                                        </div>
                                                        <div class="lm-item lm-item-1">
                                                            <div class="lm-item-top"><span style="font-family: iranyekan" class="lm-item-title lm-underline">پیشرفته</span>
                                                                <div class="lm-item-price"><i class="icon-dollar"></i>2300 دلار</div>
                                                            </div>
                                                            <div class="lm-item-body">
                                                                <div class="lm-item-desc"><strong>CUSTOM AIR</strong>
                                                                    <p>Air, air, air</p>
                                                                </div>
                                                                <ul class="lm-item-list">
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-cancel"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-cancel"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-cancel"></i></li>
                                                                </ul>
                                                                <div class="lm-item-link">
                                                                    <a href="#">
                                                                        <svg width="152" height="52" xmlns="http://www.w3.org/2000/svg">
                                                                            <defs>
                                                                                <lineargradient id="lm-gr-1" x1="0" y1="0" x2="100%" y2="100%">
                                                                                    <stop offset="0%" stop-color="#241326"></stop>
                                                                                    <stop offset="100%" stop-color="#85468C"></stop>
                                                                                </lineargradient>
                                                                            </defs>
                                                                            <rect x="1" y="1" width="150" height="50" rx="25" fill="#fff" stroke="url(#lm-gr-1)" stroke-width="1"></rect>
                                                                            <text x="70%" y="65%" fill="url(&quot;#lm-gr-1&quot;)">انتخاب</text>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="lm-item-bottom">انتخاب اکثر مشتریان</div>
                                                        </div>
                                                        <div class="lm-item lm-item-3">
                                                            <div class="lm-item-top"><span style="font-family: iranyekan" class="lm-item-title lm-underline">حرفه ای</span>
                                                                <div class="lm-item-price"><i class="icon-dollar"></i>3100 دلار</div>
                                                            </div>
                                                            <div class="lm-item-body">
                                                                <div class="lm-item-desc"><strong>CUSTOM AIR</strong>
                                                                    <p>Air, air, air</p>
                                                                </div>
                                                                <ul class="lm-item-list">
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                    <li>امکان شماره ۱<i class="icon-ok"></i></li>
                                                                </ul>
                                                                <div class="lm-item-link">
                                                                    <a href="#">
                                                                        <svg width="152" height="52" xmlns="http://www.w3.org/2000/svg">
                                                                            <defs>
                                                                                <lineargradient id="lm-gr" x1="0" y1="0" x2="100%" y2="100%">
                                                                                    <stop offset="0%" stop-color="#1A466F"></stop>
                                                                                    <stop offset="100%" stop-color="#4D93D5"></stop>
                                                                                </lineargradient>
                                                                            </defs>
                                                                            <rect x="1" y="1" width="150" height="50" rx="25" fill="#fff" stroke="url(#lm-gr)" stroke-width="1"></rect>
                                                                            <text x="70%" y="65%" fill="url(&quot;#lm-gr&quot;)">انتخاب</text>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="lm-item-bottom">مناسب حرفه ای ها</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid slz-bg_parallax vc_custom_1463027505022 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="slz-shortcode block-title-20999045555e1ec8d11193a ">
                                                        <div class="group-title">
                                                            <div class="sub-title">
                                                                <p class="text">برترین مراکز درمان</p><i class="icons flaticon-people"></i></div>
                                                            <h2 class="main-title">بیمارستان ها</h2></div>
                                                    </div>
                                                    <div class="slz-shortcode tours-wrapper block-10534581085e1ec8d111dc9">
                                                        <div class="tours-content">
                                                            <div class="tours-list tours-carousel" data-count="3">
                                                                <div class="tours-layout post-588 slzexploore_tour">
                                                                    <div class="image-wrapper">
                                                                        <a class="link" href="/hospital-view"><img width="400" height="270" src="wp-content/uploads/2016/05/parsian.jpg" class="img-responsive" alt="coast-863378_960_7201" sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                        <div class="title-wrapper"><a href="/hospital-view" class="title">بیمارستان فوق تخصصی پارسیان</a><i class="icons flaticon-circle"></i></div>
                                                                        <div class="ribbon-sale"><i class="fa fa-bolt"></i><span>بهترین</span></div>
                                                                    </div>
                                                                    <div class="content-wrapper">
                                                                        <ul class="list-info list-inline list-unstyle">
                                                                            <li class="view"><a href="" class="link"><i class="icons fa fa-eye"></i><span class="text number utob-byekan">11375</span></a></li>
                                                                            <li class="wishlist"><a href="" class="link list-wist" data-item="588"><i class="icons fa fa-heart"></i><span class="text number utob-byekan">0</span></a></li>
                                                                            <li class="share"><a href="javascript:void(0);" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                                                <ul class="share-social-list">
                                                                                    <li>
                                                                                        <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fmadrid-tour%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-facebook"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://twitter.com/intent/tweet?text=Madrid+Tour&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fmadrid-tour%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-twitter"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fmadrid-tour%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-google-plus"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="comment"><a href="" class="link"><i class="icons fa fa-comment"></i><span class="text number utob-byekan">5/1</span></a></li>
                                                                        </ul>
                                                                        <div class="content">
                                                                            <div class="title">
                                                                                <div class="price"> <sup>شهر </sup><span class="number">تهران</span></div>
                                                                            </div>
                                                                            <div class="text">بیمارستان ۱۲۰ تختخوابی جم یکی از مجهز ترین بیمارستان های کشورمی باشد. این بیمارستان از سال ۴۷ شمسی تاسیس شده و تا به امروز بیش از یک میلیون بیمار با استفاده از امکانات این بیمارستان بهبودی حاصل کردند. بیمارستان جم شامل بخش های جراحی، داخلی و ...</div>
                                                                            <div class="group-btn-tours"><a href="" class="left-btn">بیشتر بخوانید</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tours-layout post-155 slzexploore_tour">
                                                                    <div class="image-wrapper">
                                                                        <a class="link" href="/hospital-view"><img width="400" height="270" src="wp-content/uploads/2016/05/laleh.jpg" class="img-responsive" alt="bg-section-banner-1" sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                        <div class="title-wrapper"><a href="/hospital-view" class="title"> بیمارستان فوق تخصصی لاله</a><i class="icons flaticon-circle"></i></div>
                                                                    </div>
                                                                    <div class="content-wrapper">
                                                                        <ul class="list-info list-inline list-unstyle">
                                                                            <li class="view"><a href="" class="link"><i class="icons fa fa-eye"></i><span class="text number utob-byekan">8633</span></a></li>
                                                                            <li class="wishlist"><a href="" class="link list-wist" data-item="155"><i class="icons fa fa-heart"></i><span class="text number utob-byekan">1</span></a></li>
                                                                            <li class="share"><a href="javascript:void(0);" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                                                <ul class="share-social-list">
                                                                                    <li>
                                                                                        <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fstockholm-city%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-facebook"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://twitter.com/intent/tweet?text=Stockholm+City&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fstockholm-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-twitter"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fstockholm-city%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-google-plus"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="comment"><a href="" class="link"><i class="icons fa fa-comment"></i><span class="text number utob-byekan">3/1</span></a></li>
                                                                        </ul>
                                                                        <div class="content">
                                                                            <div class="title">
                                                                                <div class="price"> <sup>شهر </sup><span class="number">تهران</span></div>
                                                                            </div>
                                                                            <div class="text">بیمارستان فوق تخصصی ۱۰۰۰ تختخوابی میلاد یکی از بهترین و مجهز ترین بیمارستان های ایران می باشد. این بیمارستان شامل بخش های جراحی قلب، آنژیوگرافی کرونر، عروق مغزی و پریفرال، سی تی اسکن، طب هسته ای، پلاسما فرزیس و….</div>
                                                                            <div class="group-btn-tours"><a href="" class="left-btn">بیشتر بخوانید</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tours-layout post-152 slzexploore_tour">
                                                                    <div class="image-wrapper">
                                                                        <a class="link" href="/hospital-view"><img width="400" height="270" src="wp-content/uploads/2016/05/erfan.jpg" class="img-responsive" alt="City-of-Rome-Great-View" sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                        <div class="title-wrapper"><a href="/hospital-view" class="title"> بیمارستان فوق تخصصی عرفان</a><i class="icons flaticon-circle"></i></div>
                                                                    </div>
                                                                    <div class="content-wrapper">
                                                                        <ul class="list-info list-inline list-unstyle">
                                                                            <li class="view"><a href="" class="link"><i class="icons fa fa-eye"></i><span class="text number utob-byekan">5383</span></a></li>
                                                                            <li class="wishlist"><a href="" class="link list-wist" data-item="152"><i class="icons fa fa-heart"></i><span class="text number utob-byekan">1</span></a></li>
                                                                            <li class="share"><a href="javascript:void(0);" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                                                <ul class="share-social-list">
                                                                                    <li>
                                                                                        <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Froma-city%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-facebook"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://twitter.com/intent/tweet?text=Roma+City&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Froma-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-twitter"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Froma-city%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-google-plus"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="comment"><a href="" class="link"><i class="icons fa fa-comment"></i><span class="text number utob-byekan">2/1</span></a></li>
                                                                        </ul>
                                                                        <div class="content">
                                                                            <div class="title">
                                                                                <div class="price"> <sup>شهر </sup><span class="number">تهران</span></div>
                                                                            </div>
                                                                            <div class="text">بیمارستان خصوصی دی از سال ۱۳۷۰ آغاز به کار کرده و در ۱۰ طبقه و ۲۰۰ تختخواب به بیماران خدمت می کند. اکثر مراجعین بیمارستان دی خانم های باردار هستند و برای زایمان به این بیمارستان مراجعه می کنند و می توان گفت بیمارستان دی یکی از بهترین و ...</div>
                                                                            <div class="group-btn-tours"><a href="" class="left-btn">بیشتر بخوانید</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tours-layout post-148 slzexploore_tour">
                                                                    <div class="image-wrapper">
                                                                        <a class="link" href="/hospital-view"><img width="400" height="270" src="wp-content/uploads/2016/05/bahhman.jpg" class="img-responsive" alt="shanghaicity" sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                        <div class="title-wrapper"><a href="/hospital-view" class="title">بیمارستان فوق تخصصی بهمن</a><i class="icons flaticon-circle"></i></div>
                                                                    </div>
                                                                    <div class="content-wrapper">
                                                                        <ul class="list-info list-inline list-unstyle">
                                                                            <li class="view"><a href="" class="link"><i class="icons fa fa-eye"></i><span class="text number utob-byekan">2755</span></a></li>
                                                                            <li class="wishlist"><a href="" class="link list-wist" data-item="148"><i class="icons fa fa-heart"></i><span class="text number utob-byekan">0</span></a></li>
                                                                            <li class="share"><a href="javascript:void(0);" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                                                <ul class="share-social-list">
                                                                                    <li>
                                                                                        <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fshanghai-city%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-facebook"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://twitter.com/intent/tweet?text=Shanghai+City&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fshanghai-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-twitter"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Fshanghai-city%2F" class="link-social" onclick="window.open(this.href, 'Share Window','left=50,top=50,width=600,height=350,toolbar=0'); return false;"> <i class="icons fa fa-google-plus"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="comment"><a href=" class=" link "><i class="icons fa fa-comment "></i><span class="text number utob-byekan ">4/1</span></a></li></ul><div class="content "><div class="title "><div class="price "> <sup>شهر </sup><span class="number ">تهران</span></div></div><div class="text ">بیمارستان فجر که بیمارستان ارتش جمهوری اسلامی ایران می باشد یک نمونه بهترین بیمارستان تهران است که در ۶ طبقه و با ۲۸ درمانگاه فوق تخصصی روزانه حدود ۳۰۰۰ بیمار و مراجعه کننده دارد. این بیمارستان ۱۱۶ تخت فعال دارد و ...</div><div class="group-btn-tours "><a href="/hospital-view " class="left-btn ">بیشتر بخوانید</a></div></div></div></div><div class="tours-layout post-146 slzexploore_tour "><div class="image-wrapper "> <a class="link " href=" "><img width="400 " height="270 " src="wp-content/uploads/2016/05/kosar.jpg " class="img-responsive " alt="du-lich-tokyo " sizes="(max-width: 400px) 100vw, 400px "/></a><div class="title-wrapper "><a href="/hospital-view " class="title "> بیمارستان فوق تخصصی کوثر</a><i class="icons flaticon-circle "></i></div></div><div class="content-wrapper "><ul class="list-info list-inline list-unstyle "><li class="view "><a href=" " class="link "><i class="icons fa fa-eye "></i><span class="text number utob-byekan ">2279</span></a></li><li class="wishlist "><a href=" " class="link list-wist " data-item="146 "><i class="icons fa fa-heart "></i><span class="text number utob-byekan ">0</span></a></li><li class="share "><a href="javascript:void(0); " class="link "><i class="icons fa fa-share-alt "></i></a><ul class="share-social-list "><li> <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Ftokyo-city%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-facebook "></i></a></li><li> <a href="https://twitter.com/intent/tweet?text=Tokyo+City&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Ftokyo-city%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-twitter "></i></a></li><li> <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Ftours%2Ftokyo-city%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-google-plus "></i></a></li></ul></li><li class="comment "><a href=" " class="link "><i class="icons fa fa-comment "></i><span class="text number utob-byekan ">5/1</span></a></li></ul><div class="content "><div class="title "><div class="price "> <sup>شهر </sup><span class="number ">تهران</span></div></div><div class="text ">بیمارستان فوق تخصصی رازی تنها بیمارستان تخصصی بیماری های پوستی در کشور است. این بیمارستان ۱۲۲ تختخواب فعال دارد و بیماران پوستی از سراسر کشور به این بیمارستان مراجعه می کنند. بیمارستان رازی شامل بخش های درمانگاه پوست و ...</div><div class="group-btn-tours "><a href="/hospital-view " class="left-btn ">بیشتر بخوانید</a></div></div></div></div></div></div></div><div class="vc_empty_space " style="height: 70px "><span class="vc_empty_space_inner "></span></div><div class="vc_row wpb_row vc_inner vc_row-fluid "><div class="wpb_column vc_column_container vc_col-sm-4 "><div class="vc_column-inner "><div class="wpb_wrapper "></div></div></div><div class="text-center wpb_column vc_column_container vc_col-sm-4 "><div class="vc_column-inner "><div class="wpb_wrapper "><a href="/Hospitals " class="slz-shortcode btn btn-maincolor btn-maincolor-4943618765e1ec8d423916 ">جهت مشاهده تمامی بیمارستان ها کلیک کنید</a></div></div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-4 "><div class="vc_column-inner "><div class="wpb_wrapper "></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix "></div>
                                                        <div data-vc-full-width="true " data-vc-full-width-init="false " data-vc-stretch-content="true " class="vc_row wpb_row vc_row-fluid vc_row-no-padding "><div class="wpb_column vc_column_container vc_col-sm-12 "><div class="vc_column-inner "><div class="wpb_wrapper "><div class="slz-shortcode videos layout-1 banner-20897404385e1ec8d424fb1 "><div class="container "><div class="row "><div class="col-md-5 "><div class="video-wrapper padding-top padding-bottom ">
                                                          <div class="video-wrapper-title "><h5 class="sub-title "> چرا <strong> ایران </strong> و یوتاب مد؟</h5><h2 class="title ">مزایا درمان در ایران</h2><div class="text ">ایران در جهان به خدمات پزشکی با کیفیت مخصوصا جراحیهای زیبایی شناخته شده است. به عنوان مثال در سال 2017 خدمات تورسیم پزشکی درآمدی بالغ بر 1.7 میلیارد دلار درآمد داشته است که این عدد در سال 2020 رشدی تا 4 برابر خواهد داشت. ایران کشور مقصد توریست هایی است که برای درمان هایی همچون جراحی بینی، عمل های لاغری، کاشت مو، جراحی سینه، اسلیو معده ، چشم پزشکی و دندانپزشکی است. شاید مهمترین علت تمایل افراد به استفاده از خدمات پزشکی ایران را هزینه بسیار پایین تر آن با حفظ کیفیت مشابه با برترین کشور های دنیا دانست. به عنوان مثال پکیج کامل عمل بینی در ایران 90% ارزانتر از ایلات متحده است.
امکانات پیشرفته پزشکی، کادر درمانی متخصص که تحت آموزش آخرین متدهای پزشکی جهان قرار گرفته اند نیز کیفیت خدمات پزشکی ایران را تضمین میکنند.
</div></div> <a href="/about " class="btn btn-maincolor ">بیشتر بخوانید</a></div></div><div class="col-md-7 "><div class="video-thumbnail "><div class="video-bg "><img src="wp-content/uploads/2016/05/pas.jpg " alt=" " class="img-responsive "></div><div class="video-button-play "><i class="icons fa fa-play "></i></div><div class="video-button-close "></div> <iframe src=" " allowfullscreen="allowfullscreen " class="video-embed "></iframe></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix "></div><div data-vc-full-width="true " data-vc-full-width-init="false " class="vc_row wpb_row vc_row-fluid slz-bg_parallax vc_custom_1463028221790 vc_row-has-fill "><div class="wpb_column vc_column_container vc_col-sm-12 "><div class="vc_column-inner "><div class="wpb_wrapper "><div class="slz-shortcode block-title-5219010795e1ec8d427f08 "><div class="group-title "><div class="sub-title "><p class="text ">رفاه شما را تضمین می کنیم</p><i class="icons flaticon-people "></i></div><h2 class="main-title ">هتل ها</h2></div></div><div class="hotels-content hotel-result-main result-body slz-shortcode "><div class="loading "><div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div></div><div class="main-right f-none hotel-result-content sc-block-7758929165e1ec8d428400 "><div class="hotel-list "><div class="row "><div class="col-md-6 post-186 slzexploore_hotel "><div class="hotels-layout "><div class="image-wrapper "> <a class="link " href=" "><img width="800 " height="540 " src="wp-content/uploads/2016/05/plus.jpeg " class="img-responsive " alt="hotelbeauti " sizes="(max-width: 800px) 100vw, 800px "/></a><div class="label-sale "><p class="text ">تخفیف</p><p class="number utob-byekan "> 35%</p></div><div class="ribbon-sale "><i class="fa fa-bolt "></i><span>بهترین</span></div><div class="title-wrapper "> <a href=" " class="title ">هتل اسپیناس پالاس</a><div class="stars stars5 ">5</div></div></div><div class="content-wrapper "><div class="content "><div class="title "><div class="price "><sup>تومان</sup><span class="number utob-byekan ">300,000</span></div></div><div class="text "> توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</div><div class="group-btn-tours "><a href="/hotel-view " class="left-btn ">بیشتر بخوانید</a></div></div><ul class="list-info list-unstyle "><li class="view "><a href=" " class="link "><i class="icons hidden-icon fa fa-eye "></i><span class="number utob-byekan ">8792</span></a></li><li class="wishlist "><a href=" " class="link " data-item="186 "><i class="icons hidden-icon fa fa-heart "></i><span class="text number utob-byekan ">5</span></a></li><li class="comment "><a href=" " class="link "><i class="icons hidden-icon fa fa-comment "></i><span class="number utob-byekan ">3/1</span></a></li><li class="share "><a href="javascript:void(0); " class="link "><i class="icons fa fa-share-alt "></i></a><ul class="share-social-list "><li> <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fedemil-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-facebook "></i></a></li><li> <a href="https://twitter.com/intent/tweet?text=Edemil+Hotel&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fedemil-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-twitter "></i></a></li><li> <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fedemil-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-google-plus "></i></a></li></ul></li><li class="address "><a href="javascript:void(0); " class="link " title=" 111 Bang Rak, Bangkok, Thailand "><i class="icons fa fa-map-marker "></i></a></li></ul></div></div></div><div class="col-md-6 post-185 slzexploore_hotel "><div class="hotels-layout "><div class="image-wrapper "> <a class="link " href=" "><img width="800 " height="540 " src="wp-content/uploads/2016/05/es.jpg " class="img-responsive " alt="316_langham_modern_Exterior " sizes="(max-width: 800px) 100vw, 800px "/></a><div class="title-wrapper "> <a href=" " class="title ">هتل استقلال</a><div class="stars stars5 ">5</div></div></div><div class="content-wrapper "><div class="content "><div class="title "><div class="price "><sup>تومان</sup><span class="number utob-byekan ">300,000</span></div></div><div class="text "> توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</div><div class="group-btn-tours "><a href="/hotel-view " class="left-btn ">بیشتر بخوانید</a></div></div><ul class="list-info list-unstyle "><li class="view "><a href=" " class="link "><i class="icons hidden-icon fa fa-eye "></i><span class="number utob-byekan ">4158</span></a></li><li class="wishlist "><a href=" " class="link " data-item="185 "><i class="icons hidden-icon fa fa-heart "></i><span class="text number utob-byekan ">3</span></a></li><li class="comment "><a href=" " class="link "><i class="icons hidden-icon fa fa-comment "></i><span class="number utob-byekan ">4/0</span></a></li><li class="share "><a href="javascript:void(0); " class="link "><i class="icons fa fa-share-alt "></i></a><ul class="share-social-list "><li> <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fturhal-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-facebook "></i></a></li><li> <a href="https://twitter.com/intent/tweet?text=Turhal+Hotel&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fturhal-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-twitter "></i></a></li><li> <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fturhal-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-google-plus "></i></a></li></ul></li><li class="address "><a href="javascript:void(0); " class="link " title=" 333 Soi Song Prapha, Don Mueang, Bangkok, Thailand "><i class="icons fa fa-map-marker "></i></a></li></ul></div></div></div><div class="col-md-6 post-184 slzexploore_hotel "><div class="hotels-layout "><div class="image-wrapper "> <a class="link " href=" "><img width="800 " height="540 " src="wp-content/uploads/2016/05/eskan.jpg " class="img-responsive " alt="280821 " sizes="(max-width: 800px) 100vw, 800px "/></a><div class="title-wrapper "> <a href=" " class="title ">هتل اسکان الوند</a><div class="stars stars4 ">4</div></div></div><div class="content-wrapper "><div class="content "><div class="title "><div class="price "><sup>تومان</sup><span class="number utob-byekan ">200,000</span></div></div><div class="text "> توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</div><div class="group-btn-tours "><a href="/hotel-view " class="left-btn ">بیشتر بخوانید</a></div></div><ul class="list-info list-unstyle "><li class="view "><a href=" " class="link "><i class="icons hidden-icon fa fa-eye "></i><span class="number utob-byekan ">7052</span></a></li><li class="wishlist "><a href=" " class="link " data-item="184 "><i class="icons hidden-icon fa fa-heart "></i><span class="text number utob-byekan ">4</span></a></li><li class="comment "><a href=" " class="link "><i class="icons hidden-icon fa fa-comment "></i><span class="number utob-byekan ">5/1</span></a></li><li class="share "><a href="javascript:void(0); " class="link "><i class="icons fa fa-share-alt "></i></a><ul class="share-social-list "><li> <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fkadirly-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-facebook "></i></a></li><li> <a href="https://twitter.com/intent/tweet?text=Kadirly+Hotel&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fkadirly-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-twitter "></i></a></li><li> <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fkadirly-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-google-plus "></i></a></li></ul></li><li class="address "><a href="javascript:void(0); " class="link " title="111 Pirachai Village, Bangkok, Thailand "><i class="icons fa fa-map-marker "></i></a></li></ul></div></div></div><div class="col-md-6 post-172 slzexploore_hotel "><div class="hotels-layout "><div class="image-wrapper "> <a class="link " href=" "><img width="800 " height="540 " src="wp-content/uploads/2016/05/pars.jpg " class="img-responsive " alt="hanoi-top-luxury-hotel " sizes="(max-width: 800px) 100vw, 800px "/></a><div class="title-wrapper "> <a href=" " class="title ">هتل پارسیان</a><div class="stars stars4 ">4</div></div></div><div class="content-wrapper "><div class="content "><div class="title "><div class="price "><sup>تومان</sup><span class="number utob-byekan ">200,000</span></div></div><div class="text "> توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات</div><div class="group-btn-tours "><a href="/hotel-view " class="left-btn ">بیشتر بخوانید</a></div></div><ul class="list-info list-unstyle "><li class="view "><a href=" " class="link "><i class="icons hidden-icon fa fa-eye "></i><span class="number utob-byekan ">5068</span></a></li><li class="wishlist "><a href=" " class="link " data-item="172 "><i class="icons hidden-icon fa fa-heart "></i><span class="text number utob-byekan ">1</span></a></li><li class="comment "><a href=" " class="link "><i class="icons hidden-icon fa fa-comment "></i><span class="number utob-byekan ">2.5/2</span></a></li><li class="share "><a href="javascript:void(0); " class="link "><i class="icons fa fa-share-alt "></i></a><ul class="share-social-list "><li> <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fsarina-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-facebook "></i></a></li><li> <a href="https://twitter.com/intent/tweet?text=Sarina+Hotel&amp;url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fsarina-hotel%2F&amp;via=Exploore+-+Travel%2C+Exploration%2C+Booking+WordPress+Theme " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-twitter "></i></a></li><li> <a href="http://plus.google.com/share?url=http%3A%2F%2Fwp.swlabs.co%2Fexploore%2Faccommodations%2Fsarina-hotel%2F " class="link-social " onclick="window.open(this.href, 'Share Window', 'left=50,top=50,width=600,height=350,toolbar=0'); return false; "> <i class="icons fa fa-google-plus "></i></a></li></ul></li><li class="address "><a href="javascript:void(0); " class="link " title="222 Bang Kabi, Bangkok, Thailand "><i class="icons fa fa-map-marker "></i></a></li></ul></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid "><div class="text-center wpb_column vc_column_container vc_col-sm-12 "><div class="vc_column-inner "><div class="wpb_wrapper "><div class="vc_empty_space " style="height: 40px "><span class="vc_empty_space_inner "></span></div> <a href="/hotels " class="slz-shortcode btn btn-maincolor btn-maincolor-13949671765e1ec8d4446d9 ">جهت مشاهده تمامی هتل ها کلیک کنید</a></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix "></div><div data-vc-full-width="true " data-vc-full-width-init="false " data-vc-stretch-content="true " class="vc_row wpb_row vc_row-fluid vc_custom_1463017194672 vc_row-has-fill vc_row-no-padding "><div class="wpb_column vc_column_container vc_col-sm-12 "><div class="vc_column-inner "><div class="wpb_wrapper "><div class="slz-shortcode travelers travel-id-6932734695e1ec8d4458ba "><div class="container "><div class="row "><div class="col-md-4 "><div class="traveler-wrapper padding-top padding-bottom "><div class="group-title white "><div class="sub-title "><p class="text ">سفری ارزشمند</p><i class="icons flaticon-people "></i></div><h2 class="main-title ">تجربه مشتریان</h2></div></div></div><div class="col-md-8 "><div class="traveler-list "><div class="traveler "><div class="cover-image "><img width="400 " height="200 " src="wp-content/uploads/2016/05/america.jpg " class="img-responsive " alt="cover-image-4 " sizes="(max-width: 400px) 100vw, 400px "/></div><div class="wrapper-content "><div class="avatar "> <img width="200 " height="200 " src="wp-content/uploads/2016/05/avatar-4-200x200.jpg " class="img-responsive " alt="avatar-4 " srcset="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-4.jpg 200w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-4-150x150.jpg 150w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-4-100x100.jpg 100w " sizes="(max-width: 200px) 100vw, 200px "/></div><p class="name ">John Smith</p><p class="address ">نیویورک ، ایالات متحده</p><div class="description ">"<p>جان اسمیت از سفری می گوید که برایش جنبه های معنوی داشت ...</p> "</div>
                                                                </div>
                                                            </div>
                                                            <div class="traveler">
                                                                <div class="cover-image"><img width="400" height="200" src="wp-content/uploads/2016/05/france.png" class="img-responsive" alt="cover-image-3" sizes="(max-width: 400px) 100vw, 400px" /></div>
                                                                <div class="wrapper-content">
                                                                    <div class="avatar"> <img width="200" height="200" src="wp-content/uploads/2016/05/avatar-3-200x200.jpg" class="img-responsive" alt="avatar-3" srcset="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-3.jpg 200w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-3-150x150.jpg 150w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-3-100x100.jpg 100w" sizes="(max-width: 200px) 100vw, 200px" /></div>
                                                                    <p class="name">Taylor Rose</p>
                                                                    <p class="address">پاریس، فرانسه</p>
                                                                    <div class="description">
                                                                        <p>سفری عجیب برای تیلور، در ایران دوست های زیادی پیدا کردم...</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="traveler">
                                                                <div class="cover-image"><img width="400" height="200" src="wp-content/uploads/2016/05/eng.jpg" class="img-responsive" alt="cover-image-2" sizes="(max-width: 400px) 100vw, 400px" /></div>
                                                                <div class="wrapper-content">
                                                                    <div class="avatar"> <img width="200" height="200" src="wp-content/uploads/2016/05/avatar-2-200x200.jpg" class="img-responsive" alt="avatar-2" srcset="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-2.jpg 200w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-2-150x150.jpg 150w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-2-100x100.jpg 100w" sizes="(max-width: 200px) 100vw, 200px" /></div>
                                                                    <p class="name">Kown Jiyong</p>
                                                                    <p class="address">لندن، انگلستان</p>
                                                                    <div class="description">
                                                                        <p>دوست دارم چندین بار دیگر به ایران سفر کنم، شهر های ایران برایم بسیار دیدنی و خاص بود
                                                                            <p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="traveler">
                                                                <div class="cover-image"><img width="400" height="200" src="wp-content/uploads/2016/05/iT.png" class="img-responsive" alt="cover-image-1" sizes="(max-width: 400px) 100vw, 400px" /></div>
                                                                <div class="wrapper-content">
                                                                    <div class="avatar"> <img width="200" height="200" src="wp-content/uploads/2016/05/avatar-1-200x200.jpg" class="img-responsive" alt="avatar-1" srcset="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-1.jpg 200w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-1-150x150.jpg 150w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/avatar-1-100x100.jpg 100w" sizes="(max-width: 200px) 100vw, 200px" /></div>
                                                                    <p class="name">Sandara park</p>
                                                                    <p class="address">روم ، ایتالیا</p>
                                                                    <div class="description">"
                                                                        <p>اگر باز هم برای درمان قصد سفر داشته باشم به ایران میایم...
                                                                            <p>
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

                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1462950433649">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="slz-shortcode news recent_news-15112070285e1ec8d45dd5d">
                                            <div class="news-wrapper">
                                                <div class="group-title">
                                                    <div class="sub-title">
                                                        <p class="text">از جدیدترین اخبار یوتاب مد باخبر شوید</p><i class="icons flaticon-people"></i></div>
                                                    <h2 class="main-title">مقالات</h2></div>
                                                <div class="news-content margin-top70">
                                                    <div class="news-list" data-autospeed=6000 data-speed=700>
                                                        <div class="new-layout post-249 post type-post status-publish format-video has-post-thumbnail hentry category-adventure category-discover category-explore tag-adventure tag-explore tag-traveler post_format-post-format-video">
                                                            <div class="image-wrapper">
                                                                <a href="" class="link"><img width="670" height="440" src="wp-content/uploads/2016/05/taqzie.jpeg" class="img-responsive" alt="249" /></a>
                                                            </div>
                                                            <div class="content-wrapper"> <a href="" class="title heading utob-byekan">قبل از جراحی زیبایی بینی چه رژیم غذایی را رعایت کنیم؟</a>
                                                                <ul class="info list-inline list-unstyled">
                                                                    <li><a href="" class="link utob-byekan">28 دی ماه 1398</a></li>
                                                                    <li><a href="" class="link"><span>اضافه شده توسط شیرازی</span></a></li>
                                                                </ul>
                                                                <div class="text">
                                                                    <p>تغذیه مناسب باعث سرعت در بهبودی و کاهش خطر ابتلا به عفونت می شود. بنابراین در هفته های آخر نزدیک به عمل جراحی، رعایت رژیم غذایی سالم برای بیماران مهم است. به طورکلی مصرف سبزیجات و میوه ها ، دانه های غلات حاوی پروتئین و همینطور مکمل های تغذیه بسیار مفید می باشد . مصرف مکمل های خاصی از جمله ویتامین A، ویتامین C و بروملین را به کسانی که قصد انجام عمل زیبایی بینی را دارند، توصیه میشود . همچنین بعضی از مواد غذایی باعث کند شدن روند درمان میشود . به طور خاص، بیماران باید مکمل های حاوی ویتامین E، زنجبیل، گینگو و جینسنگ را استفاده نکنند؛ به علاوه برخی از مکملهای هومیوپاتی و گیاهی می توانند عوارض ناشی از بیهوشی را ایجاد کنند، بنابراین بیماران قبل از هر تغزیه اضافه ای باید با پزشک خود مشورت کنند.
                                                                    </p>
                                                                    <p>در مورد مصرف الکل ، چون الکل می تواند توانایی کبد برای متابولیزه کردن صحیح را تحت تاثیر قرار دهد، بسیاری از پزشکان توصیه می کنند بیماران در هفته های پیش از جراحی خود، از نوشیدن مشروبات الکلی نیز خودداری کنند.</p>
                                                                </div> <a href="" class="btn btn-maincolor">بیشتر بخوانید</a></div>
                                                        </div>
                                                        <div class="new-layout post-220 post type-post status-publish format-image has-post-thumbnail hentry category-discover category-the-world category-travel tag-adventure tag-europe tag-explore post_format-post-format-image">
                                                            <div class="image-wrapper">
                                                                <a href="" class="link"><img width="670" height="440" src="wp-content/uploads/2016/05/cheshm.jpg" class="img-responsive" alt="about-us-1" /></a>
                                                            </div>
                                                            <div class="content-wrapper"> <a href="" class="title heading">عمل لیزیک و قرنیه ی نازک چشم</a>
                                                                <ul class="info list-inline list-unstyled">
                                                                    <li><a href="" class="link utob-byekan">29 دی ماه 1398</a></li>
                                                                    <li><a href="" class="link"><span>اضافه شده توسط شیرازی</span></a></li>
                                                                </ul>
                                                                <div class="text">
                                                                    <p> در عمل لیزیک چشم ، بینایی با تغییر شکلِ قرنیه (سطح جلویی چشم) ، با یک لیزر فوق العاده دقیق بهبود میبخشد . در طی این فرآیند ، برخی از بافت های قرنیه حذف می گردند و به بیانی دیگر لایه ای بسیار نازک از سطح قرنیه برداشته شده و قرنیه ی چشم تصحیح میشود. در طی معاینات و مشاوره پیش از عمل جراحی لیزیک ، اندازه گیری های دقیق قرنیه شما ، توسط دستگاههای پیشرفته انجام میشود تا اطمینان حاصل گردد شما دارای قرنیه نرمال و ضخامت قرنیه مناسب برای ایمن بودنِ عمل لیزیک هستید.
                                                                    </p>
                                                                    <p>اگر دارای قرنیه ای نازک هستید و یا دچار اختلالات قرنیه میباشید، ممکن است جهت حذف بافت قرنیه برای تصحیح بیناییِ خود ، دچار مشکل گردید و ممکن است جراح تشخیص دهد که شما دارای شرایط انجام عمل لیزیک نمیباشید. همچنین ممکن است عادت بد مالش بیش از حد چشم ،باعث نازک شدن قرنیه شما شده باشد. و این نازکی قرنیه ، مانع عمل جراحی لیزیک گردد. مالیدن چشم باعث قوز قرنیه یا کراتوکونوس میشود .</p>
                                                                </div> <a href="" class="btn btn-maincolor">بیشتر بخوانید</a></div>
                                                        </div>
                                                        <div class="new-layout post-208 post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-discover category-explore category-the-world category-travel tag-dream tag-europe tag-traveller">
                                                            <div class="image-wrapper">
                                                                <a href="" class="link"><img width="670" height="440" src="wp-content/uploads/2016/05/moo.jpg" class="img-responsive" alt="Luxury-Private-Jet" /></a>
                                                            </div>
                                                            <div class="content-wrapper"> <a href="" class="title heading utob-byekan">روش های کاشت مو</a>
                                                                <ul class="info list-inline list-unstyled">
                                                                    <li><a href="" class="link utob-byekan">14دی ماه 1398</a></li>
                                                                    <li><a href="" class="link"><span>اضافه شده توسط رحمانی</span></a></li>
                                                                </ul>
                                                                <div class="text">
                                                                    <p> روش FIT :عمل برداشت در این روش از ناحیه بانک مو یعنی پشت سر و بالای گوش ها و به وسیله پانچ صورت خواهد گرفت و سپس به صورت مجدد به وسیله پانچ عمل پیوند صورت می گیرد. با توجه به نیاز هر فرد از هر 5-3 واحد فولیکولی که در بانک مو وجود دارد یکی خارج خواهد شد. این روش کاشت در برخی از بخش های خود شبیه روش FUT است که با ایجاد شکاف های ریز، گرافت ها کاشته خواهند شد. در روش غیر ترکیبی این روش مناسب افرادی خواهد بود که ناحیه کاشت موی آن ها محدود و کوچک است و یا افرادی که کاشت مو را برای بخش هایی مثل صورت، ابرو و زخم های قدیمی می خواهند.</p>
                                                                    <p>روش FUT: در این روش برداشت مو از نوار کوچکی در ناحیه پشت سر صورت می گیرد که تحت بی حسی موضعی قرار گرفته است و تعداد 2500-1500 گرافت و 9000-7000 تار مو دارد. محل عمل با ظرافت خاصی ترمیم می شود </p>
                                                                </div> <a href="" class="btn btn-maincolor">بیشتر بخوانید</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="slz-shortcode banner-sale-1 ">
                                            <div class="banner-left">
                                                <div class="title-box">
                                                    <h2 class="title-overlay title-1 padding-top"> تخفیف</h2>
                                                    <h2 class="title-overlay title-2">شگفت انگیز</h2>
                                                    <h3 class="title-overlay title-3 padding-bottom"> یوتاب مد</h3></div>
                                            </div>
                                            <div class="banner-right">
                                                <div class="text-salebox">
                                                    <div class="text-left">
                                                        <div class="sale-box">
                                                            <div class="sale-box-top">
                                                                <h2 class="number utob-byekan">50</h2> <span class="sup-1">%</span> <span class="sup-2"></span></div>
                                                            <h2 class="text-sale">تخفیف</h2></div>
                                                    </div>
                                                    <div class="text-right">
                                                        <h5 class="title"></h5>
                                                        <p class="text"> توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف توضیحات درباره تخفیف</p>
                                                        <div class="group-button"><a href="#" class="btn btn-maincolor btn-maincolor1-12960595115e1ec8d471431">اکنون ثبت کنید</a><a href="#" class="btn btn-maincolor btn-maincolor2-12960595115e1ec8d471431" style="background-color:#ffffff!important; color:#3c3c3c;">بیشتر بخوانید</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1463037646466 vc_row-has-fill">
                            <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-5">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="slz-shortcode block-title-20933987305e1ec8d472f4d ">
                                            <div class="group-title">
                                                <div class="sub-title">
                                                    <p class="text">یوتاب مد در جهان</p> <i class="icons flaticon-people"></i></div>
                                                <h2 class="main-title">پراکندگی جغرافیایی مشتریان</h2></div>
                                            <p> مشتریان یوتاب مد از اقصی نقاط جهان جهت طی مراحل درمان به ایران سفر میکنند</p>
                                        </div>
                                        <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>
                                        <div class="slz-shortcode a-fact-list">
                                            <div class="group-list ">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <p class="text utob-byekan">حدود 20 آمریکایی در سال ۲۰۱8</p>
                                                    </li>
                                                    <li>
                                                        <p class="text utob-byekan">حدود 9 برزیلی در سال 2017</p>
                                                    </li>
                                                    <li>
                                                        <p class="text utob-byekan">حدود 23 تایلندی در سال های 2016 و 2017</p>
                                                    </li>
                                                    <li>
                                                        <p class="text utob-byekan">حدود 10 مراجعه کننده از کشور ترکیه در سال 2017</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div> <a href="#" class="slz-shortcode btn btn-maincolor btn-maincolor-7580382645e1ec8d473b61 ">بیشتر بخوانید</a></div>
                                </div>
                            </div>
                            <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-7">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="slz-shortcode sc_gallery gallery_1603767625e1ec8d474506" data-id="gallery_1603767625e1ec8d474506">
                                            <div class="a-fact-image-wrapper">
                                                <div class="a-fact-image"> <a href="#" class="icons icons-1"><i class="fa fa-users"></i></a> <img width="1171" height="443" src="wp-content/uploads/2016/05/warea-5.png" class="attachment-full size-full" alt="warea-5" sizes="(max-width: 1171px) 100vw, 1171px" /></div>
                                                <div class="a-fact-image"> <a href="#" class="icons icons-2"><i class="fa fa-users"></i></a> <img width="1171" height="443" src="wp-content/uploads/2016/05/warea-2.png" class="attachment-full size-full" alt="warea-2" sizes="(max-width: 1171px) 100vw, 1171px" /></div>
                                                <div class="a-fact-image"> <a href="#" class="icons icons-3"><i class="fa fa-users"></i></a> <img width="1171" height="443" src="wp-content/uploads/2016/05/warea-4.png" class="attachment-full size-full" alt="warea-4" sizes="(max-width: 1171px) 100vw, 1171px" /></div>
                                                <div class="a-fact-image"> <a href="#" class="icons icons-4"><i class="fa fa-users"></i></a> <img width="1171" height="443" src="wp-content/uploads/2016/05/warea-1.png" class="attachment-full size-full" alt="warea-1" sizes="(max-width: 1171px) 100vw, 1171px" /></div>
                                                <div class="a-fact-image"> <a href="#" class="icons icons-5"><i class="fa fa-users"></i></a> <img width="1171" height="443" src="wp-content/uploads/2016/05/warea-3.png" class="attachment-full size-full" alt="warea-3" sizes="(max-width: 1171px) 100vw, 1171px" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="slz-shortcode contact-6023684715e1ec8d47cbee ">
                                            <div class="contact style-1">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="wrapper-contact-style">
                                                            <div data-wow-delay="0.5s" class="contact-wrapper-images wow fadeInLeft"> <img width="276" height="536" src="wp-content/uploads/2016/05/contact-people.png" class="img-responsive attachment-full" alt="contact-people" srcset="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/contact-people.png 276w, http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/contact-people-154x300.png 154w" sizes="(max-width: 276px) 100vw, 276px" /></div>
                                                            <div class="col-lg-6 col-sm-7 col-lg-offset-4 col-sm-offset-5">
                                                                <div data-wow-delay="0.4s" class="contact-wrapper padding-top padding-bottom wow fadeInRight">
                                                                    <div class="contact-box">
                                                                        <h5 class="title">باما در ارتباط باشید</h5>
                                                                        <p class="text">لحظاتی خوش در کنار یوتاب مد</p>
                                                                        <div role="form" class="wpcf7" id="wpcf7-f46-p45-o1" lang="en" dir="ltr">
                                                                            <div class="screen-reader-response"></div>
                                                                            <form action="http://wp.swlabs.co/exploore/?d=rtl#wpcf7-f46-p45-o1" method="post" class="wpcf7-form contact-form" novalidate="novalidate" id="contact-form-6023684715e1ec8d47cbee">
                                                                                <div style="display: none;">
                                                                                    <input type="hidden" name="_wpcf7" value="46" />
                                                                                    <input type="hidden" name="_wpcf7_version" value="4.5.1" />
                                                                                    <input type="hidden" name="_wpcf7_locale" value="en" />
                                                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f46-p45-o1" />
                                                                                    <input type="hidden" name="_wpnonce" value="3d209936a5" />
                                                                                </div>
                                                                                <p> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-input" aria-required="true" aria-invalid="false" placeholder="نام و نام خانوادگی"/></span><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control form-input" aria-required="true" aria-invalid="false" placeholder="آدرس ایمیل"/></span><span class="wpcf7-form-control-wrap your-subject"><textarea name="your-subject" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control form-input" aria-required="true" aria-invalid="false" placeholder="پیام خود را وارد کنید"></textarea></span></p>
                                                                                <div class="contact-submit">
                                                                                    <input type="submit" value="ارسال پیام" class="wpcf7-form-control wpcf7-submit btn btn-slide" />
                                                                                </div>
                                                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                            </form>
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
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script>
    (function() {
        jQuery(document).ready(function() {
            var arrItems;
            arrItems = jQuery('.lm-item');
            return arrItems.hover(function() {
                return arrItems.addClass('blur');
            }, function() {
                return arrItems.removeClass('blur');
            });
        });
    }).call(this);
</script> @endsection
