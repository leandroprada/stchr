<?php
 session_start();
// SDK de Mercado Pago
require __DIR__ .'/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-7096232695569092-122812-471daacdceb959c30e915c0e7eafea57-440132128');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
$preferencerrss = new MercadoPago\Preference();
$preferencedev = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Curso Seleccion IT';
$item->quantity = 1;
$item->unit_price = 3200;
$preference->purpose ='wallet_purchase';
$preference->items = array($item);
$preference->save();

$itemrrss = new MercadoPago\Item();
$itemrrss->title = 'Curso Redes Sociales';
$itemrrss->quantity = 1;
$itemrrss->unit_price = 3000;
$preferencerrss->purpose ='wallet_purchase';
$preferencerrss->items = array($itemrrss);
$preferencerrss->save();

$itemdev = new MercadoPago\Item();
$itemdev->title = 'Curso Desarrollo Frontend';
$itemdev->quantity = 1;
$itemdev->unit_price = 30000;
$preferencedev->purpose ='wallet_purchase';
$preferencedev->items = array($itemdev);
$preferencedev->save();


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Seleccion,Consultoria,Recursos,Humanos,Cordoba">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>STC - Pagos</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/color-switcher.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

  </head>

  <body>
    <!-- Header Section Start -->
    <header id="slider-area">
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="img/stc2.png" alt=""></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="./index.php">Inicio</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="#curso">Cursos</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="./postulate.php">Postulate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contactenos">Contacto</a>
              </li>
            </ul>
            </div>
        </div>

	  </nav>


      <!-- Main Carousel Section -->
   <div class="container">
      <div id="workshop"  class="section-header" style="padding-top:100px;">
         <h2 class="section-title">Aqu&iacute; podr&aacute;s pagar tu curso</h2>
         <span style="padding-top:100px;">Pagos</span>
            </div>
	  
	  
	  <!--  <div id="curso" style="padding-top:60px;" class=" center lg-col-3 md-col-4 xs-col-6">
         <div class="xs-center curso">
		 <img class="curso" src="img/novedades/seleccionITAbril2020.jpeg" alt="">
		 </div>
      </div>  
	   -->

	  
   </div>
    </header>
    <!-- Header Section End -->
	
	    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
     <!--    <div class="section-header">
          <h2 class="section-title">Nuevos Cursos</h2>
          <span>Cursos</span>
          
        </div> -->
        <div class="row">
          <div class="col-md-12">
		  <ul>
		  <li>Selección IT Módulo 1 <script
			  src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			  data-preference-id="<?php echo $preference->id; ?>" >
			</script></li>
		  <li>Selección IT Módulo 2 Avanzado <script
			  src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			  data-preference-id="<?php echo $preference->id; ?>" >
			</script></li>
		  <li>Potencia tu Redes 4.0 Módulo Emprendedores <script
			  src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			  data-preferencerrss-id="<?php echo $preferencerrss->id; ?>" >
			</script></li>
		  <li>Potencia Tus Redes 4.0 Módulo RRHH <script
			  src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			  data-preferencerrss-id="<?php echo $preferencerrss->id; ?>" >
			</script></li>
		  <li>Curso básico de Desarrollo Web Frontend<script
			  src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
			  data-preferencedev-id="<?php echo $preferencedev->id; ?>" >
			</script></li>
		  </ul>
		 
		
			
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->
	
	
    <!-- Call to Action Start -->
    <section class="call-action section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <h3>¿Est&aacute;s listo para comenzar?</h3>
              <p>Escribinos por mail.<br> O llamanos para Inscribirte</p>
              <a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y seleccion de Personal" target="_blank" class="btn btn-common btn-effect">Contactanos!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->
    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content" id="contactenos">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>STC HR</h3>
              <div class="textwidget">
                <p>Si sentis que te podemos
				ayudar, con nuestra dedicacion
				y esfuerzo continuo.
				Contactanos!!!</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="linkedin" href="https://www.linkedin.com/in/infostchr/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y seleccion de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Links</h3>
                <ul class="menu">
                  <li><a href="./index.php#services">Servicios</a></li>
                  <li><a href="./index.php#portfolios">Cursos</a></li>
                  <li><a href="./index.php#team">El Equipo</a></li>

                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Cont&aacute;ctenos</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Direcci&oacute;n :</strong> <span>27 DE ABRIL 980 - Córdoba, Argentina</span>
                  </li>
                  <li>
                    <strong>Tel :</strong> <span>+54 351 703-2303</span>
                  </li>
                  <li>
                    <strong>Messenger: </strong> <span><a href="https://m.me/675557912900923?fbclid=IwAR3K4zKfHN9gEyLQQM1LJmiYmoS3tJinl8l6jKUYfvweFwigp3qXwWRouVE" target="_blank"> STC HR </a></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Instagram</h3>
                <ul class="instagram-footer">
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta1.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta2.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta3.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta4.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta5.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta6.jpg" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

	 </footer>
      <!-- Footer area End -->

	  <!-- Start Google Form -->
	<div class="container">
          <div class="row">
				<div class="col-md-12 center">
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdWEO7QWY_Zu9OjYYkGfzjlsOc4pMksq-xqXrSwHPhSBsd-5w/viewform?embedded=true" width="100%" height="1155" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
				</div>
		   </div>
	</div>

	  <!-- End Google Form -->


      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
              </div>
              <div class="float-right">
                <ul class="nav nav-inline">
                  <li class="nav-item">
                    <a class="nav-link active" href="https://www.leandroprada.website" target="_blank">Modified by Leo Prada</a>
                  </li>
                                   <li class="nav-item">
                    <a class="nav-link" href="mailto:leandroprada@gmail.com" target="_blank">Contacto</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->


    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <!-- <script src="js/color-switcher.js"></script> -->
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

<!-- Código de instalación Cliengo para www.stchr.info --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5d319dc5e4b00b6a43d0ed8c/5d319dc6e4b00b6a43d0ed8f.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>

  </body>
</html>
