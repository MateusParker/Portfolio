<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon"  href="img/logo_icon.png" title="Mateus Parker" alt="Mateus Parker">
    <link rel="stylesheet" type="text/css" href="css/style.css">   
    <title>Painel Administrativo</title> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container"> 
  <div class="row" id="menulateral">   
  <div class="col-sm-12">
     <div class="col-sm-3">
      <div id="perfil_foto"><img src="img/logo_icon.png"></div>
      <div id="perfil_titulo"><h1>Administrador</h1></div>
      <div id="perfil_status"><h2>Online</h2></div>
      <nav id="menu">
        <ul>
          <li><a href="index.php">Usuários</a></li>
          <li><a href="admin_about.php">Sobre Mim</a></li>
          <li><a href="admin_works.php">Portfolio</a></li>
        </ul>
      </nav>
    </div>  
    <div class="col-sm-9">
      <div id="perfil_conteudo">
        <div id="tabs" class="tabs">
         <nav>
          <ul>
           <li><a href="#section-1" class="icon-shop"><span>Cadastrar Usuários</span></a></li>
           <li><a href="#section-2" class="icon-cup"><span>Listar Usuários</span></a></li>         
          </ul>
        </nav>
    <div class="content">
      <section id="section-1">
        <div class="mediabox">
          <div class="box box-info"> 
          <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data" id="formulario_admin">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nome:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome_user" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fone_user" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control"  name="imagem_user" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email_user" placeholder="Digite seu Email"required>  
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Usuário:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="username_user" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >Senha:</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control"  name="senha_user" required>
                  </div>
                </div>
              <div class="box-footer">            
                <button type="submit" class="btn btn-info pull-right">Salvar Cadastro</button>
              </div>         
          </form>
        </div>
      </div>
  </section>
  <section id="section-2">
    <div class="mediabox">
      <div class="col-sm-12">
        <table id="listar">
          <tr>
            <td>Usuario</td>
            <td>Editar</td>
            <td>Excluir</td>             
          </tr>
          <tr>
            <td><p></p></td> 
            <td><a href="#"><img src="img/Editar.png"></a></td>
            <td><a href="#"><img src="img/Remover.png"></td>             
          </tr>
        </table>
      </div>        
    </div>
  </section>     
  </div>
  </div>
  </div>
 </div>  
</div>     
</div>        
</div

  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/tabs.js"></script>    
      <script src="http://tympanus.net/Blueprints/FullWidthTabs/js/cbpFWTabs.js"></script>
    <script>
      new CBPFWTabs( document.getElementById( 'tabs' ) );
    </script>

</html>

