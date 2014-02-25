<div id="map_canvas"></div>
<?php
$map_lati = get_option('theme_map_lati');
$map_longi = get_option('theme_map_longi');
$map_zoom = get_option('theme_map_zoom');
?>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    // Google Map
    function initialize()
    {
        var geocoder  = new google.maps.Geocoder();
        var map;
        var latlng = new google.maps.LatLng(<?php echo $map_lati; ?>, <?php echo $map_longi; ?>);
        var infowindow = new google.maps.InfoWindow();
        var myOptions = {
            zoom: <?php echo $map_zoom; ?>,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        geocoder.geocode( { 'location': latlng },
            function(results, status) {
                if (status == google.maps.GeocoderStatus.OK)
                {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                }
                else
                {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
    }

    initialize();
</script>