<?php 
 get_header();
?>  

<div  class=" flex-1  md:flex w-full max-w-[1309px] justify-between md:space-x-7 mx-auto maxxl:px-4   mt-16 sm:mt-20 " >
  <main class="w-full   mb-10 max-w-[958.11px] mx-auto    " > 
        <h1  class="lg:text-[49.31px] text-center leading-[1] text-primary-500 pb-4 sm:px-4" > <?php the_title();?>  </h1>
          <div class="blog-post" > 
          <?php
            if ( have_posts() ) :

                // Start the Loop.
                while ( have_posts() ) :
                    the_post(); 
                    $the_content = apply_filters('the_content', get_the_content());
                    if ( !empty($the_content) ) {
                      echo $the_content;
                    }else{
                      echo "No hay contenido 😔 ";
                    }
                    ?>
                  
                <?php
                endwhile;   
            else : 
                echo "sin Contenido";
            endif; 
            ?>  
          </div>
      
          
    </main> 
    <aside class="mx-auto w-full max-w-[320px] blog-sidebar mt-10 sm:mt-17 "> 
        <div class="mb-8"> 
            <h2  class="text-[24px]" >Los más recientes</h2> 
            <div class="recent card-thumbnail " >
                <?php 
                    $args = array( 
                    'post_type' =>get_post_type( get_the_ID()),  
                    'orderby' => 'comment_count',
                    'order' => 'desc',
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => -1
                    );


                    $listing = new WP_query($args); 
                    // create output
                    if ($listing->have_posts()) : 
                      while ($listing->have_posts()) : $listing->the_post();
          
                                      $arr_image = thumbnail_image_url('thumbnail'); 
                                          if ($arr_image!= '' ) :
                                              $url_image = $arr_image;
                                      else :
                                              $url_image = get_template_directory_uri()."/build/img/thumbnail-default.jpg";
                                      endif;  
                                    
                                      ?> 
                                          
                                          <a   href="<?=get_permalink()?>">
                                                <figure ><img src="<?=$url_image?>" alt="<?=get_the_title()?>"/></figure>
                                                <section>
                                                    <!-- <?php // if ($post_title):?>
                                                    <p><? //=$post_title?></p>
                                                    <?php // endif; ?>  -->
                                                    <h3>
                                                        <?=get_the_title()?>
                                                    </h3>
                                                </section>
                                        </a> 
                    <?php	endwhile;
                    else: ?>
                        <p  class="mt-2" >Por ahora no tenemos más publicaciones.</p>
                    <?php  endif; 
                    // reset the query
                    wp_reset_postdata();
                ?>
      
                </div>
            </div>    
        </aside> 
</div>

 
<!-- <code>
  <pre>
  <?php //print_r($postType ); ?>
  </pre>
</code> -->
<?php
  
get_footer();
