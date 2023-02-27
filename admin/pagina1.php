<?php
session_start();
if(!isset($_SESSION['loggedIn'])) {
  header("Location: ../index.php");
}  else {
  if($_SESSION['tipo'] == 2) {
    header("Location: ../index.php");
  }
} 
?>
<!DOCTYPE html>
<html lang="pt-br" data-theme="halloween">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página 1</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="navbar bg-base-100">
      <div class="flex-1">
        <a href="#" class="btn btn-ghost normal-case text-xl">Página 1</a>
      </div>
      <div class="flex-none">
        <a href='sair.php' class="btn btn-square btn-ghost">
          Sair 
          <i class="material-icons">
            exit_to_app
          </i>
        </a>
  </div>
    </div>

    <div class="container mx-auto">
      <h2>Esta é a página para usuários do tipo 1</h2>
    </div>
  </body>
</html>
