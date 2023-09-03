<?php

  include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Website</title>

  <!-- Font awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom css file link -->

  <link rel="stylesheet" href="home.css">
</head>
<body>
  <!-- header section -->
  <header class="header">

    <a href="#" class="logo"><i class="fas fa-heartbeat"></i>medicare.</a>

    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#services">Services</a>
      <a href="#about">About</a>
      <a href="#doctors">Doctors</a>
      <a href="#book">Book</a>
      <a href="#review">Review</a>
      <a href="#blog">Blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </header>
  <!-- Header section ends -->

  <!-- Home section starts -->
  <section class="home" id="home">

    <div class="image">
      <img src="images/health-team.gif" alt="">
    </div>

    <div class="content">
      <h3>Stay safe, Stay Healthy</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsa sequi,
        doloremque officiis</p>
        <a href="#" class="btn">cotnact us<span class="fas fa-chevron-right"></span></a>
    </div>

  </section>
  <!-- Home section ends -->

  <!-- icon section start -->
  <section class="icons-container">

    <div class="icons">
      <i class="fas fa-user-md"></i>
      <h3>140+</h3>
      <p>doctors at work</p>
    </div>

    <div class="icons">
      <i class="fas fa-users"></i>
      <h3>1040+</h3>
      <p>satisfied patients</p>
    </div>

    <div class="icons">
      <i class="fas fa-procedures"></i>
      <h3>500+</h3>
      <p>bed facility</p>
    </div>

    <div class="icons">
      <i class="fas fa-hospitals"></i>
      <h3>80+</h3>
      <p>available hospitals</p>
    </div>

  </section>
  <!-- icon section end -->

  <!-- services section starts -->
  <section class="services" id="services">

    <h1 class="heading">our <span>Services</span></h1>

    <div class="box-container">

      <div class="box">
        <i class="fas fa-notes-medical"></i>
        <h3>free chekups</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum, molestiae officiis autem suscipit.</p>
        <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
      </div>

      <div class="box">
        <i class="fas fa-ambulance"></i>
        <h3>24/7 ambulance</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum, molestiae officiis autem suscipit.</p>
        <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
      </div>

      <div class="box">
        <i class="fas fa-user-md"></i>
        <h3>expert doctors</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum, molestiae officiis autem suscipit.</p>
        <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
      </div>

      <div class="box">
        <i class="fas fa-pills"></i>
        <h3>medicines</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum, molestiae officiis autem suscipit.</p>
        <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
      </div>

      <div class="box">
        <i class="fas fa-procedures"></i>
        <h3>bed faicility</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum, molestiae officiis autem suscipit.</p>
        <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
      </div>

      <div class="box">
        <i class="fas fa-heartbeat"></i>
        <h3>total care</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum, molestiae officiis autem suscipit.</p>
        <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
      </div>

    </div>

  </section>
  <!-- services section ends -->

  <!-- About section starts -->
  <section class="about" id="about">

    <h1 class="heading"><span>About</span> Us</h1>

    <div class="row">

      <div class="image">
        <img src="images/orthopedic-bro.gif" alt="">
      </div>

      <div class="content">
        <h3>We care of your healthy life</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Perferendis, voluptatibus ipsam modi obcaecati dicta
          autem fuga dolore voluptatem alias cumque dolorem corrupti
          molestiae reprehenderit ipsum deserunt, nulla soluta maxime illum?
        </p>
            <a href="#" class="btn">learn more<span class="fas fa-chefvron-right">About Us</span></a>
      </div>

    </div>

  </section>
  <!-- About section ends -->

  <!-- Doctor section starts -->
  <section class="doctors" id="doctors">

    <h1 class="heading">Our <span>Doctors</span></h1>

    <div class="box-container">

      <div class="box">
        <img src="images/doctor-1.jpg" alt="">
        <h3>Sharen karen</h3>
        <span>expert doctor</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/doctor-2.jpg" alt="">
        <h3>Jimmy Butler</h3>
        <span>expert doctor</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/doctor-3.jpg" alt="">
        <h3>Kristy Clark</h3>
        <span>expert doctor</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/doctor-4.jpg" alt="">
        <h3>Sheila Barry</h3>
        <span>expert doctor</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/doctor-5.png" alt="">
        <h3>Angel Blode</h3>
        <span>expert doctor</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/doctor-6.jpg" alt="">
        <h3>Kristaps Porzigiz</h3>
        <span>expert doctor</span>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

    </div>

  </section>
  <!-- Doctor section ends -->

  <!-- Booking section starts -->
  <section class="book" id="book">

    <h1 class="heading"><span>Book</span> Now</h1>

    <div class="row">

      <div class="img">
        <img src="images/online-doctor.gif" alt="">
      </div>

      <form action="book.php" method="post" autocomplete="off">
        <h3>Book Appointment</h3>
        <input type="name" placeholder="Firstname" class="box" name="fname">
        <input type="name" placeholder="Lastname" class="box" name="lname">
        <input type="number" placeholder="Your Number" class="box" name="number">
        <input type="email" placeholder="Your Email" class="box" name="email">
        <button type="submit" value="Book Now" class="btn" name="submit">Book Now</button>
      </form>

    </div>

  </section>
  <!-- Booking section ends -->

  <!-- Review seciton starts -->

  <section class="review" id="review">

    <div class="heading">client's <span>review</span></div>

    <div class="box-container">

      <div class="box">
        <img src="images/portrait-1.jpg" alt="">
        <h3>Johnny Bravo</h3>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <p class="text">
          Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Aperiam a aut officiis fugiat nesciunt fugit,
          ullam placeat pariatur? Doloremque, accusamus voluptas
          in vitae aliquid similique odio voluptate nihil
          repellendus aperiam.
        </p>
      </div>

      <div class="box">
        <img src="images/portrait-2.jpg" alt="">
        <h3>Johnny Bravo</h3>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <p class="text">
          Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Aperiam a aut officiis fugiat nesciunt fugit,
          ullam placeat pariatur? Doloremque, accusamus voluptas
          in vitae aliquid similique odio voluptate nihil
          repellendus aperiam.
        </p>
      </div>

      <div class="box">
        <img src="images/portrait-3.jpg" alt="">
        <h3>Johnny Bravo</h3>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <p class="text">
          Lorem, ipsum dolor sit amet consectetur adipisicing
          elit. Aperiam a aut officiis fugiat nesciunt fugit,
          ullam placeat pariatur? Doloremque, accusamus voluptas
          in vitae aliquid similique odio voluptate nihil
          repellendus aperiam.
        </p>
      </div>

    </div>

  </section>
  <!-- Review seciton ends -->

  <!-- Blog seciton starts -->
  <section class="blog" id="blog">

    <h1 class="heading">Our <span>blogs</span></h1>

    <div class="box-container">

      <div class="box">
        <div class="img">
          <img src="images/doctor-7.jpg" alt="">
        </div>
        <div class="content">
          <div class="icon">
            <a href="#"><i class="fas fa-calendar">2nd, July, 2022</i></a>
            <a href="#"><i class="fas fa-user">by admin</i></a>
          </div>
          <h3>blog title goes here</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
        </div>
      </div>

      <div class="box">
        <div class="img">
          <img src="images/doctor-8.jpg" alt="">
        </div>
        <div class="content">
          <div class="icon">
            <a href="#"><i class="fas fa-calendar">2nd, July, 2022</i></a>
            <a href="#"><i class="fas fa-user">by admin</i></a>
          </div>
          <h3>blog title goes here</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
        </div>
      </div>

      <div class="box">
        <div class="img">
          <img src="images/doctor-9.jpg" alt="">
        </div>
        <div class="content">
          <div class="icon">
            <a href="#"><i class="fas fa-calendar">2nd, July, 2022</i></a>
            <a href="#"><i class="fas fa-user">by admin</i></a>
          </div>
          <h3>blog title goes here</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
        </div>
      </div>

    </div>
  </section>
  <!-- Blog seciton ends -->

  <!-- Footer section starts -->

    <section class="footer">

      <div class="box-container">

        <div class="box">
          <h3>quick link</h3>
          <a href="#"><i class="fas fa-chevron-right"></i>home</a>
          <a href="#"><i class="fas fa-chevron-right"></i>services</a>
          <a href="#"><i class="fas fa-chevron-right"></i>about</a>
          <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
          <a href="#"><i class="fas fa-chevron-right"></i>book</a>
          <a href="#"><i class="fas fa-chevron-right"></i>review</a>
          <a href="#"><i class="fas fa-chevron-right"></i>blogs</a>
        </div>

        <div class="box">
          <h3>our services</h3>
          <a href="#"><i class="fas fa-chevron-right"></i>dental care</a>
          <a href="#"><i class="fas fa-chevron-right"></i>occupational therapy</a>
          <a href="#"><i class="fas fa-chevron-right"></i>physical therapy</a>
          <a href="#"><i class="fas fa-chevron-right"></i>ambulance servvice</a>
          <a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"><i class="fas fa-phone"></i>+123-456-7890 ></a>
          <a href="#"><i class="fas fa-phone"></i>+111-222-3333></a>
          <a href="#"><i class="fas fa-envelope"></i>apple@icloud.com></a>
          <a href="#"><i class="fas fa-envelope"></i>ios@icloud.com></a>
          <a href="#"><i class="fas fa-map-marker"></i>Honolulu, HI></a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"><i class="fas fa-facebook-f"></i>facebook></a>
          <a href="#"><i class="fas fa-twitter"></i>twitter></a>
          <a href="#"><i class="fas fa-instagram"></i>instagram></a>
          <a href="#"><i class="fas fa-linkedin"></i>linkedin></a>
          <a href="#"><i class="fas fa-pinterest"></i>pinterest></a>
        </div>

      </div>

    </section>

  <!-- Footer section ends -->

  <!-- custom JS file -->
  <script src="home.js"></script>
</body>
</html>