var map, myLatLng;

$(document).ready(function () {

    geoLocationInit();

    function geoLocationInit() {
        // giving current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, fail)
        } else {
            alert("Browser not supported");
        }
    }

    // GeoLocationInit successed
    function success(position) {
        //console.log(position);
        let latVal = position.coords.latitude;
        let lngVal = position.coords.longitude;

        // console.log(latval, lngval);

        myLatLng = new google.maps.LatLng({lat: parseFloat(latVal), lng: parseFloat(lngVal)});
        createMap(myLatLng)
        /*nearbySearch(myLatLng, "school");*/
        searchTurtles(parseFloat(latVal), parseFloat(lngVal))
    }

    // GeoLocationInit failed
    function fail() {
        alert("It fails");
    }

    // Create Map
    function createMap(myLatLng) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 8
        });

        // Default marker
        /* var marker = new google.maps.Marker({
             position: myLatLng,
             map: map,
         });*/
    }


    function sendTurtleId(turtleId) {

        console.log(turtleId);

        var turtle = {
            id: turtleId,
        };

        //converts to JSON string the Object
        turtle = JSON.stringify(turtle);
        //creates a base-64 encoded ASCII string
        turtle = btoa(turtle);
        //save the encoded accout to web storage
        localStorage.setItem('_turtle', turtle);
    }

    // Create Marker
    function createMarker(latLng, turtleIcon, turtleId) {

        let contentString =
            '<div class="card" style="width: 18rem;">' +
            '<img class="card-img-top" src="/images/alagadiTurtleLogo.svg" alt="Card image cap" style="width: 120px;height: 100px;margin-left: 30%">' +
            '<div class="card-body">' +
            '<h5 class="card-title">' + turtleId + '</h5>' +
            '<p class="card-text">' + latLng + '</p>' +
            '</div>' +

            '<div class="card-body">' +
            '<a href="/turtle-detail/' + turtleId + '/view?'+turtleId+'&'+latLng+'" class="card-link" ' +
            /*/turtle-detail/' + turtleId + '/view*/
            /*'onclick="function f() { '+'let turtle = {id: '+turtleId+'}; turtle = JSON.stringify(turtle); turtle = btoa(turtle); localStorage.setItem('+"'_turtle'"+', turtle);' + '}' +*/
            '">View Turtle</a></div>' +
            '</div>';

        let infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        let marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: turtleIcon,
            title: name,
            id: turtleId
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
            setTimeout(function () {
                infowindow.close();
            }, 5000);
        });
    }

    // Nearby search
    /* function nearbySearch(myLatLng, type) {
         var request = {
             location: myLatLng,
             radius: '2500',
             type: [type]
         };

         service = new google.maps.places.PlacesService(map);
         service.nearbySearch(request, callback);

         function callback(results, status) {
             //console.log(results)
             if (status == google.maps.places.PlacesServiceStatus.OK) {
                 for (var i = 0; i < results.length; i++) {
                     var place = results[i];
                     latlng = place.geometry.location;
                     icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                     name = place.name

                     createMarker(latlng, icn, name);
                 }
             }
         }

     }*/

    function searchTurtles(lat, lng) {
        $.get('/api/search-turtles', {lat: parseFloat(lat), lng: parseFloat(lng)}, function (match) {
            // console.log(match);
            $.each(match, function (key, val) {

                // console.log(val.latitude);
                //console.log(val.longitude);

                var turtlelatval = val.latitude;
                var turtlelngval = val.longitude;

                var turtleId = val.turtle_key;

                var turtlelatlng = new google.maps.LatLng({
                    lat: parseFloat(turtlelatval),
                    lng: parseFloat(turtlelngval)
                });
                var turtleicon = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';

                createMarker(turtlelatlng, turtleicon, turtleId);

            });
        });
    }
});
