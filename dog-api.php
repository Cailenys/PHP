<?php
  // Submit a request to the API endpoint.
  $randomDogJSON = file_get_contents( 'https://dog.ceo/api/breeds/image/random' );
  
  // Convert the response to a PHP object.
  $randomDog = json_decode($randomDogJSON);
  // Collect the first user in the results array.*/
  //$randomUser = $randomUserObject->d[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP Test</title>
</head>
<body>
  <h1>External API PHP Test</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>Dog API</h2>
  <dl>
    <dt><h3>JSON<h3></dt>
    <dd>
      <?php 
      echo $randomDog->message;
      echo "<pre>"; 
      echo $randomDog->status; 
     ?>
    </dd>
    <dd><img src="<?php echo $randomDog->message; ?>"></dd>
  </dl>
</body>
</html>