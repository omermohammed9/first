<?php

$answer = 42; // this is the number the user has to guess

// the below if condition checks if the user submmited an input
if (isset($_POST['guess'])) {
    // take the user's input
    $guess = $_POST['guess'];

    // check if the user's input and our answer is equal or high or low
    if ($guess == $answer) {
        echo "Congratulations, you guessed the correct number!";
    } elseif ($guess > $answer) {
        echo "Too high, try again.";
    } else {
        echo "Too low, try again.";
    }
}
?>

<html>
<body>
<form method="post">
    <label for="guess">Guess the number:</label>
    <input type="text" name="guess" id="guess">
    <input type="submit" value="Submit">
</form>
</body>
</html>