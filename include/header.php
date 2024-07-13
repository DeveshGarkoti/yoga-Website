
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="index.php">
            <!-- yogaSoulAdventures -->
        <img src="./images\yoga-soul-adventures-logo.png" class="logo-image img-fluid" alt="Yoga soul adevntures Logo ">

        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link text-shadow" href="index.php">Home</a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link text-shadow" href="about.php">About us</a>
                </li>   


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-shadow" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Tour Packages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li>
                            <a class="dropdown-item " href="Tours-Pakages-in-Uttarakhnad.php"> <strong>All Packages </strong>  </a>
                        </li>
                        <?php foreach ($our_Tours as $tour) { ?>

                            <li><a class="dropdown-item" href=<?php echo $tour['pageLink'] ?>>
                                    <?php echo $tour['nameOfTour'] ?> 
                                </a></li>
                        <?php } ?>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-shadow" href="locations.php" id="navbarLightDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li>
                            <a class="dropdown-item " href="locations.php"> <strong>All Destinations</strong>  </a>
                        </li>
                        <?php foreach ($locations as $location) { ?>

                            <li><a class="dropdown-item" href=<?php echo $location['pageLink'] ?>>
                                    <?php echo $location['location'] ?>

                                </a></li>
                        <?php } ?>

                    </ul>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link text-shadow" href="contact.php">Contact us</a>
                </li>

            </ul>


        </div>
    </div>
</nav>