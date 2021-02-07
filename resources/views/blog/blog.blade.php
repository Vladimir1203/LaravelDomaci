@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="row_style">
        <h4 class="text-center">Postavi novi post</h4>
        <div class="col-md-4   col-md-offset-4">
            <form action="submit" method="POST">
                <div class="form-group">
                    <input type="text" name="naslov" class="form-control" placeholder="Title">
                </div>
                <textarea class="form-control" name="opis"id="editor" cols="30" rows="10">Ispiste tekst ovde...</textarea>
                <br>

                <label for="trainers">Odaberi instruktora:</label>

                <select name="trainers" id="trainers">
                    @foreach($trainerList as $trainer)
                        <option value="{{$trainer->id}}">{{$trainer->ImePrezime}}</option>
                    @endforeach
                </select>
            
                <div class="form-group">
                    <button class="btn btn-primary" id="submit">Postavi novi post</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>

<table class="table table-striped">
<h1>Postovi</h1>
    <thead>
      <tr>
        <th>Naslov</th>
        <th>Tekst</th>
        <th>Instruktor</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)
        @foreach($posts as $post)
      <tr>
        <td>{{$post->naslov}}</td>
        <td>{{$post->text}}</td>
        <td>{{$post->ImePrezime}}</td>
      </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection
