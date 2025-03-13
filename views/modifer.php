<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="assets/css/modifier.css">
</head>
<body>
    <header>
        <?php  require "Nav-bar.php" ?>
    </header>

    <main>
        <div class="title">
            <h1 class="sub-title">Modifier vos livres</h1>
        </div>
        <div class="group">
            <h1>Formulaire de modif</h1>
            <form action="index.php?Action=ModifierLivre&id=<?= $book['id']?>" method="POST">
                <div class="gp name">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="gp author">
                    <label for="author">Author :</label>
                    <input type="text" id="author" name="author" required>
                </div>

                <div class="gp year">
                    <label for="year">Year :</label>
                    <input type="number" id="year" name="year" required>
                </div>


                <div class="gp summary">
                    <label for="summary">Summary :</label>
                    <input type="text" id="summary" name="summary" required>
                </div>

                <button type="submit">Ajouter</button>
            </form>
        </div>
    </main>

</body>
</html>