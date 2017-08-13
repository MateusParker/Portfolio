<!DOCTYPE html>
<html lang="pt-br"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="description" content="Criação de sites, sistemas, aplicativos, lojas virtuais." />
    <meta name="keywords" content="Criação, sites, aplicativos, sistemas, lojas virtuais" />
    <meta name="author" content="Mateus Parker" />
    <link rel="icon" type="image/png" href="image/logo_icon.png" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Mateus Parker - Portfolio</title>    
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div id="todo">

<div id="header">
<div class="container"> 
  <div class="row">    
    <div class="menu_area">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>           
            <a class="navbar-brand" href="#"><img src="image/logo.png"  alt="logo" class="img-responsive logo"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a> </li>
              <li><a href="#works">Works</a> </li>               
              <li><a href="#contact">Contact</a></li> 
              <li><a data-toggle="modal" data-target="#login-modal" class="busi-btn-buttom"><img src="image/login.png" class="login"></a></li>                           
            </ul>           
          </div>
        </div>     
      </nav>  
    </div>
</div> 
</div>
</div>
 <div id="banner">  
    <div class="container">
         <div class="row">
            <div class="col-lg-12">               
              <h1>Bem Vindo ao Meu Portfolio</h1>
              <p><a href="#contact">Solicite seu Orçamento</a></p>                
            </div>
          </div>
      </div>
</div> 
<div id="about" class="layout">
  <div class="container"> 
    <div class="row">
     <div class="col-lg-12">
        <div class="col-lg-4">
          <div id="about-imagem"><img src="image/perfil.png" alt="Mateus Parker"></div>
        </div>
        <div class="col-lg-6">
        <h1>About Me</h1>
        <p>But I must explain to you how all 
          this mistaken idea of denouncing pleasure
           and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer 
           of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because
            it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that 
            are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
             because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. 
        </p>
        </div>                  
    </div>
  </div>
</div>
</div>
<div id="services" class="layout">
  <div class="container"> 
    <div class="row">
     <div class="col-lg-12">
       <h1>Meus Serviçoss</h1>
        <div class="col-lg-4">
          <img src="image/desenvolvimentoweb.png" alt="">
        </div>
        <div class="col-lg-4">
          <img src="image/design.png" alt="">
        </div>
        <div class="col-lg-4">
          <img src="image/marketing.png" alt="">
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="works" class="layout">
    <div class="container"> 
      <div class="row">
       <div class="col-lg-12">
         <h1>Alguns de meus projetos</h1>
          <div class="col-lg-4">
           <a class="example-image-link" href="Design/Site_Denis.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="Design_Icones/Site_Denis.png" alt=""/></a>
          </div>
        </div>
    </div>
  </div>                                              
</div>

<div id="contact" class="layout">
<div class="container"> 
  <div class="row">
  <div class="col-lg-12">
    <div class="col-lg-6">
       <h1>Entre em contato comigo</h1>
      <div class="form-area"> 
            <form role="form" method="post" action="services/contato.php">
              <br style="clear:both">               
               <div class="form-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite Seu Nome:" required>
                </div>                   
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu E-mail:" required>
                </div>                   
                <div class="form-group">
                    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite seu Assunto:" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="mensagem" name = "mensagem"
                    placeholder="Digite sua Mensagem:" maxlength="100000"></textarea>                     
                </div>     
                 <button type="submit" name="submit" class="btn btn-primary pull-right">Enviar Mensagem</button>                          
             </form>
          </div>
      </div>
      <div class="col-lg-6" id="redes">       
           <div class="col-lg-1">
            <a href="https://www.facebook.com/mateusparker" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i></a>
           </div>           
           <div class="col-lg-1">
            <a href="https://github.com/MateusParker" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
           </div>           
           <div class="col-lg-1">
            <a href="https://www.instagram.com/mateusparker1986" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
           </div>
            <div class="col-lg-1">
            <a href="https://br.linkedin.com/in/mateusparker" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
           </div>        
           <div id="contact_description">
             <p><i class="fa fa-envelope" aria-hidden="true"><span>mateusparker@outlook.com.br</span></i></p> 
             <p><i class="fa fa-phone" aria-hidden="true"><span>(053) 984011451</span>  </i> </p>   
           </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
 style="display: none;">
  <div class="modal-dialog">
      <div class="loginmodal-container">
          <h1>Acesso Restrito</h1><br>
          <form action="login.php" method="post">
          <input type="text" name="usuario" placeholder="Usuário" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <input type="submit" name="" class="login loginmodal-submit" value="Acessar Ao Sistema">
          </form>
      </div>
  </div>
</div>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
