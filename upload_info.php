<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <p>The following information has been updated successfully: </p>
    <main>
        <?php
        if (isset($_REQUEST['name']) && isset($_REQUEST['updates']) && isset($_REQUEST['age'])) :
            $name = htmlspecialchars($_REQUEST['name']);
            $updates = htmlspecialchars($_REQUEST['updates']);
            $age = htmlspecialchars($_REQUEST['age']);
        ?>
            <div><label>Name: </label><input type="text" readonly value="<?= $name ?>"></div>
            <div><label>Age: </label><input type="text" readonly value="<?= $age ?>"></div>
            <div><label>Updates: </label><input type="text" readonly value="<?= $updates ?>"></div>
        <?php
        endif;
        ?>
    </main>
</body>

</html>