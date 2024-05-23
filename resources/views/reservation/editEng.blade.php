@extends('layouts.appo')

@section('template_title')
    {{ __('Update') }} Reservation
@endsection
<style>
    #rsrve {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Reservation</span>
                    </div>
                    <div class="card-body bg-white">
                        @php
                            $chambre_id = $chambre;
                        @endphp
                        <form method="POST" action="{{ route('reservations.update', $reservation->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('reservation.formEng')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
