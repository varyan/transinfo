<div class="col-md-12">
    <div class="panel panel-default animated slideInUp animation-delay8">
        <div class="panel-heading clearfix">
            <span class="pull-left"><?='Ratings'?></span>
            <ul class="tool-bar">
                <li><a href="#rateView" data-toggle="collapse" class=""><i class="fa fa-arrows-v"></i></a></li>
            </ul>
        </div>
        <ul class="list-group collapse in well well-sm" id="rateView">
            <li class="list-group-item clearfix">
                <div class="">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 text-center">
                            <?php $user_find_id = ($user->type_id == 1) ? $user_find_id : $cargo_info->user_id ?>
                            <div class="rating">
                                <a href="<?=base_url($lang.'/rating/show/'.$user_find_id)?>"><h3><i class="fa fa-star"></i> <?=$system_title['total']?> <i class="fa fa-star"></i></h3></a>
                            </div>
                            <h3 class="rating-num">
                                <?php
                                    $rates = $get_rates($user_find_id);
                                    $rate = 0;
                                    for($i = 0; $i < count($rates); $i++){
                                        $rate += $rates[$i]->value;
                                    }
                                    $rate = (count($rates) > 0) ? $rate/count($rates) : 0
                                ?>
                                <?=number_format($rate,2)?>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="row rating-desc">
                                <dl>
                                    <?php
                                    for($i = 0; $i < count($types); $i++){
                                        $result = $get_rate_type($user_find_id,$types[$i]);
                                        $rate = 0;
                                        for($j = 0; $j < count($result); $j++){
                                            $rate += $result[$j]->value;
                                        }
                                        $rate = (count($result) > 0) ? $rate/count($result) : 0
                                        ?>
                                        <dt class="padding-xs text-primary"><?=$system_title[$types[$i]]?> <span class="pull-right"><?=20*$rate?>%</span></dt>
                                        <dd>
                                            <div class="progress progress-striped">
                                                <div class="progress-bar progress-bar-striped animated-bar" style="width:<?=20*$rate?>%"></div>
                                            </div>
                                        </dd>
                                        <?php
                                    }
                                    ?>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul><!-- /list-group -->
        <div class="loading-overlay">
            <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
        </div>
    </div><!-- /panel -->
</div>