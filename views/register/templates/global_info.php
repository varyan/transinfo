<div class="form-group">
    <div class="col-md-12 well-sm text-center">
        <label class="text-primary"><?=$system_title['global_info']?></label>
    </div>
    <div class="col-md-3"><label><?=$system_title['username']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['username'])) ? $fields['username'] : set_value('username') ;?>" type="text" name="username" class="form-control input-sm bounceIn animation-delay1">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['password']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['password'])) ? $fields['password'] : '';?>" type="password" name="password" class="form-control input-sm bounceIn animation-delay2">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['confirm_pass']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['confirm_pass'])) ? $fields['confirm'] : '';?>" type="password" name="confirm" class="form-control input-sm bounceIn animation-delay3">
    </div>
</div><!-- /form-group -->