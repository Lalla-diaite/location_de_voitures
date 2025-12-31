<?php
ob_start();
?>
<?php
$title = $title ?? "bienvenue page client";
$curentpage = "client";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-800">
    <div class="w-full">

        <div class=" bg-gray-800 text-white mb-3 h-full">
            <h2 class="text-3xl text-center font-bold">Espace client personnel</h2>
            <h2 class="text-xl mb-2 font-bold">Gérez vos locations en toute simplicité</h2>
            <p>Notre espace client en ligne vous offre un contrôle total sur
                vos réservations. Accédez à votre historique, modifiez vos
                dates, ajoutez des options ou consultez vos factures en
                quelques clics.
            </p>
            <p> Profitez d'un programme de fidélité exclusif qui récompense votre confiance avec des réductions
                progressives, des surclassements gratuits et un service prioritaire.</p>
        </div>

        <div class="grid grid-rows-2 grid-cols-2 gap-4 ">
            <div class="bg-gray-600 text-white">
                <img src="" alt="" width="300px">
                <h2 class="text-xl">Réservations actives</h2>
                <h2>
                    Consultez et modifiez vos locations en cours. Prolongez
                    facilement votre période de location si nécessaire</h2>
            </div>
            <div class="bg-gray-600 text-white">
                <h2 class="text-xl">
                    Historique complet
                </h2>
                <h2>
                    Accédez à toutes vos locations passées avec factures et
                    documents téléchargeables</h2>
            </div>
            <div class="bg-gray-600 text-white">
                <h2 class="text-xl">
                    Programme fidélité
                </h2>
                <h2>Cumulez des points à chaque location et débloquez des
                    avantages exclusifs.</h2>
            </div>
            <div class="bg-gray-600 text-white">
                <h2 class="text-xl">
                    Profil personnalisé
                </h2>
                <h2>
                    Enregistrez vos préférences et informations pour des
                    réservations ultra-rapides
                </h2>
            </div>
        </div>
        <div class="w-full border-2 border-gray-400 max-auto my-6"></div>
        <div class="text-white">
            <h2 class="text-3xl font-bold mb-3 text-center">Temoignages de nos clients</h2>
            <div class="flex gap-3">
                <div class=" border-2 border-orange-900">
                    <p>« Service impeccable ! La voiture
                        était en parfait état et la prise en
                        charge très rapide.</p>
                    <p> Je recommande vivement pour tous vos besoins de location. » 4 Sophie Martin, Paris
                    </p>
                </div>
                <div class=" border-2 border-orange-900">
                    <p>« Excellent rapport qualité-prix. L'équipe est professionnelle et à l'écoute.</p>
                    <p>j'ai loué
                        plusieurs fois et jamais déçu par la qualité du service. » 4 Jean Dupont, Lyon</p>
                </div>
                <div class=" border-2 border-orange-900">
                    <p>« Interface de réservation intuitive
                        et transparente. Aucune surprise
                        au moment de la restitution. </p>
                    <p>expérience client vraiment au top !
                        »
                        4 Marie Leblanc, Marseille</p>
                </div>
            </div>
        </div>
        <div class="text-white">
            <div>
                <h2 class=" text-2xl font-bold mb-3 text-center">Pret a prendre la route?</h2>
                <p>Rejoignez des milliers de clients satisfaits qui nous font confiance pour leurs déplacements.
                </p>
                <p>Créez votre compte dès aujourd'hui et découvrez une nouvelle façon de louer.</p>
            </div>
            <div class="flex gap-4">
                <div><button class="bg-orange-900 hover:bg-orange-500 rounded-lg p-3">Creer mon compte</button></div>
                <div><button
                        class="border-2 border-orange-900 text-orange-900 hover:bg-orange-500 hover:text-white rounded-lg p-3 px-6 py-3">Nous
                        contacter</button>
                </div>
            </div>
        </div>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . "/../../views/layouts/main.php";
?>