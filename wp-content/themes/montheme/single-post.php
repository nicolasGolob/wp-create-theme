<?php get_header() ?>
<?php if(have_posts()):  while(have_posts()): the_post();?>  
        <!--  pour economiser de la place -> if while -->
        <h1><?php the_title() ?></h1>
        <?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1'): ?>
            <!-- get_post_meta puis on a besoin de l'id on le récupere avec la fonction get_the_ID + la clef 'thme_sponso' + en 3eme parametre single soit true === vaut mieux utiliser une condition stricte soit égale à '1' -->
            <div class="alert alert-info">
                Cet article est sponsorisé
            </div>
        <?php endif ?>
       <p>
           <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:50%; height=auto">
       </p>
        <?php the_content() ?>
        <!--  the content -> le contenu tout simplement -->
    <?php endwhile; endif; ?>
<?php get_footer() ?>