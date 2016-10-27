    <footer>      
          <div class="container footer-container">
            <div class="row p-footer">
            
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-widget-one">
                  <img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-footer.png" alt="">
              </div>
              
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-widget-two">
                <h2 class="footer-company">Инжиниринговая компания</h2>
              </div>
              
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-widget-three">
                  <p class="footer-adress"><?php global $mytheme; ?><?php echo $mytheme['adress']; ?></p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-widget-four">
                  <h2 class="footer-phone"><?php echo $mytheme['phone']; ?></h2>
              
                </div>
                <div class="about"></div>
          </div> 

                   
          </div>
         
          </footer>
          <?php wp_footer() ?>
<?php echo $mytheme['metrika']; ?>
</body>
</html>