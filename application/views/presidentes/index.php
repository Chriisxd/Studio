
		    <!--Importacion de Api GOOGLE-->
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfnk5A1m9zAK_60NJ5l3HMItzePzfYwg8&callback=initMap"></script>
			</script>


	</head>
	<body>
		<br>
		<h1 class="text-center">Mapa Candidatos Presidentes</h1>
		<div class="row">
			<div class="col-md-12">
				<div id="mapaPresidentes" style="height:500px; width:100%; border:2px solid black;"></div>
			</div>
      <script type="text/javascript">
			function initMap(){
				var centro= new google.maps.LatLng(-0.10754113286912491, -78.470440062038);
				var mapaPresidentes= new google.maps.Map(document.getElementById('mapaPresidentes'),
				{
					center:centro,
					zoom: 10,
					mapTypeId:google.maps.MapTypeId.HYBRID
				}

				);
				<?php if($presidentes): ?>
				<?php foreach($presidentes as $presidenteTemporal): ?>
				var coordenadaTemporal= new google.maps.LatLng(<?php echo $presidenteTemporal->latitud_pre; ?>, <?php echo $presidenteTemporal->longitud_pre; ?>);
				var marcador=new google.maps.Marker({

					 position:coordenadaTemporal,
					 title:"<?php echo $presidenteTemporal->nombre_pre; ?>",
					 map:mapaPresidentes

				});
				<?php endforeach; ?>
				<?php endif; ?>
			}

</script>
	</body>
</html>
