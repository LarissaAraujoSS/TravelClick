<?php

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha foram enviados
    if (isset($_POST['HI_PREV_Res']) && isset($_POST['HF_PREV_Res'])) {
        // Recupera as credenciais do formulário
        $HI_PREV_Res = $_POST['HI_PREV_Res'];
        $HF_PREV_Res = $_POST['HF_PREV_Res'];
        
        // Executa a consulta SQL para verificar as credenciais
        // Substitua 'nome_tabela' pelo nome real da sua tabela
        // $query = "SELECT * FROM Users WHERE NomeUser = '$nomeUsuario' AND Password = '$senha'";
        
        // Execute a consulta no banco de dados
        // Substitua $conn pela sua conexão com o banco de dados
        $query = "SELECT * FROM Reservas WHERE status = ? ";
        // Verifica se a consulta retornou algum resultado
        try {
            // Substitua $pdo pela sua conexão PDO
            // Prepara a consulta
            $stmt = $pdo->prepare($query);
            
            // Executa a consulta com os valores passados como parâmetros
            $stmt->execute("em andamento");
            
            // Obtém a linha do registro
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verifica se a consulta retornou algum resultado
            if ($row) {
                // Credenciais corretas, usuário autenticado com sucesso
                if($row[""])
                // Redireciona o usuário para a página de boas-vindas, por exemplo
                // header("Location: perfil.html");
                
                //exit;
            } else {
                // Credenciais incorretas, exibe uma mensagem de erro
                echo "Nome de usuário ou senha incorretos.";
            }
        } catch (PDOException $e) {
            // Captura exceções de PDO e exibe a mensagem de erro
            echo 'Erro de conexão: ' . $e->getMessage();
        }
    } else {
        // Campos de nome de usuário e senha não foram enviados
        echo "Por favor, insira o nome de usuário e senha.";
    }
}
?>

?>
