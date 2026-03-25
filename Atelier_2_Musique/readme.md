# 🎧 TP — Playlist personnalisée

## 🎯 Objectif

Créer une application PHP qui génère une playlist personnalisée en fonction :
- du style musical
- de l’ambiance
- de la durée

---

## 📝 Consignes

### 1. Créer un formulaire (index.php)

Le formulaire doit contenir :

#### 🎵 Style musical (radio)
- Rap
- Rock
- Électro
- Hip-Hop

👉 Attention :
Toutes les réponses doivent avoir le même `name`

---

#### 🌈 Ambiance (select)
- Chill
- Sport
- Soirée
- Triste

---

#### ⏱️ Durée (radio)
- Courte
- Moyenne
- Longue

---

### 2. Traitement (result.php)

Récupérer les données avec `$_POST` :

- style
- ambiance
- durée

---

### 3. Créer des tableaux de musiques

Créer 4 tableaux :

- $rap
- $rock
- $electro
- $hiphop

👉 Chaque tableau contient **de vraies musiques** :

Exemples :

- Ninho - Lettre à une femme  
- Booba - Validée  
- Nirvana - Smells Like Teen Spirit  
- AC/DC - Back in Black  
- Daft Punk - One More Time  
- Eminem - Lose Yourself  
- Dr. Dre - Still D.R.E.
- Kavinsky - Nightcall
- etc

---

### 4. Choisir la playlist

Utiliser des conditions (`if / elseif`) :

- si style = rap → utiliser $rap  
- si style = rock → utiliser $rock  
- etc.

---

### 5. Gérer la durée

Créer une variable `$nb` :

- courte → 3 musiques  
- moyenne → 5 musiques  
- longue → 8 musiques  

---

### 6. Affichage

Afficher la playlist dans une **carte HTML** :

#### 🧩 Éléments obligatoires :
- Image
- Titre
- Style choisi
- Ambiance
- Liste des musiques

---

### 7. Ajouter une image

Afficher une image selon le style :

- rap → rap.jpg  
- rock → rock.jpg  
- électro → electro.jpg  
- hip-hop → hiphop.jpg  

👉 L’image doit être affichée dans la carte

---

### 8. Utiliser une boucle

Afficher les musiques avec une boucle `for`

---

## 🎨 Rendu attendu

- Une page dynamique
- Une carte stylée
- Une playlist personnalisée
- Une image selon le style

---

## ⭐ Bonus

- Ajouter une image de fond différente selon le style
- Ajouter une phrase personnalisée