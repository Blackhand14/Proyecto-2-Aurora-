<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Aurora</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/logo1.png">
	</head>
	
	<body>
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Número</strong>:&nbsp; <a href="#">3398007465</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">Aurora.music550@gmail.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" target="_blank" href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" target="_blank" href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
                                <h2 style="color: white;" >Aurora</h2>
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#equipo">Unete al Equipo</a></li>
								<li><a href="#eventos">Eventos</a></li>
								<li><a href="/contacto">Contacto</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/b1.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Conoce nuestra Música!</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Encuentra la Innovación &amp; Sensaciones nuevas.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Descarga aquí</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Escucha y Disfruta...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Todas las sensaciones al alcance de tus manos.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Escucha Ahora</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- work with us -->
			<div class="work-with-us pad" id="equipo">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Trabaja en Nuestro Equipo</h2>
					</div>
					<!-- why work with us content -->
					<div class="why-content">
						<!-- paragraph -->
						<p class="why-message">Si estás interesado en el mundo de la música y te gusta lo que hacemos sigue los siguientes pasos para unirte a nuestro equipo.</p>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-one">
									<span class="why-number">1</span>
									<!-- paragraph -->
									<p>Necesitamos alguien que toque al menos un instrumento musical (Guitarra, Bajo, Batería, Víolin o Piano). </p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-two">
									<span class="why-number">2</span>
									<!-- paragraph -->
									<p>Tener conocimientos básicos sobre acordes, melodías, lectura de partituras así como interesarte por el género que nosotros estamos desempañando en el mundo de la música. </p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-three">
									<span class="why-number">3</span>
									<!-- paragraph -->
									<p>Desempeñar buena actitud y tener una buena presentación, ser proactivo y siempre tratar de ayudar a miembros nuevos para su superación. </p>
								</div>
							</div>
                            <div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-three">
									<span class="why-number">4</span>
									<!-- paragraph -->
									<p>Gusto por la música y apasionarte</p>
								</div>
							</div>
						</div>
						<!-- apply button -->
						<div class="apply-btn">
							<!-- button line -->
							<a class="btn btn-lg btn-theme" href="contacto">¡Unete Ahora!</a>
						</div>
					</div>
				</div>
			</div>
			<!--/ end work with us -->
			
			<!-- events -->
			<div class="events parallax-three pad" id="eventos">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<!-- heading -->
						<h2>Próximos Eventos</h2>
					</div>
					<!-- events element -->
					<div class="events-element">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											30 <span class="emonth">Oct</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">06:30 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i>CDMX</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/Auditorio-Nacional.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Gira: Descepción y Olvido</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Presentamos nuestro primer albúm en el cual mostramos la prespectiva según nuestros ojos de como cada persona vive su proceso de ruptura amorosa.</p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Comprar Boletos</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											14 <span class="emonth">Nov</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">09:45 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i>Jalisco</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/Estadio-Akron.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Gira: Descepción y Olvido</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Presentamos nuestro primer albúm en el cual mostramos la prespectiva según nuestros ojos de como cada persona vive su proceso de ruptura amorosa.</p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Comprar Boletos</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											19 <span class="emonth">Dic</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">8:00 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i>Tijuana</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/Auditorio-CECUT.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Gira: Descepción y Olvido</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Presentamos nuestro primer albúm en el cual mostramos la prespectiva según nuestros ojos de como cada persona vive su proceso de ruptura amorosa.</p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Comprar Boletos</button>
									</div>
								</div>
							</div>
                            <div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											05 <span class="emonth">Ene</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">09:45 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i>Puebla</span>
										<!-- image -->
										<img class="img-responsive" src="img/event/Auditorio-Metropolitano.jpg" alt="" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Gira: Descepción y Olvido</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Presentamos nuestro primer albúm en el cual mostramos la prespectiva según nuestros ojos de como cada persona vive su proceso de ruptura amorosa.</p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Comprar Boletos</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- events end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-facebook" target="_blank" href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a class="h-twitter" target="_blank" href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; copyright 2022, Todos los derechos reservados.</p>
				</div>
			</footer>
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>