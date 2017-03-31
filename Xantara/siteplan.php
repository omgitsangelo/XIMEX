<div class="mySlides fade">
  <div class="sitemap-container">
    <div class="row">
      <div class="col-12">
        <h1>XDE Village - Site Plan</h1>

        <div id="map"></div>
        <script>
          var map;
          var latlng = new google.maps.LatLng(14.17882936, 121.09910458);
          function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: latlng,
              zoom: 14,
              mapTypeId: google.maps.MapTypeId.HYBRID
            });
          }
        </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeumbHBCEbLR_0fbOF2GN_36FhjAkudg4&callback=initMap"
    async defer></script>
      </div>
    </div>
  </div>
</div>
