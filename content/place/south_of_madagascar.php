<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Patrick+Hand+SC&family=Special+Elite&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/globalcss.css?v=<?= filemtime('../../assets/css/globalcss.css'); ?>">
    <title>The South of Madagascar</title>
    <link rel="icon" href="../../assets/images/logo.png" type="image/x-icon">


</head>

<body class="bg f">

    <!--Navbar -->
    <div class="container bg-black bg-opacity-25 rounded none fw-bold">
        <div class="pb-1" id=" ">
            <div class="row ">
                <div class=" col-11 col-lg-8">
                    <ul class="nav">
                        <li><a href="https://wa.me/261329572020" class="nav-link px-2 text-white a " target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg> +261 32 95 720 20 |</a>
                        </li>
                        <li>
                            <a href="../contact.php" target="_blank" class="nav-link px-2 text-white a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                </svg> contact@fhltravel.com
                            </a>
                        </li>



                    </ul>
                </div>
                <div class=" col-1 col-lg-4  ">
                    <ul class="nav justify-content-end">
                        <li class="">
                            <a href="../../assets/data/login.php" class="nav-link px-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                                </svg> Admin</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

    <header id="header" class="header d-flex align-items-center sticky-top bg shadow">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-between align-items-center p-2">

                <!-- Logo -->
                <a href="../../index.php"
                    class="d-flex align-items-center col-auto col-md-3 text-white text-decoration-none titre fw-bold">
                    <img src="../../assets/images/logo.png" width="50px" class="rounded-circle" alt="FHL Madagascar">
                    <span class="ms-2">FHL Travel Madagascar</span>
                </a>

                <!-- Hamburger Menu Button -->
                <button class="navbar-toggler d-md-none text-white fs-2" type="button" id="menu-toggle">
                    ☰
                </button>

                <!-- Navigation Menu -->
                <ul class="nav d-none d-md-flex col-md-6 justify-content-center mb-2 mb-md-0 mx-auto" id="nav">
                    <li><a href="../../index.php" class="nav-link px-2 text-white a ">Home</a></li>
                    <li><a href="../madagascar.php"
                            class="nav-link px-2 text-white border-bottom border-warning border-2">Madagascar</a>
                    </li>
                    <li><a href="../about.php" class="nav-link px-2 text-white a">About Us</a></li>
                    <li><a href="../ourstours.php" class="nav-link px-2 text-white a">Our Tours</a>
                    </li>
                    <li><a href="../Rental_car.php" class="nav-link px-2 text-white a ">Car Rental</a>
                    </li>
                    <li><a href="../../assets/data/new/Madagascar_tourism_new.php"
                            class="nav-link px-2 text-white a">News</a>
                    </li>
                    <li><a href="../contact.php" class="nav-link px-2 text-white a">Contact Us</a></li>
                </ul>

                <!-- Personal Adventure Button -->
                <div class="col-auto col-md-3 d-none d-md-block text-end">
                    <a href="../personal_adventure.php" class="btn btn-sm rounded-pill text-white fw-bold colorbouton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                        </svg>
                        Create your personal Adventure
                    </a>
                </div>

                <!-- Mobile Navigation Menu -->
                <ul class="nav flex-column bg-dark position-absolute top-100 start-0 w-100 d-md-none p-3 d-none"
                    id="mobile-menu">
                    <li><a href="../../index.php" class="nav-link text-white  a" id="nav">Home</a></li>
                    <li><a href="../madagascar.php" class="nav-link text-white a" id="nav">Madagascar</a></li>
                    <li><a href="../about.php" class="nav-link text-white a" id="nav">About Us</a></li>
                    <li><a href="../ourstours.php" class="nav-link text-white a" id="nav">Our Tours</a></li>
                    <li><a href="../Rental_car.php" class="nav-link text-white a" id="nav">Car Rental</a></li>
                    <li><a href="../../assets/data/new/Madagascar_tourism_new.php" class="nav-link text-white a"
                            id="nav">News</a>
                    </li>
                    <li><a href="../contact.php" class="nav-link text-white a" id="nav">Contact Us</a></li>
                </ul>



            </header>
        </div>
    </header>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");

            // Fonction pour ouvrir/fermer le menu
            menuToggle.addEventListener("click", function (event) {
                mobileMenu.classList.toggle("d-none");
                menuToggle.classList.toggle("active");
                event.stopPropagation(); // Empêche de fermer immédiatement après ouverture
            });

            // Fermer le menu en cliquant en dehors
            document.addEventListener("click", function (event) {
                if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                    mobileMenu.classList.add("d-none"); // Ferme le menu
                    menuToggle.classList.remove("active"); // Réinitialise l'icône
                }
            });
        });
    </script>

    <div class="position-sticky bg-white shadow-sm raccourci " style="top: 4rem;">
        <div class=" row pb-2 pt-1 ">
            <div class="col-2 col-lg-1 py-2 text-center bg-info bg-opacity-10 " style="border-radius: 5px 0 0 5px;">
                <a href="../../index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="text-primary bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                    </svg>
                </a>
            </div>
            <div class="col-10  col-lg-11 py-2 bg-white  " style="border-radius: 0 10px 10px 0;">
                <a href="../../index.php" style="text-decoration: none; color: blueviolet;">Madagascar</a> ::
                <a href="east_of_madagascar.php" style="text-decoration: none;">East</a> |
                <a href="north_of_madagascar.php" style="text-decoration: none;">North</a> |
                <a href="center_of_Madagascar.php" style="text-decoration: none;">Central</a> |
                <a href="west_of_madagascar.php" style="text-decoration: none;">West</a> |
                <a href="southWest_of_Madgascar.php" style="text-decoration: none;">South west</a>| South


            </div>
        </div>
    </div>

    <!-------------------home---------------->

    <main class=" shadow-sm bg-white rounded p-3 shadow">

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../assets/images/berenty.webp" class=" w-100 h-100 car" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="../../assets/images/berenty1.webp" class=" w-100 h-100 car" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../../assets/images/city/toliara.webp" class=" w-100 h-100 car" alt="...">
                </div>
                <div class="carousel-caption">
                    <h1>Southern Madagascar </h1>
                    <p class="fw-bold">A Land of Contrasts and Wonders</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <div class="col-lg-7 mx-auto">
            <div class="text-center py-3 ">
                <p>Southern Madagascar is a fascinating region where deserts, baobabs, paradise beaches, and
                    national parks
                    come together.
                    It’s an ideal destination for adventure seekers, nature lovers, and those looking for breathtaking
                    landscapes. Here’s a
                    detailed guide to the must-visit places in southern Madagascar.</p>
                <h4>Why Explore Southern Madagascar?</h4>
                <p class="shadow-sm p-3 bg-light text-start"> - A diverse landscape: deserts, beaches, forests, and
                    mountains <br>
                    - Unique biodiversity with endemic species <br>
                    - Sunny weather all year round <br>
                    - Unforgettable encounters with local communities</p>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ">
                        <button class="accordion-button bg-warning bg-opacity-10 shadow-sm border-bottom " type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Fort-Dauphin
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Located on the southeast coast of Madagascar, Fort-Dauphin (or Tolagnaro) is one of the
                                most historically rich cities in
                                Madagascar, having been the site of numerous colonial expeditions during the 16th and
                                17th centuries. An important
                                commercial port, the city is also a major tourist destination, known not only for its
                                natural sites but also for its
                                historical landmarks.</p>

                            <p>
                                <b>Pic Saint-Louis</b> <br>
                                Hiking to Pic Saint-Louis is a must-do excursion from the city of Fort-Dauphin. While
                                the climb can be challenging, the
                                effort is well worth it, offering one of the most stunning views of Madagascar with a
                                panoramic perspective of the
                                surrounding landscape from an altitude of 500 meters. <br><br>

                                <b>Evatraha</b> <br>
                                The fishing village of Evatraha is one of the most popular tourist destinations in
                                Tolagnaro. Accessible on foot, by
                                boat, or by car, this charming village offers breathtaking views of mangroves, the sea,
                                golden sand, and traditional
                                cottages. <br><br>

                                <b>Lokaro</b><br>
                                Located just outside the city, Lokaro Bay is perfect for adventure lovers and beach
                                enthusiasts. Rarely visited by
                                tourists, it guarantees a peaceful escape. To reach the bay, you can either take a boat
                                to Evatraha and hike for about
                                an hour, or drive directly by 4x4. The beauty of the location makes the journey
                                worthwhile. <br><br>

                                <b>Nahampoana Reserve</b> <br>
                                The Nahampoana Reserve, located 7 km from Fort-Dauphin, is a botanical garden and a
                                sanctuary for lemurs. Many of the
                                lemur species native to southern Madagascar can be spotted in this 50-hectare
                                colonial-era garden, filled with Ravinala,
                                lemon eucalyptus, and other exotic plants. It’s an ideal spot to visit in the morning
                                when the lemurs are most active.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-warning bg-opacity-10 shadow-sm border-bottom" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true"
                            aria-controls="collapse2">
                            Berenty
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <img src="../../assets/images/berenty1.webp" alt="" width="100%"> <br><br>
                            <p>The <b>Berenty Private Reserve</b> is not just a well-preserved natural park, but also an
                                open-air scientific laboratory.
                                Spanning 1,000 hectares of protected land, the reserve is home to a variety of animal
                                and plant species, including
                                lemurs, bats, and the iconic turtles of southern Madagascar. The site promotes
                                ecotourism and attracts numerous
                                conservationists dedicated to species protection.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center mt-5">
            <h1 class="titre">Choose another destination below. </h1>
        </div>
        <div class="container px-4" id="custom-cards">
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col col-lg-4">
                    <a href="north_of_madagascar.php" class="text-decoration-none ">
                        <div class="card card-cover h-100 text-bg-dark  image-hover"
                            style="background-image: url('../../assets/images/north.webp'); background-size: cover; background-repeat: no-repeat;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                <h3 class="pt-5 pb-5 mt-4 mb-5 fw-bold">NORTH</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col col-lg-4">
                    <a href="../place/east_of_madagascar.php" class="text-decoration-none ">
                        <div class="card card-cover h-100 text-bg-dark   image-hover"
                            style="background-image: url('../../assets/images/indriindri.webp'); background-size: cover; background-repeat: no-repeat;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                <h3 class="pt-5 pb-5 mt-4 mb-5  fw-bold">EAST</h3>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col col-lg-4 ">
                    <a href="../place/west_of_madagascar.php" class="text-decoration-none ">
                        <div class="card card-cover h-100 text-bg-dark   image-hover"
                            style="background-image: url('../../assets/images/tsingy.webp'); background-size: cover; background-repeat: no-repeat;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                <h3 class="pt-5 pb-5 mt-4 mb-5  fw-bold">WEST</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-4">
                    <a href="../place/southWest_of_Madgascar.php" class="text-decoration-none ">
                        <div class="card card-cover h-100 text-bg-dark  image-hover"
                            style="background-image: url('../../assets/images/city/aller.webp'); background-size: cover; background-repeat: no-repeat;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                <h3 class="pt-5 pb-5 mt-4 mb-5  fw-bold">SOUTH WEST</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-4">
                    <a href="" class="text-decoration-none ">
                        <div class="card card-cover h-100 text-bg-dark  image-hover"
                            style="background-image: url('../../assets/images/antananarivo.webp'); background-size: cover; background-repeat: no-repeat;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                <h3 class="pt-5 pb-5 mt-4 mb-5 d  fw-bold">THE CENTRAL</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

           <div class="fixed-footer">
            <div class="scrolling-text">
                🇲🇬 Tongasoa! &nbsp; <b class="text-warning">PROMOTIONS : </b> Discounts for the <b class="text-warning"> low season -15%</b> on tours Feb-May &nbsp;&nbsp; <b>/</b> Reduced rates for families, friends, Groups <b class="text-warning">- 15% </b> (4 people or more) &nbsp;&nbsp; <b>/</b> Duo travel deal <b class="text-warning">-10%</b> discount when traveling as a pair <img src="../../assets/images/logo.png" class="rounded-pill" alt="" width="25px">

            </div>
        </div>


    </main>


    <!------------------------- FOOTER --------------------------------------------------------->
    <div class="container bg text-white rounded">

        <footer class="pt-5 ">
            <div class="row">
                <div class="col-6 col-lg-2 mb-3  text-center ">
                    <img src="../../assets/images/logo.png" class="rounded-circle" width="100%" alt="">
                </div>
                <div class="col-6 col-lg-2 mb-3 text-center ">
                    <h4 class="corps ligne">FHL Travel</h4>
                    <a href="../../index.php" class="nav-link p-0 text-body-white text-white a">Home</a>
                    <a href="../madagascar.php" class="nav-link p-0 text-white a">Madagascar </a>
                    <a href="../about.php" class="nav-link p-0 text-white a">About Us </a>
                    <a href="../ourstours.php" class="nav-link p-0 text-white a">Our Tours</a>
                    <a href="../Rental_car.php" class="nav-link p-0 text-white a">Car Rental</a>
                    <a href="../../assets/data/new/Madagascar_tourism_new.php"
                        class="nav-link p-0 text-white a">News</a>
                    <a href="../contact.php" class="nav-link p-0 text-white a">Contact Us </a>

                </div>

                <div class="col-6 col-lg-2 mb-3 text-center">
                    <h4 class="corps ligne">Ours Tours</h4>

                    <a href="../tours/wonderSouth.php" class="nav-link p-0 text-white a">- Wonders of the
                        South</a>
                    <a href="../tours/Day_One_Andasibe.php" class="nav-link p-0 text-white a">- One Day
                        Andasibe</a>
                    <a href="../tours/Tsingy_Ifaty.php" class="nav-link p-0 text-white a">- Tsingy - Ifaty</a>
                    <a href="../tours/NosyBe_Tour.php" class="nav-link p-0 text-white a">- Nosy Be Tour</a>
                    <a href="../tours/wonderSouth_Andasibe.php" class="nav-link p-0 text-white a">- Amazing island
                        of
                        thr South / Andasibe </a>
                    <a href="../tours/exploration&adventure.php" class="nav-link p-0 text-white a">- Exploration
                        and
                        adventure </a>
                    <a href="../tours/colorsofEast.php" class="nav-link p-0 text-white a">- Scents and colors of
                        the
                        East </a>
                    <a href="../tours/Mystic_west_&_RN7_Discovery.php" class="nav-link p-0 text-white a">- Mystic
                        West
                        and RN7 discovery</a>


                </div>

                <div class="col-6 col-lg-2 mb-3 text-center ">
                    <h4 class="corps ligne">Better To see </h4>
                    <a href="#" class="nav-link p-0 text-white a">Avenue of The Baobabs</a>
                    <a href="#" class="nav-link p-0 text-white a">Isalo National Park</a>
                    <a href="#" class="nav-link p-0 text-white a">Andasibe-Mantadia</a>
                    <a href="#" class="nav-link p-0 text-white a">Rovan'Ambohimaga</a>
                    <a href="#" class="nav-link p-0 text-white a">Lemurs Park</a>
                    <a href="#" class="nav-link p-0 text-white a">Ranomafana National Park </a>
                    <a href="#" class="nav-link p-0 text-white a">Tsingy Of Bemaraha</a>
                    <a href="#" class="nav-link p-0 text-white a">Antananarivo</a>
                    <a href="#" class="nav-link p-0 text-white a">Nosy Be</a>

                </div>

                <div class="col-lg-3 mb-3 ">
                    <h4 class="corps text-center ligne">CONTACT INFO </h4>

                    <a href="#" class="a nav-link p-0 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" fill="currentColor" class="bi bi-geo-alt " viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg> LOT VS 99 DAE / BE
                        Andranovory,
                        Antananarivo 101 <br> -18.91830951832678, 47.57559714124707</a> <br>

                    <a href="../contact.php" class="a nav-link p-0 text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        contact@fhltravel.com</a> <br>

                    <a href="https://wa.me/261329572020" target="_blank" class="a nav-link p-0 text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg> +261 32 95 720 20
                    </a> <br>
                    <p>Open Monday to Saturday, 8 AM – 6 PM</p>
                    <div class="border rounded p-3">
                        <p class="ligne">FOLLOW US ON SOCIAL MEDIA</p>

                       <div class="row g-4 ">
                            <div class="col"><a href="https://www.facebook.com/profile.php?id=100081146902072" target="_blank" class="text-white" aria-label="FHL Travel Madagascar"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg></a></div>
                            <div class="col"><a href="https://www.instagram.com/fhltours?igsh=amR1NnowZHV4c2di" target="_blank" class="text-white" aria-label="FHL Travel Madagascar"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg></a></div>
                            <div class="col"><a href="https://www.tiktok.com/@fhl.travel.madaga?_t=ZM-8ucli1tHKYo&_r=1" target="_blank" class="text-white" aria-label="FHL Travel Madagascar"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                    </svg></a></div>
                            <div class="col"><a href="https://wa.me/261329572020" target="_blank" class="text-white" aria-label="FHL Travel Madagascar"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                    </svg></a></div>
                            <div class="col"><a href="https://g.co/kgs/zcTmM6A" target="_blank" class="text-white" aria-label="FHL Travel Madagascar"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                                    </svg></a></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto ">
                    <div class=" py-4 border-top text-center">
                        <p>&copy; 2025 FHL Tec Madagascar, Inc. All rights reserved.</p>

                    </div>
                </div>
            </div>

        </footer>
    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>