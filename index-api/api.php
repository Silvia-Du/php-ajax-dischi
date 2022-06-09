<?php 
  include __DIR__ .'/../db_dischi.php';
  $success= true;
  $error_msg ='';


    header('Content-Type: application/json');
    echo json_encode(
      [
        'success' => $success,
        'error' => $error_msg,
        'discs' => $discs,
      ]
    );

  

?>