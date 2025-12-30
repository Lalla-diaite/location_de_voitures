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

<body>
    <form action="">
        <label for=""></label>
        <input type="text" name="recherche" placeholder="rechercher une voiture">
        <button>rechercher</button>
    </form>
    <h1 class="text-xl mt-6">Nouvelle location</h1>
    <form action="">
        <label for="" class="mt-6">voiture</label><br>
        <input type="text" placeholder="hundai sonata" class="mb-6"><br>
        <label for="" class="mt-6">numero CNI client</label>
        <input type=" text" placeholder="" class="mb-6">
        <button class=" bg-green-600">valider</button>
    </form>
    <form action="">
        <label for="">voiture</label><br>
        <input type=" text" placeholder="hundai sonata" class="mb-6"><br>
        <label for="" class="mt-6">numero CNI client</label>
        <input type="text" placeholder="" class="mb-6"><br>
        <label for="">nom client</label>
        <input type="text" placeholder="nom du client">
        <label for="">prenom client</label>
        <input type="text" placeholder="prenom du client"><br><br>
        <label for="" class="mt-6">telephone client</label>
        <input type=" number" placeholder="tel du client"><br><br>
        <label for="" class="mt-6">Duree de location</label>
        <select name="choix" id="" class="form-select" class="mb-6"><br>
            <option value="" selected>selectionner...</option>
            <option value=" 1journee">1journee</option>
            <option value="2jours">2jours</option>
            <option value="3jours">3jours</option>
            <option value="1semaines">1semaines</option>
            <option value="2semaines">2semaines</option>

        </select><br>
        <button class="bg-blue-600 mt-2 mb-6">louer</button>
    </form>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . "/../../views/layouts/main.php";
?>