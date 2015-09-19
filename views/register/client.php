<div class="row margin-lg">
    <div class="col-md-8 col-md-offset-2">
        <div class="text-center">
            <h2 class="fadeInUp animation-delay10" style="font-weight:bold;">
                <span class="text-primary"><?=$system_title['client']?></span> <span style="color:#ccc; text-shadow:0 1px #fff"><?=$system_title['register']?></span>
            </h2>
        </div>
        <div class="login-widget animation-delay1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-plus-circle fa-lg"></i> <?=$system_title['register']?>
                </div>
                <div class="panel-body">
                    <?=form_open(base_url($lang.'/action/register/1'),'class="form-horizontal" method="post"')?>
                    <?php
                        $this->load->view('register/templates/global_info');
                        $this->load->view('register/templates/legal_address');
                        $this->load->view('register/templates/work_address');
                        $this->load->view('register/templates/inn_info');
                        $this->load->view('register/templates/contact_info');
                    ?>
                    <hr>
                    <div class="form-group">
                        <div class="controls text-right col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm bounceIn animation-delay7" ><i class="fa fa-plus-circle"></i> <?=$system_title['register']?></button>
                        </div>
                    </div><!-- /form-group -->
                    <?=form_close()?>
                </div>
            </div><!-- /panel -->
        </div><!-- /login-widget -->
    </div>
</div>