<div class="col-md-12">
    <div class="panel panel-default animated slideInUp animation-delay5">
        <div class="panel-heading clearfix">
            <span class="pull-left"><?=$system_title['cl_payments']?></span>
            <ul class="tool-bar">
                <li><a href="#paymentView" data-toggle="collapse" class=""><i class="fa fa-arrows-v"></i></a></li>
            </ul>
        </div>
        <ul class="list-group collapse in well well-sm" id="paymentView">
            <li class="list-group-item clearfix">
                <div class="activity-icon small">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['cl_payments']?> : </span>
                    <span><?=$payment_types[$cargo_info->payment_type]?></span><br>
                </div>
            </li>
            <li class="list-group-item clearfix">
                <div class="pull-left m-left-sm">
                    <span><?=$system_title['prepay']?> : </span>
                    <span><?=$cargo_info->prepay?> %</span><br>
                </div>
            </li>
        </ul><!-- /list-group -->
        <div class="loading-overlay">
            <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
        </div>
    </div><!-- /panel -->
</div>