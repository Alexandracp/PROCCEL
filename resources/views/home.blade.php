<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Centro Educativo PROCCEL</title>
    	<link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
		<link rel="stylesheet" href="{!!asset('css/styleshome.css')!!}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
		@auth 
        <nav class="navbar navbar-expand-lg navbar-primary fixed-top" id="mainNav">
            <div class="container">
			<div class="logo"><a href="index.html"><img src="../images/logo-proccel.png" width="60" alt="PROCCEL"></a></div>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Menu
					</a>
					<ul class="dropdown-menu dropdown-menu-danger" aria-labelledby="navbarDarkDropdownMenuLink">
						<li><a class="dropdown-item" href="#services">Formas de Pago</a></li>
                        <li><a class="dropdown-item" href="#portfolio">Cursos</a></li>
						<li><a class="dropdown-item" href="#about">Conocenos</a></li>
						<li><a class="dropdown-item" href="#team">Instructores</a></li>
					</ul>
					</li>
				</ul>
			</div>    
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('admin.inicio')}}">{{ auth() ->user()->p_nombre_u}} {{ auth() ->user()->p_apellido_u}}</a></li>
                        
                    </ul>
                    <form action="/logout" method="POST">
                      @csrf
                        <a class="btn btn-danger" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Centro Educativo PROCCEL</div>
                <div class="masthead-heading text-uppercase">Tu futuro hoy</div>
            </div>
        </header>
		@else 
		<nav class="navbar navbar-expand-lg navbar-primary fixed-top" id="mainNav">
            <div class="container">
			<div class="logo"><a href="index.html"><img src="../images/logo-proccel.png" width="60" alt="PROCCEL"></a></div>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Menu
					</a>
					<ul class="dropdown-menu dropdown-menu-danger" aria-labelledby="navbarDarkDropdownMenuLink">
						<li><a class="dropdown-item" href="#services">Formas de Pago</a></li>
                        <li><a class="dropdown-item" href="#portfolio">Cursos</a></li>
						<li><a class="dropdown-item" href="#about">Conocenos</a></li>
						<li><a class="dropdown-item" href="#team">Instructores</a></li>
					</ul>
					</li>
				</ul>
			</div>    
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Ingresar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('registro.index')}}">Registrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Centro Educativo PROCCEL</div>
                <div class="masthead-heading text-uppercase">Tu futuro hoy</div>
                <a class="btn btn-danger btn-xl text-uppercase" href="{{route('registro.index')}}" >Registrate</a>
            </div>
        </header>
		@endguest
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Formas de pago</h2>
                    <h3 class="section-subheading text-muted">Realiza tu pago ahora</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <!-- Forma de Pago 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                 <span class="icnHolder roundedCircle"><img src="../images/efectivo 2.png" width="95" height="100" alt="Doctor 1"></span>
                            </a>
                            <div class="portfolio-caption">
                            <h4 class="my-3">Efectivo</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Forma de Pago 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <span class="icnHolder roundedCircle"><img src="../images/transferencia.png"  width="95" height="100"> </span>
                            </a>
                            <div class="portfolio-caption">
                            <h4 class="my-3">Transferencia Bancaria</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Forma de Pago 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <span class="icnHolder roundedCircle"><img src="../images/transferencia2.png"  width="100" height="100"> </span>
                            </a>
                            <div class="portfolio-caption">
                            <h4 class="my-3">Transferencia Extrajera</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                         <!-- Forma de Pago 4-->
                         <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <span class="icnHolder roundedCircle"><img src="../images/punto_venta2.png"  width="150" height="120"> </span>
                            </a>
                            <div class="portfolio-caption">
                            <h4 class="my-3">Punto de Venta</h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cursos</h2>
                    <h3 class="section-subheading text-muted">Elige el Camino que deseas Seguir.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Nombre del Curso</div>
                                <div class="portfolio-caption-subheading text-muted">Fecha de inicio: 20/00/0000</div> <br>
                                <div class="btn btn-outline-dark">$40.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Conocenos</h2>
                    <h3 class="section-subheading text-muted">Cambia tu futuro e inicia tu emprendimiento</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/fachada.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Sobre Nosotros</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                Centro Educativo PROCCEL Es una empresa privada de capacitación ubicada en San Antonio, Estado Táchira, Venezuela, fundada en el año 2007, con la finalidad de brindar asesoramiento y capacitación a todas aquellas personas profesional o sin estudio mediante cursos presenciales en las diferentes áreas de cocina, belleza, infomatica con el objetivo de cambiar el futuro de nuestros estudiantes.
                                </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/entrega_certificado.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><p class="text-muted">
                            Desde el 2007 hemos dictado cursos a más de 7000 personas, que han confiado en nosotros y han visto una constante evolución y actualización de nuestros cursos conforme a los avances. De igual forma contamos con el aval del Ministerio del Poder Popular para la Educación, bajo el número de plantel privado R0000000 por lo tanto, los participantes que aprueben nuestros cursos obtienen un certificado válido dentro y fuera del territorio venezolano.
                           </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/mision.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Misión</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Ser una de las mejores institucion privada, cuyo propósito es brindar y ofrecer educcion de calidad integral, que ofrezca eficacia y eficiencia administrativa, promoviendo un ambiente agradable y cómodo, donde los usuarios tanto internos como externos satisfagan sus necesidades, con tecnología acorde al ámbito donde actúe y un personal idóneo, con conocimientos, habilidades y destrezas consonas con la organización.
                                                        </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/vision.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Visión</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Profundizar en nuestro trabajo para que seamos:

                            Un instituto que considere al alumnado el centro de toda su acción educativa, ayudándole a ser el protagonista activo de su proceso formativo.

                            Un instituto que favorezca la formación integral del alumnado contando con su diversidad, fomentando el espíritu de superación, cooperación, respeto, solidaridad, creatividad y sentido de la trascendencia.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                ¡Forma parte
                                <br />
                                De nuestra
                                <br />
                                Historia!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Personal-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestro personal docente</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="bs-blue   footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-lg-start"> &copy; Todos los derechos reservados - Centro Educativo PROCCEL</div>
                    <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h1>EFECTIVO</h1>
									<p>Visita nuestra Sede para consignar tu pago</p>
									<div >
										<h3>Direccion:</h3>
										<p>San Antonio del tachira barrio mirando en el antiguo Juan Pablo Perez Alfonso</p>
									</div>
									<div class="form-group">
										<h3>Información</h3>
										<p>Visita nuestras instalaciones para consignar tu pago, recuerda debes dirigirte 
											antes de el inicio de clases para formalizar tu inscripción<br>Tambien recuerda que el pago puede ser cancelado en Bolivares Soberanos, 
											pesos o Dolares puedes escoger la moneda mas comoda para tí</p>
										
									</div>
									<div>
										<h3>Horario de atención</h3>
										<h4>Lunes a Sábado</h4>
										<p style="color: rgb(27, 27, 66);">Mañana:</p><p>9:00am a 12:00pm</p>
										<p style="color: rgb(27, 27, 66);">Tarde:</p><p>2:00pm a 6:00pm</p>
									</div>
								</div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                <h1>Cuentas Bancarias Nacionales</h1>
									<p>Conoce todas nuestras cuentas para realizar tu pago con moneda nacional</p>
										<div>
											<h3>Datos Personales</h3>
											<p style="color:rgb(118, 226, 9)"><b>Transferencia a nombre de:</b><span style="color:#8e99a3"> Centro Educativo Proccel C.A</span></p>
											<p style="color:rgb(118, 226, 9)"><b>Tipo de cuenta</b><span style="color:#8e99a3"> Corriente</span></p>
											<p style="color:rgb(118, 226, 9)"><b>RIF:</b><span style="color:#8e99a3"> J-299129470</span></p>
											<p style="color:rgb(118, 226, 9)"><b>Correo:</b><span style="color:#8e99a3"> pagosproccel@gmail.com<br></span></p>
										</div>
										<h3>CUENTAS: </h3>
										<div class="row">
											<!-- content -->
											<div class="container" id="content">
												<div class="col-xs-4  col-md-12">
													<!-- newsPostColumn -->
													<article class="newsPostColumn  bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img width="30%" src="../images/bancos/banco_vzla.jpg" alt="image2">
														</div>
														<h3>Banco de Venezuela</h3>
														<p class="fontNeuron">- Número de Cuenta: 0102000000000000000</p>
													</article>
												</div>
												<div class="col-xs-4 col-md-12">
													<!-- newsPostColumn -->
													<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/banco_banesco.jpeg" width="100" alt="image2">
														</div>
														<h3>Banco Banesco</h3>
														<p class="fontNeuron">- Número de Cuenta: 0102000000000000000</p>
													</article>
												</div>
												<div class="col-xs-4  col-md-12">
													<!-- newsPostColumn -->
													<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img width="30%" src="../images/bancos/banco_sofitasa.png" alt="image2">
														</div>
														<h3>Banco Sofitasa</h3>
														<p class="fontNeuron">- Número de Cuenta: 0102000000000000000</p>
													</article>
												</div>
											</div>
										</div>
										<p style="color:  rgb(211, 12, 12);">NOTA: Luego de hacer el pago debes registrarlo en el botón 'Registrar Pago' en tu perfil, en nuestra página web.
											Guarda captura de pantalla al momento de hacer el pago.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                <h1>Cuentas Bancarias Extrajeras</h1>
									<p>Conoce todas nuestras cuentas para realizar tu pago con moneda Extranjera</p>
										<div>
											<h3>Bancolombia</h3>
											<p style="color:rgb(118, 226, 9)"><b>Transferencia a nombre de:</b><span style="color:#8e99a3"> Alexandra Cardenas</span></p>
											<p style="color:rgb(118, 226, 9)"><b>Tipo de cuenta</b><span style="color:#8e99a3"> Ahorro</span></p>
											<p style="color:rgb(118, 226, 9)"><b>Documento:</b><span style="color:#8e99a3"> 1.123.123.123</span></p>
											<p style="color:rgb(118, 226, 9)"><b>Correo:</b><span style="color:#8e99a3"> pagosproccel@gmail.com<br></span></p>
										</div>
										<div>
											<h3>Zelle</h3>
											<p>Si deseas cancelar con ZELLE realiza tu transferencia a:</p>
											<p style="color:rgb(118, 226, 9)"><b>Correo:</b><span style="color:#8e99a3"> pagosproccel@gmail.com<br></span></p>
										</div>
										<div>
											<h3>Paypal</h3>
											<p>Si deseas cancelar con PAYPAL realiza tu transferencia a:</p>
											<p style="color:rgb(118, 226, 9)"><b>Correo:</b><span style="color:#8e99a3"> pagosproccel@gmail.com<br></span></p>
										</div>
										</div>
									<p style="color: rgb(211, 12, 12);">NOTA: Luego de hacer el pago debes registrarlo en el botón 'Registrar Pago' en tu perfil, en nuestra página web.
										Guarda captura de pantalla al momento de hacer el pago.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                <div class="col bgWhite">
									<h1>Punto de Venta</h1>
									<p>Visita nuestra Sede para consignar tu pago</p>
									<div >
										<h3>Direccion:</h3>
										<p>San Antonio del tachira barrio mirando en el antiguo Juan Pablo Perez Alfonso</p>
									</div>
									<div class="form-group">
										<h3>Información</h3>
										<p>Visita nuestras instalaciones para consignar tu pago, recuerda debes dirigirte 
											antes de el inicio de clases para formalizar tu inscripción<br>Recuerda que tenemos punto de venta donde puedes cancelar
										en bolivares o en DIVISAS</p>
										
									</div>
									<div>
										<h3>Horario de atención</h3>
										<h4>Lunes a Sábado</h4>
                                        <strong>Mañana</strong>
										<p>9:00am a 12:00pm</p>
                                        <strong>Tarde</strong>
										<p>2:00pm a 6:00pm</p>
									</div>
								</div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
