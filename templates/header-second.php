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
    <header class="header">
        <nav class="navbar navbar-default nav-rel" role="navigation">
           <div class="logo-second">
               <a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/css/images/logo.png" alt=""></a>
           </div>
	            <div class="container-fluid blue second-container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle btn-head-sec" data-toggle="collapse" data-target="#menu-header">
	                        <span class="sr-only"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>                        
	                    </button>                   
	                
	                <div class="collapse navbar-collapse second-header" id="menu-header">
						<?php wp_nav_menu([
							'theme_location' => 'top_menu_second',
							'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav second-head-menu">%3$s</ul>',
						]); ?>                      
					</div>
					<div class="panel-group pull-right lang-second btn" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title lang-select">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Русский <img class="arrow-lang" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow.svg"></a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" aria-expanded="false">
								<div class="panel-body">
									<ul class="slidedown text-left">
										<li><a href="#">English</a></li>
										<li><a href="#">Kazak</a></li>            
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
                
                <div class="img-header">
                    <div class="overlay"></div>
       					<div class="header-caption">
       						<h1>Второстепенная страница</h1>
       						<h3>Подзаголовок второстепенной страницы</h3>
       					</div>
       					<div class="header-caption-c">
       						<h2><?php global $mytheme; ?><?php echo $mytheme['phone']; ?></h2>
       						<a href="mailto:<?php echo $mytheme['email']; ?>"><?php echo $mytheme['email']; ?></a>
       					</div>
                </div>
            </div>
        </nav>
    </header>
   