<?php
ob_start();
?>
<?php
$title = $title ?? "bienvenue page location";
$curentpage = 'location';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex justify-center item-center  ">
        <form action="bg-white shadow border rounded-lg w-full max-w-lg p-6 mx-auto ">
            <h1 class="font-bold text-center text-xl mb-4">
                Nouvelle location</h1>

            <div class="">
                <label for="" class="">voiture</label><br>
                <input type="text" placeholder="hundai sonata" class="mb-3 border-2 rounded-lg px-3 py-3 p-2 w-96"><br>
            </div>
            <div> <label for="" class="">numero CNI client</label><br>
                <input type=" text" class="border-2 rounded-lg px-3 py-3 p-2 w-96" placeholder="cni"><br>
            </div>
            <div>
                <button
                    class="hover:bg-green-400 bg-green-600 text-white my-3 px-6 py-3 rounded-lg">valider</button><br>

            </div>
            <div>
                <label for="">prenom client</label><br>
                <input type="text" class="mb-3 border-2 rounded-lg px-3 py-3 p-2 w-96"
                    placeholder=" prenom du client"><br>
            </div>
            <div>
                <label for="">nom client</labeld><br>
                    <input type="text" class="mb-3 border-2 rounded-lg px-3 py-3 p-2 w-96"
                        placeholder="nom du client"><br>

            </div>
            <div>
                <label for="" class="my-3">telephone client</label><br>
                <input type=" number" class="mb-3 border-2 rounded-lg px-3 py-3 p-2 w-96"
                    placeholder="tel du client"><br>
            </div>
            <label for="" class=" mb-3">Duree de location</label><br>
            <select name="choix" id="" class="form-select p-2 w-96 rounded-lg">
                <option value="" selected="">selectionner...</option><br>
                <option value=" 1journee">1journee</option>
                <option value="2jours">2jours</option>
                <option value="3jours">3jours</option>
                <option value="1semaines">1semaines</option>
                <option value="2semaines">2semaines</option>

            </select><br>
            <button class="hover:bg-blue-400 bg-blue-600 mt-3 p-2 w-96 rounded-lg">louer</button>
        </form>
    </div>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . "/../../views/layouts/main.php";
?>