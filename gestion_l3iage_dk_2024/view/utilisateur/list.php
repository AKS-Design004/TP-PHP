<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        a.button {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        a.button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007BFF;
            font-size: 14px;
            transition: color 0.3s;
        }

        .actions a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Liste des Utilisateurs</h2>
    <a href="?controller=utilisateur&&action=add" class="button">Ajouter un Utilisateur</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Mot de passe</th>
            <th>Actions</th>
        </tr>
        <?php while($u = pg_fetch_assoc($utilisateurs)) { ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['nom'] ?></td>
                <td><?= $u['prenom'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['mdp'] ?></td>
                <td class="actions">
                    <a href="?controller=utilisateur&&action=delete&id=<?= $u['id'] ?>">Supprimer</a>
                    <a href="?controller=utilisateur&&action=edit&id=<?= $u['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
