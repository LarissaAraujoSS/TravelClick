<?php

// Inicia ou resume a sessão
session_start();
// Verifica se o formulário de login foi enviado
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha foram enviados
   
        // Recupera as credenciais do formulário
        $idReserva = $_POST['idReserva'];
      //  echo("id #".$idReserva);
        
        
        // Executa a consulta SQL para verificar as credenciais
        // Substitua 'nome_tabela' pelo nome real da sua tabela
        // $query = "SELECT * FROM Users WHERE NomeUser = '$nomeUsuario' AND Password = '$senha'";
        //pegar os horarios que foram apontados anteriormnete pra fazer a veric
        $query = "SELECT horaSaidaReal,horaChegadaReal,KMInicial,KMFinal FROM Reservas WHERE idReservas = ?;";
        // Verifica se a consulta retornou algum resultado
        try {
            // Substitua $pdo pela sua conexão PDO
            // Prepara a consulta
            $stmt = $pdo->prepare($query);
            
            // Executa a consulta com os valores passados como parâmetros
            $stmt->execute([$idReserva]);
            
            // Obtém a linha do registro
            
            
            // Verifica se a consulta retornou algum resultado
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))  {
                // Credenciais corretas, usuário autenticado com sucesso
                
                $HI_r = $row["horaSaidaReal"];
                $HF_r = $row["horaChegadaReal"];
                $KM_i=$row["KMInicial"];
                $KM_f=$row["KMFinal"];
                $vetor_hora_KM = array($HI_r, $HF_r,$KM_i,$KM_f);
                $json = json_encode($vetor_hora_KM);
                echo($json);
                //var_dump($vetorHoras);
                
                // Redireciona o usuário para a página de boas-vindas, por exemplo
                // header("Location: perfil.html");
                
                //exit;
            }
        } catch (PDOException $e) {
            // Captura exceções de PDO e exibe a mensagem de erro
            echo 'Erro CONSULTA: ' . $e->getMessage();
        }
        
        
}