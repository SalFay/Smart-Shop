<?php
get_header();
?>
    <div class="typrography">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
                        <h3 class="bars">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title() ?>
                            </a>
                        </h3>
                        <div class="bs-example">
                            <div class="mb-60">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>
    </div>

<?php
get_footer();
