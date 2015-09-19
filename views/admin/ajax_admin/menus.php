<?php $menus = $admin_get('menus'); ?>
<div class="padding-md">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            Data Table
            <span class="label label-info pull-right"><?=count($menus)?> Items</span>
        </div>
        <div class="padding-md clearfix">
            <table class="table table-striped" id="dataTable">
                <thead>
                <tr>
                    <th colspan="9"><a class="ajax btn btn-primary btn-sm" href="<?=base_url()?>admin#/ajax_admin/add/menu"><i class="fa fa-plus"></i> Add new</a></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Parent Menu</th>
                    <th>Name</th>
                    <th>Href</th>
                    <th>Active</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($menus as $menu) : ?>
                    <tr>
                        <th><?=$menu->id?></th>
                        <th><spna <?=($menu->parent_id) ? ' class="text-success">'.$admin_get_where('menus',['id'=>$menu->parent_id],'title')[0]->title : ' class="text-danger"> No parent</span>'?></th>
                        <th><?=$menu->title?></th>
                        <th><?=$menu->href?></th>
                        <th><a class="ajax" href="<?=base_url()?>action/set_active/menus/<?=$menu->id.'/'.(($menu->active - 1) * -1)?>"><span<?=($menu->active) ? " class='label label-success'>Yes" : " class='label label-danger'>No" ?></span></a></th>
                        <th><?=$menu->created_at?></th>
                        <th><?=$menu->updated_at?></th>
                        <th>
                            <a class="btn-warning btn-sm ajax" href="<?=base_url()?>admin#/ajax_admin/edit/menu/<?=$menu->id?>"><i class="fa fa-pencil"></i></a>
                            <a class="btn-danger btn-sm" href="action/delete/user/<?=$menu->id?>"><i class="fa fa-trash"></i></a>
                        </th>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.padding-md -->
    </div><!-- /panel -->
</div><!-- /.padding-md -->
<?php $this->load->view('admin/templates/tableJS'); ?>
