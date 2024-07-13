<section class="topics-section section-padding mt-3 mb-3 pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <a href="hotels.php" class="custom-block-image-wrap">

                        <h4 class="section-title">Hotels</h4>
                    </a>
                </div>
            </div>

            <div class="swiper hotel-swiper ">
                <div class="swiper-wrapper mt-5 m-5">

                    <?php foreach ($hotels as $hotelFooter) { ?>

                        <div class="swiper-slide col-lg-3 col-md-6 col-12 mt-2 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-overlay">
                                <a href=<?php echo $hotelFooter['hotelLink'] ?> class="custom-block-image-wrap">
                                    <img src=<?php echo $hotelFooter['images'] ?> class="custom-block-image img-fluid" alt=<?php echo "'". $hotelFooter['name']."'" ?>>
                                </a>

                                <div class="custom-block-info custom-block-overlay-info">
                                    <h5 class="mb-1">
                                        <a href="<?php echo $hotelFooter['hotelLink'] ?>">
                                            <?php echo $hotelFooter['name'] ?>
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="swiper-pagination-hotel d-flex justify-content-center"></div>

    </div>
</section>






<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiperLocations = new Swiper(".hotel-swiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop:true,
        centeredSlides: false,
        pagination: {
            el: ".swiper-pagination-hotel",
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