<section>
    <div class="container">
        <h2 class="home__newsTitle"><span>Aktualności</span> i wydarzenia</h2>
    </div>
	<div class="home__newsWrapper">
    <div class="swiper-wrapper">
    <?php $the_query = new WP_Query( array( 'posts_per_page' => 8, )); ?>
		<?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="swiper-slide home__newsArticle">
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
			    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php __('Brak artykułów do wyświetlenia'); ?></p>
        <?php endif; ?>
    </div>
    </div>
</section>






