<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <h2>Registreer gebruiker</h2>
    <form action="registratie-compleet.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">lastname</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input type="text" name="city" id="city">
        </div>
        <div class="form-group">
            <label for="is_active">active</label>
            <input type="radio" name="is_active" id="is_active" value="active">
        </div>
        <div class="form-group">
            <label for="is_activeniet">niet active</label>
            <input type="radio" name="is_active" id="is_activeniet" value="niet active">
        </div>
        <div class="form-group">
            <label for="role">admin</label>
            <input type="radio" name="role" id="role" value="admin">
        </div>
        <div class="form-group">
            <label for="rolelol">customer</label>
            <input type="radio" name="role" id="rolelol" value="customer">
        </div>
        <div class="form-group">
            <label for="rolelolol">employee</label>
            <input type="radio" name="role" id="rolelolol" value="employee">
        </div>
        <button type="submit" name = "submit">registreer gebruiker</button>
    </form>
</body>
</html>