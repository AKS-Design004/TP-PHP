<?php



    $controller = $_GET["controller"];

    if($controller == 'produit'){
        require_once './controller/produitController.php';
    }
    if($controller == 'categorie'){
        require_once './controller/categorieController.php';
    }
    if($controller == 'utilisateur'){
        require_once './controller/utilisateurController.php';
        
    }

    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='add'){
            pageAdd();
        }
        
        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='save'){
            save();
        }
        if($_GET['action']=='edit' && $controller =='categorie'){
            getCategorie();
        }
        if($_GET['action']=='edit' && $controller =='produit'){
            getProduit();
        }
        if($_GET['action']=='edit' && $controller =='utilisateur'){
            getUtilisateur();
        }
        if($_GET['action']=='update'){
            update();
        }
    }else{
        index();
    }
    
 
  
?>