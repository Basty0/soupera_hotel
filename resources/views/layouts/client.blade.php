<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopera Milomboko Hotel</title>

    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<style>
    /* HTML: <div class="loader"></div> */
    .loader {
        width: 40px;
        height: 20px;
        --c: no-repeat radial-gradient(farthest-side, #000 93%, #0000);
        background:
            var(--c) 0 0,
            var(--c) 50% 0,
            var(--c) 100% 0;
        background-size: 8px 8px;
        position: relative;
        animation: l4-0 1s linear infinite alternate;
    }

    .loader:before {
        content: "";
        position: absolute;
        width: 8px;
        height: 12px;
        background: #000;
        left: 50%;
        top: 50%;
        animation:
            l4-1 1s linear infinite alternate,
            l4-2 0.5s cubic-bezier(0, 200, .8, 200) infinite;
    }

    @keyframes l4-0 {
        0% {
            background-position: 0 100%, 50% 0, 100% 0
        }

        8%,
        42% {
            background-position: 0 0, 50% 0, 100% 0
        }

        50% {
            background-position: 0 0, 50% 100%, 100% 0
        }

        58%,
        92% {
            background-position: 0 0, 50% 0, 100% 0
        }

        100% {
            background-position: 0 0, 50% 0, 100% 100%
        }
    }

    @keyframes l4-1 {
        100% {
            left: calc(100% - 8px)
        }
    }

    @keyframes l4-2 {
        100% {
            top: -0.1px
        }
    }

    body {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        font-variation-settings:
            "wdth" 100;

    }





    .img {
        height: 500px;
        object-fit: cover;
    }

    .hover{
        transition: 0.5s;

    }
    .hover:hover{
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }


</style>
<style>
    .img-bg {
        background-image: url("{{ asset('images/fonde.jpg') }}");
        background-size: cover;
        background-position: center;
        /* Couleur du texte pour un meilleur contraste */
        /* Centrer le texte */
    }

    .img-ma {
        background-image: url("{{ asset('images/ma1.jpeg') }}");
        background-size: cover;
        background-position: center;
        /* Couleur du texte pour un meilleur contraste */
        /* Centrer le texte */
    }

    .img-ch {
        background-image: url("{{ asset('images/ch1.jpg') }}");
        background-size: cover;
        background-position: center;
        /* Couleur du texte pour un meilleur contraste */
        /* Centrer le texte */
    }

    .img-re {
        background-image: url("{{ asset('images/re1.jpg') }}");
        background-size: cover;
        background-position: center;
        /* Couleur du texte pour un meilleur contraste */
        /* Centrer le texte */
    }

    .bg-blur {
        background: rgb(16, 50, 112)
            /* Remplacez 'votre-image.jpg' par le chemin de votre image */
            background-size: cover;
        backdrop-filter: blur(10px);
        /* Applique un flou à l'arrière-plan */
        -webkit-backdrop-filter: blur(5px);
        /* Pour les navigateurs WebKit comme Safari */
    }

    body {
        background: #fffafa;
    }

    .btn-a {
        background: rgb(119, 4, 27);

    }
</style>
<div class="loader text-center"></div>

<body>



    <nav style="background: rgb(119, 4, 27)" class="  navbar navbar-expand-lg ">
        <div class="container text-white ">
            <!-- Logo ou Titre de la Navbar -->
            <a class="navbar-brand text-white fs-3" href="/">Sopera Hôtel</a>

            <!-- Bouton hamburger pour les petits écrans -->
            <button class="btn bg-white d-md-none text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class=" navbar-toggler-icon"></span>
            </button>

            <!-- Menu de Navigation -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a id="link-1" class="py-3 px-4 rounded-5 nav-link text-white "
                            href="{{ route('acueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <a id="link-2" class="py-3 px-4 rounded-5 nav-link text-white "
                            href="{{ route('chambre') }}">Chambres</a>
                    </li>
                    <li class="nav-item {{ request()->is('restaurant') ? 'active' : '' }}">
                        <a id="link-3" class="py-3 px-4 rounded-5 nav-link text-white "
                            href="{{ route('restaurant') }}">Restaurant</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a id="link-4" class="py-3 px-4 rounded-5 nav-link text-white "
                            href="{{ route('about') }}">À propos</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                        <a id="link-5" class="py-3 px-4 rounded-5 nav-link text-white "
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="">

        @yield('content')
    </div>
    <!-- resources/views/includes/footer.blade.php -->
</body>
<footer class="footer bg-dark text-white mx-0 p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>À propos de notre hôtel</h4>
                <p>Description de l'hôtel...</p>
            </div>
            <div class="col-md-3">
                <h4>Liens rapides</h4>
                <ul class="list-unstyled">
                    <li><a class="btn text-white" href="{{ route('acueil') }}"><i class="bi bi-house-door"></i>
                            Accueil</a>
                    </li>
                    <li><a class="btn text-white" href="{{ route('chambre') }}"><i class="bi bi-door-open"></i>
                            Chambres</a>
                    </li>
                    <li><a class="btn text-white" href="{{ route('restaurant') }}"><i class="bi bi-restaurant"></i>
                            Restaurant</a></li>
                    <li><a class="btn text-white" href="{{ route('about') }}"><i class="bi bi-info-circle"></i> À
                            propos</a>
                    </li>
                    <li><a class="btn text-white" href="{{ route('contact') }}"><i class="bi bi-envelope"></i>
                            Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Contactez-nous</h4>

                <div>
                    <i class="bi bi-telephone"></i> +123456789<br>
                    <i class="bi bi-envelope"></i> contact@example.com
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Inclusion de Bootstrap JavaScript (nécessaire pour le fonctionnement du bouton hamburger) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    AOS.init();
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loader = document.querySelector(".loader");
        const content = document.querySelector(".content");

        window.addEventListener("load", function() {
            loader.style.display = "none";
            content.style.display = "block";
        });
    });
</script>

</html>
