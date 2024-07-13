<section class="topics-section section-padding  pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Places To Visit in <?php echo $location1['location'] ?> </h4>
                </div>
            </div>
            <?php 
            $placesToVisitArr = $location1['placesToVisit'];
            shuffle( $placesToVisitArr );
            foreach ($placesToVisitArr as $placestovisit) { ?>

                <div class="col-lg-3 col-md-6 col-12 mt-2 mb-2 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                    <div class="wowload fadeInUp">
                            <a href=<?php echo $placestovisit['image'] ?> title=<?php echo '"' . $placestovisit['name'] . '"' ?> alt=<?php echo '"' . $placestovisit['name'] . '"' ?> class="col-12" data-gallery>
                                <img src=<?php echo $placestovisit['image'] ?> class="col-12 custom-block-image img-fluid"
                                    alt=<?php echo '"' . $placestovisit['name'] . '"' ?>>
                            </a>
                        </div>
                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1 text-success">
                                    <?php echo $placestovisit['name'] ?>
                            </h5>
                            <p>
                               <strong><?php echo $placestovisit['distance'] ?> </strong> 
                               <br> 
                            <?php echo $placestovisit['desc'] ?>

                            </p>
                            
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>