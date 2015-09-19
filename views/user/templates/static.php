<div class="col-md-2" id="user_default">
    <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-6 text-center">
            <a href="<?=base_url($lang.'/user/profile')?>">
                <img src="<?=(isset($user->img_name)) ? base_url('assets/img/'.$user_info->img_name) : base_url('assets/img/defaultuser.jpg')?>" alt="User Avatar" class="img-thumbnail">
            </a>
            <div class="seperator"></div>
            <a href="<?=base_url($lang.'/client/logout')?>" class="no-margin"><?=$system_title['logout']?></a>
            <div class="seperator"></div>
        </div><!-- /.col -->
        <div class="col-xs-6 col-sm-12 col-md-6">
            <a href="<?=base_url($lang.'/user/profile')?>"><strong class="font-14"><?=$user->username?></strong></a>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row">
                <span class="block text-primary padding-md">
                        <?=$user->email?>
                    </span>
        <div class="panel panel-info">
            <div class="panel-body">
                <?php $date_parts = explode('-',$user->updated_at); ?>
                <small>
                    <?=$system_title['last_update'].' '.$date_parts[0].' '.$months[$date_parts[1]].' '.$date_parts[2]?>
                </small>
            </div>
        </div><!-- /panel -->
    </div><!-- /.row -->
    <h5 class="headline">
        <?=$system_title['my_rate']?>
        <span class="line"></span>
    </h5>
    <div class="col-md-12 text-center">
        <h3 class="rating-num">
            <i class="fa fa-star"></i> Total <i class="fa fa-star"></i>
            <?php
            $rates = $get_rates($user->id);
            $rate = 0;
            for($i = 0; $i < count($rates); $i++){
                $rate += $rates[$i]->value;
            }
            $rate = (count($rates) > 0) ? $rate/count($rates) : 0
            ?>
            <?=number_format($rate,2)?>
        </h3>
    </div>
    <div class="col-md-12">
        <div class="row rating-desc">
            <dl>
                <?php
                for($i = 0; $i < count($types); $i++){
                    $result = $get_rate_type($user->id,$types[$i]);
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
</div><!-- /.col -->
