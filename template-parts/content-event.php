

<?php $mapLocation = get_field('event_map'); ?>
<div class='post-item'>
    <a class='event__anchor' href="<?php the_permalink(); ?>">
    <div class='event-date-sphere'>
    <span class="event-summary__month"><?php 
      $eventDate = new DateTime(get_field("event_date", false, false));
        echo $eventDate -> format('M')?>
    </span>
    <span class="event-summary__day"><?php echo $eventDate -> format('d')?></span> 
  </div>
      <span class='event__name'><?php the_title(); ?></span>
    </a>
    <div class='event__template__content__container'>
      <div class='eventContent'><?php the_content(); ?></div>
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