<?php
/*
Template Name: Home
Template Post Type: post, page, event
*/ 
get_header();?> 
    <h1 class="text-center text-transparent z-[-1] mt-4 overflow-hidden absolute " ><?php echo get_bloginfo( 'description' ); ?></h1>

    <div class="container flex justify-center items-center relative" > 
        <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
        <div class="text-center" >
            <?php if ( has_custom_logo() ) { ?> 
                <a  href="<?php echo home_url();?>" class="inline-flex" rel="home"> 
                    <img class="w-full max-w-[120px] sm:max-w-[247.2342px] mx-auto mt-10 sm:mt-[66.38px] mb-10 sm:mb-[52.51px]" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>">
                </a> 
            <?php }else{?>
                <a  href="<?php echo home_url();?>" rel="home">
                    <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                </a>     
            <?php }?> 
            
        </div> 
         <div   class="main-social absolute right-[11.45px] ">
                  <?php  
                        wp_nav_menu(array(
                            'theme_location'  => 'social-media',
                            'container'       => 'nav',
                            'container_class' => 'social-media',
                            'container_id'    => 'social-media',  
                            'menu' => 'ul',
                            'menu_class'      => 'social-media-menu',
                            'menu_id'         => 'social-media-menu',
                        ));  
                    ?>   
            </div>
      
  </div>
  <div  class=" w-full flex justify-center md:max-w-[1200px] mx-auto  ">
      <?php dynamic_sidebar('home-banner') ?>
  </div>  
       
 
  <div class=" container text-center flex justify-center pt-7 " >  
    <div  class="w-full md:w-[429px] " >  
      <?php  dynamic_sidebar('home-assessment') ?>   
    </div>
  </div>  

  <section  class=" mt-5 sm:mt-[30px] bg-body" >
    <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-3 items-center container py-6 ">
        <div class="flex-1" > 
          <?php dynamic_sidebar('home-suscribe') ?>   
        </div>
        <div  class="flex-1 w-full  md:pr-[115px] " > 
          <div> 
            <?php dynamic_sidebar('home-form') ?>   
          </div>
        </div>
    </div>

    </section> 
    <main class="mt-10 sm:mt-[44.58px]  " >
      <div class="container">  
        <section class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-x-[15px] sm:gap-x-[30.69px] gap-y-[30px] place-content-center   "> 
          <?php echo do_shortcode('[biooil_post posttype="articulos-de-la-piel"]'); ?>  
          <?php echo do_shortcode('[biooil_post posttype="belleza-integral"]'); ?>  
          <?php echo do_shortcode('[biooil_post posttype="especialistas"]'); ?>  
        </section> 
      </div>
    </main> 

 <?php  
get_footer();
?>

