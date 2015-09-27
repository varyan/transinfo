<div class="form-group">
    <div class="col-md-12 well-sm text-center">
        <label class="text-primary"><?=$system_title['contact_info']?></label>
    </div>
    <div class="col-md-3"><label><?=$system_title['director_person']?></label></div>
    <div class="col-md-3">
        <label><?=$system_title['surname']?></label>
        <input value="<?=(isset($fields['director_person_surname'])) ? $fields['director_person_surname'] : '' ;?>" type="text" name="director_person_surname" class="form-control input-sm bounceIn animation-delay1">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['name']?></label>
        <input value="<?=(isset($fields['director_person_name'])) ? $fields['director_person_name'] : '' ;?>" type="text" name="director_person_name" class="form-control input-sm bounceIn animation-delay2">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['fatherland']?></label>
        <input value="<?=(isset($fields['director_person_fatherland'])) ? $fields['director_person_fatherland'] : '' ;?>" type="text" name="director_person_fatherland" class="form-control input-sm bounceIn animation-delay3">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['bank_details']?></label></div>
    <div class="col-md-9">
        <textarea type="text" name="bank_details" class="form-control input-sm bounceIn animation-delay4"></textarea>
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['contact_person']?></label></div>
    <div class="col-md-3">
        <label><?=$system_title['surname']?></label>
        <input value="<?=(isset($fields['contact_person_surname'])) ? $fields['contact_person_surname'] : '' ;?>" type="text" name="contact_person_surname" class="form-control input-sm bounceIn animation-delay5">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['name']?></label>
        <input value="<?=(isset($fields['contact_person_name'])) ? $fields['contact_person_name'] : '' ;?>" type="text" name="contact_person_name" class="form-control input-sm bounceIn animation-delay6">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['fatherland']?></label>
        <input value="<?=(isset($fields['contact_person_fatherland'])) ? $fields['contact_person_fatherland'] : '' ;?>" type="text" name="contact_person_fatherland" class="form-control input-sm bounceIn animation-delay7">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['website']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['website'])) ? $fields['website'] : '' ;?>" type="text" name="website" class="form-control input-sm bounceIn animation-delay8">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['email']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['email'])) ? $fields['email'] : '' ;?>" type="email" name="email" class="form-control input-sm bounceIn animation-delay9">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['phone']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['phone_number'])) ? $fields['phone_number'] : '' ;?>" type="text" name="phone_number" class="form-control input-sm bounceIn animation-delay10">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['mobile_phone']?></label></div>
    <div class="col-md-9">
        <div class="input-group paddingTB-xs">
            <input type="text" name="mobile_phone_number[]" class="form-control input-sm bounceIn animation-delay1">
            <span class="input-group-addon"><a style="cursor: pointer;" class="input-plus" id="number-plus"><i class="fa fa-plus"></i></a></span>
        </div>
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['fax']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['fax'])) ? $fields['fax'] : '' ;?>" type="text" name="fax" class="form-control input-sm bounceIn animation-delay2">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['icq']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['icq'])) ? $fields['icq'] : '' ;?>" type="text" name="icq" class="form-control input-sm bounceIn animation-delay3">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['skype']?></label></div>
    <div class="col-md-9">
        <input value="<?=(isset($fields['skype'])) ? $fields['skype'] : '' ;?>" type="text" name="skype" class="form-control input-sm bounceIn animation-delay4">
    </div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3"><label><?=$system_title['notes']?></label></div>
    <div class="col-md-9">
        <textarea type="text" name="notes" class="form-control input-sm bounceIn animation-delay5"></textarea>
    </div>
</div><!-- /form-group -->