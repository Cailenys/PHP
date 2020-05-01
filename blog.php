<?php
  
  include './includes/users_data.json';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
   
<?php include './includes/navigation.php'; 
    $users= array_users();
    $myFile = './users_data.json';
    $blogContent = file_get_contents( $myfile);
    $myArray = json_decode ($blogContent, true);
    $blog_users = $myArray['users'];
    <?php if (!empty($article)):?>
        <?php foreach($blog_users as $aticle):?>
            <?php if (is_numeric($name) : ?>
            continue;
            
            <?php else:?>
            echo "Name: $name<br>";
            
            <?php endif?>  
                        
        <?php endforeach; ?>
    <?php endif?>  
</body>
</html>