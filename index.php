<?php get_header(); ?>

<main id="content" class="clearfix">

<?php get_sidebar('twitch'); ?>
    <section class="postContainer clearfix">
<?php if(have_posts()){
    while(have_posts()){
        the_post();?>
    <article id="<?php the_ID(); ?>" class="clearfix">

            <?php if(has_post_thumbnail()){ ?>
                <div class="thumbnail">
                <a href="<?php the_permalink(); ?>" class="featured-image-link">
                    <?php the_post_thumbnail('large', array('class' => 'featured-image-thumbnail')); //featured image ?>
                </a>
                </div>
            <?php } ?>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
        <div class="postInformation">
            <div>By: &nbsp;<span><?php the_author_posts_link(); ?></span> | </div>
            <div>Posted: &nbsp;<span><?php the_date(); ?></span> | </div>
            <div>Category: &nbsp;<span><?php the_category(); ?></span> | </div>
            <div> <?php comments_number( 'Comments: 0', 'Comments: 1', 'Comments: %' ); ?></div>
        </div>

            <div class="entry-content clearfix">
            <?php
            if(is_single() || is_page()){
                the_content(); }else{ the_excerpt(); }?>

        </div>

    </article>

        <?php
    }
} ?>
    </section>

</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
