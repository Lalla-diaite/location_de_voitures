<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div
        class="flex justify-evenly bg-fixed bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white p-4 border-2 border-gray-800 rounded-lg mb-2 sticky top-0 z-50">
        <nav>
            <a href="/">Acceuil</a>
        </nav>
        <nav>
            <a href="/client">clients</a>
        </nav>
        <nav>
            <a href="/location">location</a>
        </nav>
    </div>
    <main>
        <?=
        $content;
        ?>
    </main>
    <footer class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white p-4 text-center text-xl sticky bottom-0 w-full mt-3
            ">
        <div>
            <p>touts droits reserve</p>
        </div>

    </footer>
</body>

</html>