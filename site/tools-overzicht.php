<?php
require 'database.php';
$sql = "SELECT * FROM tools";
$result = mysqli_query($conn, $sql);
$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overzicht pagina tools</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="linker">
        <table>
            <thead>
                <th>tool_name</th>
                <th>tool_category</th>
                <th>tool_price</th>
                <th>tool_brand</th>
            </thead>
            <?php foreach ($all_tools as $tool) : ?>
                <tr>
                    <tbody>
                        <td>
                            <?php echo $tool["tool_name"] ?>
                        </td>
                        <td>
                            <?php echo $tool["tool_category"] ?>
                        </td>
                        <td>&euro;
                            <?php echo $tool["tool_price"] ?>
                        </td>
                        <td>
                            <?php echo $tool["tool_brand"] ?>
                        </td>

                        <td>
                            <a href="tools-detail.php?id=<?php echo $tool["tool_id"] ?>"> Meer info</a>
                        </td>
                        </div>
                    </tbody>
                </tr>
            <?php endforeach; ?>
        </table>

</body>

</html>