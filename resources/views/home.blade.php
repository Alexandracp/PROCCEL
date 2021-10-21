<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Centro Educativo PROCCEL</title>
	<link rel="icon" href="../images/logo-proccel.png" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="{!!asset('css/bootstrap.css')!!}">
	<!-- include the site stylesheet -->
    <link rel="stylesheet" href="{!!asset('css/fancybox.css')!!}">
	<!-- include the site stylesheet -->
    <link rel="stylesheet" href="{!!asset('css/style1.css')!!}">
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageMenuPushWrap -->
		<div class="pageMenuPushWrap pageMenuPushWrap2">
			<!-- bgBaseWrap -->
			<div class="bgBaseWrap">
			
				@auth
				<header id="pageHeader" class="headerAbsolute">
					<!-- headerAbsoluteHolder -->
					<div class="headerAbsoluteHolder clearfix">
						<!-- logo -->
						<div class="logo"><a href="index.html"><img src="../images/logo-proccel.png" width="60" alt="PROCCEL"></a></div>
						<!-- pageNav -->
						<nav id="pageNav" class="navbar navbar-default navTransparent pageNav2">
							<!-- navbar collapse -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<div class="navigation-wrapper">
									<strong class="h elemenBlock h4 textWhite text-center menuTitle fontNeuron hidden-wiii hidden-wiv" id="menu-title">Menu</strong>
									<!-- pageMainNav -->
									<ul class="nav navbar-nav pageMainNav transparentWhite pageMainNav2">
										
										<li>
											<a href="{{route('home')}}">Inicio</a>
										</li>
										<li>
											<a href="sobre_nosotros.html">Conocenos</a>
										</li>
										<li>
											<a href="certificado.html">Certificados</a>
										</li>
									
									</ul>
								</div>
							</div>
							<!-- userOptions -->
							<div class="userOptions userOptions2 align-center">
								
									<ul class="list-unstyled UserLinksList UserLinksListSingle text-uppercase">
										<li class="hidden-xs-ph hidden-ph">
											<p  class="headerModalOpener transparentWhite text-uppercase
											fontNeuron fwBold noShrink hidden-xs">{{ auth() ->user()->p_nombre_u}}</p>								
										</li>
									</ul>
									<div class="btn btn-outline-primary ">
										<form action="/logout" method="POST">
										@csrf
										<a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
										</form>
									</div>
								
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
							</div>
						</nav>
					</div>
				</header>
									
				@else

				<header id="pageHeader" class="headerAbsolute">
					<!-- headerAbsoluteHolder -->
					<div class="headerAbsoluteHolder clearfix">
						<!-- logo -->
						<div class="logo"><a href="index.html"><img src="../images/logo-proccel.png" width="60" alt="PROCCEL"></a></div>
						<!-- pageNav -->
						<nav id="pageNav" class="navbar navbar-default navTransparent pageNav2">
							<!-- navbar collapse -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<div class="navigation-wrapper">
									<strong class="h elemenBlock h4 textWhite text-center menuTitle fontNeuron hidden-wiii hidden-wiv" id="menu-title">Menu</strong>
									<!-- pageMainNav -->
									<ul class="nav navbar-nav pageMainNav transparentWhite pageMainNav2">
										
										<li>
											<a href="{{route('home')}}">Inicio</a>
										</li>
										<li>
											<a href="sobre_nosotros.html">Conocenos</a>
										</li>
										<li>
											<a href="certificado.html">Certificados</a>
										</li>
									
									</ul>
								</div>
							</div>
							<!-- userOptions -->
							<div class="userOptions userOptions2 align-center">
								
								<ul class="list-unstyled UserLinksList UserLinksListSingle text-uppercase">	
									<li class="hidden-xs-ph hidden-ph">
										<a href="{{route('login')}}" >Ingresar</a> 
									</li>
								</ul>
								<!-- headerModalOpener -->
								<a href="{{route('registro.index')}}" class="headerModalOpener transparentWhite text-uppercase fontNeuron fwBold noShrink hidden-xs">Registrar</a>
								
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							</div>
						</nav>
					</div>
				</header>
								
				@endguest
							
				<!-- main -->
				<main class="bgWhite">
					<!-- introBanner -->
					<section class="introBanner">
						<div class="container holder text-center textWhite">
							<div class="align">
								<form action="#" class="findFormBlock">
									<h1 class="fontNeuron">Centro Educativo PROCCEL</h1>
									<p class="fontNeuron fwBold">"Tu Futuro Hoy"</p>
									
								</form>
							</div>
						</div>
						<!-- bannerImageSlideshow -->
						<div class="bannerImageSlideshow bg-primary slickSlider">
							<div>
								<span class="bgCover elemenBlock" style="background-image: url(../images/slider1.jpg);"></span>
							</div>
							<div>
								<span class="bgCover elemenBlock" style="background-image: url(../images/slider2.jpg);"></span>
							</div>
							<div>
								<span class="bgCover elemenBlock" style="background-image: url(../images/slider3.jpg);"></span>
							</div>
						</div>
						<!-- container con direcciones -->
					<section class="homeapp">
						<div class="container-fluid" style="background-color: #004a99;">
							<div class="headerHolder">
								<div class="row">
									<div class="col-xs-6 col-sm-9 d-flex" style="margin-left: 6%;">
										<!-- headerContactList -->
										<ul class="list-unstyled headerContactList">
											<li>
												<a class="icn icnBubble noShrink text-info"><i class="far fa-clock"></i></a>
												<div class="descr hidden-xs">
													<strong class="fwNormal elemenBlock text"><a>Lunes a Sábado</a></strong>
													<strong class="fwNormal elemenBlock text"><a>9:00 am hasta 6:00 pm</a></strong>
												</div>
											</li>
											<li>
												<a class="icn icnBubble noShrink text-info"><i class="fas fa-phone-volume"></i></a>
												<div class="descr hidden-xs">
													<strong class="fwNormal elemenBlock text"><a href="tel:+58 2761111">+58 276 1111</a></strong>
													<strong class="fwNormal elemenBlock text"><a href="tel:+58 2761211">+58 276 1211</a></strong>
												</div>
											</li>
											<li class="hidden-xs">
												<span class="icn icnJumping text-info noShrink"><i class="fas fa-map-marker-alt"></i></span>
												<div class="descr">
													<strong class="fwNormal elemenBlock text">San Antonio - Estado Tachira <br>Barrio Miranda Antiguo Colegio Juan Pablo</strong>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>	
					</section>
					</section>
					
					<section class="homeapp" style="-webkit-box-shadow: -1px 3px 13px 2px rgba(212,212,212,1);-moz-box-shadow: -1px 3px 13px 2px rgba(212,212,212,1);box-shadow: -1px 3px 13px 2px rgba(212,212,212,1); padding-bottom: 50px;">
						<div class="container">
							<div class="row">
								<div class="appcontent-area">
									<div class="col-xs-12 col-sm-6 col-md-5">
										<div class="home-img">
											<img src="../images/señala.png" alt="">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-7">
										<div class="homeapp-content">
											<h2 class="text-center" style="color: #0a243f;">Asi son nuestros cursos</h2>
											<div class="description">
												<h3>Presenciales:</h3>
												<p>Todas nuestras clases son presenciales en nuestra sede y tendran el apoyo en todo momento de nuestros profesionales</p>
												<h3>Profesores Profesionales</h3>
												<p>Cada uno de nuestros profesores está especializado en su área, recibirás una educación de alto nivel.</p>
												<h3>Certificados:</h3>
												<p>Al culminar las 16 semanas de instruccion recibiras un Certificado virtual avalado por el MPPE, el cual debes imprimir y traer a nuestra sede para certificar</p>
												<h3>Conocimiento Garantizado:</h3>
												<p>Te aseguramos que al terminar las 16 semanas de instruccion, podras desemvolverte en el area aprendida</p>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- Formas de pago -->
					<section class="servicesFetaureBlock container">
						<h1 class="fontNeuron blockH text-uppercase text-center"><span>FORMAS DE</span> <span class="textSecondary">PAGO</span></h1>
						<!-- servicesFetauresList -->
						<ul class="servicesFetauresList list-unstyled text-center">
							<li>
								<a href="#popup1" class="lightbox">
									<span class="icnHolder roundedCircle"><img src="../images/efectivo 2.png" width="95" height="100" alt="Doctor 1"></span>
									<h2 class="fontNeuron text-capitalize">Efectivo</h2>
								</a>
							</li>
							<li>
								<a href="#popup1"  class="lightbox">
									<span class="icnHolder roundedCircle"><img src="../images/transferencia.png"  width="95" height="200"> </span>
									<h2 class="fontNeuron text-capitalize">Transferencia Bancaria</h2>
								</a>
							</li>
							<li>
								<a href="#popup1"  class="lightbox">
									<span class="icnHolder roundedCircle"><img src="../images/transferencia2.png"  width="100" height="100"> </span>
									<h2 class="fontNeuron text-capitalize">Transferencias Extranjeras</h2>
								</a>
							</li>
							<li>
								<a  href="#popup1"  class="lightbox">
									<span class="icnHolder roundedCircle"><img src="../images/punto_venta2.png"  width="150" height="150"> </span>
									<h2 class="fontNeuron text-capitalize">Punto de Venta</h2>
								</a>
							</li>
						</ul>
					</section>

					<!-- latestPostsBlock -->
<section class="latestPostsBlock container-fluid" >
    <!-- rowHead -->
    <header class="row rowHead">
        <div class="col-xs-12 col-sm-5">
            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">Nuestros</span> <span class="textSecondary">Cursos</span></h1>
        </div>
    </header>
    <!-- isoContentHolder -->
    <div class="row">
        <div class=" slickSlider latestPostsSlider slide-v2">
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/panaderia.jpeg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Panaderia Basico</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$30,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Domingo</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">8:00am - 12:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i> Alejandra Cárdenas</span></li>
                            </ul>
                            
                            
                        </footer>
                    </article>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/reposteria.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Reposteria Nivel 1</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$25,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Viernes</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">8:00am - 12:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Livano Cruz</span></li>
                            </ul>
                            
                            
                        </footer>
                    </article>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="--webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/cocina.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Cocina Basica</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$25,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Miercoles</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">2:00pm - 5:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Milagros Díaz</span></li>
                            </ul>
                            
                            
                        </footer>
                    </article>
                </div>
            </div>
           
        </div>
    </div>
    <!-- isoContentHolder -->
    <div class="row">
        <div class=" slickSlider latestPostsSlider slide-v2">
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/barberia.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Barbería</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$20,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Jueves</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">2:00pm - 5:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Luz Mendoza</span></li>
                            </ul>
                            
                            
                        </footer>
                    </article>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/peluqueria.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Peluqueria y Belleza</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$20,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Sábado</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">8:00am - 12:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Monica Gonzales</span></li>
                            </ul>
                            
                        </footer>
                    </article>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/manicure.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Manicure y Pedicure</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$20,00</span></h3>
                            </div>
                        </div>
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Sábado</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">2:00pm - 5:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            <ul class="list-unstyled postHoverLinskList">
                                <li><span class="float-right"><i class="far fa-user"></i>Monica Gonzales</span></li>
                            </ul>
                            
                        </footer>
                    </article>
                </div>
            </div>
          
        </div>
    </div>
<!-- isoContentHolder -->
    <div class="row">
        <div class=" slickSlider latestPostsSlider slide-v2">
    
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/automotriz.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Reparación Automotriz</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$20,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Martes</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">2:00pm - 5:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Daniel Medina</span></li>
                            </ul>
                            
                            
                        </footer>
                    </article>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/celulares.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Reparación de Celulares</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$20,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Lunes</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">2:00pm - 5:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">16sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Carlos Contreras</span></li>
                            </ul>
                            
                            
                        </footer>
                    </article>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- postColumn -->
                    <article class="postColumn hasOver bgWhite" style="-webkit-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					-moz-box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);
					box-shadow: 0px 9px 9px 2px rgba(222,222,222,1);">
                        <div class="aligncenter">
                            <!-- postColumnImageSlider -->
                            <div class="imgHolder">
                                <a href="detalle_cursos.html">
                                    <img src="../images/servicios/asis_farmacia.jpg" alt="image description">
                                </a>
                            </div>
                            <span class="btn btnSmall btn-success btnDark text-capitalize">Inscribir</span>
                            <div class="postion">
                                <h2 class="fontNeuron text-capitalize"><a href="detalle_cursos.html">Asistente de Farmacía</a></h2>
                                <h3 class="fontNeuron fwSemi"><span class="textSecondary">$20,00</span></h3>
                            </div>
                        </div>
                    
                        <!-- postColumnFoot -->
                        <footer class="postColumnFoot">
                            <ul class="list-unstyled">
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Día</strong>
                                    <strong class="fwNormal elemenBlock">Domingo</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Hora</strong>
                                    <strong class="fwNormal elemenBlock">8:00am - 12:00pm</strong>
                                </li>
                                <li>
                                    <strong class="fwNormal elemenBlock text-primary">Duración</strong>
                                    <strong class="fwNormal elemenBlock">12sem</strong>
                                </li>
                                
                            </ul>
                            
                            <!-- postHoverLinskList -->
                            <ul class="list-unstyled postHoverLinskList">
                                
                                <li><span class="float-right"><i class="far fa-user"></i>Miguel Sanchez</span></li>
                            </ul>
                            
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section><!--LINEA 3-->

					<!-- ourAgentBlock -->
					<section class="bgWhite ourAgentBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">Nuestro personal</span> <span class="textSecondary">Docente</span></h1>
							<div class="row">
								<!-- profilesSlider -->
								<div class="three-slider slickSlider latestPostsSlider slide-v2">
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a href="#">
														<img src="../images/docente/docente1.jpg" alt="Docente 1">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a>Alejandra Cárdenas</a></h2>
													<h3 class="fwNormal text-capitalize">Docente de Panadería</h3>
													<div class="collapseWrap">
														<p>Especialista en el area de panaderia y reposteria </p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a href="#">
														<img src="../images/docente/docente2.jpg" alt="Docente2">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">Livano Cruz</a></h2>
													<h3 class="fwNormal text-capitalize">Docente de resposteria</h3>
													<div class="collapseWrap">
														<p>Especialista en el area, graduado 
															en el instituto Gastronomico de San Cristobal</p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a href="#">
														<img src="../images/docente/docente3.jpg" alt="Docente3">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a href="#">Milagros Diaz</a></h2>
													<h3 class="fwNormal text-capitalize">Docente de Cocina Basica</h3>
													<div class="collapseWrap">
														<p>Especialista en el area, graduada
															en el instituto FOGO en San Cristobal</p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a>
														<img src="../images/docente/docente4.jpg" alt="Docente4">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a href="#">Luz Mendoza</a></h2>
													<h3 class="fwNormal text-capitalize">Docente de Barbería</h3>
													<div class="collapseWrap">
														<p>Estilista especializa, preparada
															en el SENA instituto colombiano</p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a>
														<img src="../images/docente/docente5.jpg" alt="Docente4">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a href="#">Miguel Sanchez</a></h2>
													<h3 class="fwNormal text-capitalize">Docente de Asistente de Farmacia</h3>
													<div class="collapseWrap">
														<p>Especialista graduado en a ULA tachira</p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a>
														<img src="../images/docente/docente6.jpg" alt="Docente6">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a>Monica Gonzales</a></h2>
													<h3 class="fwNormal text-capitalize">Docente de Peluquería y Manicure</h3>
													<div class="collapseWrap">
														<p>Estilista profesional. Graduada en el instituto de Belleza de Caracas</p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a>
														<img src="../images/docente/docente7.jpg" alt="Doncente7">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a>Carlos Contreras</a></h2>
													<h3 class="fwNormal text-capitalize">Docente en Reparación </h3>
													<div class="collapseWrap">
														<p>Tecnico especializado en reparación de celulares</p>
													</div>
												</div>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a href="#">
														<img src="../images/docente/docente8.jpg" alt="Docente8">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a>Daniel Medina</a></h2>
													<h3 class="fwNormal text-capitalize">Docente en Reparacion Automotriz</h3>
													<div class="collapseWrap">
														<p>Ing. Mecanico y especialista en mecanica automotriz</p>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
			</div>
			<!-- pageFooterBlock -->
			<div class="pageFooterBlock bg-color">
				<!-- pageAside -->
				<aside class="pageAside bgLightcolor">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col">
								<h2 class="fontNeuron fwSemi text-uppercase">Centro Educativo Proccel<br> Tu Futuro Hoy</h2>
								<address>
									<dl>
										<dt><i class="fi flaticon-navigation"></i></dt>
										<dd>Barrio Miranda - Antiguo Colegio Juan Pablo Perez Alfonso</dd>
										<dt><i class="fi flaticon-24-hours"></i></dt>
										<dd><a href="tel:+582767711701">+58 0276771 1701</a></dd>
										<dt><i class="fi flaticon-mail"></i></dt>
										<dd><a href="mailto:centroproccel@gmail.com">centroproccel@gmail.com</a></dd>
									</dl>
								</address>
							</div>
							
						</div>
					</div>
				</aside>
				<!-- pageFooter -->
				<footer id="pageFooter">
					<div class="container pageFooterHolder">
						<div class="row">
							<div class="col-xs-12 col-sm-push-6 col-sm-6">
								<!-- pageFooterSocial -->
								<ul class="socialNetworks list-unstyled pageFooterSocial">
									<li><a href="https://es-la.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/iniciarsesion?lang=es"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/?hl=es-la"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-pull-6 col-sm-6">
								<p>2021 <a href="index.html">Centro Educativo PROCCEL</a> - Todos los derechos reservados</p>
							</div>
						</div>
					</div>
				</footer>
				  <!-- SUBIR -->
				  <a href="#pageWrapper" class="btnScrollToTop smooth textWhite">Subir<i class="fi flaticon-arrows btnScrollIcn"></i></a>
				  <span class="bgCover elemenBlock" style="background-image: url(../images/final.jpg);"></span>
			</div>
		</div>
		
		<!--Ventanas emergentes formas de pago -->
		<div class="popup-holder">
			<div id="popup1" class="lightbox-demo">
				<!-- popupLoginFrom -->
				<form action="#" class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
					<ul class="list-unstyled popupTabsetList text-center fwBold text-uppercase fontNeuron">
						<li class="active"><a href="#tab01">EFECTIVO</a></li>
						<li><a href="#tab02">Transferencia Nacional</a></li>
						<li><a href="#tab03">Transferencia Extranjera</a></li>
						<li><a href="#tab04">Punto de Venta</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab01" class="tab-active">
							<div class="popupColsHolder">
								<div class="col bgWhite">
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
							
							</div>
						</div>
						<div id="tab02">
							<div class="popupColsHolder">
								<div class="col bgWhite">
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
											<div id="content">
												<div class="col-xs-12 col-sm-6 col-md-4">
													<!-- newsPostColumn -->
													<article class="newsPostColumn  bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/banco_vzla.jpg" alt="image2">
														</div>
														<h3>Banco de Venezuela</h3>
														<p class="fontNeuron">- Número de Cuenta: 0102000000000000000</p>
													</article>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-4">
													<!-- newsPostColumn -->
													<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/banco_banesco.jpeg" width="50" alt="image2">
														</div>
														<h3>Banco Banesco</h3>
														<p class="fontNeuron">- Número de Cuenta: 0102000000000000000</p>
													</article>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-4">
													<!-- newsPostColumn -->
													<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/banco_sofitasa.png" alt="image2">
														</div>
														<h3>Banco Sofitasa</h3>
														<p class="fontNeuron">- Número de Cuenta: 0102000000000000000</p>
													</article>
												</div>
											</div>
										</div>
										<p style="color:  rgb(211, 12, 12);">NOTA: Luego de hacer el pago debes registrarlo en el botón 'Registrar Pago' en tu perfil, en nuestra página web.
											Guarda captura de pantalla al momento de hacer el pago.</p>
								</div>
							</div>
						</div>
						<div id="tab03">
							<div class="popupColsHolder">
								<div class="col bgWhite">
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
										<h3>Bancos: </h3>
										<div class="row">
											<!-- content -->
											<div id="content">
												<div class="col-xs-12 col-sm-6 col-md-4">
													<!-- newsPostColumn -->
													<article class="newsPostColumn  bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/zelle.png" alt="image2">
														</div>
													</article>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-4">
													<!-- newsPostColumn -->
													<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/paypal.jpg" width="50" alt="image2">
														</div>
													</article>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-4">
													<!-- newsPostColumn -->
													<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
														<div class="aligncenter">
																<img src="../images/bancos/bancolombia.png" alt="image2">
														</div>
													</article>
												</div>
											</div>
										</div>
									<p style="color: rgb(211, 12, 12);">NOTA: Luego de hacer el pago debes registrarlo en el botón 'Registrar Pago' en tu perfil, en nuestra página web.
										Guarda captura de pantalla al momento de hacer el pago.</p>
								</div>
							</div>
						</div>
						<div id="tab04" class="tab-active">
							<div class="popupColsHolder">
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
										<p style="color: rgb(27, 27, 66);">Mañana:</p><p>9:00am a 12:00pm</p>
										<p style="color: rgb(27, 27, 66);">Tarde:</p><p>2:00pm a 6:00pm</p>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- include jQuery library -->
	<script src="../js/jquery.js"></script>
	<script src="../js/plugins.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="../js/bootstrap-slider.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="../js/jquery.main.js"></script>
	<script type="text/javascript" src="../js/init.js"></script>
</body>
</html>