<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?php wp_head(); ?>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/hover/hover.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
            
            
</head>
<body id="body">
    <header>
        <div class="header">
        <section class="fon-menu col-lg-12 col-md-12 col-sm-12 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-12 sin-padding">
            <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
              <span class="sr-only">Desplegar navegación</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand content-logo" href="<?php echo home_url(""); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo img-responsive">
            </a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="esti-texto nav nav-pills">
                <li role="presentation" class="">
                    <a href="<?php echo home_url("nosotros"); ?>" role="presentation" aria-expanded="false">
                        Nosotros 
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="<?php echo home_url("servicios"); ?>" role="presentation" aria-expanded="false">
                        servicios 
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="<?php echo home_url("cotizacion"); ?>" role="presentation" aria-expanded="false">
                        Cotización 
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="<?php echo home_url("contacto"); ?>" role="presentation" aria-expanded="false">
                        Contacto 
                    </a>
                </li>
                <li role="presentation" class="r">
                    <a href="" role="presentation" aria-expanded="false">
                      <i class="alto-redes fa fa-twitter"></i>
                    </a>
                </li>
                
                <li role="presentation" class="r">
                    <a href="" role="presentation" aria-expanded="false">
                       <i class="alto-redes fa fa-google-plus"></i>
                    </a>
                </li>
                
                <li role="presentation" class="r">
                    <a href="" role="presentation" aria-expanded="false">
                       <i class="alto-redes fa fa-facebook"></i>
                    </a>
                </li>
                
            </ul>
            </div>
            </nav>
        </section>
        </div>
        <div class="clearfix"></div>
       
