<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-background');

//need to add header_image() in header.php or wherever the header appears
add_theme_support('custom-header', array(
    'width' => 1600,
    'height' => 500
));
//add in the_custom_logo() in order to use the new logo
add_theme_support('custom-logo', array(
    'width' => 100,
    'height' => 100
));
//if you have a blog/news feed, you NEED this.
add_theme_support('automatic-feed-links');
//remove the <title> from the header.
//add this theme support to dynamically add title to each page
add_theme_support('title-tag');

//always use this
add_theme_support('html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption'));

/*
 * Menu Functions
 * call wp_nav_menu() in theme to display these
 */
function conservative_menus(){
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'utilities' => 'Utility Menu',
    ));
}
add_action('init' , 'conservative_menus');

/**
 * Fallback for a footer that has not been defined yet
 */
function conservative_menu_fallback(){
    echo '<p>Please create a menu in the admin panel</p>';
}

/*
 Adding custom sidebar options
 */
add_action('widgets_init', 'tcg_widget_areas');
function tcg_widget_areas(){

    register_sidebar(array(
        'name' => 'Index Sidebar',
        'id' => 'index_sidebar',
        'description' => 'Appears on Index',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<section><h2>',
        'after_title' => '</h2></section>',
    ));
}

function tcg_ex_length(){
    if(is_search()){
        return 35; //words
    }else{
        return 40;
    }

}
add_filter('excerpt_length', 'tcg_ex_length');

function tcg_ex_dots(){
    return '&hellip; <br><br><a href="'. get_permalink() .'" class="readmore">Continue Reading &#8594;</a>';
}
add_filter('excerpt_more' , 'tcg_ex_dots');

function tcg_pagination(){
    ?>
    <div class="pagination">
        <?php
        if(is_singular()){
            previous_post_link('< Previous Post'); //older posts
            next_post_link('Next Post >'); //newer posts
        }else{
            if(wp_is_mobile()){
                previous_posts_link('&larr; Newer Posts');
                next_posts_link('Older Posts &rarr;');
            }else{
                the_posts_pagination(array(
                    'mid_size' => 1,
                    'next' => 'Next &rarr;',
                ));
            }
        } ?>
    </div>
    <?php
}