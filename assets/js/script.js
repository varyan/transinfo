var page = '', active = false, BaseURL = '', timerOut = 5;

LoadContent(location.href);

window.onpopstate = function() {
    LoadContent(location.href);
};

function init(url){BaseURL = url;}

$(document).on('submit',"form",function( event ) {
    var formData = new FormData(this);
    FormSubmit(this.action,formData);
    NoReload(event);
});

$(document).on('click','a.ajax',function (event) {
    var url = $(this).attr('href').split('/'), element = this;
    NoReload(event);
    if (this.href.indexOf("#") >= 0)
        LoadContent($(this).attr('href'));
    else {
        $.ajax({
            url: $(this).attr('href'),
            type: "POST",
            dataType: "JSON",
            data: {},
            success: function (data) {
                var newUrl = ''; for(var i = 0; i < url.length-1; i++){newUrl += url[i]+'/';}
                var aClass = 'success', text = 'Yes';
                if((parseInt(data.response.active) - 1) * (-1)){aClass = 'danger'; text = 'No';}
                newUrl += (parseInt(data.response.active)-1)*(-1);
                $(element).attr('href',newUrl);
                $(element).find('span').attr('class','').addClass('label label-'+aClass).text(text);
                $(element).parent().next().next().text(data.response.updated);
                GenerateNotification(data.status, data.response, data.message);
            },
            error: function (data) {
                GenerateNotification(data.status, data.response, data.message);
            }
        });
    }
});

function LoadContent(url){
    var load = url.split('#/')[1];
    if(location.href != 'http://localhost/transinfo.ru/admin')
        var title = load.split('/')[1];
    $.ajax({
        url:load,
        type:"POST",
        data:{},
        beforeSend: function () {
            $('#main-container').html('<div style="position: absolute; top:49%;left:49%;"><i class="fa fa-spinner fa-spin fa-4x"></i> Process...</div>');
        },
        success: function (response) {
            $('#main-container').html(response);
        }
    });
    window.history.pushState('','',url);
    if(location.href != 'http://localhost/transinfo.ru/admin')
        document.title = (title.charAt(0).toUpperCase()) + title.substr(1);
}

function FormSubmit(url,data){
    var reload = (url.indexOf("login") > 0) ? true : false;
    $.ajax({
        url:url,
        type:"POST",
        cache: false,
        contentType: false,
        processData: false,
        dataType:"JSON",
        data:data,
        success: function (data) {
            GenerateNotification(data.status,data.response,data.message,reload);
        },
        error: function (data) {
            GenerateNotification(data.status,data.response,data.message);
        }
    });
}

function GenerateNotification(status,data,message,reload){
    var BgColor = 'danger',response = '';
    if(status == 'success') {
        BgColor = "success";
        if(reload) {
            active = true;
            $('#login_area').html('<div style="position: absolute; top:49%;left:49%;"><i class="fa fa-spinner fa-spin fa-4x"></i> Auth process...</div>');
        }
    }else{
        BgColor = "danger";
    }
    for(var item in data){response += '<li>'+item+': '+data[item]+'<li>';}

    $.gritter.add({
        title:"Status: "+status+'<br><small class="paddingLR-lg">'+ message +'</small>',
        text: '<ul class="list-unstyled">'+ response +'</ul>',
        class_name: 'gritter-'+BgColor,
    });
    RemoveNotification();
}

function RemoveNotification(){
    setTimeout(function () {
        $('#flash').remove();
        if(active) {
            window.location = BaseURL+"admin#/ajax_admin/index";
            location.reload(true);
        }
    },5000);
}

function NoReload(event){
    if(typeof event.preventDefault == 'undefined'){return void(0);}
    else{event.preventDefault();}
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#selected_flag').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).on('change',"#upload_file",function(event){
    readURL(this);
    $('#selected_flag').css('display','block')
});
