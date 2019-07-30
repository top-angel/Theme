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
    style='background-image: url(<?php echo $image1[0] ?>)'
    >
    <div class="jumbotron" id="frontPageBannerBox">
				<h1 class="display-4">NOC STUDIO</h1>
				<h2>Express your authentic voice</h2>
			</div>
       
    </div>

    <div 
        class="parallax" 
        id="aboutSection"
        style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 2.1), rgba(0, 0, 0, 0.6)), url(<?php echo $image2[0] ?>"
    >
        <h2 class="mediumFont indexCategorySection">ABOUT</h2>
        <?php 
        $aboutPost = get_post(6);     
        $content_post = get_post($aboutPost);
        $content = $content_post -> post_content;
        // $content = apply_filter('the_content', $content);
        // $content =str_replace(']]>', ']]&gt;', $content);
        ?>
        <section id="aboutSection">
        <?php
        echo $content;
        ?>
        </section>

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