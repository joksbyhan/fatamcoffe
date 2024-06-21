<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatamorgana Coffee House</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="container-layout">
                <img src="public/images/logo-Clean.png" alt="Logo Kafe" class="logo">
                <h1>Fatamorgana Coffee House</h1>
            </div>
            <div class="container-layout">
                <nav class="navbar">
                    <div class="menu-toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul class="nav-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#coffe">Coffe</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="hero" id="home">
            <img src="public/images/logo2-Clean.png" alt="Foto Kafe" class="hero-image">
        </div>
        <!-- <div class="jambuka">
            <img src="public/images/jadwalFix.png" alt="Foto Kafe" class="jambuka-image">
        </div> -->
        <section class="menu">
            <img id="menu" src="public/images/menu.jpg" alt="Foto Kafe" class="menu-image">
        </section>

        <section class="products">
            <h2 id="coffe">Our Coffee</h2>
            <div class="slideshow">
                <div class="slide"><img src="public/images/3.jpg" class="slide-image"></div>
                <div class="slide"><img src="public/images/4.jpg" class="slide-image"></div>
                <div class="slide"><img src="public/images/7.jpg" class="slide-image"></div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="mail-outline"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://wa.me/+6289655892783">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>

        </ul>
        <ul class="menuicon">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#">About</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

        </ul>
        <p>&copy; 2024 Fatamorgana Coffee <br>All rights reserved</p>
    </footer>

    <!-- <footer id="contact">
        <div class="footer-container">
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Alamat: Jl. Ampasit I No.20, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150</p>
                <p>Telepon: 089655892783</p>
                <p>Email: Fatamorganacoffee@gmail.com</p>
                <div class="social-media">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <i class="fa fa-instagram" aria-hidden="true">Instagram</i>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true">Instagram</i></a>
                </div>
            </div>
            <div class="footer-info">
                <p>&copy; 2024 Fatamorgana Coffee <br>All rights reserved</p>
            </div>
        </div>
    </footer> -->

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

        const mobileMenu = document.getElementById('mobile-menu');
        const navList = document.querySelector('.nav-list');

        mobileMenu.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>