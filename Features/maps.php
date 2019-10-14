
<div class="container my-5">
  <h1>Maps</h1>
  <div class="row mt-5">
    <div class="col-lg-6 col-12 p-5">
      <div id="map1"></div>
    </div>
    <div class="col-lg-6 col-12 p-5">
      <div id="map2"></div>
    </div>
  </div>
</div>

<!-- Google Maps API-->
<?php require_once "Config/google-api.html";?>

<script>
  function initMap() {
    var map1 = new google.maps.Map(document.getElementById('map1'), {
      center: {lat: 49.2827, lng: -123.1207},
      zoom: 12,
      disableDefaultUI: true,
      styles: [
      {
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#212121"
        }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
        {
          "visibility": "off"
        }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#757575"
        }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
        {
          "color": "#212121"
        }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#757575"
        }
        ]
      },
      {
        "featureType": "administrative.country",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#9e9e9e"
        }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "stylers": [
        {
          "visibility": "off"
        }
        ]
      },
      {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#bdbdbd"
        }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#757575"
        }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#181818"
        }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#616161"
        }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.stroke",
        "stylers": [
        {
          "color": "#1b1b1b"
        }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
        {
          "color": "#2c2c2c"
        }
        ]
      },
      {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#8a8a8a"
        }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#373737"
        }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#3c3c3c"
        }
        ]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#4e4e4e"
        }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#616161"
        }
        ]
      },
      {
        "featureType": "transit",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#757575"
        }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#000000"
        }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#3d3d3d"
        }
        ]
      }
      ]
    });

    // Styles a map in night mode.
    var map2 = new google.maps.Map(document.getElementById('map2'), {
      center: {lat: 49.2827, lng: -123.1207},
      zoom: 12,
      disableDefaultUI: true,
      styles: [
      {
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#f5f5f5"
        }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
        {
          "visibility": "off"
        }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#616161"
        }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
        {
          "color": "#f5f5f5"
        }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#bdbdbd"
        }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#eeeeee"
        }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#757575"
        }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#e5e5e5"
        }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#9e9e9e"
        }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#ffffff"
        }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#757575"
        }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#dadada"
        }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#616161"
        }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#9e9e9e"
        }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#e5e5e5"
        }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#eeeeee"
        }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
        {
          "color": "#c9c9c9"
        }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
        {
          "color": "#9e9e9e"
        }
        ]
      }
      ]
    });
  }
</script>