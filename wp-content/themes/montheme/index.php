<?php get_header() ?>
<?php if(have_posts()):     ?>
    <div class="row"> 
    <?php while(have_posts()): the_post(); ?>  
        <div class="col-sm-4">
            <div class="card">
                <?php the_post_thumbnail('post_thumnail', ['class' => 'card-img-top', 'alt' =>'', 'style' => 'height : auto;']) ?>
                <!-- on lie ci-dessus l'image à la class de bootstrap ci-dessous -->
                <!-- alt = vide car cette image n'est pas essentielle pour la compréhension de notre page -->
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                    <p class="card-text">
                        <?php the_excerpt() ?>
                    </p>
                    <a href="<?php the_permalink()?>" class="card-link">Voir Plus</a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile ?>
    <?php montheme_pagination()?>

<?php else:?>
    <h1> Pas d'articles </h1>
<?php endif; ?>
<?php get_footer() ?>