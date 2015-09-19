<div id="breadcrumb">
    <ul class="breadcrumb text-center">
        <li class="text-info"><i class="fa fa-list"></i> <a href="<?=base_url($lang.'/user/profile')?>"><?=$system_title['cargo_list']?></a></li>
    </ul>
</div>
<div class="padding-md">
    <div class="row">
        <?php $this->load->view('user/templates/static'); ?>
        <div class="col-md-10">
            <input type="hidden" id="source" value="<?=$cargo_info->load_locality?>">
            <input type="hidden" id="destination" value="<?=$cargo_info->unload_locality?>">
            <div class="col-md-6">
                <?php $this->load->view('cargo/templates/load_location'); ?>
                <?php $this->load->view('cargo/templates/unload_location'); ?>
                <?php $this->load->view('cargo/templates/cargo'); ?>
                <?php $this->load->view('cargo/templates/tractor'); ?>
            </div>
            <div class="col-md-6">
                <?php $this->load->view('cargo/templates/payment'); ?>
                <?php $this->load->view('cargo/templates/map'); ?>
                <?php $this->load->view('cargo/templates/rate_show'); ?>
            </div>
            <script>
                var source, destination, map;
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();

                google.maps.event.addDomListener(window, 'load', function () {
                    new google.maps.places.SearchBox(document.getElementById('source'));
                    new google.maps.places.SearchBox(document.getElementById('destination'));
                    directionsDisplay = new google.maps.DirectionsRenderer({'draggable': true});
                });
                setTimeout(function(){
                    init();
                },3000);
                function init() {
                    var yerevan = new google.maps.LatLng(40.179186, 44.499103);
                    var mapOptions = {
                        zoom: 7,
                        center: yerevan,
                        heading: 90,
                        tilt: 45
                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    directionsDisplay.setMap(map);

                    //*********DIRECTIONS AND ROUTE**********************//
                    source = document.getElementById("source").value;
                    destination = document.getElementById("destination").value;

                    var request = {
                        origin: source,
                        destination: destination,
                        travelMode: google.maps.TravelMode.DRIVING
                    };
                    directionsService.route(request, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        }
                    });
                }
            </script>
        </div>
        <div class="col-md-12" id="pay_for_form">
            <?php if($user->type_id == 2) : ?>
                <?php $this->load->view('cargo/templates/for_company') ?>
            <?php else : ?>
                <?php $this->load->view('cargo/templates/for_client') ?>
            <?php endif; ?>
        </div>
    </div>
</div>