<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hello"> 

        <form class="formCalc" action="calc.php" method="get">

            <input class="inp1" type="number" name="n1">
            <select class="btn btn-outline-primary" name="operation">
                <option value="">Select an operation</option>
                <option value="1">Sum</option>
                <option value="2">Subtraction</option>
                <option value="3">Multiplication</option>
                <option value="4">Division</option>
                <option value="5">Division module</option>
                <option value="6">Log</option>
                <option value="7">√x</option>
                <option value="8">y√x</option>
                <option value="9">X^2</option>
                <option value="10">X^Y</option>
            </select>
            <input class="inp1" type="number" name="n2">
            <button type="submit" class="btn btn-outline-success btnRadius" name="btnOperate">Operate</button>
            <br>
            <h2>Instructions</h2>
            <section>when you go to execute a single character operation you must enter the number in the first text box.</section>
        </form>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
