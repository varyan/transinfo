<?php $languages = $admin_get('languages'); ?>
<div class="padding-md">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            Data Table
            <span class="label label-info pull-right"><?=count($languages)?> Items</span>
        </div>
        <div class="padding-md clearfix">
            <table class="table table-striped" id="dataTable">
                <thead>
                <tr>
                    <th colspan="9"><a class="ajax btn btn-primary btn-sm" href="<?=base_url()?>admin#/ajax_admin/add/language"><i class="fa fa-plus"></i> Add new</a></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Short Name</th>
                    <th>Original Name</th>
                    <th>Name</th>
                    <th>Flag</th>
                    <th>Active</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($languages as $language) : ?>
                    <tr>
                        <th><?=$language->id?></th>
                        <th><?=$language->short_name?></th>
                        <th><?=$language->original_name?></th>
                        <th><?=$language->name?></th>
                        <th><img src="<?=base_url()?>assets/img/<?=$language->file?>"></th>
                        <th><a class="ajax" href="<?=base_url()?>action/set_active/languages/<?=$language->id.'/'.(($language->active - 1) * -1)?>"><span<?=($language->active) ? " class='label label-success'>Yes" : " class='label label-danger'>No" ?></span></a></th>
                        <th><?=$language->created_at?></th>
                        <th><?=$language->updated_at?></th>
                        <th>
                            <a class="btn-warning btn-sm ajax" href="<?=base_url()?>admin#/ajax_admin/edit/language/<?=$language->id?>"><i class="fa fa-pencil"></i></a>
                            <a class="btn-danger btn-sm" href="action/delete/user/<?=$language->id?>"><i class="fa fa-trash"></i></a>
                        </th>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.padding-md -->
    </div><!-- /panel -->
</div><!-- /.padding-md -->
<?php $this->load->view('admin/templates/tableJS'); ?>
