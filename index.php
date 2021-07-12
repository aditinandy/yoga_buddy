<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="aos.css" />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- it will load fast so i have pasted in file -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/commonstyle.css" />
    <title>YogaBuddyz</title>
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
<?php

include 'db.php';

if(isset($_POST['submit'])){
    $cfname = mysqli_real_escape_string($con, $_POST['cf-name']);
    $cfemail = mysqli_real_escape_string($con, $_POST['cf-email']);
    $cfcomm = mysqli_real_escape_string($con, $_POST['cf-messgae']);

    $insertquery = "INSERT INTO review (cfname, cfemail, cfmessgae) VALUES ('$cfname','$cfemail','$cfcomm')";

            if(mysqli_query($con, $insertquery)){
                ?>
                <script>
                    alert("Inserted successful");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("No Inserted");
                </script>
                <?php
            }

}

?>

    <!---Top Bar
    <section id="topbar" class=" d-lg-block  ">
        <div class="container d-flex ">
            <div class="contact-info mr-auto">
                <i class="fas fa-envelope"></i>
                <a href="">info@gmail.com</a>
                <i class="fas fa-phone"></i> <span style="color:white">+ 91 6360144518</span>
            </div>
            <div class="social-links">
                <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>

    -End of Top Bar-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg sticky-top  animated fadeInUp" id="myNavbar">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Yoga<span style="color: #0399f0;">Buddyz</span></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav"
                aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span> <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="yoga class schedule.html"class="nav-link">Yoga Class Schedule</a>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Programmes & Courses
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="trainerlist.html">Consulation with our trainers</a>
                            <a class="dropdown-item" href="onlineevent.html">Online events</a>
                            <a class="dropdown-item" href="#">Yoga Aasan</a>
                            <a class="dropdown-item" href="blog.html">Blog</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallary.html" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a href="signup.html" class="nav-link ">Signup</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <!--End of Navbar-->
    <!--Hero Section-->
    <div class="container-fluid">
        <div class="row">
            <div class="col no-padding">
                <div id="hero-slider" class="carousel slide" data-ride="carousel">
                    <!------>
                    <div class="carousel-inner">
                        <div class="carousel-item slide-1 active">
                            <div class="carousel-caption  d-md-block">
                                <h5 class="animated flipInX " style="animation-delay: 1s;">Learn Together</h5>
                                <p class="animated bounceInLeft" style="animation-delay: 2s;">Meet Your New Home Yoga
                                    Tutor.
                                </p>
                                <p class="join"><a href="">Join us</a>
                                </p>
                            </div>
                        </div>
                        <!----->
                        <div class="carousel-item slide-2">
                            <div class="carousel-caption  d-md-block">
                                <h5 class="animated slidInDown" style="animation-delay: 1s;"> Learn Yoga</h5>
                                <p class="animated bounceIn" style="animation-delay: 1s;">Practice with world-class Yoga
                                    teachers in your comfortzone.</p>
                                <p class="animated bounceIn" style="animation-delay: 1s;"> <a href="">Join us</a></p>
                            </div>
                        </div>
                        <!----->
                        <div class="carousel-item slide-3">
                            <div class="carousel-caption  d-md-block">
                                <h5 class="animated zoomIn" style="animation-delay: 1s;">Learn Yoga</h5>
                                <p class="animated fadeInLeft" style="animation-delay: 2s;">Stay connected from the
                                    comfort
                                    of your home to an ever expanding range of live streamed kirtans, yoga wisdom talks,
                                    yoga asana classes, and deep peace meditation..</p>
                                <p class="animated zoomIn" style="animation-delay: 3s;"><a href="">Join us</a></p>
                            </div>
                        </div>
                        <!----->
                    </div>
                    <a href="#hero-slider" class="carousel-control-prev" role="button" data-slide="prev">
                        <i class="fas fa-arrow-circle-left"></i>

                    </a>
                    <a href="#hero-slider" class="carousel-control-next" role="button" data-slide="next">
                        <i class="fas fa-arrow-circle-right"></i>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <!---End of Hero Section-->




    <!-- Welcome Section -->

    <section class="home-about spad" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home_about_pic">
                        <div class="home_about_pic_item large-item set-bg" data-setbg="image/about-1.jpg" data-aos="fade-up"
                            data-aos-delay="300"></div>
                        <div class="home_about_pic_item">
                            <div class="home_about_pic_item_inner set-bg" data-setbg="image/about-2.jpg" data-aos="fade-up"
                                data-aos-delay="400"></div>
                            <div class="home_about_pic_item_inner set-bg" data-setbg="image/about-3.jpg" data-aos="fade-up"
                                data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_about_text" data-aos="fade-up" data-aos-delay="300">
                        <div class="section-title">
                            <h2>Welcome to <br>YogaBuddyz</h2>
                        </div>
                        <span>"What hurts today makes you stronger tomorrow."</span>
                        <p>Yoga is the most favourable method to connect to the nature by balancing the mind-body connection. It is a type of exercise which performed through the balanced body and need to get control over diet, breathing, and physical postures.
                         It is associated with the meditation of body and mind through the relaxation of body</p>
                        <p class="para-2">
                         Yoga is not a singular entity. It is synchronization between the body, mind, and one’s spiritual conscience. Yoga originated in India during the Indus valley civilization. Yoga first appeared in Vedic texts between 500 BCE to 200 BCE.
                          The act of yoga has immeasurable benefits for both body and the mind </p>
                            <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up"
                                data-aos-delay="400">More About Us &rarrhk;</a>
                       
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Welcome Section Ends -->





    <!---what we do section -->

    <div class="service wow">
        <div class="container">
            <div class="section-header text-center">
                <p>How Yogabuddyz will help you?</p>
                <h2>Yoga For Health</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout"></i>
                        </div>
                        <h3>Heal emotions</h3>
                        <p>
                            The wounded mind must be reset like a fractured bone. It cannot heal itself without
                            spiritual
                            realignment.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-1"></i>
                        </div>
                        <h3>Body Refreshes</h3>
                        <p>
                            You can't change who you are, but you can change what you have in your head.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-2"></i>
                        </div>
                        <h3>Mind & Serenity</h3>
                        <p>
                            Serenity is not freedom from the storm, but peace amid the storm fjbvjbvsjdbhsbf.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-3"></i>
                        </div>
                        <h3>Enjoy Your life</h3>
                        <p>
                            The reason I exercise is for the quality of life I enjoy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-4"></i>
                        </div>
                        <h3>Body & Spirituality</h3>
                        <p>
                            Positive thoughts revive the spirit, restore the soul and make the body healthy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-yoga-pose"></i>
                        </div>
                        <h3>Body & Mind</h3>
                        <p>
                            Exercise is a celebration of what your body can do. Not a punishment for what you ate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- what we do End -->








    <!-- Upcoming Events -->
    <section class="event-section spad bg-light" id="event">
        <div class="container">
            <div class="section-title text-center">
                <h2>Upcoming Events</h2>
                <p>Have a balance of perfect body and calm soul.</p>
            </div>
            <div class="row">
                <div class="col-xl-6 mt-3">
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="image/event-2.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Yoga Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Nilay Hirpara</li>
                                <li><i class="material-icons">event_available</i>28 June, 2021</li>
                                <li><i class="material-icons">map</i>909 De Villa Resto</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="image/event-3.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Aerobics Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Nilay Hirpara</li>
                                <li><i class="material-icons">event_available</i>15 January, 2021</li>
                                <li><i class="material-icons">map</i>TGB HALL Vesu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="image/event-4.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Karate Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Nilay Hirpara</li>
                                <li><i class="material-icons">event_available</i>21 June, 2021</li>
                                <li><i class="material-icons">map</i>Orange Hall</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-3">
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="image/event-2.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Yoga Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Nilay Hirpara</li>
                                <li><i class="material-icons">event_available</i>28 June, 2021</li>
                                <li><i class="material-icons">map</i>909 De Villa Resto</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="image/event-3.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Aerobics Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Nilay Hirpara</li>
                                <li><i class="material-icons">event_available</i>15 January, 2021</li>
                                <li><i class="material-icons">map</i>TGB HALL Vesu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="image/event-4.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Karate Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Nilay Hirpara</li>
                                <li><i class="material-icons">event_available</i>21 June, 2021</li>
                                <li><i class="material-icons">map</i>Orange Hall</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Events ends -->

    <!-- Our Team Starts -->

    <section class="our-team-area section-padding-80-50" id="team">
        <div class=" container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-aos="fade-up" data-aos-delay="200">

                        <h2>Our Team</h2>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="image/19.jpg" alt="">
                        </div>
                        <h5>Priyanka Patel</h5>
                        <span>Instructor</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="image/20.jpg" alt="">
                        </div>
                        <h5>Radhika Patel</h5>
                        <span>Coach</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="image/21.jpg" alt="">
                        </div>
                        <h5>Mayuri Patel</h5>
                        <span>Manager</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member-thumb">
                            <img src="image/22.jpg" alt="">
                        </div>
                        <h5>Nilay Hirpara</h5>
                        <span>Trainer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Team ends -->

    <!-- ***********Our pricing section ********* -->

    <section class="our-pricing" id="pricing">
        <div class="container pricing-div">
            <h2 class="text-center">PRICING PLANS</h2>
        </div>
        <div class="container">
            <div class="row pricing-card">
                <div class="col-12 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">BASIC</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(1500/-)</h6>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa libero expedita esse!
                                Maiores ipsam esse eos soluta unde iure delectus ex id laboriosam iste ad est, ullam
                                magni et voluptatibus.
                            </p>
                            <div class="card-button">
                                <a href="#" class="card-link">BUY</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card standard">
                        <div class="card-body">
                            <h5 class="card-title">STANDARD</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2500/-)</h6>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptas maxime deserunt
                                suscipit, possimus ea dicta aliquam, mollitia harum ullam odio optio, voluptates fuga
                                ipsa tenetur excepturi aut? Voluptatibus incidunt, saepe praesentium facere minus
                                laborum quod blanditiis, voluptates velit placeat earum eos sit maxime dolores ut quia
                                molestiae ducimus asperiores!

                            </p>
                            <div class="card-button">
                                <a href="#" class="card-link">BUY</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">PRO</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(3000/-)</h6>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam unde porro vitae
                                aperiam, quidem voluptates, laboriosam ad vero ex in tempore amet dignissimos deleniti
                                maxime! Consequuntur praesentium mollitia, porro illum iusto ipsa laudantium vitae
                                nesciunt eum, sint ex distinctio aperiam.

                            </p>
                            <div class="card-button">
                                <a href="#" class="card-buttons">BUY</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    

    <!-- COntact us starts-->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4 pb-2" data-aos="fade-up"
                        data-aos-delay="200">
                        Feel Free to ask anything
                    </h2>

                    <form action="<?php $_PHP_SELF ?>" method="POST" class="contact-form webform" data-aos-delay="400" data-aos="fade-up"
                        role="form">


                        <input type="text" name="cf-name" class="form-control" placeholder="Name">
                        <input type="email" name="cf-email" class="form-control" placeholder="Emails">
                        <textarea name="cf-messgae" rows="5" class="form-control" placeholder="Message"></textarea>
                        <button type="submit" class="form-control" id="submit-button" name="submit">Send
                            Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4" data-aos="fade-up"
                        data-aos-delay="600">
                        Where you can <span>find us</span>
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="800">
                        <i class="fa fa-map-marker mr-1"></i> The Estate Building, The Estate, 8th Floor, Dickenson Road, Banglore, Karnataka - 560042,
India
                    </p>
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.122425043779!2d72.7575831148854!3d21.14752568593414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d80f5d96493%3A0x5f79790a213bd724!2sLuxuria%20Business%20Hub!5e0!3m2!1sen!2sin!4v1600443256886!5m2!1sen!2sin"
                            width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us  ends-->
<!---FAQ-->
    
<section id="faq" class="faq section-bg pt-5">
	<div class="container">

	  <div class="section-title">
		<h2>FREQUENTLY ASKED QUESTIONS</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim blanditiis nemo doloribus porro dolorem totam, dicta ipsa voluptas. Natus reprehenderit consequuntur vitae labore ab, similique aut ducimus eveniet eos accusantium? </p>
	  </div>

	  <div class="faq-list">
		<ul>
		  <li>
			<i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">How could someone find their preferred style? <i class="fas fa-chevron-down icon-show"></i>
				<i class="fas fa-chevron-up icon-close"></i></a>
			<div id="faq-list-1" class="collapse show" data-parent=".faq-list">
			  <p>
          To find your preferred yoga style you should decide what is your intention with yoga and simply try as many classes as you need to.
			  </p>
			</div>
		  </li>

		  <li>
			<i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">What are the costs for providing the services? <i class="fas fa-chevron-down icon-show"></i><i class="fas fa-chevron-up icon-close"></i></a>
			<div id="faq-list-2" class="collapse" data-parent=".faq-list">
			  <p>
          Different services are charged solely as per their structure and design and further details are giving to you directly by carpenter himself. dear customers.
			  </p>
			</div>
		  </li>

		  <li>
			<i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Do you provide equipments also? <i class="fas fa-chevron-down icon-show"></i><i class="fas fa-chevron-up icon-close"></i></a>
			<div id="faq-list-3" class="collapse" data-parent=".faq-list">
			  <p>
          Woods and other equipments are also available if you demanded any other wise you must purchased from market.
			  </p>
			</div>
		  </li>

		  <li>
			<i class="far fa-question-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Do want to learn at your own pace? <i class="fas fa-chevron-down icon-show"></i><i class="fas fa-chevron-up icon-close"></i></a>
			<div id="faq-list-4" class="collapse" data-parent=".faq-list">
			  <p>
          Live practice per week with your Yoga Buddyz.</p>

			</div>
		  </li>

		 

		</ul>
	  </div>

	</div>
  </section>
  <!-- End F.A.Q Section -->
      <!---End of FAQ-->
    <!-- footer starts -->

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer_about">
                        <span>YogaBuddyz</span>
                        <ul>
                            <li>
                                <i class="fa fa-clock-o"></i> Mon - Fri : 08:30am - 09:00pm
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i> Sat - Sun : 08:30am - 01:30pm
                            </li>
                        </ul>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Your Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h5>Inspiration</h5>
                        <ul>
                            <li><a href="#">Yoga</a></li>
                            <li><a href="#">Spiritual</a></li>
                            <li><a href="#">Karate</a></li>
                            <li><a href="#">Aerobics</a></li>
                            <li><a href="#">Medetation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Introduce</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h5>Contact Us</h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i>999999999</li>
                            <li><i class="fa fa-envelope"></i>YogaBuddyz@gmail.com</li>
                            <li><i class="fa fa-location-arrow"></i>Banglore, Karnataka - 560042,India</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer_copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer_copyright_text">
                            <p>Copyright &copy; 2020 YogaBuddyz- All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer_copyright_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer ends -->












    <!-- Clients Feedback -->
    <!-- *******students-feedback************** -->
    <!-- <style>
        .student-feedback .smallheader h2 {

            font-size: 60px;
            font-weight: 700;
            line-height: 1.1;
            font-family: "Barlow Condensed", sans-serif;
            text-transform: uppercase;


        }
    </style>

    <section class="student-feedback">
        <div class="container text-center smallheader">
            <h2 clas="text-center">OUR Clients Feedback</h2>

        </div>
        <div class="container feedback-body my-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <style>
                    .feedback-container h4 {
                        color: #000;

                    }
                </style>
                <div class="carousel-inner container feedback-container">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis repudiandae maxime
                                    accusantium, nemo distinctio tenetur, sequi repellendus unde impedit alias commodi
                                    eaque vitae sapiente totam ducimus odio, quibusdam hic quisquam.</p>
                                <h4>Name</h4>
                                <p class="salutation">Profession</p>
                            </div>
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis repudiandae maxime
                                    accusantium, nemo distinctio tenetur, sequi repellendus unde impedit alias commodi
                                    eaque vitae sapiente totam ducimus odio, quibusdam hic quisquam</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="about-1.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                            <div class="col-12 col-sm-4 box">
                                <a href="#"><img src="a.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                <p>The course was pretty well structured. Learning to code at coding blocks is amazing
                                    because of the task given by the mentor. If you have done all the task by yourself
                                    then you are good to go to face the real world with you skill</p>
                                <h4>GAURAV THAKUR</h4>
                                <p class="salutation">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section> -->




    <!-- Clients Feedback End -->

    <!-- section 5 starts -->

    <!-- <section class="class section style-cards" id="class">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up">Get a Perfect Body</h6>
                    <h1 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h1>
                </div>

                <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="desc-3">
                        <h3 class="mb-2">Yoga Training</h3>
                        <p>
                            The word “Yoga” essentially means, “that which brings you to reality”. Literally, it means
                            “union.” Union means it
                            brings you to the ultimate reality, where individual manifestations of life are surface
                            bubbles in the process of
                            creation.
                        </p>
                    </div>
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="Pexels Videos 2790143.mp4">
                    </video>
                </div>
                <div class="card-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="production ID_4612365.mp4">
                    </video>

                    <div class="desc-2">
                        <h3 class="mb-2">Cardio Training</h3>
                        <p>
                            Cardio Yoga is a type of yoga class that combines Yoga moves with cardiovascular exercises.
                            The workout takes classic
                            yoga moves and makes them a bit faster, with a more rapid flow between sequences.
                            The non-stop movement gets your heart beating and your muscles burning.
                        </p>
                    </div>
                </div>
                <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="desc-3">
                        <h3 class="mb-2">Yoga Training</h3>
                        <p>
                            "Meditation, which is the practice of focused concentration, bringing yourself back to the
                            moment over and over again,
                            actually addresses stress, whether positive or negative." Meditation can also reduce the
                            areas of anxiety, chronic pain,
                            depression, heart disease and high blood pressure.
                        </p>
                    </div>
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="1.mp4">
                    </video>
            </div>
        </div>
    </section> -->

    <!-- section 5 ends -->


    <!-- section 6 starts -->
    <!-- <section class="classtime-section class-time-table spad" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Classtime Table</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timetable-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">all class</li>
                            <li data-tsfilter="Yoga">Yoga</li>
                            <li data-tsfilter="Aerobics">Aerobics</li>
                            <li data-tsfilter="Wushu">Wushu</li>
                            <li data-tsfilter="Karate">Karate</li>
                            <li data-tsfilter="Medetation">Medetation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="workout-time">10:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>10:00 - 14:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>10:00 - 15:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>10:00 - 13:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>10:00 - 13:30</span>
                                <h6>Aerobics</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">14:00</td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>14:00 - 17:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>14:00 - 17:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>14:00 - 15:30</span>
                                <h6>Karate</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">16:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>16:00 - 18:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Medetation">
                                <span>16:00 - 19:00</span>
                                <h6>Medetation</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Medetation">
                                <span>16:00 - 19:00</span>
                                <h6>Medetation</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>16:00 - 17:00</span>
                                <h6>Wushu</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>16:00 - 20:00</span>
                                <h6>Wushu</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">18:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>18:00 - 20:00</span>
                                <h6>Karate</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>18:00 - 20:00</span>
                                <h6>Wushu</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>18.00 - 22.00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>18:00 - 22:00</span>
                                <h6>Wushu</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">20:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>21:00 - 23:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>20:00 - 22:00</span>
                                <h6>Karate</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>20:30 - 23:00</span>
                                <h6>Karate</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>22:00 - 23:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>21:00 - 23:00</span>
                                <h6>Yoga</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> -->


    <!-- section 6 ends -->


    <!-- section 7 starts -->



    




    <!-- Membership form starts  -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="membershipFormLabel">
                        Membership Form
                    </h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="membership-form webform" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="John Doe" />

                        <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com" />

                        <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />

                        <textarea class="form-control" rows="3" name="cf-message"
                            placeholder="Additional Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">
                            Submit Button
                        </button>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signup-agree" />
                            <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the
                                <a href="#">Terms &amp;Conditions</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- section 11 ends  -->


    <!-- scripts -->

    <script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.js"></script>
    <script src="script.js"></script>
</body>

</html>
