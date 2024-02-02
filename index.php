<html>
    <head>
        <meta charset="utf-8">
        <title>Institut Superieur de technologie D'Antsiranana</title>
        <link rel="stylesheet" href="./Model/style.css">
        <link rel="stylesheet" href="./Assert/toastr/toastr.min.css">
        <link rel="stylesheet" href="./Assert/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <nav class="nav" role="navigation">
                <h2 class="m-left">INSTITUT SUPERIEUR DE TECHNOLOGIE D'ANTSIRANANA</h2>
                <div>
                    <a href="./Model/inscription.php" class="btn_inscrire" style="margin-top:60px; margin-left:100px;" id="btn_inscrire">S'inscrire</a>
                </div>
            </nav>
        </header>
        <div class="row col-md-4 card" style="background-color:transparent; margin:50px; float:right;">
            
                <legend class="admin">Administration</legend><br>
                <img src="./image/ist-d.png" width="100px;" height="100px;" alt="" class="logo-ist"><br><br>
                <form method="post" action="#" class="form-group">
                    
                    <label for="text">Adresse email</label>
                    <input type="mail" name="mail" class="mail form-control"><br><br>
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" class="mdp form-control" value=""><br><br>
                    <input type="submit" name="conx" id="con-button" class="con-button " value="Connexion">

                </form>

                
            
        </div>
    </body>
    
    <footer>

    </footer>
</html>
<script src="./Assert/jquery/jquery.min.js"></script>
<script src=" ./Assert/toastr/toastr.min.js"></script>
<?php
$em = "admin@gmail.com";
$password = "14mi14";



if(isset($_POST["conx"]))
{

    $formemail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    if(($em == $formemail) && ($password == $mdp)){
        header("location:./Model/admin.php");
    }

}