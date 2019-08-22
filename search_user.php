<?php
require_once 'layout/header.php';
require_once 'data/user/list_user.php';

if (empty($_POST)){
     exit ("Merci de remplir le formulaire de contact") ;
    header('location: index.php');
   die();
}

//Demander à Lucas si cela peut marcher.
//Si l'utilisateur' n'existe pas, on redirige vers la page d'accueil
// if (!array_key_exists('email', $_POST)) {
//     header('Location : index.php');
//     die;
// }
  
$email = $_POST['email'];
// Extraction des valeurs d'ids depuis le tableau $produits
// cette fonction va nous produire un tableau unidimensionnel
//content uniquement les ids des produits
// avec les memes positions d'index
$email_values = array_column($utilisateurs, 'email');
// on peut donc chercher l'index correspondant à l'id récupéré depuis l'url
$key = array_search($email, $email_values);
if ($key === false) {
    exit('This user does not exist');
}
// on va donc récupérer le mail correspondant à l'index
$user = $utilisateurs[$key];

//    foreach ($utilisateur as $user){
//     require_once 'search_result.php';
//    if ($email == $user['email']){
//        echo"dfdf";
//        break;
//    }
// }
// if(!$email){
//     exit("this user does not exists");
// }
require_once 'search_result.php';
require_once 'layout/footer.php';