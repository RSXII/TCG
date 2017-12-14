<?php
//get distinct counts of comments and pings
$comments_by_type = separate_comments(get_comments(array(
    'status' => 'approve',
    'post_id' => $id, //THIS POST

)));
$comment_count = count($comments_by_type['comment']);
$pings_count = count($comments_by_type['pings']);
?>
<?php if($comment_count){ ?>
    <section class="comments">
            <?php wp_list_comments(array(
                'type' => 'comment',
                'avatar_size' => 50,
            )); ?>
    </section>
<?php }//end if comments
?>
    <section class="comments-form">
        <?php comment_form(); ?>
    </section>
<?php
if($pings_count){
    ?>
    <section class="pings">
        <h3><?php echo $pings_count; ?> Site<?php if($pings_count != 1){ ?>s<?php } ?> mention this post:</h3>
        <?php wp_list_comments(array(
            'type' => 'pings',
            'short_pink' => true,
        )); ?>
    </section>
<?php }//end if pings count ?>