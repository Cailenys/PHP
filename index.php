<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Example</title>
</head>
<body>
    <h1> PHP Example </h1>
    <?php 
    // Varibale names
    $myVar = 'Hello, World!';
    echo $myVar;

    $name = 'Cailenys';
    $name2 = 'Bob';
    $greeting = "My name is: {$name}2";
    echo $greeting;
     
    // Concatination operator
    $fullGreeting = 'My name is :' . $name;
    echo $fullGreeting;

    /**
     * DataTypes:
     */

    $myInteger = 54;
    $myFloat= 38.968;
    $myBoolean = TRUE;
    $mySecondBoolan = false;
    $mystring = 'Hello,world!';
    $myObject = new stdClass ();
    $myNull = NULL;
    $myArray = array( $myInteger,  $myFloat, $myBoolean, $mySecondBoolan, $mystring,$myObject, $myNull);
    
    echo '<pre>';
    var_dump($myArray);
    echo '</pre>';
    ?>
</body>
</html>