@extends('templates.base')
@section('title', 'HomePage - DC Comics')

@section('main')
<div class='main-background'></div>

<div class='main-poster-container'>

    <div class='current-series'> 
        <div>CURRENT SERIES</div>
    </div>

    @foreach($comics as $cardSingle)
    <div class='poster-card'>

        <div class='poster-image'>
        <a href="{{ route('product', [ 'id' => $loop->iteration ]) }}"><img src='{{$cardSingle["thumb"]}}'></a>
        </div>

        <div class='poster-txt'><a href="{{ route('product', [ 'id' => $loop->iteration ]) }}"><h3>{{ $cardSingle[ "title" ]}} </h3></a></div>

    </div>
    @endforeach

</div>
@endsection
