<?php




//esta funcionando =)
$handle = fopen("php://stdout", "w+");
fwrite($handle, "olá mundo".PHP_EOL);
fclose($handle);
