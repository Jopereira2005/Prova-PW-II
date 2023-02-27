<?php
  require_once 'lib/conn.php';

  $sqlVerificarUsuario = "SELECT * FROM tbl_users WHERE email = :email";
  $verificarUsuario = $conn->prepare($sqlVerificarUsuario);
  $verificarUsuario->bindValue(':email',$_POST['email']);
  $verificarUsuario->execute();
  if($verificarUsuario->rowCount() === 0){
    extract($_POST);
    $sqlInsert = "INSERT INTO usuarios VALUES(0,:email,:senha,:nome,:tipo)";
    $inserirUsuario = $conn->prepare($sqlInsert);
    $inserirUsuario->bindValue(':email',$email);
    $inserirUsuario->bindValue(':senha',sha1($senha));
    $inserirUsuario->bindValue(':nome',$nome);
    $inserirUsuario->bindValue(':tipo',$tipo);
    $inserirUsuario->execute();
  ?>
    <script>alert('Usuário cadastrado com sucesso!')</script>
  <?php
  } else{
  ?>
    <script>alert('Usuário com e-mail já existente!')</script>
  <?php
  }
?>
<meta http-equiv="refresh" content="0; url=index.php">