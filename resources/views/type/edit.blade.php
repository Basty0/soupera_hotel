@extends('layouts.appo')

@section('template_title')
    {{ __('Update') }} Type
@endsection
<style>
    #type {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Type</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('types.update', $type->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
