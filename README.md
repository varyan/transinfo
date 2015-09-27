# transinfo


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