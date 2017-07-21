<!DOCTYPE html>
<html>
    <head>
        <title>Mon site</title>
        <meta charset="UTF-8" />
         <!--[if lt IE 9]>
    <script src="./node_modules/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="./node_modules/font-awesome/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap-social/bootstrap-social.css"/>
<link rel="stylesheet" type="text/css" href="./assets/stylesheets/main.css"/>
<!--<link rel="stylesheet" type="text/css" href="./assets/stylesheets/nav/nav.css"/>
<link rel="stylesheet" type="text/css" href="./assets/stylesheets/reset.css"/>
<link rel="stylesheet" type="text/css" href="./assets/stylesheets/template.css"/>
<link rel="stylesheet" type="text/css" href="./assets/stylesheets/animation/animation.css"/>
<link rel="stylesheet" type="text/css" href="./assets/stylesheets/slider/slider.css"/>-->


    </head>
    <body> 
        <nav>
             <div class="float logo">
            <img src="http://localhost/html/assets/images/images3.jpg"/>
             </div>
            <div class="float link">
            <a href="#about">About</a>
            <a href="#skill">Skill</a>
            <a href="#contact">Contact</a>
            </div>            
        </nav>
        
        <header>
            <h1>
                Mon site            
            </h1>
                
            <p>
                Developpeur informatique
            </p>
                      
            <div>
                <img src="http://localhost/html/assets/images/php.png" alt="" class="php language"/>
            </div> 
            <div>
                <img src="http://localhost/html/assets/images/java.png" alt="" class="java language"/>
            </div>
            <div>
                <img src="http://localhost/html/assets/images/android.png" alt="" class="android language"/>
            </div>
            <div>
                <img src="http://localhost/html/assets/images/js.png" alt="" class="js language"/>
            </div>
            <div>
                <img src="http://localhost/html/assets/images/html.png" alt="" class="html language"/>
            </div>
           

                
                <a>see</a>
            
        
        </header>
        
        <br>
        <br>
        <br>
        <br>
        
        <section>
            <h2>Un gros pavé sur moi...</h2>
        </section>
        
        <section id="about">
            <h2>About</h2>
            
            <ul>
                <li>Nom : </li>
                <li>Prénom : </li>
                <li>tèl : </li>
                <li>Mail : </li>
            </ul>
        </section>
        
        <section id="skill">
            <h2>Skill</h2>
        </section>
        
        <footer id="contact" class="container-fluid">
            <h2>Contact</h2>
            <br>
            <span class="glyphicon glyphicon-home"></span>
            <span class="glyphicon glyphicon-envelope"></span>
            <span class="glyphicon glyphicon-hand-right"></span>
            <br>
            <br>
            <br>
            <div class="row">
               
            <form action="http://localhost/html/traitement.php" 
                  method="POST"
                  class="col-xs-12 col-md-6">
              
        <div class="container" style="max-width:600px;margin:60px auto;">
	   <div class="form-group">
	      <label for="name">Nom</label>
	      <input type="name" class="form-control" id="fname" placeholder="Votre nom">
	   </div>
	   <div class="form-group">
	      <label for="address">Prénom</label>
	      <input type="address" class="form-control" id="sname" placeholder="Votre Prénom">
	   </div>
	   <div class="form-group">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" placeholder="Email">
	   </div>
            <div class="form-group">
            <label for="exampleTextarea">Commentaires</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Register</button>
             <div class="col-xs-12 col-md-6 social-buttons">
              <a class="btn btn-block btn-social btn-github">      
            <span class="fa fa-github"></span> Sign in with GitHub
              </a>
                 <div class="col-xs-12 col-md-6 social-buttons">
              <a class="btn btn-block btn-social btn-twitter">      
            <span class="fa fa-twitter"></span> Sign in with Twitter
              </a>
                    <div class="col-xs-12 col-md-6 social-buttons">
              <a class="btn btn-block btn-social btn-facebook">      
            <span class="fa fa-facebook"></span> Sign in with Facebook
              </a>    
<!--                <input name="firstname" 
                       placeholder="prenom" 
                       pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"/>
                <input name="name" 
                       placeholder="nom" 
                       pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"/>
                <input type="submit"/>-->
                
            </form>
            </div>
        </footer>        
    </body>
</html>
