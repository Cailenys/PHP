<?php

$item_name = array();
$item_name = $item ['item_name']
if ( (isset($_POST['add']) && !empty( $_POST ) &&  !empty($item_name [0])) // Making sure SOMETHING was submitted.
  {
    echo $item_name ; 
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel= "stylesheet" href="stylesheet.css">
    <title>To-Do list</title>
</head>
<body>
<?php include './includes/navigation.php'; ?>

        <form class = "item-add" action= "./Testing.php" method= "POST">
            <input type= "text" name= "item_name" placeholder="Type a new task here." class= "input" autocomplete="off" required>
            <input type="submit" value= "Add"  name="add" class= "submit">
        </form>
        <pre>
            <?php var_dump ($_POST);?>
        </pre>
    </div>
    
</body>

</html>
