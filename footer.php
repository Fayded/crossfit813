<?php global $smof_data; ?>

      
     
   <?php if($smof_data['rnr_home_type']=="Video") { ?>
   
          <section class="background-video"></section> 
          <script>
			  jQuery(document).ready(function() {
				    jQuery(".player").mb_YTPlayer();
			  });	
		  </script>
  
   <?php } ?>
   
  

	<?php if($smof_data['rnr_custom_js'] != '') { echo $smof_data['rnr_custom_js']; } ?>
        </div>
 	<?php wp_footer(); ?>	      
    </body>
</html>        