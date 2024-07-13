
<section class="trending-podcast-section section-padding pt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                        <a href="hotels.php" class="custom-block-image-wrap">

                            <h4 class="section-title">Our Hotels</h4>
                        </a>
                        </div>
                    </div>

                    <?php
                    shuffle($hotels);
                    
                    foreach ($hotels as $hotel) { ?>

                        <div class="col-lg-4 col-12  mt-4 mb-4 mb-lg-0">
                            <a href=<?php echo $hotel['hotelLink'] ?>>
                            <div class="custom-block  custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href=<?php echo $hotel['hotelLink'] ?>>
                                        <img src=<?php echo $hotel['images'] ?> class="custom-block-image img-fluid"
                                            alt=<?php echo "'". $hotel['name'] ."'" ?>>
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href=<?php echo $hotel['hotelLink'] ?>>
                                            <?php echo $hotel['name'] ?>
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <p>Starting Price <strong> ₹
                                                <?php echo $hotel['price'] ?>
                                            </strong> </p>

                                    </div>


                                    <p class="mb-0">
                                        <?php echo substr($hotel['description'], 0, 25) . "...." ?>
                                    </p>

                                    <div class="profile-block d-flex">
                                        <p> <strong> Features</strong>
                                            <br>

                                            <?php foreach ($hotel["features"] as $facilities) { ?>
                                                <?php echo $facilities ?> ,
                                            <?php } ?>
                                        </p>
                                    </div>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                        <a href=<?php echo '"'. $hotel['locationPageLink'] .'"' ?>  class="bi-geo-alt-fill  me-1">
                                            <span>
                                                <?php echo $hotel['location'] ?>
                                            </span>
                                        </a>

                                        <a class="bi-star-fill me-1">
                                            <span>
                                                <?php echo $hotel['ratings'] ?>

                                            </span>
                                        </a>

                                        <a class="bi-tag-fill me-1">
                                            <span>

                                                <?php echo $hotel['category'] ?>

                                            </span>
                                        </a>
                                    </div>
                                </div>


                            </div>
                            </a>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </section>