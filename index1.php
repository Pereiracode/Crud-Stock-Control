<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhauser = $_POST['senha'];

$sql = "select email_usuario, senha_usuario from usuarios where email_usuario = '$usuario' and status = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while($array = mysqli_fetch_array($buscar)){
    $senha = $array['senha_usuario'];

    $senhacodificada = sha1($senhauser);

if($total > 0){
    if($senhacodificada == $senha){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: menu.php');
    }
    else{
        header('Location: erro.php');
    }
}
else{ 

    header('Location: erro.php');

}



}
?>