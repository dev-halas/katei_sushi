<?php get_header(); ?>

    <div class="container menuKatei">
        <button class="mobile">Kategorie Menu <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        <div class="menuLinks">



        <?php if(have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="menuLink"><?php echo the_title(); ?></a>                            
            <?php endwhile; ?>
        <?php endif; ?>



            
            <a data-tab="fusion roll" class="menuLink">Fusion Roll</a>
            <a data-tab="zestawy katei" class="menuLink">Zestawy KATEI</a>
            <a data-tab="przystawki" class="menuLink">Przystawki</a>
            <a data-tab="tatary sushimi tempura" class="menuLink">Tatary | Sushimi | Tempura</a>
            <a data-tab="zupy" class="menuLink">Zupy</a>
            <a data-tab="salaty" class="menuLink">Sałaty</a>
            <a data-tab="makarony" class="menuLink">Makarony</a>
            <a data-tab="dania glowne" class="menuLink">Dania główne | Danie dla dzieci</a>
            <a data-tab="desery" class="menuLink">Desery</a>
        </div>        
    </div>

<?php get_footer(); ?>