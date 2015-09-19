<div id="breadcrumb">
    <ul class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="<?=base_url()?>admin#/ajax_admin/index"> Home</a></li>
        <li class="active">Dashboard</li>
    </ul>
</div><!-- /breadcrumb-->
<div class="main-header clearfix">
    <div class="page-title">
        <h3 class="no-margin">Dashboard</h3>
        <span>Welcome back <?=$admin->username?></span>
    </div><!-- /page-title -->
</div><!-- /main-header -->

<div class="grey-container shortcut-wrapper">
    <a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-envelope-o"></i>
						<span class="shortcut-alert">
							5
						</span>
					</span>
        <span class="text">Messages</span>
    </a>
    <a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-globe"></i>
						<span class="shortcut-alert">
							7
						</span>
					</span>
        <span class="text">Notifications</span>
    </a>
</div><!-- /grey-container -->

<div class="padding-md">
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="panel-stat3 bg-danger">
                <h2 class="m-top-none" id="userCount"><?=count($admin_get('users'))?></h2>
                <h5>Users</h5>
                <i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs"></span>
                <div class="stat-icon">
                    <i class="fa fa-users fa-3x"></i>
                </div>
            </div>
        </div><!-- /.col -->
        <div class="col-sm-6 col-md-3">
            <div class="panel-stat3 bg-info">
                <h2 class="m-top-none"><span id="serverloadCount"><?=count($admin_get('languages'))?></span></h2>
                <h5>Languages</h5>
                <i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs"></span>
                <div class="stat-icon">
                    <i class="fa fa-language fa-3x"></i>
                </div>
            </div>
        </div><!-- /.col -->
        <div class="col-sm-6 col-md-3">
            <div class="panel-stat3 bg-success">
                <h2 class="m-top-none" id="userCount"><?=count($admin_get('menus'))?></h2>
                <h5>Menus</h5>
                <i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs"></span>
                <div class="stat-icon">
                    <i class="fa fa-list fa-3x"></i>
                </div>
            </div>
        </div><!-- /.col -->
    </div>
</div><!-- /.padding-md -->