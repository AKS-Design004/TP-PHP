<?php
    require_once('./model/produitModel.php');
    require_once('./model/categorieModel.php');

    function index(){
       $produits = getAllP();
       require_once './view/produit/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        deleteP($id);
        header('location:index.php?controller=produit');
    }

    function pageAdd(){
        $categories = getAll();
        require_once './view/produit/add.php';
    }

    function save(){
        $libelle =$_POST['libelle'];
        $qt = $_POST['quantite'];
        $pu = $_POST['prix'];
        $idcat = $_POST['idcat'];  
        addP($libelle,$qt,$pu,$idcat);
        header('location:index.php?controller=produit');
    }
   
    function getProduit(){
        $id = $_GET['id'];
        $produit = pg_fetch_assoc(getProduitById($id)); 
        $categories = getAll();  
        require_once './view/produit/edit.php';
     }

     function update(){
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $qt = $_POST['quantite'];
        $pu = $_POST['prix'];
        $idcat = $_POST['idcat'];
        updateProduit($id,$libelle,$qt,$pu,$idcat);
        header('location:index.php?controller=produit');
     }


?>