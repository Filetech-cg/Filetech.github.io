<?php 
   require('actions/users/loginAction.php'); 

?>
<?php 
   require('actions/users/signupAction.php'); 

?>
<!DOCTYPE html>
<html lang="fr">
  
<!-- Mirrored from brazzinf.netlify.app/page/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 09:24:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style/formulaire.css" />
    
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
       
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
        ></script>
        
    <title>FILETECH | Formulaire</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  method="POST" class="sign-in-form">
            <center><small><span id="error" style="color: red"></span></small></center>
            <h2 class="title">Connexion</h2>
            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text"  name="log" class="email-inscription" required placeholder="Login" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="mdp" class="mot-depasse" type="password" required placeholder="Mot de passe" />
            </div>
             <button name="validate" type="submit" class="btn solid">
              Connexion</button>
            
          </form>



         


          <form method="POST" class="sign-up-form form-inscription">
            <center><small><span id="errore" style="color: red"></span></small></center>
            <h2 class="title">Inscription</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text"  name="log"  required placeholder="Login" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email"  name="email" required placeholder="L'adresse mail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="mdp" class="mot-depasse" type="password" required placeholder="Mot de passe" />
            </div>
            <button name="validates" type="submit" class="btn solid">
              S'inscrire</button>

              <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Inscrits-toi à notre plateforme</h3>
            <p>
              Pous profiter de nos services !
            </p>
            <button name="validates" class="btn transparent" id="sign-up-btn">
              S'inscrire
            </button> 
          </div>
         <a href="index.php"> <img src="img/ft.PNG" class="image" alt="" /> </a>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Tu as un compte ?</h3>
            <p>
              Connectes toi pour accéder à nos services
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Connexion
            </button>
          </div>
         <a href="index.php"> <img src="img/ft.PNG" class="image" alt="" /> </a>
        </div>
      </div>
    </div>


   

   
     <script src="js/index.js"></script>
     <script src="js/formulqire.js"></script>

  </body>

<!-- Mirrored from brazzinf.netlify.app/page/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 09:24:23 GMT -->
</html>
