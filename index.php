<?php get_header(); ?>
    <div class="container content-wrap">

      <div class="row">
        <div class="col-sm-8">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="http://nuweb12.neu.edu/collegedemocrats/wp-content/uploads/2013/09/DSC_0530.jpg" alt="">
                <div class="carousel-caption hidden-phone">
                  <h1>Dukakis: October 10<sup>th</sup></h1>
                  <p class="lead">Former Massachusetts Governor Michael Dukakis will be speaking to our chapter.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="http://nuweb12.neu.edu/collegedemocrats/wp-content/uploads/2013/02/NEU_20130410_83.jpg" alt="">
              </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="icon-prev" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="icon-next" aria-hidden="true"></span>
            </a>
          </div><!-- /.carousel -->

        </div>

        <div class="col-sm-4">
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="http://facebook.us2.list-manage1.com/subscribe/post?u=f59eb78109570db88d95585ad&amp;id=184ecc677b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <h2>Subscribe to our Mailing List</h2>
          <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
          </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="mc-field-group">
            <label for="mce-FNAME">First Name</label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-LNAME">Last Name</label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
          <div class="mc-field-group input-group">
            <input type="checkbox" value="2" name="group[14549][2]" id="mce-group[14549]-14549-0"><label for="mce-group[14549]-14549-0">Forward me job listings</label>
          </div>
            <div id="mce-responses">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
          </form>
          </div>

          <!--End mc_embed_signup-->

        </div>

      </div>

      <div class="row tri-schpeal">
        <?php dynamic_sidebar('frontpg'); ?>
      </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
