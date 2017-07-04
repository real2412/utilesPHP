<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Rio Rapido</title>

    <!-- Bootstrap core CSS y JS -->
    <?php include "php/head.php"; ?>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script>
  
	
	<!--<link rel="stylesheet" href="./css/datepicker.css"> -->
	
		
	<link rel="stylesheet" href="./css/bootstrap-select.min.css"> 

	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
	
	<!-- DATEPICKET BS -->
	  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" href="./bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	  <script type="text/javascript" src="./bower_components/jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="./bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="./bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	  
	<!-- DATEPICKET BS -->
  
  </head>
  <body>

	
	<?php include "php/header.php"; ?>
	
	<?php include "php/navbar.php"; ?>

    <div class="container-fluid cuerpo">
	
	  
	  
	  	  
<div class="row">
	<div class="col-md-6">
		<div class="jumbotron" style="margin-top:10px;">
			<h3>Escríbanos con confianza</h3>
			<form class="form-horizontal">
			  <div class="form-group">
				<label class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputPassword3" placeholder="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Correo</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" placeholder="ejemplo@hotmail.com">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">Consulta</label>
				<div class="col-sm-10">
				  <textarea  class="form-control" id="inputPassword3" placeholder=""></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Enviar</button>
				</div>
			  </div>
			</form>		
		</div>
	  
	  
    </div><!-- /.container -->
  </div>
	  
	<?php include "php/footer.php"; ?>
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include "php/script-footer.php"; ?>
	
	

	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			$('#dp3').datepicker();
			$('#dpYears').datepicker();
			$('#dpMonths').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
	<script src="Datepicker%20for%20Bootstrap,%20from%20Twitter_files/urchin.js" type="text/javascript">
</script>

<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	
	<script>

		var mymap = L.map('mapid').setView([-3.7027, -73.2175], 6);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(mymap);


		L.marker([-3.7040, -73.2485]).addTo(mymap)
			.bindPopup("<b>Puerto de Nanay</b><br />Descripcion").openPopup();

		L.marker([-5.900772, -76.112905]).addTo(mymap)
			.bindPopup("<b>Puerto de Yurimaguas</b><br />Descripcion").openPopup();
		
		L.marker([-8.392862, -74.582617]).addTo(mymap)
			.bindPopup("<b>Puerto de Pucallpa</b><br />Descripcion").openPopup();
			
		L.marker([-3.910789, -70.516081]).addTo(mymap)
			.bindPopup("<b>Puerto de Caballococha</b><br />Descripcion").openPopup();
		
		L.circle([51.508, -0.11], 500, {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5
		}).addTo(mymap).bindPopup("I am a circle.");

		L.polygon([
			[51.509, -0.08],
			[51.503, -0.06],
			[51.51, -0.047]
		]).addTo(mymap).bindPopup("I am a polygon.");


		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(mymap);
		}

		mymap.on('click', onMapClick);

	</script>
	
</body></html>

