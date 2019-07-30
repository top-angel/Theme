<?php 
$image1 = wp_get_attachment_image_src(278, full);
$image2 = wp_get_attachment_image_src(279, full);
?>
<div id="content-parallax-container">
<!--TODO:How can we get images from SCSS into the fucking thing here? Maybe use a backup CSS file?-->
    <div 
    class="parallax" 
    id='parallax1'
    style='background-image:url(<?php echo $image1[0] ?>)'
    >
    <div class="jumbotron" id="frontPageBannerBox">
				<h1 class="display-4">NOC STUDIO</h1>
				<h2>Express your authentic voice</h2>
			</div>
       
    </div>

    <div 
        class="parallax" 
        id="aboutSection"
        style="background-image:url(<?php echo $image2[0] ?>"
    >
        <h2 class="mediumFont indexCategorySection">ABOUT</h2>
        <h1>Nancy is the shit, she has the power to make you sing like an ox that has 3 eyes, elevent hands
            30 legs, and 3 teeth. It will fuck you up and make people cry, but in a good soul enriching way that makes you
            go gansna gansna smoke more weed.
</h1>
    </section>

</div>