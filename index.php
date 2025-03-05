<?php
    require "controller/controller.php";
    $Page= htmlspecialchars($_GET["Page"]);
    if($Page == "books"){
        Display_books();
    }else if($Page == "home"){
        Display_home();

    }else if($Page == "modifer"){
        Display_Modifer();
    }else if ($Page == "AddBooks"){
        AddBook();
    }
?>