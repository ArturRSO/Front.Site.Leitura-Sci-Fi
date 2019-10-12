<?php
require ("db.php");

//coletar dados
$email = $_POST['inputEmail'];
$senha = md5($_POST['inputSenha']);
$nome = $_POST['inputNome'];
$cpf = $_POST['inputCPF'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


$sql = "INSERT INTO usuarios (email, senha, nome, cpf, cep, rua, bairro, cidade, estado) values ('$email', '$senha' , '$nome' , '$cpf', '$cep', '$rua', '$bairro', '$cidade', '$estado')";

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' AND email = '$email'");
$row = mysqli_num_rows($query);

if ($row != 0) {
    echo '<script language="javascript">';
    echo 'alert("Usuario já cadastrado!!")';
    echo '</script>';
} else {

    if ($conn->query($sql) == TRUE) {
        echo("<script language='JavaScript'>
            alert('Cadastrado com sucesso!');
            window.location.href='../index.html';
        </script>");
    } else {
        echo $conn->error;
    }
    $conn->close();
}
?>
