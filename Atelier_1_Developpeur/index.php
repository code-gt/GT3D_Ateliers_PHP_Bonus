<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Quiz Développeur</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- 
OBJECTIF :
Créer un formulaire qui envoie les réponses vers "result.php"
-->

<!-- 
IMPORTANT :
- method = POST
- action = "result.php"
-->

<form>

    <!-- QUESTION 1 -->
    <h2>1. Tu préfères travailler sur :</h2>

    <!-- 
    CONSIGNE :
    - Tous les inputs de la question doivent avoir le même "name"
    - Ici : name="q1"
    - Chaque choix a une "value" différente : frontend, backend, game ou fullstack
    -->

    <!-- EXEMPLE : radio + label -->
     <!--

    <label><input type="radio" name="q1" value="frontend" required> Le design</label><br>

    -->


    <!-- QUESTION 2 -->
    <h2>2. Ton outil préféré :</h2>
    <!-- Même principe avec name="q2" -->



    <!-- QUESTION 3 -->
    <h2>3. Tu aimes :</h2>
    <!-- name="q3" -->



    <!-- QUESTION 4 -->
    <h2>4. Ton projet idéal :</h2>
    <!-- name="q4" -->



    <!-- QUESTION 5 -->
    <h2>5. Ce qui te motive le plus :</h2>
    <!-- name="q5" -->



    <!-- BOUTON -->
    <!-- 
    Ajouter un bouton pour envoyer le formulaire
    type="submit"
    -->

</form>

</body>
</html>