<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM users";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM users WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($nom,$prenom,$email,$mdp){
    global $connexion;
    $sql ="INSERT INTO users (nom,prenom,email,mdp) values
     ('$nom','$prenom','$email','$mdp')";
   return pg_query($connexion,$sql);
}

function updateUtilisateur($id,$nom,$prenom,$email,$mdp){
    global $connexion;
    $sql ="UPDATE users SET nom = '$nom',prenom = '$prenom',email = '$email',mdp = '$mdp'
    WHERE id = $id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM users WHERE id = $id";
    return pg_query($connexion,$sql);
}



?>


