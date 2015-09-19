<ul class="tab-bar grey-tab">
    <li class="active">
        <a href="#overview" class="tab_id_save" data-toggle="tab">
            <span class="block text-center"><i class="fa fa-user fa-2x"></i></span>
            <?=$system_title['profile']?>
        </a>
    </li>
    <li>
        <a href="#message" class="tab_id_save" data-toggle="tab">
            <span class="block text-center"><i class="fa fa-envelope fa-2x"></i></span>
            <?=$system_title['messages']?>
        </a>
    </li>
    <?php if($user->type_id == 1) : ?>
        <li>
            <a href="#cargo_list" class="tab_id_save" data-toggle="tab">
                <span class="block text-center"><i class="fa fa-list fa-2x"></i></span>
                <?=$system_title['cargo_list']?>
            </a>
        </li>
    <?php endif; ?>
    <li>
        <a href="#cargo" class="tab_id_save" data-toggle="tab">
            <?php if($user->type_id == 1) : ?>
                <span class="block text-center"><i class="fa fa-plus-square fa-2x"></i></span>
                <?=$system_title['add_cargo']?>
            <?php else: ?>
                <span class="block text-center"><i class="fa fa-list fa-2x"></i></span>
                <?=$system_title['cargo_list']?>
            <?php endif; ?>
        </a>
    </li>
    <li>
        <a style="cursor:pointer;" id="table_fullscreen" class="padding-md">
            <span class="block text-center"><i class="glyphicon glyphicon-fullscreen"></i></span>
        </a>
    </li>
</ul>

<div class="padding-md">
    <div class="row">
        <?php $this->load->view('user/templates/static'); ?>
        <div class="col-md-10" id="carg_list">
            <div class="tab-content">
                <div class="tab-pane fade fadeInDown animation-delay2 active in" id="overview">
                    <?php $this->load->view('user/templates/edit'); ?>
                </div><!-- /tab2 -->
                <div class="tab-pane fade fadeInDown animation-delay2" id="message">
                    <?php $this->load->view('user/templates/messages'); ?>
                </div><!-- /tab3 -->
                <?php if($user->type_id == 1) : ?>
                    <div class="tab-pane fade fadeInDown animation-delay2" id="cargo_list">
                        <?php $this->load->view('user/templates/cargo_list'); ?>
                    </div><!-- /tab3 -->
                <?php endif; ?>
                <div class="tab-pane fade fadeInDown animation-delay2" id="cargo">
                    <?php if($user->type_id == 1) : ?>
                        <?php $this->load->view('user/templates/cargo'); ?>
                    <?php else: ?>
                        <?php $this->load->view('user/templates/cargo_list'); ?>
                    <?php endif; ?>
                </div><!-- /tab3 -->
            </div><!-- /tab-content -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.padding-md -->
<div id="map" style="display:none;"></div>
<div id="dvPanel" style="display: none;"></div>