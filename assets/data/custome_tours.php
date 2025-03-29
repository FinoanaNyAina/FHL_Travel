<?php
// Récupération des données envoyées par le formulaire
$url = $_POST['url'];
$text = $_POST['text'];
$price = $_POST['price'];
$titre = $_POST['titre'];

//recuperation HTML
$htmlContent = isset($_POST['div']) ? $_POST['div'] : '';
$decodedHtml = html_entity_decode(urldecode(base64_decode($htmlContent)));
$sendprice = html_entity_decode(urldecode(base64_decode($price)));
$sendtitre = html_entity_decode(urldecode(base64_decode($titre)));
$sendtext = html_entity_decode(urldecode(base64_decode($text)));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Patrick+Hand+SC&family=Special+Elite&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../css/globalcss.css">
    <title>FHLTravel</title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon">

</head>

<body class="bg f">

    <!--Navbar -->
    <div class="container bg-black bg-opacity-25 rounded" style="font-size: 10px; font-weight: bold;">
        <div class="pb-1" id=" ">
            <div class="row ">
                <div class=" col-9 col-lg-8">
                    <ul class="nav">
                        <li><a href="https://wa.me/261329572020" class="nav-link px-2 text-white " target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg> +261 32 95 720 20 |</a>
                        </li>

                        <li><a href="https://www.facebook.com/profile.php?id=100081146902072" target="_blank" class="nav-link px-2 text-white a"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg></a></li>
                        <li><a href="https://www.instagram.com/fhltours?igsh=amR1NnowZHV4c2di" target="_blank" class="nav-link px-2 text-white a"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg></a></li>
                        <li><a href="https://www.tiktok.com/@fhl.travel.madaga?_t=ZM-8ucli1tHKYo&_r=1" target="_blank" class="nav-link px-2 text-white a"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                </svg></a></li>
                        <li><a href="https://g.co/kgs/zcTmM6A" target="_blank" class="nav-link px-2 text-white a"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                                </svg></a></li>

                    </ul>
                </div>
                <div class=" col-3 col-lg-4  ">
                    <ul class="nav justify-content-end">
                        <li class="justify-content-end">
                            <a href="" class="nav-link px-2 text-white"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-workspace" viewBox="0 0 16 16">
                                    <path
                                        d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    <path
                                        d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
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
                    <img src="../images/logo.png" width="50px" class="rounded-circle" alt="FHL Madagascar">
                    <span class="ms-2">FHL Travel Madagascar</span>
                </a>

                <!-- Hamburger Menu Button -->
                <button class="navbar-toggler d-md-none text-white fs-2" type="button" id="menu-toggle">
                    ☰
                </button>

                <!-- Navigation Menu -->
                <ul class="nav d-none d-md-flex col-md-6 justify-content-center mb-2 mb-md-0 mx-auto" id="nav">
                    <li><a href="../../index.php" class="nav-link px-2 text-white a ">Home</a></li>
                    <li><a href="../../content/madagascar.php" class="nav-link px-2 text-white a ">Madagascar</a>
                    </li>
                    <li><a href="../../content/about.php" class="nav-link px-2 text-white a">About Us</a></li>
                    <li><a href="../../content/ourstours.php" class="nav-link px-2 text-white a">Our Tours</a>
                    </li>
                    <li><a href="../../content/Rental_car.php" class="nav-link px-2 text-white a ">Car Rental</a>
                    </li>
                    <li><a href="Madagascar_tourism_new.php"
                            class="nav-link px-2 text-white a">News</a>
                    </li>
                    <li><a href="../../content/contact.php" class="nav-link px-2 text-white a">Contact Us</a>
                    </li>
                </ul>

                <!-- Personal Adventure Button -->
                <div class="col-auto col-md-3 d-none d-md-block text-end">
                    <a href="../../content/personal_adventure.php" class="btn btn-sm rounded-pill text-white fw-bold colorbouton">
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
                    <li><a href="../index.php" class="nav-link text-white  a" id="nav">Home</a></li>
                    <li><a href="../../content/madagascar.php" class="nav-link text-white a" id="nav">Madagascar</a></li>
                    <li><a href="../../content/about.php" class="nav-link text-white a" id="nav">About Us</a></li>
                    <li><a href="../../content/ourstours.php" class="nav-link text-white a" id="nav">Our Tours</a></li>
                    <li><a href="../../content/Rental_car.php" class="nav-link text-white a" id="nav">Car Rental</a></li>
                    <li><a href="Madagascar_tourism_new.php" class="nav-link text-white a"
                            id="nav">News</a>
                    </li>
                    <li><a href="../../content/contact.php" class="nav-link text-white a" id="nav">Contact Us</a></li>
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

    <main class=" shadow-sm bg-white shadow px-0">
        <div class="text-center bg shadow-sm py-3 ">
            <h2 class="text-white">You are choosing </h2>
            <p class="fw-bold fs-2 text-warning bd " id="send">
                <?php echo $sendtitre; ?>
            </p>
        </div>
        <div class="row py-4 px-5 ">

            <div class="col-12 col-lg-6">
                <img src="<?php echo $url; ?>" class="rounded shadow-lg" alt="" width="100%">
            </div>
            <div class="col-12 col-lg-6 ">
                <p>
                    <?php echo $sendtext;  ?>
                </p>
                <h4 class="color text-center ligne titre1 fs-3 fw-bold rounded"> The Itinerary </h4> <br>

                <div class=" col-12 col-lg-8 mx-auto">
                    <p>
                        <?php echo $decodedHtml;  ?>
                    </p>
                </div>

                <div class="m-4 p-3 bg-warning bg-opacity-10 shadow-sm">

                    <p>Choose how you want to explore Madagascar! If you love this itinerary, click <i><u>'Book This
                                Tour'</u></i> to secure your spot. Want a customized experience? Click <i><u>'Create
                                Your Personal Adventure'</u></i> to design a trip just for you!"</p>
                    <div class="text-center">
                        <form action="book_now.php" method="post">
                            <div style="display: none;">
                                <input type="text" name="tour" id="tour" value="">
                            </div>
                            <button type="submit" class="btn whatsapp rounded-pill fw-bold " onclick="envoyerContenu()"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                </svg> Book This Tour</button>

                            <a href="../../content/personal_adventure.php" class="btn colorbouton rounded-pill "> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                </svg> Create your personal Adventure</a>

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-12 col-lg-9 mx-auto text-center mt-4 border-top border-1">
                <h2 class=" p-4 fw-bold color">Customize This Tour</h2>
            </div>

            <div class="col-12 col-lg-6 mx-auto">
                <div class="bg-success bg-opacity-10 p-3 rounded">
                    <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-shield-lock text-success" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                            <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415" />
                        </svg></p>
                    <p> Your personal information is 100% secure with us. We use advanced encryption and data protection measures to ensure your privacy.
                        Your details will only be used to plan your trip and will never be shared with third parties without your consent.</p>

                    <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-dollar text-success" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                        </svg> </p>
                    <p> <b class="text-success fs-5">Flexible Payment :</b> We will contact you by email after your booking to discuss the payment options that suit you best.</p>

                </div>
                <br>

                <!------------------------------------------------  FORM   ------------------------------------------------------>

                <form action="send_custome_tours.php" method="post">
                    <div class="" style="display: none;">
                        <input type="text" class="form-control f" id="tour1" name="tour" value="" placeholder=" ... ">


                    </div>
                    <div class="row g-3 pb-3 mb-5  border shadow-sm px-3 rounded">

                        <p> <b class="fs-3 color">Travel Dates</b> <br> Select your preferred travel dates. If you are not
                            sure yet, an
                            estimated date is fine. This
                            helps us check availability
                            and plan your itinerary accordingly.</p>
                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="arrival" class="form-label"> <b>Arrival</b>. <br>Possible Arrival Date
                                (your best guess is fine)
                            </label>
                            <input type="date" class="form-control f" id="arrival" name="arrival" placeholder=" ">

                        </div>

                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="departure" class="form-label"> <b>Departure</b>. <br>Possible Departure Date
                                (your best guess is fine)
                            </label>
                            <input type="date" class="form-control f" id="departure" name="departure" placeholder=" ">

                        </div>
                    </div>


                    <div class="row g-3 pb-3 mb-5 border shadow-sm px-3 rounded">

                        <p> <b class="fs-3 color">Number of Travelers</b> <br> Let us know how many people will be traveling
                            with you. This
                            helps us arrange accommodations,
                            transport, and activities.</p>
                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="adults" class="form-label"> <b>Number of adults in your party</b>. <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-asterisk text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                </svg>
                                <br>Please indicate number of adults in your party.
                            </label>
                            <input type="text" class="form-control f" id="adults" name="adults" placeholder=" ... "
                                required>

                        </div>

                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="children" class="form-label"> <b>Number of Children in your party</b>. <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-asterisk text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                </svg>
                                <br>Please indicate number of children, and please tell us their ages.
                            </label>
                            <input type="text" class="form-control f" id="children" name="children" placeholder=" ..."
                                required>

                        </div>
                    </div>


                    <div class="row g-3 pb-3 mb-5 border shadow-sm px-3 rounded">

                        <p> <b class="fs-3 color">Accommodation Preference</b> <br> What type of accommodation do you prefer?
                        </p>
                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label class="form-label"> <b>Travel Style</b>. <svg xmlns="http://www.w3.org/2000/svg"
                                    width="15" height="15" fill="currentColor" class="bi bi-asterisk text-danger"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                </svg><br>
                                As a general rule if we have no guidance, we use our most commonly-requested style,
                                which is: An active itinerary with
                                plenty to do and little spare time. The best available midrange hotels with ambience
                                rather than luxury. Please pick as
                                many options as you like to help us to understand your own travel style.
                            </label>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value="Adventure - physical" id="1">
                                <label class="form-check-label" for="1">
                                    Adventure - physical
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value="Beach and coast" id="2">
                                <label class="form-check-label" for="2">
                                    Beach and coast
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value="Culture and history" id="3">
                                <label class="form-check-label" for="3">
                                    Culture and history
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox" value="Wildlife"
                                    id="4">
                                <label class="form-check-label" for="4">
                                    Wildlife
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value=" Relaxation and well-being" id="5">
                                <label class="form-check-label" for="5">
                                    Relaxation and well-being
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value="Lowest possible budget" id="6">
                                <label class="form-check-label" for="6">
                                    Lowest possible budget
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value="Medium budget" id="7">
                                <label class="form-check-label" for="7">
                                    Medium budget
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <input class="form-check-input" name="travelstyle[]" type="checkbox"
                                    value="Best standards possible = highest budget" id="8">
                                <label class="form-check-label" for="8">
                                    Best standards possible = highest budget
                                </label>
                            </div>
                            <div class="form-check image-hover">
                                <label class="form-check-label" for="9">
                                    Another :
                                </label>
                                <input type="text" class="form-control f" id="9" name="travelstyle[]"
                                    placeholder=" Another">

                            </div>

                        </div>
                    </div>


                    <div class="row g-3 pb-3 mb-5 border shadow-sm px-3 rounded">

                        <p> <b class="fs-3 color">Special Requests</b> <br> Do you have any specific requests or requirements? Let us know if you have dietary restrictions, <br>
                            - need a guide in a particular language, <br>
                            - have a preferred price range, or any other preferences. <br>
                            - You can also mention any special activities you'd like to include,
                            such as cultural experiences, adventure sports, or wildlife tours.</p>
                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="message" class="form-label fw-bold">Message </label>
                            <textarea name="message" id="message" class="form-control f" rows="3"
                                placeholder="Your Message"></textarea>

                        </div>


                    </div>


                    <div class="row g-3 pb-3 mb-5 border shadow-sm px-3 rounded">

                        <p> <b class="fs-3 color">Contact Information</b> <br> Please provide your contact details so we can
                            send you the itinerary and discuss any modifications. WhatsApp is
                            recommended for quick communication.</p>

                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="name" class="form-label"> <b>Name of the principal contact. <svg
                                        xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                        class="bi bi-asterisk text-danger" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg></b> <br>
                                Please note that we prefer it if you would please give us both your FAMILY and First
                                names, to help us save and search
                                for your itinerary in our system. </label>
                            <input type="text" class="form-control f" id="name" name="name" placeholder="Your name"
                                required>

                        </div>

                        <div class="col-12 shadow-sm p-3 bg-light ">
                            <label for="email" class="form-label"><b>Adresse e-mail</b> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-asterisk text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                </svg></label>
                            <input type="email" class="form-control f" id="email" name="email"
                                placeholder="you@example.com" value="" required>
                        </div>

                        <div class="col-12 shadow-sm p-3 bg-light">
                            <label for="phone" class="form-label"> <b>Phone number (WhatsApp, ...)</b>. <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-asterisk text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                </svg> <br>Please give us a verifiable
                                number
                            </label>
                            <input type="tel" class="form-control f" id="phone" name="phone" placeholder="Phone number"
                                required>

                        </div>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                        <label class="form-check-label" for="flexSwitchCheckDefault">I have reviewed my details and agree to the terms of service and privacy policy.</label>
                    </div> <br>
                    <div class="text-center">
                        <button class="btn text-white btn-lg fw-bold f rounded-pill whatsapp" type="submit" onclick="envoyerContenu()">BOOK NOW
                        </button>
                    </div>


                </form>
            </div>
        </div>

        <div class="fixed-footer">
            <div class="scrolling-text">
                🇲🇬 <img src="../images/logo.png" class="rounded-pill" alt="" width="25px"> Welcome to FHL
                Madagascar
                Travel ! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Discover our tours! &nbsp;&nbsp;&nbsp; / <b
                    class="text-warning">PROMOTIONS : </b> Discounts for the <b class="text-warning"> low season
                    -15%</b> on
                tours Feb-May &nbsp;&nbsp; <b>/</b> Reduced rates for families and friends <b class="text-warning">- 10%
                </b>&nbsp;&nbsp; <b>/</b> Duo travel deal <b class="text-warning">-10%</b> discount when traveling
                as a pair
                <img src="../images/logo.png" class="rounded-pill" alt="" width="25px">


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
                    <a href="../../content/madagascar.php" class="nav-link p-0 text-white a">Madagascar </a>
                    <a href="../../content/about.php" class="nav-link p-0 text-white a">About Us </a>
                    <a href="../../content/ourstours.php" class="nav-link p-0 text-white a">Our Tours</a>
                    <a href="../../content/Rental_car.php" class="nav-link p-0 text-white a">Car Rental</a>
                    <a href="../../assets/data/new/Madagascar_tourism_new.php"
                        class="nav-link p-0 text-white a">News</a>
                    <a href="../../content/contact.php" class="nav-link p-0 text-white a">Contact Us </a>

                </div>

                <div class="col-6 col-lg-2 mb-3 text-center">
                    <h4 class="corps ligne">Ours Tours</h4>

                    <a href="../../content/tours/wonderSouth.php" class="nav-link p-0 text-white a">- Wonders of the
                        South</a>
                    <a href="../../content/tours/Day_One_Andasibe.php" class="nav-link p-0 text-white a">- One Day
                        Andasibe</a>
                    <a href="../../content/tours/Tsingy_Ifaty.php" class="nav-link p-0 text-white a">- Tsingy - Ifaty</a>
                    <a href="../../content/tours/NosyBe_Tour.php" class="nav-link p-0 text-white a">- Nosy Be Tour</a>
                    <a href="../../content/tours/wonderSouth_Andasibe.php" class="nav-link p-0 text-white a">- Amazing island
                        of
                        thr South / Andasibe </a>
                    <a href="../../content/tours/exploration&adventure.php" class="nav-link p-0 text-white a">- Exploration
                        and
                        adventure </a>
                    <a href="../../content/tours/colorsofEast.php" class="nav-link p-0 text-white a">- Scents and colors of
                        the
                        East </a>
                    <a href="../../content/tours/Mystic_west_&_RN7_Discovery.php" class="nav-link p-0 text-white a">- Mystic
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

                    <a href="../../content/contact.php" class="a nav-link p-0 text-white"><svg xmlns="http://www.w3.org/2000/svg"
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
                            <div class="col"><a href="https://www.facebook.com/profile.php?id=100081146902072"
                                    target="_blank" class="text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="25" height="25" fill="currentColor" class="bi bi-facebook"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg></a></div>
                            <div class="col"><a href="https://www.instagram.com/fhltours?igsh=amR1NnowZHV4c2di"
                                    target="_blank" class="text-white"> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="25" height="25" fill="currentColor" class="bi bi-instagram"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg></a></div>
                            <div class="col"><a href="https://www.tiktok.com/@fhl.travel.madaga?_t=ZM-8ucli1tHKYo&_r=1"
                                    target="_blank" class="text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="25" height="25" fill="currentColor" class="bi bi-tiktok"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                    </svg></a></div>
                            <div class="col"><a href="https://wa.me/261329572020" target="_blank" class="text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                    </svg></a></div>
                            <div class="col"><a href="https://g.co/kgs/zcTmM6A" target="_blank" class="text-white"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-google" viewBox="0 0 16 16">
                                        <path
                                            d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
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

<script>
    function envoyerContenu() {
        // Récupérer le texte du paragraphe
        let contenu = document.getElementById("send").innerText;
        // L'ajouter dans l'input caché
        document.getElementById("tour").value = contenu;
        document.getElementById("tour1").value = contenu;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>