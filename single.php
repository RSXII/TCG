<?php get_header(); ?>

<main id="content" class="clearfix">

    <section class="postContainer <?php if(is_single() || is_page()){echo 'singlePage'; }?>">
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
                        <div id="theAuthor">
                            <section>
                                <h2>About the author</h2>

                            </section>
                            <div>
                                <span class="authorName"><?php the_author(); ?></span>
                                <span class="authorGravatar"><?php echo get_avatar( get_the_author_email(), '90' ); ?></span>
                                <div class="authorBio"><?php the_author_description();?></div>
                            </div>

                        </div>
                    <div id="theComments">
                        <section>
                            <h2><?php comments_number( '0 Comments', '1 comment', '% Comments' ); ?></h2>
                        <span class="commentTitle">On "<?php the_title(); ?>"</span>


                        </section>
                        <section id="commentSection"><?php comments_template(); ?></section>
                    </div>
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
