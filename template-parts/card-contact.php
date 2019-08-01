<?php $image3 = wp_get_attachment_image_src(290, full); ?>

 
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