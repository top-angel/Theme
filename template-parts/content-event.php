
<?php 
$mapLocation = get_field('event_map'); 
$eventDate = new DateTime(get_field("event_date", false, false));
$eventImage = wp_get_attachment_image_src(get_field('event_image', false, false), false);

?>
<div class='event-hub-entry'>
      <div class='event-date-sphere'>
      <span class='event-name'><?php the_title(); ?></span>
        <span class="event-date">
          <?php echo $eventDate -> format('F')?>
          <?php echo $eventDate -> format('j')?>
          <?php echo $eventDate -> format('Y')?>
        </span><!-- event-date-->
      </div><!-- event-date-sphere -->
    
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
        <div class='event-time'><strong class="event-strong">Time: </strong> <?php echo $eventDate->format('g:i a'); ?></div>
        <div class='event-tickets'><strong class="event-strong">Tickets: </strong> <?php echo get_field('event_tickets'); ?></div>
        <div class="event-tickets"><strong class="event-strong">Address: <br></strong> <?php echo $mapLocation['address']; ?> </div>

      </div>
      



<?php if( have_rows('event_performers') ): ?>
	<ul class="artist-slides-UL">
    <?php 
    $artistGroupName = get_field('event_performer_list_type');
    ?>
    <h1><?php echo $artistGroupName ?></h1>
	<?php while( have_rows('event_performers') ): the_row(); 

		// vars
		$image = get_sub_field('performer_image');
    $name = get_sub_field('performer_name');
    $role = get_sub_field('performer_role');
		$link = get_sub_field('performer_website_link');

		?>

		<li class="artist-slide">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

			<?php if( $link ): ?>
        <a href="<?php echo $link; ?>">
          <?php else: ?>
        <a style="pointer-events: none;">
			<?php endif; ?>
              <h4><?php echo $name ?></h4>
              <strong><?php echo $role ?></strong>

			<?php if( $link ): ?>
        </a>
      <?php else: ?>
        </a>
      <?php endif; ?>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
      <div class='acf-map'>
        <div class='marker' data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
          <?php echo get_the_title(); ?>
          <?php echo $mapLocation['address']; ?>
        </div>
      </div>
    </div> 
</div>