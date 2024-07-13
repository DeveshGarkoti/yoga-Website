<!doctype html>
<html lang="en">

<?php require('./data.php') ?>
<?php $tourPackage1 = $tour_Package_Chardham_Budget ?>
<?php $backgroundImage = $tourPackage1['backGround-Image'] ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- +++++++++++++++++++++++++ Meta Header for Hotel ++++++++++++++++++++++++++ -->
    <title>
        <?php echo  $tourPackage1['nameOfTour']  ?>
    </title>
    <meta name="keywords" content=<?php echo  '"' . $tourPackage1['metaKeyword']  . '"' ?>>

    <meta name="description" content=<?php echo '"' . substr($tourPackage1['metaDescription'], 0, 160) . '"' ?>>


    <meta name="Owner" content="Yoga Soul Adventures" />
    <meta name="classification" content="global" />
    <meta name="Uttarakhand Tour and Yoga operator" content="General" />
    <meta name="subject" content="Uttarakhand Tour and Yoga operator" />
    <meta name="page-type" content="content" />
    <meta name="audience" content="all" />
    <meta name="robots" content="all" />
    <link rel="canonical" href="https://www.yogasouladventures.in/" />
    <meta name="distribution" content="global" />
    <meta name="company" content="yogasouladventures.in" />
    <meta name="copyright" content="copyright © yogasouladventures.in" />
    <meta name="revisit-after" content="10 days" />
    <meta name="document-classification" content="yogasouladventures.in" />
    <meta name="author" content="Yoga Soul Adventures">
    <!-- CSS FILES -->
    <?php require('include/links.php') ?>


    <style>
        .site-header {
            background-image: url(<?php echo $backgroundImage ?>), linear-gradient(#15212b, #FFFFFF) !important;
        }
    </style>


</head>

<body>

    <main>
        <?php require('include/header.php') ?>

        <?php require('include/TourHeader.php') ?>

        <?php require('include/placesInTourPackage.php') ?>

        <?php require('include/tourGallery.php') ?>

        
        <?php require('include/contactDetails.php') ?>















        <?php require('include/ourLocations.php') ?>


    </main>

    <?php require('include/footer.php') ?>

    <?php require('include/scripts.php') ?>



</body>

</html>