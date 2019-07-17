<?php



function showFileContent($file = null) {
    

    $arq = file_get_contents($file);
    
    
  
    echo $arq;
}
//
//$arq = file_get_contents('teste.txt');
//
//echo $arq;

//$arq = file('teste.txt');
//
//
//
//foreach($arq as $linha) {
//    echo $linha;
//}

//$arq = fopen('teste.txt', $mode);
        
//        file_put_contents('teste.txt', 'adicionado!', FILE_APPEND);
//        
//        showFileContent('teste.txt');
        
//        unlink('teste_2.txt');

showFileContent('arquivo.php');