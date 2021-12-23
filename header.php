<?php get_template_part( 'templates/partials/document-open' ); ?> 
<!-- Site header markup goes here --> 
 
 
 

 <header class="header"> 
    <div class="header-wrap container m-auto flex  justify-between items-center  ">   
        <a class="relative z-50" href="<?=home_url()?>" >
            <img class=" w-[25px] sm:w-[38.86px]  h-[25px] sm:h-[38.86px]" src="<?php echo get_template_directory_uri().'/build/svg/home.svg'; ?> " alt="Home" >
        </a>   
        <div class=" flex flex-1 justify-start md:justify-start h-full z-50 md:ml-[17px] " > 
            <div >
            <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'buy',
                    'container'       => 'nav',
                    'container_class' => 'buy-wrap',   
                    'container_id'    => 'buy-wrap',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?>
            </div>
        </div>
        <div class="nav-toggle-wrap flex md:hidden items-center   ">
            <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
                <span ></span> 
                <span ></span> 
                <span ></span> 
                <span ></span> 
                <span ></span> 
                <span ></span>  
            </button>
        </div>  
         <div class=" flex items-center  h-full " > 
             <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'main',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',   
                    'container_id'    => 'header-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?>
                
                <div class="mobile-nav-wrap" id="mobile-nav-wrap"  > 
                    <?php  
                    wp_nav_menu(array(
                        'theme_location'  => 'mobile',
                        'container'       => 'nav',
                        'container_class' => 'mobile-nav',
                        'container_id'    => 'mobile-nav',  
                        'menu' => 'ul',
                        'menu_class'      => 'mobile-menu',
                        'menu_id'         => 'mobile-menu' ,
                    ));  
                ?> 
                </div>
               
            </div>  
     </div>  
 </header>  
 
 
