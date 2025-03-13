<?php
require "models/Data.php";

    // Charge la vue books.php
    function Display_books(){
        require_once "views/books.php";
    }

    // Charge la vue home.php

    function Display_home(){
        require_once "views/home.php";
    }

    // Charge la vue 404.php

    function Display_404(){
        require_once "views/404.php";
    }

    // Charge la vue modifier.php

    function Display_Modifer(){
        require_once "views/modifer.php";
    }

    // Gère l'ajout d'un nouveau livre
    function AddBook(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $author = isset($_POST['author']) ? $_POST['author'] : null;
            $year = isset($_POST['year']) ? $_POST['year'] : null;
            $summary = isset($_POST['summary']) ? $_POST['summary'] : null;
            AddBooks($name, $author, $year, $summary);
        }

        require_once "views/addBooks.php";
    }

    // Gère la suppression d'un livre
    function DeleteBooks(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["book_id"])){
                $book_id = htmlspecialchars($_POST['book_id']);
                deletes($book_id);
            }
        }
    }
?>