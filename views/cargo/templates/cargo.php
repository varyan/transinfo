<div class="col-md-12">
    <div class="panel panel-default animated slideInUp animation-delay4">
        <div class="panel-heading clearfix">
            <span class="pull-left"><?=$system_title['cargo']?></span>
            <ul class="tool-bar">
                <li><a href="#cargoView" data-toggle="collapse" class=""><i class="fa fa-arrows-v"></i></a></li>
            </ul>
        </div>
        <ul class="list-group collapse in well well-sm" id="cargoView">
            <li class="list-group-item clearfix">
                <div class="activity-icon small">
                    <i class="fa fa-cube"></i>
                </div>
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['title']?> : </span>
                    <span><?=$cargo_info->title?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <?php $from_date_parts = explode('-',$cargo_info->date_from); ?>
                    <?php $to_date_parts = explode('-',$cargo_info->date_to); ?>
                    <span><?=$system_title['date']?> : </span>
                                    <span><?=
                                        $system_title['from'].' '.$from_date_parts[0].'  '.$months[$from_date_parts[1]].' '.$from_date_parts[2].' - '
                                        .$system_title['to'].' '.$to_date_parts[0].'  '.$months[$to_date_parts[1]].' '.$to_date_parts[2]?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['cargo_dimensions']?> : </span>
                                    <span><?=$system_title['length'].' '.$cargo_info->length.' - '
                                        .$system_title['width'].' '.$cargo_info->width.' - '
                                        .$system_title['height'].' '.$cargo_info->height?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['weight']?> : </span>
                                    <span><?=$system_title['from'].' '.$cargo_info->from_weight.' - '
                                        .$system_title['to'].' '.$cargo_info->to_weight?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['volume']?> : </span>
                                    <span><?=$system_title['from'].' '.$cargo_info->from_volume.' - '
                                        .$system_title['to'].' '.$cargo_info->to_volume?></span><br>
                </div>
            </li>
        </ul><!-- /list-group -->
        <div class="loading-overlay">
            <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
        </div>
    </div><!-- /panel -->
</div>