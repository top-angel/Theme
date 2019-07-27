<div id="frontPageSectionContainer">

<section id="homePageNewsSection">
  <h2>News</h2>
  <strong>TODO: Find a way to pull in select events and articles???</strong>
</section>

<section id="homePageEventsSection">
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
    <h5>
      <?php echo $map_location['address']; ?>
    </h5>
    <span>
      <?php the_field('event_date')?>
    </span>
      <p>
        <?php the_content();?>
      </p>
      <?php }
        wp_reset_postdata();
      ?>
</section>

<section id="homePageReviewsSection">

<h2>Reviews</h2>
  <?php 
    $reviewEntries = new WP_Query(array(
      'posts_per_page' => 2,
      'post_type' => 'review'
    ));
    while($reviewEntries -> have_posts()) {
      $reviewEntries->the_post(); ?>
  <p>
    <?php the_content();?>
  </p>
  <span>
    <?php the_field('reviewer');?>
  </span>
  <?php }
    wp_reset_postdata();
  ?>
</section>


<section id="homePageBlogSection">
  <h2>Blog</h2>
    <?php 
      $blogEntries = new WP_Query(array(
          'category_name' => 'blog',
          'posts_per_page' => 4
      ));
        while($blogEntries -> have_posts()) {
          $blogEntries->the_post();
            //TODO: How to automatically set it up so that if there is no value for
            //'date_posted' it just goes with the_date(); Using an or operator || typically
            //results in there being two dates expressed. For now will have to instruct NOC 
            //to make sure to fill the date_posted field, will make it required.
          $postDate = the_field('date_posted');
    ?>
    <div class="singleBlogEntryDiv">
      <h4><?php the_title();?></h4>
        <span>
          <?php echo $postDate?>
        </span>
        <?php echo wp_trim_words(get_the_content(), 90, '...');?>
        <a href=<?php the_permalink() ?> >
          Read More
        </a>
    </div>
<?php }
wp_reset_postdata();
?>
    </section>
        </div>