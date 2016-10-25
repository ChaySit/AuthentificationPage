<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Inscription/Connexion</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">S'inscrire</a></li>
        <li class="tab"><a href="#login">Se connecter</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Pas encore de compte? Inscrivez-vous gratuitement</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Prénom<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Adresse mail<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de passe <span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Confirmez votre mot de passe <span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Créer mon compte</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Déjà inscrit : connectez vous!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Login<span class="req">*</span>
            </label>
            <input name="uid" type="text"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de passe<span class="req">*</span>
            </label>
            <input name="pwd" type="password"required autocomplete="off"/>
          </div>
          
          <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
          
          <button class="button button-block"/>Connexion</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

    
    
  </body>
</html>
