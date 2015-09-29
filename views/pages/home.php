<div class="row margin-lg">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php if(!$auth) { ?>
                <i class="fa fa-lock fa-3x animated lightSpeedIn animation-delay10"></i> <?=$system_title['login']?></div>
                <?php }else{ ?>
                <i class="fa fa-unlock fa-3x animated lightSpeedIn animation-delay10"></i> <?=$user->username?></div>
                <?php } ?>
            <div class="panel-body">
                <?php if(!$auth) { ?>
                <?=form_open(base_url($lang.'/client/login'),'method="post", name="login_form" id="login_form"')?>
                    <div class="form-group">
                        <label for="email"><?=$system_title['email'].' / '.$system_title['username']?></label>
                        <input type="text" name="email" class="form-control input-sm animation-delay3 bounceIn">
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label for="password"><?=$system_title['password']?></label>
                        <input type="password" name="password" class="form-control input-sm animation-delay4 bounceIn">
                    </div><!-- /form-group -->
                    <button type="submit" class="btn btn-primary animation-delay5 bounceIn btn-block"><?=$system_title['login']?></button>
                <?=form_close()?>
                <div class="form-group margin-md">
                    <?=$system_title['forgot_pass']?><br>
                    <?=$system_title['click']?> <a href="<?=base_url()?>recovery" class="text-primary text-uppercase"><?=$system_title['here']?></a> <?=$system_title['for_restore']?>
                </div>
                <?php }else{ ?>
                    <div class="user-block clearfix">
                        <img class="img-responsive img-circle animated rotateInDownLeft animation-delay2" style="max-width: 80px;" src="<?=(isset($user->img_name)) ? base_url('assets/img/'.$user_info->img_name) : base_url('assets/img/defaultuser.jpg')?>" alt="User Avatar">
                        <div class="detail">
                            <strong class="margin-md"></strong>
                            <ul class="list-inline">
                                <li class=""><a href="<?=base_url($lang.'/user/profile')?>"><?=$system_title['profile']?></a></li>
                                <li><a href="<?=base_url($lang.'/client/logout')?>" class="no-margin"><?=$system_title['logout']?></a></li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div><!-- /panel -->
    </div>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><?=$system_title['calc_distance']?></div>
                    <div class="panel-body">
                        <div class="form-inline no-margin">
                            <div class="form-group">
                                <input style="min-width: 200px; width: 300px;" type="text" class="form-control input-sm animation-delay7 bounceIn" id="from_point">
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <input style="min-width: 200px; width: 300px;" type="text" class="form-control input-sm animation-delay8 bounceIn" id="to_point">
                            </div><!-- /form-group -->
                            <button type="button" onclick="GetRoute()" class="btn btn-sm btn-primary animation-delay9 bounceIn"><?=$system_title['get_rout']?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div id="distance" style="display: none;"></div>
                <div id="map" style="display:none; min-height: 300px; height: 500px;"></div>
                <div class="col-md-12 padding-lg">

                </div>
            </div>
            <div class="col-md-4">
                <div id="dvPanel"></div>
            </div>
        </div>
        <div class="row <?=($auth) ? 'hidden' : ''?>">
            <div class="col-md-4 col-md-offset-2 well-sm">
                <a href="<?=base_url($lang.'/register/client')?>" class="btn btn-primary btn-block btn-lg animation-delay8 fadeInUp"><?=$system_title['client']?> <?=$system_title['register']?></a>
            </div>
            <div class="col-md-4 col-md-offset-2 well-sm">
                <a href="<?=base_url($lang.'/register/transport')?>" class="btn btn-primary btn-block btn-lg animation-delay10 fadeInUp"><?=$system_title['company']?> <?=$system_title['register']?></a>
            </div>
        </div>
        <div class="row"></div>
    </div>
    <div class="col-md-12">
        <div id="portfolio">
            <div class="section-header">
                <hr class="left visible-lg">
					<span>
						Our Partners
					</span>
                <hr class="right visible-lg">
            </div>

            <div class="container">
                <div class="row recent-work">
                    <div class="col-sm-3">
                        <div class="detail fadeInUp animated-element">
                            <a href="#" class="hoverBorder">
									<span class="hoverBorderWrapper">
										<img class="img-responsive img-thumbnail" src="assets/img/user4.jpg" alt="portfolio">
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>
                            </a>
                            <div class="seperator"></div>
                            <p>
                            </p><h4>Responsive Design</h4>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</small>
                            <p>
                            </p></div><!--detail-->
                    </div><!--col-->
                    <div class="col-sm-3">
                        <div class="detail fadeInUp animated-element animation-delay2">
                            <a href="#" class="hoverBorder">
									<span class="hoverBorderWrapper">
										<img class="img-responsive img-thumbnail" src="assets/img/user2.jpg" alt="portfolio">
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>
                            </a>
                            <div class="seperator"></div>
                            <p>
                            </p><h4>HTML5 &amp; CSS3</h4>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</small>
                            <p>
                            </p></div><!--detail-->
                    </div><!--col-->
                    <div class="col-sm-3">
                        <div class="detail fadeInUp animated-element animation-delay4">
                            <a href="#" class="hoverBorder">
									<span class="hoverBorderWrapper">
										<img class="img-responsive img-thumbnail" src="assets/img/user3.jpg" alt="portfolio">
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>
                            </a>
                            <div class="seperator"></div>
                            <p>
                            </p><h4>Unlimited Theme color</h4>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</small>
                            <p>
                            </p></div><!--detail-->
                    </div><!--col-->
                    <div class="col-sm-3">
                        <div class="detail fadeInUp animated-element animation-delay6">
                            <a href="#" class="hoverBorder">
									<span class="hoverBorderWrapper">
										<img class="img-responsive img-thumbnail" src="assets/img/user5.jpg" alt="portfolio">
										<span class="hoverBorderInner"></span>
										<span class="readMore">+ Read more</span>
									</span>
                            </a>
                            <div class="seperator"></div>
                            <p>
                            </p><h4>Browser Compatibility</h4>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</small>
                            <p>
                            </p></div><!--detail-->
                    </div><!--col-->
                </div>
            </div>
        </div>
    </div>
</div>