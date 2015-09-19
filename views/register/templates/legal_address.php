<div class="form-group">
    <div class="col-md-12 well-sm text-center">
        <label class="text-primary"><?=$system_title['leg_address']?></label>
    </div>
    <div class="col-md-3"><label><?=$system_title['country']?></label></div>
    <div class="col-md-9">
        <select type="text" name="legal_country" class="form-control input-sm bounceIn animation-delay4">
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
        <input value="<?=(isset($fields['legal_city'])) ? $fields['legal_city'] : '' ;?>" type="text" name="legal_city" class="form-control input-sm bounceIn animation-delay5">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['region']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['legal_region'])) ? $fields['legal_region'] : '' ;?>" type="text" name="legal_region" class="form-control input-sm bounceIn animation-delay6">
    </div>
</div><!-- /form-group -->