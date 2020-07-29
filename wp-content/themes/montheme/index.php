<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :  the_post() ?>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <?php the_post_thumbnail('medium', ['class' => 'card-img border-img', 'alt' => '']) ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title() ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="card-text"><small class="text-muted"><?php the_category() ?></small></p>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-primary"> Continuer </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile ?>
    <div class="mx-auto my-5">
        <?php montheme_pagination(); ?>
    </div>
<?php else : ?>
    <h2>Pas d'articles</h2>
<?php endif ?>

<?php get_footer(); ?>