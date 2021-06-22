<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    $name = $_GET['name'];
    $users = array_map('str_getcsv', file('db.csv'));

    for ($i = 0; $i < count($users); $i++) {
        if (strpos($users[$i][0], $name)) {
            $position = $i;
        }
    }
?>

<h1><?php echo $users[$position][0]?> </h1>

</body>
</html>

