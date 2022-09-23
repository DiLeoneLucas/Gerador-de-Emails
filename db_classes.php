<?php

class db{

    //host
    private $host = 'localhost';

    //usuario
    private $user = 'root'; //Pode se usar um usuário com permissões especificas

    //senha
    private $psw = ''; //Coloque a senha do seu banco caso tenha

    //banco
    private $database = '/*Utilize o nome do seu banco*/';

    public function conecta_mysql()    {

        $connect = mysqli_connect($this->host, $this->user, $this->psw, $this->database);

        mysqli_set_charset($connect, 'utf8');

        if (mysqli_connect_errno()) {
            echo 'Erro: ' . mysqli_connect_errno();
        }

        return $connect;
    }
}
?>
