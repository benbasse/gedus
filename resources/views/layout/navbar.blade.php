<div class="container-navbar">
    <div class="navbar-logo">
        <img src="{{ asset("images/logo-gedus.png")}}" alt="" class="logo-gedus">
    </div>
    <div class="navbar-navigation">
        <a href="/" class="{{ request()->is('accueil') ? 'active' : '' }}">
            <div class="nav-item">
                <p>Accueil</p>
            </div>
        </a>
        <a href="/apropos" class="{{ request()->is('apropos') ? 'active' : '' }}">
            <div class="nav-item">
                <p>Apropos</p>
            </div>
        </a>
        <a href="/galerie" class="{{ request()->is('galerie') ? 'active' : '' }}">
            <div class="nav-item">
                <p>Galerie</p>
            </div>
        </a>
        <a href="/membres" class="{{ request()->is('membres') ? 'active' : '' }}">
            <div class="nav-item">
                <p>Membres</p>
            </div>
        </a>
        <div class="nav-item">
            <p>Pays Membre</p>
            <div class="sub-categories">
                <p class="sub-item">USA</p>
                <p class="sub-item">Togo</p>
                <p class="sub-item">Cote d'ivoire</p>
                <p class="sub-item">Guinée</p>
                <p class="sub-item">Benin</p>
                <p class="sub-item">Sénégal</p>
                <p class="sub-item">Caméroun</p>
                <p class="sub-item">Niger</p>
            </div>
        </div>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">
            <div class="nav-item">
                <p>Nous - Contacter</p>
            </div>
        </a>
    </div>
</div>

