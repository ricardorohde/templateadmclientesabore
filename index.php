 <?php require_once('pages/controller/login_controller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>  
  <script src="js/ie8-responsive-file-warning.js"></script>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">

        <section class="login_content">
          
          <form method="post" id="formLogin">
            <h1>Login do admin</h1>
            <?php 
            if($error)
            {
              echo '<div class="alert alert-danger">
               Dados incorretos, Tente novamente.
            </div>';            
            }

            ?>
            <div>
              <input type="text" class="form-control" placeholder="Usuário" required name="usuario" id="usuario" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Senha" required name="senha" id="senha" />
            </div>
            <div>
            <input type="submit" class="btn btn-default submit" name="submit" value="Entrar" />
              <a class="reset_pass" href="#toregister">Esqueceu sua senha ?</a>
            </div>
         
            <div class="clearfix"></div>
            <div class="separator">
          </form>

              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> <div class="">
        </div> <span>Administração</span></h1>

                <p>©Adm Site, aqui você pode editar todos os fatores do site de seu empreendimento</p>
              </div>
            </div>
          </form>
        </section>
      </div>
      <div id="register" class="animate form"> 
        <section class="login_content">
          <form>
            <h1>Recupere sua conta</h1>
            <div>
              <input type="text" class="form-control" placeholder="Informe seu email" required="" />
            </div>
               <p>Informe seu email, e enviaremos sua nova senha !</p>
            <div>
              <a class="btn btn-default submit" href="#">Enviar</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Caiu aqui sem querer?
                <a href="#tologin" class="to_register">Clique para logar </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i>

               
              </div>
            </div>
          
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>

