<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Waldo Barber Shop</title>
  <meta name="title" content="Barber - Barbers & Hair Cutting">
  <meta name="description" content="This is a barber html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - flaticon
  -->
  <link rel="stylesheet" href="assets/css/flaticon.min.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  --> 

  <header class="header">

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Contactanos :</p>

            <a href="tel:8094601158" class="item-link">+18094601158</a>
          </li>

          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Abierto :</p>

            <p class="item-text">Lunes - Sabado, 09 am - 10 pm</p>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="./assets/login/Login cliente/index.php" class="social-link">User
              </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">

        <a href="#" class="logo">
          Waldo
          <span class="span">Barber Shop</span>
        </a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#services" class="navbar-link" data-nav-link>Servicios</a>
            </li>

            <li class="navbar-item">
              <a href="#pricing" class="navbar-link" data-nav-link>Precios</a>
            </li>

            <li class="navbar-item">
              <a href="#gallery" class="navbar-link" data-nav-link>Quienes somos? y Galeria</a>
            </li>
            <li class="navbar-item">
              <a href="#cita" class="navbar-link" data-nav-link>Aparta tu cita aqui</a>
            </li>
            <li class="navbar-item">
                <a href="./assets/login/Login cliente/index.php" class="navbar-link" id="link" >Mi Carrito</a>
            </li>
            <script>
               document.getElementById("link").addEventListener("click", function(event) {
                  event.preventDefault(); // Evita el comportamiento por defecto del enlace
                  alert("¡Necesitas iniciar sesion para poder entrar en esta seccion!");
                      alert("Enviando al login...");
                        window.location="./assets/login/Login cliente/index.php";
                            });
              </script>
          </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="./assets/login/Login Empleado/index.php" class="btn has-before">
          <span class="span">Register Empleados</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>
    </div>
 
  </header>


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-before has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">

          <h1 class="h1 hero-title">Barberia & Corte de Pelo</h1>

          <p class="hero-text">
              La excelencia de un corte de pelo la tienes con nosotros.
          </p>

          <a href="#Impr" class="btn has-before">
            <span class="span">Explora nuestros Precios</span>

            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services" aria-label="services">
        <div class="container">
            <a href="#services"></a>
          <h2 class="h2 section-title text-center">Servicios que ofrecemos</h2>

          <p class="section-text text-center">
            Los Servicios proximo a lo que podemos ofrecerte
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-salon"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Estilo de Corte de Cabello</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shampoo"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Lavado del pelo</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shaving-razor"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">El Corte</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hair-dye"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Tintes </a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRICING
      -->

      <section class="section pricing has-bg-image has-before" id="pricing" aria-label="pricing"
        style="background-image: url('./assets/images/pricing-bg.jpg')">
        <div class="container">
            <a id="Impr"></a>
          <h2 class="h2 section-title text-center">Nuestros Impresionantes Precios</h2>

          <p class="section-text text-center">
            Sientete comodo con los impresionantes precios que tenemos para ti!
          </p>

          <div class="pricing-tab-container">

            <ul class="tab-filter">

              <li>
                <button class="filter-btn active" data-filter-btn="all">
                  <div class="btn-icon">
                    <i class="flaticon-beauty-salon" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">Todos los precios</p>
                </button>
              </li>

              <li>
             

              <li>
                <button class="filter-btn" data-filter-btn="shaving">
                  <div class="btn-icon">
                    <i class="flaticon-razor-blade" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">El Corte</p>
                </button>
              </li>

            </ul>

            <ul class="grid-list">

              <li data-filter="shaving">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-1.jpg" width="90" height="90" alt="Hair Cutting & Fitting"
                      class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Corte de cabello</h3>

                    <p class="card-text">Limpio y Simple 30-40 minutos</p>
                  </div>

                  <data class="card-price" value="89">$350</data>

                </div>
              </li>

              <li data-filter="shaving">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-2.jpg" width="90" height="90" alt="Shaving & Facial"
                      class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Corte de barba</h3>

                    <p class="card-text">Limpio y Simple 15-30 minutos</p>
                  </div>

                  <data class="card-price" value="45">$100</data>

                </div>
              </li>

              <li data-filter="face-washing">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-3.jpg" width="90" height="90" alt="Hair Color & Wash"
                      class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Tinte y Lavado del Cabello</h3>

                    <p class="card-text">Limpio y Simple 40-60 minutos</p>
                  </div>

                  <data class="card-price" value="35">$400</data>

                </div>
              </li>


              <li data-filter="face-washing">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-6.jpg" width="90" height="90" alt="Facial & Face Wash"
                      class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Lavado Facial</h3>

                    <p class="card-text">Limpio y Simple 10-20 minutos</p>
                  </div>

                  <data class="card-price" value="63">$150</data>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #GALLERY
      -->
          <a id="nosotros"></a>
      <section class="section gallery" id="gallery" aria-label="photo gallery">
        <div class="container">

          <div class="title-wrapper">

            <div>
              <h2 class="h2 section-title">Fotos de nuestros cortes de cabello</h2>

              <p class="section-text">
                Impresionante la calidad de nuestros barberos que nos dan la oportunidad de ofrecerte un servicio de
                calidad y profesional. 
              </p>
            </div>
                
            <a href="nosotros.html" class="btn has-before">
              <span class="span">Sobre nosotros...</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <ul class="grid-list">

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-1.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Corte de Cabello</h3>

                  <p class="card-text">Barbers service</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-2.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Lavado de Cara</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-3.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Resultado</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-4.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Resultado</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #APPOINTMENT
      -->

      <section class="section appoin" id="appointment" aria-label="appointment">
        <div class="container">

          <div class="appoin-card">

            <figure class="card-banner img-holder" style="--width: 250; --height: 774;">
              <img src="./assets/images/appoin-banner-1.jpg" width="250" height="774" loading="lazy" alt=""
                class="img-cover">
            </figure>

            <div class="card-content">

              <h2 class="h2 section-title">Aparta Cita</h2>

              <p class="section-text">
               Aparta tu cita con tiempo
              </p>

              <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="appoin-form" method="post">
                  <a id="cita"></a>
                <div class="input-wrapper">
                  <input type="text" name="name" placeholder="Nombre Completo" required class="input-field">

                  <input type="email" name="email_address" placeholder="Email" required class="input-field">
                </div>

                <div class="input-wrapper">
                  <input type="text" name="phone" placeholder="Numero de Telefono" required class="input-field">

                  <select name="category" class="input-field">

                    <option value="Select category">Selecciona una Categoria</option>
                    <option value="Beauty & spa">Hair</option>
                    <option value="Body massage">Hair Colors</option>
                    <option value="Shaving & Facial">Lavado Facial</option>
                    <option value="Hair Color">El corte</option>

                  </select>
                </div>

                <input type="date" name="date" required class="input-field date">

                <textarea name="message" placeholder="Escribe algun comentario!" required class="input-field"></textarea>

                <button type="submit" class="form-btn">
                  <span class="span">Haz tu cita ahora</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </form>

            </div>

            <figure class="card-banner img-holder" style="--width: 250; --height: 774;">
              <img src="./assets/images/appoin-banner-2.jpg" width="250" height="774" loading="lazy" alt=""
                class="img-cover">
            </figure>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            Barber
            <span class="span">Hair Salon</span>
          </a>

          <form action="" class="input-wrapper">

            <input type="email" name="email_address" placeholder="Enter Your Email" required class="email-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe Now</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>

          </form>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Quick Links</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Services</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Meet Our Team</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Portfolio</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Need A Career?</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">News & Blog</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Cutting</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Shaving & Design</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Colors</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Beauty & Spa</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Body Massages</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Recent News</p>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 70; --height: 75;">
                  <img src="./assets/images/footer-blog-1.jpg" width="70" height="75" loading="lazy"
                    alt="The beginners guide to Henna Brows in Brisbane" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">The beginners guide to Henna Brows in Brisbane</a>
                  </h3>

                  <div class="card-date">
                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                    <time datetime="2022-08-25">25 August 2022</time>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 70; --height: 75;">
                  <img src="./assets/images/footer-blog-2.jpg" width="70" height="75" loading="lazy"
                    alt="How do I get rid of unwanted hair on my face?" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">How do I get rid of unwanted hair on my face?</a>
                  </h3>

                  <div class="card-date">
                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                    <time datetime="2022-08-25">25 August 2022</time>
                  </div>
                </div>

              </div>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li class="footer-list-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="contact-link">
                7528 Roberts Ave. Palm Bay, FL 32907
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+0123456789" class="contact-link">+012 (345) 67 89</a>
            </li>

            <li class="footer-list-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="contact-link">Lunes - Sabado, 09 am - 10 pm</span>
            </li>

            <li class="footer-list-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:support@gmail.com" class="contact-link">support@gmail.com</a>
            </li>

          </ul>

        </div>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">Dalvin Sosa</a>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>



  <?php
  include('./assets/Php/login.php')
    ?>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>