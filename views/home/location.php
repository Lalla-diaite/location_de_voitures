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

<body>
        <div class="m-4 w-full max-w-md bg-white p-6 rounded-lg shadow mx-auto">
     <!-- Recherche -->
  
  <h1 class="text-xl font-semibold mb-4">Nouvelle location</h1>

  <form action="index.php" method="POST" class="space-y-4">

    <div>
      <label class="block text-sm font-medium mb-1">Voiture</label>
      <input
        type="text"
        placeholder="Hyundai Sonata"
        class="w-full border border-gray-300 p-2 rounded text-black"
      />
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Numéro CNI client</label>
      <input type="hidden" name="controller" value="client">
      <input type="hidden" name="action" value="verification">
      <input
        type="text"
        class="w-full border border-gray-300 p-2 rounded text-black"
        name="CNI"
      />
    </div>

    <button
      class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700"
    >
      Valider
    </button>
    <?php if(empty($cni)) : ?>
      <div class="mt-4 p-4 bg-red-100 text-red-700 rounded-lg">
           <p> veuiller remplir le champ CNI</p>
      </div>
      <?php endif; ?>
      <?php if(!empty($resultat)) : ?>
      <div class="mt-4 p-4 bg-green-100 text-green-700rounded-lg">
          <p>client trouve avc succees <?=   htmlspecialchars($resultat->getNom()." ".$resultat->getPrenom()) ?></p>
     </div>
  </form>
  <?php endif; ?>
  <!-- Formulaire complet -->
   
   <?php if(isset($resultat) && $resultat === false) : ?>

  <form action="index.php" method="POST" class="space-y-4 mt-8">

      <input type="hidden" name="controller" value="location">
      <input type="hidden" name="action" value="enrigistrer">
    <div>
      <label class="block text-sm font-medium mb-1">Nom client</label>
      <input
        type="text"
        placeholder="Nom du client"
        class="w-full border border-gray-300 p-2 rounded text-black"
        name="nom"
      />
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Prénom client</label>
      <input
        type="text"
        placeholder="Prénom du client"
        class="w-full border border-gray-300 p-2 rounded text-black"
        name="prenom"
      />
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Téléphone client</label>
      <input
        type="number"
        placeholder="Tel du client"
        class="w-full border border-gray-300 p-2 rounded text-black"
        name="telephone"
      />
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Durée de location</label>
      <select
        name="choix"
        class="w-full border border-gray-300 p-2 rounded text-black"
      >
        <option selected>Selectionner...</option>
        <option value="1journee">1 journée</option>
        <option value="2jours">2 jours</option>
        <option value="3jours">3 jours</option>
        <option value="1semaine">1 semaine</option>
        <option value="2semaines">2 semaines</option>
      </select>
    </div>

    <button type="submit" 
      class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700"
    >
      Louer
    </button>
  </form>
  <?php endif; ?>

  <?php if ( isset($client) && $client === true && $location === true) : ?>
  <div>
    <?php if (!empty($message)) : ?>
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
            <?php foreach ($message as $msg) : ?>
                <p><?= htmlspecialchars($msg) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
  </div>
  <?php elseif (!empty($message)) : ?>
    <div class="mt-4 p-4 bg-red-100 text-red-700 rounded-lg">
      <?php foreach ($message as $mes) : ?>
           <p> <?=  $mes ?></p>
           <?php endforeach; ?>
    </div>
  <?php endif; ?>
  
 
</div>
</body>
</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . "/../../views/layouts/main.php";
?>