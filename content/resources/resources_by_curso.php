<?php
 session_start();

$firstname = $_SESSION['firstname']; 
$course = $_SESSION['course'];

			if ($course == "default"){
				include "resources_generico.php";
				}
				
			else if ($course == "all"){
				echo "Aca verás todos los cursos por ser del grupo";
				}
			
			else if ($course == "itavanzadomay20"){
				echo '
				
				<!-- Start Video promo Section -->

					<section class="video-promo section">
					  <div class="overlay"></div>
					  <div class="container">
						<div class="row">
						  <div class="col-md-12 col-sm-12">
							
							  <div class="video-promo-content text-center">
									<h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Curso Selecci&oacute;n IT Avanzado 09-MAY-2020</h2>
								 <iframe width="75%" height="315" src="https://www.youtube.com/embed/c1YSfFaMve4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<iframe width="75%" height="450px" src="press1ForSMS.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<object data="press1ForSMS.mp4" width="75%" height="450px"></object>
							  </div>
						  </div>

						  <div class="col-md-12 col-sm-12">
							
							  <div class="video-promo-content text-center">
									<h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Curso Selecci&oacute;n IT Avanzado 16-MAY-2020</h2>
									<iframe width="75%" height="315" src="https://www.youtube.com/embed/JRn1b-pxX40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<object width="75%" height="450px" data=".videos/itavanzadomay20-2.mp4"></object>
							  </div>
						  </div>
						</div>
					  </div>
					</section>

				<!-- End Video Promo Section -->
				';
				}
			
			else {
				echo '
				<section class="video-promo section">
					<div class="overlay"></div>
					  <div class="container">
						<div class="row">
						  <div class="col-md-12 col-sm-12">
							
							  <div class="video-promo-content text-center">
									<h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">No hay contenido exclusivo para tu cuenta</h2>
									
							  </div>
						  </div>

						</div>
					  </div>
				</section>
				
				
				
				
				
				
				';
				}
				
?>				

