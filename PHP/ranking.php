<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
  <body>


<?php

require_once 'config.php';
require_once 'classrybka.php';



if (isset($_GET["name"]) || ($_GET["score"])) {

    $new_score = new Ranking();
    $new_score->DodajWynik();
    $new_score->TabelaStart();
    $new_score->PokazWynik();
    $new_score->TabelaKoniec();

}

else {

    $new_score = new Ranking();
 	$new_score->TabelaStart();
    $new_score->PokazWynik();
    $new_score->TabelaKoniec();


};

?>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	  </body>
</html>