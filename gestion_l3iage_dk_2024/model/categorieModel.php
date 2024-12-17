<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM categorie";
    return pg_query($connexion,$sql);
}

function delete($id) {
    global $connexion;

    $checkSql = "SELECT COUNT(*) AS product_count FROM produit WHERE idcat = $id";
    $result = pg_query($connexion, $checkSql);
    $data = pg_fetch_assoc($result);

    if ($data['product_count'] > 0) {
        // Si la catégorie est associée à un ou plusieurs produits, ne pas la supprimer
        return false;
    }

    // Si aucune association, supprimer la catégorie
    $sql = "DELETE FROM categorie WHERE id = $id";
    return pg_query($connexion, $sql);
}

function add($libelle){
    global $connexion;
    $sql ="INSERT INTO categorie (libelle) values
     ('$libelle')";
   return pg_query($connexion,$sql);
}

function updateCategorie($id,$libelle){
    global $connexion;
    $sql ="UPDATE categorie SET libelle='$libelle' where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM categorie where id = $id";
    return pg_query($connexion,$sql);
}



?>


