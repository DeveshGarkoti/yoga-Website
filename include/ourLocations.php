<section class="topics-section section-padding mt-3 mb-3 pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <a href="locations.php" class="custom-block-image-wrap">

                        <h4 class="section-title">Destinations</h4>
                    </a>
                </div>
            </div>

            <div class="swiper location-swiper ">
                <div class="swiper-wrapper mt-5 m-5">

                    <?php
                    shuffle($locations);
                    foreach ($locations as $location) { ?>

                        <div class="swiper-slide col-lg-3 col-md-6 col-12 mt-2 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-overlay">
                                <a href=<?php echo $location['pageLink'] ?> class="custom-block-image-wrap">
                                    <img src=<?php echo $location['images'] ?> class="custom-block-image img-fluid"
                                        alt=<?php echo '"' . $location['location'] . '"' ?>>
                                </a>

                                <div class="custom-block-info custom-block-overlay-info">
                                    <h5 class="mb-1">
                                        <a href="<?php echo $location['pageLink'] ?>">
                                            <?php echo $location['location'] ?>
                                        </a>
                                    </h5>

                                    <p class="badge mb-0">
                                        <?php echo count($location['tours']) ?>
                                        Tours
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="swiper-pagination-location d-flex justify-content-center"></div>

    </div>
</section>






<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiperLocations = new Swiper(".location-swiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        centeredSlides: false,
        pagination: {
            el: ".swiper-pagination-location",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 4,
            }
        }
    });
</script>