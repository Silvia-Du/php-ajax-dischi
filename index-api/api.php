<?php 
  include __DIR__ .'/../db_dischi.php';
  $success= true;
  $error_msg ='';
  $filteredList=[];
  
  $request= $_GET['genre'];

  if(empty($request)){
    $filteredList = $discs;
  }else{
    foreach($discs as $disc){
      if($disc['genre'] === $request){
        $filteredList[] = $disc;
      }
    }
  }


    header('Content-Type: application/json');
    echo json_encode(
      [
        'success' => $success,
        'error' => $error_msg,
        'discs' => $filteredList,
      ]
    );

  
// quando l'utente seleziona un genere, quello sarà il pezzo della mia richiesta get nella stinga di api.
//al change, si scatena una funzione che rifa la chiamata axios.
//questo vuol dire che dall'atra parte c'è la condizione che definisce l'array da inviare: se get è uguale a qualcosa, filtro in un nuovo array a seconda del genere, altrimenti l'array che invio è completo.
  

?>