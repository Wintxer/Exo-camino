<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camino</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="./assets/scripts/app.js"></script>
    <script type="text/javascript">
        setInterval(() => {
            getTitle1();
            getTitle2();
            getTitle3();
        }, 100);
    </script>

</head>
<body onload="getTitle1(); getTitle2(); getTitle3();">
    <header>
        <nav>
            <ul>
                <li>
                    <a href="dashboard.php">Ecran de visualisation</a></li>
            </ul>
        </nav>
        <div id="title1" class="header-title">
        </div>
    </header>
    <main>
        <div  id="title2">
        </div>
    </main>
    <footer>
        <div id="title3">
        </div>
    </footer>
</body>
</html>