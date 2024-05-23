@extends('layouts.appo')

@section('template_title')
    {{ __('Create') }} Reservation
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Reservation</span>
                    </div>
                    <div class="card-body bg-white">
                        @php
                            $chambre_id = 8;
                        @endphp
                        <form method="POST" action="{{ route('reservations.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('reservation.formEng')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
