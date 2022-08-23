<?php /* Template Name: about */ ?>
<?php get_header();?>

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <?php if(have_posts()) : ?>
            <div id="loop">
                <?php while(have_posts()) : the_post(); ?>
                <article class="container py-5">
                    <?php if(is_singular()) : ?>
                        <?php the_content(); ?>
                        </div>
                        <?php else : ?>
                            <p>Aucun résultat</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>