{{-- Estensione layout --}}
@extends('layouts.main-layout')

{{-- Riempimento buco Header --}}
@section('header-content')

{{-- Incluso hero.blade.php --}}
    @include('partials.hero')
@endsection

{{-- Riempimento buco Main --}}
@section('main-content')

    <div class="content-main">
        <div class="film-main">
            {{-- Incluso card.blade.php --}}
            @include('partials.card')
        </div>
        <div class="current-series">
            <span>current series</span>
        </div>
        <div class="button-main">
            <button type="button" class="button">load more</button>
        </div>
    </div>

@endsection
