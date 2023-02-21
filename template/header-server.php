<style>
.kt-grid .kt-header {
    background-color: #ffffff;
}

.rules_tab {
    width: 100%;
    float: left;
    /*border-bottom: 1px solid rgb(234, 235, 235);*/
    padding: 18px 0px 18px;
    margin-bottom: -25px;
    background: #F7F7F8;
}

.rules_tab ul {
    display: flex;
}

.rules_tab .nav.nav-pills .nav-link {
    border: 1px solid #D4D8FB;
}


.header_tabs.nav.nav-pills .nav-item {
    margin-left: 20px;
}

.header_subtabs {
    max-width: 90em;
    margin: auto;
}

.centeralignform {
    max-width: 97em;
    margin: auto;
}

/* #kt_header {
        max-width: 99em;
        margin: auto;
    } */

@media (max-width: 1024px) {
    .centeralignform {
        padding: 0px 10px;
    }
}

@media (min-width: 1025px) {
    .rule_portlet .row.kt-row--col-separator-xl>div {
        border-right: 0px solid rgb(213, 215, 216);
    }

    .rule_portlet .row.kt-row--col-separator-xl>div:last-child {
        border-right: 0;
    }
}

.rule_portlet {
    border: 0px solid rgb(213, 215, 216);
    border-radius: 0px;
    box-shadow: none;
}


@media (min-width: 1025px) {
    .kt-header--fixed:not(.kt-subheader--fixed) .kt-header {
        box-shadow: none;
    }
}

@media (min-width: 1025px) {
    .kt-header--fixed:not(.kt-subheader--fixed) .kt-header {
        border-bottom: 1px solid #ffffff;
        box-shadow: none;
    }
}
</style>
<!-- <div id="kt_header_mobile" class="kt-header-mobile kt-header-mobile--fixed" style="background-color:#ffffff;">
    <div class="kt-header-mobile__logo">
        <a href="javascript:;">
            <img alt="Logo" src="https://startupdev.indiafilings.com/global/common/logo.png" style="height:70px;"
                title="">
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-1x" style="cursor:pointer;">
                        <begin::svg icon="" |="" path:="" var="" www="" preview.keenthemes.com="" metronic=""
                            releases="" 2021-05-14-112058="" theme="" html="" demo1="" dist="" ..="" src="" media=""
                            svg="" icons="" general="" other1.svg="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                    <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                </g>
                            </svg>
                        </begin::svg>
                    </span>
                </span>
            </div>
            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(901px, 5px, 0px);">
                <ul class="kt-nav">
                    <li class="kt-nav__item">
                        <a href="https://startupdev.indiafilings.com/global/dashboard.php" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon-reply"></i>
                            <span class="kt-nav__link-text">Switch Business</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="https://auth.workid.global/auth" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon-user-settings"></i>
                            <span class="kt-nav__link-text">Change Password</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="https://auth.workid.global/login?operation=logout&state=conqhremployee&cid=44ocp96rsvqpk9dus0f6hc5h84"
                            class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon-logout"></i>
                            <span class="kt-nav__link-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed" style="background-color:#fff;">
                <div id="kt_header" class="kt-header kt-header--fixed kt-body" m-minimize-offset="200"
                    m-minimize-mobile-offset="200" style="max-width:99em;margin:auto;">
                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu"
                            class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                            <ul class="kt-menu__nav ">
                                <li class="kt-menu__item kt-menu__item--rel">
                                    <img alt="Logo" src="https://startupdev.indiafilings.com/global/common/logo.png" style="height:70px;" title="">
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="kt-header__topbar">

                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user" style="background: rgb(255 255 255 / 0%);">
                                    <span class="kt-header__topbar-username kt-hidden-mobile" style="color: #5867DD;"><a
                                            href="">Hello,</a></span>
                                    <span class="kt-header__topbar-username kt-hidden-mobile" style="color: #5867DD;"><a
                                            href=""></a></span>

                                </div>
                            </div>
                        </div>
                        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"
                                aria-expanded="false">
                                <span class="kt-header__topbar-icon">
                                    <span class="svg-icon svg-icon-primary svg-icon-1x">
                                        <begin::svg icon="" |="" path:="" var="" www="" preview.keenthemes.com=""
                                            metronic="" releases="" 2021-05-14-112058="" theme="" html="" demo1=""
                                            dist="" ..="" src="" media="" svg="" icons="" general="" other1.svg="">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                </g>
                                            </svg>
                                        </begin::svg>
                                    </span>
                                </span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(1207px, 64px, 0px);min-width:15em;">
                                <ul class="kt-nav">
                                    <li class="kt-nav__item">
                                        <a href="https://startupdev.indiafilings.com/global/dashboard.php"
                                            class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon-reply"></i>
                                            <span class="kt-nav__link-text">Switch Business</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="https://auth.workid.global/auth" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon-user-settings"></i>
                                            <span class="kt-nav__link-text">Change Password</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="https://auth.workid.global/login?operation=logout&state=conqhremployee&cid=44ocp96rsvqpk9dus0f6hc5h84"
                                            class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon-logout"></i>
                                            <span class="kt-nav__link-text">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>