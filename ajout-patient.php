<?php 

    // <!-- ---------- BALISE PHP POUR LIER AVEC BASE DE DONNEE ------------- -->

    define('DB_HOST', 'localhost');
    define('DB_PORT', '3306');
    define('DB_DATABASE', 'ex_form_php_bdd');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');

    $database = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    Nom : <input type="text" name="lastname"> <br>
    Prenom : <input type="text" name="firstname"> <br>
    Date de naissance : <input type="number" name="birthdate"> <br>
    Tel : <input type="number" name="phone"> <br>
    Mail : <input type="email" name="mail"> <br>
    <input type="submit" name="submit">

</form>

<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    // if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['pseudo']) || empty($_POST['email']) || empty($_POST['password'])){
    //     echo "Veuillez remplir les champs obligatoires";
    // }
    // else {
    //     echo "Merci d'avoir rempli tous les champs";
    // }


    // function addrE($str){
    //     $str == $pattern ='/^([a-zA-Z]|[0-9]|[\-\.\_])+@([a-zA-Z]|[0-9]|[\-\.\_])+\.[a-z]/';
    //     return preg_match($pattern, $str);
    // }
    // //echo addrE($_POST['email']);
    // $email = addrE($_POST['email']);


    // function verifDa($str){
    //     $str == $pattern =  '/\d{2}[\/,.\-]\d{2}[\/,.\-]\d{4}$/';
    //     // '/\d{2}[\/,.\-]\d{2}[\/,.\-]\d{4}$/'   --> optimisé
    //     // '^(0?[1-9]|[10-31])\/ (0?[1-9]|[10-12])\/ [0-9]{4}'/    ---> optimisée ++ --> le 0 avant les crochets précise que dans le cas ou un utilisateur rentre une date avec qu'un seul chiffre avant : il sera rajouté
    //     return preg_match($pattern, $str);
    // }
    // $birthDate = verifDa($_POST['birthDate']);
    // //echo verifDa($_POST['birthDate']);


    // function verifCP($str){
    //     $str == $pattern = '/\d{4}/';  // ou \d
    //     return preg_match($pattern, $str);
    // }
    // $codePostal = verifCP($_POST['postCode']);

 

    function test_input($data){
        $data = trim($data, "\s");
        $data = stripslashes($data);
        
        if(empty($_POST['firstName']) || empty($_POST['lastName']) ||empty($_POST['pseudo']) ||empty($_POST['email']) ||empty($_POST['birthDate'])){
            echo "Veuillez saisir une donnée";
        }
        else{
            echo "Merci d'avoir rempli tous les champs";
        }
        return $data;
    }

    //echo verifCP($_POST['postCode']);


    $query = 'INSERT INTO client (nom, prenom, pseudo, email, date_naissance, code_postal, mdp) VALUES (?, ?, ?, ?, ?, ?, ?);';
    $sql = $database -> prepare($query);
    $sql-> execute(array($_POST['firstName'], $_POST['lastName'], $_POST['pseudo'], $email, $_POST['birthDate'], $_POST['postCode'], $_POST['password']));


}

 
</body>
</html>