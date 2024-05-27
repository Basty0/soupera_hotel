@extends('layouts.appo')

@section('template_title')
@endsection
<style>
    #type {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Type') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('types.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    Ajouter une type de chambre
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive pb-5">
                            <table class="table mb-5">
                                <thead class="thead mb-5">
                                    <tr>
                                        <th>No</th>

                                        <th>Nom</th>
                                        <th>Capacite</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $type->nom }}</td>
                                            <td>{{ $type->capacite }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm  " type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical fs-3"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('types.show', $type->id) }}"><i
                                                                    class="fa fa-fw fa-eye"></i> Show</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('types.edit', $type->id) }}"><i
                                                                    class="fa fa-fw fa-edit"></i> Edit</a></li>
                                                        <li>
                                                            {{-- <form action="{{ route('types.destroy', $type->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"
                                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                                    <i class="fa fa-fw fa-trash"></i> Delete
                                                                </button>
                                                            </form> --}}
                                                        </li>
                                                    </ul>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $types->links() !!}
            </div>
        </div>
    </div>
@endsection
