<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">

                <h2 class="mb-0  text-shadow">
                    <?php echo $hotel1['name'] ?>
                </h2>
                <h4 class="mb-0 text-white text-shadow">
                    <?php echo $hotel1['location'] ?>
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
                    <h4 class="section-title">About Hotel</h4>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="custom-block-icon-wrap">

                            <div class="custom-block-image-wrap custom-block-image-detail-page">
                                <a href=<?php echo $hotel1['images'] ?> title=<?php echo "'" . $hotel1['name'] . "'" ?>
                                    alt=<?php echo "'" . $hotel1['name'] . "'" ?> class="col-12" data-gallery>
                                    <img src=<?php echo $hotel1['images'] ?> class=" custom-block-image img-fluid"
                                        alt=<?php echo "'" . $hotel1['name'] . "'" ?>>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class=" me-4">
                                    <a href=<?php echo '"' . $hotel1['locationPageLink'] . '"' ?>>
                                        <i class="bi-geo-alt-fill custom-icon"></i>
                                        <?php echo $hotel1['location'] ?>
                                    </a>
                                </small>

                                <small>
                                    <i class="bi-tag-fill custom-icon"></i>
                                    Starting Price
                                    <?php echo $hotel1['price'] ?>
                                </small>


                                <small class="ms-auto text-end"> <strong> category </strong> <span class="badge">
                                        <?php echo $hotel1['category'] ?>
                                    </span></small>
                            </div>

                            <h2 class="mb-2">
                                <?php echo $hotel1['name'] ?>
                            </h2>

                            <p>
                                <?php echo $hotel1['description'] ?>

                            </p>
                            <p>

                            </p>
                            <p>
                                <strong>Facilities:- </strong>
                                <?php foreach ($hotel1['facilities'] as $facilities) {
                                    echo '' . $facilities . ', ';
                                } ?>
                            </p>
                            <p>
                                <strong>USP:- </strong>
                                <?php foreach ($hotel1['features'] as $features) {
                                    echo '' . $features . ', ';
                                } ?>
                            </p>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>