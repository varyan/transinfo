<div class="panel panel-default well-lg">
    <form action="<?=base_url()?>action/insert/users" method="post" enctype="multipart/form-data" class="form-horizontal form-border">
        <h4 class="panel-heading">
            <i class="fa fa-user-plus"></i> Add new user
        </h4>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-md-2">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="username">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control input-sm" name="password">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Email</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="email">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Role</label>
                <div class="col-md-10">
                    <select class="form-control" name="role">
                        <?php if($admin->role == 'super_admin') : ?>
                            <option value="super_admin">Super administrator</option>
                        <?php endif; ?>
                        <option value="active">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="locked">User</option>
                    </select>
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Language</label>
                <div class="col-md-10">
                    <select name="lang_id" class="form-control input-sm">
                        <option value="-1">----Select language----</option>
                        <?php foreach($admin_get('languages') as $language) : ?>
                            <option value="<?=$language->id?>"><?=$language->original_name?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">IP Address</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="ip_address">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Admin Verified</label>
                <div class="col-md-10">
                    <label class="label-radio inline">
                        <input type="radio" name="admin_verified" value="1" checked>
                        <span class="custom-radio"></span>
                        Yes
                    </label>
                    <label class="label-radio inline">
                        <input type="radio" name="admin_verified" value="0">
                        <span class="custom-radio"></span>
                        No
                    </label>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Is Available</label>
                <div class="col-md-10">
                    <label class="label-radio inline">
                        <input type="radio" name="is_available" value="1">
                        <span class="custom-radio"></span>
                        Yes
                    </label>
                    <label class="label-radio inline">
                        <input type="radio" name="is_available" value="0">
                        <span class="custom-radio"></span>
                        No
                    </label>
                </div><!-- /.col -->
            </div><!-- /form-group -->
        </div>
        <div class="panel-footer">
            <div class="text-right">
                <button type="submit" class="btn btn-sm btn-success">Save</button>
            </div>
        </div>
    </form>
</div>