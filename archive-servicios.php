<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
 <?php wp_reset_query(); ?>
</header>


<?php  query_posts(array('post_type'=>'servicios','orderby'=>'title','order'=> 'ASC','posts_per_page'=>12)); ?>
     
<div class="container">
	<div class="row">
	    <div class="alto50 col-xs-12"></div>
	    <div class="clearfix"></div>
		<div id="servicios" class="servicios1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>
                SERVICIOS
                 <span class="arrowt">
                    <!--<a href="#body" class="page-top btn btn-circle1 page-scroll"></a>-->
                    <a href="#body" class="page-scroll"></a>
                </span>
            </h1>
		</div>
		<div class="clearfix"></div>
		<div class="alto40 col-xs-12"></div>
		<div class="clearfix"></div>
		<?php while(have_posts()){ the_post();?>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
		   <div class="ca col-xs-12">
		       <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			    <img src="<?php echo $feat_image;?>" class="images-servicios img-responsive" alt="">
		   </div>
		   <div class="clearfix"></div>
			<?php if(get_field('icono')){?>
				<div class="ca1 col-xs-12 text-center">
					<a href="<?php the_permalink(); ?> "><img src="<?php the_field('icono');?>" class="hvr-pulse-shrink imag-responsive"></img></a>
				</div>
			<?php } ?>
			<div class="col-xs-12 text-center">
				<h2 class="titulos-index"><?php the_title(); ?></h2>
			</div>
			<div class="parrafo1-index col-xs-12">
				<p><?php echo max_charlength(get_the_content(),135,"");?></p><a class="efecto" href="<?php the_permalink(); ?>">Leer Mas</a>
			</div>
			<div class="clearfix"></div>
			<div class="alto20 col-xs-12"></div>
		</div>
		<?php } ?>
		 <?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'servicios','posts_per_page'=>1)); ?>
         <?php if(!empty($pagename)) {?>
         <?php while(have_posts()){ the_post();?>
        <div class="col-lg-6">
             <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
           <div class="col-xs-12">
			    <img src="<?php echo $feat_image;?>" class="img-responsive  " alt="">
           </div>
           <div class="alto10 col-xs-12"></div>
            <div class="parrafo1-index col-xs-12">
                <p>
                     <?php echo max_charlength(get_the_content(),400,"");?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
		<div class="clearfix"></div>
		<div class="alto50 col-xs-12"></div>
		<div class="clearfix"></div>
		 <?php cotizar('cotizar-servicios'); ?>
	</div>
</div>




         
         
         
         
         
  


<?php get_footer(); ?>