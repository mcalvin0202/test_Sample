<?php
/**
 * The template for displaying flexible content sections. 
 */

// check if the flexible content field has rows of data

echo var_dump(get_row_layout()); exit;

if( have_rows('page_content') ):

     // loop through the rows of data
    while ( have_rows('page_content') ) : the_row();

         if( get_row_layout() == 'text_content' ): 

          get_template_part( 'template-parts/section', 'header' ); 

 		elseif( get_row_layout() == 'instantqoute_content' ): 

          get_template_part( 'template-parts/section', 'instantquote' ); 
		
      	elseif( get_row_layout() == 'man_logo' ): 

          get_template_part( 'template-parts/section', 'man-logo' ); 
		elseif( get_row_layout() == 'services_content' ): 

          get_template_part( 'template-parts/section', 'services' ); 
		elseif( get_row_layout() == 'video_frame' ): 

          get_template_part( 'template-parts/section', 'video-frame' ); 
		elseif( get_row_layout() == 'guarantee_content' ): 

          get_template_part( 'template-parts/section', 'guarantee' ); 
		elseif( get_row_layout() == 'contact-us-map_content' ): 

          get_template_part( 'template-parts/section', 'contact-us-map' ); 
      
      elseif( get_row_layout() == 'footer_content' ): 

          get_template_part( 'template-parts/section', 'footer' ); 
      

        endif;


    endwhile;

else :

    // no layouts found

endif;