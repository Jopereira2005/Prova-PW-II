<!DOCTYPE html>
<html lang="pt-br" data-theme="synthwave">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="navbar bg-base-100">
      <a href="#" class="btn btn-ghost normal-case text-xl"
        >Login</a
      >
    </div>

    <div class="container mx-auto">
      <form action="func_logar.php" method='POST'>
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

          <button
            type="submit"
            class="btn btn-outline btn-primary glass"
          >
            Logar
          </button>
          <button
            type="reset"
            class="btn btn-outline btn-secondary glass"
          >
            Limpar
          </button>
        </form>
        <p class='mt-3 '>Não tem uma conta? <a class='link link-primary' href='cadastro.php'>clique aqui</a></p>
    </div>
      
    </div>
  </body>
</html>
