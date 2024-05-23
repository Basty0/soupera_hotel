<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souper Hotel</title>

    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<style>
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
        background: rgb(163, 195, 255)
            /* Remplacez 'votre-image.jpg' par le chemin de votre image */
            background-size: cover;
        backdrop-filter: blur(10px);
        /* Applique un flou à l'arrière-plan */
        -webkit-backdrop-filter: blur(10px);
        /* Pour les navigateurs WebKit comme Safari */
    }

    body {
        background: #fffafa;
    }

    .btn-a {
        background: rgb(119, 4, 27);

    }
</style>


<body>

    <nav style="background: rgb(119, 4, 27)" class="  navbar navbar-expand-lg ">
        <div class="container text-white ">
            <!-- Logo ou Titre de la Navbar -->
            <a class="navbar-brand text-white fs-3" href="/">Souper Hôtel</a>

            <!-- Bouton hamburger pour les petits écrans -->
            <button class="btn d-md-none text-white" type="button" data-bs-toggle="collapse"
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

</html>
