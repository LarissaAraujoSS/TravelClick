<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha foram enviados
    if (isset($_POST['D_HI_PREV_Res']) && isset($_POST['T_HI_PREV_Res'])&& isset($_POST['D_HF_PREV_Res'])&& isset($_POST['T_HF_PREV_Res'])) {
        // Recupera as credenciais do formulário
        $D_HI_PREV_Res = $_POST['D_HI_PREV_Res'];//DATA inicial previsao reserva
        $T_HI_PREV_Res = $_POST['T_HI_PREV_Res'];//DATA inicial previsao reserva
        
        $D_HF_PREV_Res = $_POST['D_HF_PREV_Res'];//hora final previsao reserva 
        $T_HF_PREV_Res = $_POST['T_HF_PREV_Res'];//hora final previsao reserva 
        
        $placa_escolhida = $_POST['cars'];
        $HI = new DateTime($D_HI_PREV_Res." ".$T_HI_PREV_Res);
        $HF = new DateTime($D_HF_PREV_Res." ".$T_HF_PREV_Res);
        
        $dateFormated_HI = $HI->format('Y-m-d H:i:s');//Hora solicitada para solitar sendo inicio e final 
        $dateFormated_HF = $HF->format('Y-m-d H:i:s');
        //echo($HI);
        // Executa a consulta SQL para verificar as credenciais
        // Substitua 'nome_tabela' pelo nome real da sua tabela
        // $query = "SELECT * FROM Users WHERE NomeUser = '$nomeUsuario' AND Password = '$senha'";
        
        // Execute a consulta no banco de dados
        // Substitua $conn pela sua conexão com o banco de dados
        $query = "SELECT * FROM reservas WHERE status = ? ";
        // Verifica se a consulta retornou algum resultado
       
            // Substitua $pdo pela sua conexão PDO
            // Prepara a consulta
            $stmt = $pdo->prepare($query);
            
            // Executa a consulta com os valores passados como parâmetros
            $stmt->execute(array("em andamento"));
            
            // Obtém a linha do registro
            $flagReserva=true;
            $flagReservaFPS1362=true;
            $flagReservaFHX4989=true;
            $flagReservaFPQ2132=true;

        try{    // echo($HI_PREV_Res.' '.$HF_PREV_Res);
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
                $newhoraSaida  = new DateTime($horaSaida);
                $newhoraChegada  = new DateTime($horaChegadaPrev);
                $formathoraSaida = $newhoraSaida->format('Y-m-d H:i:s');//Hora solicitada para solitar sendo inicio e final
                $formathoraChegada = $newhoraChegada->format('Y-m-d H:i:s');
               
               // echo("previsao banco".$horaSaidaPrev."a".$horaChegadaPrev);
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
                if(($horaSaida<=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev)){ 
                    $flagReserva=false;
                    
                }else if((($horaSaida>=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev)&&($horaSaida<=$dateFormated_HF)&&($dateFormated_HF>=$horaChegadaPrev))){
                    $flagReserva=false;
                   
                }
                //despois implementar um vetor carros disponivel onde no começoes setar todos os carros disponivel depois conforme ir encontrando a falta de disponibuilidade irar tirando no vetor 
                if($flagReserva==false){
                        if($rows["placa"]==$placa_escolhida){
                            ${"flagReserva".$placa_escolhida}=false;
                                    //tirar do vetor disponivel a placa fps1362
                        }

                        if(($flagReservaFPS1362==false)&&($flagReservaFHX4989==false)&&($flagReservaFPQ2132==false)){
                                $flagReserva=false; //se os treias carros nao tiverem disponibilidade entao parar consulta e retorna false
                                break;
                        }else{
                            $flagReserva=true;//caso ao contrario ele vai sempre liberar
                          }  
        
                }
                        

            }//fecha while

             
            

        } catch (PDOException $e) {
            // Captura exceções de PDO e exibe a mensagem de erro
            echo 'Erro de consulta: ' . $e->getMessage();
        } 
                   /* if((($horaSaida<=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev))||(($horaSaida<=$dateFormated_HF)&&($dateFormated_HF<=$horaChegadaPrev))||(($horaSaida>=$dateFormated_HI)&&($dateFormated_HI<=$horaChegadaPrev)&&($horaSaida<=$dateFormated_HF)&&($dateFormated_HF>=$horaChegadaPrev))){
                        
                        $flagReserva="false";//encontrou uma reserva que deu conflito 
                        break;
                    }*/
                    
               
                // Redireciona o usuário para a página de boas-vindas, por exemplo
                // header("Location: perfil.html");
                
                //exit;
                        
                
            
            if(${"flagReserva".$placa_escolhida}==true){
                //reservar caso tiver disponibilidade 
                $query2 = "INSERT INTO `databasetravelclick`.`reservas` (`id_User`, `Destino`, `cidade`, `horaSaidaPrev`, `horaChegadaPrev`,`status`,`placa`) VALUES ( ?, ?, ?, ?, ?,?,?);";
                // Verifica se a consulta retornou algum resultado
                try {
                    // Substitua $pdo pela sua conexão PDO
                    // Prepara a consulta
                    $stmt2 = $pdo->prepare($query2);
                    $idUser=$_SESSION['idUser'];
                    $Cidade=$_POST['Cidade'];
                    $destino=$_POST['Destino'];
                    echo($query2);
                   // echo("iduser".$idUser."cidade".$Cidade."destino".$destino."HI".$dateFormated_HI."HF".$dateFormated_HF);
                    //$dateFormated_HI; $dateFormated_HF
                    // Executa a consulta com os valores passados como parâmetros
                    $stmt2->execute([$idUser, $destino,$Cidade,$dateFormated_HI,$dateFormated_HF,"em andamento",$placa_escolhida]);
                    echo( '<div class="alert alert-success" role="alert">
                      carro '.$placa_escolhida.' disponivel  !
                    </div>');
                    // Obtém a linha do registro
                    
                }catch (PDOException $erroInsert) {
                    // Captura exceções de PDO e exibe a mensagem de erro
                    echo 'Erro de Inserir: ' . $erroInsert->getMessage();
                }
            }else{ 
                echo( '<div class="alert alert-danger" role="alert">
                Nao foi possivel cadastrar pois ja tem uma reserva cadastrada entre este periodo
                </div>');
                
            }
          
           //echo("flag".$flagReserva);
        
    } else {
        // Campos de nome de usuário e senha não foram enviados
        echo "Por favor, insira o nome de usuário e senha.";
    }

        //fecha verifica post
}//fecha post
?>

