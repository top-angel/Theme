
<?php 
$mapLocation = get_field('event_map'); 
$eventDate = new DateTime(get_field("event_date", false, false));
$eventImage = wp_get_attachment_image_src(get_field('event_image', false, false), false);
?>
<div class='event-item'>
    <a class='event-anchor' href="<?php the_permalink(); ?>">
      <div class='event-date-sphere'>
      <span class='event-name'><?php the_title(); ?></span>
        <span class="event-date">
          <?php echo $eventDate -> format('F')?>
          <?php echo $eventDate -> format('j')?>
          <?php echo $eventDate -> format('Y')?>
        </span><!-- event-date-->
      </div><!-- event-date-sphere -->
    </a>
    <div class='event__template__content__container'>
      <div class='event-content'>
      <?php 
        if($eventImage) { ?>
          <img class="event-page-image" 
            src="<?php 
              if($eventImage) {
              echo $eventImage[0];
              } 
            ?>"
            width="thumbnail"
        />
       <?php }
      ?>
        <?php the_content(); ?>
      </div>
      <div class='event-details'>
        <div class='event-time'><strong>Time: </strong> <?php echo $eventDate->format('g:i a'); ?></div>
        <div class='event-tickets'><strong>Tickets: </strong> <?php echo get_field('event_tickets'); ?></div>
      </div>
      <div class='acf-map'>
        <div class='marker' data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
          <?php echo get_the_title(); ?>
          <?php echo $mapLocation['address']; ?>
        </div>
      </div>
    </div> 
</div>