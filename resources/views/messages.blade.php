
  @extends ('master')
  @section('title', 'Message List')
  @section('content')
  @section('h1', 'Messages')
  <h2>Create new message: </h2>
  <form action="/create" method="post">
    <input type="text" name="title" placeholder="title">
    <br>
    <input type="text" name="content" placeholder="content" style="height:60px;text-align:start;">
    <br>
    @csrf
    <button type="submit" style="color:black">Submit</button>
  </form>
  <h2>Recent Messages:</h2>
  <ul>
    @foreach($messages as $message)
      <b> <a href="/messages/{{$message->id}}">{{$message->title}}:</a></b><br>
      <p>{{$message->content}}</p>
      <p>{{$message->timestamp}}</p>
      <br>
      <br>
    @endforeach
  </ul>
  @endsection
  @section('style')
    <style>
      * {
        color:red;
      }
    </style>
  @endsection
