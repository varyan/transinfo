<div class="row margin-xs">
    <div class="col-md-12">
        <div class="text-center">
            <h2 class="fadeInUp animation-delay10" style="font-weight:bold;">
                <span class="text-primary"><?=$system_title['add_cargo']?></span>
            </h2>
        </div>
        <div class="login-widget animation-delay1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-plus-circle fa-lg"></i> <?=$system_title['add_cargo']?>
                </div>
                <div class="panel-body">
                    <?=form_open(base_url($lang.'/client/add_cargo'),'class="form-horizontal" method="post"')?>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label><?=$system_title['date']?></label>
                        </div>
                        <div class="col-md-4">
                            <label><?=$system_title['from']?></label>
                            <input type="text" name="date_from" class="date_input form-control input-sm ">
                        </div>
                        <div class="col-md-5">
                            <label><?=$system_title['to']?></label>
                            <input type="text" name="date_to" class="date_input form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['load_location']?></label></div>
                        <div class="col-md-9">
                            <input type="text" id="from_point" name="load_locality" class="form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label></label></div>
                        <div class="col-md-3">
                            <label><?=$system_title['country']?></label>
                            <input id="load_country"  type="text" name="load_country" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['city']?></label>
                            <input id="load_administrative_area_level_1" type="text" name="load_city" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['region']?></label>
                            <input id="load_locality" type="text" name="load_region" class="form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['unload_location']?></label></div>
                        <div class="col-md-9">
                            <input type="text" id="to_point" name="unload_locality" class="form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label></label></div>
                        <div class="col-md-3">
                            <label><?=$system_title['country']?></label>
                            <input id="unload_country" type="text" name="unload_country" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['city']?></label>
                            <input id="unload_administrative_area_level_1" type="text" name="unload_city" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['region']?></label>
                            <input id="unload_locality" type="text" name="unload_region" class="form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3 text-uppercase"><label><?=explode(' ',$system_title['calc_distance'])[1]?></label></div>
                        <div class="col-md-9">
                            <div class="text-primary" id="distance"></div>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-12 well-sm text-center">
                            <label class="text-primary"><?=$system_title['cargo']?></label>
                        </div>
                        <div class="col-md-3"><label><?=$system_title['title']?></label></div>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['cargo_dimensions']?></label></div>
                        <div class="col-md-3">
                            <label><?=$system_title['length']?></label>
                            <input type="text" name="length" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['height']?></label>
                            <input type="text" name="height" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['width']?></label>
                            <input type="text" name="width" class="form-control input-sm ">
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['weight']?></label></div>
                        <div class="col-md-3">
                            <label><?=$system_title['from']?></label>
                            <input type="text" name="from_weight" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['to']?></label>
                            <input type="text" name="to_weight" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['unit']?></label>
                            <select class="form-control input-sm" name="weight_unit">
                                <option value="t">T</option>
                                <option value="kg">Kg</option>
                            </select>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['volume']?></label></div>
                        <div class="col-md-3">
                            <label><?=$system_title['from']?></label>
                            <input type="text" name="from_volume" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['to']?></label>
                            <input type="text" name="to_volume" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <label><?=$system_title['unit']?></label>
                            <select class="form-control input-sm" name="volume_unit">
                                <option value="t">T</option>
                                <option value="kg">Kg</option>
                            </select>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-12 well-sm text-center">
                            <label class="text-primary"><?=$system_title['transport']?></label>
                        </div>
                        <div class="col-md-3"><label><?=$system_title['body_type']?></label></div>
                        <div class="col-md-3">
                            <select name="body_type" class="form-control input-sm ">
                                <option value="-1"><?=$system_title['select']?></option>
                                <?php foreach($body_types as $key=>$value): ?>
                                    <option value="<?=$key?>"><?=$value?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="col-md-3"><?=$system_title['loading']?></label>
                        <div class="col-md-9">
                            <label class="label-checkbox">
                                <input name="loading_top" value="top" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['top']?></span>
                            </label>
                            <label class="label-checkbox">
                                <input name="loading_lateral" value="lateral" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['lateral']?></span>
                            </label>
                            <label class="label-checkbox">
                                <input name="loading_rear" value="rear" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['rear']?></span>
                            </label>
                            <label class="label-checkbox">
                                <input name="loading_no_gate" value="no_gate" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['no_gate']?></span>
                            </label>
                            <label class="label-checkbox">
                                <input name="loading_with_removal_of_racks" value="with_removal_of_racks" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['with_removal_of_racks']?></span>
                            </label>
                            <label class="label-checkbox">
                                <input name="loading_with_removal_crossbars" value="with_removal_crossbars" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['with_removal_crossbars']?></span>
                            </label>
                            <label class="label-checkbox">
                                <input name="loading_full_movable_curtains" value="full_movable_curtains" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span><?=$system_title['full_movable_curtains']?></span>
                            </label>
                        </div><!-- /.col -->
                    </div>
                    <div class="form-group">
                        <label class="col-md-3"><?=$system_title['permissions']?></label>
                        <div class="col-md-9">
                            <label class="label-checkbox">
                                <input name="permission_CMR" value="CMR" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span>CMR</span>
                            </label>
                            <label class="label-checkbox">
                                <input name="permission_EKMT" value="EKMT" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span>ЕКМТ</span>
                            </label>
                            <label class="label-checkbox">
                                <input name="permission_TIR" value="TIR" type="checkbox">
                                <span class="custom-checkbox"></span>
                                <span>TIR</span>
                            </label>
                        </div><!-- /.col -->
                    </div>
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['cars_count']?></label></div>
                        <div class="col-md-3">
                            <input type="text" name="tractor_count" class="form-control input-sm ">
                        </div>
                        <div class="col-md-3">
                            <select name="tractor_per" class="form-control input-sm ">
                                <option value="-1">----------<?=$system_title['select']?>----------</option>
                                <?php foreach($tractor as $key=>$value): ?>
                                    <option value="<?=$key?>"><?=$value?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-12 well-sm text-center">
                            <label class="text-primary"><?=$system_title['cl_payments']?></label>
                        </div>
                        <div class="col-md-3"><label><?=$system_title['form_of_payment']?></label></div>
                        <div class="col-md-3">
                            <select name="payment_type" class="form-control input-sm ">
                                <option value="-1">----------<?=$system_title['select']?>----------</option>
                                <?php foreach($payment_types as $key=>$value): ?>
                                    <option value="<?=$key?>"><?=$value?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['prepay']?></label></div>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" name="prepay" class="form-control input-sm bounceIn animation-delay1">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <div class="col-md-3"><label><?=$system_title['notes']?></label></div>
                        <div class="col-md-9">
                            <textarea name="notes" class="form-control "></textarea>
                        </div>
                    </div><!-- /form-group -->
                    <hr>
                    <div class="form-group">
                        <div class="controls text-right col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm " ><i class="fa fa-plus-circle"></i> <?=explode(' ',$system_title['add_cargo'])[0]?></button>
                        </div>
                    </div><!-- /form-group -->
                    <?=form_close();?>
                </div>
            </div><!-- /panel -->
        </div><!-- /login-widget -->
    </div>
</div>
<div id="map" style="display:none;"></div>