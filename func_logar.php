<?php
  require_once './lib/conn.php';

  extract($_POST);

  $sqlVerificaUser = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
  $VerificaUser = $conn->prepare($sqlVerificaUser);
  $VerificaUser->bindValue(":email", $email);
  $VerificaUser->bindValue(":senha", sha1($senha));
  $VerificaUser->execute();

  if($VerificaUser->rowCount() === 1) {
    session_start();
    $user = $VerificaUser->fetch(PDO::FETCH_OBJ);
  
    $_SESSION['id_user'] = $user->id_user;
    $_SESSION['nome'] = $user->nome; 
    $_SESSION['tipo'] = $user->tipo;
    $_SESSION['loggedIn'] = true;
    var_dump($_SESSION['tipo']) ;

    if($_SESSION["tipo"] == 1) {
      header("Location: ./admin/pagina1.php");
    } else {
      header("Location: ./admin/pagina2.php");
      
    }
  } else {
      header("Location: ./index.php");
  }
?>