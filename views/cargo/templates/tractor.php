<div class="col-md-12">
    <div class="panel panel-default animated slideInUp animation-delay5">
        <div class="panel-heading clearfix">
            <span class="pull-left"><?=$system_title['tractor']?></span>
            <ul class="tool-bar">
                <li><a href="#tractorView" data-toggle="collapse" class=""><i class="fa fa-arrows-v"></i></a></li>
            </ul>
        </div>
        <ul class="list-group collapse in well well-sm" id="tractorView">
            <li class="list-group-item clearfix">
                <div class="activity-icon small">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['body_type']?>: </span>
                    <span><?=$body_types[$cargo_info->body_type]?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['loading']?>: </span>
                    <span>(
                        <?php $loading = json_decode($cargo_info->loading); for($i = 0; $i < count($loading); $i++) : ?>
                            <?=$system_title[$loading[$i]]?>
                            <?=($i < count($loading) - 1) ? ', ' : ''?>
                        <?php endfor; ?>
                     )</span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['permissions']?>: </span>
                    <span>(
                        <?php $permission = json_decode($cargo_info->permission); for($i = 0; $i < count($permission); $i++) : ?>
                            <?=$permission[$i]?>
                            <?=($i < count($permission) - 1) ? ', ' : ''?>
                        <?php endfor; ?>
                        )</span><br>
                </div>
            </li>
        </ul><!-- /list-group -->
        <div class="loading-overlay">
            <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
        </div>
    </div><!-- /panel -->
</div>