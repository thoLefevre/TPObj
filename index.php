<?php include("ClasseUser.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php  
      
    try {
          
        $bdd = new PDO('mysql:host=192.168.65.47;dbname=User', 'UserWEB', 'UserWEB');
        $req = "SELECT * from User";
        $reponses = $bdd->query($req); 

      } catch (Exception $e) {
          echo 'Exception reçue : ',  $e->getMessage(), "\n";
      }
      

    if(isset($_POST["Connexion"])){
        if($_POST["user_password"]=="root" && $_POST["user_name"]=="root" ){
            //si identifié alors session true
            $_SESSION["EtatConnexion"]=true ;
                echo "Vous étes connecter";
        }else{
            if($_POST["user_password"]!="root"){
                echo "Ce n'est pas le bon mdp";
            }
            if($_POST["user_name"]!="root"){
                echo "Ce n'est pas le bon nom";
            }
        }
    }
?>
    <form action="" method="post" >
        <div>
            <label for="name">Name</label>
            <input type="text" name="user_name" id="name" required>
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="text" name="user_password" id="Password" required>
        </div>
        <div>
            <input type="submit" value="Connexion" name="Connexion">
        </div>
    </form>
</body>
</html>