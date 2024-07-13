
<section class="trending-podcast-section section-padding pt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Rooms</h4>
                        </div>
                        <p>
                        <?php echo $hotel1['roomsDesc'] ?>
                        </p>
                    </div>

                    <?php foreach ($hotel1['rooms'] as $rooms) { ?>

                        <div class="col-lg-4 col-12  mt-4 mb-4 mb-lg-0">
                            <div class="custom-block  custom-block-full">
                                <div class="custom-block-image-wrap">
                                        <img src=<?php echo $rooms['images'] ?> class="custom-block-image img-fluid"
                                            alt=<?php echo '"'. $rooms['name'] .'"' ?>>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                            <?php echo $rooms['name'] ?>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <p>Starting Price <strong> ₹
                                                <?php echo $rooms['price'] ?>
                                            </strong> </p>

                                    </div>



                                    <div class="profile-block d-flex">
                                        <p> <strong> Features</strong>
                                            <br>

                                            <?php foreach ($rooms["features"] as $facilities) { ?>
                                                <?php echo $facilities ?> ,
                                            <?php } ?>
                                        </p>
                                    </div>

                                    <div class="profile-block d-flex">
                                        <p> <strong> Facilities</strong>
                                            <br>

                                            <?php foreach ($rooms["facilities"] as $facilities) { ?>
                                                <?php echo $facilities ?> ,
                                            <?php } ?>
                                        </p>
                                    </div>
                                    <div class="profile-block d-flex">
                                        <p> <strong> Maximum Occupancy </strong>
                                            <br>

                                            <?php foreach ($rooms["guest"] as $guest) { ?>
                                                <?php echo $guest ?> ,
                                            <?php } ?>
                                        </p>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>



                    <?php } ?>


                </div>
            </div>
        </section>

