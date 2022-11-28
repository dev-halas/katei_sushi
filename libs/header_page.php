    <div class="header">
        <div class="headerImg fadeIn" style="background-image: url(<?php echo THEME_URL ?>_dev/img/welcome-vertical.png)"></div>
        <h2 class="headerTitle"><?php the_title(); ?></h2>
        <div class="headerSocial">
            <a href="<?php the_field('fb__link', 'option'); ?>" target="_blank" class="headerSocial__socialLink"><i class="fa fa-facebook"></i></a>
            <a href="<?php the_field('insta_link', 'option'); ?>" target="_blank" class="headerSocial__socialLink"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="headerLine fadeIn--right"></div>
    </div>