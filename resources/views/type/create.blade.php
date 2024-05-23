@extends('layouts.appo')

@section('template_title')
    {{ __('Create') }} Type
@endsection
<style>
    #type {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Type</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('types.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
