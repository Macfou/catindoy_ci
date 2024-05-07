<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Catindoy Clinic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url() ?>" class="navbar-brand p-0">
                    <h1 class="m-0">Catindoy Clinic</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About Us</a>
                        <a href="#feature" class="nav-item nav-link">Announcement</a>
                        <a href="#pricing" class="nav-item nav-link">Services</a>
                       
                        <a href="#contact" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="#appointment" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Book Appointment</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Have a GREAT SMILE</h1>
                            <p class="text-white pb-3 animated slideInDown">Empowering smiles through compassionate care, innovative treatments, and personalized attention, ensuring lifelong oral health and confidence in every patient we serve.</p>
                            <h1 class="text-white mb-4 animated slideInDown">Book your smile journey today! Your confident grin starts with a simple click. Schedule your dental bliss now!!!</h1>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="<?= base_url('img/clinic1.jpg') ?>" alt="">
                                <img class="img-fluid" src="<?= base_url('img/clinic2.jpg') ?>" alt="">
                                <img class="img-fluid" src="<?= base_url('img/clinic3.jpg') ?>" alt="">
                                <img class="img-fluid" src="<?= base_url('img/clinic4.jpg') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="<?= base_url('img/yellow1.jpg') ?>" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h5 class="text-primary-gradient fw-medium">Do you have yellow teeth?</h5>
                <h1 class="mb-4">WE LOVE TO MAKE YOU SMILE</h1>
                <p class="mb-4">Good News! We give a discount for those of you who want to whiten your teeth.</p>
                <div class="row g-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <a href="#" class="d-flex bg-primary-gradient rounded py-3 px-4">
                            <div class="ms-3">
                                <p class="text-white mb-0">Discount!</p>
                                <h5 class="text-white mb-0">75% OFF</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">About Catindoy Clinic</h5>
                        <h1 class="mb-4">#1 Clinic in West Rembo</h1>
                        <p class="mb-4">Transforming oral health by providing exceptional care, advanced technology, and personalized solutions. We envision a community where every smile radiates confidence and vitality, fostering a lifetime of well-being and happiness.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <div class="ms-3">
                                        <h2>Dr. Marcella Ebojo Catindoy</h2>
                                        <p class="text-primary-gradient mb-0">Clinic Owner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <div class="ms-3">
                                        <h2>Dr. Karlleon Pelayo</h2>
                                        <p class="text-secondary-gradient mb-0">Clinic Administrator</p>

                                       
                                    </div>
                                </div>
                            </div>
                            <h3>For Our Map Location</h3>
                            <a href="https://www.google.com/maps/place/Catindoy+Dental/@14.5620015,121.058716,17z/data=!3m1!4b1!4m6!3m5!1s0x3397c90982bd1a35:0xaff07649d8e57745!8m2!3d14.5619963!4d121.0612909!16s%2Fg%2F11v6d6r3n0?entry=ttu">Click Here!!</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="<?= base_url('img/logo1.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Announcement Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Clinic Announcements</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div style="width: 60px; height: 60px;"></div>
                            <h5 class="mb-3">April 1, 2024</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div style="width: 60px; height: 60px;"></div>
                            <h5 class="mb-3">August 23, 2025</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div style="width: 60px; height: 60px;"></div>
                            <h5 class="mb-3">March 30, 2026</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Announcement End -->

        <!-- Process Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium"> Book an Appointment Now! </h5>
                    <h1 class="mb-5">Here are the 3 Steps</h1>
                </div>
                <div class="row gy-5 gx-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-address-card fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Step 1</h5>
                            <p class="mb-0">Fill Up the following informations given in the form. After completing to fill up the form, you will receive an email if your appointment is approved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-address-card fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Step 2</h5>
                            <p class="mb-0">After receiving an Email, Click the confirm button and you will receive an email </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-check fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Step 3</h5>
                            <p class="mb-0">Take a screenshot of your email to be present in the clinic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->

        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Catindoy</h5>
                    <h1 class="mb-5">Dental Services and Promos</h1>
                </div>
                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center bg-primary-gradient rounded-pill mb-5">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="pill" href="#tab-1">Services</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="pill" href="#tab-2">Promos</button>
                        </li>
                    </ul>
                    <div class="tab-content text-start">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Dental Checkups</h4>
                                            <span> Comprehensive exams for proactive oral health maintenance</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>00.00<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">Free</small>
                                            </h1>
                                            
                                            <a href="#appointment" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Tooth Extraction</h4>
                                            <span>Surgical removal of a tooth due to various dental issues.</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>500.00-1000.00<small
                                                    ></small>
                                            </h1>
                                           
                                            <a href="#appointment" class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Teeth Whitening</h4>
                                            <span>Whitening of teeth</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>1000.00<small
                                                ></small>
                                            </h1>
                                            
                                           
                                            <a href="#appointment" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade p-0">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Promo 1</h4>
                                            <span>Description</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>114.00<small
                                                    ></small>
                                            </h1>
                                           
                                            <a href="#appointment" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Promo 2</h4>
                                            <span>Description</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>124.99<small
                                                   ></small>
                                            </h1>
                                           
                                            <a href="#appointment" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Promo 3</h4>
                                            <span>Description</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>134.99<small
                                                    ></small>
                                            </h1>
                                           
                                            <a href="#appointment" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->

        <!-- Feedback Start -->
        
                    
                 
        <!-- Testimonial End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Contact Us Now!</h5>
                    <h1 class="mb-5">Get In Touh in Catindoy Dental!</h1>
                    <div class="mt-2 p-4 text-center">
      <h6 class="mb-0">Your feedback help us to improve.</h6>
      <small class="px-3">Please let us know about your experience.</small>
      <div class="d-flex flex-row justify-content-center mt-2">
    <img class="emoji" src="https://img.icons8.com/emoji/48/000000/angry-face-emoji--v2.png" onclick="showText('angry')"/>
    <img class="emoji" src="https://img.icons8.com/fluent/48/000000/sad.png" onclick="showText('sad')"/>
    <img class="emoji" src="https://img.icons8.com/color/48/000000/happy.png" onclick="showText('happy')"/>
    <img class="emoji" src="https://img.icons8.com/emoji/48/000000/smiling-face.png" onclick="showText('smiling')"/>
    <img class="emoji" src="https://img.icons8.com/color/48/000000/lol.png" onclick="showText('lol')"/>
</div>

<div id="emotionText" class="mt-2 text-center" style="display: none;">
    <!-- Placeholder for the text corresponding to the clicked emotion -->
</div>

<script>
    function showText(emotion) {
        var textElement = document.getElementById("emotionText");
        var textToShow = "";

        // Determine the text to show based on the clicked emotion
        switch(emotion) {
            case 'angry':
                textToShow = "Feeling angry!";
                break;
            case 'sad':
                textToShow = "Feeling sad :(";
                break;
            case 'happy':
                textToShow = "Feeling happy :)";
                break;
            case 'smiling':
                textToShow = "Smiling all the way!";
                break;
            case 'lol':
                textToShow = "LOL, feeling great!";
                break;
            default:
                console.error('Unknown emotion');
        }

        // Update the text and display it
        textElement.innerText = textToShow;
        textElement.style.display = "block";
    }
</script>

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">For your Inquiries and Comments</a></p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Appointment Start-->
        <div class="container-xxl py-5" id="appointment">
            <div class="row py-5">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2> Book  Appointment Now!</h2>
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Full Name</label>
                                        <input id="name" name="name" type="text" placeholder="Juan Dela Cruz" class="form-control input-md">
                                    </div>
                                </div>

                               
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="mobile">Mobile No.</label>
                                        <input id="email" name="email" type="text" placeholder="eg.09939243956" class="form-control input-md">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="address">Address</label>
                                        <input id="email" name="email" type="text" placeholder="3120 J.P Rizal Ext Makati" class="form-control input-md">
                                    </div>
                                </div>
                                
                                <!-- Date input-->
                                <div class="col-md-6">
    <div class="form-group">
        <label class="control-label" for="date">Preferred Date</label>
        <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
    </div>
</div>

<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="08:00 - 08:30">08:00 - 08:30</option>
                                            <option value="08:30 - 09:00">08:30 - 09:00</option>
                                            <option value="09:00 - 09:30">09:00 - 09:30</option>
                                            <option value="09:30 - 10:00">09:30 - 10:00</option>
                                            <option value="10:00 - 10:30">10:00 - 10:30</option>
                                            <option value="10:30 - 11:00">10:30 - 11:00</option>
                                            <option value="11:00 - 11:30">11:00 - 11:30</option>
                                            <option value="11:30 - 12:00">11:30 - 12:00</option>
                                            <option value="12:00 - 12:30">12:00 - 12:30</option>
                                            <option value="12:30 - 01:00">12:30 - 01:00</option>
                                            <option value=">01:00 - 01:30">01:00 - 01:30</option>
                                            <option value="01:30 - 02:00">01:30 - 02:00</option>
                                            <option value="02:30 - 03:00">02:30 - 03:00</option>
                                            <option value="03:00 - 03:30">03:00 - 03:30</option>
                                            <option value="03:30 - 04:00">03:30 - 04:00</option>
                                            <option value="04:00 - 04:30">04:00 - 04:30</option>
                                            <option value="04:30 - 05:00">04:30 - 05:00</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="service">Service</label>
                                        <select id="service" name="service" class="form-control">
                                            <option value="Service#1">Service#1</option>
                                            <option value="Service#2">Service#2</option>
                                            <option value="Service#3">Service#3</option>
                                            <option value="Service#4">Service#4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="promo">Promo</label>
                                        <select id="promo" name="promo" class="form-control">
                                            <option value="Service#1">Service#1</option>
                                            <option value="Service#2">Service#2</option>
                                            <option value="Service#3">Service#3</option>
                                            <option value="Service#4">Service#4</option>
                                        </select>
                                    </div>
                                </div>

                                <p class="amount-payabale">Amount Payable:</p>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn-default">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Why Appointment with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End-->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Address</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>J.p Rizal Ext. West Rembo Makati</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>catindoy@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                  
                
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            
							
						
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>


    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ?>"></script>

</body>