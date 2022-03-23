<meta charset="UTF-8">
<?php

$nome   = filter_input(INPUT_GET, 'nomee');
$senha  = filter_input(INPUT_GET, 'senhaa');
$ff     = filter_input(INPUT_GET, 'ff');
$id     = filter_input(INPUT_GET, 'idd');

include "conexao.php";


/* INSERT METHOD */
if ($ff == "save"){
    $sql_insert    = "INSERT INTO logi (nome, senha) VALUES ('$nome', '$senha')";
    
    if (!empty($nome)){
        if (!empty($senha)) {
            
        if (mysqli_connect_error()){
            die('Erro N'. mysqli_connect_errno(). '<br>-> '. mysqli_connect_error());
        }else{
            if($conect->query($sql_insert)){ 
                header('location:home.html'); 
            }else{ die($conect->error()); 
            }
            $conect->close();
        }
        
    }else{ echo "Senha Vazia"; }
}else{ echo "Nome Vazio"; }
}


/* UPDATE METHOD 
if ($ff == "updade") {

    $sql_update = "UPDATE logi SET nome='$nome', senha='$senha' WHERE id='$id'";
 */
?>