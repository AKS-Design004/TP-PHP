<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Catégories</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f9fafc;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .add-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #4a90e2;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .add-link:hover {
            background-color: #357abd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        table th {
            background-color: #f4f6f9;
            color: #333;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f5fb;
        }

        .action-links a {
            margin-right: 10px;
            color: #4a90e2;
            text-decoration: none;
            font-weight: bold;
        }

        .action-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestion des Catégories</h1>
        <a class="add-link" href="?controller=categorie&&action=add">Ajouter une Catégorie</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Actions</th>
            </tr>
            <?php while ($c = pg_fetch_assoc($categories)) { ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['libelle'] ?></td>
                    <td class="action-links">
                        <a href="?controller=categorie&&action=delete&&id=<?= $c['id'] ?>">Supprimer</a>
                        <a href="?controller=categorie&&action=edit&&id=<?= $c['id'] ?>">Modifier</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
