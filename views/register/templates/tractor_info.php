<div class="form-group">
    <div class="tractor_area">
        <div class="tractor_single">
            <div class="col-md-12 text-center text-primary paddingTB-xs"><label><?=$system_title['tractor']?></label></div>
            <div class="col-md-3">
                <label><?=$system_title['s_h_car']?></label>
                <input value="<?=(isset($fields['contact_person_surname'])) ? $fields['contact_person_surname'] : '' ;?>" type="text" name="contact_person_surname" class="form-control input-sm bounceIn animation-delay5">
            </div>
            <div class="col-md-2">
                <label><?=$system_title['mark']?></label>
                <input value="<?=(isset($fields['contact_person_name'])) ? $fields['contact_person_name'] : '' ;?>" type="text" name="contact_person_name" class="form-control input-sm bounceIn animation-delay6">
            </div>
            <div class="col-md-2">
                <label><?=$system_title['year']?></label>
                <input value="<?=(isset($fields['contact_person_fatherland'])) ? $fields['contact_person_fatherland'] : '' ;?>" type="text" name="contact_person_fatherland" class="form-control input-sm bounceIn animation-delay7">
            </div>
            <div class="col-md-2">
                <label><?=$system_title['vin']?></label>
                <input value="<?=(isset($fields['contact_person_fatherland'])) ? $fields['contact_person_fatherland'] : '' ;?>" type="text" name="contact_person_fatherland" class="form-control input-sm bounceIn animation-delay7">
            </div>
            <div class="col-md-3">
                <label><?=$system_title['technical_passport']?></label>
                <div class="input-group">
                    <input type="text" name="mobile_phone_number[]" class="form-control input-sm bounceIn animation-delay1">
                    <span class="input-group-addon"><a style="cursor: pointer;" class="car-plus" id="car-plus"><i class="fa fa-plus"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</div><!-- /form-group -->
<script>
    $(document).on('click','a.car-plus',function () {
        var controlForm = $(this).parent().parent().parent().parent().parent();
        var newInput = $(this).parent().parent().parent().parent().clone();
        controlForm.append(newInput);
        controlForm.find('.fa-plus:not(:last)')
            .removeClass('fa-plus').addClass('fa-minus');
        $(this).removeClass('car-plus').addClass('car-minus');
    }).on('click','.car-minus', function () {
        $(this).parents('.tractor_single:first').remove();
    });
</script>