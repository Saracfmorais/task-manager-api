<?php
require_once __DIR__ . '/../src/insertForTest.php';
$valor = assert($insert === true, 'errado');
if($valor == true){
    echo "O test passou. \n";
    exit(0); 
} else {
    echo "O test falhou. \n";
    exit(1);
}
?>
?>