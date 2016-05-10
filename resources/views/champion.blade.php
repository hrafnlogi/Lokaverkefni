@extends('championlayout')
@section('titill')
    {{$_GET['key']}}
@stop

@section('content')
    {{--$_GET['id']--}}
    @foreach ($Champs['data'] as $set)
        @if($_GET['id'] == $set['id'])
            {{--<a href="/champions.php/champion?id={{ $set['id'] }}&key={{ $set['key'] }}"><img src="http://ddragon.leagueoflegends.com/cdn/6.8.1/img/champion/{{ $set['key'] }}.png"></a>--}}
            @section('champname')
                {{ $set['name'] }}
            @stop
            <h1 style="margin:0;">{{'Lore'}}</h1>
            <br>
            <p style="padding:0.7em;">{{ $set['lore'] }}

        @endif

    @endforeach

@stop
@section('splashart')
    http://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{$_GET['key']}}_0.jpg
@stop