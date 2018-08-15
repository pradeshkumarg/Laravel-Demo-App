@extends('layout')

@section('content')
<h1>All Cards</h1>
  @foreach ($cards as $card)
    <li> <a href="/cards/details/{{$card->id}}">{{$card->title}}</a> </li>
  @endforeach
@stop
