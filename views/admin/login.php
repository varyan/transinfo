<div class="login-wrapper" id="login_area">
    <div class="text-center">
        <h2 class="fadeInUp animation-delay8">
            <span class="text-success">System</span> <span>Admin</span>
        </h2>
    </div>
    <div class="login-widget animation-delay1">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="pull-left">
                    <i class="fa fa-lock fa-lg fa-4x"></i> Login
                </div>
            </div>
            <div class="panel-body">
                <form class="form-login" action="<?=base_url()?>admin/login">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" placeholder="Username" name="user" class="form-control input-sm bounceIn animation-delay2" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
                    </div>
                    <hr/>

                    <button type="submit" class="btn btn-success btn-sm bounceIn animation-delay7 pull-right"><i class="fa fa-sign-in"></i> Sign in</button>
                </form>
            </div>
        </div><!-- /panel -->
    </div><!-- /login-widget -->
</div><!-- /login-wrapper -->