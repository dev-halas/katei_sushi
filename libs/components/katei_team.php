<?php 

    $teamImg = get_field('katei__team');

?>

<section class="kateiTeam">
    <div class="container">
        <div class="kateiTeam__title">
            <p>Rodzina</p>
            <h3>Sushi Katei</h3>
        </div>
        <div class="kateiTeam__image">
            <img src="<?php echo $teamImg['url']; ?>" alt="">
        </div>
        <div class="kateiTeam__accent"></div>
    </div>
</section>
<!-- employee -->
<section>
    <div class="container">
        <div class="kateiTeam__employees">
            <?php if( have_rows('katei__teamPersons') ): ?>
                <?php while( have_rows('katei__teamPersons') ): the_row();

                    $img = get_sub_field('katei__teamPerson--img');
                    $name = get_sub_field('katei__teamPerson--name');
                    $position = get_sub_field('katei__teamPerson--position');
                    $desc = get_sub_field('katei__teamPerson--desc');
                
                ?>

                    <div class="kateiTeam__emloyee">
                        <div class="kateiTeam__emloyeeImg">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $name; ?>">
                        </div>
                        <div class="kateiTeam__emloyee-desc">
                            <h3><?php echo $name; ?></h3>
                            <span><?php echo $position; ?></span>
                            <div class="kateiTeam__employeeText">
                                <?php echo $desc; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>