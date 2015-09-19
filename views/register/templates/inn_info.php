<div class="form-group">
    <div class="col-md-12 well-sm text-center">
        <label class="text-primary"><?=$system_title['inn_text']?></label>
    </div>
    <div class="col-md-3"><label><?=$system_title['inn']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['inn'])) ? $fields['inn'] : '' ;?>" type="text" name="inn" class="form-control input-sm bounceIn animation-delay10">
    </div>
</div><!-- /form-group -->