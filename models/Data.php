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

function AddBooks($name, $author, $year, $summary)
{
    try {
        $db = ConnectDB();
        $sql = "INSERT INTO books (name, author, year, summary) Values (:name, :author, :year, :summary)";
        $statement = $db->prepare($sql);


        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':author', $author, PDO::PARAM_STR);
        $statement->bindParam(':year', $year, PDO::PARAM_INT);
        $statement->bindParam(':summary', $summary, PDO::PARAM_STR);

        if ($statement->execute()) {
            header("Location: index.php?Page=books");
            exit();
        } else {
            echo " ❌Pas d'ajout de livre";
        }
    } catch (PDOException $e) {
        echo "SQL error" . $e->getMessage();
    }
}
