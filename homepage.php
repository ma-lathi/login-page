<?php


session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])){

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>

</head>
<body>
     <h2>Welcome <?php echo $_SESSION['name']; ?>!!!</h2>
</body>
</html>