<?php $translations = $admin_get('translations'); ?>
<div class="padding-md">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            Data Table
            <span class="label label-info pull-right"><?=count($translations)?> Items</span>
        </div>
        <div class="padding-md clearfix">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th class="text-center" style="max-width: 450px;">Content</th>
                        <th>Updated Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($translations as $text) : ?>
                        <tr>
                            <th style="max-width: 450px;" class="text-center"><?=$text->content?></th>
                            <th><?=$text->updated_at?></th>
                            <th>
                                <a class="btn-warning btn-sm ajax" href="<?=base_url()?>admin#/ajax_admin/edit/translation/<?=$text->id?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn-danger btn-sm" href="action/delete/translation/<?=$text->id?>"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /.padding-md -->
    </div><!-- /panel -->
</div><!-- /.padding-md -->
<?php $this->load->view('admin/templates/tableJS'); ?>