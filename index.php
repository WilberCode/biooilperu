<?php
get_header(); ?>
  <main class="w-full mt-16 sm:mt-20 mb-20 max-w-[958.11px] mx-auto px-4 lg:px-0 " > 
     <!--  <h1  class="lg:text-[49.31px] text-center leading-[1] text-primary-500" >La Alimentación: <br>
        Tu ritual de belleza</h1> -->
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
 

 
<?php

get_footer();
