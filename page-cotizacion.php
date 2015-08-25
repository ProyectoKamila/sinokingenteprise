<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
 <?php wp_reset_query(); ?>
</header>

<div class="container">
    <div class="row">
        <div class="alto50 col-xs-12"></div>
        <div class="clearfix"></div>
	<div id="servicios" class="cotizacion col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>
                Cotización
                 <span class="arrowt">
                    <!--<a href="#body" class="page-top btn btn-circle1 page-scroll"></a>-->
                    <a href="#body" class="page-scroll"></a>
                </span>
            </h1>
		</div>
		<div class="clearfix"></div>
		 <div class="alto50 col-xs-12"></div>
        <div class="clearfix"></div>
        
        
        <div class="container">
            <div class="row"> 
                <?php  $paises = get_field("pais"); ?>
                 <?php while(have_posts()){ the_post();?>
                 
                <form method="POST">
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Pais </h3>
                                <select class="esti-formu">
                                    <?php foreach ($paises as $pais){?>
                                    <option><?php echo $pais;?></option>
                                    <?php } ?>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Ciudad </h3>
                                <select class="esti-formu">
                                    <option>Caracas</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Provincia </h3>
                                <select class="esti-formu">
                                    <option>xxxxx</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Codigo Postal </h3>
                                <input type="text" class="form-control" placeholder=" Codigo Postal " id="codigop" name="codigop" required >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Idioma </h3>
                                <select class="esti-formu">
                                    <option>xxxxx</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Fax </h3>
                                <input type="text" class="form-control" placeholder=" Fax " id="fax" name="fax" required >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Celular </h3>
                                <input type="text" class="form-control" placeholder=" Celular " id="telefono" name="telefono" required >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h3 class="subtitu4 formu-no1">Email </h3>
                                <input type="email" class="form-control" placeholder=" Email " id="email" name="email" required >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                   
                        <div class="col-lg-2 col-lg-offset-10 text-center">
                            
                            <input type="submit" class="btn btn-danger btn-lg boton-envi" name="enviar" value="ENVIAR">
                                                  
                        </div>
                </form>
                <?php } ?><!--CIERRE DE WHILE COTIZACION -->
                
                <div class="clearfix"></div>
                <div class="alto50 col-xs-12"></div>
                <div class="clearfix"></div>
                <?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'cotizacion','posts_per_page'=>1)); ?>
                 <?php if(!empty($pagename)) {?>
                 <?php while(have_posts()){ the_post();?>
                <div class="col-xs-12">
                    <?php the_content(); ?>
                </div>
                <?php } ?>
                <?php } ?>
                <div class="clearfix"></div>
                <div class="alto50 col-xs-12"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>