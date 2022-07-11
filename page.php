<?php 
get_header();

global $wp;
$current_slug = add_query_arg( array(), $wp->request ); 
 /* 
$slug_name = $current_slug; */
?> 
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<main class="main  flex-1  ">
			<div class="container">
				<div class="mb-8"> 
					<div class="mt-11 mb-6">
						<h1  class="  sm:text-[40px] text-primary-500 leading-8"><?php the_title(); ?></h1>
						<div class=" text-[18px] sm:text-[20px]  ">	
							<?php the_content(); ?>
						</div>
					</div>
					<section  id="ajax-posts" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-x-[15px] sm:gap-x-[30.69px] gap-y-[30px] place-content-center    "> 
					<?php  
						//query subpages
						$args = array(
						'post_type' =>$current_slug ,
						'orderby' => 'date',
						'order' => 'desc',
						'posts_per_page' => -1,
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

								
								?> 
									<a class="card" href="<?=get_permalink()?>" >
										<img  src="<?=$url_image?>" alt="<?=get_the_title()?>">   
										<div  class=" card-body  " >
											<h2><?=get_the_title();?></h2> 
										</div>
										<div  class=" card-footer  ">
											<?php 
											if($current_slug === 'live-especialistas'):?>
												<button class="!px-10">VER VIDEO</button>
											<?php else:?>
												<button>QUIERO LEER MÁS</button> 
											<?php endif;  ?> 
										</div>
									</a> 
						<?php endwhile;
						endif; 
						// reset the query
						wp_reset_postdata();
					?>
					</section>
				</div> 
				
				
			</div>
		</main>		
		<?php endwhile; endif; ?>


	<?php
	get_footer();?> 
