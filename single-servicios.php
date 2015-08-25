<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
 <?php wp_reset_query(); ?>
</header>

<div class="container">
    <div class="row">
        <div class="alto50 col-xs-12"></div>
        <div class="clearfix"></div>
        <div id="servicios" class="servicios1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
       <?php the_post();  ?>
       
         <?php if(get_field('icono')){?>
        <div class="col-lg-2">
            <img src="<?php the_field('icono');?> " class="images-servicios  img-responsive" alt="">
        </div>
         <?php } ?>
        <div class="col-lg-10">
            <div class="col-xs-12">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class=" parrafo1-index  col-xs-12">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
    <?php 
                $images = get_field('galeria');
                //debug($images);
                if( $images ){
                    $i = 1;
            ?>
                <?php foreach( $images as $image ){ ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center gallery-img <?= $i ?>">
                        <!--<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />-->
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php 
                $i++;
                if($i == 5){ ?>
                <div class="clearfix"></div>
                <?php $i = 1; } ?>
                <?php 
                } 
                ?>
            <?php } ?>
            </div>
    </div>
 <div class="clearfix"></div>
         <?php cotizar('cotizar-servicios','body'); ?>

<?php get_footer(); ?>