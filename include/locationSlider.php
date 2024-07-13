<div class="owl-carousel owl-theme">

    <?php 
    shuffle($locations);
    foreach ($locations as $location12) { ?>



        <div class="owl-carousel-info-wrap item">
            <a href=<?php echo $location12['pageLink'] ?> class="custom-block-image-wrap">

                <img src=<?php echo $location12['images'] ?> class="owl-carousel-image img-fluid" alt=<?php echo '"'. $location12['location'] .'"' ?>>
            </a>


            <div class="owl-carousel-info">
                <h4 class="mb-2">
                    <?php echo $location12['location'] ?>

                </h4>
            </div>

            <div class="social-share">
                <ul class="social-icon">
                    <li class="social-icon-item badge rounded">
                        <?php echo count($location12['tours']) ?>
                        Tours
                    </li>
                    

                    

                </ul>
            </div>
        </div>
    <?php } ?>

</div>