<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS Portal</title>
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="main/styles.css">
    <link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
</head>


<body>
  <header>
    <div class="company-logo"><img src="main/images/imsec-logo-banner.png" alt=""></div>
    <!-- <nav class="navbar">
      <ul class="nav-items">
        <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="#" class="nav-link">OFFER</a></li>
        <li class="nav-item"><a href="#" class="nav-link">SHOP</a></li>
        <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
      </ul>
    </nav> -->
    <div class="menu-toggle">
      <i class="bx bx-menu"></i>
      <i class="bx bx-x"></i>
    </div>
  </header>
  <main>
    <!-- HOME SECTION -->
    <section class="container section-1">
      
      <div class="slogan">
      <h1 class="company-title" style="font-size: 2.5rem;">Computer Science Net</h1>
        <h2 class="company-title">Welcome To </h2>
        <h1 class="company-title">Computer Science Department</h1>
        <!-- <h2 class="company-slogan">
          This is our departmental Portal.
        </h2> -->
      </div>
      <div class="home-computer-container">
        <img class="home-computer" src="main/images/society.jpg" alt="ims" class="home-img">
      </div>
    </section>

    <!-- OFFER SECTION -->
    <section class="container section-2">
      <!-- offer 1 -->
      <div class="offer offer-1">
        <!-- <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/offer_1.png?raw=true" alt="a computer in dark with with white shadow" class="offer-img offer-1-img"> -->
        <div class="offer-description offer-desc-1-1" data-aos="fade-right">
            <h2 class="offer-title">Vision</h2>
            <p class="offer-hook">To become a worldwide recognized centre of excellence in the field of computer science for innovation, learning and entrepreneurship by developing professional leaders to serve society</p>
            <!-- <div class="cart-btn">ADD TO CART</div> -->
          </div>
        <div class="offer-description offer-desc-1-2" data-aos="fade-left">
          <h2 class="offer-title">Mission</h2>
          <p ><ul class="offer-hook">
            <li>To impart good quality experiential learning to get expertise in modern software tools and to cater the real time requirements of industry.
            </li>
            <li>To provide a conducive environment for faculty to engage and train students for progressive and convergent innovation.
            </li>
            <li>To provide students with a positive learning experience by reaching their goals through collaborative learning, professional grooming and a healthy environment based in co-curricular and extracurricular activities
            </li>
          </ul></p>
          <!-- <div class="cart-btn">ADD TO CART</div> -->
        </div>
      </div>
      <!-- offer 2 -->
      <div class="offer offer-2">
        <!-- <img src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/offer_2.png?raw=true" alt="a opened computer" class="offer-img offer-2-img"> -->
        <div class="offer-description offer-desc-2-1" data-aos="fade-right">
            <h2 class="offer-title new">Program Educational Objectives (PEO)</h2>
            <p ><ul class="offer-hook">
                <li>Empowering the students for continuous learning and develop efficient solutions for emerging challenges in the computation domain.
                </li>
                <li>Preparing graduates who are able to apply standard software engineering practices in software development and management process using suitable programming languages and platforms.
                </li>
              </ul></p>
            <!-- <div class="cart-btn">ADD TO CART</div> -->
          </div>
        <div class="offer-description offer-desc-2-2" data-aos="fade-left">
          <h2 class="offer-title new">Program Specific Outcomes (PSO)
        </h2>
          <p class="offer-hook">By the completion of programthe student will have following Program specific outcomes. <br>
            <ul class="offer-hook">
            <li>To produce graduates who are employable in industries/public sector/research organizations or work as an entrepreneur.

            </li>
            <li>To produce graduates who can provide solutions to challenging problems in their profession by applying computer engineering theory and practices.

            </li>
            <li>
                To develop ability to demonstrate team work with the ability of leadership, analytical reasoning for solving time critical problems and strong human values for responsible professional.

            </li>
          </ul></p>
                    <!-- <div class="cart-btn">ADD TO CART</div> -->
        </div>
      </div>
    </section>

    <!-- PRODUCT SECTION -->
    <section class="container section-5 login-box">
      <h1>Computer Science Net Dashboard Login</h1>
        <div class="flex">
        <a href="index.php?person=Student">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Student
          </a>
          <a href="index.php?person=Faculty">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Faculty
          </a>
          <a href="index.php?person=Admin">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Admin
          </a>
        </div>
    </section>

  </main>
  <footer>
    <!-- <div class="container top-footer">
      <!-- footer item 1 
      <div class="footer-item">
        <h2 class="footer-title">XYZ</h2>
        <div class="footer-items">
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
        </div>
      </div>
      <!-- footer item 2 
      <div class="footer-item">
        <h2 class="footer-title">ABC</h2>
        <div class="footer-items">
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
        </div>
      </div>
      <!-- footer item 3 
      <div class="footer-item">
        <h2 class="footer-title">GHF</h2>
        <div class="footer-items">
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
        </div>
      </div>
      <!-- footer item 4 
      <div class="footer-item">
        <h2 class="footer-title">KJH</h2>
        <div class="footer-items">
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
          <h3>SAMPLE</h3>
        </div>
      </div>
    </div> -->
    <div class="container end-footer">
      <div class="copyright">copyright © 2021 - Present • <b>IMSES CS POrtal</b></div>
      <a class="designer" href="#">DHRUV, SAMEEKSHA, KUSHAGRA</a>
    </div>
  </footer>
  <script src="main/script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>