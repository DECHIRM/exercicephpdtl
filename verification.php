
<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
   // connexion à la base de données
   $db_username = 'root';
   $db_password = 'root';
   $db_name     = 'mabase';
   $db_host     = 'localhost';
   $db = mysqli_connect($db_host, $db_username, $db_password ,$db_name);
           
   $username = $_POST['username']; 
   $password = $_POST['password'];
    
   $requete = "SELECT count(*) FROM user where username = '".$username."' and password = '".$password."' ";
   $exec_requete = mysqli_query($db,$requete);
   $reponse      = mysqli_fetch_array($exec_requete);
   $count = $reponse['count(*)'];
   if($count!=0) // nom d'utilisateur et mot de passe correctes
   {
      $_SESSION['username'] = $username;
      header('Location: connecter.php');
   }      
}
?>