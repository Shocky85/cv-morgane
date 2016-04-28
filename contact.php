<?php
include_once './header.php';

?>
<style type="text/css">
	#map-canvas {
		position: absolute;
		right: 0px;
  width: 35%;
  height: 93%;
}

#map-canvas img {
  /* Prevent streetview buddy from getting squished by img max-width: 100% */
  max-width: none; 
}

#infowindow-content ul {
  list-style: none;
  padding: 0;
}

#infowindow-content ul li {
  padding-bottom: 3px;
}
</style>

<div id="map-canvas" class="hide-on-small-only"></div>
<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		
	</div>


	<div class="container">
		<div class="section">

			<div class="row">
			<div class="col s12 m8">


<h2 class="header">Mes coordonnées</h2>

  
 <div class="chip green" style="font-size: 18px;color: #fff">
 <i class="material-icons">account_circle</i>
    Morgane PARENT
  </div>
  <br>
  <br>
  <div class="chip"><i class="material-icons">home</i> 9 rue Claude Debussy, 85000 L'HERBERGEMENT </div><br><br>
  <div class="chip"><i class="material-icons">phone</i> 06 10 10 10 10 </div>
  <div class="chip"><i class="material-icons">mail</i> morgane085@gmail.com </div>
  <br>
<br>
<hr>

<h2 class="header">Me contacter</h2>

				<form method="POST" action="sendmail.php">
					<div class="input-field col s6">
						<i class="material-icons prefix">account_circle</i>
						<input id="name" name="name" type="text" class="validate">
						<label for="name">Nom et prénom</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">phone</i>
						<input id="telephone" name="telephone" type="tel" class="validate">
						<label for="telephone">Téléphone</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">mail</i>
						<input id="email" type="email" name="email"class="validate">
						<label for="email" data-error="wrong" data-success="right">Adresse mail</label>
					</div>
					<br>
					<br>
					<br>
					<div class="input-field col s12">
						<i class="material-icons prefix">edit</i>
						<input id="objet" type="text" name="objet"class="validate">
						<label for="objet" data-error="wrong" data-success="right">Objet</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">comments</i>
						<textarea id="message" name="message"class="materialize-textarea"></textarea>
						<label for="message">Message</label>
					</div>
					<div class="col s3 offset-s9">
						<button class="btn waves-effect  green waves-light" type="submit">Valider
							<i class="material-icons right">send</i>
						</button>
					</div>
				</form>

			
			</div>
			
			
			</div>

		</div>

	</div>
	<?php
	include_once './footer.php';
	?>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
		var map;
var myloc = new google.maps.LatLng(46.915948, -1.3754069);

var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

  var featureOpts = [ { "stylers": [ { "saturation": -100 }, { "lightness": -5 } ] } ];

  var mapOptions = {
    zoom: 10,
    center: myloc,
    mapTypeControl: false,
    scrollwheel: false,
    zoomControl: true,
    mapTypeId: MY_MAPTYPE_ID
  };
  
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var customMapType = new google.maps.StyledMapType(featureOpts);
  
  var contentString = 
      
      '<div id="infowindow-content" class="center">'+
      '<ul>'+
        '<li><b>Morgane PARENT</b></li>'+
        '<li>9 rue Claude Debussy</li>'+
        '<li>85260 L\'HERBERGEMENT</li>'+
      '</ul>'+
      '</div>';
  
  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
  var icon = {
    path: "M0-165c-27.618 0-50 21.966-50 49.054C-50-88.849 0 0 0 0s50-88.849 50-115.946C50-143.034 27.605-165 0-165z",
    fillColor: '#4CAF50',
    fillOpacity: 1,
    anchor: new google.maps.Point(0,0),
    strokeWeight: 0,
    scale: 1/4
  }
  
  var marker = new google.maps.Marker({
      position: myloc,
      map: map,
      draggable: false,
      icon: icon,
      title: 'Morgane PARENT'
  });

  infowindow.open(map,marker);
  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}

google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", function() {
 
 var center = map.getCenter();
 google.maps.event.trigger(map, "resize");
 map.setCenter(center); 
});


	</script>