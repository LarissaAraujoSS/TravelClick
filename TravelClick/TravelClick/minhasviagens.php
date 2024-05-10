<?php
// Inicia ou resume a sessão
session_start();
// Verifica se o formulário de login foi enviado
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha foram enviados

        // Recupera as credenciais do formulário
    $idUser=$_SESSION['idUser'];
    

        // Executa a consulta SQL para verificar as credenciais
        // Substitua 'nome_tabela' pelo nome real da sua tabela
        // $query = "SELECT * FROM Users WHERE NomeUser = '$nomeUsuario' AND Password = '$senha'";

        // Execute a consulta no banco de dados
        // Substitua $conn pela sua conexão com o banco de dados
    $query = "SELECT * FROM `databasetravelclick`.`reservas` WHERE id_User = ? and status = ?  ";
        // Verifica se a consulta retornou algum resultado

    try {

           // Substitua $pdo pela sua conexão PDO
            // Prepara a consulta
        $stmt = $pdo->prepare($query);

            // Executa a consulta com os valores passados como parâmetros
        $stmt->execute([$idUser,"em andamento"]);
 
            // Obtém a linha do registro
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

       
            // Verifica se a consulta retornou algum resultado
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))  {
                // Credenciais corretas, usuário autenticado com sucesso

         echo( '<div class="card" id="card" name="card'.$row['idReservas'].'" >		
            <img src="imagens/hatchback (6).png" style="height: 64px; width: 64px ; margin: 30%; margin-bottom: 0%;" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title" style="margin: 25%; margin-bottom: 0%; margin-top: 0%; color: rgb(100, 105, 145);">Reserva #'.$row['idReservas'].'</h5>   
            </div>
            <!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
            <ul class="list-group list-group-flush" style="color: rgb(100, 105, 145);">
            <li class="list-group-item" style="color: black;background: transparent;
            border: 2px rgb(255, 255, 255, 0.2);
            backdrop-filter: blur;">destino: <Maiusc>'.$row['Destino']. '</Maiusc></li>
            <li class="list-group-item" style="color: black;background: transparent;
            border: 2px rgb(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);">cidade: <Maiusc>'.$row['cidade']. '</Maiusc></li>
            <li class="list-group-item" style="color: black;background: transparent;
            border: 2px rgb(255, 255, 255, 0.2); `Destino`, `cidade`, `horaSaidaPrev`, `horaChegadaPrev`,`status`
            backdrop-filter: blur(20px);">Previsao Saida: <Maiusc>'.$row['horaSaidaPrev']. '</Maiusc></li>
            <li class="list-group-item" style="color:black;background: transparent;
            border: 2px rgb(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);">Previsao Chegada: <Maiusc>'.$row['horaChegadaPrev']. '</Maiusc> </li>
            <li class="list-group-item" style="color:black;background: transparent;
            border: 2px rgb(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);">status: '.$row['status']. '</li>

            </ul>
            <!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
            <div class="card-body" >
            <div id="card'.$row['idReservas'].'"></div>
            <div class="d-grid gap-2 d-md-block" style="margin: 10%; margin-bottom: 0%;">
            <button class="btn btn-outline-success" type="submit" id="btnDel'.$row['idReservas'].'" class style="background-color: #580FF6;color: whitesmoke; border: none;box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);"><img src="imagens/excluir (1).png" alt="Excluir" style="height: 30px; width: 30px; box-shadow: 0px 0px 10px 0px transparent; background-color: transparent;"></button>
            <button class="btn btn-outline-success" id='.$row['idReservas'] .' onclick="verReserva(this)" type="submit" style="background-color: #580FF6;color: whitesmoke; border: none;box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);"><img src="imagens/editar-mensagem.png" alt="Editar/apontar" style="height: 30px; width: 30px; box-shadow: 0px 0px 10px 0px transparent; background-color: transparent;"></button>
            <button class="btn btn-outline-success" type="submit" style="background-color: #580FF6;color: whitesmoke; border: none;box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);"><img src="imagens/usando-o-telefone.png" alt="Reservar" style="height: 30px; width: 30px; box-shadow: 0px 0px 10px 0px transparent; background-color: transparent;"></button>
            </div>
            </div>
            </div>');
                // Redireciona o usuário para a página de boas-vindas, por exemplo
                // header("Location: perfil.html");

                //exit;
     } 
 } catch (PDOException $e) {
            // Captura exceções de PDO e exibe a mensagem de erro
    echo 'Erro de conexão: ' . $e->getMessage();
}

}
?>


<script >
</script>