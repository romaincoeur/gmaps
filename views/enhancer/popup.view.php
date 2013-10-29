
<?php
$lat = floatval(\Arr::get($enhancer_args, 'lat', 0));
$lon = floatval(\Arr::get($enhancer_args, 'lon', 0));
$zoom = floatval(\Arr::get($enhancer_args, 'zoom', 2));
$height = \Arr::get($enhancer_args, 'height', "600px");
$width = \Arr::get($enhancer_args, 'width', "100%");
?>

<div class="line">
    <div class="col c4">
        <h2>Options de carte</h2> <p>&nbsp;</p>
        <p><?= __('Zoom') ?>:<br /><?= \Fuel\Core\Form::input('zoom', $zoom, array('id' => 'zoom', 'size' => 15));?></p>
        <p><?= __('lat') ?>:<br /><?= \Fuel\Core\Form::input('lat', $lat, array('id' => 'lat', 'size' => 15));?></p>
        <p><?= __('lon') ?>:<br /><?= \Fuel\Core\Form::input('lon', $lon, array('id' => 'lon', 'size' => 15));?></p>
        <p>&nbsp;</p><p>&nbsp;</p>
        <p><h2>Options de fenetre</h2> <p>&nbsp;</p>
        <p><?= __('height') ?>:<br /><?= \Fuel\Core\Form::input('height', $height, array('id' => 'height', 'size' => 15));?></p>
        <p><?= __('width') ?>:<br /><?= \Fuel\Core\Form::input('width', $width, array('id' => 'width', 'size' => 15));?></p>
    </div>
    <div class="col c8" style="height: 400px;" id="carte<?= $uid = uniqid('gmap') ?>">
        Veuillez patienter pendant le chargement de la carte...
    </div>
</div>

<script type="text/javascript">
    (function() {
        var gmapInit = function() {
            var latlng = new google.maps.LatLng(<?= sprintf('%F', $lat) ?>, <?= sprintf('%F', $lon) ?>);
            //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
            //de définir des options d'affichage de notre carte
            var options = {
                center: latlng,
                zoom: <?= sprintf('%F', $zoom) ?>,
                mapTypeId: google.maps.MapTypeId.HYBRID
            };

            //constructeur de la carte qui prend en paramêtre le conteneur HTML
            //dans lequel la carte doit s'afficher et les options
            var carte = new google.maps.Map(document.getElementById("carte<?= $uid ?>"), options);

            google.maps.event.addListener(carte,'bounds_changed', function(event) {
                setup_mapdata();
            });

            function setup_mapdata() {
                $("#zoom").val(carte.getZoom());
                $("#lat").val(carte.getCenter().lat());
                $("#lon").val(carte.getCenter().lng());
            }
        };
        if (window.google && window.google.maps && window.google.maps.LatLng) {
            gmapInit();
        } else {
            window.gmapInit<?= $uid ?> = gmapInit;
            require(['http://maps.google.com/maps/api/js?sensor=false&callback=gmapInit<?= $uid ?>']);
        }
    })();
</script>

