@extends('layout.app')
@section("content")
<section>
    <div class="container-contact">
        <div class="contact-form">
            <img src="{{ asset("images/img-contact.png")}}" alt="" class="img-contact-form">
            <form action="{{ route('contact.store') }}" method="POST" class="formulaire">
                @csrf
                <h1 class="h1-form">Formulaire de Contact</h1>
                <div class="div-inp-main">
                    <div class="div-input-small">
                        <div class="div-input">
                            <label for="fullname">Nom Complet *</label>
                            <input type="text" id="fullname" name="fullname" class="fullname" placeholder="John Doe">
                        </div>
                        <div class="div-input">
                            <label for="telephone">Téléphone</label>
                            <input type="text" id="telephone" name="telephone" class="fullname" placeholder="+221 77 123 12 34">
                        </div>
                    </div>

                    <div class="div-input div-inp-res">
                        <label for="email">Email *</label>
                        <input type="text" id="email" name="email" class="fullname email-form" placeholder="monemail@gmal.com">
                    </div>

                    <div class="div-input div-inp-res">
                        <label for="objet">Objet *</label>
                        <input type="text" id="objet" name="objet" class="fullname email-form" placeholder="Objet du message">
                    </div>
                    <div class="div-input-area div-inp-res">
                        <label name="message" id="message" for="message">Message *</label>
                        <textarea name="message" id="message" class="area-form" placeholder="
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempora fuga odio voluptas cupiditate pariatur nesciunt sed veritatis. Repellendus, nesciunt.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempora fuga odio voluptas cupiditate pariatur nesciunt sed veritatis. Repellendus, nesciunt.
                        "></textarea>
                    </div>
                    <div class="div-btn">
                        <button class="btn-submit">Envoyer</button>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            </form>
        </div>
</section>
@endsection
