<?php
    require "controller/controller.php";

    if(isset($_GET["Page"])){
        $Page= htmlspecialchars($_GET["Page"]);
    }else{
        $Page = "";
    }
    if($Page == "books"){
        Display_books();
    }else if($Page == "home"){
        Display_home();

    }else if($Page == "modifer"){
        Display_Modifer();
    }else if ($Page == "AddBooks"){
        AddBook();
    }



    if(isset($_GET["Action"])){
        $Action = htmlspecialchars($_GET["Action"]);
    }else{
        $Action = "";
    }
    if($Action == "AjouterLivre"){
        AddBook();
    }

 
    if(isset($_GET["Action"])){
        $Action =htmlspecialchars($_GET["Action"]);
    }else{
        $Action = "";
    }
    if($Action == "SupprimerLivre"){       
        DeleteBooks();
    }
?>