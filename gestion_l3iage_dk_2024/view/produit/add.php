<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1><title>Ajouter un Produit</title></h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            outline: none;
            box-sizing: border-box;
        }
        .form-group input[type="text"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 3px rgba(0, 123, 255, 0.3);
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Ajouter un Produit</h2>
        <form action="?controller=produit&&action=save" method="POST">
            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input type="text" name="libelle" id="libelle" placeholder="Saisissez le libellé">
            </div>
            <div class="form-group">
                <label for="quantite">Quantité</label>
                <input type="text" name="quantite" id="quantite" placeholder="Saisissez la quantité">
            </div>
            <div class="form-group">
                <label for="prix">Prix Unitaire</label>
                <input type="text" name="prix" id="prix" placeholder="Saisissez le prix unitaire">
            </div>
            <div class="form-group">
    <label for="categorie" class="form-label">Catégorie</label>
    <select name="idcat" class="form-select">
        <?php while($c = pg_fetch_assoc($categories)) { ?>
            <option value="<?= $c['id'] ?>"><?= $c['libelle'] ?></option>
        <?php } ?>
    </select>
</div>
            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>
