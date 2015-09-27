
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Endless -->
    <link href="<?=base_url()?>assets/css/endless.css" rel="stylesheet">

</head>

<body style="background-color:#3a3a3a;">
<!--<button class="btn btn-primary" data-toggle="modal" data-target="#lockScreen">Small modal</button>

<!--Modal-->
<!--<div id="lockScreen" class="well">
    <div class="lock-screen-img">
        <img src="img/user.jpg" alt="">
    </div>
    <button class="slidein_close btn btn-default">Close</button>
</div>-->

<!--Modal-->
<div class="modal fade lock-screen-wrapper" id="lockScreen">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="lock-screen-img">
                    <img src="img/user.jpg" alt="">
                </div>

                <div class="text-center m-top-sm">
                    <div class="h4 text-white">John Doe</div>

                    <div class="input-group m-top-sm">
                        <input type="password" class="form-control text-sm" placeholder="Enter your password">
								<span class="input-group-btn"> 
									<a class="btn btn-success" type="button" href="index.html">
                                        <i class="fa fa-arrow-right"></i></button>
                                    </a>
								</span>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>

<!-- Bootstrap -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<!-- Modernizr -->
<script src='<?=base_url()?>assets/js/modernizr.min.js'></script>

<!-- Pace -->
<script src='<?=base_url()?>assets/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='<?=base_url()?>assets/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='<?=base_url()?>assets/js/jquery.slimscroll.min.js'></script>

<!-- Cookie -->
<script src='<?=base_url()?>assets/js/jquery.cookie.min.js'></script>

<!-- Endless -->
<script src="<?=base_url()?>assets/js/endless/endless.js"></script>

<script>
    $(function()	{
        /*$('#lockScreen').popup({
         focusdelay: 300,
         outline: true,
         background: false,
         autoopen: true,
         });*/

        $('#lockScreen').modal({
            show: true,
            backdrop: 'static'
        })
    });
</script>
</body>
</html>