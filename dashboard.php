<?php
  include('lib/app.php');

    // Appel de la base
    $db = getDatabase();

    // Récupération des données de la première table
    $sql_1 = "SELECT * FROM title_1";
    $req_1 = $db -> prepare($sql_1);
    $req_1 -> execute();
    $res_1 = $req_1->fetchAll();

    // Récupération des données de la deuxième table
    $sql_2 = "SELECT * FROM title_2";
    $req_2 = $db -> prepare($sql_2);
    $req_2 -> execute();
    $res_2 = $req_2->fetchAll();

    // Récupération des données de la troisième table
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
    <link rel="stylesheet" href="assets/style/dashboard.css">
    <link rel="stylesheet" href="assets/style/custom-swich.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="assets/scripts/app.js"></script>
     
  </head>
  <body>
      <header class="header">
          <div class="logo">
            LOGO
          </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li>Dashboard</li>
            </ul>
        </nav>
      </header>
      <main class="main">
          <div class="title">
              <h1>
                Panneau de contrôle
              </h1>
          </div>
          <section class="content">
              <div class="cards">
                  <h2>Item 1</h2>
                  <p>Boîte de gestion</p>
                  <form class="card-form" id="form1" action="controllers/dashboard_form.php">
                      <input type="hidden" name="table" value="title_1">
                      <label class="label-title" for="title1">Titre de l'élément 1</label>
                      <input class="input-title" type="text" name="title" id="title1" value="<?= $res_1[0][1] ?>" onBlur="checkboxSubmit('display-title1', 'display-title1-hidden', 'form1')">
                      <div class="display-elm">
                        <label for="display-title1">Afficher l'élément 1</label>
                        <label class="switch">
                            <input id='display-title1-hidden' type='hidden' value='off' name='display-title'>
                            <input type="checkbox" name="display-title" id="display-title1" onChange="checkboxSubmit('display-title1', 'display-title1-hidden', 'form1')"
                            <?php if($res_1[0][2] == "true") { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                        </label>
                      </div>
                  </form>
              </div>
              <div class="cards">
                  <h2>Item 2</h2>
                  <p>Boîte de gestion</p>
                  <form class="card-form" id="form2" action="controllers/dashboard_form.php">
                      <input type="hidden" name="table" value="title_2">
                      <label class="label-title" for="title2">Titre de l'élément 2</label>
                      <input class="input-title" type="text" name="title" id="title2"  value="<?= $res_2[0][1] ?>" onBlur="checkboxSubmit('display-title2', 'display-title2-hidden', 'form2')">
                      <div class="display-elm">
                        <label for="display-title2">Afficher l'élément 2</label>
                        <label class="switch">
                            <input id='display-title2-hidden' type='hidden' value='off' name='display-title'>
                            <input type="checkbox" name="display-title" id="display-title2" onChange="checkboxSubmit('display-title2', 'display-title2-hidden', 'form2')"
                            <?php if($res_2[0][2] == "true") { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                        </label>
                      </div>
                  </form>
              </div>
              <div class="cards">
                  <h2>Item 3</h2>
                  <p>Boîte de gestion</p>
                  <form class="card-form" id="form3" action="controllers/dashboard_form.php">
                      <input type="hidden" name="table" value="title_3">
                      <label class="label-title" for="title3">Titre de l'élément 3</label>
                      <input class="input-title" type="text" name="title" id="title3"  value="<?= $res_3[0][1] ?>" onBlur="checkboxSubmit('display-title3', 'display-title3-hidden', 'form3')">
                      <div class="display-elm">
                        <label for="active-title3">Afficher l'élément 3</label>
                        <label class="switch">
                            <input id='display-title3-hidden' type='hidden' value='off' name='display-title'>
                            <input type="checkbox" name="display-title" id="display-title3" onChange="checkboxSubmit('display-title3', 'display-title3-hidden', 'form3')"
                            <?php if($res_3[0][2] == "true") { echo 'checked'; } ?>>
                            <span class="slider round"></span>
                        </label>
                      </div>
                  </form>
              </div>
          </section>
      </main>
  </body>
</html>