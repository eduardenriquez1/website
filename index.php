<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.4.js"></script>
  <title>Artistry by Eduard</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/profile-1.png" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="">Eduard Enriquez</h1>

          <p class="title">BSIT Student</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:eduardenriquez58@gmail.com" class="contact-link">eduardenriquez58@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="school-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">School</p>

              <a href="tel:09564123686" class="contact-link">National University</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="April">April 2004</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Quezon City, Philippines</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.facebook.com/eduard.enriquez.25" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/eduard-dionrick-enriquez-8267a8252/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/eduardenriquez1" class="home__social-icon" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Hobbies</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            Hello! I'm Eduard Enriquez, a BSIT Student in NU Fairview
            I enjoy
            turning complex problems into simple, beautiful and intuitive designs.
          </p>

          <p>
            When i have free time, I enjoy playing online games like Mobile Legends.
            Moreover, I
            also love to watch anime like (One piece, Bleach and Naruto).
            message and identity in the most creative way. I created web design for many famous brand companies.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a beginner level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the beginner level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Mobile apps</h4>

                <p class="service-item-text">
                  A little bit experience of application for  Android.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make excellent photos of any category at a adequate level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - Quotes
        -->

        <section class="quotes">

          <h3 class="h3 quotes-title">Quotes</h3>

          <ul class="quotes-list has-scrollbar">

            <li class="quotes-item">
              <div class="content-card" data-quotes-item>

                <figure class="quotes-avatar-box">
                  <img src="./assets/images/quote-1.png" alt="Paulo Coelho" width="60" height="90" data-quotes-avatar>
                </figure>

                <h4 class="h4 quotes-item-title" data-quotes-title>Paulo Coelho</h4>

                <div class="quotes-text" data-quotes-text>
                  <p>
                    
                <br>   "One day or day one, you decide."</br>
                  
                  </p>
                </div>

              </div>
            </li>

            <li class="quotes-item">
              <div class="content-card" data-quotes-item>

                <figure class="quotes-avatar-box">
                  <img src="./assets/images/quote-2.png" alt=" Publius Flavius Vegetius Renatus" width="60" height="90" data-quotes-avatar>
                </figure>

                <h4 class="h4 quotes-item-title" data-quotes-title> Publius Flavius Vegetius Renatus</h4>

                <div class="quotes-text" data-quotes-text>
                  <p>
                    <br>
                    <b> <i>  Si vis pacem, para bellum </b> </i> <br>
                    is a Latin adage translated as "If you want peace, prepare for war".
                  </p>
                </div>

              </div>
            </li>

            <li class="quotes-item">
              <div class="content-card" data-quotes-item>

                <figure class="quotes-avatar-box">
                  <img src="./assets/images/quote-3.png" alt="Muhammad Ali" width="60" data-quotes-avatar>
                </figure>

                <h4 class="h4 quotes-item-title" data-quotes-title>Muhammad Ali</h4>

                <div class="quotes-text" data-quotes-text>
                  <p>
                    "If my mind can conceive it,<br>
                   if my heart can believe it, <br>then i can achieve it."
                  </p>
                </div>

              </div>
            </li>

            <li class="quotes-item">
              <div class="content-card" data-quotes-item>

                <figure class="quotes-avatar-box">
                  <img src="./assets/images/quote-4.png" alt="Mahatma Gandhi" width="60" data-quotes-avatar>
                </figure>

                <h4 class="h4 quotes-item-title" data-quotes-title>Mahatma Gandhi</h4>

                <div class="quotes-text" data-quotes-text>
                  <p>
                    "The future depends on <br>
                    what we do in the present."
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - quotes modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="quotes-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/quote-1.png" alt="Paulo Coelho" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Paulo Coelho</h4>

              <div data-modal-text>
                <p>
                      “It's the possibility of having a dream come true that makes life interesting.”
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="brand">

          <h3 class="h3 brands-title">Favorite Brands</h3>

          <ul class="brands-list has-scrollbar">

            <li class="brands-item">
              <a href="https://www.nike.com/ph/">
                <img src="./assets/images/logo-1.png" alt="brand logo">
              </a>
            </li>

            <li class="brands-item">
              <a href="https://www.coca-colacompany.com/">
                <img src="./assets/images/logo-2.png" alt="brand logo">
              </a>
            </li>

            <li class="brands-item">
              <a href="https://www.nike.com/ph/jordan">
                <img src="./assets/images/logo-3.png" alt="brand logo">
              </a>
            </li>

            <li class="brands-item">
              <a href="https://www.samsung.com/ph/">
                <img src="./assets/images/logo-4.png" alt="brand logo">
              </a>
            </li>

            <li class="brands-item">
              <a href="https://www.stussy.com/">
                <img src="./assets/images/logo-5.png" alt="brand logo">
              </a>
            </li>

            <li class="brands-item">
              <a href="https://www2.hm.com/en_asia5/index.html">
                <img src="./assets/images/logo-6.png" alt="brand logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">National University </h4>

              <span>2022 — Present</span>

              <p class="timeline-text">
                I am currently in my second year of college and I have decided to pursue a Bachelor of Science in Information Technology (BSIT) degree program. 
                Exploring computer and networking basics as well as databases management fundamentals in my first year feels like a stepping stone towards me unlocking unexpected aspects of the world of technology and recognizing my characters. 
                These initial days are touched by emotions of happiness and readiness when I embark upon my journey of learning and discoveries.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Saint Columban College</h4>

              <span>2020 — 2022</span>

              <p class="timeline-text">
                Those two years have resolutely become my academic home where I pursued the ABM (Accountancy, Business, and Management) strand as my area of specialization. 
                By participating actively in the class and practical lessons, I immersed myself in the financial, business development and management fields, experiencing my inclination and capabilities simultaneously. 
                Those years were not just schooling, but rather a voyage of individual development where I not only learned about business but also about myself, discovering my visions and goals for the life coach ahead...
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Nuestra Senora De Aranzazu</h4>

              <span>2016 — 2020</span>

              <p class="timeline-text">
                That is when I spent the last four years of my Junior High-school education at this institution, where I developed lifetime memories and solid friendships. 
                 My education process and personality were shaped by those years that were very useful to me
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="30">30%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 30%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic design</h5>
                <data value="35">35%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 35%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Coding</h5>
                <data value="40">40%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Database</h5>
                <data value="30">30%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 30%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #hobbies
      -->

      <article class="hobbies" data-page="hobbies">

        <header>
          <h2 class="h2 article-title">Hobbies</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Sports</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Outdoor Activities</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Movie</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Sports</button>
              </li>

              <li class="select-item">
                <button data-select-item>Outdoor Activities</button>
              </li>

              <li class="select-item">
                <button data-select-item>Movie</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="sports">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/basketball.png" alt="basketball" loading="lazy">
                </figure>

                <h3 class="project-title">Basketball</h3>

                <p class="project-category">Sports</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="sports">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/basketball2.png" alt="basketball" loading="lazy">
                </figure>

                <h3 class="project-title">Basketball</h3>

                <p class="project-category">Sports</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="outdoor activities">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/outdoor.png" alt="outdoor" loading="lazy">
                </figure>

                <h3 class="project-title">Hiking</h3>

                <p class="project-category">Outdoor Activities</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="outdoor activities">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                  </div>

                  <img src="./assets/images/outdoor2.png" alt="outdoor" loading="lazy">
                </figure>

                <h3 class="project-title">Caving</h3>

                <p class="project-category">Outdoor Activities</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="outdoor activities">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/outdoor3.png" alt="travelling" loading="lazy">
                </figure>

                <h3 class="project-title">Travelling</h3>

                <p class="project-category">Outdoor Activities</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="movie">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                  </div>

                  <img src="./assets/images/movie1.png" alt="movie" loading="lazy">
                </figure>

                <h3 class="project-title">One Piece</h3>

                <p class="project-category">Movie/Anime</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="movie">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                  </div>

                  <img src="./assets/images/movie2.png" alt="Movie/Anime" loading="lazy">
                </figure>

                <h3 class="project-title">Breaking Bad</h3>

                <p class="project-category">Movie/Anime</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="movie">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                  </div>

                  <img src="./assets/images/movie3.png" alt="Movie/Anime" loading="lazy">
                </figure>

                <h3 class="project-title">The Notebook</h3>

                <p class="project-category">Movie/Anime</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="movie">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/movie4.png" alt="Movie/Anime" loading="lazy">
                </figure>

                <h3 class="project-title">Rick and Morty</h3>

                <p class="project-category">Movie/Anime</p>

              </a>
            </li>

          </ul>

        </section>

      </article>


  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>