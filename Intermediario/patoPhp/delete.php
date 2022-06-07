<?
    require('db/conexao.php');

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


    if(!empty($id)){

        $retorna = ['erro' => false, 'id: ' => $id];

    }else{
        
        $retorna = ['erro' => true];
    }

    echo json_encode($retorna);

?>