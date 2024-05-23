@extends('layouts.appo')

@section('template_title')
    {{ $plat->name ?? __('Show') . ' ' . __('Plat') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plat</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('plats.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body ">

                        <div class="row">


                            <div class="col-12 col-md-6 bg-white py-3 border rounded-4 ">
                                <div class="row">
                                    <div class="col-md-5 col-12 mb-md-0 mb-2">
                                        <img style=" width: 100%;
                                    height: 300px;
                                    object-fit: cover;"
                                            class="rounded-3"
                                            src="{{ asset('assets/img/plat/' . $plat->image_principale) }}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2 mb20">
                                            <strong>Nom:</strong>
                                            {{ $plat->nom }}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <strong>Description:</strong>
                                            {{ $plat->description }}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <strong>Prix:</strong>
                                            {{ $plat->prix }}
                                        </div>
                                        <div class="form-group mb-2 mb20">
                                            <strong>Image Principale:</strong>
                                            {{ $plat->image_principale }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
