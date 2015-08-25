    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="container-fluid nosotros">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <p>
                            
                            
               <div class="pk"> &copy;2015 Sinokingenterprise</div> 
                <a href="http://proyectokamila.com/" class="pk" target="_blank">Desarrollado por Proyecto Kamila</a>
                <span class="arrowt">
                    <!--<a href="#body" class="page-top btn btn-circle1 page-scroll"></a>-->
                    <a href="#body" class="page-scroll"></a>
                </p>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/grayscale.js"></script>
<!-----------------------------------anythingslider--------------------------->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url');?>/slider/js/jquery.anythingslider.js"></script>
 <script>
    $(function () {
        $('#slider1').anythingSlider({
expand: true,
buildStartStop: false,
buildArrows: true,
autoPlay: true ,
hashTags: false

        });


    });
    </script>
 <script>
$(document).ready(function() {
    $("span.arrow.back").addClass("glyphicon glyphicon-menu-left fle ");
    $(" span.arrow.forward").addClass("glyphicon glyphicon-menu-right fle ");

});

 </script>
 <!---------------------------------carouFredSel----------------------------->
		<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url');?>/scripts/carousel/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" language="javascript">
			$(function() {


				//	Responsive layout, resizing the items
				$('#foo4').carouFredSel({
					auto: false,
					prev: '#prev',
					next: '#next',
					responsive: true,
					width: '100%',
					scroll: 2,
					items: {
						width: 400,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 1,
							max: 3
						}
					}
				});


			});
		</script>
		
		
		<?php
if (isset($_POST['email'])) {
if(!empty($_POST['nombre']) AND !empty($_POST['email'])){

$to ="kevinoca1993@gmail.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n";
$headers .= "From:".$_POST['email']."\r\n";           
$tema="Solicitud de Contacto kevinoca1993@gmail.com";
$contenido = '<div style="font-color: #000;">';
                          $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                          //$contenido .= '<p>vengo de' . bloginfo('template_url') . '</p>';
                          $contenido .= '<hr />';
                          $contenido .= '<p><strong>Nombre: </strong>' . $_POST['nombre'] . '</p>';
                          $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                          $contenido .= '<p><strong>Telefono: </strong>' . $_POST['telefono'] . '</p>';
                          $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                          $contenido .= '<hr />';
                          $contenido .= '</div>';
@mail($to,$tema,$contenido,$headers);
   //echo "Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.";
echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.");</script>';
} else {
  //echo "No se puede enviar el formulario, verifica los campos";
  echo $mensaje = '<script type="text/javascript">alert("No se puede enviar el formulario, verifica los campos.");</script>';
}
}
?> 
 <!---------------------------------name----------------------------->
</body>
</html>