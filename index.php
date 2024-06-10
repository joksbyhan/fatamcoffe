<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatamorgana Coffe House</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <img src="public\images\logo-Clean.png" alt="Logo Kafe" class="logo">
            <h1>Fatamorgana Coffe House</h1>
        </div>
    </header>

    <main>
        <div class="hero">
            <img src="public\images\logo2-Clean.png" alt="Foto Kafe" class="hero-image">
        </div>

        <section class="menu">
            <h2>M E N U</h2>
            <img src="public/images/menu.jpg" alt="Foto Kafe" class="hero-image">
        </section>

        <section class="products">
            <h2>Our Coffe</h2>
            <div class="slideshow">
                <div class="slide"><img src="public/images/3.jpg" alt="Menu 1" class="slide-image">
                </div>
                <div class="slide"><img src="public/images/4.jpg" alt="Menu 2" class="slide-image">
                </div>
                <div class="slide"><img src="public/images/7.jpg" alt="Menu 3" class="slide-image">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Fatamorgana Coffe <br>All rights reserved</p>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.querySelectorAll('.slide');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = 'block';
            setTimeout(showSlides, 5000);
        }
    </script>
</body>

</html>