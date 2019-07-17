<?php



$arquivo =  new SplFileObject('spl_teste.txt');




foreach ($arquivo as $linha => $conteudo)
             echo "$linha : $conteudo" .PHP_EOL;

echo  "<table style='width:50%; margin: auto; border: 1px solid;'>";
echo "<tr>";
echo "<th> Nome </th>";
echo "<th> Caminho </th>";
echo "<th> Tamanho </th>";
echo "<th> Extensão </th>";
echo "</tr>";
echo "</tr>";
echo "<td>" . $arquivo->getFilename()  . "</td>";
echo "<td>" . $arquivo->getRealPath()  . "</td>";
echo "<td>" . $arquivo->getSize()      .  "</td>";
echo "<td>" . $arquivo->getExtension() .  "</td>";

echo "</tr>";

echo "</table>";

//
//     foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($folder),
//                                                           RecursiveIteratorIterator::SELF_FIRST) as $entry) {
//         
//         
//     }

