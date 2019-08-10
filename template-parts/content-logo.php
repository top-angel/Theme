<!-- We are going to have a div that has a circle with NOC
then it will have the word STUDIO, then the slogan will appear underneath. -->
<?php 
$bannerImage = wp_get_attachment_image_src(330, full);

?>


<section id="nocLogoSection">
    <img src="<?php echo $bannerImage[0] ?>" />
</section>