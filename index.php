<!DOCTYPE html>
	<?php include 'common/head.html' ?>
	<body class="dirtyWhite-theme">
		<?php include 'common/header.html' ?>
	    <section id="home-carousel" class="carousel slide hidden-xs" data-ride="carousel">
	    	<ol class="carousel-indicators">
				<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home-carousel" data-slide-to="1"></li>
				<li data-target="#home-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/proa-veler.jpg" alt="" />
				</div>
				
				<div class="item">
					<img src="img/cabos.jpg" alt="" />
				</div>
				
				<div class="item">
					<img src="img/top.jpg" alt="" />
				</div>
				
			</div>
			<a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
			<a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="fa fa-chevron-right"></span></a>
			<img class="logo-center" src="img/logo-center.png" alt="" />
	    </section>
	    <div class="header-xs visible-xs">
		    <img class="logo-center-xs" src="img/logo-center.png" alt="Logo Icaria" />
	    </div>
	    <section id="marketing" class="dirtyWhite-theme">
		    <div class="container">
				<div class="row">
					<div class="col-sm-4">
						
						<h2>BARCELONA A VELA</h2>
						<h4>Barcelona desde el mar!</h4>
						<p>Celebraciones, actos de empresa, despedidas de soltero/a..Salidas en velero desde 45 €</p>
					</div>
					<div class="col-sm-4">
						<h2>VACACIONES EN VELERO</h2>
						<h4>ISLAS BALEARES</h4>
						<p>Una semana en Menorca. Descubre las mejores calas. Desde 450 €</p>	
					</div>
					<div class="col-sm-4">
						<h2>ESCAPADA DE ST. JOAN</h2>
						<h4>BCN - Menorca, del 20 al 24/25 de Junio</h4>
						<p>Ven a disfrutar de las famosas Fiestas de Sant Joan en Ciutadella.</p>
					</div>
				</div>
				<div class="row">
					<div class="text-center">
					<a class="btn btn-rounded-blue btn-lg" href="rutas" role="button">EXPLORA LAS RUTAS &raquo;</a>
					</div>
				</div>
		    </div>
		 </section>
			
	    <?php include 'common/footer.html' ?>
  </body>
</html>