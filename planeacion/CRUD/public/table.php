<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>Table</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <a class="btn btn-info" href="add.html">Add</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Name</td>
                    <td>Last name</td>
                    <td>Phone</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $db->getData()): ?>
                    <tr>
                        <td> <?php echo $user['id'] ?> </td>
                        <td><?php echo $user['name'] ?> </td>
                        <td><?php echo $user['lastname'] ?> </td>
                        <td><?php echo $user['phone'] ?> </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="../src/edit.php?id=<?php echo $user['id'] ?>" class="btn btn-info">Edit </a>

                                <a href="#" onclick="deleteUSer(<?php echo $user['id'] ?>)" class="btn btn-danger">Delete</a>
                            </div>
                        </td>

                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/deleteuser.js" type="text/javascript"></script>

    </body>
</html>