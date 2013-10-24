Google Maps for Novius OS
====

An Novius OS application to create a Google map and display it.

Many thanks to Fumito Mizuno for his [OSM Application](https://github.com/ounziw/ounziw_osm) which helps me a lot to make my first app.

**Licence**

Licensed under [GNU Affero General Public License v3](http://www.gnu.org/licenses/agpl-3.0.html) or (at your option) any later version


**Usage**

Add the folder Gmpas into your local/application folder

Add the script \<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"> \</script>
at the end of the file noviusos/framework/views/admin/noviusos.view.php

One last thing to do is to make shure that your css does not set the value max-width of img to 100%.
If you are using noviusos_templates_basic, it is set in base.css
