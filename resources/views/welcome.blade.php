@extends('layout')

@section('content')

    @foreach ($Champs['data'] as $set)
        <a href="/champions.php/champion?id={{ $set['id'] }}"><img src="http://ddragon.leagueoflegends.com/cdn/6.8.1/img/champion/{{ $set['key'] }}.png" ></a>
    @endforeach
    </p>


@stop