<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    try {
        // Connexion à la base de données
        $pdo = new PDO("mysql:host=localhost;dbname=fhltravel", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insérer les données
        $stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $stmt->execute(["name" => $name, "email" => $email, "message" => $message]);
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

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
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Patrick+Hand+SC&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/globalcss.css">
    <title>FHLTravel</title>
    <link rel="icon" href="../images/logo.jpeg" type="image/x-icon">

</head>

<body class="bg f">

    <!--Navbar -->
    <header id="" class="header d-flex align-items-center sticky-top  bg rounded shadow">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center justify-content-md-between py-1 mt-2">
                <a href="../../index.php"
                    class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-white text-decoration-none titre fw-bold">
                    <img src="../images/logo.jpeg" width="50px" style="border-radius: 20%;margin-right: 5px;"
                        alt="FHL Madagascar ">FHL Travel Madagascar
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 " id="nav">
                    <li><a href="../../index.php" class="nav-link px-2 text-white ">Home</a>
                    </li>
                    <li><a href="../../content/madagascar.html" class="nav-link px-2 text-white ">Madagascar</a></li>
                    <li><a href="../../content/about.html" class="nav-link px-2 text-white">About Us</a></li>
                    <li><a href="../../content/ourstours.html" class="nav-link px-2 text-white">Our Tours</a></li>
                    <li><a href="../../content/Rental_car.html" class="nav-link px-2 text-white">Car Rental</a></li>
                    <li><a href="../../content/contact.html"
                            class="nav-link px-2 text-white bg-warning bg-opacity-50 rounded ">Contact Us</a></li>
                </ul>


                <div class="col-auto col-md-3 text-end pt-2">
                    <div class="row">

                        <div class="col g-0"><a class="btn text-white f fw-bold g-0 rounded-pill" id="colorButton"
                                style="font-size: smaller;"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                </svg> Create your personal
                                Adventure</a>
                        </div>
                    </div>
                </div>

            </header>
        </div>
    </header>

    <!-------------------home---------------->

    <main class=" shadow-sm bg-white shadow px-0">
        <div style="height: 100vh; display: flex; justify-content: center; align-items: center;">

            <div class="col-12 col-md-8 col-lg-6 mx-auto g-0 p-5 bg-light rounded-4 shadow-lg">
                <div class="row">
                    <div class="  col-md-6 col-lg-6"><img src="../images/logo.jpeg" alt="Logo" width="200" height="200"
                            class="rounded-circle"></div>
                    <div class="  col-md-6 col-lg-6">
                        <h3>Message Sent <span class="badge text-bg-light"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="40" height="40" fill="currentColor" class="bi bi-check-all text-success"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                </svg></span>

                        </h3>
                        <p><b class="text-primary-emphasis">Thank you "<?php echo $name; ?>" </b> for contacting us. We will respond
                            as soon as possible via your email. 💙 </p>
                        <a href="../../index.php" class="btn btn-sm whatsapp rounded-pill"> Back to Home </a>

                    </div>

                </div>

            </div>

        </div>


    </main>


    <!------------------------- FOOTER --------------------------------------------------------->
    <div class="container bg text-white rounded">
        <footer class="pt-5 ">
            <div class="row">
                <div class="col-6 col-md-2 mb-3  ">
                    <img src="../images/logo.jpeg" class="rounded-3" width="200px" height="200px" alt="">
                </div>
                <div class="col-6 col-md-2 mb-3 ">
                    <h4 class="titre">FHL Travel</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white text-white ">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About Us </a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Gallery</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Car Rental</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Blog</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact Us </a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h4 class="titre">Ours Tours</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Northern Madagascar</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Eastern Madagascar</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Western Madagascar</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Southwest Madagascar</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Southern Madagascar </a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h4 class="titre">Better To see </h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    </ul>
                </div>

                <div class="col-md-3 offset-md-1 mb-3 float-end">
                    <h4 class="titre">CONTACT INFO </h4>
                    <ul class="nav flex-column ">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> LOT VS 99 DAE / BE
                                Andranovory,
                                Antananarivo 101 <br> -18.91830951832678, 47.57559714124707</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                </svg>
                                fhlmadagascartravel@gmail.com</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg> +261 32 95 720 20</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg> +261 34 04 140 40
                                (Whatsapp)</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
                <p>&copy; 2025 FHL Tec Madagascar, Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>