

<div id="carte" style="width: <?= $width?>; height: <?= $height?>;">
	Veuillez patienter pendant le chargement de la carte...
	
</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

	    var latlng = new google.maps.LatLng(<?= $lat?>, <?= $lon?>);
	    //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
	    //de définir des options d'affichage de notre carte
	    var options = {
	        center: latlng,
	        zoom: <?= $zoom?>,
	        mapTypeId: google.maps.MapTypeId.HYBRID
	    };
	     
	    //constructeur de la carte qui prend en paramêtre le conteneur HTML
	    //dans lequel la carte doit s'afficher et les options
	    var carte = new google.maps.Map(document.getElementById("carte"), options);

    </script>
