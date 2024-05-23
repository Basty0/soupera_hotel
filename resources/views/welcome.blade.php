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
                        <h5 class="display-4 m-3">Souper Hôtel</h5>
                        <p>Some representative placeholder content for the first slide.voluptates,
                            delectus similique autem nulla laboriosam? Unde, atque!</p>
                        <button class=" btn btn-a text-white m-3 p-3 rounded-5">
                            Plus d'information
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="container">

        <div class="my-5">
            <div class="row m-auto">
                <div class="col-12 text-center mb-3">

                </div>
                <div data-aos="zoom-in-up" data-aos-duration="1000"
                    class=" row justify-content-center align-items-center col-md-4 col-12 img-ch rounded-5 img">
                    <h2 style="width: 200px" class="bg-blur rounded-5 p-3 border text-center text-white">
                        Chambres
                    </h2>
                </div>
                <div class="col-md-6 col-12 p-md-5 p-2" data-aos="zoom-in-up">
                    <h1 class="bolde">Soupera Hotel
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aliquam perspiciatis impedit
                        voluptates,
                        delectus similique autem nulla laboriosam? Unde, atque!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum a veniam obcaecati et, soluta sit!
                        Esse
                        itaque placeat reprehenderit necessitatibus. Eveniet, inventore reprehenderit odit reiciendis
                        blanditiis
                        ratione architecto? Nisi, maiores!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aliquam perspiciatis impedit
                        voluptates,
                        delectus similique autem nulla laboriosam? Unde, atque!


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

                    <h1 class="bolde">Soupera Milomboko
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aliquam perspiciatis impedit
                        voluptates,
                        delectus similique autem nulla laboriosam? Unde, atque!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum a veniam obcaecati et, soluta
                        sit!
                        Esse
                        itaque placeat reprehenderit necessitatibus. Eveniet, inventore reprehenderit odit reiciendis
                        blanditiis
                    </p>
                    <p>
                        ratione architecto? Nisi, maiores!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aliquam perspiciatis impedit
                        voluptates,
                        delectus similique autem nulla laboriosam? Unde, atque!
                    </p>
                    <button class="btn btn-a text-white rounded-5 p-3"> Chambres</button>
                </div>
                <div data-aos="fade-up-left"
                    class=" row justify-content-center align-items-center col-md-4  col-12 img-re rounded-5 img ">
                    <h2 style="width: 200px" class="bg-blur rounded-5 p-3 border text-center text-white">
                        Réstaurant
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
                        Massage
                    </h2>
                </div>
                <div class="col-md-6 col-12 p-md-5 p-2" data-aos="zoom-in-up" data-aos-duration="1000">
                    <h1 class="bolde">
                        Nos service massage
                    </h1>

                    <p>
                        Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aliquam perspiciatis impedit
                        voluptates,
                        delectus similique autem nulla laboriosam? Unde, atque!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum a veniam obcaecati et, soluta sit!
                        Esse
                        itaque placeat reprehenderit necessitatibus. Eveniet, inventore reprehenderit odit reiciendis
                        blanditiis
                        ratione architecto? Nisi, maiores!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aliquam perspiciatis impedit
                        voluptates,
                        delectus similique autem nulla laboriosam? Unde, atque!


                    </p>
                    <div class="text-center align-items-center">
                        <button class="btn btn-a text-white rounded-5 p-3"> Chambres</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
