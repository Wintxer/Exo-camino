<?php
  include('../lib/app.php');

  // Vérification de la méthode utilisée
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $db = getDatabase();

    // Formatage des données pour la base
    if ($_GET['display-title'] == "on") {
      $display = "true";
    } else {
      $display = "false";
    }

    // Ecriture de la requête SQL
    $sql  = "UPDATE " . $_GET['table']. " SET title = '" . $_GET['title'] . "', display = '" . $display . "'";

    // Préparation et éxecution de la requête
    $stmt = $db -> prepare($sql);
    $stmt -> execute();

    $db = null;

    // Redirection sur la page de base
    header('Location: ../dashboard.php');
  }
  else {
    http_response_code(500);
  }
?>