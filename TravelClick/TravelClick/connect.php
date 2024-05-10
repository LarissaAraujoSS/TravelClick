<?php

try {
 
$pdo = new PDO("mysql:host=localhost:3306;dbname=databasetravelclick", 'root', '');
// Verificar conexão
//echo "Conexão estabelecida com sucesso!";
}catch (PDOException $e) {
    // Captura exceções de PDO e exibe a mensagem de erro
    echo 'Erro de conexão: ' . $e->getMessage();
}

?>