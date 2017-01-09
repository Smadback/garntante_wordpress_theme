var geocoder;
var map;

function initialize() {
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': "England"}, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latlng = new google.maps.LatLng(53.562676, 10.056552);

            var mapOptions = {
                zoom: 14,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                scrollwheel: true,
                draggable: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            }

            // Let's draw the map
            map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

            google.maps.event.addDomListener(window, "resize", function () {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
                $('#map-canvas').removeClass('loading');
            });

            var contentString =
                '<div id="info-window">' +
                '<p>Garntante<br />Hammer Steindamm 119<br />20535 Hamburg<br /><a href="https://www.facebook.com/Garntante/" target="_blank">Facebook</a></p>' +
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var companyMarker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: "Garntante"
            });

            google.maps.event.addListener(companyMarker, 'click', function () {
                infowindow.open(map, companyMarker);
                pageView('/#address');
            });

        }
        else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
}

initialize();