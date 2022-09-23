<?php

//Reacarrega a página a cada 15 segundos
header("Refresh:15");

//Requer a consexão com o banco
require_once("db_classes.php");

$numeroRetorno = 0;
$v_email = "informatica@camaraviamao.rs.gov.br";

$sql = "SELECT * FROM email WHERE status = '1' limit 2";
$objDb = new db();
$link = $objDb->conecta_mysql();
$q_email = mysqli_query($link, $sql); //2

$ponto = $q_email->num_rows;

if($ponto>0){  
       
    while($linha = mysqli_fetch_assoc($q_email)){
        
        echo( '<tr>'.
            '<th scope="row">' . $linha['email'] . ',</th>'.'</tr>');
            
           @ $v_email = $linha['email'];

           require_once("mail.php");
             enviarEmail("Câmara Viamão Devolução Taxa","teste",$v_email);
    }
    
    //echo("<br/>Foi encontrado: ". $numeroRetorno ." resultado para o termo <strong>".$valorPesquisa."</strong>"."\n");
    echo "<br>v_email: ".$v_email;

    $destinatario = explode("," ,$v_email);
    
    echo "<br>".$destinatario[0];

/**
 * Vai dispara e-mail
 */

 //Mudar o status
 
 if($ponto>0){  
    $q_email = mysqli_query($link, $sql);
    while($linha2 = mysqli_fetch_assoc($q_email)){
        //echo $linha['id_email'];
        
        $update = "UPDATE email SET status = '2' WHERE id_email = ".$linha2['id_email'] ;
        echo "<br/> Foi enviado  com sucesso para o" .$linha2['id_email'];
        
        $q_email2 = mysqli_query($link, $update);
            
    }
        
} else{
    echo "Echo não tem email para enviar";
}

}else{
    echo "Não possui mais e-mail no bd para ser enviado";
}
