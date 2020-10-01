<!-- 
    Name: Sangeev Thapa Magar
    Date: 04/19/2020
    Subject: CS 355 (Advanced Web Programming)
    Assignment 5: Debugging & Control Statements
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assignment.css">
    <title>Basic Arithmetic Calculator</title>
</head>
<body>
    <main>
        <h1>Basic Arithmetic Calculator</h1>
        <center>
            <form action="." method="post">
                <h2>Please Enter the Input and Calculate.</h2>
                <input type="text" name="x" required>
                    <select name="operator">
                        <option value="addition"> + </option>
                        <option value="substraction"> - </option>
                        <option value="divsion"> / </option>
                        <option value="multiplication"> * </option>
                    </select>

                <input type="text" name="y" required>
                <br>
                <br>
                <input class="submit" type="submit" value="Calculate">
            </form>
                <br>
                <h3> <?php echo $display_result ?> </h3>
                <br>
        </center>
    </main>    
</body>
</html>