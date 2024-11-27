<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre de Recherche</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .hero {
            background-color: #f8f9fa;
            padding: 100px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Centre de Recherche</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#articles">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#departements">Départements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h1>Bienvenue au Centre de Recherche</h1>
        <p>Découvrez nos dernières recherches, nos départements et bien plus.</p>
    </div>


    <section id="articles" class="container mt-5">
        <h2>Nos Articles</h2>
        <p>Voici les derniers articles publiés par notre équipe de recherche.</p>
       
        <ul>
            <li><a href="#">L'impact des technologies sur la recherche scientifique</a></li>
            <li><a href="#">Les nouvelles tendances en biotechnologie</a></li>
            <li><a href="#">Analyse des données climatiques : défis et opportunités</a></li>
        </ul>
    </section>

    
    <section id="departements" class="container mt-5">
        <h2>Nos Départements</h2>
        <p>Explorez nos différents départements de recherche spécialisés.</p>
       
        <ul>
            <li><a href="#">Département de Biotechnologie</a></li>
            <li><a href="#">Département des Sciences Environnementales</a></li>
            <li><a href="#">Département des Technologies de l'Information</a></li>
        </ul>
    </section>

    <footer class="text-center mt-5 py-4 bg-light">
        <p>&copy; 2024 Centre de Recherche. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
