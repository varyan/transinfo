<div class="form-group">
    <div class="col-md-12 text-center text-primary"><label><?=$system_title['tractor']?></label></div>
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
            <span class="input-group-addon"><a style="cursor: pointer;" class="input-plus" id="car-plus"><i class="fa fa-plus"></i></a></span>
        </div>
    </div>
    <div class="col-md-12"></div>
</div><!-- /form-group -->
<script>
    $(document).on('click','a#car-plus',function () {
        $(this).parent().parent().parent().next('div').append(
            '<div class="form-group">'+
            '<hr>'+
            '<div class="col-sm-3">'+
            '<label><?=$system_title['s_h_car']?></label>'+
            '<input class="form-control input-sm" name="s_h_cars[]" type="text">'+
            '</div>'+
            '<div class="col-sm-2">'+
            '<label><?=$system_title['mark']?></label>'+
            '<input class="form-control input-sm" name="mark[]" type="text">'+
            '</div>'+
            '<div class="col-sm-2">'+
            '<label><?=$system_title['year']?></label>'+
            '<input pattern="/^[0-9]{4}/" class="form-control input-sm" name="year[]" type="text">'+
            '</div>'+
            '<div class="col-sm-2">'+
            '<label><?=$system_title['vin']?></label>'+
            '<input class="form-control input-sm" name="vin[]" type="text">'+
            '</div>'+
            '<div class="col-sm-3">'+
            '<label><?=$system_title['technical_passport']?></label>'+
            '<div class="input-group">'+
            '<input class="form-control input-sm" name="technical_passport[]" type="text" required="" name="title_status">'+
            '<span class="input-group-addon">'+
            '<a style="cursor: pointer;" onclick="$(this).parent().parent().parent().parent().remove()" class="input-minus"><i class="fa fa-minus"></i></a>'+
            '</span>'+
            '</div>'+
            '</div>'+
            '<div class="col-md-12"></div>'+
            '</div>'
        );
    });
</script>