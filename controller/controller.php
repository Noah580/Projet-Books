<?php
require "models/Data.php";
    function Display_books(){
        require_once "views/books.php";
    }

    function Display_home(){
        require_once "views/home.php";
    }

    function Display_404(){
        require_once "views/404.php";
    }

    function Display_Modifer(){
        require_once "views/modifer.php";
    }

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

    function DeleteBooks(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["book_id"])){
                $book_id = htmlspecialchars($_POST['book_id']);
                deletes($book_id);
            }
        }
    }
?>