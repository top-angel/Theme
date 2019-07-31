<?php 
$image1 = wp_get_attachment_image_src(278, full);
$image3 = wp_get_attachment_image_src(290, full);
$fbIcon = wp_get_attachment_image_src(291, full);

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

    <?php 
        get_template_part('template-parts/card', 'about');
    ?>


    <div class="parallax"style='background-image:url(<?php echo $image1[0] ?>); min-height: 500px;
    height: 30vh;'
    >   
    </div>

    <div 
    class='accordion parallax'
    id="contact-parallax-container" 
    style="background-image:url(<?php echo $image3[0] ?>"
    >
        <div class="card" style="background:unset">
            <div class="card-header" id="headingTwo">
                <h2 id="contactH2" class="mb-0 mediumFont">
                    <button
                        class="btn btn-link"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="true"
                        aria-controls="collapseTwo"
                    >
                    CONTACT
                    </button>
                </h2>
                <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#contact-parallax-container"
                    >
                    <div class="card-body">
                        <?php 
                            echo do_shortcode(get_post_field('post_content', 7));
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>