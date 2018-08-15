@extends('layout')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <!-- <h1>  Id : {{$card->id}} </h1> -->
      <h1>{{$card->title}}</h1>


      @if($card->notes->all() != [])
      <u>Notes</u>

      <ul class="list-group">
        @foreach($card->notes as $note)
          <li class="list-group-item">{{$note->body}}</li>
        @endforeach
      </ul>
      @else
          No notes available
      @endif

      <hr>

      <h3>Add a new note</h3>
      <form action="/cards/{{$card->id}}/notes" method="POST">
        <div class="form-group">
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Add note</button>
        </div>
      </form>

    </div>
  </div>

@stop
