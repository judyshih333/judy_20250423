<?php
include "./data.php";

// dd($data);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        <!-- <tr>
            <td>1</td>
            <td>amy</td>
        </tr> -->

        <?php
        foreach ($data as $key => $value): ?>

            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>

                <td></td>
            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>