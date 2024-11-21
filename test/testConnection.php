<?php
require_once __DIR__ . '/../src/connectionForTest.php';
$result = assert($conn instanceof mysqli, 'errado');

if($result == true){
    echo "O test passou. \n";
    exit(0); 
} else {
    echo "O test falhou. \n";
    exit(1);
}
?>