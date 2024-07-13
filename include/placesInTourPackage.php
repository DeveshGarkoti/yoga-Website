<section class="trending-podcast-section section-padding pt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Location include in Tour</h4>
                </div>
                <p>
                    <?php echo $tourPackage1['nameOfTour'] ?>
                </p>
            </div>

            <?php foreach ($tourPackage1['locations'] as $locations1) { ?>



                <div class="col-lg-4 col-12  mt-4 mb-4 mb-lg-0">
                    <a href=<?php echo ' "' . $locations1['pageLink'] . '"' ?>>
                        <div class="custom-block  custom-block-full">
                            <div class="custom-block-image-wrap">

                                <img src=<?php echo $locations1['images'] ?> class="custom-block-image img-fluid" alt=<?php echo '"' . $locations1['location'] ?>>
                            </div>


                            <div class="custom-block-info">
                                <br>
                                <h5 class="mb-2">
                                    <?php echo $locations1['location'] ?>
                                </h5>


                                <div class="profile-block d-flex">
                                    <p> <strong> Places to visit in
                                            <?php echo $locations1['location'] ?>
                                        </strong>
                                        <br>

                                        <?php foreach ($locations1["placesToVisit"] as $placesToVisit) { ?>
                                            <?php echo $placesToVisit['name'] ?> ,
                                        <?php } ?>
                                    </p>
                                </div>
                                <div class="profile-block d-flex">
                                    <p> <strong> Things to do in
                                            <?php echo $locations1['location'] ?>
                                        </strong>
                                        <br>

                                        <?php foreach ($locations1["thingsToDo"] as $thingsToDo) { ?>
                                            <?php echo $thingsToDo['name'] ?> ,
                                        <?php } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>


            <?php } ?>


        </div>
    </div>
</section>