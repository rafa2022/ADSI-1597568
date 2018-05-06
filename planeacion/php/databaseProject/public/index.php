<!DOCTYPE html> 
<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <a href="img/favicon.ico"></a>
    <title>DataBase</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="name" placeholder="Name" required="required">
        <input type="text" name="lastName" placeholder="Last name" required="required">
        <input type="text" name="phone" placeholder="Phone" required="required">
        <input type="hidden" name="acction" value="insert">
        <input type="submit" name="submit" value="send">
    </form>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
