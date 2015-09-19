    <?php $this->load->view('admin/templates/confirm',['confirm'=>['url'=>'admin/logout','ok'=>'Logout','message'=>'Do you want to logout?']]) ?>
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
    <script src='<?=base_url()?>assets/js/jquery.gritter.min.js'></script>

    <!-- Cookie -->
    <script src='<?=base_url()?>assets/js/jquery.cookie.min.js'></script>

    <!-- Endless -->
    <script src="<?=base_url()?>assets/js/endless/endless.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <script>$(document).ready(function () {init('<?=base_url()?>')})</script>
    </body>
</html>