<div class="form-group">
    <div class="col-md-12 text-center text-primary"><label><?=$system_title['trailer'].'/'.$system_title['semitrailer']?></label></div>
    <div class="col-md-12 well-lg text-center">
        <label class="label-radio inline">
            <input type="radio" name="type" value="trailer">
            <span class="custom-radio"></span>
            <?=$system_title['trailer']?>
        </label>
        <label class="label-radio inline">
            <input type="radio" name="type" value="semitrailer">
            <span class="custom-radio"></span>
            <?=$system_title['semitrailer']?>
        </label>
    </div>
    <div class="col-md-3">
        <label><?=$system_title['s_h_car']?></label>
        <input value="<?=(isset($fields['s_h_car'])) ? $fields['s_h_car'] : '' ;?>" type="text" name="s_h_car" class="form-control input-sm bounceIn animation-delay5">
    </div>
    <div class="col-md-2">
        <label><?=$system_title['mark']?></label>
        <input value="<?=(isset($fields['mark'])) ? $fields['mark'] : '' ;?>" type="text" name="mark" class="form-control input-sm bounceIn animation-delay6">
    </div>
    <div class="col-md-2">
        <label><?=$system_title['year']?></label>
        <input value="<?=(isset($fields['year'])) ? $fields['year'] : '' ;?>" type="text" name="year" class="form-control input-sm bounceIn animation-delay7">
    </div>
    <div class="col-md-2">
        <label><?=$system_title['vin']?></label>
        <input value="<?=(isset($fields['vin'])) ? $fields['vin'] : '' ;?>" type="text" name="vin" class="form-control input-sm bounceIn animation-delay7">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['technical_passport']?></label>
        <input value="<?=(isset($fields['technical_passport'])) ? $fields['technical_passport'] : '' ;?>" type="text" name="technical_passport" class="form-control input-sm bounceIn animation-delay7">
    </div>
    <div class="col-md-12"></div>
</div><!-- /form-group -->
<div class="form-group">
    <div class="col-md-3">
        <label><?=$system_title['internal_parameters']?></label>
        <select id="internal_parameters" multiple="multiple" name="internal_parameters[]">
            <option value="internal_1">internal_1</option>
            <option value="internal_2">internal_2</option>
            <option value="internal_3">internal_3</option>
        </select>
    </div>
    <div class="col-md-3">
        <label><?=$system_title['load_type']?></label>
        <input value="<?=(isset($fields['load_type'])) ? $fields['load_type'] : '' ;?>" type="text" name="load_type" class="form-control input-sm bounceIn animation-delay7">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['volume']?></label>
        <input value="<?=(isset($fields['volume'])) ? $fields['volume'] : '' ;?>" type="text" name="volume" class="form-control input-sm bounceIn animation-delay7">
    </div>
    <div class="col-md-3">
        <label><?=$system_title['load_capacity']?></label>
        <div class="input-group">
            <input type="text" name="load_capacity" class="form-control input-sm bounceIn animation-delay1">
            <span class="input-group-addon"><a style="cursor: pointer;" class="input-plus" id="trailer-plus"><i class="fa fa-plus"></i></a></span>
        </div>
    </div>
    <div class="col-md-12"></div>
</div><!-- /form-group -->
<div class="clearfix"></div>
<script>
    $(document).on('click','a#trailer-plus1',function () {
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