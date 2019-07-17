<?php


//   $conn = new PDO("sqlite:{$name}");
$conn = new PDO("sqlite:loja.db3");

try {

    $conn->exec("insert into tbcliente (cli_id_pk, cli_nome , cli_email, cli_tel) "
              . "values (6, 'Mary' , 'mary@email.com','71 632832342')");

}catch(PDOException $ex){
    echo " erro -> " . $ex->getMessage();
}
$result = $conn->query('select * from tbcliente ');

while($row = $result->fetch(PDO::FETCH_OBJ)) {
    
    echo 'nome: ' . $row->cli_nome . '<br>';
} 
    




unset($conn);

