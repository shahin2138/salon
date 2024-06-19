<?php
session_start();
if (!isset($_SESSION["usname"]) && !isset($_SESSION["upass"])) {
  header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Salon</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary">
        <i class="fa fa-feather-alt me-3"></i>Beautiesuit
      </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="userh.php" class="nav-item nav-link active">Home</a>
        <a href="#about" class="nav-item nav-link">About</a>
        <a href="#service" class="nav-item nav-link">Services</a>
        <a href="#contact" class="nav-item nav-link">Contact</a>
        <a href="appointment.html" class="nav-item nav-link">Book Appointment</a>
        <a href="history.php" class="nav-item nav-link">History</a>
        <a href="logoutu.php" class="nav-item nav-link">Logout</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->


  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid"
          src="https://images.fresha.com/locations/location-profile-images/886960/972702/f40de488-e5e9-4ce8-b44b-d170707af628.jpg?class=width-small"
          alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Best Salon Therapy Here!!
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Royal Beauty Salon
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid"
          src="https://images.fresha.com/locations/location-profile-images/886960/972702/f40de488-e5e9-4ce8-b44b-d170707af628.jpg?class=width-small"
          alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Best Salon Therapy Here!!
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Salon with many different Therapy
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                Elegance is the only beauty that never fades – step into our salon and let your inner radiance shine."

"Where style meets sophistication, our salon is your sanctuary for empowerment and beauty."
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-laugh text-primary mb-4"></i>
              <h5 class="mb-3">Skilled Workers</h5>
              <p>
                Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                amet diam
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-pager text-primary mb-4"></i>
              <h5 class="mb-3">Online Appointments</h5>
              <p>
                Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                amet diam
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-feather text-primary mb-4"></i>
              <h5 class="mb-3">Proper Guidance</h5>
              <p>
                Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                amet diam
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-magic text-primary mb-4"></i>
              <h5 class="mb-3">Several Services</h5>
              <p>
                Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                amet diam
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- About Start -->
  <div class="container-xxl py-5" id="about">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100"
              src="https://media.istockphoto.com/id/611625474/vector/women-hair-style-icon-logo-women-face-on-white-background.jpg?s=612x612&w=0&k=20&c=mg1YgKkVsWNrd1UUxYoie3SCh80deMspZe9lZgGTj8c="
              alt="" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h4 class="section-title bg-white text-start text-primary pe-3">
            About Us
          </h4>
          <h1 class="mb-4">Welcome To Royal Beauty Salon</h1>
          <p class="mb-4">
            A Royal beauty Salon therapist provides their clients with a wide variety of beauty treatments. They might
            do manicures, pedicures, massage therapy, waxing, skin peels, hair treatments, nail extensions and more.
            Beauty therapists interact with their clients constantly and answer their questions about various products
            and care routines.
          </p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Skilled Worker
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Certified Professionals
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Easy Appointment Booking
              </p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Skilled
                Instructors for Customer Care
              </p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Courses Start -->
  <div class="container-xxl py-5" id="service">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

        <h1 class="mb-5">Services</h1>
        <h4 class="section-title bg-white text-center text-primary px-3">
          Starts From
        </h4><br><br>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <!-- Course 1 content -->
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="https://i.pinimg.com/736x/40/9f/c2/409fc24f57998b4f4036b5b88a7904c9.jpg"
                height="10px" width="900px" alt="" />
               
              </div>
             
              <div class=" text-center p-4 pb-0">
              <center>
                <h4 class="mb-4">
                  Nail Therapy Starting From
                </h4>
              </center>
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>

              </div>

            </div>
            <br>
          </div>

        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- Course 2 content -->
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid"
                src="https://a0.anyrgb.com/pngimg/768/1064/exclusive-story-wash-your-face-your-exclusive-smiley-face-beauty-salon-women-face-wash-blue-abstract-blue-flower.png"
                alt="" />

            </div>

            <div class="text-center p-4 pb-0">
              <center>
                <h4 class="mb-4">
                  Skin Therapy Starting From
                </h4>
              </center>
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>

              </div>

            </div>
            <br>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <!-- Course 3 content -->
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="https://i.pinimg.com/474x/7f/16/20/7f16208a1034d022ab35e52ced831ecd.jpg"
                style="object-fit: cover" alt="" />

            </div>

            <div class="text-center p-4 pb-0">
              <center>
                <h4 class="mb-4">
                  Hair Therapy Starting From
                </h4>
              </center>
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>

              </div>

            </div>
            <br>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <!-- Course 4 content -->
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid"
                src="https://t1.pixers.pics/img-1fb6f67c/stickers-woman-relaxing-massage-spa.jpg?H4sIAAAAAAAAA3VOW26EMAy8TpBY7IQ8OcD-7hFQALNNeSpJu1VP36Cqn5U1sj3yeAY-9uRngpH2TBG2ME0rwRzWsqUuUgrfxLA2KKuusCtDxKo7PimO8TjZzdr6gnHiQtW9fBFuPi7sLeczdQCpbc7wVb6VNiYYtwQCuQHUoJzSHEkq55D3u1_WcnlbXn6KPjfn_qzxquovh0Ss5eWfY9hYCXQUq8zez2cF_9j9zlBUcH-AsmAEGA3WXlR_fyhrhNHW9noYuCDSVnvSrbLcSa_VIJTBeTBj2xSXH3c1Nl0tAQAA"
                alt="" />

            </div>

            <div class="text-center p-4 pb-0">
              <center>
                <h4 class="mb-4">
                  Massage Therapy Starting From
                </h4>
              </center>
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>
                <small class="fa fa-star text-warning"></small>

              </div>

            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Courses End -->

  <!-- Categories Start -->
  <div class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title bg-white text-center text-primary px-3">
          Click To Know More
        </h5><br><br>

      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="viewservice.php">
                <img class="img-fluid"
                  src="https://media.istockphoto.com/id/921797424/photo/woman-in-mask-on-face-in-spa-beauty-salon.jpg?s=612x612&w=0&k=20&c=gGSPZOjIS2wcwQyOcjANOKpRVU0KR_iEDbRACnAoIXA="
                  width="660px" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                  <h5 class="m-0">Skin Therapy</h5>

                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="viewservice.php">
                <img class="img-fluid"
                  src="https://daddysdeals.co.za/wp-content/uploads/2022/10/Reflections-Day-Spa.png" width="330px"
                  height="209px" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                  <h5 class="m-0">Massage Therapy</h5>

                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="viewservice.php">
                <img class="img-fluid"
                  src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGJlYXV0eSUyMHNhbG9ufGVufDB8fDB8fHww" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                  <h5 class="m-0">Nail Therapy</h5>

                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
          <a class="position-relative d-block h-100 overflow-hidden" href="viewservice.php">
            <img class="img-fluid position-absolute w-100 h-100"
              src="https://cdn.create.vista.com/api/media/small/424338690/stock-photo-stylist-makes-curls-curling-girl-with-long-brown-hair" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
              <h5 class="m-0">Hair Therapy</h5>

            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories end -->


  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title bg-white text-center text-primary px-3">
          Professionals
        </h5>
        <h1 class="mb-5">Skilled therapists</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="https://beautybyjess.uk/a/img/jessica-headshot.360x360-min.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/shahinshaikh566/"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Professionals Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid"
                src="https://www.m1-beauty.de/files/uploads/landingpages/home/211012_Herobanner_mobile.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/shahinshaikh566/"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Professionals Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="https://brookesspa.co.uk/wp-content/uploads/2022/10/courtney-22.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/shahinshaikh566/"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Professionals Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/team-4.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/shahinshaikh566/"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Professionals Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5" id="contact">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
        <h1 class="mb-5">Contact For Any Query</h1>
      </div>
      <div class="row g-4">


        <center>
          <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
            <form action="contactinsert.php" method="post">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="subject" name="mob" placeholder="Subject">
                    <label for="subject">Mobile No.</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                      style="height: 150px"></textarea>
                    <label for="message">Query</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">Send </button>
                </div>
              </div>
            </form>
          </div>
        </center>
      </div>
    </div>
  </div>
  <!-- Contact End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Quick Link</h4>
          <a class="btn btn-link" href="about.html">About Us</a>
          <a class="btn btn-link" href="contact.html">Contact Us</a>
          <a class="btn btn-link" href="service.html">Services</a>

        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Contact</h4>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i>+012 345 67890
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope me-3"></i>info@example.com
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Thanks for visiting</h4>
          <p>I wish you all the best & memorable journey with our therapist! Thank you for being a with us . Your beauty
            care has been a valuable asset to the team. Thanks for visiting us! hope we'll meet soon!!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="#">Royal Beauty Salon</a>, All
          Right Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>