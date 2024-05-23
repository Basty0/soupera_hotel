@extends('layouts.appo')

@section('template_title')
    {{ __('Create') }} Plat
@endsection
<style>
    #resto {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Plat</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('plats.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('plat.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
