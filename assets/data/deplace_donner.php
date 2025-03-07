<?php

session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET["id"])) {
    die("Aucun ID spécifié.");
}

$id = $_GET["id"];

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=localhost;dbname=fhltravel", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données à déplacer depuis `createTours`
    $stmt = $pdo->prepare("SELECT * FROM createTours WHERE id = :id");
    $stmt->execute(["id" => $id]);
    $tour = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$tour) {
        die("Aucun enregistrement trouvé.");
    }

    // Insérer les données dans `classeur`
    $stmt = $pdo->prepare("
        INSERT INTO classeur (id, email, name, adresse, phone, arrival, departure, adults, children, room, 
        travelstyle, wildlife, park, road, air, food, guide, fitness, ability, autreinfo, budget, avis) 
        VALUES (:id, :email, :name, :adresse, :phone, :arrival, :departure, :adults, :children, :room, 
        :travelstyle, :wildlife, :park, :road, :air, :food, :guide, :fitness, :ability, :autreinfo, :budget, :avis)
    ");

    $stmt->execute([
        "id" => $tour["id"],
        "email" => $tour["email"],
        "name" => $tour["name"],
        "adresse" => $tour["adresse"],
        "phone" => $tour["phone"],
        "arrival" => $tour["arrival"],
        "departure" => $tour["departure"],
        "adults" => $tour["adults"],
        "children" => $tour["children"],
        "room" => $tour["room"],
        "travelstyle" => $tour["travelstyle"],
        "wildlife" => $tour["wildlife"],
        "park" => $tour["park"],
        "road" => $tour["road"],
        "air" => $tour["air"],
        "food" => $tour["food"],
        "guide" => $tour["guide"],
        "fitness" => $tour["fitness"],
        "ability" => $tour["ability"],
        "autreinfo" => $tour["autreinfo"],
        "budget" => $tour["budget"],
        "avis" => $tour["avis"]
    ]);

    // Supprimer l'enregistrement de `createTours` après le transfert
    $stmt = $pdo->prepare("DELETE FROM createTours WHERE id = :id");
    $stmt->execute(["id" => $id]);

    echo "Données déplacées avec succès vers `classeur` !";
    echo "<br><a href='afficher_tours.php'>Retour à la liste</a>";
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
