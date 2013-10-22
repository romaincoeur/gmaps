
<?php
$lat = floatval(\Arr::get($enhancer_args, 'lat', 0));
$lon = floatval(\Arr::get($enhancer_args, 'lon', 0));
$zoom = floatval(\Arr::get($enhancer_args, 'zoom', 2));
$height = \Arr::get($enhancer_args, 'height', "600px");
$width = \Arr::get($enhancer_args, 'width', "100%");
?>



    <div id="carte" style="width: 500px; height: 500px;">
	Veuillez patienter pendant le chargement de la carte...
	
</div>


    <script type="text/javascript">
	    var latlng = new google.maps.LatLng(<?= $lat;?>, <?= $lon;?>);
	    //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
	    //de définir des options d'affichage de notre carte
	    var options = {
	        center: latlng,
	        zoom: <?= $zoom;?>,
	        mapTypeId: google.maps.MapTypeId.HYBRID
	    };
	     
	    //constructeur de la carte qui prend en paramêtre le conteneur HTML
	    //dans lequel la carte doit s'afficher et les options
	    var carte = new google.maps.Map(document.getElementById("carte"), options);

	    google.maps.event.addListener(carte,'bounds_changed', function(event) {
	    	setup_mapdata();
	    });
	      
      function setup_mapdata() {
        $("#zoom").val(carte.getZoom());
        $("#lat").val(carte.getCenter().lat());
        $("#lon").val(carte.getCenter().lng());
      }

    </script>
    
<div><!-- style="display:none;" -->
	<h2>Options de carte</h2> <p>&nbsp;</p>
    <?= __('Zoom') ?>: <?= \Fuel\Core\Form::input('zoom', $zoom, array('id' => 'zoom'));?><br />
    <?= __('lat') ?>: <?= \Fuel\Core\Form::input('lat', $lat, array('id' => 'lat'));?><br />
    <?= __('lon') ?>: <?= \Fuel\Core\Form::input('lon', $lon, array('id' => 'lon'));?><br />
    <p>&nbsp;</p><p>&nbsp;</p>
    <h2>Options de fenetre</h2> <p>&nbsp;</p>
    <?= __('height') ?>: <?= \Fuel\Core\Form::input('height', $height, array('id' => 'height'));?><br />
    <?= __('width') ?>: <?= \Fuel\Core\Form::input('width', $width, array('id' => 'width'));?><br />
</div>