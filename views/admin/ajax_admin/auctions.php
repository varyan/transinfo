<?php $auctions = $admin_get('cargo'); ?>
<div class="padding-md">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            Data Table
            <span class="label label-info pull-right"><?=count($auctions)?> Items</span>
        </div>
        <div class="padding-md clearfix">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>Author ID</th>
                        <th>Date from</th>
                        <th>Date to</th>
                        <th>Load location</th>
                        <th>Unload location</th>
                        <th>Admin verified</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($auctions as $auction) : ?>
                        <tr>
                            <th><?=$auction->user_id?></th>
                            <th><?=$auction->date_from?></th>
                            <th><?=$auction->date_to?></th>
                            <th><?=$auction->load_locality?></th>
                            <th><?=$auction->unload_locality?></th>
                            <th><a class="ajax" href="<?=base_url()?>action/set_active/cargo/<?=$auction->id.'/'.(($auction->active - 1) * -1)?>"><span<?=($auction->active) ? " class='label label-success'>Yes" : " class='label label-danger'>No" ?></span></a></th>
                            <th>
                                <a class="btn-warning btn-sm ajax" href="<?=base_url()?>admin#/ajax_admin/edit/auction/<?=$auction->id?>">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a class="btn-danger btn-sm" href="action/delete/cargo/<?=$auction->id?>"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.padding-md -->
    </div><!-- /panel -->
</div><!-- /.padding-md -->
<?php $this->load->view('admin/templates/tableJS'); ?>