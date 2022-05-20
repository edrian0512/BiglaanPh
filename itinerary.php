<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biglaan Ph</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>

      <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">
        <i class="fas fa-paper-plane"></i> Biglaan
        <span style="color: #29d9d5">PH</span></a
      >

      <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination"
          >destination</a
        >
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services"
          >services</a
        >
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery"
          >gallery</a
        >
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>
      </nav>

      <a
        data-aos="zoom-in-left"
        data-aos-delay="1300"
        href="#book-form"
        class="btn"
        >book now</a
      >
    </header>

    <!-- header section ends -->

    <!-- Itinerary -->

    <!-- image -->
    <div class="bg-img">
      <div class="content">
        <span data-aos="fade-up" data-aos-delay="150"
          >Travel & tour Itinerary</span
        >
        <h3 data-aos="fade-up" data-aos-delay="300">
          Enjoy the Philippine Wonders
        </h3>
      </div>
    </div>
    <!-- image ends -->

    <!-- services/offers starts -->

    <section class="services" id="services">
      <div class="heading">
        <span>our promos</span>
        <h1>Travel far. Eat well. Live long.</h1>
      </div>

      <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam,
            cumque.
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
          <i class="fas fa-utensils"></i>
          <h3>food & drinks</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam,
            cumque.
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
          <i class="fas fa-hotel"></i>
          <h3>affordable hotels</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam,
            cumque.
          </p>
        </div>
      </div>
    </section>
    <!-- services/offers ends -->

    <!-- gallery section starts  -->
    <!-- 
    <section class="gallery" id="gallery">
      <div class="heading">
        <span>Places to See</span>
        <h1>Travel more, discover more.</h1>
      </div>

      <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
          <img src="images/itinerarygalleryimage1.jpg" alt="" />
          <span>travel spot</span>
          <h3>Luzon</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
          <img src="images/itinerarygalleryimage2.jpg" alt="" />
          <span>travel spot</span>
          <h3>Luzon</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
          <img src="images/itinerarygalleryimage3.jpg" alt="" />
          <span>travel spot</span>
          <h3>Luzon</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
          <img src="images/itinerarygalleryimage4.webp" alt="" />
          <span>travel spot</span>
          <h3>Visayas</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
          <img src="images/itinerarygalleryimage5.webp" alt="" />
          <span>travel spot</span>
          <h3>Luzon</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
          <img src="images/itinerarygalleryimage6.jpg" alt="" />
          <span>travel spot</span>
          <h3>Mindanao</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
          <img src="images/itinerarygalleryimage7.jpg" alt="" />
          <span>travel spot</span>
          <h3>Visayas</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
          <img src="images/itinerarygalleryimage8.webp" alt="" />
          <span>travel spot</span>
          <h3>Mindanao</h3>
        </div>
      </div>
    </section> -->

    <!-- gallery section ends -->

    <!-- carousel starts -->
    <article class="container articleCarousel d-flex">
      <div
        class="d-flex carousel slid carousel-dark justify-content-center"
        id="carouselExampleIndicators"
        data-bs-ride="carousel"
        data-bs-interval="3000"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-current="true"
            aria-label="slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-current="true"
            aria-label="slide 3"
          ></button>
        </div>

        <div class="carousel-inner d-flex align-items-center">
          <div class="carousel-item active">
            <img class="promo1" src="./images/itinerarygalleryimage4.webp" />
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
          <div class="carousel-item">
            <img class="promo2" src="./images/itinerarygalleryimage2.jpg" />
          </div>
          <div class="carousel-item">
            <img class="prono3" src="./images/itinerarygalleryimage5.webp" />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </article>
    <!-- carousel ends -->
    <!-- accordion starts -->
    <section class="accordion">
      <div class="containerAccordion">
        <div class="content">
          <input type="radio" name="slider" checked id="homeAcc" />
          <input type="radio" name="slider" id="blog" />
          <input type="radio" name="slider" id="help" />

          <div class="list">
            <label for="homeAcc" class="homeAcc">
              <span class="title">Itinerary</span>
            </label>
            <label for="blog" class="blog">
              <span class="title">Inclusions</span>
            </label>
            <label for="help" class="help">
              <span class="title">Rates</span>
            </label>

            <div class="slider"></div>
          </div>
          <div class="text-content">
            <div class="homeAcc text">
              <div class="title">Itinerary</div>
              <p>
                Arrive location, meet and transfer to hotel Compulsory Kowloon
                City Tour <br /><br />
                (Visit: Avenue of Stars for picture taking, Jewelry Workshop &
                Souvenir Shop).<br /><br />
                Then proceed to Ocean Park Whole day free for own leisure. Free
                until transfer to airport for return flight.
              </p>
            </div>
            <div class="blog text">
              <div class="title">Inclusions</div>
              <div class="inclusionsImg">
                <img src="./images/inclusion1.jpg" />
                <img src="./images/inclusion2.jpg" />
                <img src="./images/inclusion 3.jpg" />
              </div>
            </div>
            <div class="help text">
              <div class="title">Rates</div>
              <p>
                Arrive location, meet and transfer to hotel Compulsory Kowloon
                City Tour <br /><br />
                (Visit: Avenue of Stars for picture taking, Jewelry Workshop &
                Souvenir Shop).<br /><br />
                Then proceed to Ocean Park Whole day free for own leisure. Free
                until transfer to airport for return flight.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- accordion ends -->
    <!-- banner section starts  -->

    <div class="banner">
      <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>start your adventures</span>
        <h3>Let's Explore This World</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
          voluptatum praesentium amet quibusdam quam officia suscipit odio.
        </p>
        <a href="#book-form" class="btn">book now</a>
      </div>
    </div>

    <!-- banner section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
          <a href="#" class="logo">
            <i class="fas fa-paper-plane"></i>travel
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
            ad?
          </p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
          <h3>quick links</h3>
          <a href="#home" class="links">
            <i class="fas fa-arrow-right"></i> home
          </a>
          <a href="#about" class="links">
            <i class="fas fa-arrow-right"></i> about
          </a>
          <a href="#destination" class="links">
            <i class="fas fa-arrow-right"></i> destination
          </a>
          <a href="#services" class="links">
            <i class="fas fa-arrow-right"></i> services
          </a>
          <a href="#gallery" class="links">
            <i class="fas fa-arrow-right"></i> gallery
          </a>
          <a href="#blogs" class="links">
            <i class="fas fa-arrow-right"></i> blogs
          </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
          <h3>contact info</h3>
          <p><i class="fas fa-map"></i> Lipa, Batangas</p>
          <p><i class="fas fa-phone"></i> +63 9082447247</p>
          <p><i class="fas fa-envelope"></i> sample@gmail.com</p>
          <p><i class="fas fa-clock"></i> 7:00am - 10:00pm</p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <form action="">
            <input
              type="email"
              name=""
              placeholder="enter your email"
              class="email"
              id=""
            />
            <input type="submit" value="subscribe" class="btn" />
          </form>
        </div>
      </div>
    </section>

    <div class="credit">
      created by <span>Group 2</span> | all rights reserved!
    </div>

    <!-- footer section ends -->
    <!-- footer section ends -->

    <!-- addComment Edrian -->
    <!-- comment -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
      AOS.init({
        duration: 800,
        offset: 150,
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
