<?php $user = $admin_get_where('users',['id'=>$id])[0]; ?>

<div class="panel panel-default well-lg">
    <form action="<?=base_url()?>action/update/users/<?=$user->id?>" method="post" enctype="multipart/form-data" class="form-horizontal form-border">
        <div class="panel-heading">
            Edit <?=$user->username?> user
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-md-2">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="username" value="<?=$user->username?>">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control input-sm" name="password" value="<?=$user->password?>">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Email</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" value="<?=$user->email?>">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Role</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" value="<?=$user->role?>">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Status</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" value="<?=$user->status?>">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Admin Verified</label>
                <div class="col-md-10">
                    <label class="label-radio inline">
                        <input type="radio" name="admin_verified" value="1" <?=($user->admin_verified) ? 'checked' : ''?>>
                        <span class="custom-radio"></span>
                        Yes
                    </label>
                    <label class="label-radio inline">
                        <input type="radio" name="admin_verified" value="0" <?=(!$user->admin_verified) ? 'checked' : ''?>>
                        <span class="custom-radio"></span>
                        No
                    </label>
                </div><!-- /.col -->
            </div><!-- /form-group -->
        </div>
        <div class="panel-footer">
            <div class="text-right">
                <button class="btn btn-sm btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
