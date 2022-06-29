<?php
  include('../lib/app.php');

    // Appel de la base
    $db = getDatabase();

    $sql = "SELECT * FROM title_1";
    $req = $db -> prepare($sql);
    $req -> execute();
    $res = $req->fetchAll();

    // Préparation du renvoi des données
    $return_arr[] = array("text" => $res[0][1],
    "visibility" => $res[0][2]);

    // Renvoi des données au format JSON
    echo json_encode($return_arr);
?>