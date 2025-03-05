<?php
require "BddConnexion.php";


function GetBooks()
{
    $db = ConnectDB();
    $sql = "SELECT * FROM books";
    $statement = $db->prepare($sql);
    if ($statement->execute()) {
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

function AddBooks()
{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST["name"]);
        $author = isset($_POST["author"]);
        $year = isset($_POST["year"]);
        $summary = isset($_POST["summary"]);
    }

    try {

        $db = ConnectDB();
        $sql = "INSERT INTO books (name, author, year, summary) Values (:name, :author, :year, :summary)";
        $statement = $db->prepare($sql);


        $statement->bindParam(':name', $name);
        $statement->bindParam(':author', $author);
        $statement->bindParam(':year', $year, PDO::PARAM_INT);
        $statement->bindParam(':summary', $summary);

        if ($statement->execute()) {
            header("Location: books.php");
            exit();
        } else {
            echo " ❌Pas d'ajout de livre";
        }
    } catch (PDOException $e) {
        echo "SQL error" . $e->getMessage();
    }
}
