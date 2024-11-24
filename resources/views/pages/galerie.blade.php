@extends('layout.app')
@section('content')
<section>
    <div class="container-galerie">
        <div class="img-list">
            <img src="{{ asset("images/child-af.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/child-af-3.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/child-af-4.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/child-af-5.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/child-af-2.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/image.png")}}" alt="" class="img-list-item">
        </div>
    </div>
</section>
@endsection
