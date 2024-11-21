<?php
require_once __DIR__ . '/../src/listForTest.php';
$valor = assert($contagem >= 1, 'errado');
var_dump($valor);

if($result == true){
    echo "O test passou. \n";
    exit(0); 
} else {
    echo "O test falhou. \n";
    exit(1);
}
?>