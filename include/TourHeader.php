<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">

                <h2 class="mb-0  text-shadow">
                    <?php echo $tourPackage1['nameOfTour'] ?>
                </h2>
                <h4 class="mb-0 text-white text-shadow">
                <?php foreach ($tourPackage1['locations'] as $locations12) 
                {echo ' ' . $locations12['location'] . ', ';} ?>
                </h4>
            </div>

        </div>
    </div>
</header>


<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">About Tour</h4>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="custom-block-icon-wrap">

                            <div class="custom-block-image-wrap custom-block-image-detail-page">
                                <a href=<?php echo $tourPackage1['images'] ?> title=<?php echo "'" . $tourPackage1['nameOfTour'] . "'" ?>
                                    alt=<?php echo "'" . $tourPackage1['nameOfTour'] . "'" ?> class="col-12" data-gallery>
                                    <img src=<?php echo $tourPackage1['images'] ?> class=" custom-block-image img-fluid"
                                        alt=<?php echo "'" . $tourPackage1['nameOfTour'] . "'" ?>>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class=" me-4">
                                <?php foreach ($tourPackage1['locations'] as $locations12) {   ?>
                                <a href=<?php echo '"' . $locations12['pageLink'] . '"' ?>>     
                                <?php echo '' . $locations12['location'] . ', ';  } ?>
                                </a>
                                    
                                </small>

                                <small>
                                    <i class="bi-tag-fill custom-icon"></i>
                                    Starting Price
                                    <?php echo $tourPackage1['startingPrice'] ?> Per Person
                                </small>
                                <br>
                                <small>
                                    <i class="bi-tag-fill custom-icon"></i>
                                    Starting Price
                                    <?php echo $tourPackage1['startingPrice']*2 ?> Per Couple
                                </small>
                                
                            </div>

                            <h2 class="mb-2">
                                <?php echo $tourPackage1['nameOfTour'] ?>
                            </h2>

                            <p>
                                <?php echo $tourPackage1['description'] ?>

                            </p>
                            <p>

                            </p>
                            <p>
                                <strong>Includes:- </strong>
                                <?php    echo '' . $tourPackage1['includes'] . ''; ?>
                            </p>
                            <p>
                            <strong>USP:- </strong>
                                <?php    echo '' . $tourPackage1['USPs'] . ''; ?>
                            </p>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>