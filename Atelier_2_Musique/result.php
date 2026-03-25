<?php

/*
OBJECTIF :
- Récupérer les choix du formulaire
- Afficher une playlist adaptée
- Utiliser des tableaux
- Utiliser une boucle
*/

// 🔐 Sécurité
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

/*
RÉCUPÉRATION :

Créer 3 variables :
- $style
- $ambiance
- $duree

*/

/*
CREER LES TABLEAUX DE MUSIQUES

Exemple :

$rock = [
    "Artiste - Musique",
    "Artiste - Musique",
    "Artiste - Musique"
];

👉 Vous devez créer aussi :
- $rap
- $electro
- $hiphop
*/

// TABLEAU EXEMPLE
$rock = [
    "Nirvana - Smells Like Teen Spirit",
    "AC/DC - Back in Black",
    "Linkin Park - In the End"
];

/*
CHOIX DU STYLE

Utiliser des conditions pour définir la valeur d'une variable $playlist
*/

/*
DURÉE

Créer une variable $nb = 3

Puis modifier selon :
- courte → 3
- moyenne → 5
- longue → 8
*/

/*
AFFICHAGE

Utiliser une boucle :

for (...) {
    afficher chaque musique
}
*/

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Playlist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 
OBJECTIF :
Afficher un résultat dans une carte
-->

<div class="container">
    <div class="card">

        <div class="content">

            <h2>🎧 Ta playlist</h2>

            <!-- 
            AFFICHER :
            - le style
            - l’ambiance
            -->

            <ul>

                <!-- 
                UTILISER UNE BOUCLE POUR AFFICHER LA PLAYLIST
                -->

            </ul>

        </div>

    </div>
</div>

</body>
</html>