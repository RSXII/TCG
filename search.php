<?php get_header(); ?>

<main id="content" class="clearfix">

    <section class="postContainer <?php if(is_single() || is_page()){echo 'singlePage'; }?>">
        <h2><em>Displaying results for: "<?php the_search_query(); ?>"</em></h2>
        <hr>
        <br>
        <?php if(have_posts()){
            while(have_posts()){
                the_post();?>
                <article id="<?php the_ID(); ?>">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                    <?php if(has_post_thumbnail()){ ?>
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>" class="featured-image-link">
                                <?php the_post_thumbnail('large', array('class' => 'featured-image-thumbnail')); //featured image ?>
                            </a>
                        </div>
                    <?php } ?>

                    <div class="entry-content">
                        <p class="postedBy">POSTED BY: <?php the_author_posts_link(); ?> on <?php the_date(); ?></p>
                        <?php
                        if(is_single() || is_page()){
                            the_content(); }else{ the_excerpt(); }?>

                    </div>

                </article>

                <?php
            }
        } ?>
        <?php tcg_pagination(); ?>
    </section>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>