<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ul {
        background: #e3e3e3;
        padding: 20px;
        text-align: left;
        width: 500px;
    }

    </style>
</head>
<body>
    
    <ul>
        <?php

            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>

    <ul>
        <?php
            foreach ($animals as $animal) {
                echo "<li>$animal</li>";
            }
        ?>
    </ul>

    <ul>
        <?php foreach ($person as $feature => $val) : ?>
            <li><strong><?=$feature;?>: </strong><?=$val;?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>