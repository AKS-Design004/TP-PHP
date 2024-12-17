<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-group span {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Modifier un Utilisateur</h2>
    <form action="?controller=utilisateur&&action=update" method="POST">
        <input type="text" name="id" value="<?= $utilisateur['id'] ?>" hidden>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $utilisateur['nom'] ?>" placeholder="Entrez votre nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?= $utilisateur['prenom'] ?>" placeholder="Entrez votre prénom">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $utilisateur['email'] ?>" placeholder="Entrez votre email">
        </div>

        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" value="<?= $utilisateur['mdp'] ?>" placeholder="Entrez votre mot de passe">
        </div>

        <button type="submit">Modifier</button>
    </form>
</div>

</body>
</html>
