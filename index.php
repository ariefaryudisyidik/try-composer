<?php

    require_once 'vendor/autoload.php';

    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create('id_ID');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Population Data</title>
    <style>
        table {
            width: 100%;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            background-color: dodgerblue;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        body {
            padding: 100px;
            padding-top: 20px;
            font-family:  Helvetica;
        }
    </style>
</head>

<body>
    <h1>Population Data</h1>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php foreach (range(1, 10) as $index): ?>
        <tr>
            <td style="text-align: center"><?=$index?></td>
            <td><?=$faker->name?></td>
            <td><?=$faker->address?></td>
            <td><?=$faker->phoneNumber?></td>
            <td><?=$faker->email?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>

</html>
