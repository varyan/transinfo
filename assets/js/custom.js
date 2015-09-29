var BaseURL = '', Type = 1; activeEdit = false, old_text = '', fullTable = false;

$(document).ready(function () {

    $('.internal_parameters').multiselect({
        buttonClass: 'btn btn-default btn-sm',
        includeSelectAllOption: true,
        selectAllText: 'Check all!',
    });

    $(document).on('change','#legal_country, #work_country, #load_country, #unload_country', function () {
        var self = $(this);
        var country = this.value;
        var forElem = this.id.split('_')[0]+'_region';
        var options = '';
        $.post(BaseURL+'/register/regions',{cn_code:country}, function (data) {

            for(var i = 0; i < data.response.length; i++){
                options += "<option value='"+ data.response[i].reg_id +"'>"+ data.response[i].name +"</option>";
            }

            var op = self.find('option:first').clone();

            $('#'+forElem).html(op);
            $('#'+forElem).append(options);
        },'json');
    });

    $(document).on('change','#legal_region, #work_region, #load_region, #unload_region', function () {
        var self = $(this);
        var region = this.value;
        var forElem = this.id.split('_')[0]+'_city';
        var options = '';
        $.post(BaseURL+'/register/cities',{region_code:region}, function (data) {

            for(var i = 0; i < data.response.length; i++){
                options += "<option value='"+ data.response[i].city_id +"'>"+ data.response[i].name +"</option>";
            }

            var op = self.find('option:first').clone();

            $('#'+forElem).html(op);
            $('#'+forElem).append(options);
        },'json');
    });


    $(document).on('submit','#ready_for', function (event) {
        event.preventDefault();
        var for_user_items = $('#for_user').val().split(',');

        Request(BaseURL+'/client/ready_for',{
            user_id :for_user_items[0],
            cargo_id:for_user_items[1],
            pay_sum :$('#pay_sum').val()
        });
        $('#pay_for_form').html('<h5 class="text-primary text-center well">Вы одобрили эту сделку за '+ $('#pay_sum').val() +' рублей.</h5>');
    });

    $(document).on('click','#table_fullscreen', function () {
        if(!fullTable) {
            fullTable = true;
            $('#carg_list').attr('class','').addClass('col-md-12');
            $('#table_fullscreen i:first').attr('class','').addClass('fa fa-desktop');
            $('div#user_default').hide();
            $(document).fullScreen(true);
        }else{
            fullTable = false;
            $('#carg_list').attr('class','').addClass('col-md-10');
            $('#table_fullscreen i:first').attr('class','').addClass('glyphicon glyphicon-fullscreen');
            $('div#user_default').show();
            $(document).fullScreen(false);
        }
    });

    $(document).on('click','#profile_edit', function () {
        old_text = $(this).text();
        $(this).attr('id','exit_edit').html('<i class="fa fa-close"></i>');
        $.each($('label.editable'), function (k, v) {
            $(this).next().html('<span class="edit_current"><i class="fa fa-pencil"></i></span>');
        });
    });

    $(document).on('click','#exit_edit', function () {
        if(!activeEdit) {
            $(this).attr('id', 'profile_edit').html('<i class="fa fa-pencil"></i> ' + old_text);
            $.each($('label.editable'), function (k, v) {
                $(this).next().html('');
            });
        }else{
            $.gritter.add({
                title: 'Warning',
                text: '<ul class="list-unstyled">At first click active check</ul>',
                sticky: false,
                time: '',
                class_name: 'gritter-warning'
            });
            return false;
        }
    });

    $(document).on('click','.edit_current', function () {
        if(!activeEdit) {
            activeEdit = true;
            var $elemnt = $(this).parent().prev();
            $(this).attr('class','').addClass('save_current');
            $(this).find('i').attr('class','').addClass('fa fa-check');
            $elemnt.html('<input style="width:100%;" name="' + $elemnt.attr('id') + '" class="form-control" type="text" value="' + $elemnt.text() + '">');
        }
    });

    $(document).on('click','.save_current', function () {
        activeEdit = false;
        var $elemnt = $(this).parent().prev();

        if($('input[name=' + $elemnt.attr('id') + ']').val() != old_text) {
            Request(BaseURL + '/client/update', {
                item_id:$elemnt.attr('data-id'),
                row_for: $elemnt.attr('data-for'),
                row: $elemnt.attr('id'),
                value: $('input[name=' + $elemnt.attr('id') + ']').val()
            });
        }

        $elemnt.html($('input[name='+ $elemnt.attr('id') +']').val());
        $(this).parent().html('<span class="edit_current"><i class="fa fa-pencil"></i></span>');

    });

    $('.date_input').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        format: "dd-mm-yyyy"
    });

    if(readCookie('tab') != null){
        $.each($('.tab_id_save'), function (k, v) {
            if($(this).attr('href') == readCookie('tab')){
                $(this).parent('li').addClass('active');
                $($(this).attr('href')).addClass('in active');
            }else{
                if($(this).attr('href') == '#overview'){
                    $(this).parent('li').addClass('active');
                    $($(this).attr('href')).addClass('in active');
                }
                $(this).parent('li').removeClass('active');
                $($(this).attr('href')).removeClass('in').removeClass('active');
            }
        });
        $(this).parent('li').addClass('active');
    }

    $(document).on('click','a.input-plus',function () {
        var controlForm = $(this).parent().parent().parent();
        var name = $(this).parent().prev().prev().attr('name');
        var newInput = $(this).parent().parent().clone();
        controlForm.append(newInput);
        controlForm.find('.fa-plus:not(:last)')
            .removeClass('fa-plus').addClass('fa-minus');
        $(this).removeClass('input-plus').addClass('input-minus');
    }).on('click','a.input-minus', function () {
        $(this).parents('.input-minus:first').remove();
    });

    $('.tab_id_save').click(function () {
        createCookie('tab',$(this).attr('href'));
    });

    $(document).on('click','.input-minus', function () {$(this).parent().parent().remove();});

    $("#cargo_type,#cargo_weight, #load_days, #unload_days, #payments").rating({
        backgroundColor:'#333',
        starCaptions: function(val) {
            return val;
        },
        starCaptionClasses: function(val) {
            if (val < 2.5) {
                return 'label label-danger';
            } else {
                if(val > 2.5 && val < 4){
                    return 'label label-warning';
                }else{
                    return 'label label-success';
                }
            }
        },
        hoverOnClear: false
    }).on({
        'rating.change': function (event, value, caption) {
            Request(BaseURL+'/client/rate',{
                value:value,
                to_id:1,
                rate_type:this.id
            });
        },
        'rating.clear': function (event) {
            Request(BaseURL+'/client/rate',JSON.stringify({
                user_id:1
            }));
        }
    });
});

function Request(url,sendData,action){
    $.ajax({
        url:url,
        method:"POST",
        dataType:"json",
        data:sendData,
        success: function (data) {
            GenerateNotification(data.status,data.response,data.message);
        },
        error: function (data) {
            GenerateNotification(data.status,data.response,data.message);
        }
    });
}

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

function GenerateNotification(status,data,message){
    var BgColor = 'danger',response = '';
    if(status == 'success') {
        BgColor = "success";
    }else{
        BgColor = "danger";
    }
    for(var item in data){response += '<li>'+item+': '+data[item]+'<li>';}

    $.gritter.add({
        title: "Status: "+status+'<br><small class="paddingLR-lg">'+ message +'</small>',
        text: '<ul class="list-unstyled">'+ response +'</ul>',
        sticky: false,
        time: '',
        class_name: 'gritter-'+BgColor
    });
    return false;
    RemoveNotification();
}

function RemoveNotification(){
    setTimeout(function () {
        $('#flash').remove();
    },5000);
}

$(function	()	{
    if(typeof document.getElementById('dataTable') != 'undefined') {
        var table = $('#dataTable').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });

        $('#dataTable tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
    }
});
