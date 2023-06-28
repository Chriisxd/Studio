
		    <!--Importacion de Api GOOGLE-->
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfnk5A1m9zAK_60NJ5l3HMItzePzfYwg8&callback=initMap"></script>
			</script>


	</head>
	<body>
		<br>
		<h1 class="text-center">Mapa Candidatos Prefectos</h1>
		<div class="row">
			<div class="col-md-12">
				<div id="mapaPrefectos" style="height:500px; width:100%; border:2px solid black;"></div>
			</div>
      <script type="text/javascript">
			function initMap(){
				var centro= new google.maps.LatLng(-0.10754113286912491, -78.470440062038);
				var mapaPrefectos= new google.maps.Map(document.getElementById('mapaPrefectos'),
				{
					center:centro,
					zoom: 10,
					mapTypeId:google.maps.MapTypeId.HYBRID
				}

				);
				<?php if($prefectos): ?>
				<?php foreach($prefectos as $prefectoTemporal): ?>
				var coordenadaTemporal= new google.maps.LatLng(<?php echo $prefectoTemporal->latitud_fec; ?>, <?php echo $prefectoTemporal->longitud_fec; ?>);
				var marcador=new google.maps.Marker({

					 position:coordenadaTemporal,
					 title:"<?php echo $prefectoTemporal->nombre_fec; ?>",
					 map:mapaPrefectos
				});
				<?php endforeach; ?>
				<?php endif; ?>
			}

</script>
	</body>
</html>
