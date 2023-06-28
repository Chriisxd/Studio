
		    <!--Importacion de Api GOOGLE-->
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfnk5A1m9zAK_60NJ5l3HMItzePzfYwg8&callback=initMap"></script>
			</script>


	</head>
	<body>
		<br>
		<h1 class="text-center">Mapa Candidatos Asambleistas Nacionales</h1>
		<div class="row">
			<div class="col-md-12">
				<div id="mapaAnacionales" style="height:500px; width:100%; border:2px solid black;"></div>
			</div>
      <script type="text/javascript">
			function initMap(){
				var centro= new google.maps.LatLng(-0.10754113286912491, -78.470440062038);
				var mapaAnacionales= new google.maps.Map(document.getElementById('mapaAnacionales'),
				{
					center:centro,
					zoom: 10,
					mapTypeId:google.maps.MapTypeId.HYBRID
				}

				);
				<?php if($anacionales): ?>
				<?php foreach($anacionales as $anacionalTemporal): ?>
				var coordenadaTemporal= new google.maps.LatLng(<?php echo $anacionalTemporal->latitud_ana; ?>, <?php echo $anacionalTemporal->longitud_ana; ?>);

				var marcador=new google.maps.Marker({

					 position:coordenadaTemporal,
					 title:"<?php echo $anacionalTemporal->nombre_ana; ?>",
					 map:mapaAnacionales,
					 icon:"<?php echo base_url(); ?>assets/images/edi.jpg"
				});
				<?php endforeach; ?>
				<?php endif; ?>
			}

</script>
	</body>
</html>
