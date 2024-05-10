<?php


session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha foram enviados
        // Recupera as credenciais do formulário
        //dataatual)
        
    date_default_timezone_set('America/Sao_Paulo');
    
        // Get the current date and time
    $H_Atual = new DateTime();
    $dateFormated_H_Atual = $H_Atual->format('Y-m-d H:i:s');
    //echo("test".$dateFormated_H_Atual);
                
       // $dateFormated_H_Atual = $H_Atual->format('Y-m-d H:i:s');//Hora solicitada para solitar sendo inicio e final
       
        //echo($HI);
        // Executa a consulta SQL para verificar as credenciais
        // Substitua 'nome_tabela' pelo nome real da sua tabela
        // $query = "SELECT * FROM Users WHERE NomeUser = '$nomeUsuario' AND Password = '$senha'";
        
        // Execute a consulta no banco de dados
        // Substitua $conn pela sua conexão com o banco de dados
        $query = "SELECT * FROM Reservas WHERE status = ? and placa = ? ";
        // Verifica se a consulta retornou algum resultado
        try {
            // Substitua $pdo pela sua conexão PDO
            // Prepara a consulta
            $stmt = $pdo->prepare($query);
           $placa= $_POST["Placa"];
            // Executa a consulta com os valores passados como parâmetros
           $stmt->execute(array("em andamento",$placa));
            
            // Obtém a linha do registro
            $flagReserva="true";
            
            // echo($HI_PREV_Res.' '.$HF_PREV_Res);
            // Verifica se a consulta retornou algum resultado
            while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // echo($HI_PREV_Res.' <-- data solicitada  --> '.$HF_PREV_Res."  ");
                // echo($rows["horaSaidaPrev"].' <--Previsoes --> '.$rows["horaChegadaPrev"]);
                $horaSaida= $rows["horaSaidaPrev"];
                $horaChegadaPrev = $rows["horaChegadaPrev"];
                
                
                
                if($rows["horaSaidaReal"]!=""){
                    $horaSaida=$rows["horaSaidaReal"];
                    // $horaSaida  = new DateTime($horaSaidaReal);
                    // echo(" not null");
                }
              /*  $newhoraSaida  = new DateTime($horaSaida);
                $newhoraChegada  = new DateTime($horaChegadaPrev);
                $formathoraSaida = $newhoraSaida->format('Y-m-d H:i:s');//Hora solicitada para solitar sendo inicio e final
                $formathoraChegada = $newhoraChegada->format('Y-m-d H:i:s');
                */
                // echo("previsao banco".$horaSaida."a".$horaChegadaPrev);
                // echo("previsao reseerva".$dateFormated_HI."a".$dateFormated_HF);
                /* if(($formathoraSaida<=$dateFormated_HI)&&($dateFormated_HI<=$formathoraChegada)){
                 echo ("test4");
                 }*/
                // echo($rows["horaSaidaReal"].' <--Real --> '.$rows["horaChegadaReal"]);//$rows["horaChegadaReal"]
                // Credenciais corretas, usuário autenticado com sucesso
                /* if (DateTime::createFromFormat('Y-m-d H:i:s', $horaSaida) !== false && DateTime::createFromFormat('Y-m-d H:i:s', $horaChegadaPrev) !== false) {
                 if(($horaSaida<=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev)){
                 echo ("test4");
                 }
                 echo("format");
                 }*/
                // $interval = $dateFormated_HI->diff($horaSaida);
                
                // echo("test2");
                /*  $comparacion1 = $horaSaidaPrev->diff($dateFormated_HI);
                 $comparacion2 = $horaChegadaPrev->diff($dateFormated_HI);
                 $comparacion3 = $horaSaidaPrev->diff($dateFormated_HF);
                 $comparacion2 = $horaChegadaPrev->diff($dateFormated_HI);*/
                if(($horaSaida<=$dateFormated_H_Atual)&&($dateFormated_H_Atual<=$horaChegadaPrev)){
                   
                    $flagReserva="false";
                    break;
                }
                

                
                /* if((($horaSaida<=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev))||(($horaSaida<=$dateFormated_HF)&&($dateFormated_HF<=$horaChegadaPrev))||(($horaSaida>=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev)&&($horaSaida<=$dateFormated_HF)&&($dateFormated_HF>=$horaChegadaPrev))){
                
                $flagReserva="false";//encontrou uma reserva que deu conflito
                break;
                }*/
                
                
                // Redireciona o usuário para a página de boas-vindas, por exemplo
                // header("Location: perfil.html");
                
                //exit;
                
            }
            echo("placa".$dateFormated_H_Atual);
            if($flagReserva=="true"){
                echo('<div class="alert alert-success" role="alert">
                       carro disponivel 
                        </div>');
            }else{
                echo('<div class="alert alert-danger" role="alert">
                       indisponivel
                        </div>');
            }
            
            //echo("flag".$flagReserva);
        } catch (PDOException $e) {
            // Captura exceções de PDO e exibe a mensagem de erro
            echo 'Erro de consulta: ' . $e->getMessage();
        }
   
}


?>