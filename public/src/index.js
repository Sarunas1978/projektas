
let map;

function initMap() {
  const mapOptions = {
    zoom: 17,
    center: { lat: 54.723377, lng: 25.337885 },
  };
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  const marker = new google.maps.Marker({
    // The below line is equivalent, but not equal to writing:
    // position: new google.maps.LatLng(-54.723377, 25.337885)
    position: { lat: 54.723377, lng: 25.337885 },
    map: map,
  });

  const infowindow = new google.maps.InfoWindow({
    content: "<p>Marker Location:" + marker.getPosition() + "</p>",
  });
  google.maps.event.addListener(marker, "click", () => {
    infowindow.open(map, marker);
  });
}