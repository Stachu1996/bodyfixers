<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Dashboards</li>
            <li>
                <a href="index.html" class="mm-active">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Dashboard Example 1
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-car"></i>
                    Components
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="components-tabs.html">
                            <i class="metismenu-icon">
                            </i>Tabs
                        </a>
                    </li>
                    <li>
                        <a href="components-accordions.html">
                            <i class="metismenu-icon">
                            </i>Accordions
                        </a>
                    </li>
                    <li>
                        <a href="components-notifications.html">
                            <i class="metismenu-icon">
                            </i>Notifications
                        </a>
                    </li>
                    <li>
                        <a href="components-modals.html">
                            <i class="metismenu-icon">
                            </i>Modals
                        </a>
                    </li>
                    <li>
                        <a href="components-progress-bar.html">
                            <i class="metismenu-icon">
                            </i>Progress Bar
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips-popovers.html">
                            <i class="metismenu-icon">
                            </i>Tooltips &amp; Popovers
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="metismenu-icon">
                            </i>Carousel
                        </a>
                    </li>
                    <li>
                        <a href="components-calendar.html">
                            <i class="metismenu-icon">
                            </i>Calendar
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="metismenu-icon">
                            </i>Pagination
                        </a>
                    </li>
                    <li>
                        <a href="components-scrollable-elements.html">
                            <i class="metismenu-icon">
                            </i>Scrollable
                        </a>
                    </li>
                    <li>
                        <a href="components-maps.html">
                            <i class="metismenu-icon">
                            </i>Maps
                        </a>
                    </li>
                </ul>
            </li>

            <li class="app-sidebar__heading">Informacje</li>
            <li>
                <a href="forms-controls.html" class="{{ Route::currentRouteName() == 'admin.pakiety.index' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-graph3">
                    </i>Statystyki
                </a>
            </li>
            <li>
                <a href="forms-layouts.html" class="{{ Route::currentRouteName() == 'admin.pakiety.index' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-cash">
                    </i>Transakcje
                </a>
            </li>
            <li>
                <a href="{{ route('admin.menu.index') }}" class="{{ Route::currentRouteName() == 'admin.menu.index' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-note"></i>
                    Menu
                </a>
            </li>

            <li class="app-sidebar__heading">Zarządzanie</li>
            <li>
                <a href="{{ route('admin.pakiety.index') }}" class="{{ Route::currentRouteName() == 'admin.pakiety.index' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-shopbag"></i>
                    Pakiety
                </a>
            </li>
            <li>
                <a href="{{ route('admin.clients.index') }}" class="{{ Route::currentRouteName() == 'admin.clients.index' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-id">
                    </i>Klienci
                </a>
            </li>

            <li class="app-sidebar__heading">Ustawienia</li>
            <li>
                <a href="{{ route('admin.menu.index') }}" class="{{ Route::currentRouteName() == 'admin.menu.index' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-users"></i>
                    Użytkownicy
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings') }}" class="{{ Route::currentRouteName() == 'admin.settings' ? 'mm-active' : '' }}">
                    <i class="metismenu-icon pe-7s-settings">
                    </i>Ustawienia
                </a>
            </li>
        </ul>
    </div>
</div>
