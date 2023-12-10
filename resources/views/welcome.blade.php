<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dnlr Portofolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/loggo.png" rel="icon">
  <link href="assets/img/Logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link href="assets/css/style.css" rel="stylesheet">

  <script>
    function validateForm() {
      var nama = document.getElementById("name");

      //cek hanya yang invalid
      if (nama.value == "") {
        nama.focus();
        alert("Mohon Isi kolom nama!");
        return false;
      }

      if (isNaN(nama.value) == false) {
        nama.focus();
        msg.innerHTML = "Nama hanya bisa diisi dengan huruf!";
        return false;
      }
    }
  </script>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/ProfilePicture.JPG" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="Main.html">Yeremia Maydinata</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Dinaadin78" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/yeremia.maydinata" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/dinalarka/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/yeremia-maydinata-narana-44a1b624a/" class="linkedin"><i
              class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
              <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Yeremia Maydinata</h1>
      <h2 style="background-color: aliceblue;">I'm Video Editor and Motion Designer</h2>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>College student in Institut Teknologi Sepuluh Nopember, the
            undergraduate program of information systems. Experienced in the
            managerial organization, especially in light IT support, creative design,
            and multimedia. Humble, curious, deep thinker, tenacious, and a good
            listener. Interested in exploring many things with or without experiences.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/ProfilePicture.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Video Editor &amp; Motion Designer</h3>
            <p class="fst-italic">
              Passionate in Visual Media making focused on Video editing and Motion Design. Always looking for new
              experience
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>17 May 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>Coming Soon</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 8901 2773833</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Surabaya, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong>
                    <span>gelasgelaskaca345@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              Create creative stuff needed from any division, such as : proposal design, poster design, motion design,
              videography, serticate design, etc. Create a visualization of information to inform the audience using
              motion, poster, and copywriting, make stage decorations, and forward
              important messages from comitee to participants. Focus on documentation, video-making base requests,
              motion
              graphics and media setup.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>My most experiences in media making is videomaking. Start from shoot videos, attach it, enhance with
            effects, sync it with song, etc.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <span class="skill"><b>Adobe After Effects</b></span>
            <h6>Made a several animation, Motion design for marketing purposes. Making effect to enhance video quality
            </h6>

            <span class="skill"><b>Adobe Premiere Pro</b></span>
            <h6>Video cutting and mix, song added and sync, light effect, simple color grading, finishing</h6>

            <span class="skill"><b>Adobe Illustrator</b></span>
            <h6>Vector making, poster making, logo design, proposal design</h6>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <span class="skill"><b>Adobe Photoshop</b></span>
            <h6>Photo editing, light grading</h6>

            <span class="skill"><b>Canva</b></span>
            <h6>Design sketching, data interpreting, product/task presentation</h6>

            <span class="skill"><b>Microsoft Office</b></span>
            <h6>Script making, data management, data store, administration</h6>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>This is my litlle stories about my experiences</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Yeremia Maydinata</h4>
              <p><em>College student in Institut Teknologi Sepuluh Nopember, the
                  undergraduate program of information systems. Experienced in the
                  managerial organization, especially in light IT support, creative design,
                  and multimedia. Humble, curious, deep thinker, tenacious, and a good
                  listener. Interested in exploring many things with or without experiences.</em></p>
              <ul>
                <li>Bhaskara Selatan A-26, Mulyosari, Surabaya</li>
                <li>(+62) 8901-2773-833</li>
                <li>gelasgelaskaca345@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Senior High School</h4>
              <h5>2019 - 2022</h5>
              <p><em>Senior High School 1 Purbalingga</em></p>
            </div>
            <div class="resume-item">
              <h4>Undergraduate of Information Systems</h4>
              <h5>2022 - now</h5>
              <p><em>Institut Teknologi Sepuluh Nopember Surabaya</em></p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Managerial Experience</h3>
            <div class="resume-item">
              <h4>Publication Decoration and Design Staff</h4>
              <h5>2022 - Present</h5>
              <p><em>PKMBK PMK ITS</em></p>
              <ul>
                <li>Manage some event decoration</li>
                <li>Participacing in After Movie making </li>
                <li>Designed several poster and social media's feed</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Creative Staff</h4>
              <h5>2022 - Present</h5>
              <p><em>Information System Expo 2023</em></p>
              <ul>
                <li>Video making</li>
                <li>Made some motion graphic and 3D stuff</li>
                <li>Design OBS Layout for livestreams</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Media Creative - Multimedia Staff</h4>
              <h5>2022 - present</h5>
              <p><em>Society of Reneweable Energy ITS</em></p>
              <ul>
                <li>Participacing in documentation in every event.</li>
                <li>Motion graphic making</li>
                <li>Video Editing</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Some of my project from joining several managerial event since 2022.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Video">Video</li>
              <li data-filter=".filter-Motion">Motion</li>
              <li data-filter=".filter-VideoEffects">Video Effects</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-Video">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portofolio-1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portofolio-1.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Video 1"><i class="bx bx-plus"></i></a>
                <a href="https://youtu.be/e-MX0DUHWJ0?si=v7j6A82XlEwmjBhA" target="_blank" title="More Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Video">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portofolio-2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portofolio-2.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Video 2"><i class="bx bx-plus"></i></a>
                <a href="https://youtu.be/TdFWyuBRxjw?si=dddOnWysYkodLgNz" target="_blank" title="More Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Motion">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Motion 1"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/reel/CvUMgQVpL1a/?igshid=MzRlODBiNWFlZA==l" target="_blank"
                  title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Motion">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Motion 2"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/reel/Cvbqru_pECk/?igshid=MzRlODBiNWFlZA==" target="_blank"
                  title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Video">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Video 3"><i class="bx bx-plus"></i></a>
                <a href="https://youtu.be/l4TK-4ey69Q?si=UoEetGNs3K_-64mxl" target="_blank" title="More Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-VideoEffects">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Video Effects 1"><i class="bx bx-plus"></i></a>
                <a href="https://drive.google.com/file/d/1Sr__u6gNv2WfplH4cQOI0Y6DEnPTIkYS/view?usp=drivesdk"
                  target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If you Interested in my work, freely contact me or you can submit your message in available box below.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Bhaskara Selatan, Mulyosari, Surabaya</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gelasgelaskaca345@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(+62) 8901-2773-833</p>
              </div>

              <div class="Terserah">
                <h4>Another Task Preference:</h4>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-1" target="_blank">Pertemuan 1</a>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-2" target="_blank">Pertemuan 2</a>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-3" target="_blank">Pertemuan 3</a>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-4" target="_blank">Pertemuan 4</a>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-5-1" target="_blank">Pertemuan 5-1</a>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-5-2" target="_blank">Pertemuan 5-2</a>
                <a class="px-5 mx-3" href="http://127.0.0.1:8000/pertemuan-6" >Pertemuan 6</a>

              </div>
              <a class="px-5 mx-3" href="/pegawai" target="_blank">Data Pegawai</a>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="Main.html" method="get" role="form" onsubmit="return validateForm()">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets\js\main.js"></script>

</body>

</html>
