<section class="topics-section section-padding pb-0  gallery min-vh-100" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">
                        <?php echo $tourPackage1['nameOfTour'] ?> Gallery

                    </h4>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                <div class="custom-block custom-block-overlay">

                    <div class="wowload fadeInUp">

                        <a href=<?php echo $tourPackage1['images'] ?> title=<?php echo '"' . $tourPackage1['nameOfTour'] . '"' ?>
                            alt=<?php echo '"' . $tourPackage1['nameOfTour'] . '"' ?> class="col-12" data-gallery>
                            <img src=<?php echo $tourPackage1['images'] ?> class="col-12 custom-block-image img-fluid"
                                alt=<?php echo '"' . $tourPackage1['nameOfTour'] . '"' ?>>
                        </a>
                    </div>
                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <?php echo $tourPackage1['nameOfTour'] ?>
                        </h5>

                    </div>
                </div>
            </div>

            <?php foreach ($tourPackage1['locations'] as $locations12) { ?>

                <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                    <div class="custom-block custom-block-overlay">

                        <div class="wowload fadeInUp">

                            <a href=<?php echo $locations12['images'] ?> title=<?php echo '"' . $locations12['location'] . '"' ?> alt=<?php echo '"' . $locations12['location'] . '"' ?> class="col-12" data-gallery>
                                <img src=<?php echo $locations12['images'] ?> class="col-12 custom-block-image img-fluid"
                                    alt=<?php echo '"' . $locations12['location'] . '"' ?>>
                            </a>
                        </div>
                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <?php echo $locations12['location'] ?>
                            </h5>

                        </div>
                    </div>
                </div>
            <?php } ?>



            
            <?php

                $HotelGalleryAddress = $tourPackage1['imagesLocation'];

                $files = glob($HotelGalleryAddress."/*.*");
                    for ($i = 0; $i < count($files); $i++) {
                        $image = $files[$i];
                        $supported_file = array(
                            'gif',
                            'jpg',
                            'jpeg',
                            'png',
                            'webp',
                        );

                        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                        if (in_array($ext, $supported_file)) {

                            ?>

                            <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                                <div class="custom-block custom-block-overlay">
                                    <div class="wowload fadeInUp">

                                        <a href=<?php echo $image ?> title=<?php echo '"'. $tourPackage1['nameOfTour'] . basename($image) . '"' ?> alt=<?php echo '"Raatri Snow Adventure Dhanulti ' . basename($image) . '"' ?>
                                            class="col-12" data-gallery>
                                            <img src=<?php echo $image ?> class="col-12 custom-block-image img-fluid" alt=<?php echo '"'. $tourPackage1['nameOfTour'] . basename($image) . '"' ?>>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>



                        <?php
                        } else {
                            continue;
                        }
                    }
                    ?>


        </div>
    </div>
</section>


