<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Connexion">
  </form>

  <?php

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE', 'ex_form_php_bdd');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$database = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);



if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez les informations de connexion dans la base de données
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
          echo "Bravo vous êtes connectés";
    } else {
        echo 'Nom d\'utilisateur ou mot de passe incorrect';
    }
}

// $database->close();

?>
    
</body>
</html>