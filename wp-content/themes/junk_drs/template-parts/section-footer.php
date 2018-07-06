
<!--sample comment-->
<section>		
    <div class="container text-center">
           
           <a onclick="window.open('<?php echo get_sub_field('fb_link');?>'"><img id="facebook" 
           src="<?php echo get_sub_field('facebook_img');?>" alt="Image"></a>
              
           <a onclick="window.open('<?php echo get_sub_field('message_link');?>');"><img id="message" src="<?php echo get_sub_field('message_img');?>" alt="Image" ></a>
           
           <a onclick="window.open('<?php echo get_sub_field('gmail_link');?>');"><img id="gmail" src="<?php echo get_sub_field('gmail_imgage');?>" ></a>
           
           <a onclick="window.open('<?php echo get_sub_field('signal_link');?>');"><img id="signal" src="<?php echo get_sub_field('signal_img');?>"></a>
           
           <a onclick="window.open('<?php echo get_sub_field('twitter_link');?>');"><img id="twitter" src="<?php echo get_sub_field('twitter_img');?>"></a>
           
         
    </div>
    
</section> 
<section>
  <div class="footer">
    <div class="container text-center">
        <h2><?php echo get_sub_field('copyright_text');?>

          <a href="<?php echo get_sub_field('junk_link');?>">Junk Removal Authority</a>. 
          <a href="<?php echo get_sub_field('sitemap_link');?>">Sitemap</a>. 
          <a href="<?php echo get_sub_field('referal_link');?>">Referal Programs</a>. 
          <a href="<?php echo get_sub_field('privacy');?>">Privacy Policy</a>.
          <a href="<?php echo get_sub_field('blog_link');?>">Blog</a>.
          <a href="<?php echo get_sub_field('contact_link');?>">Contact</a>
      </h2>
          <h3><?php echo get_sub_field('footer_bottom_text');?></h3>
    </div>
  </div>
</section>