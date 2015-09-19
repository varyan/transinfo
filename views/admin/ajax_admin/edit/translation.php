<?php $text = $admin_get_where('translations',['id'=>$id])[0]; ?>

<div class="panel panel-default well-lg">
    <form class="form-horizontal form-border">
        <div class="panel-heading">
            Edit <span class="text-success text-uppercase"><?=$text->content?></span> text
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-md-2">Text</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-sm" name="content" value="<?=$text->content?>">
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
