<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/userPlans.css') }}">
</head>
<body>
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
</body>
</html>