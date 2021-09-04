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
            <img src='{{$cardSingle["thumb"]}}' alt="">
        </div>

        <h3>{{ $cardSingle[ "title" ]}}</h3>

    </div>
    @endforeach

</div>
@endsection
