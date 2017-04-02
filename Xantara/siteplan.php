<div class="mySlides fade">
  <div class="sitemap-container">
    <div class="row">
      <div class="col-12">
        <h1 class="siteplan-header">XDE Village - Site Plan</h1>
        <div id="map" style="width:500px; height:500px; margin: auto; margin-top: 2%;"></div>
      </div>
    </div>
  </div>
</div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(14.17882936, 121.09910458),
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.HYBRID
    });
  }
  google.maps.event.trigger(map, 'resize');
  map.setCenter(new google.maps.LatLng(14.17882936, 121.09910458));
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvzyvKlSz0mXdZGTDKgiCxCigj9IPKGls&callback=initMap" async defer></script>
