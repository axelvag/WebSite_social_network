<!doctype html>
<?php 

//require_once 'fonction.php';
?>                                          <!--accès aux fonctions du fichier fonction.php-->

<!--res.php-->
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.1formatik.com/images/favicon/favicon-16x16.png"
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleres.css">
    <title> Reseau social </title>
</head>

<body>

<form name="res" method="post" action="res.php">
<div class="tout">
<div class="menu">   
    <div class="gras">                                                                <!--MENU-->       
    Trier l'affichage
    </div>
    <br/>
    <input type="checkbox" name="caseimage" value="1" checked />Images
    <br/>
    <input type="checkbox" name="casemessage" value="1" checked />Messages
    <br/>
    <input type="radio" name="caseaveccommentaires" value="1" checked />Avec commentaires
    <br/>
    <input type="radio" name="casesanscommentaires" value="2" />Sans commentaires
    <br/>
    Nombre de posts ?
    <select name="menu">
    <option value="v1">1</option>
    <option value="v2">2</option>
    <option value="v3">3</option>
    <option value="v4">4</option>
    <option value="v5">5</option>
    <option value="v6">6</option>
    <option value="v7">7</option>
    <option value="v8">8</option>
    <option value="v9">9</option>
    <option value="v10" SELECTED>10</option>
    </select>
    <br/>
    <input type="submit" name="afficher" value="Afficher" />
</div>

<div class="contenu">                                                             <!--CONTENU-->
    
    <div class="gras">
    Bonjour axelvag
    </div>
    <br/>

    <div class="nouveau_post">                                                    <!--NEW POST-->
        
        <textarea id="1" name="message" placeholder="Quoi de neuf ?"rows="8" cols="80">
        </textarea>
        <br/>
        
        <div>
        <label for="file">Ajouter une image :</label>
        <input type="file" id="file" name="file" multiple>                  <!--FICHIER-->
        </div>
        <input type="submit" name="poster" value="Poster" />

    </div>

    <div class="affiche_post">  
        <div class="presentation">
        <div class="nom">                                                     <!--AFFICHE POST-->
        axelvag
        </div>
        </br>
        2022-04-15 12:17:49
        </br></br>
        Bonjour à tous !
        </br></br>
        <input type="submit" name="aimer" value="Aimer" />
        0
        <input type="submit" name="commenter" value="Commenter" />
        </div>
        </br>
        <textarea id="2" name="commentaire" placeholder="Votre commentaire ?"rows="8" cols="40">
        </textarea>

    </div>

</div>  <!--contenu-->
</div>  <!--tout-->
</form>

</body>

</html>