@extends('layouts.appo')

@section('template_title')
    {{ __('Update') }} Chambre
@endsection
<style>
    #ch {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Chambre</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('chambres.update', $chambre->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('chambre.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
