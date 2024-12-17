<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .add-product {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
        }
        .add-product:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f8f9fa;
            color: #333;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .action-links a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 12px;
            margin-right: 5px;
            color: #fff;
        }
        .action-links .delete {
            background-color: #dc3545;
        }
        .action-links .delete:hover {
            background-color: #a71d2a;
        }
        .action-links .update {
            background-color: #28a745;
        }
        .action-links .update:hover {
            background-color: #19692c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Produits</h1>
        
        <a href="?controller=produit&&action=add" class="add-product">+ Ajouter un produit</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
            <tbody>
                <?php while($p = pg_fetch_assoc($produits)) { ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['libelle'] ?></td>
                        <td><?= $p['qt'] ?></td>
                        <td><?= $p['pu'] ?></td>
                        <td><?= $p['idcat'] ?></td>
                        <td>
                            <a href="?controller=produit&&action=delete&id=<?= $p['id'] ?>" class="btn-actions delete">Supprimer</a>
                            <a href="?controller=produit&&action=edit&id=<?= $p['id'] ?>" class="btn-actions edit">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
