<?php get_header(); ?>
    
    <?php if(have_posts()) :?>
      <?php while (have_posts()) : the_post(); ?>
		<div class="col-md-4">
        
          
            <article class="post-classic" data-aos="zoom-in">
			<img src="<?php the_post_thumbnail_url(); ?>"/>
			<ul class="list-inline-tag">
                <li><?php the_category(); ?></li>
            </ul>
              <div class="post-classic-title">
                <h3 class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
              </div>
              <div class="post-classic-body">
                <p><?php the_excerpt(); ?></p>
              </div>
              <div class="post-meta">
                <div class="group">
                  <time><?php the_date('d/m/Y'); ?></time>
                </div>
              </div>
              <div class="post-classic-footer">
                <ul class="list-inline-sm">
                </ul><a class="button button-link" href="<?php the_permalink(); ?>">Czytaj dalej</a>
              </div>
            </article>
          </div>
        
      <?php endwhile; ?>
    <?php else: ?>
      <h1>Brak artykułów do wyświetlenia</h1>
    <?php endif; ?>
  </div>
  </div>
</section>


<?php get_footer(); ?>