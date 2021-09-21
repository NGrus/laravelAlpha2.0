@extends('master2')

@section('content')
  <div id="grid-container">
    @foreach($topics as $topic)
      <div id="topicdiv" class="t{{$topic->id}}">
        <a href="/topic">
          {{$topic->topic}}
        </a>
      </div>
    @endforeach
  </div>
@endsection