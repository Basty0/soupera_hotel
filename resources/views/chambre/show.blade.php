@extends('layouts.appo')

@section('template_title')
    {{ $chambre->name ?? __('Show') . ' ' . __('Chambre') }}
@endsection
<style>
    .square-image-container {
        width: 100%;
        height: 100%;
        padding-top: 100%;
        /* Creates a square aspect ratio (1:1) */
        position: relative;
        overflow: hidden;
    }

    .square-image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the image covers the entire container */
    }
</style>

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card border">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-title">{{ __('Show Chambre') }}</span>
                            <a class="btn btn-primary btn-sm" href="{{ route('chambres.index') }}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class=" card-image square-image-container mb-4">
                            <img src="{{ asset('assets/img/chambres/' . $chambre->image_principale) }}"
                                class="img-fluid square-image rounded-5" alt="Image Principale">
                        </div>

                        <div class="form-group">
                            <strong>{{ __('Chambre') }}:</strong>
                            {{ $chambre->num }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Type') }}:</strong>
                            {{ $chambre->type->nom }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Prix Par Nuit') }}:</strong>
                            {{ $chambre->prix_par_nuit }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Prix Par Heure') }}:</strong>
                            {{ $chambre->prix_par_heure }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Disponibilite') }}:</strong>
                            {{ $chambre->disponibilite }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
