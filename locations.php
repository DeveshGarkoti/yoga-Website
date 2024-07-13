<!doctype html>
<html lang="en">

<?php require('data.php') ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Destinations in which Raatri Hospitality Operates </title>


    <meta name="description" content="Raatri Hospitality Operates in Uttarakhand Locations Like Haridwar, Rishikesh, Barkot, Uttarkashi, Badrinath, Kedarnath, Guptkashi, Joshimath, Srinagar">
    <meta name="keywords" content="Raatri Hospitality, Best Hotels in Uttarakhand, Budget hotels in haridwar, Affordable hotel in chardham, Luxury hotel in Rishikesh, Best hotel in Badrinath, Best hotel in Joshimath ">

    <meta name="Owner" content="Yoga Soul Adventures" />
    <meta name="classification" content="global" />
    <meta name="Uttarakhand Tour and Yoga operator" content="General" />
    <meta name="subject" content="Uttarakhand Tour and Yoga operator" />
    <meta name="page-type" content="content" />
    <meta name="audience" content="all" />
    <meta name="robots" content="all" />
    <link rel='canonical' href="https://www.yogasouladventures.in/" />
    <meta name="distribution" content="global" />
    <meta name="company" content="yogasouladventures.in" />
    <meta name="copyright" content="copyright © yogasouladventures.in" />
    <meta name="revisit-after" content="10 days" />
    <meta name="document-classification" content="yogasouladventures.in" />
    <meta name="author" content="Yoga Soul Adventures">

    <!-- CSS FILES -->

    <?php require('include/links.php') ?>

</head>

<body>

    <main>
        <?php require('include/header.php') ?>


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white text-shadow">We Operate In Below Destinations</h1>


                        </div>
                        <?php require('include/locationSlider.php') ?>

                    </div>

                </div>
            </div>
        </section>



        <section class="topics-section section-padding mt-3 mb-3 pb-0" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <a href="locations.php" class="custom-block-image-wrap">

                                <h4 class="section-title">Destinations</h4>
                            </a>
                        </div>
                    </div>


                            <?php foreach ($locations as $location) { ?>

                                <div class=" col-lg-3 col-md-6 col-12 mt-2 mb-4 mb-lg-0">
                                    <div class="custom-block custom-block-overlay">
                                        <a href=<?php echo $location['pageLink'] ?> class="custom-block-image-wrap">
                                            <img src=<?php echo $location['images'] ?> class="custom-block-image img-fluid"
                                                alt="">
                                        </a>

                                        <div class="custom-block-info custom-block-overlay-info">
                                            <h5 class="mb-1">
                                                <a href="<?php echo $location['pageLink'] ?>">
                                                    <?php echo $location['location'] ?>
                                                </a>
                                            </h5>

                                            
                                            
                                            <p class="badge mb-0">
                                                
                                            <?php echo count($location['tours']) ?>
                                                Tours
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        
                </div>
                <div class="swiper-pagination-location d-flex justify-content-center"></div>

            </div>
        </section>







    </main>

    <?php require('include/footer.php') ?>


    <?php require('include/scripts.php') ?>

</body>

</html>