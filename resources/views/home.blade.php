@extends('layouts.app')

@section('content')

<div class="flex">
        <div class="card">
            <img src="{{URL('/images/to-do.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Plan aktivnosti</b></h4>
                    <p>Tvoj instruktor ce praviti plan tvoje dnevne rutine</p>
                    <button id="mealButton" class="btn btn-success">Start</button>
                </div>
        </div>

        <div class="card">
            <img src="{{URL('/images/knowledge.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Plan ucenja</b></h4>
                    <p>Tvoj instruktor ce praviti plan ucenja za svaki tvoj dan</p>
                    <button id="workoutButton" class="btn btn-success">Start</button>
                </div>
        </div>
</div>

<div class="mealPlanForm">
<div class="card">
    <div class="container">
        <form action="" method="POST">
            Zeljeni cilj:
            <Input type="text" Name="Name" Size=15 Maxlength=15>
            <br>
            Pol:&nbsp;&nbsp;
            <Input type="radio" Name="Gender">&nbsp;M&nbsp;&nbsp;<Input type="radio" Name="Gender">&nbsp;F
            <br>
            Godine:&nbsp;
            <Input type="text" Name="Password">
            <br>
            Tip coveka:<br>
            <Textarea Name="Address" Rows="5" Cols="15"></Textarea>
            <br>
            Nivo aktivnosti:<br>
            <Input type="checkbox" Name="Browsing">&nbsp;Intenzivan rad na racunaru&nbsp;&nbsp;<Input type="checkbox" Name="Reading">&nbsp;Rad u prirodi<br><Input type="checkbox" name="Gaming">&nbsp;Rad sa metorom&nbsp;&nbsp;<Input type="checkbox" Name="Trekking">&nbsp;Rad u timu<br>
            <Input class="btn btn-success" type="Submit" Name="Submit" value="Submit">&nbsp;&nbsp;
        </form>
    </div>
</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/libs/app.js') }}"></script>
@endsection
