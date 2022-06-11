<?php 
  include __DIR__. './db_dischi.php';

  $filteredDiscs=[];
  $genresList=[];
  $request= $_GET['genre'];

  //filtro la lista per parametro GET

  if(empty($request)){
    $filteredDiscs = $discs;
  }else{
    foreach($discs as $disc){
      if($disc['genre'] === $request){
        $filteredDiscs[] = $disc;
      }
    }
  }

  //raccolgo generi per la select
  foreach($discs as $disc){
    if(!in_array($disc['genre'],$genresList)){
      $genresList [] = $disc['genre'];
    }
  }

    header('Content-Type: application/json');
    echo json_encode(
      [
        'genres' => $genresList,
        'discs' => $filteredDiscs,
      ]
    );
  
?>