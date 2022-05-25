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
                <span data-aos="fade-up" data-aos-delay="150">Travel & tour Itinerary</span>
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

        <!-- end -->
        <!-- start form -->
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
                                <img src="./images/itinerarygalleryimage4.webp" alt="img"
                                    class="d-block w-100 img-thumbnail bg-dark" id='it-img'>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/itinerarygalleryimage2.jpg" alt="img"
                                    class="d-block w-100 img-thumbnail bg-dark" id='it-img'>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/itinerarygalleryimage5.webp" alt="img"
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

                <div class="col-lg-4">
                    <div class=" mt-5 ">
                        <form action="">
                            <h3 class='text-white'>Book this Tour</h3>
                            <div class='form-outline'>
                                <input type="text" placeholder="Name" id='boxIT' class='form-control form-control-lg'>
                            </div>

                            <div>
                                <input type="email" placeholder="Email" id='boxIT' class='form-control form-control-lg'>
                            </div>

                            <div>
                                <input type="number" placeholder="Contact Number" id='boxIT'
                                    class='form-control form-control-lg'>
                            </div>
                            <div>
                                <input type="number" placeholder="adult" id='boxIT'
                                    class='form-control form-control-lg'>
                            </div>
                            <input type="number" placeholder="child" id='boxIT' class='form-control form-control-lg'>

                    </div>
                    <div>
                        <div>
                            <label class='text-white' id='font'>Check-In</label>
                            <input type="date" placeholder="mm/dd/yyyy" id='boxIT' class='form-control form-control-lg'>
                        </div>
                        <div>
                            <label class='text-white' id='font'>Check-Out</label>
                            <input type="date" placeholder="mm/dd/yyyy" id='boxIT' class='form-control form-control-lg'>
                        </div>
                    </div>
                    <div>
                        <textarea name="Inquiry" rows="5" class='form-control form-control-lg'
                            placeholder='Your Message'></textarea>
                    </div>
                    <div>
                        <input type='submit' id='boxIT' class='form-control form-control-lg bg-dark text-white'>
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
                        <h1 class='text-white'>Rates</h1>

                        <!-- 1ST ITEM -->
                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column align-content-center">
                                    <h3 class="text-white ">AGOS BORACAY</h3>
                                    <img class="locationImg" src="./images/BORACAY1.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">15 Jun 2020 – 30 Oct 2020</h2>
                                    <h3 class="text-white ">Twin Sharing: Php5,058
                                        Single: Php7,195</h3><br>
                                    <h3>
                                        31 Oct 2020 – 31 May 2021</br>
                                        Twin Sharing: Php5,426
                                        Single: Php7,932
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- 2ND ITEM -->
                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column align-content-center">
                                    <h3 class="text-white ">AZALEA BORACAY</h3>
                                    <img class="locationImg" src="./images/BORACAY2.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2020 – 31 May 2020
                                    </h2>
                                    <h3 class="text-white ">Twin Sharing: Php7,974
                                        Single: Php13,026</h3><br>
                                    <h3>
                                        01 Jun 2020 – 30 Nov 2020</br>
                                        Twin Sharing: Php7,342
                                        Single: Php11,763
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- 3RD ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">HAVEN BORACAY</h3>
                                    <img class="locationImg" src="./images/BORACAY3.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white"> 01 Apr 2020 – 31 Mar 2021</h2>
                                    <br>
                                    <h3>Twin Sharing: Php8,079
                                        Single: Php13,237


                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 4RD ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">BORACAY MAND</h3>
                                    <img class="locationImg" src="./images/BORACAY4.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2020 – 31 May 2020
                                    </h2>
                                    <h3 class="text-white ">Twin Sharing: Php7,974
                                        Single: Php13,026</h3><br>
                                    <h3>
                                        01 Jun 2020 – 30 Nov 2020</br>
                                        Twin Sharing: Php7,342
                                        Single: Php11,763
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 5th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">TRAVELODGE</h3>
                                    <img class="locationImg" src="./images/BORACAY5.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Jun 2020 – 15 Dec 2020
                                    </h2>
                                    <h3 class="text-white ">Twin Sharing: Php4,816
                                        Single: Php6,711

                                    </h3><br>
                                    <h3>
                                        16 Dec 2020 – 31 May 2021</br>
                                        Twin Sharing: Php5,026
                                        Single: Php7,132
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 6th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">BORACAY TROPIC</h3>
                                    <img class="locationImg" src="./images/BORACAY6.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Oct 2020 – 31 Mar 2021




                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php7,132
                                        Single: Php11,342
                                    </h3><br>
                                    <h3>01 Jun 2020 – 30 Sep 2020
                                        </br>
                                        Twin Sharing: Php6,921
                                        Single: Php10,921
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 7th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h4 class="text-white ">BORACAY UPTOWN</h4>
                                    <img class="locationImg" src="./images/BORACAY7.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2020 – 15 Jun 2020
                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php8,447
                                        Single: Php13,974

                                    </h3><br>
                                    <h3>16 Jun 2020 – 15 Oct 2020
                                        </br>

                                        Twin Sharing: Php8,226
                                        Single: Php13,532

                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 8th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">COAST BORACAY</h3>
                                    <img class="locationImg" src="./images/BORACAY8.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Jul 2020 – 15 Oct 2020


                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php10,816
                                        Single: Php18,711

                                    </h3><br>
                                    <h3> 01 Apr 2020 – 30 Jun 2020
                                        </br>

                                        Twin Sharing: Php11,868
                                        Single: Php20,816
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 9th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">CROWN REGENCY</h3>
                                    <img class="locationImg" src="./images/BORACAY9.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2020 – 31 Mar 2021

                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php6,816
                                        Single: Php10,711

                                    </h3><br>

                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 10th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly just">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">HENANN GARDEN</h3>
                                    <img class="locationImg" src="./images/BORACAY10.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2020 – 31 Mar 2021

                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php13,178
                                        Single: Php23,435
                                    </h3><br>

                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <button type="submit" class="btn">Inquire Now</button>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                    </div>
                    <div id="Inclusion" class="tabcontent">
                        <h1 class='text-white'>Inclusion</h1></br></br>
                        <h3 class="text-white">
                            Accommodation</br></br>
                            Daily breakfast</br></br>
                            Roundtrip Caticlan airport transfers</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="banner mt-5">
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