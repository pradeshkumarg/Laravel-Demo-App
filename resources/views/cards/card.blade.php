@extends('layout')

@section('content')

  Id : {{$card->id}} <br>
  Title: {{$card->title}}

<br><br>
@if($card->notes->all() != [])
<u>Notes</u>

  @foreach($card->notes as $note)


    <li>{{$note->body}}</li>

  @endforeach
@else
    No notes available
@endif

@stop
