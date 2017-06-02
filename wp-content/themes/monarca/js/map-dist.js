var templateUrl = '<?= get_bloginfo("template_url"); ?>';

styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e6e6e6"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#f3920a"
            },
            {
                "saturation": "85"
            },
            {
                "lightness": "31"
            },
            {
                "gamma": "1.24"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "1"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "transit.station.airport",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "transit.station.bus",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit.station.rail",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff7e00"
            },
            {
                "saturation": "-100"
            },
            {
                "lightness": "19"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#d7d7d7"
            },
            {
                "visibility": "on"
            }
        ]
    }
]



function initMap() {
    var myLatLng = {lat: 22.475518, lng: -100.479387};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: myLatLng,
        scrollwheel: false,
        styles: styles
    });

    setMarkers(map);

}


// Multiple Markers
var cities = [
    ['CD de México', 19.380156,-99.135426],
    ['Puebla', 18.609384,-98.030306],
    ['Veracruz', 19.065098, -96.401136],
    ['Tamaulipas', 24.057067, -98.538266],
    ['Chiapas', 16.509658, -92.632044],
    ['Morelos', 18.733805, -99.080375],
    ['Jalisco', 20.350306, -103.870010],
    ['Michoacán', 19.265489, -102.027805],
    ['Hidalgo', 20.412191, -98.928602],
    ['Estado de México', 19.328163, -99.715723],
    ['Guanajuato', 20.908355, -101.088285],
    ['Chihuahua', 28.732362, -106.270785],
    ['Sinaloa', 24.599405, -107.203489],
    ['Yucatán', 20.722864, -88.943477],
    ['Campeche', 18.667543, -90.240858],
    ['Colima', 19.157192, -103.877194],
    ['San Luis Potosí', 22.475518, -100.479387],
    ['Querétaro', 20.736153, -99.947022],
    ['Tlaxcala', 19.421316, -98.164386],
    ['Sonora', 29.377423, -110.499893]
];

function setMarkers(map) {

    var image = {
        url: my_data.template_directory_uri+'/img/marker.png',
        // This marker is 20 pixels wide by 32 pixels high.
        size: new google.maps.Size(91, 80),
        // The origin for this image is (0, 0).
        scaledSize: new google.maps.Size(30, 26.6), // scaled size
        origin: new google.maps.Point(0, 0),
        // The anchor for this image is the base of the flagpole at (0, 32).
        anchor: new google.maps.Point(15, 13)
    };

    for (var i = 0; i < cities.length; i++) {
        var city = cities[i];
        var marker = new google.maps.Marker({
            position: {lat: city[1], lng: city[2]},
            map: map,
            icon: image,
            //shape: shape,
            title: city[0],
            //zIndex: beach[3]
        });

    }
}