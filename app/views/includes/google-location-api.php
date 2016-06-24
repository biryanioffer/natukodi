<?php
?>
/**
 * Created by PhpStorm.
 * User: kishore
 * Date: 24/06/16
 * Time: 2:47 PM
 */
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('location');
        var options = {componentRestrictions: {country: 'in'}};
        new google.maps.places.Autocomplete(input, options);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>