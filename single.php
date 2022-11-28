<?php get_header();?>
<?php the_post();?>

    <?php get_template_part('/libs/header_page'); ?>
    <section class="article">
        <div class="articleContainer">
            

                    <?php if( have_rows('post_content') ): ?>
                        <?php while( have_rows('post_content') ): the_row();?>

                            <?php if(get_row_layout() == 'post__content--img'): 
                                $bigImg = get_sub_field ('post__content--imgVar');
                            ?> 
                                <img src="<?php echo $bigImg['url']; ?>" alt="<?php echo the_title(); ?>">
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'post__content--text'): 
                                $textContent = get_sub_field ('post__content--textVar');
                            ?> 
                                <div class="ptb50"><?php echo $textContent; ?></div>
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'post__content--tir'): 
                                $leftText = get_sub_field ('post__content--tirText');
                                $rightImg = get_sub_field ('post__content--tirimg');
                            ?> 
                                <div class="row ptb50">
                                    <div class="col-6"><?php echo $leftText; ?></div>
                                    <div class="col-6"><?php echo $rightImg['url']; ?></div>
                                </div>
                            <?php endif; ?>

                            <?php if(get_row_layout() == 'post__content--til'): 
                                $leftImg = get_sub_field ('post__content--tilimg');
                                $rightText = get_sub_field ('post__content--tilText');
                            ?> 
                                <div class="row ptb50">
                                    <div class="col-6"><?php echo $leftImg; ?></div>
                                    <div class="col-6"><?php echo $rightText['url']; ?></div>
                                </div>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

        <?php $the_query = new WP_Query( array( 'posts_per_page' => 2, )); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <h2>Przeczytaj również</h2>
            <div class="row">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-6">
                        <div class="home__newsArticle">
                            <div class="home__newsArticle-img" style="
                                background-image: url(<?php the_post_thumbnail_url();?>);
                                background-position: center;
                                background-size: cover;
                                background-repeat: no-repeat;
                                ">
                            </div>
                            <div class="home__newsArticle-inner">
                                <div class="home__newsArticle-date"><i></i><span><?php the_date('d/m/Y'); ?></span></div>
                                <h3 class="home__newsArticle-innerTitle"><?php the_title(); ?></h3>
                                <p class="home__newsArticle-innerText"><?php the_excerpt(); ?> [...]</p>
                                <a href="<?php the_permalink(); ?>" class="button">czytaj więcej</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
		    <?php wp_reset_postdata(); ?>

		<?php else : ?>
            <p><?php __('Brak artykułów do wyświetlenia'); ?></p>
            
        <?php endif; ?>

        </div>
    </section>

    

<?php get_footer();?>
