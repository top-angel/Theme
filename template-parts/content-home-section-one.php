<?php $image1 = wp_get_attachment_image_src(278, full); ?>


<div 
    class="parallax" 
    id='parallax1'
    style='background-image: url(<?php echo $image1[0] ?>)'
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
        <!-- start of list group -->
            <div class="list-group">
                
                <!-- News item first -->
                <a 
                style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo $newsItemPictureSrc[0] ?>)"
                href="<?php echo esc_url(get_permalink()) ?>" 
                class='nocStudioHomeFeedItem  list-group-item list-group-item-action active'>
                    <div class="nocStudioHomeFeedName d-flex w-100 justify-content-between">
                        <h5>NEWS</h5>
                    </div><!-- d-flex w-100 justify-content-between -->
                    <p class="nocStudioHomeFeedTitle mb-1"><?php echo $newsItemTitle ?></p>
                    <small class="nocStudioHomeFeedDate"><?php echo $newsItemDate ?></small>

                </a><!-- list-group-item list-group-item-action active -->

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
                    $eventItemDate = get_the_date();
                    $eventItemAuthor = get_the_author();
                    $eventItemPictureSrc = wp_get_attachment_image_src(get_field('news_image', false, false), false);
                }
                
                ?>

                <a 
                style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo $eventItemPictureSrc[0] ?>)"
                href="<?php echo esc_url(get_permalink()) ?>" 
                class='nocStudioHomeFeedItem  list-group-item list-group-item-action active'>
                    <div class="nocStudioHomeFeedName d-flex w-100 justify-content-between">
                        <h5>EVENTS</h5>
                    </div><!-- d-flex w-100 justify-content-between -->
                    <p class="nocStudioHomeFeedTitle mb-1"><?php echo $eventItemTitle ?></p>
                    <small class="nocStudioHomeFeedDate"><?php echo $eventItemDate ?></small>

                </a><!-- list-group-item list-group-item-action active -->

            </div><!-- .list-group -->
    </div>