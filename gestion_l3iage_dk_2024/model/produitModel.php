<?php
require_once('./model/db.php');

function getAllP(){
    global $connexion;
    $sql ="SELECT * FROM produit";
    return pg_query($connexion,$sql);
}

function deleteP($id){
    global $connexion;
    $sql ="DELETE FROM produit WHERE id =$id";
   return pg_query($connexion,$sql);
}

function addP($libelle,$quantite,$prix,$idcat){
    global $connexion;
    $sql ="INSERT INTO produit (libelle,qt,pu,idcat) values
     ('$libelle',$quantite,$prix,$idcat)";
   return pg_query($connexion,$sql);
}

function updateProduit($id,$libelle,$quantite,$prix,$idcat){
    global $connexion;
    $query = "UPDATE produit 
              SET libelle = $1, qt = $2, pu = $3, idcat = $4
              WHERE id = $5";
              $result = pg_query_params($connexion, $query, array($libelle, $quantite, $prix, $idcat, $id));
              if ($result) {
                  return true;
              } else {
                  return false;
              }
}

function getProduitById($id){
    global $connexion;
    $sql ="SELECT * FROM produit WHERE id = $id";
    return pg_query($connexion,$sql);
}



?>


