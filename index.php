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
    $nameToSearch = "Alberto";

    $users = array_map('str_getcsv', file('db.csv'));

    for ($i = 0; $i < count($users); $i++) {
        $users[$i] = explode(';' , $users[$i][0]);      
        $users[$i] = $users[$i][0];
        if (strpos($users[$i], $nameToSearch)) { 
            echo("<h1>".$users[$i]."</h1>") ;
        }
    }
    
    

     
        
              
?>
    
    
    





</body>
</html>