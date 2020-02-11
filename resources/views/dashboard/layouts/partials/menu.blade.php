<div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
    <style>
        .m-menu__link-text{
            font-size: 17px!important;
            color: white!important;
        }
    </style>
    <!-- BEGIN: Aside Menu -->
    <div
            id="m_ver_menu"
            class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
            m-menu-vertical="1"
            m-menu-scrollable="1" m-menu-dropdown-timeout="500"
            style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  {{ request()->is('dashboard/index') ? 'm-menu__item--active' : '' }}  "
                aria-haspopup="true"><a
                        href="{{ route('index.index')  }}" class="m-menu__link "><i
                            class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">
                        <span
                                class="m-menu__link-wrap">
                            <span class="m-menu__link-text">داشبورد</span>
                          </span></span></a></li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">ماژول ها</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>


            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('dashboard/post*') ? 'm-menu__item--open' : '' }}  "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon fa fa-stethoscope utob-font"></i><span
                            class="m-menu__link-text">مدیریت درمان ها</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">مدیریت درمان ها</span></span>
                        </li>
                        <li class="m-menu__item {{ request()->is('dashboard/treatment') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('treatment.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">لیست درمان ها</span></a></li>
                        <li class="m-menu__item {{ request()->is('dashboard/post/create') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('treatment.create')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">افزودن درمان جدید</span></a></li>
                    </ul>
                </div>
            </li>






            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('dashboard/course*') ? 'm-menu__item--open' : '' }}  "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon fa fa-user-md"></i><span
                            class="m-menu__link-text">مدیریت پزشک ها</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">مدیریت پزشک ها</span></span>
                        </li>
                        <li class="m-menu__item {{ request()->is('dashboard/doctor') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('doctor.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">لیست پزشک ها</span></a></li>
                        <li class="m-menu__item {{ request()->is('dashboard/doctor/create') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('doctor.create')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">افزودن پزشک جدید</span></a></li>

                    </ul>
                </div>
            </li>






            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('dashboard/category*') ? 'm-menu__item--open' : '' }}  "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon fa fa-hospital-o"></i><span
                            class="m-menu__link-text" style="font-family: BYekan">مدیریت بیمارستان ها</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">مدیریت بیمارستان ها</span></span>
                        </li>
                        <li class="m-menu__item {{ request()->is('dashboard/category') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('category.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">لیست بیمارستان ها</span></a></li>
                        <li class="m-menu__item {{ request()->is('dashboard/category/create') ? 'm-menu__item--active' : '' }}"
                            aria-haspopup="true"><a
                                    href="{{ route('category.create')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">افزودن بیمارستان</span></a></li>
                    </ul>
                </div>
            </li>


            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('dashboard/comment*') ? 'm-menu__item--open' : '' }}  "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon la la-comment"></i><span
                            class="m-menu__link-text">مدیریت نظرات کاربران</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">مدیریت نظرات کاربران</span></span>
                        </li>
                        <li class="m-menu__item {{ request()->is('dashboard/comment') ? 'm-menu__item--active' : '' }}"
                            aria-haspopup="true"><a
                                    href="{{ route('comment.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">مشاهده تمامی نظرات</span></a></li>
                        <li class="m-menu__item {{ request()->is('dashboard/comment/notApproved') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('comment.notApproved')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">نظرات تایید نشده</span></a></li>

                    </ul>
                </div>
            </li>



            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('dashboard/socials*') ? 'm-menu__item--open' : '' }}  "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon socicon-telegram"></i><span
                            class="m-menu__link-text">مدیریت شبکه اجتماعی</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">مدیریت شبکه های اجتماعی</span></span>
                        </li>
                        <li class="m-menu__item {{ request()->is('dashboard/socials') ? 'm-menu__item--active' : '' }}"
                            aria-haspopup="true"><a
                                    href="{{ route('socials.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">مشاهده تمامی ارسال ها</span></a></li>
                        <li class="m-menu__item {{ request()->is('dashboard/socials/create') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('socials.create')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ارسال جدید</span></a></li>

                    </ul>
                </div>
            </li>





            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">مدیریت سیستم</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>


            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('dashboard/user*') ? 'm-menu__item--open' : '' }}  {{ request()->is('dashboard/permissions') ? 'm-menu__item--open' : '' }}  {{ request()->is('dashboard/roles') ? 'm-menu__item--open' : '' }} "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon flaticon-settings"></i><span
                            class="m-menu__link-text">مدیریت کاربران</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">لیست کاربران</span></span>
                        </li>
                        <li class="m-menu__item {{ request()->is('dashboard/user') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('user.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">لیست کاربران</span></a></li>

                        <li class="m-menu__item {{ request()->is('dashboard/user/create') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('user.create')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">افزودن کاربر</span></a></li>

                        <li class="m-menu__item {{ request()->is('dashboard/roles') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('roles.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">گروه های کاربری</span></a></li>


                        <li class="m-menu__item {{ request()->is('dashboard/permissions') ? 'm-menu__item--active' : '' }} "
                            aria-haspopup="true"><a
                                    href="{{ route('permissions.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">سطوح دسترسی</span></a></li>




                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu  {{ request()->is('*setting*') ? 'm-menu__item--open' : '' }} {{ request()->is('*setting*') ? 'm-menu__item--open' : '' }}  "
                aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon flaticon-settings"></i><span
                            class="m-menu__link-text">تنظیمات سیستم</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent  " aria-haspopup="true"><span
                                    class="m-menu__link"><span
                                        class="m-menu__link-text">مدیریت سیستم</span></span>
                        </li>




                        <li class="m-menu__item "
                            {{ request()->is('setting') ? 'm-menu__item--active' : '' }} aria-haspopup="true"><a
                                    href="{{ route('setting.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">تنظیمات اصلی</span></a></li>

                        <li class="m-menu__item "
                            {{ request()->is('statistic*') ? 'm-menu__item--active' : '' }} aria-haspopup="true"><a
                                    href="{{ route('treatment.index')  }}"
                                    class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text"> آمار بازدید</span></a></li>

                    </ul>
                </div>
            </li>


        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->