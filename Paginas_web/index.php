<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
  <main>
  <!--Database connection-->
  <div class="container">
            <?php
                include("config.php");

                switch (@$_REQUEST["page"]) {
	            case 'login':
		            include("login.php");
		            break;
	
	            case 'update':
		            include("update.php");
		            break;

                default:
                }
            ?>
       
  </div>

  <h1>Alfama Web</h1>

  <!-- Info Button-->
  <button type="button" class="btn btn-link">Saiba Mais</button>

  <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="img\banner-inicial-aw_mobile.png" class="d-block mx-lg-auto img-fluid" alt="banner-inicial-aw_mobile" width="700" height="500" loading="lazy">
              </div>

              <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><b>Criar Conta</b></h2>

                <!-- Google Button-->
                <script src="https://accounts.google.com/gsi/client" async></script>
                <div id="g_id_onload"
                    data-client_id="YOUR_GOOGLE_CLIENT_ID"
                    data-login_uri="https://your.domain/your_login_endpoint"
                    data-auto_prompt="false">
                </div>
                <div class="g_id_signin"
                    data-type="standard"
                    data-size="large"
                    data-theme="outline"
                    data-text="sign_in_with"
                    data-shape="rectangular"
                    data-logo_alignment="center">
                </div>

                <!--Input Name-->
                <label> <b>Nome completo</b> </label>
                <div class="input-group mb-3">
                    <span class="input-group-text"</span>
                    <input type="text" class="form-control" placeholder="Digite seu nome completo:" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <!--Input Email-->
                <label> <b>Email</b> </label>
                <div class="input-group mb-3">
                    <span class="input-group-text"</span>
                    <input type="text" class="form-control" placeholder="Digite seu email:" aria-label="Email" aria-describedby="basic-addon1">
                </div>

                <!--Input Password-->
                <label> <b>Senha</b> </label>
                <div class="input-group mb-3">
                    <span class="input-group-text"</span>
                    <input type="text" class="form-control" placeholder="Crie sua senha:" aria-label="Password" aria-describedby="basic-addon1">
                    <p> Inserir mais de 8 caracteres </p>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" href="update.php">Criar conta</button>
                  <br>
                  <p>Já tem uma conta?</p> <button type="button" class="btn btn-link" href="login.php" >Faça login</button>
                </div>
              </div>
            </div>
  </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>