<?php
    require_once('./model/categorieModel.php');

     function index(){
        $categories = getAll();
        require_once './view/categorie/list.php';
     }

     function remove(){
      $id = $_GET['id'];
      delete($id);
      header('location:index.php?controller=categorie');
      }

      function pageAdd(){
         require_once './view/categorie/add.php';
     }

     function save(){
      $libelle =$_POST['libelle'];
      add($libelle);
      header('location:index.php?controller=categorie');
      }

      function getCategorie(){
         $id = $_GET['id'];
         $categorie = pg_fetch_assoc(getById($id)); 
         require_once './view/categorie/edit.php';
      }

      function update(){
         $id = $_POST['id'];
         $libelle = $_POST['libelle'];
         updateCategorie($id,$libelle);
         header('location:index.php?controller=categorie');
      }

?>
 

