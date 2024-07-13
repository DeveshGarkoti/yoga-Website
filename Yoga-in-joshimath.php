<!doctype html>
<html lang="en">

<?php require('data.php') ?>
<?php $location1 = $joshimath ?>
<?php $backgroundImage = $location1['backGround-Image'] ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>
        <?php echo "Best Tours in " . $location1['location'] ?>
    </title>
    <meta name="keywords" content=<?php echo
        '" Best Tours in ' . $location1['location'] .
        ', Budget Tours in ' . $location1['location'] .
        ', Cheapest Tours in ' . $location1['location'] .
        ', Tours in ' . $location1['location'] .
        "," . $location1['metaKeyword'] . '"' ?>>

    <meta name="description" content=<?php echo '"' . substr(($location1['metaDescription']), 0, 160) . '"' ?>>

    <meta name="Owner" content="Yoga Soul Adventures" />
    <meta name="classification" content="global" />
    <meta name="Uttarakhand Tour and Yoga operator" content="General" />
    <meta name="subject" content="Uttarakhand Tour and Yoga operator" />
    <meta name="page-type" content="content" />
    <meta name="audience" content="all" />
    <meta name="robots" content="all" />
    <link rel=“canonical” href="https://www.yogasouladventures.in/" />
    <meta name="distribution" content="global" />
    <meta name="company" content="yogasouladventures.in" />
    <meta name="copyright" content="copyright © yogasouladventures.in" />
    <meta name="revisit-after" content="10 days" />
    <meta name="document-classification" content="yogasouladventures.in" />
    <meta name="author" content="Yoga Soul Adventures">

    <!-- CSS FILES -->

    <?php require('include/links.php') ?>

    <style>
        .hero-section {
            background-image: url(<?php echo $backgroundImage ?>), linear-gradient(#348CD2, #FFFFFF) !important;
        }
    </style>

</head>

<body>

    <main>
        <?php require('include/header.php') ?>


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white text-shadow">
                                <?php echo $location1['location'] ?>

                            </h1>

                            <p class="text-white text-shadow">Our Tours in
                                <?php echo $location1['location'] ?>.
                            </p>

                        </div>

                        <?php require('include/locationSliderInLocations.php') ?>


                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-5 col-12">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">About
                                    <?php echo $location1['location'] ?>
                                </h4>
                            </div>
                        </div>


                        <p class="">Our Tours in
                            <?php echo $location1['about'] ?>.
                        </p>



                    </div>

                </div>
            </div>

        </section>

        <?php require('include/ourToursInLocation.php') ?>

        <?php require('include/contactDetails.php') ?>

        <?php require('include/placesToVisit.php') ?>

        <?php require('include/thingsToDo.php') ?>

        <?php require('include/ourLocations.php') ?>



    </main>

    <?php require('include/footer.php') ?>

    <?php require('include/scripts.php') ?>


</body>

</html>