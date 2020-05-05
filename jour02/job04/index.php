<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Job 04</title>
</head>
<body>
    <header>
        <nav class="deep-orange darken-1 nav-wrapper">
          <div class="container">
            <a href="" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="">Accueil</a></li>
                <li><a href="">Inscription</a></li>
                <li><a href="">Connexion</a></li>
                <li><a href="">Rechercher</a></li>
            </ul>
          </div>
        </nav>
    </header>
    <br>

    <section class="container">
    <form action="" class="col s12">
      <div class="row">
      <div class="input-field col s1">
        <label>
          <input class="deep-orange darken-1 with-gap" name="group1" type="radio"  />
          <span>Mme</span>
        </label>
      </div>
      <div class="input-field col s1">
        <label>
          <input class="deep-orange darken-1 with-gap" name="group1" type="radio"  />
          <span>M</span>
        </label>
      </div>
      </div>

      <br>

       <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix"class="active">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name" class="active" >Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">house</i>
          <input type="text" id="icon_prefix2">
          <label for="icon_prefix2" class="active">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input type="email" id="icon_prefix3">
          <label for="icon_prefix3" class="active" >Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">https</i>
          <input type="password" id="icon_prefix4">
          <label for="icon_prefix4" class="active" >Mot de passe</label>
        </div>

        <div class="input-field col s6">
          <input type="password" id="c_password">
          <label for="c_password" class="active" >Confirmer mot de passe</label>
        </div>
      </div>


      <div class="rows">
      <h5>Hobbies</h5>
        <div class="input-field col s1">
          <label>
          <input type="checkbox" class="filled-in"/>
          <span>Informatique</span>
          </label>
        </div><br>
        
        <div class="input-field col s1">
          <label>
          <input type="checkbox" class="filled-in"/>
          <span>Voyages</span>
          </label>
        </div><br>
    
        <div class="input-field col s1">
          <label>
          <input type="checkbox" class="filled-in"/>
          <span>Sport</span>
          </label>
        </div><br>
  
        <div class="input-field col s2">
          <label>
          <input type="checkbox" class="filled-in"/>
          <span>Lecture</span>
          </label>
        </div>
      </div>

      <br>
      <br>
      <br>
      
      <div class="row">
        <div class="input-field col s6">
          <button class="deep-orange darken-1 btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
    </section>

    <br>
   
          <footer class="deep-orange darken-1 page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Container</h5>
                  <p class="grey-text text-lighten-4">Du blabla</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#">Accueil</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Inscription</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Connexion</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Rechercher</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Text
              </div>
            </div>
        </footer>
</body>
</html>