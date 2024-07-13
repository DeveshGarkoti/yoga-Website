<div class="owl-carousel owl-theme">


    <div class="owl-carousel-info-wrap item">

        <a href=<?php echo $location1['pageLink'] ?> class=" custom-block-image-wrap">

            <img src=<?php echo $location1['images'] ?> class="owl-carousel-image img-fluid" alt=<?php echo '"' . $location1['location'] . '"' ?>>
        </a>

        <div class="owl-carousel-info">
            <h4 class="mb-2">
                <?php echo $location1['location'] ?>

            </h4>
        </div>

        <div class="social-share">
            <ul class="social-icon">
                <li class="social-icon-item badge rounded">
                    <?php echo count($location1['tours']) ?>
                    Tours
                </li>


            </ul>
        </div>
    </div>


    <?php
    unset( $locations[array_search($location1, $locations)]);
    shuffle($locations);
    foreach ($locations as $location) { ?>



        <div class="owl-carousel-info-wrap item">

            <a href=<?php echo $location['pageLink'] ?> class="custom-block-image-wrap">

                <img src=<?php echo $location['images'] ?> class="owl-carousel-image img-fluid" alt=<?php echo '"' . $location['location'] . '"' ?>>
            </a>

            <div class="owl-carousel-info">
                <h4 class="mb-2">
                    <?php echo $location['location'] ?>

                </h4>
            </div>

            <div class="social-share">
                <ul class="social-icon">
                <li class="social-icon-item badge rounded">
                    <?php echo count($location1['tours']) ?>
                    Tours
                </li>

                </ul>
            </div>
        </div>


    <?php } ?>




</div>