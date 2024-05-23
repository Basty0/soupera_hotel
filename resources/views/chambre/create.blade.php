@extends('layouts.appo')

@section('template_title')
    {{ __('Create') }} Chambre
@endsection
<style>
    #ch {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Chambre</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('chambres.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('chambre.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
