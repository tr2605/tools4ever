<?php
session_start();
require 'database.php';
$id  = $_GET['id'];
$sql = "SELECT * FROM tools WHERE tool_id = $id";
$result = mysqli_query($conn, $sql);
$tool = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail pagina</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <table>
        <thead>
            <th>tool_name</th>
            <th>tool_category</th>
            <th>tool_price</th>
            <th>tool_brand</th>
        </thead>
        <tbody>
            <td> <? echo $tool["tool_name"] ?></td>
            <td><? echo $tool["tool_category"] ?></td>
            <td>&euro;<? echo $tool["tool_price"] ?></td>
            <td><? echo $tool["tool_brand"] ?></td>
        </tbody>
    </table>
    <?
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>

</html>