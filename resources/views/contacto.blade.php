<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Aurora - Contacto</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
		<!-- Font awesome CSS -->
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<link href="{{asset('css/style-color.css')}}" rel="stylesheet">
		
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
							<strong>Phone</strong>:&nbsp; <a href="#">3398007465</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">Aurora.music550@gmail.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook"  target="_blank" href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter"  target="_blank" href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
				<a class="btn btn-lg btn-theme" href="/landingpage">Regresar</a>
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contactanos</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">Calle Insurgentes #1670, Interior #2</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">Aurora.music550@gmail.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">3398007465</span>
							</div>
						</div>
					</div>
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Dejanos tus datos para encontrarte y formar equipo.</p>
						<form  action="/recibe-form-contacto" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="nombre">Nombre</label>
										<input type="text" class="form-control" id="nombre" name="nombre" value="{{$nombre ?? ''}}" require>
										@error('nombre') 
										<i>{{ $message }}</i>
										@enderror
									</div>
									<div class="form-group">
										<label for="email">E-mail</label>
										<input type="email" class="form-control" id="email" name="email" value="{{$email ?? ''}}" require>
										@error('email') 
										<i>{{ $message }}</i>
										@enderror
									</div>
									<div class="form-group">
										<label for="telefono">Teléfono</label>
										<input type="integer" class="form-control" id="telefono" name="telefono" value="{{$telefono ?? ''}}" require>
										@error('telefono') 
										<i>{{ $message }}</i>
										@enderror
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="comentarios">Mensaje</label>
										<textarea class="form-control" id="comentarios" name="comentarios" rows="9" require>{{$comentarios ?? ''}}</textarea>
										@error('comentarios') 
										<i>{{ $message }}</i>
										@enderror
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-theme">Enviar</button>
							</div>
							
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-facebook"  target="_blank" href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a class="h-google"  target="_blank" href="https://twitter.com/?lang=es"><i class="fa fa-google-plus"></i></a>
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