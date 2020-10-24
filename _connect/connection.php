<?php 
require_once __DIR__.'/../functions/functions.php';
if(file_exists(__DIR__.'./config.php')){
    die;
    require_once __DIR__.'./config.php';
}else{
    header("Location: ". base_url('conexao'));
}

//Proteção contra SQLInjection
function DBEscape($dados){
    $conn = DBConnect();
    
    if(!is_array($dados))
        $dados = mysqli_real_escape_string($conn, $dados);
    else{
        $arr = $dados;
        foreach ($arr as $key => $value) {
            $key = mysqli_real_escape_string($conn, $key);
            $value = mysqli_real_escape_string($conn, $value);

            $dados[$key] = $value;
        }
    }

    DBClose($conn);
    return $dados;
}

//Fecha conexão com MySQL
function DBClose($conn){
@mysqli_close($conn) or die(mysqli_error($conn));
}

//Abre conexão com MySQL
function DBConnect(){
    $conn = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
    mysqli_set_charset($conn, DB_CHARSET) or die(mysqli_error($conn));
    
    return $conn;
}