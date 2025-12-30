<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex justify-evenly bg-fixed">
        <nav>
            <a href="">Acceuil</a>
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
    <footer>
        <p>touts droits reserve</p>
    </footer>
</body>

</html>