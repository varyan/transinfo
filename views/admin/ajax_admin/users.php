<?php $users = $admin_get('users'); ?>
<div class="padding-md">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            Data Table
            <span class="label label-info pull-right"><?=count($users)?> Items</span>
        </div>
        <div class="padding-md clearfix">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <!--<tr>
                        <th colspan="9">
                            <a class="ajax btn btn-primary btn-sm" href="<?/*=base_url()*/?>admin#/ajax_admin/add/user">
                                <i class="fa fa-plus"></i> Add new
                            </a>
                        </th>
                    </tr>-->
                    <tr>
                        <th>ID</th>
                        <th>User role</th>
                        <th>IP Address</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Admin Verified</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) : ?>
                        <tr>
                            <th><?=$user->id?></th>
                            <th><?=$user->role?></th>
                            <th><?=$user->ip_address?></th>
                            <th><?=$user->username?></th>
                            <th><?=$user->email?></th>
                            <th><a class="ajax" href="<?=base_url()?>action/set_active/users/<?=$user->id.'/'.(($user->admin_verified - 1) * -1)?>"><span<?=($user->admin_verified) ? " class='label label-success'>Yes" : " class='label label-danger'>No" ?></span></a></th>
                            <th><?=$user->created_at?></th>
                            <th><?=$user->updated_at?></th>
                            <th>
                                <a class="btn-warning btn-sm ajax" href="<?=base_url()?>admin#/ajax_admin/edit/user/<?=$user->id?>">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a class="btn-danger btn-sm" href="action/delete/user/<?=$user->id?>"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.padding-md -->
    </div><!-- /panel -->
</div><!-- /.padding-md -->
<?php $this->load->view('admin/templates/tableJS'); ?>