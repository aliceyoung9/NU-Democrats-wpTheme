    <footer>
    <div class="container">
        
        <div class="row widget">

           <?php if ( dynamic_sidebar('footer') ) : else : endif; ?>
            <!--
            <div class="span3">
              <h3>world</h3>
            </div> -->

            <div class="span3">
              <h3>Connect</h3>
                <div class="center">
                <img src="<?php bloginfo('template_url'); ?>/img/facebook.png" class="social">
                <img src="<?php bloginfo('template_url'); ?>/img/twitter.png" class="social">
                </div>
            </div>
        </div>