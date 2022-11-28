<?php get_header();?>

<?php if(have_posts()) :?>
      <?php while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail_url(); ?>
            <?php the_category(); ?>
            <?php the_permalink(); ?><?php the_title(); ?>
            <?php the_excerpt(); ?>
            <?php the_date('d/m/Y'); ?>
            <?php the_permalink(); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <h1>Brak artykułów do wyświetlenia</h1>
    <?php endif; ?>

<?php get_footer();?>