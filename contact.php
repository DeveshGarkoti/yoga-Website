<!doctype html>
<html lang="en">
<?php require('data.php') ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YogaSoul Adventures - Contact Page</title>

    <meta name="description" content="YogaSoul Adventures  Contact page">
    <meta name="keywords"
        content="YogaSoul Adventures , Best Hotels in Uttarakhand, Budget hotels in haridwar, Affordable hotel in chardham, Luxury hotel in Rishikesh, Best hotel in Badrinath, Best hotel in Joshimath ">


        <meta name="Owner" content="Yoga Soul Adventures" />
    <meta name="classification" content="global" />
    <meta name="Uttarakhand Tour and Yoga operator" content="General" />
    <meta name="subject" content="Uttarakhand Tour and Yoga operator" />
    <meta name="page-type" content="content" />
    <meta name="audience" content="all" />
    <meta name="robots" content="all" />
    <link rel=“canonical” href="https://www.https://yogasouladventures.in/" />
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


        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">

                        <h2 class="mb-0  text-shadow">Contact Page</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="section-padding" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-5 col-12 pe-lg-5">
                        <div class="contact-info">
                            <h3 class="mb-4">We love to help you. Get in touch</h3>
                            <p  class="d-flex border-bottom pb-3 mb-4">
                                <strong class="d-inline me-4">Phone:</strong>
                                <a target=”_blank”  href="tel:+91-9720896645">
                                    +91-9720896645</a></p>
                            <p  class="d-flex border-bottom pb-3 mb-4">
                                <strong class="d-inline me-4">Phone:</strong>
                                <a target=”_blank”  href="tel:+1-845-444-6798">
                                    +1-845-444-6798</a></p>
                            
                            <p class="d-flex border-bottom pb-3 mb-4">
                                <strong class="d-inline me-4">Email:</strong>
                                <a href="mailto:YogaSoulAdventures@gmail.com">YogaSoulAdventures@gmail.com</a>
                            </p>

                            <p class="d-flex">
                                <strong class="d-inline me-4">Location:</strong>
                                <span>Vasundra Enclave (249401), Uttarakhand, India</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                        <img src="./images/about.jpg" class="about-image  img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding pt-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Contact Form</h4>
                        </div>

<form onsubmit="sendEmail()" return false;  method="post" class="custom-form contact-form" role="form">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-floating">
                <input type="text" name="full-name" id="full-name" class="form-control"
                    placeholder="Full Name" required>

                <label for="floatingInput">Full Name</label>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-floating">
                <input type="number" name="mobile-number" id="mobile-number" class="form-control"
                    placeholder="Full Name" required>

                <label for="floatingInput">Mobile No.</label>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-floating">
                <input type="number" name="total-persons" id="total-persons" class="form-control"
                    placeholder="2.." required>

                <label for="floatingInput">No. of Persons</label>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-floating">
                <input type="date" name="date" id="date" class="form-control"
                    placeholder="2.." required>

                <label for="floatingInput">Date</label>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-floating">
                <input type="text" name="Destination" id="Destination" class="form-control"
                    placeholder="Uttarakhand" required>

                <label for="floatingInput">Destination</label>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-floating">
                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                    class="form-control" placeholder="Email address" required>

                <label for="floatingInput">Email address</label>
            </div>
        </div>

        <div class="col-lg-12 col-12">
            <div class="form-floating">
                <input type="text" name="company" id="name" class="form-control"
                    placeholder="Name">

                <label for="floatingInput">Company</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" id="message" name="message"
                    placeholder="How Can we help you"></textarea>

                <label for="floatingTextarea">How Can we help you</label>
            </div>
        </div>

        <div class="col-lg-4 col-12 ms-auto">
            <button type="submit" class="form-control">Submit</button>
        </div>

    </div>
</form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php require('include/footer.php') ?>


    <?php require('include/scripts.php') ?>

<script src="https://smtpjs.com/v3/smtp.js
" ></script>

<script>
    function sendEmail(){
        Email.send({
            Host : "smtp.gmail.com",
            Username : "yogasouladventure@gmail.com",
            Password : "password",
            To : 'yogasouladventure@gmail.com',
            From : "you@isp.com",
            Subject : "This is the subject",
            Body : "And this is the body"
        }).then(
        message => alert(message)
        );
    }
</script>


</body>

</html>