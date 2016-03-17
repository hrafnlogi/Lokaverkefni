@extends('layout')

@section('content')
    <h1>All Cardssssss</h1>
    @foreach($cards as $card)
        <div>
            {{ $card->title }}
        </div>
    @endforeach

@stop