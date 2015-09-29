<div class="col-md-12">
    <h3>Search filters</h3>
    <form action="" method="get" class="form-group no-margin">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><?=$system_title['load_location']?></div>
                <div class="panel-body">
                    <div class="form-group">
                        <select type="text" name="load_country" id="load_country" class="form-control input-sm bounceIn animation-delay7">
                            <option value="-1">------------<?=$system_title['select']?>------------</option>
                            <?php foreach($countries as $country): ?>
                                <option value="<?=$country->id?>"><?=$country->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <select type="text" name="load_region" id="load_region" class="form-control input-sm bounceIn animation-delay7">
                            <option value="-1">------------<?=$system_title['select']?>------------</option>
                            <?php foreach($regions as $region): ?>
                                <option value="<?=$region->reg_id?>"><?=$region->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <select type="text" name="load_city" id="load_city" class="form-control input-sm bounceIn animation-delay7">
                            <option value="-1">------------<?=$system_title['select']?>------------</option>
                            <?php foreach($cities as $cite): ?>
                                <option value="<?=$cite->cite_id?>"><?=$cite->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- /form-group -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><?=$system_title['unload_location']?></div>
                <div class="panel-body">
                    <div class="form-group">
                        <select type="text" name="unload_country" id="unload_country" class="form-control input-sm bounceIn animation-delay7">
                            <option value="-1">------------<?=$system_title['select']?>------------</option>
                            <?php foreach($countries as $country): ?>
                                <option value="<?=$country->id?>"><?=$country->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <select type="text" name="unload_region" id="unload_region" class="form-control input-sm bounceIn animation-delay7">
                            <option value="-1">------------<?=$system_title['select']?>------------</option>
                            <?php foreach($regions as $region): ?>
                                <option value="<?=$region->reg_id?>"><?=$region->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <select type="text" name="unload_city" id="unload_city" class="form-control input-sm bounceIn animation-delay7">
                            <option value="-1">------------<?=$system_title['select']?>------------</option>
                            <?php foreach($cities as $city): ?>
                                <option value="<?=$city->city_id?>"><?=$city->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- /form-group -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Other parameters</div>
                <div class="panel-body">
                    <label class="label-checkbox padding-xs">
                        <input type="checkbox">
                        <span class="custom-checkbox"></span>Op1
                    </label>
                    <label class="label-checkbox padding-xs">
                        <input type="checkbox">
                        <span class="custom-checkbox "></span>Op2
                    </label>
                    <div class="col-md-12 paddingTB-md">
                        <button class="btn btn-primary btn-block">Filter</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>