<section class="topics-section section-padding  pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Things To Do In
                        <?php echo $location1['location'] ?>
                    </h4>
                </div>
            </div>
            <?php 
            $thingsToDOArr = $location1['thingsToDo'];
            shuffle( $thingsToDOArr );
            foreach ($thingsToDOArr as $thingsToDO) { ?>

                <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <div class="wowload fadeInUp">
                            <a href=<?php echo $thingsToDO['image'] ?> title=<?php echo '"' . $thingsToDO['name'] . '"' ?>
                                alt=<?php echo '"' . $thingsToDO['name'] . '"' ?> class="col-12" data-gallery>
                                <img src=<?php echo $thingsToDO['image'] ?> class="col-12 custom-block-image img-fluid"
                                    alt=<?php echo '"' . $thingsToDO['name'] . '"' ?>>
                            </a>
                        </div>
                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1 text-success">
                                <?php echo $thingsToDO['name'] ?>
                            </h5>
                            <p>
                                <strong>
                                    <?php echo $thingsToDO['distance'] ?>
                                </strong>
                                <br>
                                <?php echo $thingsToDO['desc'] ?>

                            </p>

                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>