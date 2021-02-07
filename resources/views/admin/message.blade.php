@extends('layouts.admin')

@section('content')
<div class="card">
    <h1>Messages</h1>
        @if($messages)
            @foreach($messages as $message)
            <form action="submitTrainerMessage" method="POST">
                <h3>{{$message->subject}}</h3>
                <p>{{$message->message}}</p>

                <h2>Response:</h2>

                <h3>Title</h3>
                <input class="form-control" name="title" type="text" placeholder="Subject">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <h3>Message</h3>
                <input class="form-control" name="poruka" type="text" placeholder="Type a message">
                <button class="btn btn-primary">Send</button>
            </form>
            @endforeach
        @endif
</div>
@endsection