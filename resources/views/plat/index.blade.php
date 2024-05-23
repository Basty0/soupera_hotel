@extends('layouts.appo')

@section('template_title')
    Plat
@endsection
<style>
    #resto {
        background: rgb(1, 173, 30)
    }
</style>

<style>
    .plat-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .plat-image {
        width: 100px;
        /* Largeur fixe de l'image */
        height: 100px;
        /* Hauteur fixe de l'image */
        object-fit: cover;
        /* Redimensionne l'image pour qu'elle remplisse le conteneur sans déformation */
        border-radius: 8px;
        /* Coins arrondis pour l'image */
    }

    .plat-details {
        margin-left: 15px;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">{{ __('Plat') }}</span>
                            <div class="float-right">
                                <a href="{{ route('plats.create') }}" class="btn bg-gradient-primary rounded-5  float-right">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="row">
                            @foreach ($plats as $plat)
                                <div class="col-md-4 col-12">
                                    <div class="plat-card bg-white shadow">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/plat/' . $plat->image_principale) }}"
                                                class="plat-image" alt="Image Principale">
                                            <div class="plat-details">
                                                <div><strong>Nom:</strong> {{ $plat->nom }}</div>
                                                <div><strong>Description:</strong> {{ $plat->description }}</div>
                                                <div><strong>Prix:</strong> {{ $plat->prix }}</div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                        </div>

                                        <div class="mt-3 text-center" style="justify-items: center">
                                            <form action="{{ route('plats.destroy', $plat->id) }}" method="POST">
                                                <a class="btn btn-sm rounded-5 bg-gradient-primary"
                                                    href="{{ route('plats.show', $plat->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                </a>
                                                <a class="btn btn-sm rounded-5 bg-gradient-success"
                                                    href="{{ route('plats.edit', $plat->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn rounded-5 bg-gradient-danger btn-sm">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {!! $plats->links('pagination::bootstrap-5') !!} <!-- Affichage de la pagination -->
            </div>
        </div>
    </div>
@endsection
