@extends('layout.app')
@section('content')
<section>
    <div class="container-galerie">
        <div class="img-list">
            <img src="{{ asset("images/image.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/image.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/studentvisa.jpg")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/image.png")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/studentvisa.jpg")}}" alt="" class="img-list-item">
            <img src="{{ asset("images/image.png")}}" alt="" class="img-list-item">
        </div>
    </div>
</section>
@endsection
