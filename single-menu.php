<?php 

get_header(); 
the_post();

?>
    <?php get_template_part('/libs/header_page'); ?>

    <div class="container menuKatei">
        <button class="mobile"><p> Kategorie Menu (kliknij tutaj)<div class="arrowCta"></div></p></button>
        <div class="menuLinks">
            <?php
                $categories = wp_get_recent_posts(array( 'post_type'=>'menu', 'order' => 'ASC'));
                foreach( $categories as $category ) { ?>
                    <a href="<?php echo get_permalink($category["ID"]); ?>" class="menuLink"><?php echo $category["post_title"]; ?></a>
            <?php } ?>
        </div>

        <div class="menuContent">
            <div class="menuContent__tab active">
                <h2 class="menuContent__tab-title"><?php echo the_title(); ?></h2>
                    <?php if( have_rows('menu__content') ): ?>
                        <?php while( have_rows('menu__content') ): the_row();?>

                            <?php if(get_row_layout() == 'menu__content--category'): 
                                $categoryName = get_sub_field ('menu__content--categoryName');
                            ?> 
                                <h2 class="menuContent__tab-category"><?php echo $categoryName; ?></h2>
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'menu__content--dish'): 
                                $dishName = get_sub_field ('menu__content--dishName');
                                $dishPrice = get_sub_field ('menu__content--dishPrice');
                                $dishIng = get_sub_field ('menu__content--dishIng');
                            ?> 
                                <div class="menuContent__tab-dish">
                                    <div class="menuContent__tab-dishName">
                                        <h3><?php echo $dishName; ?></h3>
                                        <h3><?php echo $dishPrice; ?>zł</h3>
                                    </div>
                                    <div class="menuContent__tab-dishIng"><?php echo $dishIng; ?></div>
                                </div>
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'menu__content--short'): 
                                $shortText = get_sub_field ('menu__content--shortText');
                            ?> 
                                <span class="menuContent__shortText"><?php echo $shortText; ?></span>
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'menu__content--set'): 
                                $setName = get_sub_field ('menu__content--setName');
                                $setPrice = get_sub_field ('menu__content--setPrice');
                                $setContent = get_sub_field ('menu__content--setContent');
                            ?> 
                                <div class="menuContent__tab-dish">
                                    <div class="menuContent__tab-dishName">
                                        <h3><?php echo $setName; ?></h3>
                                        <h3><?php echo $setPrice; ?>zł</h3>
                                    </div>
                                    <div class="menuContent__tab-dishIng"><?php echo $setContent; ?></div>
                                </div>
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'menu__content--img'): 
                                $img = get_sub_field ('menu__content--imgValue');
                            ?> 
                                <img src="<?php echo $img['url']; ?>" alt="" class="menu__content-img">
                            <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>