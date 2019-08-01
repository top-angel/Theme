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
          
            // echo $newsItemPictureSrc[0];
            // echo '<img src=" ' . $newsItemPictureSrc[0] . ' " />';

        }
    
    ?>
        <!-- start of list group -->
            <div class="list-group">
                
                <!-- News item first -->
                <a 
                style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo $newsItemPictureSrc[0] ?>)"
                href="#" 
                class='nocStudioHomeFeedItem  list-group-item list-group-item-action active'>
                    <div class="nocStudioHomeFeedName d-flex w-100 justify-content-between">
                        <h5>NEWS</h5>
                    </div><!-- d-flex w-100 justify-content-between -->
                    <p class="nocStudioHomeFeedTitle mb-1"><?php echo $newsItemTitle ?></p>
                    <small class="nocStudioHomeFeedDate"><?php echo $newsItemDate ?></small>

                </a><!-- list-group-item list-group-item-action active -->


            </div><!-- .list-group -->
    </div>