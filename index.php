<?php get_header(); ?>

<div class="container-fluid post-slider">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left second-section first-second">
                    <h4>Традиционный канал, следовательно, регулярно консолидирует социометрический конкурент, оптимизируя бюджеты.
                    Рекламная заставка развивает конструктивный социальный статус. Бизнес-план синхронизирует рейтинг.</h4>
                    <p>Более того, восприятие марки усиливает экспериментальный инструмент маркетинга. Имидж предприятия тормозит выставочный стенд. Надо сказать, что воздействие на потребителя допускает рекламный блок. Стиль менеджмента искажает целевой сегмент рынка. Цена клика консолидирует инвестиционный продукт. </p>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 second-section news-section">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ns">
                            <h1>Последние<br>Новости</h1>                            
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a href="#news-slider" class="left news-arr-left" data-slide="prev"></a>   
                            <a href="#news-slider" class="right news-arr-right" data-slide="next"></a> 
                        </div>
                    </div>
                    <div class="row">
                    <script type="text/javascript">
                      $('#news-slider').carousel('pause');
                    </script>
                        <div id="news-slider" class="carousel slide" data-ride="carousel" data-interval="265000"> 
                    
                            <div class="carousel-inner">

                            
                   
                                <div class="item active item-news">                      
                                    <div class="row">
                                    <?php
            $args = array( 'posts_per_page' => 1, 'category_name' => 'Новости' );
            $articles = get_posts( $args );

foreach( $articles as $post ){
	setup_postdata($post); // устанавливаем данные
	?>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 brd news">
                                    <div class="media">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><?php the_date('j'); ?></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php the_date('F'); ?></h4>
                                        <h4 class="media-heading"><span><?php the_date('Y'); ?></span></h4>
                                      </div>
                                        </div>
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_content('') ?></p>
                                        <a href="<?php the_permalink() ?>" class="btn-more">Подробнее</a>
                                        </div>
                                        	<?php
}
wp_reset_postdata(); // сброс
?>
    <?php
                                        $args = array( 'posts_per_page' => 1, 'category_name' => 'Новости', 'offset' => 1);
                                        $articles = get_posts( $args );

                                        foreach( $articles as $post ){
	                                       setup_postdata($post); // устанавливаем данные
	                                   ?>
                                    <div class="col-md-6 col-lg-6 col-sm-6 hidden-xs s-news news">
                                    <div class="media">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><?php the_date('j'); ?></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php the_date('F'); ?></h4>
                                        <h4 class="media-heading"><span><?php the_date('Y'); ?></span></h4>
                                      </div>
                                        </div>
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_content('') ?></p>
                                        <a href="<?php the_permalink() ?>" class="btn-more">Подробнее</a>
                                        </div>
                                        	<?php
                                                    }
                                                    wp_reset_postdata(); // сброс
                                                    ?>
                                       
                                        </div>
                        
                                    </div>
                                    
                             <div class="item item-news">                      
                                    <div class="row">
                                    <?php
                                        $args = array( 'posts_per_page' => 1, 'category_name' => 'Новости', 'offset' => 2);
                                        $articles = get_posts( $args );

                                        foreach( $articles as $post ){
	                                       setup_postdata($post); // устанавливаем данные
	                                   ?>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 brd news">
                                    <div class="media">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><?php the_date('j'); ?></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php the_date('F'); ?></h4>
                                        <h4 class="media-heading"><span><?php the_date('Y'); ?></span></h4>
                                      </div>
                                        </div>
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_content('') ?></p>
                                        <a href="<?php the_permalink() ?>" class="btn-more">Подробнее</a>
                                        </div>
                                        	<?php
                                                    }
                                                    wp_reset_postdata(); // сброс
                                                    ?>
                                        
                                    <?php
                                        $args = array( 'posts_per_page' => 1, 'category_name' => 'Новости', 'offset' => 3);
                                        $articles = get_posts( $args );

                                        foreach( $articles as $post ){
	                                       setup_postdata($post); // устанавливаем данные
	                                   ?>
                                    <div class="col-md-6 col-lg-6 col-sm-6 hidden-xs s-news news">
                                    <div class="media">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><?php the_date('j'); ?></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php the_date('F'); ?></h4>
                                        <h4 class="media-heading"><span><?php the_date('Y'); ?></span></h4>
                                      </div>
                                        </div>
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_content('') ?></p>
                                        <a href="<?php the_permalink() ?>" class="btn-more">Подробнее</a>
                                        </div>
                                        	<?php
                                                    }
                                                    wp_reset_postdata(); // сброс
                                                    ?>
                                        </div>
                        
                                    </div>
                                    
                                     <div class="item item-news">                      
                                    <div class="row">
                                    <?php
                                        $args = array( 'posts_per_page' => 1, 'category_name' => 'Новости', 'offset' => 4);
                                        $articles = get_posts( $args );

                                        foreach( $articles as $post ){
	                                       setup_postdata($post); // устанавливаем данные
	                                   ?>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 brd news">
                                    <div class="media">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><?php the_date('j'); ?></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php the_date('F'); ?></h4>
                                        <h4 class="media-heading"><span><?php the_date('Y'); ?></span></h4>
                                      </div>
                                        </div>
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_content('') ?></p>
                                        <a href="<?php the_permalink() ?>" class="btn-more">Подробнее</a>
                                        </div>
                                        	<?php
                                                    }
                                                    wp_reset_postdata(); // сброс
                                                    ?>
                                        
                                        <?php
                                        $args = array( 'posts_per_page' => 1, 'category_name' => 'Новости', 'offset' => 5);
                                        $articles = get_posts( $args );

                                        foreach( $articles as $post ){
	                                       setup_postdata($post); // устанавливаем данные
	                                   ?>
	                                  
                                    <div class="col-md-6 col-lg-6 col-sm-6 hidden-xs s-news news">
                                    <div class="media">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><?php the_date('j'); ?></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php the_date('F'); ?></h4>
                                        <h4 class="media-heading"><span><?php the_date('Y'); ?></span></h4>
                                      </div>
                                        </div>
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_content('') ?></p>
                                        <a href="<?php the_permalink() ?>" class="btn-more">Подробнее</a>
                                        </div>
                                        	<?php
                                                    }
                                                    wp_reset_postdata(); // сброс
                                                    ?>
                                        </div>
                        
                                    </div>
                               
                               
                            </div>  
                        </div>
                    </div>
                </div>
                </div>
            
            
            </div>
            
            
            
            
            <div class="container-fluid blue">
                <div class="section-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 on">
                            <div class="media t-s">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><img src="<?php echo get_template_directory_uri() ?>/assets/img/1.png"></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading">Управление<br> строительством</h4>
                                      </div>
                                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tw">
                            <div class="media t-s">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><img src="<?php echo get_template_directory_uri() ?>/assets/img/2.png"></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading">Инжиниринг <br>и разработки</h4>
                                      </div>
                                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 th">
                            <div class="media t-s">
                                      <div class="media-left" href="#">
                                          <h3 class="media-object"><img src="<?php echo get_template_directory_uri() ?>/assets/img/3.png"></h3>
                                        </div>
                                      <div class="media-body">
                                        <h4 class="media-heading">Надзор <br>и контроль</h4>
                                      </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        
           
           
           
            
            <div class="container-fluid project-section">
              <div class="row absolute_block">
              <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 np">
               <div class="row row-header">
                   <h1 class="header-project">Выполненные проекты</h1>
                   <a class="all-project">Все проекты</a>
               </div>
                <div class="row pr-rel">
                <div class="project-line"></div> 
                <div class="project-line-2"></div>   


                   
                   <?php
        $args = array(
	'posts_per_page' => 3,
	'category_name' => 'Проекты'
);
$query = new WP_Query( $args ); 
      
if( $query->have_posts() ){
	while( $query->have_posts() ){ $query->the_post();
	?>	
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 project">
                        <h2 class="title-project"><?php the_title(); ?></h2>
                        <div class="img-post-1" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="overlay-project">
                            <a href="<?php the_permalink(); ?>" class="btn-more-w">Подробности</a>
                            </div>
                        </div>
                        <p class="text-project"><?php the_content(''); ?></p>
                    </div>
                    <?php
	}
	wp_reset_postdata(); // сбрасываем переменную $post
} 
else echo 'Новостей пока нет.';
?>
                    
                </div>
                </div>
                </div>
            </div>
            

<?php get_footer(); ?>