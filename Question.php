<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project 1</title>
</head>
<body>

<h1>Project 1</h1>
<form action="qcode.php" method="post">
    <h2>Please Enter A Question</h2>
    <div>

        <label for="question">Enter The Question of Choice</label>
        <input type="text" name ="question" id = "question">
        <span class="questionMistake"><?php echo $questionMistake;?></span><br>

        <label for="body">Enter the body of your question.</label>
        <input type="text" name ="body" id = "body">
        <span class="bodyMistake"><?php echo $bodyMistake;?></span><br>

        <label for="answer">Enter your answers:</label>
        <input type="text" name ="answer" id = "answer">
        <span class="Mistake"><?php echo $Mistake;?></span><br>

    </div>
    <br><br>
    <input type = "submit" value = "Submit">
</form>


</body>
</html>
