<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Produit</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.8em;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group select:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 6px rgba(74, 144, 226, 0.4);
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            background-color: #4a90e2;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background-color: #357abd;
        }

        button[type="submit"]:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Modifier un Produit</h2>
        <form action="?controller=produit&&action=update" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($produit['id']) ?>">

            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input type="text" name="libelle" id="libelle" value="<?= htmlspecialchars($produit['libelle']) ?>" placeholder="Entrez le libellé">
            </div>

            <div class="form-group">
                <label for="quantite">Quantité</label>
                <input type="text" name="quantite" id="quantite" value="<?= htmlspecialchars($produit['qt']) ?>" placeholder="Entrez la quantité">
            </div>

            <div class="form-group">
                <label for="prix">Prix Unitaire</label>
                <input type="text" name="prix" id="prix" value="<?= htmlspecialchars($produit['pu']) ?>" placeholder="Entrez le prix unitaire">
            </div>

            <div class="form-group">
                <label for="categorie" class="form-label">Catégorie</label>
                <select name="idcat" id="categorie">
                    <?php while ($c = pg_fetch_assoc($categories)) { ?>
                        <option value="<?= $c['id'] ?>" <?= $produit['idcat'] == $c['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($c['libelle']) ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>
