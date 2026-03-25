<?php

/*
OBJECTIF :
- Récupérer les réponses du formulaire
- Compter les points
- Déterminer le profil
- Afficher une carte avec résultat
*/


/* =========================
   1. SÉCURITÉ
   ========================= */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}


/* =========================
   2. VARIABLES
   ========================= */

/*
Créer 4 variables :
$frontend
$backend
$game
$fullstack

Initialiser à 0
*/


/* =========================
   3. RÉCUPÉRATION DES DONNÉES
   ========================= */

/*
Créer un tableau $questions avec les noms des questions :
q1, q2, q3, q4, q5

Faire une boucle foreach pour parcourir les questions
*/

foreach ($questions as $q) {
    /*
    Pour chaque question :
    - vérifier si elle existe avec isset()
    - regarder la valeur envoyée
    - incrémenter le bon compteur
    */
}




/* =========================
   4. FONCTION PROFIL
   ========================= */

/*
Créer une fonction getProfil() avec les 4 variables en arguments

Grâce à if, elseif et else, comparer les valeurs des variables et retourner le bon profil, par exemple : return "frontend"
*/


/* =========================
   5. DONNÉES DES PROFILS
   ========================= */

/*
Créer un tableau associatif contenant :

Pour chaque profil :
- un titre
- une image (nom du fichier)
- une description (tableau de 3 lignes)

Exemple structure :

$profils = [
    "frontend" => [
        "titre" => "...",
        "image" => "...",
        "desc" => ["...", "...", "..."]
    ], 
    "backend" => [
        "titre" => "...",
        "image" => "...",
        "desc" => ["...", "...", "..."]
    ],
    etc
];
*/


/* =========================
   6. RÉCUPÉRER LE BON PROFIL
   ========================= */

/*

Appeler la fonction getProfil()

Puis récupérer les données correspondantes dans un  tableau $data

*/


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>

    <!-- Lier le CSS fourni -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 
OBJECTIF :
Afficher une carte avec :
- image
- titre
- description
-->

<div class="container">

    <div class="card">

        <!-- IMAGE -->
        <!-- 
        Afficher l'image du profil avec echo
        -->


        <div class="content">

            <!-- TITRE -->
            <!-- Afficher le titre <h2> -->



            <!-- DESCRIPTION -->
            <!-- 
            Faire une boucle foreach sur les descriptions
            et afficher chaque ligne dans un <p>
            -->


        </div>

    </div>

</div>

</body>
</html>