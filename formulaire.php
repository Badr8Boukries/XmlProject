<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de soumission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
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

        select,
        input[type="text"],
        input[type="date"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulaire de soumission</h2>
        <form action="traitement.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance" required><br>

            <label for="cin">CIN :</label>
            <input type="text" id="cin" name="cin" required><br>


            <label for="disciplines">Disciplines :</label>
            <select id="disciplines" name="disciplines" required>
                <option value="">Choisir une discipline</option>
                <option value="Math">Mathématiques</option>
                <option value="info">Informatique</option>
                <option value="bio">Biologie</option>
                <option value="géo">Géographie</option>
                <option value="chimie">Chimie</option>
                <option value="physique">Physique</option>
            </select><br>

            <label for="institution">Institution :</label>
            <select id="institution" name="institution" required>
                <option value="">Choisir une institution</option>
                <option value="A">Institution A</option>
                <option value="B">Institution B</option>
                <option value="C">Institution C</option>
                <option value="D">Institution D</option>
                <option value="E">Institution E</option>
            </select><br>

            <label for="structure">Structure :</label>
            <select id="structure" name="structure" required>
                <option value="">Choisir le type de structure</option>
                <option value="laboratory">Laboratoire</option>
                <option value="group">Groupe</option>
            </select><br>


            <label for="theme">Thème :</label>
            <select id="theme" name="theme" required>
                <option value="">Choisir un thème</option>
                <option value="Genie Logiciel">Genie Logiciel</option>
                <option value="Inteligence Artificiel">Inteligence Artificiel </option>
                <option value="Big Data">Big Data</option>
                <option value="Data Minging">Data Minging</option>
                <option value="Cloud Computing">Cloud Computing</option>
                <option value="Games Devolopment">Games Devolopment</option>
                <option value="mathematiques appliquées">mathematiques appliquées</option>
                <option value="Thème 8">Thème 2</option>
                <option value="Thème ">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <option value="Thème 2">Thème 2</option>
                <!-- Ajoutez les 30 options pour les thèmes ici -->
            </select><br>

            <label for="title">title :</label>
            <input type="text" id="title" name="title" required><br>
            </select><br>

            <label for="keywords">Mots-clés :</label>
            <input type="text" id="keywords" name="keywords" required><br>

            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="mail" required><br>

            <label for="phone">Téléphone :</label>
            <input type="text" id="phone" name="phone" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="abstract">Abstract :</label><br>
            <textarea id="abstract" name="abstract" required></textarea><br>

            <label for="supervisor_name">Superviseur :</label>
            <select id="supervisor_name" name="supervisor_name" required>
                <option value="">Choisir un superviseur</option>
                <option value="superviseur 1">superviseur 1</option>
                <option value="superviseur 2">superviseur 2</option>
                <!-- Ajoutez les options pour les superviseurs ici -->
            </select><br>

            <label for="mails">E-mail du superviseur :</label>
            <input type="email" id="mails" name="mails" required><br>

            <input type="submit" value="Soumettre">
        </form>
    </div>
</body>
</html>
