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
                                <?php the_title() ?>
                        </h3>
                        <div class="bs-example">
                            <div class="mb-60">
                                <?php the_content(); ?>
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
