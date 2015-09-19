<aside class="fixed skin-6">
    <div class="sidebar-inner scrollable-sidebars">
        <div class="size-toggle">
            <button class="btn btn-sm" id="sizeToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="btn btn-sm pull-right logoutConfirm_open confirm_element"  href="#logoutConfirm">
                <i class="fa fa-power-off"></i>
            </a>
        </div><!-- /size-toggle -->
        <div class="user-block clearfix">
            <img src="<?=base_url()?>assets/img/defaultuser.jpg" alt="User Avatar">
            <div class="detail">
                <strong class="bounceIn animation-delay4 m-left-xs"><?=$admin->username?></strong>
            </div>
        </div><!-- /user-block -->
        <div class="search-block">
            <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i> </button>
						</span>
            </div><!-- /input-group -->
        </div><!-- /search-block -->
        <div class="main-menu">
            <ul>
                <li>
                    <a class="ajax" href="<?=base_url()?>admin#/ajax_admin/index">
								<span class="menu-icon">
									<i class="fa fa-desktop fa-lg"></i>
								</span>
								<span class="text">
									Dashboard
								</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li class="openable">
                    <a href="#">
								<span class="menu-icon">
									<i class="fa fa-user fa-lg"></i>
								</span>
								<span class="text">
									User
								</span>
                        <span class="menu-hover"></span>
                    </a>
                    <ul class="submenu">
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/users"><span class="submenu-label"><i class="fa fa-list"></i> List</span></a></li>
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/add/user"><span class="submenu-label"><i class="fa fa-plus"></i> Add</span></a></li>
                    </ul>
                </li>
                <li class="openable">
                    <a href="#">
								<span class="menu-icon">
									<i class="fa fa-list fa-lg"></i>
								</span>
								<span class="text">
									Menu
								</span>
                        <span class="menu-hover"></span>
                    </a>
                    <ul class="submenu">
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/menus"><span class="submenu-label"><i class="fa fa-list"></i> List</span></a></li>
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/add/menu"><span class="submenu-label"><i class="fa fa-plus"></i> Add</span></a></li>
                    </ul>
                </li>
                <li class="openable">
                    <a href="#">
								<span class="menu-icon">
									<i class="fa fa-language fa-lg"></i>
								</span>
								<span class="text">
									Language
								</span>
                        <span class="menu-hover"></span>
                    </a>
                    <ul class="submenu">
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/languages"><span class="submenu-label"><i class="fa fa-list"></i> List</span></a></li>
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/add/language"><span class="submenu-label"><i class="fa fa-plus"></i> Add</span></a></li>
                    </ul>
                </li>
                <li class="openable">
                    <a href="#">
								<span class="menu-icon">
									<i class="fa fa-file-text fa-lg"></i>
								</span>
								<span class="text">
									Translations
								</span>
                        <span class="menu-hover"></span>
                    </a>
                    <ul class="submenu">
                        <li><a class="ajax" href="<?=base_url()?>admin#/ajax_admin/translations"><span class="submenu-label"><i class="fa fa-list"></i> List</span></a></li>
                    </ul>
                </li>
            </ul>

            <div class="alert alert-info">
                Welcome <?=$admin->username?>
            </div>
        </div><!-- /main-menu -->
    </div><!-- /sidebar-inner -->
</aside>