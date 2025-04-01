<?php
// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=fhltravel", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données de `new`

    $bb = $pdo->query("SELECT id, contenu, image, titre, date FROM new ORDER BY id DESC LIMIT 3");
    $new = $bb->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer toutes les entrées sauf les 2 dernières
    $stmt = $pdo->query("SELECT id, contenu, image, titre, date FROM new ORDER BY id DESC LIMIT 18446744073709551615 OFFSET 2");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Explore Madagascar with FHL Madagascar Travel. We offer tailor-made tours, car rentals, and private drivers for unforgettable adventures in Madagascar.">
    <meta name="author" content="Andriantsoa Finoana Ny Aina, FHL Madagascar Travel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Patrick+Hand+SC&family=Special+Elite&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/globalcss.css?v=<?= filemtime('assets/css/globalcss.css'); ?>">
    <title>FHL Madagascar Travel - Car Rental & Adventure Tours</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">


</head>

<body class="bg  f">

    <!-----------------------------------------Navbar----------------------------------------- -->

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
                            <a href="content/contact.php" target="_blank" class="nav-link px-2 text-white a">
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
                            <a href="assets/data/login.php" class="nav-link px-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
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
                <a href="index.php" class="d-flex align-items-center col-auto col-md-3 text-white text-decoration-none titre fw-bold">
                    <img src="assets/images/logo.png" width="50px" class="rounded-circle" alt="FHL Madagascar">
                    <span class="ms-2">FHL Travel Madagascar</span>
                </a>

                <!-- Hamburger Menu Button -->
                <button class="navbar-toggler d-md-none text-white fs-2" type="button" id="menu-toggle">
                    ☰
                </button>

                <!-- Navigation Menu -->
                <ul class="nav d-none d-md-flex col-md-6 justify-content-center mb-2 mb-md-0 mx-auto" id="nav">
                    <li><a href="index.php" class="nav-link px-2 text-white border-bottom border-warning border-2 ">Home</a></li>
                    <li><a href="content/madagascar.php" class="nav-link px-2 text-white a">Madagascar</a></li>
                    <li><a href="content/about.php" class="nav-link px-2 text-white a">About Us</a></li>
                    <li><a href="content/ourstours.php" class="nav-link px-2 text-white a">Our Tours</a></li>
                    <li><a href="content/Rental_car.php" class="nav-link px-2 text-white a">Car Rental</a></li>
                    <li><a href="assets/data/new/Madagascar_tourism_new.php" class="nav-link px-2 text-white a">News</a></li>
                    <li><a href="content/contact.php" class="nav-link px-2 text-white a">Contact Us</a></li>
                </ul>

                <!-- Personal Adventure Button -->
                <div class="col-auto col-md-3 d-none d-md-block text-end">
                    <a href="content/personal_adventure.php" class="btn btn-sm rounded-pill text-white fw-bold colorbouton">
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
                    <li><a href="index.php" class="nav-link text-white  a" id="nav">Home</a></li>
                    <li><a href="content/madagascar.php" class="nav-link text-white a" id="nav">Madagascar</a></li>
                    <li><a href="content/about.php" class="nav-link text-white a" id="nav">About Us</a></li>
                    <li><a href="content/ourstours.php" class="nav-link text-white a" id="nav">Our Tours</a></li>
                    <li><a href="content/Rental_car.php" class="nav-link text-white a" id="nav">Car Rental</a></li>
                    <li><a href="assets/data/new/Madagascar_tourism_new.php" class="nav-link text-white a" id="nav">News</a></li>
                    <li><a href="content/contact.php" class="nav-link text-white a" id="nav">Contact Us</a></li>
                </ul>



            </header>
        </div>
    </header>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");

            // Fonction pour ouvrir/fermer le menu
            menuToggle.addEventListener("click", function(event) {
                mobileMenu.classList.toggle("d-none");
                menuToggle.classList.toggle("active");
                event.stopPropagation(); // Empêche de fermer immédiatement après ouverture
            });

            // Fermer le menu en cliquant en dehors
            document.addEventListener("click", function(event) {
                if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                    mobileMenu.classList.add("d-none"); // Ferme le menu
                    menuToggle.classList.remove("active"); // Réinitialise l'icône
                }
            });
        });
    </script>



    <!-------------------home---------------->

    <main class=" shadow-sm bg-white shadow ">
        <div id="divbody" class="mb-2 text-white ima">
            <!-- Div pour l'image de fond animée -->
            <div id="background-image"></div>

            <div class="row text-center txt">
                <div class="col-12 col-lg-9 mx-auto mainty p-5">
                    <h1 class="fs-4 mt-0 mb-0 pt-0 text-start">
                        <p class="m-0  text-center">Tongasoa! 🇲🇬</p>
                        <div class="row g-0">
                            <div class="col">
                                <p class="m-0  text-start">Bienvenue! 🇫🇷</p>
                            </div>
                            <div class="col">
                                <p class="m-0  pt-2 text-center f border-top fw-bold">A Unique Island in the World</p>
                            </div>
                            <div class="col">
                                <p class="m-0  text-end">Welcome! 🇺🇸</p>
                            </div>
                        </div>
                    </h1>
                    <p class="text-center fw-bold my-4 txt bd">BE READY TO SNAP A PHOTO!</p>
                    <p class="text-center bg-opacity-50 py-2 px-3 mb-4 fw-bold f">
                        Discover the untamed beauty of Madagascar – where breathtaking landscapes, unique wildlife, and warm hospitality await. Your adventure starts here!
                    </p>
                    <a href="content/ourstours.php" class="btn fw-bold text-white mt-2 karla rounded-pill whatsapp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1z" />
                            <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                        </svg> Check all our Tours
                    </a>
                    <a href="content/personal_adventure.php" class="btn fw-bold text-white mt-2 karla rounded-pill colorbouton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                        </svg> Create your personal Adventure
                    </a>
                </div>
            </div>

        </div>


        <div class="text-center mt-5 ">
            <h1 class="d-inline-block mb-2 fw-bold titre text-uppercase color ligne txt fs-2 ">
                Discover Madagascar</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p class="mt-4 mx-4 mb-5 txt">Dive into adventure by discovering Madagascar, a fascinating island full of
                        wonders
                        where
                        every corner of
                        paradise
                        reveals exceptional nature, lush tropical forests, pristine beaches, and unique wildlife and
                        flora, all
                        enriched by the
                        warmth of its people and a culture as rich as it is diverse. This unforgettable experience will
                        captivate
                        your senses
                        and leave you with memories to cherish forever.</p>

                </div>

            </div>

        </div>

        <div class="bg-light mt-2 pg-3 txt ">
            <div class="text-center pt-3  rounded f  ">
                <div class="row">
                    <div class="col-lg-6"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="text-warning bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg> <b class="fs-4 "> <?php echo date("l, F j, Y") ?> / <a href="assets/data/new/Madagascar_tourism_new.php">NEWS </a> </b> </p>
                    </div>
                    <div class="col-lg-6"><b class=" fs-3 titre1 ">Recent updates on tourism in Madagascar</b></div>
                </div>

            </div>
            <div class="px-3 m-3 shadow-sm rounded-3">

                <div class="row g-3 pb-4">

                    <?php foreach ($new as $newsItem): ?>
                        <div class=" col-12 col-lg-4">
                            <a href="assets/data/new/news.php?id=<?= htmlspecialchars(intval($newsItem['id'])); ?>">
                                <div class="card">
                                    <?php if (!empty($newsItem["image"])): ?>
                                        <img src="assets/data/new/<?= htmlspecialchars($newsItem["image"]); ?>" class="card-img" alt="Image" style=" height: 400px; object-fit: cover; width: 100%;">
                                    <?php endif; ?>
                                    <div class="card-img-overlay text-white">
                                        <p class="card-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-calendar3 text-warning" viewBox="0 0 16 16">
                                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                            <?= htmlspecialchars($newsItem["date"]); ?>
                                        </p>
                                        <strong class="card-title fs-5"><?= htmlspecialchars($newsItem["titre"]); ?></strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!----------------------------------------- best bookes tour --------------------------------------------->
        <div class="container">
            <div class="text-center mb-4 mt-3 ">
                <h2 class="d-inline-block mt-4 fw-bold text-uppercase titre color rounded ligne ">
                    Best
                    selling tours
                </h2>
                <p>Highly
                    Booked Tours : <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                </p>

            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p class="mt-4 mb-5 txt">Explore the beauty of Madagascar with our carefully designed tours. From lush rainforests to stunning beaches, unique wildlife, and rich culture, our adventures offer unforgettable experiences across the island. Whether you seek adventure, relaxation, or cultural discovery, we have the perfect tour for you!</p>
                </div>

            </div>



            <div class="row g-5 pb-2 shadow-sm  ">

                <div class=" col-lg-4  rounded-3 ">
                    <a href="content/tours/Day_One_Andasibe.php" class="btn rounded hover-card pt-3">

                        <div class="bb">

                            <img src="assets/images/indriindri.webp" class=" sary  mb-2" alt="">
                        </div>
                        <div class="text-end">
                            <span class="badge rounded-pill fs-6 " style="background-color:#2D7DB3 ;">New</span>
                        </div>
                        <h3 class="text-body-emphasis titre fw-bold">DAY ONE ANDASIBE</h3>
                        <p class=" f">Visit directly Andasibe National Park (Analamazotra reserve) that you will
                            discover the
                            biggest lemur alive in the wild
                            which is the Indri Indri ... <code><b>Read more</b></code>
                        </p>
                        <p class="f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg> 1 Day - 0 Night <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>1-15 pers
                        </p>

                    </a>
                </div>
                <div class="col-lg-4  rounded-3 ">
                    <a href="content/tours/NosyBe_Tour.php" class="btn rounded hover-card pt-3">

                        <div class="bb">
                            <img src="assets/images/nosybe.webp" class="sary  mb-2" alt="">
                        </div>

                        <h3 class="text-body-emphasis titre color fw-bold">7 DAY NOSY BE TOUR</h3>
                        <p class=" f">A 7-day Escapade to escape as a couple, with friends or family, between high-end
                            hotel
                            services and visit the natural
                            sanctuaries of the Nosy Be ... <code><b>Read more</b></code></p>
                        <p class="f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg> 7 Day - 6 Night <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>1-15 pers
                        </p>

                    </a>
                </div>
                <div class="col-lg-4  rounded-3">
                    <a href="content/tours/Tsingy_Ifaty.php" class="btn rounded  hover-card pt-3">

                        <div class="bb">
                            <img src="assets/images/tsingy.webp" class="sary mb-2" alt="">
                        </div>
                        <h3 class="text-body-emphasis titre color fw-bold">15 DAY BAOBAB - TSINGY to IFATY</h3>
                        <p class=" f">The coastal track, the environment becomes more African, semi-arid, made of
                            baobabs, thorny
                            and various plants all as
                            strange as the others. The mysterious west … <code><b>Read more</b></code>
                        </p>
                        <p class="f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg> 15 Day - 14 Night <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>1-15 pers
                        </p>

                    </a>
                </div>
                <div class="col-lg-4  rounded-3">
                    <a href="content/tours/wonderSouth_Andasibe.php" class="btn  rounded  hover-card pt-3">

                        <div class="bb">
                            <img src="assets/images/city/toliara1.webp" class="sary mb-2" alt="">
                        </div>

                        <h3 class=" text-body-emphasis color titre fw-bold">AMAZING ISLAND OF THE SOUTH / ANDASIBE</h3>
                        <p class=" f">The 12-day tour from Tananarive – Andasibe to Ifaty allows you to visit the
                            paradisiacal sites
                            of the Big Island. Along
                            the way, you will have the opportunity to discover local crafts, visit several national
                            parks and
                            reserves. During this
                            Andasibe National Park tour … <code><b>Read more</b></code>
                        </p>
                        <p class="f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg> 12 Day - 11 Night <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>1-15 pers
                        </p>

                    </a>
                </div>
                <div class="col-lg-4  rounded-3">
                    <a href="content/tours/wonderSouth.php" class="btn rounded  hover-card pt-3">

                        <div class="bb">
                            <img src="assets/images/city/toliara.webp" class="sary mb-2" alt="">
                        </div>

                        <h3 class=" text-body-emphasis titre color fw-bold">9 DAYS WONDERS of the SOUTH</h3>
                        <p class=" f">We take you on a journey along the Southern Route, starting from the Highlands and leading all the way to the southernmost tip of Madagascar, by the sea. Along the way, you will discover breathtaking and authentic landscapes full of color, welcoming … <code><b>Read more</b></code>
                        </p>
                        <p class="f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg> 9 Day - 8 Night <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>1-15 pers
                        </p>

                    </a>
                </div>
                <div class="col-lg-4  rounded-3">
                    <a href="content/tours/colorsofEast.php" class="btn rounded  hover-card pt-3">

                        <div class="bb">
                            <img src="assets/images/east.webp" class="sary mb-2" alt="">
                        </div>

                        <h3 class=" text-body-emphasis titre color fw-bold">SCENTS and COLORS of The EAST </h3>
                        <p class=" f">This tour offers an immersive experience filled with discoveries and local encounters. Beyond Madagascar’s rich biodiversity, the East Coast's lush landscapes and diverse transport modes like the cliffside train and motorboats create an off the beaten path adventure. </p>
                        <p class="f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg> 12 Day - 11 Night <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>1-15 pers
                        </p>

                    </a>
                </div>

                <div class="row p-3">
                    <div class="col-lg-5 mx-auto mb-4 text-center ">
                        <a href="content/ourstours.php" class="btn whatsapp fw-bold btn-lg text-white text-decoration-none karla rounded-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                <path d="M7.5 1v7h1V1z" />
                                <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                            </svg> Check all our
                            Tours</a>
                    </div>

                </div>
            </div>
        </div>



        <div class="text-center border-bottom pt-4 mt-3 pb-3">
            <h2 class="d-inline-block mb-2 mt-3 fw-bold text-uppercase titre color ligne">
                Plan
                your next visit in Madagascar</h2>
            <div class="col-lg-8 mx-auto">
                <p class="mt-5 mx-4">Planning an adventure in Madagascar with <b class="text-primary-emphasis">FHL Travel</b> means choosing an authentic and unique
                    experience, guided by a Malagasy
                    company that knows every corner of this beautiful island intimately. As a local creator, FHL Travel offers
                    you the
                    chance to
                    explore Madagascar through the eyes of someone passionate and experienced in visiting its
                    landscapes,
                    cultures, and
                    hidden gems. With local expertise and a personalized approach, FHL guarantees unforgettable moments,
                    providing
                    you with
                    an enriching and immersive adventure that can't be found anywhere else. Choosing FHL is opting for
                    local
                    service, total
                    immersion, and an authentic discovery of Madagascar!</p>
            </div>
            <div class="container px-4" id="custom-cards">
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col col-lg-4">
                        <a href="content/place/north_of_madagascar.php" class="text-decoration-none ">
                            <div class="card card-cover h-100 text-bg-dark  image-hover border-white"
                                style="background-image: url('assets/images/north.webp'); background-size: cover; background-repeat: no-repeat;">
                                <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                    <h3 class="pt-5 pb-5 mt-4 mb-5 fw-bold">NORTH</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col col-lg-4 ">
                        <a href="content/place/south_of_madagascar.php" class="text-decoration-none  ">
                            <div class="card card-cover h-100 text-bg-dark image-hover border-white"
                                style="background-image: url('assets/images/city/toliara.webp'); background-size: cover; background-repeat: no-repeat;">
                                <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                    <h3 class="pt-5 pb-5 mt-4 mb-5 fw-bold">SOUTH</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col col-lg-4">
                        <a href="content/place/east_of_madagascar.php" class="text-decoration-none ">
                            <div class="card card-cover h-100 text-bg-dark   image-hover border-white"
                                style="background-image: url('assets/images/eastmadagascar.webp'); background-size: cover; background-repeat: no-repeat;">
                                <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                    <h3 class="pt-5 pb-5 mt-4 mb-5  fw-bold">EAST</h3>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col col-lg-4 ">
                        <a href="content/place/west_of_madagascar.php" class="text-decoration-none ">
                            <div class="card card-cover h-100 text-bg-dark   image-hover border-white"
                                style="background-image: url('assets/images/tsingy.webp'); background-size: cover; background-repeat: no-repeat;">
                                <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                    <h3 class="pt-5 pb-5 mt-4 mb-5  fw-bold">WEST</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="content/place/southWest_of_Madgascar.php" class="text-decoration-none ">
                            <div class="card card-cover h-100 text-bg-dark  image-hover border-white "
                                style="background-image: url('assets/images/city/aller.webp'); background-size: cover; background-repeat: no-repeat;">
                                <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                    <h3 class="pt-5 pb-5 mt-4 mb-5  fw-bold">SOUTH WEST</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="content/place/center_of_Madagascar.php" class="text-decoration-none ">
                            <div class="card card-cover h-100 text-bg-dark  image-hover border-white"
                                style="background-image: url('assets/images/antananarivo.webp'); background-size: cover; background-repeat: no-repeat;">
                                <div class="d-flex flex-column h-100 p-5 pb-3 cardh">
                                    <h3 class="pt-5 pb-5 mt-4 mb-5 d  fw-bold">THE CENTRAL</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center pt-5 pb-5 px-5 bg-light bg-g border-bottom px-4 ">
            <h2 class="d-inline-block fw-bold corps1 text-uppercase color ligne ">
                Let's build your trip together
            </h2>

            <p class="mt-2 ">To better assist you, we invite you to contact us so we can discuss and build your travel
                project to
                Madagascar with
                you !!!<br>Feel free to write to us or call us from 9:30 AM to 7:00 PM GMT+3, Monday to Saturday, and
                Sunday
                from 1:00 PM
                to 5:00
                PM.</p>
            <div class="row pt-4 g-4 justify-content-center ">

                <div class="col-lg-3">
                    <a href="https://wa.me/261329572020" target="_blank" class="btn whatsapp fw-bold rounded-pill"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg> +261 32 95 720 20 </a>
                </div>
                <div class="col-lg-3">
                    <a href="content/contact.php" class="btn  mail fw-bold rounded-pill"><svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg> Send E-mail </a>
                </div>

                <div class="col-lg-4">
                    <a href="content/personal_adventure.php" class="btn text-white fw-bold rounded-pill colorbouton"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                        </svg> Create your personal Adventure</a>
                </div>

            </div>

        </div>

        <div class="fixed-footer">
            <div class="scrolling-text">
                🇲🇬 Tongasoa! &nbsp; <b class="text-warning">PROMOTIONS : </b> Discounts for the <b class="text-warning"> low season -15%</b> on tours Feb-May &nbsp;&nbsp; <b>/</b> Reduced rates for families, friends, Groups <b class="text-warning">- 15% </b> (4 people or more) &nbsp;&nbsp; <b>/</b> Duo travel deal <b class="text-warning">-10%</b> discount when traveling as a pair <img src="assets/images/logo.png" class="rounded-pill" alt="" width="25px">

            </div>
        </div>



        <!----------------------Reviews------------------------------------>

    </main>


    <!------------------------- FOOTER --------------------------------------------------------->
    <div class="container bg text-white rounded">

        <footer class="pt-5 ">
            <div class="row">
                <div class="col-6 col-lg-2 mb-3  text-center ">
                    <img src="assets/images/logo.png" class="rounded-circle" width="100%" alt="">
                </div>
                <div class="col-6 col-lg-2 mb-3 text-center ">
                    <strong class="corps ligne">FHL Travel</strong>
                    <a href="index.php" class="nav-link p-0 text-body-white text-white a">Home</a>
                    <a href="content/madagascar.php" class="nav-link p-0 text-white a">Madagascar </a>
                    <a href="content/about.php" class="nav-link p-0 text-white a">About Us </a>
                    <a href="content/ourstours.php" class="nav-link p-0 text-white a">Our Tours</a>
                    <a href="content/Rental_car.php" class="nav-link p-0 text-white a">Car Rental</a>
                    <a href="assets/data/new/Madagascar_tourism_new.php" class="nav-link p-0 text-white a">News</a>
                    <a href="content/contact.php" class="nav-link p-0 text-white a">Contact Us </a>

                </div>

                <div class="col-6 col-lg-2 mb-3 text-center">
                    <strong class="corps ligne">Ours Tours</strong>

                    <a href="content/tours/wonderSouth.php" class="nav-link p-0 text-white a">- Wonders of the South</a>
                    <a href="content/tours/Day_One_Andasibe.php" class="nav-link p-0 text-white a">- One Day Andasibe</a>
                    <a href="content/tours/Tsingy_Ifaty.php" class="nav-link p-0 text-white a">- Tsingy - Ifaty</a>
                    <a href="content/tours/NosyBe_Tour.php" class="nav-link p-0 text-white a">- Nosy Be Tour</a>
                    <a href="content/tours/wonderSouth_Andasibe.php" class="nav-link p-0 text-white a">- Amazing island of thr South / Andasibe </a>
                    <a href="content/tours/exploration&adventure.php" class="nav-link p-0 text-white a">- Exploration and adventure </a>
                    <a href="content/tours/colorsofEast.php" class="nav-link p-0 text-white a">- Scents and colors of the East </a>
                    <a href="content/tours/Mystic_west_&_RN7_Discovery.php" class="nav-link p-0 text-white a">- Mystic West and RN7 discovery</a>


                </div>

                <div class="col-6 col-lg-2 mb-3 text-center ">
                    <strong class="corps ligne">Better To see </strong>
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

                <div class="col-lg-3 mb-3 text-center">
                    <strong class="corps ligne">CONTACT INFO </strong>

                    <a href="#" class="a nav-link p-0 text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-geo-alt " viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg> LOT VS 99 DAE / BE
                        Andranovory,
                        Antananarivo 101 <br> -18.91830951832678, 47.57559714124707</a> <br>

                    <a href="content/contact.php" class="a nav-link p-0 text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
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

</html>