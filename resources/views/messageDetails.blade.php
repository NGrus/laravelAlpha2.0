@extends('master')
@section('title', 'Message Details')
<div class="deetscont">
@section('h1', "Message Details")
@section('content')
  <p>post id = {{$message->id}}</p>
  <p>post title = "{{$message->title}}"</p>
  <p>post content = "{{$message->content}}"</p>
  <p>posted: {{$message->created_at}}</p>
  <p>last modified:{{$message->updated_at}}</p>
  <form action="/messages/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
  </form>
  <a href="/messages" class="backtomsgs">back to messages</a>
</div>

@endsection