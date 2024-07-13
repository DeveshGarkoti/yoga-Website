<section>

    <!-- +++++++++++++++++++++++ Swiper Js ++++++++++++++++ -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->


    <!-- +++++++++++++++++++++++++ Testimonials ++++++++++++++++++++++ -->

    <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font "> <a href="./hotels.php">Tour Packages</a> </h2>
    <!-- +++++++++++++++++++++++++ Testimonials ++++++++++++++++++++++ -->


    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-Hotels">
            <div class="swiper-wrapper  mb-5 ">

                <?php
                shuffle($hotels);
                foreach ($hotels as $hotel) { ?>

                    <div class="swiper-slide shadow rounded bg-white p-4">
                        <a href=<?php echo $hotel['hotelLink'] ?> class="custom-block-image-wrap ">
                            <img src=<?php echo $hotel['images'] ?>
                                style="height: 350px; width:350px; margin-left: auto; margin-right: auto;"
                                class="custom-block-image shadow img-fluid" alt=<?php echo '"' . $hotel['name'] . '"' ?>>
                        </a>

                        <div class="owl-carousel-info rounded">
                            <h4 class="mb-2 d-flex  justify-content-center">
                                <a href=<?php echo $hotel['hotelLink'] ?>>
                                    <?php echo $hotel['name'] ?>
                                </a>
                            </h4>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item badge rounded">
                                    <i class="bi bi-bookmark-fill"></i>
                                    <?php echo $hotel['category'] ?>

                                </li>
                                <li class="social-icon-item badge rounded">
                                    <i class="bi-geo-alt-fill"></i>
                                    <?php echo $hotel['location'] ?>

                                </li>
                                <li class="social-icon-item badge rounded">
                                    <i class="bi bi-tags-fill"></i>
                                    ₹
                                    <?php echo $hotel['price'] ?>

                                </li>
                                <li class="social-icon-item badge rounded">
                                    <?php for ($x = 1; $x <= $hotel["ratings"]; $x++) {
                                        ?>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    <?php } ?>
                                </li>


                            </ul>
                        </div>
                    </div>
                <?php } ?>

            </div>



        </div>
        <div class="swiper-pagination-hotel d-flex justify-content-center"></div>
    </div>
    </div>


</section>


<!-- +++++++++++++++++++++++ Swiper Js ++++++++++++++++ -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->

<script>

    const swiperHotel = new Swiper(".swiper-Hotels", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 5,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination-hotel",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });

</script>

</main>