
<section class="trending-podcast-section section-padding pt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Our Tours including <?php echo $location1['location'] ?></h4>
                        </div>
                    </div>

                    <?php
                    
                    foreach ($location1['tours'] as $Tour1) { ?>

                        <div class="col-lg-4 col-12  mt-4 mb-4 mb-lg-0">
                            <a href=<?php echo $Tour1['pageLink'] ?>>
                            <div class="custom-block  custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href=<?php echo $Tour1['pageLink'] ?>>
                                        <img src=<?php echo $Tour1['images'] ?> class="custom-block-image img-fluid"
                                            alt=<?php echo "'". $Tour1['nameOfTour'] ."'" ?>>
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href=<?php echo $Tour1['pageLink'] ?>>
                                            <?php echo $Tour1['nameOfTour'] ?>
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <p>Starting Price <strong> ₹
                                                <?php echo $Tour1['startingPrice'] ?>
                                            </strong> </p>

                                    </div>


                                    <p class="mb-0">
                                        <?php echo substr($Tour1['description'], 0, 100) . "...." ?>
                                    </p>

                                  
                                    <a href=<?php echo $Tour1['pageLink'] ?> class="btn custom-btn smoothscroll w-100 mt-3">More Details</a>
                                    <a href=<?php echo $Tour1['pageLink'] ?> class="btn custom-btn smoothscroll w-100 mt-3">Contact Now</a>

                                </div>


                            </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>