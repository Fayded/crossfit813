 <?php global $smof_data; ?> 


    <!-- START NAVIGATION -->
    <nav class="<?php if($smof_data['rnr_menu_style'] == "top"){ echo 'page_scroll'; } ?> navigation <?php echo $smof_data['rnr_menu_type']; ?> <?php if($smof_data['rnr_menu_type']!= 'transparent'){ echo 'sticky-nav'; } ?>">
     <!-- START CONTAINER --> 
      <div class="container clearfix">      
          <div class="four columns">      
              <!-- START LOGO --> 
              <div class="logo large">
          <?php if($smof_data['rnr_logo_url'] != "") { ?>
            <a href="<?php echo home_url(); ?>/">
                         <img src="<?php echo $smof_data['rnr_logo_url']; ?>" 
                              alt="<?php bloginfo('name'); ?>" 
                              width="<?php echo $smof_data['rnr_logo_width']; ?>" 
                              height="<?php echo $smof_data['rnr_logo_height'];?>"  
                          />
                       </a>
          <?php } else { ?>
            <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
          <?php } ?>
              </div>
              <!-- END LOGO -->     
          </div><!-- END FOUR COLUMNS -->                
         
           <!-- BEGIN NAVIGATION SECTION --> 
          <div class="twelve columns">                
              <!-- START NAVIGATION MENU ITEMS -->

              <?php 
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => '',
                  'fallback_cb' => 'show_top_menu',
                  'menu_class' => 'main-menu large nav sf-menu sf-js-enabled',
                  'menu_id' => 'nav',
                  'echo' => true,
                  'walker' => new description_walker(),
                  'depth' => 0 
                )); 
              ?>
          <div id="social-nav">
            <a href='#facebook'><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /></a>
            <a href='#twitter'><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /></a>
            <a href='#search'><img src="<?php echo get_template_directory_uri(); ?>/images/search.png" /></a>
          </div>
              <!-- END NAVIGATION MENU ITEMS -->        
          </div><!-- END TWELVE COLUMNS --> 
      </div><!-- END CONTAINER -->  
    <div id="secondary-nav">
      <a href="#">MAIN - WOHO</a>
      <a href="#">WEST - TOWN 'N COUNTRY</a>
    </div>
    </nav>
    <!-- END NAVIGATION -->
