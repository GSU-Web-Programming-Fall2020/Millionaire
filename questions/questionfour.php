<!DOCTYPE html PUBLIC>
<html>
    <head>
        <title>Question 4</title>
    </head>
    <body>
        <?php
            $answer = $_POST["answer"];
            if($answer == "A"){
                echo "correct";
            }
            else {
                echo "wrong!";
            }
		?>
        <div>
            <h1>Question 4</h1>
        </div>
        <div>
            <form action="./questionfive.php" method="post">
                <fieldset>
                    <ul class="left">
                        <li class="column">
                            <label>Answer to the Ultimate Question of Life, the Universe, and Everything?</label>
                        </li>
                        <li>
                            <input type="radio" name="answer" value="A"> 72
                            <input type="radio" name="answer" value="B"> 84
                            <input type="radio" name="answer" value="C"> 42
                            <input type="radio" name="answer" value="D"> 24
                        </li>
                    </ul>
                    <ul class="left">
                        <li class="column">
                            <input type="submit" value="Submit">
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>
    </body>
</html>