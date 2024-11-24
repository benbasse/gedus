@extends('layout.app')
@section('content')
<div class="container-membres">
    <div class="membres-main">
        <h1 class="h2-program">Membres et Représentant </h1>
        <div class="membres-cards">
            <div class="card-membre-img">
                <img src="{{ asset("images/img-rp-aa.png")}}" alt="" class="card-membre">
                <p class="p-membre">Inspecteur Général Zones AFRIQUE et ASIE</p>
            </div>
            <div class="card-membre-img">
                <img src="{{ asset("images/img-rp-aa.png")}}" alt="" class="card-membre">
                <p class="p-membre">Inspecteur Général Zones AFRIQUE et ASIE</p>
            </div>
            <div class="card-membre-img">
                <img src="{{ asset("images/img-rp-aa.png")}}" alt="" class="card-membre">
                <p class="p-membre">Inspecteur Général Zones AFRIQUE et ASIE</p>
            </div>
        </div>
    </div>
</div>
@endsection
