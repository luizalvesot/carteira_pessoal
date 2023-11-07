@extends('layouts.app')

@section('content')
    <div class="py-4 pb-2 row-cards">
        <div class="container">
            @livewire('cards')
        </div>
    </div>
    <div class="container shadow bg-white py-4 px-4 pb-4 mb-4">
        <form method="POST" action="">
            @csrf
            <div class="row">
                @include('_form-fields')
                <div class="col-xl-1 col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg active">Adicionar</button>
                </div>    
            </div>
        </form>
    </div>
    <div class="container shadow bg-white py-4 px-4 pb-4 mb-4">
        <div class="row justify-content-center">
            @livewire('tables')
        </div>
    </div>
@endsection
