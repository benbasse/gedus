const mix = require("laravel-mix");

mix.sass("resources/css/sass/main.scss", "public/css").options({
    processCssUrls: false, // Désactiver la gestion des URL pour éviter les problèmes avec des fichiers statiques
});
