<!DOCTYPE html>
<html lang="pt-br" data-theme="synthwave">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="navbar bg-base-100">
    <a href="#" class="btn btn-ghost normal-case text-xl">Cadastro de usuário</a>
  </div>

  <div class="container mx-auto">
    <a href="index.html" class="btn btn-secondary">Retornar</a>
    <form action="func_cadastrar.php" method='POST'>
      <div class="form-control w-full max-w-xs mb-3">
        <label class="label">
          <span class="label-text">Nome</span>
        </label>
        <input
          type="text"
          id="nome"
          name="nome"
          class="input input-bordered input-primary"
        />
      </div>

      <div class="form-control w-full max-w-xs mb-3">
        <label class="label">
          <span class="label-text">Email</span>
        </label>
        <input
          type="email"
          id="email"
          name="email"
          class="input input-bordered input-primary"
        />
      </div>

        
      <div class="form-control w-full max-w-xs mb-3">
        <label class="label">
          <span class="label-text">Senha</span>
        </label>
        <input
          type="password"
          id="senha"
          name="senha"
          class="input input-bordered input-primary"
        />
      </div>

      <div class="form-control w-full max-w-xs">
        <label class="label">
          <span class="label-text">Tipo</span>
        </label>
        <select class="select select-primary select-bordered mb-4" name="tipo">
          <option disabled selected>Selecione o tipo de usuário</option>
          <option value="1">Usuário tipo 1</option>
          <option value="2">Usuário tipo 2</option>
        </select>
      </div>

      <button type="submit" class="btn btn-outline btn-primary glass">
        Cadastrar
      </button>
      <button type="reset" class="btn btn-outline btn-secondary glass">
        Limpar
      </button>
    </form>
  </div>

  </div>
</body>

</html>