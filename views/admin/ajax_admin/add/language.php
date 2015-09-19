<div class="panel panel-default well-lg">
    <form method="post" enctype="multipart/form-data" action="<?=base_url()?>action/insert/languages" class="form-horizontal form-border">
        <h4 class="panel-heading">
            <i class="fa fa-language"></i> Add new language
        </h4>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-md-2">Short Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="short_name">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Original Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="original_name">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Name in english</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="name">
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Flag</label>
                <div class="col-md-9">
                    <input id="upload_file" type="file" name="flag" class="form-control input-sm">
                </div>
                <div class="col-md-1">
                    <img style="display: none;" id="selected_flag" class="img-responsive img-thumbnail" src="">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="control-label col-md-2">Active</label>
                <div class="col-md-10">
                    <label class="label-radio inline">
                        <input type="radio" name="active" value="1">
                        <span class="custom-radio"></span>
                        Yes
                    </label>
                    <label class="label-radio inline">
                        <input type="radio" name="active" value="0">
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