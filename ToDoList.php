<?php

if (isset ($_POST) && !empty ($_POST)){
    $submitedItem = $_POST['item-name'];
    echo "$submitedItem";
}


/*foreach($items as $item){
 echo $item ['item-name'], '<br>'; 
 print_r($item);
}*/

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
    <div class ="list">
        <h1 class ="header"> To Do </h1>
        <?php if (!empty($item)):?>
           
                <ul class ="items"> 
                    <?php foreach($items as $item): ?>
                      
                        <li>
                            <span class="item <?php echo $item ['done'] ? 'done': '' ?>"><?php echo $item ['item-name'];?></span>
                            <?php if (!$item['done']) : ?>
                                <a href="done.php? as=done & item=<?php echo $item ['id'] ?>" class="done-button"> Mark as done </a>
                            <?php endif?>  
                        </li>
                        <li>
                            <span class= "item-done">PHP To-Do assigment</span> 
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php else:?>
                    <p> You haven't added any itemes yet.</p>
        <?php endif;?>
        <form class = "item-add" action= "add.php" method= "POST">
            <input type= "text" name= "item-name" placeholder="Type a new task here." class= "input" autocomplete="off" required>
            <input type="submit" value= "Add" class= "submit">
        </form>
        <pre>
            <?php var_dump ($_POST);?>
        </pre>
    </div>
    
</body>
</html>