<?php

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
					
				 $query = "DELETE FROM `DataBaseTravelClick`.`Reservas` WHERE idReservas=?";
                // Verifica se a consulta retornou algum resultado
                try {
                    // Substitua $pdo pela sua conexão PDO
                    // Prepara a consulta
                    $stmt2 = $pdo->prepare($query);
                   
                    $idReserva= $_POST["idReserva"];
                   // echo("iduser".$idUser."cidade".$Cidade."destino".$destino."HI".$dateFormated_HI."HF".$dateFormated_HF);
                    //$dateFormated_HI; $dateFormated_HF
                    // Executa a consulta com os valores passados como parâmetros
                    $stmt2->execute([$idReserva]);
                    echo( '<div class="alert alert-success" role="alert">
                      viagem com id: #'.$idReserva.' excluida com sucesso   !
                    </div>');
                    // Obtém a linha do registro
                    
                }catch (PDOException $erroInsert) {
                    // Captura exceções de PDO e exibe a mensagem de erro
                    echo 'Erro ao exclui: ' . $erroInsert->getMessage();
                }
}