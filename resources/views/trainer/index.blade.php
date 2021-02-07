@extends('layouts.app')

@section('content')
<div class="flexContainer">
    <div id="login-container">
    <div class="profile-img"></div>
    <h1>
        Pera Peric
    </h1>
    <div class="description">
        Pera Peric je online instruktor za bolju organizaciju svakodnevnih aktivnosti. Ovim poslom se uspesno bavi 10 godina i svakoga dana povecava svoj broj klijenata.
    </div>
    <div class="social">
        <a>GitHub</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <a href="editTrainer/1" class="btn btn-primary trenerDugme">Unajmi me</a>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.5K</p>
        </div>
        <div class="projects">
        <p>Klijenti</p>
        <p>1254</p>
        </div>
    </footer>
    </div>

    <div id="login-container">
    <div class="profile-img2"></div>
    <h1>
        Anica Anic
    </h1>
    <div class="description">
        Anica Anic je online life coach. Posao zivotnog trenera (eng. life coach) je nasu instruktorku napravila poznatom jer je mnoge izvela na pravi put.
    </div>
    <div class="social">
        <a>GitHub</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <button>Unajmi me</button>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.3K</p>
        </div>
        <div class="projects">
        <p>Klijenti</p>
        <p>778</p>
        </div>
    </footer>
    </div>
</div>
@endsection
