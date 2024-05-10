<?php

// Inicia ou resume a sessão
session_start();
// Verifica se o formulário de login foi enviado
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha foram enviados

        // Recupera as credenciais do formulário
        $idReserva = $_POST['idReserva'];
        $HI_real = $_POST['h_i'];
        $HF_real = $_POST['h_f'];
        $KM_I = $_POST['KM_I'];
        $KM_f = $_POST['KM_F'];
      
        
        // Executa a consulta SQL para verificar as credenciais
        // Substitua 'nome_tabela' pelo nome real da sua tabela
        // $query = "SELECT * FROM Users WHERE NomeUser = '$nomeUsuario' AND Password = '$senha'";
        //pegar os horarios que foram apontados anteriormnete pra fazer a veric
       
        // Execute a consulta no banco de dados
        // Substitua $conn pela sua conexão com o banco de dados
        //variavel do banco 
        $FlagUpdateTIME=false;
        $FlagUpdateKM=false;
        $queryparamTIME="";
            if(($HI_real!="")&&($HF_real!="")){
                
                $queryparamTIME = " horaSaidaReal = ? , horaChegadaReal = ?  ";
                $vetorParam_queryTIME = array($HI_real, $HF_real);
                $FlagUpdateTIME=true;
                //setar nos dois
            }else if($HI_real!=""){
                $queryparamTIME = " horaSaidaReal = ?   ";
                $vetorParam_queryTIME = array($HI_real);
                $FlagUpdateTIME=true;
            }
            
            if(($KM_I!="")&&($KM_f!="")){
                
                $queryparamKM = ", KMInicial = ? , KMFinal = ?  ";
                $vetorParam_queryKM = array($KM_I, $KM_f,$idReserva);
                $FlagUpdateKM=true;
                //setar nos dois
            }else if($KM_I!=""){
                $queryparamKM = ", KMInicial = ?  ";
                $vetorParam_queryKM = array($KM_I,$idReserva);
                $FlagUpdateKM=true;
            }
            
                //setar no HI
    //aqui sobra as posssibilidade de apenas o HI tiver apontamento ou nenhum tiver}
                
        
            
            //posso setar nos dois ou apenas no HI
            if(($FlagUpdateTIME==true)&&($FlagUpdateKM==true)){
        
        // Verifica se a consulta retornou algum resultado
        try {
            $query = "Update Reservas set $queryparamTIME  $queryparamKM  WHERE  idReservas = ?";
            
            // Substitua $pdo pela sua conexão PDO
            // Prepara a consulta
            $stmt = $pdo->prepare($query);
            $VetMerge_timeKM = array_merge($vetorParam_queryTIME, $vetorParam_queryKM);
           
            
            // Executa a consulta com os valores passados como parâmetros
            $stmt->execute($VetMerge_timeKM);
            echo( '<div class="alert alert-success" role="alert">
 Apontamento feito com sucesso !
</div>');
        } catch (PDOException $e) {
            // Captura exceções de PDO e exibe a mensagem de erro
            echo 'Erro atualizaçao: ' . $e->getMessage();
        }
    }else{
        echo( '<div class="alert alert-danger" role="alert">
  Pelo menos um dos campos Hora/KM não esta preenchido,por favor preenche-los !
</div>');
    }
    
}
        