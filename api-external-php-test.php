<?php
<<<<<<< HEAD
$randomUserJSONString = file_get_contents ('http://ramdomuser.me/api/')
=======
  // Submit a request to the API endpoint.
  $randomUserJSONString = file_get_contents( 'http://randomuser.me/api/' );
  // Convert the response to a PHP object.
  $randomUserObject = json_decode( $randomUserJSONString );
  // Collect the first user in the results array.
  $randomUser = $randomUserObject->results[0];
>>>>>>> 1e69aa1236fc102fe2cde840495de8a2f51725d8
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
  <h2>Random User</h2>
  <dl>
    <dt>Full Name</dt>
    <dd>
      <?php echo $randomUser->name->title; ?>
      <?php echo $randomUser->name->first; ?>
      <?php echo $randomUser->name->last; ?>
    </dd>
    <dt>Country</dt>
    <dd><?php echo $randomUser->location->country; ?></dd>
    <dt>E-Mail Address</dt>
    <dd><?php echo $randomUser->email; ?></dd>
    <dt>Photograph</dt>
    <dd><img src="<?php echo $randomUser->picture->large; ?>"></dd>
  </dl>
</body>
</html>