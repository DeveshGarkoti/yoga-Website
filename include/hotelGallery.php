<section class="topics-section section-padding pb-0  gallery min-vh-100" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">
                        <?php echo $hotel1['name'] ?> Gallery

                    </h4>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                <div class="custom-block custom-block-overlay">

                    <div class="wowload fadeInUp">

                        <a href=<?php echo $hotel1['images'] ?> title=<?php echo '"' . $hotel1['name'] . '"' ?>
                            alt=<?php echo '"' . $hotel1['name'] . '"' ?> class="col-12" data-gallery>
                            <img src=<?php echo $hotel1['images'] ?> class="col-12 custom-block-image img-fluid"
                                alt=<?php echo '"' . $hotel1['name'] . '"' ?>>
                        </a>
                    </div>
                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <?php echo $hotel1['name'] ?>
                        </h5>

                    </div>
                </div>
            </div>

            <?php foreach ($hotel1['rooms'] as $rooms) { ?>

                <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                    <div class="custom-block custom-block-overlay">

                        <div class="wowload fadeInUp">

                            <a href=<?php echo $rooms['images'] ?> title=<?php echo '"' . $rooms['name'] . '"' ?> alt=<?php echo '"' . $rooms['name'] . '"' ?> class="col-12" data-gallery>
                                <img src=<?php echo $rooms['images'] ?> class="col-12 custom-block-image img-fluid"
                                    alt=<?php echo '"' . $rooms['name'] . '"' ?>>
                            </a>
                        </div>
                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <?php echo $rooms['name'] ?>
                            </h5>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($hotel1['galleryImages'] as $galleryimages) { ?>


                <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <div class="wowload fadeInUp">

                            <a href=<?php echo $galleryimages['image'] ?> title=<?php echo '"' . $galleryimages['name'] . '"' ?> alt=<?php echo '"' . $galleryimages['name'] . '"' ?> class="col-12" data-gallery>
                                <img src=<?php echo $galleryimages['image'] ?> class="col-12 custom-block-image img-fluid"
                                    alt=<?php echo '"' . $galleryimages['name'] . '"' ?>>
                            </a>
                        </div>
                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <?php echo $galleryimages['name'] ?>
                            </h5>

                        </div>
                    </div>
                </div>
            <?php } ?>


            
            <?php

                $HotelGalleryAddress = $hotel1['imagesLocation'];

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

                                        <a href=<?php echo $image ?> title=<?php echo '"'. $hotel1['name'] . basename($image) . '"' ?> alt=<?php echo '"Raatri Snow Adventure Dhanulti ' . basename($image) . '"' ?>
                                            class="col-12" data-gallery>
                                            <img src=<?php echo $image ?> class="col-12 custom-block-image img-fluid" alt=<?php echo '"'. $hotel1['name'] . basename($image) . '"' ?>>
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


