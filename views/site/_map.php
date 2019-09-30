<style>
    #map {
        width: 100%;
        height: 400px;
        background-color: grey;
    }
</style>
<div class="row">
    <div id="map"></div>
</div>
<script>
// Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: -40.728604, lng:  -64.935076};
        // The map, centered at Uluru
        var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 16, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKHZnOP46AEwrFgyAQr8AUkDZI_q6xpJM&callback=initMap">
</script>