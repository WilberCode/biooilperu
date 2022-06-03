<?php
/*
Template Name: Tiendas
Template Post Type: post, page, event
*/ 
get_header();?>
 

<div class="container ">
    <div class="max-w-[1076.5328px] mx-auto">
    
            <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
            <div class="flex justify-end pt-8 pr-8" >
            <?php if ( has_custom_logo() ) { ?> 
                <a  href="<?php echo home_url();?>" class="inline-flex" rel="home"> 
                    <img class="flex w-32 md:w-[234.6062px]" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>">
                </a> 
            <?php }else{?>
                <a  href="<?php echo home_url();?>" rel="home">
                    <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                </a>     
            <?php }?>
        </div> 
      </div> 

      <main  class="max-w-[1200px] mx-auto  maxstore:px-2 " >
      <?php if(get_field('biooil_tiendas_region_titulo')){?>
        <h2 class=" text-base md:text-[21px] font-bold bg-primary-500  text-white bg-opacity-[55%] tracking-wider inline-flex  pl-4 sm:pl-[68px] py-1 pr-8 maxsm:mt-[24px]  " ><?php the_field('biooil_tiendas_region_titulo');?></h2> <br>
      <?php }?>
      <?php if(get_field('biooil_tiendas_region')){?>
          <section  class="mt-[42px] max-w-[1076.5328px] mx-auto" >
            <div class="grid grid-cols-3 md:grid-cols-4 gap-x-3 sm:gap-x-5 gap-y-3 sm:gap-y-4 mt-4  ">  
              <?php 
                if( have_rows('biooil_tiendas_region')):  
                        while ( have_rows('biooil_tiendas_region') ) : the_row();   	 
                            ?>  
                            <?php 
                            if( get_sub_field('biooil_tiendas_region_activar') ) {    ?> 
                                 <a href="<?php the_sub_field('biooil_tiendas_region_link');?>" target="_blank" onclick="_gaq.push(['_trackEvent', '<?php the_sub_field('biooil_tiendas_region_nombre');?>', 'Enlace Saliente', '<?php the_sub_field('biooil_tiendas_region_nombre');?>']);"  >
                                  <img src="<?php the_sub_field('biooil_tiendas_region_logo');?>" alt="<?php the_sub_field('biooil_tiendas_region_nombre');?>"> 
                                </a> 
                            <?php }else{ ?>
                              <article>
                              <img src="<?php the_sub_field('biooil_tiendas_region_logo');?>" alt="<?php the_sub_field('biooil_tiendas_region_nombre');?>"> 
                              </article>  
                          <?php } ?> 
                    <?php   
                        endwhile; 
                else : 
                        echo '<span >Aún no estan disponibles las tiendas</span>'; 
                endif;

                ?>  
            </div>
          </section>
          <?php }?>

          <?php if(get_field('biooil_online_titulo')){?>
            <h2 class=" text-base md:text-[21px] font-bold bg-primary-500 text-white bg-opacity-[55%] tracking-wider inline-flex pl-4 sm:pl-[68px] py-1 pr-8 mt-[40px]  " ><?php the_field('biooil_online_titulo');?></h2>
          <?php }?>

          <?php if(get_field('biooil_online')){?>
            <section  class="mt-[20px] max-w-[1076.5328px] mx-auto pb-10 sm:pb-13" > 
              <div class="grid grid-cols-3 md:grid-cols-4 gap-x-3 sm:gap-x-5 gap-y-3 sm:gap-y-4 mt-4  ">
                <?php 
                  if( have_rows('biooil_online')):  
                          while ( have_rows('biooil_online') ) : the_row();   	 
                              ?>  
                              <?php 
                              if( get_sub_field('biooil_online_activar') ) {    ?> 
                                  <a href="<?php the_sub_field('biooil_online_link');?>" target="_blank" onclick="_gaq.push(['_trackEvent', '<?php the_sub_field('biooil_online_nombre');?>', 'Enlace Saliente', '<?php the_sub_field('biooil_online_nombre');?>']);"  >
                                    <img src="<?php the_sub_field('biooil_online_logo');?>" alt="<?php the_sub_field('biooil_online_nombre');?>"> 
                                  </a> 
                              <?php }else{ ?>
                                <article>
                                <img src="<?php the_sub_field('biooil_online_logo');?>" alt="<?php the_sub_field('biooil_online_nombre');?>"> 
                                </article>  
                            <?php } ?> 
                      <?php   
                          endwhile; 
                  else : 
                          echo '<span >Aún no estan disponibles las tiendas</span>'; 
                  endif;

                  ?>  
              </div>
            </section>
          <?php }?>

          <?php if(get_field('biooil_tiendas_titulo')){?>
            <h2 class=" text-base md:text-[21px] font-bold bg-primary-500 text-white bg-opacity-[55%] tracking-wider inline-flex pl-4 sm:pl-[68px] py-1 pr-8 mt-[40px]  " ><?php the_field('biooil_tiendas_titulo');?></h2>
          <?php }?>

          <?php if(get_field('biooil_tiendas')){?>
            <section  class="mt-[20px] max-w-[1076.5328px] mx-auto pb-10 sm:pb-13" > 
              <div class="grid grid-cols-3 md:grid-cols-4 gap-x-3 sm:gap-x-5 gap-y-3 sm:gap-y-4 mt-4  ">
              <?php 
                if( have_rows('biooil_tiendas')):  
                    while ( have_rows('biooil_tiendas') ) : the_row();   
                        ?> 
                        
                      <?php 
                      if( get_sub_field('biooil_tiendas_activar') ) {    ?> 
                        <a href="<?php the_sub_field('biooil_tiendas_link');?>" target="_blank" onclick="_gaq.push(['_trackEvent', '<?php the_sub_field('biooil_tiendas_nombre');?>', 'Enlace Saliente', '<?php the_sub_field('biooil_tiendas_nombre');?>']);"  >
                          <img src="<?php the_sub_field('biooil_tiendas_logo');?>" alt="<?php the_sub_field('biooil_tiendas_nombre');?>"> 
                        </a> 
                      <?php }else{ ?>
                        <article>
                          <img src="<?php the_sub_field('biooil_tiendas_logo');?>" alt="<?php the_sub_field('biooil_tiendas_nombre');?>"> 
                        </article>  
                    <?php } ?> 

                        
                    <?php   
                        endwhile; 
                else : 
                        echo '<span >Aún no estan disponibles las tiendas</span>'; 
                endif; 
                ?> 
              </div>
            </section> 
          <?php }?>
          <section  class="  max-w-[1076.5328px] mx-auto" >
            <div class="relative" > 
              <img src="<?php the_field('biooil_banner');?>" alt="Bio Oil Aciete  y Crema ">
              <a class="bio-link bio-link--60 " href="https://articulo.mercadolibre.com.pe/MPE-441140635-bio-oil-aceite-60ml-_JM#position=4&search_layout=stack&type=item&tracking_id=bd361ab2-39be-4140-8389-b0d9c901e72c" > </a>
              <a class="bio-link bio-link--100" href="https://articulo.mercadolibre.com.pe/MPE-439890187-bio-oil-dry-skin-gel-100-ml-_JM?quantity=1" > </a> 
             </div>
          </section> 
     
      </main>


</div>


<?php  
get_footer();
?>
