<?php
  include('lib/app.php');

    // Appel de la base
    $db = getDatabase();

    $sql_1 = "SELECT * FROM title_1";
    $req_1 = $db -> prepare($sql_1);
    $req_1 -> execute();
    $res_1 = $req_1->fetchAll();

    $sql_2 = "SELECT * FROM title_2";
    $req_2 = $db -> prepare($sql_2);
    $req_2 -> execute();
    $res_2 = $req_2->fetchAll();

    $sql_3 = "SELECT * FROM title_3";
    $req_3 = $db -> prepare($sql_3);
    $req_3 -> execute();
    $res_3 = $req_3->fetchAll();
?>

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
    <script type = "text/JavaScript">
           function AutoRefresh( t ) {
              setTimeout("location.reload(true);", t);
           }
     </script>
     
  </head>
  <body onload = "AutoRefresh(5000);">
    <header>
        <nav>
            <ul>
                <li>
                    <a href="dashboard.php">Ecran de visualisation</a></li>
            </ul>
        </nav>
        <?php if ($res_1[0][2] == "true"): ?>
        <div class="header-title">
            <h2><?= $res_1[0][1] ?></h2>
        </div>
        <?php endif ?>
    </header>
    <main>
        <?php if ($res_3[0][2] == "true"): ?>
        <div>
            <h1><?= $res_3[0][1] ?></h1>
        </div>
        <?php endif ?>
    </main>
    <footer>
        <?php if ($res_2[0][2] == "true"): ?>
        <div>
            <h2><?= $res_2[0][1] ?></h2>
        </div>
        <?php endif ?>
    </footer>
  </body>
</html>