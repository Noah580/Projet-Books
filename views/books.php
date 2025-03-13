<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
    <link rel="stylesheet" href="assets/css/books.css">
</head>

<body>
    <header>
        <?php
        require "Nav-bar.php"
        ?>
    </header>

    <main>
    <?php
    $data = GetBooks();

    if (empty($data)) {
        echo "Aucun livre";
        return;
    }

    echo "<h2>Liste des livres</h2>";
    foreach ($data as $books) {
    ?>
        <li>
            <p>
                <span class="book-title"><?= $books['name'] ?></span>
                <span class="book-author"><?= $books['author'] ?></span>
                <span class="book-year"><?= $books['year'] ?></span>
                <span class="book-summary"><?= $books['summary'] ?></span>
            </p>
            <div class="buttons-container">
                <form action='index.php?Action=SupprimerLivre' method='POST' style='display:inline;'>
                    <input type='hidden' name='book_id' value='<?= $books['id'] ?>'>
                    <button type='submit' onclick='return confirm("Voulez-vous vraiment supprimer ce livre ?")'>❌ Supprimer</button>
                </form>    
                <a href='index.php?Page=modifer'><button>✏️ Modifier</button></a>
            </div>
        </li>
    <?php
    }
    ?>
</main>


    <footer>

    </footer>
</body>

</html>