<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Qui Cook ?</title>
    <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
      <div id='connexion'>
        <div id='style_form'>
          <form action="functions.php" method="post" id='form_connexion'>
          <img src="croix.png" alt="croix" onclick="retour()" class="croix" />
            <label for="">SE CONNECTER</label>
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="mdp" placeholder="Mot De Passe">
            <a href="#">Mot de Passe oublié ?</a>
            <input type="button" name="valider" value="SE CONNECTER" class="enregistrer">
          </form>
        </div>
      </div>

      <div id='inscription'>
        <div id='style_form2'>
          <form action="functions.php" method="post" id='form_inscription'>
          <img src="croix.png" alt="croix" onclick="retour()" class="croix" />
            <label for="">S'INSCRIRE</label>
            <input type="text" name="new_name" placeholder="Prénom">
            <input type="text" name="new_email" placeholder="Email">
            <input type="text" name="new_mdp" placeholder="Mot De Passe">
            <input type="submit" name="valider" value="S'INSCRIRE" class="enregistrer">
          </form>
        </div>
      </div>



        <img src="logo2.png" alt="logo" id='logo' />

      <div id="header_top">
        <button type="button" name="connecter" class='btn_id' onclick="connexion()">Se Connecter</button>
        <button type="button" name="inscrire" class='btn_id' onclick="inscription()">S'inscrire</button>
      </div>


      <div id='presentation'>
        <h1>QUI COOK ?</h1>
        <h3>RENDEZ VOUS EN CUISINE INCONNUE</h3>
        <button type="button" id="whatisit">Comment ça marche ?</button>
      </div>

    </header>
  <script type="text/javascript">

      var connect = document.getElementById('connexion');
      var inscript = document.getElementById('inscription');

    function connexion(){
      connect.style.display = 'inline';
    }
    function inscription(){
      inscript.style.display = 'inline';
    }
    function retour(){
      connect.style.display = 'none';
      inscript.style.display = 'none';
    }


  </script>
  </body>

</html>
