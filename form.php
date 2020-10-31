<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Project 1</h1>
<form action="register.php" method="post">
    <h2>Please Register</h2>
    <div>
        <label for="FirstName">Enter your First Name:</label>
        <input type="text" name ="FirstName" id = "FirstName"><br>
        <span class="FNmistake">* <?php echo $FNmistake;?></span><br>

        <label for="LastName">Enter your Last Name:</label>
        <input type="text" name ="LastName" id = "LastName"><br>
        <span class="LNmistake">* <?php echo $LNmistake;?></span><br>

        <label for="Bday">Enter your Birthday:</label>
        <input type="text" name ="Bday" id = "Bday"><br>
        <span class="passwordMistake">* <?php echo $BdayMistake;?></span><br>

        <label for="email">Email:</label>
        <input type="text" name ="email" id = "email">
        <span class="userMistake">* <?php echo $userMistake;?></span><br>

        <label for="pssWord">Password:</label>
        <input type="text" name ="pssWrd" id = "pssWrd">
        <span class="passwordMistake">* <?php echo $passwordMistake;?></span><br>
    </div>
    <br><br>
    <input type = "submit" value = "Submit">
</form>
</body>
</html>
