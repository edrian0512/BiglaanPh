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
    <link rel="stylesheet" href="/css/style.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

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
                <a data-aos="zoom-in-left" data-aos-delay="300" href="index.php">home</a>
                <a data-aos="zoom-in-left" data-aos-delay="450" href="#form">Book</a>
                <a data-aos="zoom-in-left" data-aos-delay="600" href="#rates">Rates</a>
                <!-- <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
                <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
                <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
            </nav>
        </header>



        <!-- image -->
        <div class="bg-ilocossur">

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
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="text-white" data-aos="fade-right" data-aos-delay="150">ILOCOS TOUR PACKAGE
                    </h1>
                    <h3 class="text-white" data-aos="fade-right" data-aos-delay="300">3 DAYS / 2 NIGHTS</h3>
                    <div id="image" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators ">
                            <button type="button" data-bs-target="#image" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#image" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#image" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner img-fluid">
                            <div class="carousel-item active">
                                <img src="images/ilocossur2.jpg" alt="img" class="d-block w-100 img-thumbnail bg-dark"
                                    id='it-img'>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ilocossur3.jpg" alt="img" class="d-block w-100 img-thumbnail bg-dark"
                                    id='it-img'>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ilocossur4.jpg" alt="img"
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


                    <div class='mt-5 mb-5 text-white'>
                        <p>
                        <h4> Visiting Ilocos Sur is like traveling back in time, with its various churches, buildings, and
                        even entire cities seemingly taken out of the Spanish era.
                        </h4>
                        </p>
                    </div>


                    <div class="tab mt-5" id='rates'>
                        <button class="tablinks" onclick="openCity(event, 'Rates')">Rates</button>
                        <button class="tablinks" onclick="openCity(event, 'Inclusion')">Inclusion</button>
                    </div>

                    <div id="Rates" class="tabcontent">

                        <!-- 1ST ITEM -->
                        <div class="itemHover mt-5">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column align-content-center">
                                    <h3 class="text-white ">AGOS BORACAY</h3>
                                    <img src="images/bora-room1.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">15 Jun 2022 – 30 Oct 2023</h2>
                                    <h3 class="text-white ">Twin Sharing: Php5,058
                                        Single: Php7,195</h3><br>
                                    <h3>
                                        31 Oct 2022 – 31 May 2023</br>
                                        Twin Sharing: Php5,426
                                        Single: Php7,932
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- 2ND ITEM -->
                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column align-content-center">
                                    <h3 class="text-white ">AZALEA BORACAY</h3>
                                    <img src="images/bora-room2.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2022 – 31 May 2023
                                    </h2>
                                    <h3 class="text-white ">Twin Sharing: Php7,974
                                        Single: Php13,026</h3><br>
                                    <h3>
                                        01 Jun 2022 – 30 Nov 2023</br>
                                        Twin Sharing: Php7,342
                                        Single: Php11,763
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3RD ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">HAVEN BORACAY</h3>
                                    <img src="images/bora-room3.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white"> 01 Apr 2022 – 31 Mar 2023</h2>
                                    <br>
                                    <h3>Twin Sharing: Php8,079
                                        Single: Php13,237


                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->

                        <!-- 4RD ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">BORACAY MAND</h3>
                                    <img src="images/bora-room4.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2022 – 31 May 2022
                                    </h2>
                                    <h3 class="text-white ">Twin Sharing: Php7,974
                                        Single: Php13,026</h3><br>
                                    <h3>
                                        01 Jun 2022 – 30 Nov 2022</br>
                                        Twin Sharing: Php7,342
                                        Single: Php11,763
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 5th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">TRAVELODGE</h3>
                                    <img src="images/bora-room5.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Jun 2022 – 15 Dec 2022
                                    </h2>
                                    <h3 class="text-white ">Twin Sharing: Php4,816
                                        Single: Php6,711

                                    </h3><br>
                                    <h3>
                                        16 Dec 2022 – 31 May 2023</br>
                                        Twin Sharing: Php5,026
                                        Single: Php7,132
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 6th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">BORACAY TROPIC</h3>
                                    <img src="images/bora-room6.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Oct 2022 – 31 Mar 2023




                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php7,132
                                        Single: Php11,342
                                    </h3><br>
                                    <h3>01 Jun 2022 – 30 Sep 2022
                                        </br>
                                        Twin Sharing: Php6,921
                                        Single: Php10,921
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 7th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h4 class="text-white ">BORACAY UPTOWN</h4>
                                    <img src="images/bora-room7.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2022 – 15 Jun 2022
                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php8,447
                                        Single: Php13,974

                                    </h3><br>
                                    <h3>16 Jun 2022 – 15 Oct 2022
                                        </br>

                                        Twin Sharing: Php8,226
                                        Single: Php13,532

                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 8th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white z">COAST BORACAY</h3>
                                    <img src="images/bora-room8.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Jul 2022 – 15 Oct 2022


                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php10,816
                                        Single: Php18,711

                                    </h3><br>
                                    <h3> 01 Apr 2022 – 30 Jun 2022
                                        </br>

                                        Twin Sharing: Php11,868
                                        Single: Php20,816
                                    </h3>
                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 9th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">CROWN REGENCY</h3>
                                    <img src="images/bora-room9.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2022 – 31 Mar 2023

                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php6,816
                                        Single: Php10,711

                                    </h3><br>

                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">

                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- 10th ITEM -->

                        <div class="itemHover">
                            <div
                                class="d-flex flex-column flex-lg-row p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                                <div class="d-flex flex-column">
                                    <h3 class="text-white ">HENANN GARDEN</h3>
                                    <img src="images/bora-room10.jpg">
                                </div>
                                <div class="p-5 justify-content-center justify-content-center">
                                    <h2 class="text-white">01 Apr 2022 – 31 Mar 2023

                                    </h2>
                                    <h3 class="text-white ">
                                        Twin Sharing: Php13,178
                                        Single: Php23,435
                                    </h3><br>

                                </div>
                                <div class="pt-5 d-flex justify-content-center justify-content-center">
                                    <div class="">
                                        <a href="#form"><button type="submit" class="btn">Inquire Now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM -->
                    </div>

                    <div id="Inclusion" class="tabcontent">
                        <h3 class="text-white mt-5">
                            Accommodation</br></br>
                            Daily breakfast</br></br>
                            Roundtrip Caticlan airport transfers</h3>
                    </div>
                </div>

                <!-- form -->

                <div class="col-lg-4" id="form">
                    <div class=" mt-5 ">
                        <form action="/auth/register" method="post">
                            <h3 class='text-white text-center mb-3'>Book this Tour</h3>

                            <div class='form-outline mb-4'>
                                <input type="text" placeholder="Name" class='form-control form-control-lg form-input'
                                    name="name">
                            </div>

                            <div class='form-outline mb-4'>
                                <input type="email" placeholder="Email" class='form-control form-control-lg form-input'
                                    name="email">
                            </div>

                            <div class='form-outline mb-4'>
                                <input type="number" placeholder="Contact Number"
                                    class='form-control form-control-lg form-input' name="phone">
                            </div>

                            <div class='form-outline mb-4'>
                                <input type="text" placeholder="Address" class='form-control form-control-lg form-input'
                                    name="address">
                            </div>

                            <div class='form-outline mb-4'>
                                <h3 class="text-white">Destination </h3>
                                <input type="text" placeholder="Destination" value="Ilocos Sur" readonly class='form-control form-control-lg form-input'
                                    name="desPackage">
                            </div>
                            

                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class='form-outline mb-4 mt-4'>
                                        <input type="number" placeholder="adult"
                                            class='form-control form-control-lg form-input' name="adult">
                                    </div>
                                </div>
                                <div class='form-outline mb-4 mt-4 col-lg-6'>
                                    <input type="number" placeholder="child"
                                        class='form-control form-control-lg form-input' name="child">
                                </div>
                            </div>

                            <div class='row'>
                                <div class="col-lg-6">
                                    <div class='form-outline mb-4'>
                                        <h2 class='text-white' id='font-form'>Check-In</h2>
                                        <input type="date" placeholder="mm/dd/yyyy"
                                            class='form-control form-control-lg form-input' name="checkIn">
                                    </div>
                                </div>

                                <div class='form-outline mb-4 col-lg-6'>
                                    <h2 class='text-white' id='font-form'>Check-Out</h2>
                                    <input type="date" placeholder="mm/dd/yyyy"
                                        class='form-control form-control-lg form-input' name="checkOut">
                                </div>

                            </div>
                    </div>

                    <div class='form-outline mb-4'>


                        <textarea rows="5" class='form-control form-control-lg form-input' placeholder='Your Message'
                            name="message" id='font-form'></textarea>
                    </div>

                    <div class='form-outline mb-4'>
                        <input type='submit' value="Inquire" class='form-control form-control-sm  btn form-input'
                            name="send">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- test -->
    <div class="container text-white d-flex-lg addOns">
        <div class="row">
            <h1 class='mt-4 mb-5'>You May Also Like</h1>
            <div class="col-lg-3">
                <div
                    class="d-flex flex-column  p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                    <div class="d-flex flex-column">
                        <img src="images/baguio1.jpg"><br>
                        <a href="baguio.php" class='text-decoration-none'>
                            <h2 class='mt-3 btn-form'>Baguio</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div
                    class="d-flex flex-column  p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                    <div class="d-flex flex-column">
                        <img src="images/cebu1.jpg"><br>
                        <a href="boracay.php" class='text-decoration-none'>
                            <h2 class='mt-3 btn-form'>Cebu</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div
                    class="d-flex flex-column p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                    <div class="d-flex flex-column ">
                        <img src="images/bohol2.jpg"><br>
                        <a href="boracay.php" class='text-decoration-none'>
                            <h2 class='mt-3 btn-form'>Bohol</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div
                    class="d-flex flex-column p-3 text-white flex-fill justify-content-lg-evenly justify-content-sm-evenly">
                    <div class="d-flex flex-column">
                        <img src="images/palawan1.jpg"><br>
                        <a href="boracay.php" class='text-decoration-none'>
                            <h2 class='mt-3 btn-form'>Palawan</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- test ENd -->

    <!-- Footer Start -->
    <section class="footer">
        <hr class='text-white'>
        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo"> <i class="fas fa-paper-plane"></i> BiglaanPH </a>
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

    <!-- footer End -->
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