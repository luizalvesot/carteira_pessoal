@extends('layouts.app')

@section('content')
    <div class="row justify-content-center py-3 pb-4" style="background-color: #282A57; font-family: Verdana">
            <h4 class="h4 mt-2 mb-2 text-white text-center py-2">Controle Financeiro</h4>
            <div class="container">
                @livewire('cards')
            </div>
    </div>
@endsection
