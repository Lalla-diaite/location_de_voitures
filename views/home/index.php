<?php
ob_start();
?>
<?php
$title = $title ?? "bienvenu page acceuil";
$curentpage = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="bg-gray-800 text-white">
        <h1 class="text-3xl font-bold mb-6">Location de voitures</h1>
        <p class="text-xl mt-6 max-w-2xl text-lg mb-8">Découvrez notre service de location de véhicules premium, conçu
            pour
            répondre à tous vos besoins de mobilité. Que ce soit pour un voyage
            d'affaires, des vacances en famille ou un déplacement quotidien, nous
            mettons à votre disposition une flotte diversifiée et parfaitement
            entretenue.
        </p>
        <div class="flex gap-4 mt-6 text-center">
            <button class="bg-orange-800 hover:bg-orange-700 px-6 py-3 rounded-lg mb-3 ml-3">reserver
                maintenant</button>
            <button
                class="border-2 border-orange-500 text-orange-400 hover:bg-orange-500 hover:text-white px-6 py-3 rounded-lg mb-3">espace
                client</button>
        </div>
    </div>

    <div>
        <img src="/img/vue-de-la-voiture.jpg" alt="" width="300">
    </div>
    <div class=" mt-6 bg-white-300">
        <h1 class="text-3xl text-center justify-center font-bold">Bienvenue chez Votre Partenaire Mobilité</h1>
        <div class="flex gap-10">
            <div class="ml-3">
                <h2 class="text-xl mt-6">Notre engagement envers vous</h2>
                <h2 class="text-xl mt-6 max-w-xl">
                    Depuis plus de 15 ans, nous révolutionnons l'expérience de
                    location
                    automobile en Senegal. Notre mission est simple : vous offrir une liberté de
                    mouvement totale avec des véhicules récents, fiables et adaptés à chaque
                    situation.
                    Notre équipe passionnée travaille sans relâche pour garantir votre
                    satisfaction à chaque étape de votre parcours client.</h2>
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
        <div class="w-3/4 border h-1 bg-gray-600 mx-auto my-6"></div>
        <div class="flex justify-between">
            <div>
                <h2 class="text-5xl">15k+</h2>
                <h2 class="text-xl">Clients satisfaits
                </h2>
                <h2>Chaque année nous
                    accompagnons
                </h2>
            </div>
            <div>
                <h2 class="text-5xl">98%</h2>
                <h2 class="text-xl">Taux de satisfaction
                </h2>
                <h2>Évaluation moyenne client</h2>
            </div>
            <div>
                <h2 class="text-5xl">200+</h2>
                <h2 class="text-xl">Véhicules disponibles</h2>
                <h2>Dans notre flotte moderne</h2>
            </div>
            <div>
                <h2 class="text-5xl">24/7</h2>
                <h2 class="text-xl">Service client</h2>
                <h2>Disponible à tout moment</h2>
            </div>
        </div>
        <div class="bg-gray-800  justify-center mt-2">
            <div class="text-2xl text-white mb-1 text-center">
                <h1>Trouver votre voiture</h1><br>
            </div>
            <div class="flex flex-rows justify-center">
                <form action="" class="mt-1">
                    <label for=""></label>
                    <input type="text" class="px-6 py-3 rounded-lg mb-3 ml-3" name="recherche"
                        placeholder=" rechercher une voiture">
                    <button class="bg-orange-800 hover:bg-orange-700 mb-3 px-6 py-3 rounded-lg">rechercher</button>
                </form>
            </div>
        </div>

</body>

</div>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . "/../../views/layouts/main.php";
?>