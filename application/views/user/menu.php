  <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow header-navbar-height" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?= active_link('dashboard');?>"><a class="nav-link" href="<?= base_url();?>dashboard.html"><i class="la la-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                </li>
                 <li class="nav-item <?= active_link('aboutus');?>"><a class="nav-link" href="<?= base_url();?>aboutus.html"><i class="la la-info"></i><span data-i18n="">About Us</span></a>
                </li>
                <li class="nav-item <?= active_link('reseller');?>"><a class="nav-link" href="<?= base_url();?>reseller.html"><i class="la la-user-plus"></i><span data-i18n="">Reseller</span></a>
                </li>


                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-television"></i><span data-i18n="Templates">Templates</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-arrows-v"></i><span data-i18n="Vertical">Vertical</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="../vertical-menu-template" data-toggle=""><span data-i18n="Classic Menu">Classic Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../vertical-modern-menu-template" data-toggle=""><span data-i18n="Modern Menu">Modern Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../vertical-collapsed-menu-template" data-toggle=""><span data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../vertical-compact-menu-template" data-toggle=""><span data-i18n="Compact Menu">Compact Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../vertical-content-menu-template" data-toggle=""><span data-i18n="Content Menu">Content Menu</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../vertical-overlay-menu-template" data-toggle=""><span data-i18n="Overlay Menu">Overlay Menu</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-arrows-h"></i><span data-i18n="Horizontal">Horizontal</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="../horizontal-menu-template" data-toggle=""><span data-i18n="Classic">Classic</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="../horizontal-menu-template-nav" data-toggle=""><span data-i18n="Full Width">Full Width</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-mobile"></i><span data-i18n="Apps">Apps</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle=""><i class="la la-check-square"></i><span data-i18n="ToDo">ToDo</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-contacts.html" data-toggle=""><i class="la la-users"></i><span data-i18n="Contacts">Contacts</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-email.html" data-toggle=""><i class="la la-envelope"></i><span data-i18n="Email">Email</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-chat.html" data-toggle=""><i class="la la-comments"></i><span data-i18n="Chat">Chat</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-kanban.html" data-toggle=""><i class="la la-file-text"></i><span data-i18n="Kanban">Kanban</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-briefcase"></i><span data-i18n="Project">Project</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="project-summary.html" data-toggle=""><span data-i18n="Project Summary">Project Summary</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="project-tasks.html" data-toggle=""><span data-i18n="Project Task">Project Task</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="project-bugs.html" data-toggle=""><span data-i18n="Project Bugs">Project Bugs</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-calendar"></i><span data-i18n="Calendars">Calendars</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Full Calendar">Full Calendar</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-basic.html" data-toggle=""><span data-i18n="Basic">Basic</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-events.html" data-toggle=""><span data-i18n="Events">Events</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-advance.html" data-toggle=""><span data-i18n="Advance">Advance</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="full-calender-extra.html" data-toggle=""><span data-i18n="Extra">Extra</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="calendars-clndr.html" data-toggle=""><span data-i18n="CLNDR">CLNDR</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-file-text"></i><span data-i18n="Pages">Pages</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="news-feed.html" data-toggle=""><i class="la la-newspaper-o"></i><span data-i18n="News Feed">News Feed</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="social-feed.html" data-toggle=""><i class="la la-share-alt"></i><span data-i18n="Social Feed">Social Feed</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-clipboard"></i><span data-i18n="Invoice">Invoice</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="invoice-summary.html" data-toggle=""><span data-i18n="Invoice Summary">Invoice Summary</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="invoice-template.html" data-toggle=""><span data-i18n="Invoice Template">Invoice Template</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="invoice-list.html" data-toggle=""><span data-i18n="Invoice List">Invoice List</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-film"></i><span data-i18n="Timelines">Timelines</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="timeline-center.html" data-toggle=""><span data-i18n="Timelines Center">Timelines Center</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="timeline-left.html" data-toggle=""><span data-i18n="Timelines Left">Timelines Left</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="timeline-right.html" data-toggle=""><span data-i18n="Timelines Right">Timelines Right</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="timeline-horizontal.html" data-toggle=""><span data-i18n="Timelines Horizontal">Timelines Horizontal</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="account-setting.html" data-toggle=""><i class="la la-user-plus"></i><span data-i18n="Account Setting">Account Setting</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-user"></i><span data-i18n="Users">Users</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="page-users-list.html" data-toggle=""><span data-i18n="Users List">Users List</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="page-users-view.html" data-toggle=""><span data-i18n="Users View">Users View</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="page-users-edit.html" data-toggle=""><span data-i18n="Users Edit">Users Edit</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="user-profile.html" data-toggle=""><span data-i18n="Users Profile">Users Profile</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="user-cards.html" data-toggle=""><span data-i18n="Users Cards">Users Cards</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="users-contacts.html" data-toggle=""><span data-i18n="Users List">Users List</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-image"></i><span data-i18n="Gallery">Gallery</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="gallery-grid.html" data-toggle=""><span data-i18n="Gallery Grid">Gallery Grid</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-grid-with-desc.html" data-toggle=""><span data-i18n="Gallery Grid with Desc">Gallery Grid with Desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-masonry.html" data-toggle=""><span data-i18n="Masonry Gallery">Masonry Gallery</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-masonry-with-desc.html" data-toggle=""><span data-i18n="Masonry Gallery with Desc">Masonry Gallery with Desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="gallery-hover-effects.html" data-toggle=""><span data-i18n="Hover Effects">Hover Effects</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-search"></i><span data-i18n="Search">Search</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="search-page.html" data-toggle=""><span data-i18n="Search Page">Search Page</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="search-website.html" data-toggle=""><span data-i18n="Search Website">Search Website</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="search-images.html" data-toggle=""><span data-i18n="Search Images">Search Images</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="search-videos.html" data-toggle=""><span data-i18n="Search Videos">Search Videos</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-unlock"></i><span data-i18n="Authentication">Authentication</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="login-simple.html" data-toggle="" target="_blank"><span data-i18n="Login Simple">Login Simple</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-with-bg.html" data-toggle="" target="_blank"><span data-i18n="Login with Bg">Login with Bg</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-with-bg-image.html" data-toggle="" target="_blank"><span data-i18n="Login with Bg Image">Login with Bg Image</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-with-navbar.html" data-toggle="" target="_blank"><span data-i18n="Login with Navbar">Login with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="login-advanced.html" data-toggle="" target="_blank"><span data-i18n="Login Advanced">Login Advanced</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-simple.html" data-toggle="" target="_blank"><span data-i18n="Register Simple">Register Simple</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-with-bg.html" data-toggle="" target="_blank"><span data-i18n="Register with Bg">Register with Bg</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-with-bg-image.html" data-toggle="" target="_blank"><span data-i18n="Register with Bg Image">Register with Bg Image</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-with-navbar.html" data-toggle="" target="_blank"><span data-i18n="Register with Navbar">Register with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="register-advanced.html" data-toggle="" target="_blank"><span data-i18n="Register Advanced">Register Advanced</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="unlock-user.html" data-toggle="" target="_blank"><span data-i18n="Unlock User">Unlock User</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="recover-password.html" data-toggle="" target="_blank"><span data-i18n="recover-password">recover-password</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-warning"></i><span data-i18n="Error">Error</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="error-400.html" data-toggle=""><span data-i18n="Error 400">Error 400</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-400-with-navbar.html" data-toggle=""><span data-i18n="Error 400 with Navbar">Error 400 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-401.html" data-toggle=""><span data-i18n="Error 401">Error 401</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-401-with-navbar.html" data-toggle=""><span data-i18n="Error 401 with Navbar">Error 401 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-403.html" data-toggle=""><span data-i18n="Error 403">Error 403</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-403-with-navbar.html" data-toggle=""><span data-i18n="Error 403 with Navbar">Error 403 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-404.html" data-toggle=""><span data-i18n="Error 404">Error 404</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-404-with-navbar.html" data-toggle=""><span data-i18n="Error 404 with Navbar">Error 404 with Navbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-500.html" data-toggle=""><span data-i18n="Error 500">Error 500</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="error-500-with-navbar.html" data-toggle=""><span data-i18n="Error 500 with Navbar">Error 500 with Navbar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-file-text"></i><span data-i18n="Others">Others</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Coming Soon">Coming Soon</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="coming-soon-flat.html" data-toggle=""><span data-i18n="Flat">Flat</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="coming-soon-bg-image.html" data-toggle=""><span data-i18n="Bg image">Bg image</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="coming-soon-bg-video.html" data-toggle=""><span data-i18n="Bg video">Bg video</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="under-maintenance.html" data-toggle=""><span data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="pricing.html" data-toggle=""><i class="la la-money"></i><span data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="checkout-form.html" data-toggle=""><i class="la la-credit-card"></i><span data-i18n="Checkout">Checkout</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="faq.html" data-toggle=""><i class="la la-question"></i><span data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="knowledge-base.html" data-toggle=""><i class="la la-database"></i><span data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-columns"></i><span data-i18n="Layouts">Layouts</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-columns"></i><span data-i18n="Page layouts">Page layouts</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Content Det. Sidebar">Content Det. Sidebar</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sidebar.html" data-toggle=""><span data-i18n="Detached left sidebar">Detached left sidebar</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky left sidebar">Detached sticky left sidebar</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sidebar.html" data-toggle=""><span data-i18n="Detached right sidebar">Detached right sidebar</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky right sidebar">Detached sticky right sidebar</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li data-menu=""><a class="dropdown-item" href="layout-fixed-navigation.html" data-toggle=""><span data-i18n="Fixed navigation">Fixed navigation</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-fixed.html" data-toggle=""><span data-i18n="Fixed layout">Fixed layout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-boxed.html" data-toggle=""><span data-i18n="Boxed layout">Boxed layout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-static.html" data-toggle=""><span data-i18n="Static layout">Static layout</span></a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li data-menu=""><a class="dropdown-item" href="layout-light.html" data-toggle=""><span data-i18n="Light layout">Light layout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="layout-dark.html" data-toggle=""><span data-i18n="Dark layout">Dark layout</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-navicon"></i><span data-i18n="Navbars">Navbars</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="navbar-light.html" data-toggle=""><span data-i18n="Navbar Light">Navbar Light</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-dark.html" data-toggle=""><span data-i18n="Navbar Dark">Navbar Dark</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-semi-dark.html" data-toggle=""><span data-i18n="Navbar Semi Dark">Navbar Semi Dark</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-brand-center.html" data-toggle=""><span data-i18n="Brand Center">Brand Center</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-components.html" data-toggle=""><span data-i18n="Navbar Components">Navbar Components</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="navbar-styling.html" data-toggle=""><span data-i18n="Navbar Styling">Navbar Styling</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-arrows-v"></i><span data-i18n="Vertical Nav">Vertical Nav</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Navigation Types">Navigation Types</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="../vertical-menu-template" data-toggle=""><span data-i18n="Vertical Menu">Vertical Menu</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../vertical-overlay-menu-template" data-toggle=""><span data-i18n="Vertical Overlay">Vertical Overlay</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../vertical-compact-menu-template" data-toggle=""><span data-i18n="Vertical Compact">Vertical Compact</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../vertical-content-menu-template" data-toggle=""><span data-i18n="Vertical Content">Vertical Content</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-arrows-h"></i><span data-i18n="Horizontal Nav">Horizontal Nav</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Navigation Types">Navigation Types</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="../horizontal-menu-template" data-toggle=""><span data-i18n="Left Icon Navigation">Left Icon Navigation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../horizontal-menu-template-nav" data-toggle=""><span data-i18n="Full Width Navigation">Full Width Navigation</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-header"></i><span data-i18n="Page Headers">Page Headers</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-basic.html" data-toggle=""><span data-i18n="Breadcrumbs basic">Breadcrumbs basic</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top.html" data-toggle=""><span data-i18n="Breadcrumbs top">Breadcrumbs top</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-bottom.html" data-toggle=""><span data-i18n="Breadcrumbs bottom">Breadcrumbs bottom</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top-with-description.html" data-toggle=""><span data-i18n="Breadcrumbs top with desc">Breadcrumbs top with desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button.html" data-toggle=""><span data-i18n="Breadcrumbs with button">Breadcrumbs with button</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-round-button.html" data-toggle=""><span data-i18n="Breadcrumbs with button 2">Breadcrumbs with button 2</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button-group.html" data-toggle=""><span data-i18n="Breadcrumbs with buttons">Breadcrumbs with buttons</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-description.html" data-toggle=""><span data-i18n="Breadcrumbs with desc">Breadcrumbs with desc</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-search.html" data-toggle=""><span data-i18n="Breadcrumbs with search">Breadcrumbs with search</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-stats.html" data-toggle=""><span data-i18n="Breadcrumbs with stats">Breadcrumbs with stats</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-download"></i><span data-i18n="Footers">Footers</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="footer-light.html" data-toggle=""><span data-i18n="Footer Light">Footer Light</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-dark.html" data-toggle=""><span data-i18n="Footer Dark">Footer Dark</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-transparent.html" data-toggle=""><span data-i18n="Footer Transparent">Footer Transparent</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-fixed.html" data-toggle=""><span data-i18n="Footer Fixed">Footer Fixed</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="footer-components.html" data-toggle=""><span data-i18n="Footer Components">Footer Components</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-pencil"></i><span data-i18n="UI">UI</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-tablet"></i><span data-i18n="Cards">Cards</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="card-bootstrap.html" data-toggle=""><span data-i18n="Bootstrap">Bootstrap</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-headings.html" data-toggle=""><span data-i18n="Headings">Headings</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-options.html" data-toggle=""><span data-i18n="Options">Options</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-actions.html" data-toggle=""><span data-i18n="Action">Action</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-draggable.html" data-toggle=""><span data-i18n="Draggable">Draggable</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-fire"></i><span data-i18n="Advance Cards">Advance Cards</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="card-statistics.html" data-toggle=""><span data-i18n="Statistics">Statistics</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-weather.html" data-toggle=""><span data-i18n="Weather">Weather</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-charts.html" data-toggle=""><span data-i18n="Charts">Charts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-interactive.html" data-toggle=""><span data-i18n="Interactive">Interactive</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-maps.html" data-toggle=""><span data-i18n="Maps">Maps</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-social.html" data-toggle=""><span data-i18n="Social">Social</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="card-ecommerce.html" data-toggle=""><span data-i18n="E-Commerce">E-Commerce</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-compass"></i><span data-i18n="Content">Content</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="content-grid.html" data-toggle=""><span data-i18n="Grid">Grid</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-typography.html" data-toggle=""><span data-i18n="Typography">Typography</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html" data-toggle=""><span data-i18n="Text utilities">Text utilities</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html" data-toggle=""><span data-i18n="Syntax highlighter">Syntax highlighter</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html" data-toggle=""><span data-i18n="Helper classes">Helper classes</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-server"></i><span data-i18n="Components">Components</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle=""><span data-i18n="Alerts">Alerts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-callout.html" data-toggle=""><span data-i18n="Callout">Callout</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html" data-toggle=""><span data-i18n="Basic Buttons">Basic Buttons</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-buttons-extended.html" data-toggle=""><span data-i18n="Extended Buttons">Extended Buttons</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle=""><span data-i18n="Carousel">Carousel</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle=""><span data-i18n="Collapse">Collapse</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle=""><span data-i18n="Dropdowns">Dropdowns</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle=""><span data-i18n="List Group">List Group</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle=""><span data-i18n="Modals">Modals</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle=""><span data-i18n="Pagination">Pagination</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle=""><span data-i18n="Navs Component">Navs Component</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle=""><span data-i18n="Tabs Component">Tabs Component</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle=""><span data-i18n="Pills Component">Pills Component</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle=""><span data-i18n="Tooltips">Tooltips</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle=""><span data-i18n="Popovers">Popovers</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle=""><span data-i18n="Badges">Badges</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle=""><span data-i18n="Pill Badges">Pill Badges</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle=""><span data-i18n="Progress">Progress</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle=""><span data-i18n="Media Objects">Media Objects</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-scrollable.html" data-toggle=""><span data-i18n="Scrollable">Scrollable</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="component-spinners.html" data-toggle=""><span data-i18n="Spinners">Spinners</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="components-toast.html" data-toggle=""><span data-i18n="Toast &amp; Custom Switch">Toast &amp; Custom Switch</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="components-bootstrap-spinner.html" data-toggle=""><span data-i18n="Bootstrap Spinner">Bootstrap Spinner</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-diamond"></i><span data-i18n="Extra Components">Extra Components</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="ex-component-sweet-alerts.html" data-toggle=""><span data-i18n="Sweet Alerts">Sweet Alerts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-tree-views.html" data-toggle=""><span data-i18n="Tree Views">Tree Views</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-toastr.html" data-toggle=""><span data-i18n="Toastr">Toastr</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-ratings.html" data-toggle=""><span data-i18n="Ratings">Ratings</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-noui-slider.html" data-toggle=""><span data-i18n="NoUI Slider">NoUI Slider</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-date-time-dropper.html" data-toggle=""><span data-i18n="Date Time Dropper">Date Time Dropper</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-lists.html" data-toggle=""><span data-i18n="Lists">Lists</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-toolbar.html" data-toggle=""><span data-i18n="Toolbar">Toolbar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-knob.html" data-toggle=""><span data-i18n="Knob">Knob</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-long-press.html" data-toggle=""><span data-i18n="Long Press">Long Press</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-offline.html" data-toggle=""><span data-i18n="Offline">Offline</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-zoom.html" data-toggle=""><span data-i18n="Zoom">Zoom</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-media-player.html" data-toggle=""><span data-i18n="media Player">media Player</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-tour.html" data-toggle=""><span data-i18n="Tour">Tour</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-swiper.html" data-toggle=""><span data-i18n="Swiper">Swiper</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="ex-component-avatar.html" data-toggle=""><span data-i18n="Avatar">Avatar</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="miscellaneous.html" data-toggle=""><span data-i18n="Miscellaneous">Miscellaneous</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-eye"></i><span data-i18n="Icons">Icons</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="icons-feather.html" data-toggle=""><span data-i18n="Feather">Feather</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="icons-line-awesome.html" data-toggle=""><span data-i18n="Line Awesome">Line Awesome</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="icons-meteocons.html" data-toggle=""><span data-i18n="Meteocons">Meteocons</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="icons-simple-line-icons.html" data-toggle=""><span data-i18n="Simple Line Icons">Simple Line Icons</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="animation.html" data-toggle=""><i class="la la-spinner spinner"></i><span data-i18n="Animation">Animation</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-th-list"></i><span data-i18n="Forms">Forms</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-terminal"></i><span data-i18n="Form Elements">Form Elements</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle=""><span data-i18n="Form Inputs">Form Inputs</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-input-groups.html" data-toggle=""><span data-i18n="Input Groups">Input Groups</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-input-grid.html" data-toggle=""><span data-i18n="Input Grid">Input Grid</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-extended-inputs.html" data-toggle=""><span data-i18n="Extended Inputs">Extended Inputs</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-checkboxes-radios.html" data-toggle=""><span data-i18n="Checkboxes &amp; Radios">Checkboxes &amp; Radios</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle=""><span data-i18n="Switch">Switch</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Select">Select</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="form-select2.html" data-toggle=""><span data-i18n="Select2">Select2</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="form-selectize.html" data-toggle=""><span data-i18n="Selectize">Selectize</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="form-selectivity.html" data-toggle=""><span data-i18n="Selectivity">Selectivity</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="form-select-box-it.html" data-toggle=""><span data-i18n="Select Box It">Select Box It</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-dual-listbox.html" data-toggle=""><span data-i18n="Dual Listbox">Dual Listbox</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-tags-input.html" data-toggle=""><span data-i18n="Tags Input">Tags Input</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle=""><span data-i18n="Validation">Validation</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-file-text"></i><span data-i18n="Form Layouts">Form Layouts</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="form-layout-basic.html" data-toggle=""><span data-i18n="Basic Forms">Basic Forms</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-horizontal.html" data-toggle=""><span data-i18n="Horizontal Forms">Horizontal Forms</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-hidden-labels.html" data-toggle=""><span data-i18n="Hidden Labels">Hidden Labels</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-form-actions.html" data-toggle=""><span data-i18n="Form Actions">Form Actions</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-row-separator.html" data-toggle=""><span data-i18n="Row Separator">Row Separator</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-bordered.html" data-toggle=""><span data-i18n="Bordered">Bordered</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-striped-rows.html" data-toggle=""><span data-i18n="Striped Rows">Striped Rows</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-layout-striped-labels.html" data-toggle=""><span data-i18n="Striped Labels">Striped Labels</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-paste"></i><span data-i18n="Form Wizard">Form Wizard</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="form-wizard-circle-style.html" data-toggle=""><span data-i18n="Circle Style">Circle Style</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="form-wizard-notification-style.html" data-toggle=""><span data-i18n="Notification Style">Notification Style</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="form-repeater.html" data-toggle=""><i class="la la-repeat"></i><span data-i18n="Form Repeater">Form Repeater</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-ellipsis-h"></i><span data-i18n="Others">Others</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-table"></i><span data-i18n="Tables">Tables</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-table"></i><span data-i18n="Bootstrap Tables">Bootstrap Tables</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="table-basic.html" data-toggle=""><span data-i18n="Basic Tables">Basic Tables</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-border.html" data-toggle=""><span data-i18n="Table Border">Table Border</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-sizing.html" data-toggle=""><span data-i18n="Table Sizing">Table Sizing</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-styling.html" data-toggle=""><span data-i18n="Table Styling">Table Styling</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="table-components.html" data-toggle=""><span data-i18n="Table Components">Table Components</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-th"></i><span data-i18n="DataTables">DataTables</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="dt-basic-initialization.html" data-toggle=""><span data-i18n="Basic Initialisation">Basic Initialisation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-advanced-initialization.html" data-toggle=""><span data-i18n="Advanced initialisation">Advanced initialisation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-styling.html" data-toggle=""><span data-i18n="Styling">Styling</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-data-sources.html" data-toggle=""><span data-i18n="Data Sources">Data Sources</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-api.html" data-toggle=""><span data-i18n="API">API</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-th-large"></i><span data-i18n="DataTables Ext.">DataTables Ext.</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-autofill.html" data-toggle=""><span data-i18n="AutoFill">AutoFill</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Buttons">Buttons</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-basic.html" data-toggle=""><span data-i18n="Basic Buttons">Basic Buttons</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-html-5-data-export.html" data-toggle=""><span data-i18n="HTML 5 Data Export">HTML 5 Data Export</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-flash-data-export.html" data-toggle=""><span data-i18n="Flash Data Export">Flash Data Export</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-column-visibility.html" data-toggle=""><span data-i18n="Column Visibility">Column Visibility</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-print.html" data-toggle=""><span data-i18n="Print">Print</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-api.html" data-toggle=""><span data-i18n="API">API</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-reorder.html" data-toggle=""><span data-i18n="Column Reorder">Column Reorder</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-fixed-columns.html" data-toggle=""><span data-i18n="Fixed Columns">Fixed Columns</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-key-table.html" data-toggle=""><span data-i18n="Key Table">Key Table</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-row-reorder.html" data-toggle=""><span data-i18n="Row Reorder">Row Reorder</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-select.html" data-toggle=""><span data-i18n="Select">Select</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-fix-header.html" data-toggle=""><span data-i18n="Fix Header">Fix Header</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-responsive.html" data-toggle=""><span data-i18n="Responsive">Responsive</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-visibility.html" data-toggle=""><span data-i18n="Column Visibility">Column Visibility</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-line-chart"></i><span data-i18n="Charts">Charts</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="charts-apexcharts.html" data-toggle=""><i class="la la-pie-chart"></i><span data-i18n="Apex Charts">Apex Charts</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-area-chart"></i><span data-i18n="Chartjs">Chartjs</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-line-charts.html" data-toggle=""><span data-i18n="Line charts">Line charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-bar-charts.html" data-toggle=""><span data-i18n="Bar charts">Bar charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-pie-doughnut-charts.html" data-toggle=""><span data-i18n="Pie &amp; Doughnut charts">Pie &amp; Doughnut charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-scatter-charts.html" data-toggle=""><span data-i18n="Scatter charts">Scatter charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-polar-radar-charts.html" data-toggle=""><span data-i18n="Polar &amp; Radar charts">Polar &amp; Radar charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartjs-advance-charts.html" data-toggle=""><span data-i18n="Advance charts">Advance charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-line-chart"></i><span data-i18n="D3 Charts">D3 Charts</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="d3-line-chart.html" data-toggle=""><span data-i18n="Line Chart">Line Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-bar-chart.html" data-toggle=""><span data-i18n="Bar Chart">Bar Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-pie-chart.html" data-toggle=""><span data-i18n="Pie Chart">Pie Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-circle-diagrams.html" data-toggle=""><span data-i18n="Circle Diagrams">Circle Diagrams</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-tree-chart.html" data-toggle=""><span data-i18n="Tree Chart">Tree Chart</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="d3-other-charts.html" data-toggle=""><span data-i18n="Other Charts">Other Charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-pie-chart"></i><span data-i18n="Chartist">Chartist</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="chartist-line-charts.html" data-toggle=""><span data-i18n="Line charts">Line charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartist-bar-charts.html" data-toggle=""><span data-i18n="Bar charts">Bar charts</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="chartist-pie-charts.html" data-toggle=""><span data-i18n="Pie charts">Pie charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="morris-charts.html" data-toggle=""><i class="la la-share-alt"></i><span data-i18n="Morris Charts">Morris Charts</span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="rickshaw-charts.html" data-toggle=""><i class="la la-bullseye"></i><span data-i18n="Rickshaw Charts">Rickshaw Charts</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-map"></i><span data-i18n="Maps">Maps</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="maps-leaflet.html" data-toggle=""><span data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Vector Maps">Vector Maps</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="vector-maps-jvector.html" data-toggle=""><span data-i18n="jVector Map">jVector Map</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="vector-maps-jvq.html" data-toggle=""><span data-i18n="JQV Map">JQV Map</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-folder-open"></i><span data-i18n="General">General</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-paint-brush"></i><span data-i18n="Color Palette">Color Palette</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-primary.html" data-toggle=""><span data-i18n="Primary palette">Primary palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-danger.html" data-toggle=""><span data-i18n="Danger palette">Danger palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-success.html" data-toggle=""><span data-i18n="Success palette">Success palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-warning.html" data-toggle=""><span data-i18n="Warning palette">Warning palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-info.html" data-toggle=""><span data-i18n="Info palette">Info palette</span></a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-red.html" data-toggle=""><span data-i18n="Red palette">Red palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-pink.html" data-toggle=""><span data-i18n="Pink palette">Pink palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-purple.html" data-toggle=""><span data-i18n="Purple palette">Purple palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-blue.html" data-toggle=""><span data-i18n="Blue palette">Blue palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-cyan.html" data-toggle=""><span data-i18n="Cyan palette">Cyan palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-teal.html" data-toggle=""><span data-i18n="Teal palette">Teal palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-yellow.html" data-toggle=""><span data-i18n="Yellow palette">Yellow palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-amber.html" data-toggle=""><span data-i18n="Amber palette">Amber palette</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="color-palette-blue-grey.html" data-toggle=""><span data-i18n="Blue Grey palette">Blue Grey palette</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-puzzle-piece"></i><span data-i18n="Starter kit">Starter kit</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/horizontal-layout-1-column.html" data-toggle=""><span data-i18n="1 column">1 column</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Content Det. Sidebar">Content Det. Sidebar</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-left-sidebar.html" data-toggle=""><span data-i18n="Detached left sidebar">Detached left sidebar</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-left-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky left sidebar">Detached sticky left sidebar</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-right-sidebar.html" data-toggle=""><span data-i18n="Detached right sidebar">Detached right sidebar</span></a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-right-sticky-sidebar.html" data-toggle=""><span data-i18n="Detached sticky right sidebar">Detached sticky right sidebar</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-fixed-navigation.html" data-toggle=""><span data-i18n="Fixed navigation">Fixed navigation</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-fixed.html" data-toggle=""><span data-i18n="Fixed layout">Fixed layout</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-boxed.html" data-toggle=""><span data-i18n="Boxed layout">Boxed layout</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-static.html" data-toggle=""><span data-i18n="Static layout">Static layout</span></a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-light.html" data-toggle=""><span data-i18n="Light layout">Light layout</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="../../../starter-kit/ltr/horizontal-menu-template-nav/layout-dark.html" data-toggle=""><span data-i18n="Dark layout">Dark layout</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="disabled" data-menu=""><a class="dropdown-item" href="#" data-toggle=""><i class="la la-eye-slash"></i><span data-i18n="Disabled Menu">Disabled Menu</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-android"></i><span data-i18n="Menu levels">Menu levels</span></a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Second level">Second level</span></a>
                                        </li>
                                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Second level child">Second level child</span></a>
                                            <ul class="dropdown-menu">
                                                <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Third level">Third level</span></a>
                                                </li>
                                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><span data-i18n="Third level child">Third level child</span></a>
                                                    <ul class="dropdown-menu">
                                                        <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Fourth level">Fourth level</span></a>
                                                        </li>
                                                        <li data-menu=""><a class="dropdown-item" href="#" data-toggle=""><span data-i18n="Fourth level">Fourth level</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->