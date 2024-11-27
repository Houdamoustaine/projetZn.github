<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre de Recherche EMSI Marrakech</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

    
        header {
            background-color: green;
            color: white;
            text-align: center;
            padding: 30px 0;
        }
        header h1 {
            margin: 0;
            font-size: 36px;
        }

      
        .slider {
            position: relative;
            max-width: 100%;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 8px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        
        .description {
            text-align: center;
            padding: 20px;
            font-size: 18px;
            background-color: #fff;
        }

        .description p {
            color: #333;
        }

        .contact {
            text-align: center;
            background-color: green;
            padding: 40px 20px;
            color: white;
        }

        .contact a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin: 0 15px;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        .phone {
            font-size: 24px;
            font-weight: bold;
        }

        
        .signup-form {
            background-color: white;
            padding: 30px;
            max-width: 400px;
            margin: 30px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: green;
        }

        .signup-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .signup-form button {
            width: 100%;
            padding: 12px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .signup-form button:hover {
            background-color: grey;
        }

     
        footer {
            background-color: green;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 28px;
            }

            .slider {
                height: 300px;
            }

            .description p {
                font-size: 16px;
            }
        }

    </style>
</head>
<body>

    <header>
        <h1>Bienvenue au Centre de Recherche EMSI Marrakech</h1>
    </header>


    <div class="slider">
        <div class="slides">
            <div class="slide" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaA6DKH4nLdZFg_09F27N6YXyTDHmRnDI47A&s');"></div>
            <div class="slide" style="background-image: url('https://emsi.ma/wp-content/uploads/2020/07/MMPT5471-scaled.jpg');"></div>
            <div class="slide" style="background-image: url('https://fnh.ma//uploads/actualites/6107de73cfd03_photo%20papier%20tech.jpg');"></div>
        </div>
    </div>

    
    <div class="description">
        <p>Le Centre de Recherche EMSI Marrakech est un lieu d'innovation et de collaboration pour les étudiants, chercheurs et entreprises. Nous mettons l'accent sur la recherche appliquée dans les domaines de la technologie, de l'ingénierie, et des sciences sociales.</p>
    </div>

   
    <div class="contact">
        <h2>Contactez-nous</h2>
        <p>Suivez-nous sur Instagram pour des mises à jour et des événements :</p>
        <a href="https://www.instagram.com" target="_blank">Instagram</a>

        <p>Appelez-nous :</p>
        <p class="phone">0524372761</p>

        
        <div class="signup-form">
            <h2>Inscrivez-vous à notre newsletter</h2>
            <form action="signup_process.php" method="POST">
                <input type="text" name="first_name" placeholder="Prénom" required>
                <input type="text" name="last_name" placeholder="Nom" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mot de passe" required minlength="8">
                <?php include("read.php")?>
                <button type="submit" >submit </button>
                
            </form>
        </div>
    </div>

   
    <footer>
        <p>&copy; 2024 EMSI Marrakech - Tous droits réservés</p>
    </footer>

    <script>
        
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
        }

        setInterval(nextSlide, 5000);
    </script>

</body>
</html>
