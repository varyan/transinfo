var href = location.href.split('/').pop();

if(href == 'ru' || href == 'en'){
    if(readCookie('from_point')){
        document.getElementById('from_point').value = readCookie('from_point');
        document.getElementById('to_point').value = readCookie('to_point');
        setTimeout(function () {
            GetRoute();
        },3000);
    }
}

if(typeof $("input#from_point").val() != 'undefined' && typeof $("input#to_point").val() != 'undefined') {
    var source, destination, map, locType = 'load', auto_from = null, auto_to = null, auto_type;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    auto_from = new google.maps.places.Autocomplete((document.getElementById('from_point')), {types: ['geocode']});
    auto_to = new google.maps.places.Autocomplete((document.getElementById('to_point')), {types: ['geocode']});
    auto_from.addListener('place_changed', fillInAddress);
    auto_to.addListener('place_changed', fillInAddress);

    var componentForm = {
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name'
        //postal_code: 'short_name'
    };

    google.maps.event.addDomListener(window, 'load', function () {
        new google.maps.places.SearchBox(document.getElementById('from_point'));
        new google.maps.places.SearchBox(document.getElementById('to_point'));
        directionsDisplay = new google.maps.DirectionsRenderer({'draggable': true});
    });
}

$(document).ready(function () {
    $('#from_point,#to_point').keypress(function (e) {
        if(e.keyCode == 13){
            e.preventDefault();
            if($.trim($('#from_point').val()) != '' && $.trim($('#to_point').val()) != ''){
                GetRoute();
            }
        }
    });
    if(document.getElementById('from_point') != 'undefined') {
        $('input#from_point').focus(function () {
            auto_type = 'from';
            locType = 'load';
        });
        $('input#to_point').focus(function () {
            auto_type = 'to';
            locType = 'unload'
        });
    }
});

function GetRoute() {

    var yerevan = new google.maps.LatLng(40.179186, 44.499103);
    var mapOptions = {
        zoom: 7,
        center: yerevan
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    if(location.href.split('/').pop() != 'profile') {
        document.getElementById('map').style.display = 'block';
    }
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('dvPanel'));

    //*********DIRECTIONS AND ROUTE**********************//
    source = document.getElementById("from_point").value;
    destination = document.getElementById("to_point").value;

    createCookie('from_point',source);
    createCookie('to_point',destination);

    $('#map').next().html('<button onclick="removeMap()" class="btn btn-sm btn-primary btn-block">Remove map</button>');

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

    //*********DISTANCE AND DURATION**********************//
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            var dvDistance = document.getElementById("distance");
            dvDistance.innerHTML = "";
            dvDistance.innerHTML += distance + "&nbsp;";
            dvDistance.innerHTML += duration;

        } else {
            alert("Unable to find the distance via road.");
        }
    });
}

function fillInAddress() {
    if(locType == 'load'){
        insertLocation(auto_from);
    }else{insertLocation(auto_to);}

    var place = (auto_type == 'from') ? auto_from.getPlace() : auto_to.getPlace();

    var address = '';
    if (place.address_components) {
        address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
        ].join(' ');
    }
    if($.trim($('#from_point').val()) != '' && $.trim($('#to_point').val()) != ''){
        GetRoute();
    }
}

function insertLocation(auto){
    if(location.href.split('/').pop() != 'profile'){
        return;
    }
    var addressType, val;
    var place = auto.getPlace();

    for (var i = 0; i < place.address_components.length; i++) {
        addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            val = place.address_components[i][componentForm[addressType]];
            document.getElementById(locType+'_'+addressType).value = val;
        }
    }
}

function removeMap(){
    document.getElementById("from_point").value = '';
    document.getElementById("to_point").value = '';
    createCookie('from_point','');
    createCookie('to_point','');
    $('#map').css('display','none');
    $('#map').next().html('');
    $('#dvPanel').html('');
}
