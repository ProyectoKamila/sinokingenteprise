<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("nosotros"); ?>

</header>
<body>
<?php query_posts(array("post_type" => "page", "pagename" =>"nosotros")); ?>
<?php have_posts(); ?>
            <?php the_post(); ?>
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
            <h2 class="colortitle font-w-700 font-size-28">Misión</h2>
            <div class="clearfix"></div>
            <li>
			    <h2><?php the_title(); ?></h2>
			    <p>
			       <?php the_content(); ?>
			    </p>
			</li>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h2 class="colortitle font-w-700 font-size-28">¿Porque Nosotros?</h2>
            <div class="clearfix"></div>
            <?php the_field('pq'); ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <?php 
                $images = get_field('gallery');
                //debug($images);
                if( $images ){
            ?>
                <?php foreach( $images as $image ){ ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!--<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />-->
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="colortitle font-w-700 font-size-28">Visión</h2>
            <div class="clearfix"></div>
            <?php the_field('vision'); ?>
        </div>
        <div class="clearfix"></div>
        <?php cotizar('cotizar-nosotros'); ?>
        <!--col-lg-12 col-md-12 col-sm-12 col-xs-12-->
    </div>
</div>
            
            
<?php get_footer(); ?>