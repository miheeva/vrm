<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <title><?php bloginfo('name') ?><?php wp_title('|') ?></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</head>   
    <body>
        
    <div class="wrapper" style="height: 67.5%;">
        <div class="content" style="height: 100%;">
            <div class="container-fluid" style="height:100%;">
        <div class="row" style="height:100%;">
                <div id="main-slider" class="carousel slide" data-ride="carousel" style="height: 100%;">
                       <ol class="carousel-indicators">
                            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider" data-slide-to="1"></li>
                            <li data-target="#main-slider" data-slide-to="2"></li>
                       </ol>  
                    
                <div class="carousel-inner">
                   
                    <div class="slide slide-1 item active" style="background-color:url(<?php echo $mytheme['slide-img-1']; ?>);">
                       <div class="overlay">
                        <div class="carousel-caption">
                           <div class="container text-left">
                           
                            <h1><?php global $mytheme; ?><?php echo $mytheme['slide-caption-h-1']; ?></h1>
                            <h3><?php echo $mytheme['slide-caption-hh-1']; ?></h3>
                            <p><?php echo $mytheme['slide-caption-p-1']; ?></p>
                               
                            </div>
                        </div>
                        </div>
                    </div>
                    
                     <div class="slide slide-2 item" style="background-color:url(<?php echo $mytheme['slide-img-2']; ?>);">
                       <div class="overlay">
                        <div class="carousel-caption">
                            <div class="container-fluid text-left">
                           
                            <h1><?php echo $mytheme['slide-caption-h-2']; ?></h1>
                        <h3><?php echo $mytheme['slide-caption-hh-2']; ?></h3>
                        <p><?php echo $mytheme['slide-caption-p-2']; ?></p>
                               
                            </div>
                         </div>
                        </div>
                    </div>
                     <div class="slide slide-3 item" style="background-color:url(<?php echo $mytheme['slide-img-3']; ?>);">
                       <div class="overlay">
                        <div class="carousel-caption">
                            <div class="container-fluid text-left">
                           
                         <h1><?php echo $mytheme['slide-caption-h-3']; ?></h1>
                        <h3><?php echo $mytheme['slide-caption-hh-3']; ?></h3>
                        <p><?php echo $mytheme['slide-caption-p-3']; ?></p>
                              
                            </div>
                        </div>
                         </div>
                    </div>
                </div>            
                <div class="all-arrows hidden-sm hidden-xs">
                <a href="#main-slider" class="left slider-arrows slider-arrow-left" data-slide="next">
                </a>  
                   
                
                <a class="right slider-arrows slider-arrow-right" href="#main-slider" data-slide="prev">
                  </a> 
            </div>        
              
            </div>
        </div>
    </div>
           <nav class="navbar navbar-default container-header" role="navigation">
            <div class="container-fluid">
                <div class="row">                
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 index-nav text-center">
                      <button type="button" class="navbar-toggle btn-logo" data-toggle="collapse" data-target="#in-menu">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
 
                       <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-logo">
                        <a class="index-logo" href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/css/images/logo.png" alt="VIC"></a>
                        </div>
                        </div>
                           <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 index-menu">
                        <div class="collapse navbar-collapse" id="in-menu">
                        <?php wp_nav_menu([
      'theme_location' => 'top_menu',
      'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav top-menu text-left">%3$s</ul>',
    ]); ?>                          
                        
                           </div>
                               </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-offset-7 col-md-offset-7 col-sm-offset-7 col-lg-3 col-md-3 col-sm-3 col-xs-12 text-right right-header">
                       <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="panel-group pull-right lang-index btn" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title lang-select">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                Русский <img class="arrow-lang" src="assets/img/arrow.svg">
                                  </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false">
                          <div class="panel-body">
                             <ul class="slidedown text-left">
                                <li><a href="#">English</a></li>
                                <li><a href="#">&#1178;&#1072;&#1079;&#1072;&#1179;</a></li>            
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h2 class="phone-header"><?php echo $mytheme['phone']; ?></h2>
                   <a class="email-header" href="mailto:<?php echo $mytheme['email']; ?>"><?php echo $mytheme['email']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
        </div>
        </div>