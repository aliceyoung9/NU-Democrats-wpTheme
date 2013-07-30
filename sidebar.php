    <footer>
    <div class="container">
        
        <div class="row widget">
            <div class="span3">
              <h3>Title</h3>
              <ul>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
              </ul>
            </div>
            
            <div class="span3">
              <h3>world</h3>
            </div>
            <div class="span3">
              <h3>Links</h3>
              <ul>
                <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
              </ul>


            </div>


            <div class="span3">
              <h3>Connect</h3>
                <div class="center">
                <img src="<?php bloginfo('template_url'); ?>/img/facebook.png" class="social">
                <img src="<?php bloginfo('template_url'); ?>/img/twitter.png" class="social">
                </div>
            </div>
        </div>