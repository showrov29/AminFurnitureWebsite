  <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow header-navbar-height" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>admin"><i class="la la-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                </li>
               <!--  <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-list-alt"></i><span data-i18n="Basic Data">Basic Data</span></a>
                    <ul class="dropdown-menu">
                        <li  data-menu="" class="nav-item"><a class="dropdown-item" href="<?= base_url();?>category" data-toggle=""><i class="la la-mobile"></i><span data-i18n="">Main Category</span></a>
                        </li>
                        
                        <li  data-menu="" class="nav-item"><a class="dropdown-item" href="<?= base_url();?>subcategory" data-toggle=""><i class="la la-list-alt"></i><span data-i18n="">Sub Category</span></a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>category"><i class="la la-list-alt"></i><span data-i18n="Category">Category List</span></a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>product"><i class="la la-cart-plus"></i><span data-i18n="Dashboard">Product List</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>slider"><i class="la la ft-sliders"></i><span data-i18n="Settings">Slider</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>admin/logo"><i class="la la ft-settings"></i><span data-i18n="Logo">Logo</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>auth/logout"><i class="la la-power-off"></i><span data-i18n="logout">Logout</span></a>
                </li>

            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->