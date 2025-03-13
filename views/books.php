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

        echo "<h2>Liste des livre</h2>";
        foreach ($data as $books) {
        ?>

            <li>
                <p><?= $books['name'] ?></p>
                <form action='index.php?Action=SupprimerLivre' method='POST' style='display:inline;'>
                    <input type='hidden' name='book_id' value='<?= $books['id'] ?>'>
                    <button type='submit' onclick='return confirm("Voulez-vous vraiment supprimer ce livre ?\")'>❌</button>
                </form>
            </li>
        <?php
        }
        ?>

    </main>


    <footer>

    </footer>
</body>

</html>