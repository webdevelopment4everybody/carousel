<?php get_header();?>
<div class="container-fluid">
    <div class="social-icons">
    <?php
        if( have_rows('socialiniai_tinklai') ):

            while( have_rows('socialiniai_tinklai') ) : the_row();?>

            <?php  $link = get_sub_field('st_nuoroda');

                if( $link ): 

                    $link_url = $link['url'];

                    $link_title = $link['title'];

                    $link_target = $link['target'] ? $link['target'] : '_self';

                    $icon = get_sub_field('st_ikona'); 

                    $icon_size= $icon['sizes']['large'];
                ?>

                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php echo $icon_size ?>" alt="<?php echo  $icon['alt'] ?>"><?php echo esc_html( $link_title ); ?></a>

                <?php endif; ?> 

            <?php endwhile;
        endif;
    ?>

    </div>
    <div class="system">
    <?php
        if( have_rows('ikoneles_apacioje') ):

            while( have_rows('ikoneles_apacioje') ) : the_row();?>

            <?php  $link = get_sub_field('ia_nuoroda');

                if( $link ): 

                    $link_url = $link['url'];

                    $link_title = $link['title'];

                    $link_target = $link['target'] ? $link['target'] : '_self';

                    $icon2 = get_sub_field('ia_ikoneles_paveiksliukas'); 

                    $icon_size2= $icon2['sizes']['large'];
                ?>

                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img class="d-block" src="<?php echo $icon_size2 ?>" alt="<?php echo  $icon2['alt'] ?>"><?php echo esc_html( $link_title ); ?></a>

                <?php endif; ?> 

            <?php endwhile;
        endif;
    ?>
        <div class="wrap">
            <p><?php the_field('tekstas_apacioje__sone');?></p>
        </div>
    </div>
    <div class="container-custom">
    <?php if( have_rows('prideti_karuseles_bloka') ): ?>
        <div class="row desktop">
             <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php  while ( have_rows('prideti_karuseles_bloka') ) : the_row(); ?>
                <?php 
                    $bg_img = get_sub_field('prk_paveiksliukas'); 
                    $bg_size= $bg_img['sizes']['large'];
                ?>
                    <div class="swiper-slide">
                        <div class="blue-box">
                            <div class="d-flex">
                                <div class="col-lg-9">
                                    <div class="text-carousel">
                                        <p class="step"><?php echo get_sub_field('prk_skaicius');?></p>
                                        <h2><?php echo get_sub_field('prk_pavadinimas');?></h2>
                                        <p><?php echo get_sub_field('prkaprasymas');?></p>
                                    </div>
                                </div>
                                <div class="mobile-img col-lg-3">
                                <img class="mobile-absolute" src="<?php echo $bg_size ?>" alt="<?php echo  $bg_img['alt'] ?>">  
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>  
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
            <div id="prev" class="swiper-button-prev-unique"><img src="<?php echo get_template_directory_uri();?>/assets/images/arrow-left.png"></div>
            <div id="next" class="swiper-button-next-unique"><img src="<?php echo get_template_directory_uri();?>/assets/images/arrow-right.png"></div>
            <div id="numberSlides"></div>
        </div>
        <?php endif;?>
        <!-- mobile -->
        <?php

            if( have_rows('prideti_karuseles_bloka') ):

                while( have_rows('prideti_karuseles_bloka') ) : the_row(); ?>
                 <?php 
                    $bg_img = get_sub_field('prk_paveiksliukas'); 
                    $bg_size= $bg_img['sizes']['large'];
                ?>
                    <div class="row mobile">
                        <div class="blue-box col-12">
                            <div class="text-carousel">
                                <p class="step"><?php echo get_sub_field('prk_skaicius');?></p>
                                <h2><?php echo get_sub_field('prk_pavadinimas');?></h2>
                                <p><?php echo get_sub_field('prkaprasymas');?></p>
                                <img src="<?php echo $bg_size ?>" alt="<?php echo  $bg_img['alt'] ?>">  
                            </div>
                        </div>
                    </div>
                <?php endwhile;

            endif;
        ?>

    </div>
</div>


<?php get_footer();?>