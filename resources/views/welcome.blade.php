@extends('layouts.client')
<style>
    #link-1 {
        background: rgb(1, 173, 30)
    }

    .img {
        height: 400px;
        object-fit: cover;
    }

    .img-style {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
</style>
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ asset('images/ch1.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/re2.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/ma1.jpeg') }}" class="d-block w-100 img" alt="...">

            </div>
        </div>
        <!-- Contrôles du carrousel -->

        <div class="carousel-content position-absolute top-0 start-0 w-100 text-center">
            <div class="row mx-5">
                <div style="height: 400px"
                    class="justify-content-center align-items-center col-md-3 col-12 bg-blur shadow rounded-4 mt-5 m-4  text-white ">
                    <div class="">
                        <h5 class="display-4 m-3">Sopera Hôtel</h5>
                        <h5>Bienvenue à l'Hôtel Restaurant Sopera Milomboko, où l'hospitalité malgache et le confort moderne
                            se rencontrent pour vous offrir une expérience inoubliable.</h5>
                        <button class=" btn btn-a text-white m-3 p-3 rounded-5">
                            Plus d'informations
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="container">


        <div class="my-5">
            <div class="row m-auto">
                <div class="col-12 text-center mb-3 ">

                </div>
                <div data-aos="zoom-in-up" data-aos-duration="1000"
                    class="  row justify-content-center align-items-center col-md-4 col-12 img-ch rounded-5 img">
                    <h2 style="width: 200px" class="bg-blur rounded-5 p-3 border text-center text-white">
                        Nos Chambres
                    </h2>
                </div>
                <div class="col-md-6 col-12 p-md-5 p-2" data-aos="zoom-in-up">
                    <h1 class="bolde">Votre Escale Confortable à Antananarivo
                    </h1>
                    <p>
                        À l'Hôtel Restaurant Sopera Milomboko, nous proposons des chambres doubles confortables, idéales
                        pour les voyageurs seuls ou en couple. Chaque chambre est équipée de lits spacieux, d'une salle de
                        bain privative, de la climatisation, d'une télévision à écran plat et d'un accès Wi-Fi gratuit. La
                        décoration soignée et les équipements modernes sont conçus pour garantir votre confort et votre
                        bien-être. Profitez de la tranquillité de nos chambres après une journée de découverte ou de
                        travail.


                    </p>
                    <div class="text-center align-items-center">
                        <button class="btn btn-a text-white rounded-5 p-3"> Chambres</button>
                    </div>
                </div>
            </div>
            <div class="row h-5">

            </div>
            <div class="row mt-5">

                <div class="col-md-6 col-12 p-md-5 p-2" data-aos="zoom-in-up">

                    <h1 class="bolde">Gastronomie Musulmane et Saveurs Locales
                    </h1>
                    <p>
                        Notre restaurant vous invite à un voyage culinaire où la tradition rencontre la modernité. Nous
                        proposons une cuisine musulmane raffinée, élaborée à partir d'ingrédients locaux frais. Découvrez
                        des plats traditionnels malgaches revisités avec une touche contemporaine, ainsi que des spécialités
                        internationales qui raviront vos papilles. Que ce soit pour un petit déjeuner copieux, un déjeuner
                        convivial ou un dîner élégant, notre chef et son équipe se tiennent prêts à vous offrir une
                        expérience gastronomique inoubliable.
                    </p>
                    <button class="btn btn-a text-white rounded-5 p-3"> Restaurant</button>
                </div>
                <div data-aos="fade-up-left"
                    class=" row justify-content-center align-items-center col-md-4  col-12 img-re rounded-5 img ">
                    <h2 style="width: 200px" class="bg-blur rounded-5 p-3 border text-center text-white">
                        Notre Restaurant
                    </h2>
                </div>
            </div>
            <div class="row h-5">

            </div>
            <div class="row m-auto">
                <div class="col-12 text-center mb-3">

                </div>
                <div data-aos="fade-up" data-aos-duration="1000"
                    class=" row justify-content-center align-items-center col-md-4 col-12 img-ma rounded-5 img">
                    <h2 style="width: 200px" class="bg-blur rounded-5 p-3 border text-center text-white">
                        Service de Massage
                    </h2>
                </div>
                <div class="col-md-6 col-12 p-md-5 p-2" data-aos="zoom-in-up" data-aos-duration="1000">
                    <h1 class="bolde">
                        Détente et Bien-être Assurés
                    </h1>

                    <p>
                        Après une journée bien remplie, laissez-vous tenter par notre service de massage professionnel. Nos
                        masseurs qualifiés vous proposent une gamme de soins relaxants pour vous aider à évacuer le stress
                        et les tensions accumulées. Profitez d'un massage apaisant dans un cadre serein et intime, conçu
                        pour votre confort et votre relaxation. Que vous ayez besoin d'un massage suédois, d'un massage aux
                        pierres chaudes ou d'un soin personnalisé, nous sommes là pour répondre à vos besoins et vous offrir
                        un moment de détente absolue.


                    </p>
                    <div class="text-center align-items-center">
                        <button class="btn btn-a text-white rounded-5 p-3"> massage</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
