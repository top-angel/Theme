<?php 
$image1 = wp_get_attachment_image_src(278, full);
$fbIcon = wp_get_attachment_image_src(291, full);

?>
<div id="content-parallax-container">
    <?php get_template_part('template-parts/content', 'home-section-one') ?>
    <?php get_template_part('template-parts/card', 'about'); ?>


    <div class="parallax"style='background-image:url(<?php echo $image1[0] ?>);
    height: 30vh;'
    >   
    </div> 

    <?php get_template_part('template-parts/card', 'contact'); ?>

    