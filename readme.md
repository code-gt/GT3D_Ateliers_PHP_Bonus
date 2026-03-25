# 🧙 TP — Quel type de développeur es-tu ?

## 🎯 Objectif

Créer un quiz en PHP permettant de déterminer ton profil de développeur à partir de tes réponses.

Tu devras :
- Créer un formulaire HTML
- Récupérer les données avec `$_POST`
- Traiter les réponses avec des conditions
- Afficher un résultat personnalisé sous forme de **carte**

---

## 📝 Consignes

### 1. Créer le formulaire

Créer un formulaire avec la méthode `POST` contenant **5 questions**.

Chaque question doit proposer **4 choix** (boutons radio) :

👉 Profils possibles :
- frontend
- backend
- game
- fullstack

---

### 💡 Questions proposées

**1. Tu préfères travailler sur :**
- Le design → frontend  
- La logique → backend  
- Les jeux vidéo → game  
- Un peu de tout → fullstack  

**2. Ton outil préféré :**
- Figma → frontend  
- MySQL → backend  
- Unity → game  
- VS Code → fullstack  

**3. Tu aimes :**
- Créer des interfaces → frontend  
- Gérer des données → backend  
- Créer des interactions → game  
- Toucher à tout → fullstack  

**4. Ton projet idéal :**
- Un site web → frontend  
- Une API → backend  
- Un jeu vidéo → game  
- Une application complète → fullstack  

**5. Ce qui te motive le plus :**
- Le visuel → frontend  
- La performance → backend  
- Le fun → game  
- La polyvalence → fullstack  

---

## ⚙️ Traitement PHP attendu

### 1. Récupérer les données
Utiliser `$_POST` pour récupérer les réponses.

---

### 2. Compter les points

Créer 4 variables :
- `$frontend`
- `$backend`
- `$game`
- `$fullstack`

Incrémenter selon les réponses.

---

### 3. Déterminer le profil

Trouver le profil ayant le plus de points.

---

## 🎨 Affichage du résultat

Afficher le résultat sous forme de **carte HTML** (le CSS sera fourni).

La carte doit contenir :

### ✅ Éléments obligatoires :
- Un titre (ex : "Tu es un développeur Frontend")
- Une image correspondant au profil
- Une description (3 lignes)

---

## 🖼️ Images

Afficher une image différente selon le profil :

- frontend → `frontend.jpg`
- backend → `backend.jpg`
- game → `game.jpg`
- fullstack → `fullstack.jpg`

---

## 🧠 Descriptions à afficher

### 🎨 Frontend
Tu aimes créer des interfaces modernes et agréables à utiliser.  
Tu fais attention au design et à l’expérience utilisateur.  
Tu transformes des idées en visuels interactifs.  

---

### ⚙️ Backend
Tu préfères travailler sur la logique et les données.  
Tu construis les bases solides des applications.  
Tu aimes que tout fonctionne parfaitement en coulisses.  

---

### 🎮 Game Dev
Tu es attiré par la création de jeux et d’expériences interactives.  
Tu aimes mélanger logique, créativité et fun.  
Tu veux créer des univers immersifs.  

---

### 🔥 Fullstack
Tu es polyvalent et tu touches à tout.  
Tu peux créer une application complète de A à Z.  
Tu aimes comprendre l’ensemble d’un projet.  

---

## 🧩 Structure attendue

Exemple de structure HTML :

```html
<div class="card">
    <img src="...">
    <div class="content">
        <h2>Résultat</h2>
        <p>Description...</p>
    </div>
</div>
