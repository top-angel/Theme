

<?php 
 $image1 = wp_get_attachment_image_src(312, full);
 $imageSmall = wp_get_attachment_image_src(313, full);

?>


<div 
    class="parallax largeHomeSection" 
    id='parallax1'
    style='background-image: url(<?php echo $imageSmall[0] ?>)'
    >


    <?php 
        //we will get the most recent news item, event, and blog post    
        $newsArgs = array (
            'post_type'=> array('news'),
            'order' => 'DESC',
            'orderby' => 'date',
            'post_per_page' => '1'
        );

        $newsItem = new WP_Query($newsArgs);
        if( $newsItem -> have_posts() ) {
            $newsItem -> the_post();

            $newsItemTitle = get_the_title();
            $newsItemContent = get_the_content();
            $newsItemDate = get_the_date();
            $newsItemAuthor = get_the_author();
            $newsItemPictureSrc = wp_get_attachment_image_src(get_field('news_image', false, false), false);
        }
    
    ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 home-section-two-slide-image" src="<?php echo $newsItemPictureSrc[0] ?>" alt="First slide">
      <div class="carousel-caption d-md-block content-home-section-two-carousel-caption">
        <h2><?php echo $newsItemTitle ?></h2>
        <h4 id="news-home-section-two-subtitle">NEWS</h4>
      </div>
    </div>


    <?php wp_reset_postdata();
                
                $eventsArgs = array (
                    'post_type'=> array('event'),
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'post_per_page' => '1'
                );
        
                $eventItem = new WP_Query($eventsArgs);
                if( $eventItem -> have_posts() ) {
                    $eventItem -> the_post();
        
                    $eventItemTitle = get_the_title();
                    $eventItemContent = get_the_content();
                    $eventItemDate = get_field('event_date', false, false);
                    $eventDate = new DateTime($eventItemDate);
                    $eventItemAuthor = get_the_author();
                    $eventItemPictureSrc = wp_get_attachment_image_src(get_field('event_image', false, false), false);
                }
                
                ?>

    <div class="carousel-item">
      <img class="d-block w-100 home-section-two-slide-image" src="<?php echo $eventItemPictureSrc[0]?>" alt="Second slide">
      <div class="carousel-caption d-md-block content-home-section-two-carousel-caption">
        <h2><?php echo $eventItemTitle ?></h2>
        <h4 id='event-home-section-two-subtitle'>EVENT</h4>
      </div>
    </div>



    <?php wp_reset_postdata();
                
                //Blog Stuff

                $blogArgs = array (
                    'category_name'=> array('blog'),
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'post_per_page' => '1'
                );
        
                $blogItem = new WP_Query($blogArgs);
                if( $blogItem -> have_posts() ) {
                    $blogItem -> the_post();
        
                    $blogItemTitle = get_the_title();
                    $blogItemContent = get_the_content();
                    $blogItemDate = get_the_date();
                    $blogItemAuthor = get_the_author();
                    $blogItemPictureSrc = get_the_post_thumbnail();
                }
                
                
                ?>

    <div class="carousel-item">
      <img class="home-section-two-slide-image  d-block w-100" src="<?php echo $blogItemPictureSrc ?>" />
      <div class="carousel-caption d-md-block content-home-section-two-carousel-caption">
        <h2><?php echo $blogItemTitle ?></h2>
        <h4 id="blog-home-section-two-subtitle">BLOG</h4>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script>
    jQuery('.carousel').carousel();
    </script>
        <!-- start of list group -->
            <div class="list-group">
            <h3 id="recentPostsHeader">Recent Posts</h3>

                <!-- News item first -->
                <a 
                style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo $newsItemPictureSrc[0] ?>)"
                href="<?php echo esc_url(get_permalink()) ?>" 
                class='nocStudioHomeFeedItem  list-group-item list-group-item-action'>
                    <div id="nocStudioNewsFeed" class="nocStudioHomeFeedName d-flex w-100 justify-content-between">
                        <h5>NEWS</h5>
                    </div><!-- d-flex w-100 justify-content-between -->
                    <p class="nocStudioHomeFeedTitle mb-1"><?php echo $newsItemTitle ?></p>
                    <small class="nocStudioHomeFeedDate">Posted on <?php echo $newsItemDate ?></small>

                </a><!-- list-group-item list-group-item-action active -->


                <a 
                style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo $eventItemPictureSrc[0] ?>)"
                href="<?php echo esc_url(get_permalink()) ?>" 
                class='nocStudioHomeFeedItem  list-group-item list-group-item-action'>
                    <div id="nocStudioEventFeed" class="nocStudioHomeFeedName d-flex w-100 justify-content-between">
                        <h5>EVENTS</h5>
                    </div><!-- d-flex w-100 justify-content-between -->
                    <p class="nocStudioHomeFeedTitle mb-1"><?php echo $eventItemTitle ?></p>
                    <small class="nocStudioHomeFeedDate">Event @<?php echo $eventDate->format('g:ia')?> on <?php echo $eventDate->format('F j, Y') ?></small>

                </a><!-- list-group-item list-group-item-action active -->


                <a 
                style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo $blogItemPictureSrc[0] ?>)"
                href="<?php echo esc_url(get_permalink()) ?>" 
                class='nocStudioHomeFeedItem  list-group-item list-group-item-action'>
                    <div id="nocStudioBlogFeed" class="nocStudioHomeFeedName d-flex w-100 justify-content-between">
                        <h5>BLOG</h5>
                    </div><!-- d-flex w-100 justify-content-between -->
                    <p class="nocStudioHomeFeedTitle mb-1"><?php echo $blogItemTitle ?></p>
                    <small class="nocStudioHomeFeedDate">Posted on <?php echo $blogItemDate?></small>

                    <?php wp_reset_postdata(); ?>
                </a><!-- list-group-item list-group-item-action active -->

            </div><!-- .list-group -->
    </div>