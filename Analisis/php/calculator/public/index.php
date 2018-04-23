<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <form action="calc.php" method="get">
            <input type="number" name="n1">
            <select class="optionn" name="operation">
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
            <br>
            <input type="number" name="n2">
            <button type="submit" name="btnOperate">Operate</button>
        </form>
    </body>
</html>
