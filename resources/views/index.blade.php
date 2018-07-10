@extends('main')

@section('title', Home | Eureka)

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="onboarding">
    <div class="grid-x">
        <a href="{{ route('man') }}" class="overlay-container chooser-bg cell small-6 large-5" style="background-image: url({{ asset('img/Chooser_Man.png') }})">
            <div class="overlay-content grid-y align-middle align-center">
                <img class="cell shrink chooser" src="{{ asset('img/Man_Text.png') }}" alt="">
            </div>
        </a>
        <div class="overlay-container cell small-6 hide-medium large-2 bg-light-gray">
            <div class="overlay-content grid-x align-middle align-center">
                <img class="cell small-6" src="{{ asset('img/Logo_No_Shadow.png') }}" alt="">
            </div>
        </div>
        <a href="{{ route('woman') }}" class="overlay-container chooser-bg cell small-6 large-5" style="background-image: url({{ asset('img/Chooser_Woman.png') }})">
            <div class="overlay-content grid-y align-middle align-center">
                <img class="chcell shrink ooser" src="{{ asset('img/Woman_Text.png') }}" alt="">
            </div>
        </a>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
