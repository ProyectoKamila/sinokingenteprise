<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>

</header>
<body>
	<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'home','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
<div class="container">
	<?php while(have_posts()){ the_post();?>
    <div class="row">
    	<div class="alto20 col-xs-12"></div>
	    <div class="clearfix"></div>
	  
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 sin-padding">
				<i class="icono1 fa fa-road"></i>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12  sin-padding">
				<?php if(get_field('titulo-cuadro1')){?>
				<div class="col-xs-12 sin-padding">
					<h1 class="titulos-index"> <?php the_field('titulo-cuadro1');?>  </h1>
				</div>
				<?php } ?>
				<?php if(get_field('parrafo-cuadro1')){?>
				<div class="parrafo1-index col-xs-12 sin-padding">
					<p>
						 <?php echo max_charlength(the_field('parrafo-cuadro1'),120);?>
					</p>
				</div>
				<?php } ?>
			</div>
        </div>
        <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 sin-padding">
				<i class="icono1 fa fa-clock-o"></i>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12  sin-padding">
				<?php if(get_field('titulo-cuadro2')){?>
				<div class="col-xs-12 sin-padding">
					<h1 class="titulos-index"><?php the_field('titulo-cuadro2');?> </h1>
				</div>
					<?php } ?>
					<?php if(get_field('parrafo-cuadro2')){?>
				<div class="parrafo1-index col-xs-12 sin-padding">
					<p>
					 	<?php echo max_charlength(the_field('parrafo-cuadro2'),120);?>
					</p>
				</div>
				<?php } ?>
			</div>
			
        </div>
        <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
        	
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 sin-padding">
				<i class="icono1 fa fa-home"></i>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12  sin-padding">
				<?php if(get_field('titulo-cuadro3')){?>
				<div class="col-xs-12 sin-padding">
					<h1 class="titulos-index"> <?php the_field('titulo-cuadro3');?> </h1>
				</div>
				<?php } ?>
				<?php if(get_field('parrafo-cuadro3')){?>
					<div class="parrafo1-index col-xs-12 sin-padding">
						<p>
							<?php echo max_charlength(the_field('parrafo-cuadro3'),120);?>
						</p>
					</div>
				<?php } ?>
			</div>

        </div>
        <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 sin-padding">
				<i class="icono1 fa fa-users"></i>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 sin-padding">
				<?php if(get_field('titulo-cuadro4')){?>
				<div class="col-xs-12 sin-padding">
					<h1 class="titulos-index"> <?php the_field('titulo-cuadro4');?></h1>
				</div>
				<?php } ?>
				<?php if(get_field('parrafo-cuadro4')){?>
				<div class="parrafo1-index col-xs-12 sin-padding">
					<p>
						<?php echo max_charlength(the_field('parrafo-cuadro4'),120);?>
					</p>
				</div>
				<?php } ?>
			</div>

        </div>
    </div>
    <?php } ?>
</div>
<?php } ?>

<!--NOSOTROS -->

<div class="container">
    <div class="row">
        <div id="nosotros" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nosotros">
            <h1>
                NOSOTROS
                <span class="arrowt">
                    <!--<a href="#body" class="page-top btn btn-circle1 page-scroll"></a>-->
                    <a href="#body" class="page-scroll"></a>
                </span>
            </h1>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="list_carousel responsive">
	            <div class="cont">
	                <a id="next" class="next glyphicon glyphicon-menu-right caro" href="#"></a>
					<a id="prev" class="prev glyphicon glyphicon-menu-left caro" href="#"></a>
					<div id="pager2" class="pager"></div>
	            </div>
					<div class="clearfix"></div>
				<ul id="foo4">
					<?php query_posts(array("post_type" => "page", "pagename" =>"nosotros")); ?>
					<?php have_posts(); ?>
           			<?php the_post(); ?>
           			<?php if(get_the_content()){ ?>
	           			<li>
						    <h2>Misión</h2>
						    <p>
						       <?php echo max_charlength(get_the_content(),400,"");?>
						    </p>
						</li>
           			<?php } if(get_field('pq')){ ?>
	           			<li>
						    <h2>¿Porque Nosotros?</h2>
						    <p>
						       <?php echo substr(strip_tags(get_field('pq')), 0, 400); ?>
						    </p>
						</li>
           			<?php } if(get_field('vision')){ ?>
	           			<li>
						    <h2>Visión</h2>
						    <p>
						       <?php echo substr(strip_tags(get_field('vision')), 0, 400); ?>
						    </p>
						</li>
           			<?php } ?>
					<?php wp_reset_query(); ?>
					<?php  query_posts(array('post_type'=>'testimonios','posts_per_page'=>12)); ?>
					<?php while(have_posts()){ the_post();?>
					<li>
					    <h2><?php the_title(); ?></h2>
					    <p>
					       <?php echo max_charlength(get_the_content(),300,"");?>
					    </p>
					    <span class="nombre-textimonios"><?php the_field('nombre'); ?></span>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="alto60 col-xs-12"></div>
    </div>
</div>

<!--SERVICIOS -->
<?php  query_posts(array('post_type'=>'servicios','order'=>'DESC','posts_per_page'=>12)); ?>
     
<div class="container">
	<div class="row">
		<div id="servicios" class="servicios col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>
                SERVICIOS
                <span class="arrowt">
                    <!--<a href="#body" class="page-top btn btn-circle1 page-scroll"></a>-->
                    <a href="#nosotros" class="page-scroll"></a>
                </span>
            </h1>
		</div>
		<div class="clearfix"></div>
		<div class="alto40 col-xs-12"></div>
		<div class="clearfix"></div>
		<?php while(have_posts()){ the_post();?>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 sin-padding">
			<?php if(get_field('icono')){?>
				<div class="col-xs-12 text-center">
					<a href="<?php the_permalink(); ?> "><img src="<?php the_field('icono');?>" class="hvr-pulse-shrink imag-responsive"></img></a>
				</div>
			<?php } ?>
			<div class="col-xs-12 text-center">
				<h2 class="titulos-index"><?php the_title(); ?></h2>
			</div>
			<div class="parrafo1-index col-xs-12">
				<p><?php echo max_charlength(get_the_content(),135,"");?></p><a class="efecto" href="<?php the_permalink(); ?>">Leer Mas</a>
			</div>
		</div>
		<?php } ?>
		<div class="clearfix"></div>
		<div class="alto50 col-xs-12"></div>
		<div class="clearfix"></div>
		<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'cotizacion','posts_per_page'=>1)); ?>
 		<?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
		<div class="col-xs-12">
			<?php if(get_field('titulo')){?>
			<div class="col-xs-12">
				<h2 class="titu-coti">
					<?php the_field('titulo');?>     
				</h2>
			</div>
			<?php } ?>
			<?php if(get_field('parrafo-titulo')){?>
			<div class="col-lg-10">
				<p>
					<?php the_field('parrafo-titulo');?> 
				</p>
			</div>
			<?php } ?>
			<div class="col-lg-2">
				<a href="<?php echo home_url("cotizacion"); ?>" class="coti btn btn-danger btn-lg">Cotizar</a>
			</div>
			<div class="alto50 col-xs-12"></div>
		</div>
		<?php } ?>
		<?php } ?>
	</div>
</div>





<div class="container-fluid">
    	<div class="row">
	    	<div class="container container-contact">
	    		<div class="row">
    				<?php query_posts(array("post_type" => "page", "pagename" =>"contenido-extra-del-home")); ?>
					<?php while(have_posts()){ ?>
			            <?php the_post(); ?>
					
					<div class="map col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="contact">
							<h1>
			                CONTACTO
			                <span class="arrowt">
			                    <!--<a href="#body" class="page-top btn btn-circle1 page-scroll"></a>-->
			                    <a href="#servicios" class="page-scroll"></a>
			                </span>
			            </h1>
						</div>
					</div>
					<?php } ?>
	    		</div>
	    	</div>
            <?php googlemap('mapa'); ?>
    	</div>
    </div>


<?php get_footer(); ?>