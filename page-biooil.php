<?php
/*
Template Name: Bio-Oil
Template Post Type: post, page, event
*/ 
get_header();?> 
     <main  class="container text-paragraph" >
         <section  class=" mt-8  " > 
            <img class="mt-[35px]" src="<?=wp_get_attachment_url(366);?>" alt="bio oil skincare">
            <div class="  sm:px-4 md:px-[53px] y py-6 " >
                <h1  class="md:text-[36.29px]  text-primary-500 mt-2 leading-tight" >Conócenos más</h1>
                <div  class="md:text-[16px] leading-[25.22px]  tracking-[0.40px] mt-2 sm:pr-12 text-justify" >

                    <p>
                        Bio Oil es una marca especializada en el cuidado de la piel que lleva muchos años de experiencia acumulando historias de éxito en más
                        de 142 países en el mundo.
    
                    </p>
                    <p  class="mt-5" > 
                            Bio Oil investiga y desarrolla productos especializados para el cuidado de la piel, en los que utiliza aceite para que tengan un rendimiento
                        excelente. La marca se conoce como Bio‑Oil® en todos los países, excepto en Austria, la República Checa, Francia, Alemania, Eslovaquia
                        y Suiza, donde se utiliza el nombre Bi-Oil®. En Japón, su denominación es Bioil®. Bio Oil se centra exclusivamente en la investigación y
                        es Cruelty Free. 
                    </p>
                </div>
            </div>  
        </section> 
         <section class=" biooil-section" >  
             <div  class=" biooil-section-body   ">
                <div  class= " flex-1" >
                    <h2>Aceite</h2>
                    <p >Mejora la apariencia de la piel. Es ligero, no graso y no es comedogénico (no bloquea los poros).
Está indicado para atenuar y mejorar la apariencia de: Estrías, Cicatrices y Manchas.</p>
                    <h3>Modo de Uso</h3>
                    <p>De manera circular en el área afectada, 2 veces al día durante un mínimo de 3 meses.</p>
                    <h3>Presentaciones</h3>
                    <p>25 - 60 - 125 - 200 ml</p>
                    <h3>Ingredientes</h3>
                    <p> 
                        Vitamina A: ayuda a la cicatrización de heridas. <br>
                        Vitamina E: incrementa la hidratación de la piel. <br>
                        Romero: anti-inflamatorio, rico en antioxidantes. <br>
                         Lavanda: relaja, tonifica y ayuda a la cicatrización. <br>
                         Caléndula: mejora la textura, regenera los tejidos. <br>
                        Camomila: tonifica, calma y restaura la piel inflamada.  <br>
                        Purcellin Oil: contribuye a que la textura sea ligera y de rápida absorción. 
                    </p>
                </div>
                <div class=" flex-grow sm:max-w-[200px] md:max-w-[256.52px] space-y-[11.5596px] " >
                    <img src="<?=wp_get_attachment_url(367);?>" alt="imagenl2">
                    <img src="<?=wp_get_attachment_url(368);?>" alt="imagenl3">
                </div>
             </div>
            <p class="sm:px-4 sm:!pr-11 !mt-8 text-justify " >Aplicar dos veces al día durante un mínimo de tres meses. Durante el embarazo, aplique desde el inicio del segundo trimestre. Los resultados en
            cada persona pueden variar. Adecuado para pieles sensibles. No comedogénico. Solo para uso externo. No usar sobre piel con heridas abiertas. En
            el improbable caso de irritación en la piel, descontinúe su uso. Evitar contacto con los ojos. Si el producto entra en los ojos, enjuagar con abundante
            agua. Mantener fuera del alcance de los niños. Almacenar fuera del alcance de la luz del sol.</p>
        </section>
        <section class=" biooil-section" >  
             <div  class=" biooil-section-body   ">
                <div  class= " flex-1" >
                    <h2>Gel</h2>
                    <p >Especialmente diseñado para tratar las pieles con sequedad. Ayuda a calmar afecciones
derivadas de ella como la psoriasis, eccemas o dermatitis atópica, ya que colabora aliviando
sus síntomas (picores, sequedad, descamación).</h3> 
                    <h3>Modo de Uso</h3>
                    <p>Puede usarse en todo el cuerpo. Masajear con pequeños movimientos circulares hasta que se
absorba por completo. Se debe aplicar una pequeña cantidad según sea necesario.</p>
                    <h3>Presentaciones</h3>
                    <p>50 - 100 ml</p> 
                    <h3>Componentes Exclusivos</h3>
                    <p>Tiene un 97% de ingredientes activos hidratantes que actúan sobre la piel y tan solo un 3% de
agua. El gel combina 3 sustancias esenciales para hidratar la piel: Oclusivas, Hidratantes y
Reparadoras.</p>
                </div>
                <div class=" flex-grow sm:max-w-[200px] md:max-w-[256.52px] space-y-[11.5596px] " >
                    <img src="<?=wp_get_attachment_url(369);?>" alt="imagenl2">
                    <img src="<?=wp_get_attachment_url(377);?>" alt="imagenl3">
                </div>
             </div>
            <p class="sm:px-5 ms:!pr-11 !mt-8 text-justify " >Adecuado para pieles sensibles. No comedogénico. Solo para uso externo. No usar sobre piel con heridas abiertas. En el improbable caso de irritación en la piel , descontinue su uso. Evitar contacto con los ojos. Si el producto entra a los ojos enjuagar con abundante agua. Mantener fuera del alcance de los niños.</p>
        </section>
        <section class=" biooil-section !py-7 " >  
            <h2  class=" text-[24px] sm:text-[36.29px] text-primary-500 mb-7 leading-none ml-2 sm:ml-10" >Noticias Bio Oil</h2>

            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-x-[15px] sm:gap-x-[30.69px] gap-y-[30px] place-content-center"> 
            <?php  
              //query subpages
              $args = array(
              'post_type' =>'noticias-bio-oil' ,
              'orderby' => 'date',
              'order' => 'desc',
              'posts_per_page' => 1,
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
                            <div  class=" card-body " >
                                <h2><?=get_the_title();?></h2> 
                            </div>
                            <div  class=" card-footer  ">
                                <button>QUIERO LEER MÁS</button>
                            </div>
                        </a> 
              <?php	endwhile;
              endif; 
              // reset the query
              wp_reset_postdata();
            ?>  
                <!-- <a class="card" href="#" >
                    <img  src="<?//=wp_get_attachment_url(375);?>" alt="Adivina cuál es el aceite multiusos favorito de las celebrities.">   
                    <div  class=" card-body  " >
                        <h2 class="!text-paragraph " >Adivina cuál es el aceite multiusos favorito de las celebrities.</h2> 
                    </div>
                    <div  class=" card-footer  ">
                        <button>QUIERO LEER MÁS</button>
                    </div>
                </a>   -->
               <!--  <article class="card"  >
                    <img  src="<=wp_get_attachment_url(374);?>" alt="Ya somos parte de la vida de más de 1 millón de peruanas.">   
                    <div  class=" card-body  " >
                        <h2 class="!text-paragraph " >Ya somos parte de la vida de más de 1 millón de peruanas.</h2> 
                    </div>
                    <div  class=" card-footer  ">
                        <button>QUIERO LEER MÁS</button>
                    </div>
                </article>   -->
              <!--   <article class="card"  >
                    <img  src="<=wp_get_attachment_url(376);?>" alt="Así fue nuestra cena con buenos amigos y especialistas que creen en Bio Oil.">   
                    <div  class=" card-body  " >
                        <h2 class="!text-paragraph " >Así fue nuestra cena con buenos amigos y especialistas que creen en Bio Oil.</h2> 
                    </div>
                    <div  class=" card-footer  ">
                        <button>QUIERO LEER MÁS</button>
                    </div>
                </article>   -->
            </div>

         </section>
        <section class=" biooil-section !py-7 mt-6" >  
            <p class="sm:px-5 ms:!pr-11 text-justify !mt-[1.5rem] ">Bio Oil, desde su llegada al Perú, además de dirigirse al público final también sostiene una importante relación con reconocidos doctores y cirujanos locales debido a la importante función de sus productos en los tratamientos de la piel por diferentes motivos, desde dermatitis atópica o resequedad hasta cicatrices como consecuencia de  intervenciones quirúrgicas, accidentes o quemaduras. Y para los embarazos Bio Oil previene la aparición de estrías si se usa a partir del segundo trimestre.</p>
            <h2  class=" text-[24px] sm:text-[36.29px] text-primary-500 mt-10 mb-7 leading-none ml-2 sm:ml-10" >LIVE con especialistas</h2>

            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-x-[15px] sm:gap-x-[30.69px] gap-y-[30px] place-content-center      "> 
            
              


                <?php  
                    //query subpages
                    $args = array(
                    'post_type' =>'live-especialistas' ,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'posts_per_page' => 3,
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
                                    <img  src="<?=$url_image?>" alt="<?=get_the_title();?>">     
                                    <div  class=" card-body " >
                                        <h2><?=get_the_title();?></h2> 
                                    </div>
                                    <div  class=" card-footer  ">
                                        <button class="!px-10">VER VIDEO</button>
                                    </div>
                                </a>  
                    <?php	endwhile;
                    endif; 
                    // reset the query
                    wp_reset_postdata();
                    ?> 
            </div>

         </section>
 
    </main>
  


<?php  
get_footer();
?>
