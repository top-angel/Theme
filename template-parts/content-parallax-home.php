<?php 
$image1 = wp_get_attachment_image_src(278, full);
$image2 = wp_get_attachment_image_src(279, full);
$image3 = wp_get_attachment_image_src(280, full);

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
        <p> 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius pulvinar justo. Nulla ac mi sed lacus tempor vehicula. Vestibulum vitae elit ut erat varius vehicula. Donec nisl nunc, vestibulum vitae cursus ut, auctor eu dolor. Sed tristique semper risus, ut tristique quam sagittis vel. Nullam vel ultrices leo. Mauris facilisis quam enim, ut consequat sem commodo vestibulum. Duis id nisi nisi. Aenean vel dignissim ex, sed volutpat diam. Fusce maximus consequat ornare. Nunc in odio at magna ullamcorper vestibulum. Integer scelerisque augue ligula, non rutrum justo dapibus sit amet. Phasellus at scelerisque erat, quis ullamcorper diam. Integer fermentum porttitor libero pulvinar maximus.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras pharetra porttitor pretium. Nulla finibus orci ut leo fringilla rutrum. Cras ligula elit, ultrices id vulputate eu, malesuada et dui. Vivamus turpis felis, facilisis nec convallis et, accumsan fringilla ante. Aenean laoreet lorem justo. Donec iaculis rhoncus laoreet. Nulla nisi augue, feugiat eget molestie id, consectetur in ex. Curabitur eget urna feugiat, euismod eros ut, dictum enim. In hac habitasse platea dictumst. Integer nec lectus id dolor pulvinar rutrum. Praesent ut dignissim felis. Curabitur rhoncus ipsum nec maximus blandit.
</p>

</div>

    <div class="parallax"style='background-image:url(<?php echo $image1[0] ?>); min-height: 500px;
    height: 30vh;'
    >   
    </div>

    <div 
    id="contact-parallax-container" class='parallax'
    style="background-image:url(<?php echo $image3[0] ?>"
    >
        <h2>CONTACT</h2>
        <p>wubmo</p>

    </div>