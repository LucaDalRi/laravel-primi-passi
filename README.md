Ciao ragazzi,
oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!
Per prima cosa, creiamo un nuovo progetto Laravel 9, utilizzando questo comando:
composer create-project laravel/laravel:^9.2 . -> se avete già creato la cartella vuota


Poi avviamo l'artisan serve con uno di questi due comandi:
php artisan serve

A questo punto, iniziamo a prendere confidenza con le rotte e le views:
Cancelliamo la view welcome.blade.php e creiamo una nostra homepage
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo solo un Hello World, poi possiamo aggiungere quello che vogliamo.

Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()