<h2>Reviews</h2>
<?php 

$reviewEntries = new WP_Query(array(
    // 'posts_per_page' => 2,
    'post_type' => 'review'
));

while($reviewEntries -> have_posts()) {
    $reviewEntries->the_post(); ?>
    <p><?php the_content();?></p>
    <span><?php the_field('reviewer');?></span>
<?php }
wp_reset_postdata();
?>



<h2>Events</h2>
<?php 
    $eventEntries = new WP_Query(array(
        'post_type' => 'event'
    ));
        while($eventEntries -> have_posts()) {
            $eventEntries->the_post();
            $map_location = get_field('event_map');
?>
            <h4><?php the_title();?></h4>
            <h5><?php echo $map_location['address']; ?></h5>
            <span><?php the_field('event_date')?></span>
            <p><?php the_content();?></p>
    <?php }
?>

<h2>News</h2>