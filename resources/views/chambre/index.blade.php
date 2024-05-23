@extends('layouts.appo')

@section('template_title')
    Chambre
@endsection
<style>
    #imge {
        height: 250;
    }
</style>
<style>
    #ch {
        background: rgb(1, 173, 30)
    }

    .room-image {
        height: 250px;
        /* Hauteur fixe de l'image */
        width: 100%;
        /* Remplir toute la largeur de la colonne */
        object-fit: cover;
        /* Redimensionner l'image pour qu'elle remplisse le conteneur sans déformation */
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }
</style>
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 id="card_title">
                                {{ __('Chambres') }}
                            </h5>
                            <div class="float-right">
                                <a href="{{ route('chambres.create') }}" class="btn bg-gradient-primary rounded-5 float-right"
                                    data-placement="left">
                                    <i class="bi bi-house-add fs-4"></i> ajouter une chambre
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="row ">
                            @foreach ($chambres as $chambre)
                                <div class="col-md-6 col-12 mb-3">
                                    <div class="card border">
                                        <div class="row g-0">
                                            <!-- Colonne pour l'image à gauche -->
                                            <div class="col-md-4 col-12">
                                                <img id="imge" class="img-fluid rounded-4 room-image square-image p-2"
                                                    src="{{ asset('assets/img/chambres/' . $chambre->image_principale) }}"
                                                    alt="Image Principale de la Chambre">
                                            </div>
                                            <!-- Colonne pour le contenu à droite -->
                                            <div class="col-md-8 col-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><i class="fs-2 border rounded-3 px-2 shadow">
                                                            {{ $chambre->num }}
                                                        </i>{{ $chambre->type->nom }}</h5>
                                                    <p class="card-text">
                                                        <strong>Prix par nuit:</strong> {{ $chambre->prix_par_nuit }} Ar<br>
                                                        <strong>Prix par nuit:</strong> {{ $chambre->prix_par_heure }}
                                                        Ar<br>
                                                        <strong>Disponibilité:</strong> {{ $chambre->disponibilite }}<br>
                                                    </p>
                                                </div>
                                                <div class=" row mx-3">
                                                    <div class="col-3 m-2">
                                                        <a href="{{ route('chambres.edit', $chambre->id) }}"
                                                            class="btn bg-gradient-success rounded-5 btn-sm"><i
                                                                class="bi bi-pen fs-5"></i></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 m-2">
                                                        <a href="{{ route('chambres.show', $chambre->id) }}"
                                                            class="btn bg-gradient-secondary rounded-5 btn-sm"><i
                                                                class="fa fa-fw fa-eye fs-5"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-3 m-2 ">
                                                        <form action="{{ route('chambres.destroy', $chambre->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn bg-gradient-danger rounded-5 btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                                                <i class="bi bi-trash3 fs-5"></i>
                                                            </button>
                                                        </form>
                                                    </div>


                                                    <!-- Formulaire de suppression en ligne avec bouton de confirmation -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {!! $chambres->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
