<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>

</header>
<body>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="h2contc" "col-lg-12">CONTACTO</h2>
  
                <div class="box-contc1">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                </div>
        </div> 
                   <form method="POST">
                       <div class="col-lg-12">
 
                            <div class="col-md-3">
                                   <div class="form-group">
                                       <h3 class="subtitu4 formu-no"></h3>
                                           <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required >
                                               <p class="help-block text-danger"></p>
                                   </div>
                               
                                    <div class="form-group">
                                       <h3 class="subtitu4 formu-no"></h3></h3>
                                           <input type="email" class="form-control" placeholder=" Email " id="email"  name="email" required >
                                                <p class="help-block text-danger"></p>
                                   </div>
 
                                   <div class="form-group">
                                      <h3 class="subtitu4 formu-no"></h3>
                                           <input type="tel" class="form-control" placeholder="Teléfono" id="telefono"  name="telefono" required >
                                                <p class="help-block text-danger"></p>
                                   </div>
                            </div>
    
                                <div class="col-md-6">
                                    <div class="form-grouptext">
                                        <h3 class="subtitu4 formu-no"></h3>
                                              <textarea class="ba form-control area" placeholder="Mensaje*" id="mensaje"  name="mensaje" required ></textarea>
                                                   <p class="help-block text-danger"></p>
                                   </div>
                                                       <input type="submit" class="h2contc" name="enviar" value="ENVIAR">
                                </div>
    
                                    <div class="col-lg-3">
                                       <div class="negra">Sinokingenterprise</div>
                                            <br>
                                                <p>
                                                    asdasdasdasdasdas
                                                    adasdasdasdasdasdadasdasdsadasd
                                                </p>
                                                    <div><span class="negra">t   </span>998 25698 569</div>
                                                    <div><span class="negra">f   </span>998 25698 569</div>
                                                    <br>
                                                    <div><span class="negra">e   </span>info@sinokingenterprise.com</div>
                                                      <br>
                                                      <div class="nrn">
                                                             <a href="" target="">
                                                            <img src="<?php bloginfo("template_url"); ?>/images/gplus.jpg" class=" " alt="">
                                                             </a>
                                                             <a href="" target="">
                                                            <img src="<?php bloginfo("template_url"); ?>/images/logoface.jpg" class=" " alt="">
                                                             </a>
                                                             <a href="" target="">
                                                            <img src="<?php bloginfo("template_url"); ?>/images/twitter.jpg" class=" " alt="">
                                                             </a>
                                                       </div>
                                   
                                    </div>
                      </div>
                         </form>
                                       
   
  
                
    </div>
</div>
<?php get_footer(); ?> 