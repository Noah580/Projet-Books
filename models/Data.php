<?php
require "BddConnexion.php";

// Récupère tous les livres de la base de données
function GetBooks()
{
    $db = ConnectDB();
    $sql = "SELECT * FROM books";
    $statement = $db->prepare($sql);
    if ($statement->execute()) {
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Ajoute un nouveau livre dans la base de données
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

// Supprime un livre de la base de données par son ID
function deletes($book_id){

    try {
        $db = ConnectDB();
        $sql = "DELETE FROM books WHERE id = :id_book";
    
        $statement = $db->prepare($sql);
        
        $statement->bindParam(':id_book', $book_id, PDO::PARAM_STR);
        if ($statement->execute()) {
            header("Location: index.php?Page=books");
            exit();
        } else {
            echo " Livre introuvable❌";
        }
    } catch (PDOException $e) {
       echo "SQL error" . $e->getMessage();
    }
}