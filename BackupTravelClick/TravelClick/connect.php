<?php

try {

$pdo = new PDO("mysql:host=34.95.195.221;dbname=DataBaseTravelClick", 'root', '/-488C~/v%|~o}"8');
// Verificar conexão
//echo "Conexão estabelecida com sucesso!";
}catch (PDOException $e) {
    // Captura exceções de PDO e exibe a mensagem de erro
    echo 'Erro de conexão: ' . $e->getMessage();
}

?>