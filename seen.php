<section class="mt-3">
            <h2 class="text-2xl" >También te puede interesar:</h2> 
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-x-[17.26px] gap-y-[17.52px] place-content-center  mt-4  "> 
                <?php
                    global $post;
                    
                    //query subpages
                    $args = array( 
                    'post_type' => $the_current_post_type,  
                    'orderby' => 'comment_count',
                    'order' => 'desc',
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => -1
                    );

                    	
					$listing = new WP_query($args); 
					// create output
					if ($listing->have_posts()) : 
						while ($listing->have_posts()) : $listing->the_post();

                            $arr_image = thumbnail_image_url('homepage-thumbnail'); 
                                if ($arr_image!= '' ) :
                                    $url_image = $arr_image;
                            else :
                                    $url_image = get_template_directory_uri()."/build/img/thumbnail-default.jpg";
                            endif; 

                            $postType = get_post_type_object(get_post_type());
                            if ($postType) {  
                                $post_title =  esc_html($postType->labels->singular_name);
                                $post_link = esc_html($postType->name); 
                            } 
                            ?> 
                                <a class="card" href="<?=get_permalink()?>" >
                                    <img  src="<?=$url_image?>" alt="<?=get_the_title()?>">   
                                    <div  class=" card-body  " >
                                        <h2><?=$post_title?></h2>
                                        <p ><?=get_the_title();?> </p>
                                    </div>
                                </a> 
					<?php	endwhile;
					endif; 
					// reset the query
					wp_reset_postdata();
                ?>
            </div>
            </section>	
            <section class="mt-8" >
                <?php  comments_template(); ?>  
            </section>