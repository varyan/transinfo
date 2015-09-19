    <footer>
        <div class="row">
            <div class="col-sm-6">
                        <span class="footer-brand">
                            <strong class="text-danger">Transinfo</strong> .RU
                        </span>
                <p class="no-margin">
                    &copy; <?=date('Y')?> <strong><a href="http://ilikeit.am" target="_blank">I Like It</a></strong>. <?=$system_title['all_reserved']?>
                </p>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </footer>
            </div><!-- breadcrumb -->
        </div><!-- /main-container -->
    </div>
    <a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
    </body>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Jquery -->
    <script src="<?=base_url()?>assets/js/jquery.fullscreen-min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.gritter.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-multiselect.js"></script>
    <script src='<?=base_url()?>assets/js/modernizr.min.js'></script>
    <script src='<?=base_url()?>assets/js/pace.min.js'></script>
    <script src='<?=base_url()?>assets/js/bootstrap-datepicker.min.js'></script>
    <script src='<?=base_url()?>assets/js/jquery.popupoverlay.min.js'></script>
    <script src='<?=base_url()?>assets/js/jquery.slimscroll.min.js'></script>
    <script src='<?=base_url()?>assets/js/jquery.cookie.min.js'></script>
    <script src='<?=base_url()?>assets/js/jquery.dataTables.min.js'></script>
    <script src="<?=base_url()?>assets/js/endless/endless.js"></script>
    <script src="<?=base_url()?>assets/js/star-rating.min.js"></script>
    <script src="<?=base_url()?>assets/js/custom.js"></script>
    <script src="<?=base_url()?>assets/js/distance.js"></script>
    <script>
        $(document).ready(
            function () {
                BaseURL = '<?=base_url($this->session->userdata("lang"))?>';
            }
        );
    </script>
</html>