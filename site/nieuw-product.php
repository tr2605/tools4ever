<?
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw-Product</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <h2>Maak nieuw product</h2>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-group">
            <label for="naamProduct">Naam Product</label>
            <input type="text" name="naamProduct" id="naamProduct">
        </div>
        <div class="form-group">
            <label for="categorieProduct">Categorie Product</label>
            <input type="text" name="categorieProduct" id="categorieProduct">
        </div>
        <div class="form-group">
            <label for="merkProduct">Merk Product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>
        <div class="form-group">
            <label for="prijsProduct">Prijs Product</label>
            <input type="text" name="prijsProduct" id="prijsProduct">
        </div>

        <button type="submit">Maak nieuw product</button>
    </form>
</body>

</html>