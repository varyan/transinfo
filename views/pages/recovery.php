<div class="login-wrapper">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-heading"><h3 class="text-primary animated animation-delay9 fadeInUp"><?=$system_title['forgot_pass']?></h3></div>
                    <div class="text-center">
                        <i class="fa fa-lock fa-4x"></i>
                        <p class="margin-md"><?=$system_title['if_you_forgot']?></p>
                        <div class="panel-body">
                            <?php if(!$this->session->flashdata('success')) : ?>
                            <?=form_open('client/recovery',"class='form' method='post'"); ?>
                                <fieldset>
                                    <div class="form-group">
                                        <label><?=$system_title['email'].' / '.$system_title['username']?></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <!--EMAIL ADDRESS-->
                                            <input name="pass_rec_email" id="pass_rec_email" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-lg btn-primary btn-block" value="<?=$system_title['send_pass']?>" type="submit">
                                    </div>
                                </fieldset>
                            <?=form_close(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>