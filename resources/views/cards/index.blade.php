@extends('layouts.main')

@section('content')
    <div class="cards">
        @foreach($cards as $card)
            @include('cards._card')
        @endforeach
    </div>
@stop