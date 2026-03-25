<?php

/*
OBJECTIF :
Créer une carte d’une créature fantastique
*/

// 🔐 Sécurité
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

/*
RÉCUPÉRATION DES DONNÉES

Créer des variables :
- nom
- type
- couleur
- pouvoir
- danger
- habitat

Utiliser $_POST
*/

/*
IMAGE

Créer une variable $image

Selon le type :
- dragon
- licorne
- robot
- alien

Utiliser des conditions (if / elseif)
*/

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créature</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 
OBJECTIF :
Afficher une carte avec flexbox
-->

<div class="container">

    <div class="card">

        <!-- IMAGE -->
        <!-- Afficher l’image avec echo -->

        

        <div class="content">

            <!-- NOM -->
            <h2><!-- afficher le nom --></h2>

            <!-- INFORMATIONS -->
            <!-- Afficher type, couleur, pouvoir -->

            

            <!-- DANGER -->
            <!-- Astuce :
            utiliser str_repeat("⚠️", variable)
            -->

            

            <!-- HABITAT -->
            

        </div>

    </div>

</div>

</body>
</html>