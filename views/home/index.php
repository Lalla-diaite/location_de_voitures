<?php
ob_start();
?>
<?php
$title = $title ?? "bienvenu page acceuil";
$curentpage = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <div class="bg-gray-700 ">
        <h1 class="text-3xl">Location de voitures</h1>
        <h2 class="text-xl mt-6 max-w-xl">Découvrez notre service de location de véhicules premium, conçu pour
            répondre à tous vos besoins de mobilité. Que ce soit pour un voyage
            d'affaires, des vacances en famille ou un déplacement quotidien, nous
            mettons à votre disposition une flotte diversifiée et parfaitement
            entretenue.
        </h2>
        <div class="flex gap-4 mt-6 text-center">
            <h2 class="bg-orange-800">
                <button>reserver maintenant</button>
            </h2>
            <h2 class="border-2 border-orange-800 text-orange-600">
                <button>espace client</button>
            </h2>
        </div>
    </div>
    <div>
        <img src="C:/laragon/www/vue-de-la-voiture.jpg" alt="" width="300">
    </div>
    <div class=" mt-6 bg-orange-300">
        <h1 class="text-3xl text-center justify-center">Bienvenue chez Votre Partenaire Mobilité</h1>
        <div class="flex gap-10">
            <div>
                <h2 class="text-xl mt-6">Notre engagement envers vous</h2>
                <h2 class="text-xl mt-6 max-w-xl">
                    Depuis plus de 15 ans, nous révolutionnons l'expérience de
                    location
                    automobile en France. Notre mission est simple : vous offrir une liberté de
                    mouvement totale avec des véhicules récents, fiables et adaptés à chaque
                    situation.
                    Notre équipe passionnée travaille sans relâche pour garantir votre
                    satisfaction à chaque étape de votre parcours client. De la réservation en
                    ligne intuitive à la restitution rapide, nous simplifions chaque détail pour
                    que vous puissiez vous concentrer sur l'essentiel : votre voyage.</h2>
            </div>
            <div>
                <h2 class="text-xl mt-6">Nos avantages</h2>

                <ul class="list-disc text-xl mt-6">
                    <li>Flotte de véhicules récents et variés</li>
                    <li>Tarifs transparents sans frais cachés</li>
                    <li>Assistance routière 24h/7j</li>
                    <li>Réservation en ligne instantanée</li>
                    <li>Assurance tous risques incluse</li>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . "/../../views/layouts/main.php";
?>