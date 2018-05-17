
<!DOCTYPE html>
<html>
    <head>
        <title>Edit contact</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="../src/update.php" method="post">
            <input type="hidden" name="txtid" required placeholder="name" value="<?php echo $user['id'] ?>">
            <input type="text" name="txtName" required placeholder="name" value="<?php echo $user['name'] ?>">
            <input type="text" name="txtLastName" required placeholder="lastname" value="<?php echo $user['lastname'] ?>">
            <input type="text" name="txtPhone" required placeholder="phone" value="<?php echo $user['phone'] ?>">
            <button  class="btn btn-info" type="submit">Edit</button>
            <button class="btn btn-danger" type="button" onclick="pageBack2()">Cancel</button>

          
        </form>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pageBack.js" type="text/javascript"></script>
        
    </body>
</html>

