<?php $image2 = wp_get_attachment_image_src(279, full); ?>


<div 
        class="accordion parallax" 
        id="aboutDiv"
        style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 2.1), rgba(0, 0, 0, 0.6)), url(<?php echo $image2[0] ?>) !important"
    >
    <div class="card" style="background:unset">
        <div class="card-header" id="headingOne">
                <h2 id="aboutH2" class="mb-0 mediumFont indexCategorySection">
                    <button 
                        class="btn btn-link" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target="#collapseOne" 
                        aria-expanded="true" 
                        aria-controls="collapseOne">     
                        ABOUT
                    </button>
                </h2>
                <div 
                    id="collapseOne"
                    class="collapse"
                    aria-labelledby="headingOne"
                    data-parent="#aboutDiv">
                    <div class="card-body">
                        <?php 
                        $aboutPost = get_post(6);     
                        $content_post = get_post($aboutPost);
                        $content = $content_post -> post_content;
                        ?>
                        <section id="aboutSection">
                            <?php echo $content; ?>
                        </section>
                    </div>
                </div>
        </div>
    </div>
</div>