<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biglaan Ph</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
</head>

<body>
    <!-- header section starts  -->
    <div>
        <header class="header">
            <div id="menu-btn" class="fas fa-bars"></div>

            <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">
                <i class="fas fa-paper-plane"></i> Biglaan
                <span style="color: #29d9d5">PH</span></a>

            <nav class="navbar">
                <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
                <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
                <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
                <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
                <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
                <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>
            </nav>
        </header>



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


        <div class="container" id='margin'>
            <div class="row">
                <div class="col-lg-8">
                    <div id="image" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-indicators ">
                            <button type="button" data-bs-target="#image" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#image" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#image" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner img-fluid">
                            <div class="carousel-item active">
                                <img src="images/designation1.jpeg" alt="img"
                                    class="d-block w-100 img-thumbnail bg-dark" id='it-img'>
                            </div>
                            <div class="carousel-item">
                                <img src="images/designation3.jpeg" alt="img"
                                    class="d-block w-100 img-thumbnail bg-dark" id='it-img'>
                            </div>
                            <div class="carousel-item">
                                <img src="images/designation3.jpeg" alt="img"
                                    class="d-block w-100 img-thumbnail bg-dark" id='it-img'>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev text-white" type="button" data-bs-target="#image"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#image"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <!-- form -->

                <div class="col-sm">
                    <div class="form mt-5 d-lg-flex">
                        <form action="">
                            <h3>Book this Tour</h3>
                            <div class="textemail">
                                <div>
                                    <input type="text" placeholder="Name" id='boxIT'>
                                </div>
                                <div>
                                    <input type="email" placeholder="Email" id='boxIT'>
                                </div>
                                <div>
                                    <input type="number" class="width" placeholder="Contact Number" id='boxIT'>
                                </div>
                            </div>
                            <div class="adultchild">
                                <div>
                                    <input type="number" class="nwidth" placeholder="adult" id='boxIT'>
                                </div>
                                <div>
                                    <input type="number" class="nwidth" placeholder="child" id='boxIT'>
                                </div>
                            </div>
                            <div class="check">
                                <div class="checkin">
                                    <label>Check-In</label>
                                    <input type="date" placeholder="mm/dd/yyyy" id='boxIT'>
                                </div>
                                <div class="checkout">
                                    <label>Check-Out</label>
                                    <input type="date" placeholder="mm/dd/yyyy" id='boxIT'>
                                </div>
                            </div>
                            <div class="textarea">
                                <textarea name="Inquiry" cols="42" rows="3"></textarea>
                            </div>
                            <div>
                                <button class="fbtn">Inquire Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class='container mt-4'>
            <div class="container" id='margin'>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'Rates')">Rates</button>
                            <button class="tablinks" onclick="openCity(event, 'Inclusion')">Inclusion</button>
                        </div>

                        <div id="Rates" class="tabcontent">
                            <h3>Rates</h3>
                            <p>London is the capital city of England.</p>
                        </div>

                        <div id="Inclusion" class="tabcontent">
                            <h3>Inclusion</h3>
                            <p>Paris is the capital of France.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>













        <section class="footer">

            <div class="box-container">

                <div class="box" data-aos="fade-up" data-aos-delay="150">
                    <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box" data-aos="fade-up" data-aos-delay="300">
                    <h3>quick links</h3>
                    <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
                    <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
                    <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
                    <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
                    <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
                </div>

                <div class="box" data-aos="fade-up" data-aos-delay="450">
                    <h3>contact info</h3>
                    <p> <i class="fas fa-map"></i> Lipa, Batangas </p>
                    <p> <i class="fas fa-phone"></i> +63 9082447247 </p>
                    <p> <i class="fas fa-envelope"></i> sample@gmail.com </p>
                    <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
                </div>

                <div class="box" data-aos="fade-up" data-aos-delay="600">
                    <h3>newsletter</h3>
                    <p>subscribe for latest updates</p>
                    <form action="">
                        <input type="email" name="" placeholder="enter your email" class="email" id="">
                        <input type="submit" value="subscribe" class="btn">
                    </form>
                </div>

            </div>

        </section>

        <div class="credit">created by <span>Group 2</span> | all rights reserved!</div>

        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>