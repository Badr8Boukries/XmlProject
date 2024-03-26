<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si le formulaire a été soumis depuis la page de login
    $nom = $_POST['nom'];
    $code_appogee = $_POST['code_appogee'];

    // Vérification du nom et du code d'appogee dans la base de données XML
    $xml = simplexml_load_file('doctorants.xml');
    $found = false;

    foreach ($xml->children() as $doctorant) {
        if ($doctorant->nom == $nom && $doctorant->code_appogee == $code_appogee) {
            $found = true;
            break;
        }
    }

    if ($found) {
        // Les informations de login sont valides, rediriger vers le formulaire de soumission
        header("Location: formulaire.php");
        exit();
    } else {
        // Les informations de login sont invalides, afficher un message d'erreur
        $error_message = "Nom ou code d'appogee incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="code_appogee">Code Appogée :</label>
        <input type="password" id="code_appogee" name="code_appogee" required><br>

        <input type="submit" value="Se connecter">
    </form>
    <?php if (isset($error_message)) { ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php } ?>
</div>
</body>
</html>
