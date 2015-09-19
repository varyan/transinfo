<?php $menu = $admin_get_where('menus',['id'=>$id])[0]; ?>

<div class="panel panel-default well-lg">
    <form action="<?=base_url()?>action/update/menus/<?=$menu->id?>" method="post" enctype="multipart/form-data" class="form-horizontal form-border">
        <div class="panel-heading">
            Edit <?=$menu->name?> menu
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-md-2">Short Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="short_name" value="<?=$language->short_name?>">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Original NaME</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="original_name" value="<?=$language->original_name?>">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Name in english</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="name" value="<?=$language->name?>">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Flag</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="file" value="<?=$language->file?>">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Active</label>
                <div class="col-md-10">
                    <label class="label-radio inline">
                        <input type="radio" name="active" value="1" <?=($language->active) ? 'checked' : ''?>>
                        <span class="custom-radio"></span>
                        Yes
                    </label>
                    <label class="label-radio inline">
                        <input type="radio" name="active" value="0" <?=(!$language->active) ? 'checked' : ''?>>
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
