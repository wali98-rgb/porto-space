<nav class="pcoded-navbar">
    <div class="sidebar_toggle">
        <a href="#"><i class="icon-close icons"></i></a>
    </div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">{{ Str::ucfirst('Halaman') }}</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $dashboard = request()->is('aDmIn') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li
                class="{{ request()->is('aDmIn/language') || request()->is('aDmIn/language/create') || request()->is('aDmIn/language/' . $language->id . '/edit') ? 'active' : '' }}">
                <a href="{{ route('language.index') }}">
                    <span class="pcoded-micon"><i class="ti-world"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Bahasa Pemograman</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li
                class="{{ request()->is('aDmIn/language') || request()->is('aDmIn/language/create') || request()->is('aDmIn/language/' . $language->id . '/edit') ? 'active' : '' }}">
                <a href="{{ route('language.index') }}">
                    <span class="pcoded-micon"><i class="ti-world"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Portofolio</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li
                class="{{ request()->is('aDmIn/language') || request()->is('aDmIn/language/create') || request()->is('aDmIn/language/' . $language->id . '/edit') ? 'active' : '' }}">
                <a href="{{ route('language.index') }}">
                    <span class="pcoded-micon"><i class="ti-world"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Blog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu
                        Levels</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level
                                2.2</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext"
                                        data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu
                                        Level 3.1</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
