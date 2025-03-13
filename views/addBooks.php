<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="assets/css/addbooks.css">
</head>

<body>
    <header>
        <?php
        require "Nav-bar.php"
        ?>
    </header>

    <main>
        <div class="title">
            <h1 class="sub-title">Ajouter vos livres</h1>
        </div>
        <div class="group">
            <h1>Formulaire d'ajout</h1>
            <form action="index.php?Action=AjouterLivre" method="POST">
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

    <footer>

    </footer>
</body>

</html>