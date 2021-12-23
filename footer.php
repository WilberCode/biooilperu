
<footer class=" bg-gray-200 <?php if(!is_404()){echo 'mt-20';} ?> "> 
	 <div  class="max-w-[1094.65px] maxl:px-4 mx-auto flex justify-between items-center " >
		<div   class="footer-social  right-[11.45px] ">
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
		
		<div class=" text-right py-5 text-heading font-medium tracking-wide ">
		<?php dynamic_sidebar('copyright') ?> 
		</div>
	 </div>
</footer>

<?php wp_footer();  ?>   
<?php get_template_part( 'templates/partials/document-close' ); ?> 