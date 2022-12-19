<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="" class="text-dark">
                                <small>پاک کردن همه</small>
                            </a>
                        </span>اطلاعیه ها
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon">
                            <img src="{{ asset('admin/images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="تصویر" /> </div>
                        <p class="notify-details">علیرضا دادگر</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>سلام چطوری؟ در مورد جلسه بعدی...</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">پیام خصوصی از طرف علیرضا
                            <small class="text-muted">1 دقیقه پیش</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="{{ asset('admin/images/users/user-4.jpg') }}" class="img-fluid rounded-circle" alt="تصویر" /> </div>
                        <p class="notify-details">علیرضا دادگر</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>ادمین تو واقعا عالیه</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">ثبت نام کاربر تازه
                            <small class="text-muted">5 ساعت پیش</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">پیام خصوصی از طرف علیرضا
                            <small class="text-muted">4 روز پیش</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-secondary">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">لایک از طرف
                            <b>مدیر</b>
                            <small class="text-muted">13 روز پیش</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    مشاهده همه
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('admin/images/users/user-1.jpg') }}" alt="تصویر کاربر" class="rounded-circle">
                <span class="pro-user-name ml-1">
                                    {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">خوش اومدی!</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>حساب کاربری</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>قفل کردن صفحه</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{ route('auth.logout')}}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>خروج</span>
                </a>

            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ route('panel.index') }}" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset('admin/images/logo-dark.png') }}" alt="تصویر" height="16">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('admin/images/logo-sm.png') }}" alt="تصویر" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">  پنل مدیریت {{config ('app.name')}}</h4>
        </li>

    </ul>
</div>
