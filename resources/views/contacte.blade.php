@extends('layouts.client')

@section('content')
    <style>
        #link-5 {
            background: rgb(1, 173, 30)
        }
    </style>
    <div class="container p-5 bg-white rounded-3 my-5">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <h1>Contactez-nous</h1>

        <p>N'hésitez pas à nous contacter pour toute question ou demande.</p>

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Télephone</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-a rounded-5 p-3 text-white">Envoyer</button>
        </form>
    </div>
@endsection
