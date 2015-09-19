<div class="form-group">
    <div class="col-md-12 well-sm text-center">
        <label class="text-primary"><?=$system_title['work_address']?></label>
    </div>
    <div class="col-md-3"><label><?=$system_title['country']?></label></div>
    <div class="col-md-9">
        <select type="text" name="work_country" class="form-control input-sm bounceIn animation-delay7">
            <option value="-1">------------<?=$system_title['select']?>------------</option>
            <?php foreach($countries as $country): ?>
                <option value="<?=$country->id?>"><?=$country->name?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['city']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['work_city'])) ? $fields['work_city'] : '' ;?>" type="text" name="work_city" class="form-control input-sm bounceIn animation-delay8">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['region']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['work_region'])) ? $fields['work_region'] : '' ;?>" type="text" name="work_region" class="form-control input-sm bounceIn animation-delay9">
    </div>
</div><!-- /form-group -->