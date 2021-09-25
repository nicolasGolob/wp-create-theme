<?php get_header() ?>
<?php if(have_posts()):  while(have_posts()): the_post();?>  
        <!--  pour economiser de la place -> if while -->
        <h1><?php the_title() ?></h1>
       <p>
           <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:50%; height=auto">
       </p>
        <?php the_content() ?>
        <!--  the content -> le contenu tout simplement -->
    <?php endwhile; endif; ?>
<?php get_footer() ?>