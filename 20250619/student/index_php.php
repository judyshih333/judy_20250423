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
    <style>
        table {
            width: 80%;
            text-align: center;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
            margin: auto;
        }
    </style>

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

            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>