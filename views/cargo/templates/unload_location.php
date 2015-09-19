<div class="col-md-12">
    <div class="panel panel-default animated slideInUp animation-delay3">
        <div class="panel-heading clearfix">
            <span class="pull-left"><?=$system_title['unload_location']?></span>
            <ul class="tool-bar">
                <li><a href="#unloadLocView" data-toggle="collapse" class=""><i class="fa fa-arrows-v"></i></a></li>
            </ul>
        </div>
        <ul class="list-group collapse in well well-sm" id="unloadLocView">
            <li class="list-group-item clearfix">
                <div class="activity-icon small bg-danger">
                    <i>B</i>
                </div>
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['country']?>: </span>
                    <span><?=$cargo_info->unload_country?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['city']?>: </span>
                    <span><?=$cargo_info->unload_city?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['region']?>: </span>
                    <span><?=$cargo_info->unload_region?></span><br>
                </div>
            </li>
        </ul><!-- /list-group -->
        <div class="loading-overlay">
            <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
        </div>
    </div><!-- /panel -->
</div>