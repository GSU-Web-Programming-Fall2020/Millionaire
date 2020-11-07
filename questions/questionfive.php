<!DOCTYPE html PUBLIC>
<html>
    <head>
        <title>Question 5</title>
    </head>
    <body>
        <?php
            $answer = $_POST["answer"];
            if($answer == "C"){
                echo "correct";
            }
            else {
                echo "wrong!";
            }
		?>
        <div>
            <h1>Question 5</h1>
        </div>
        <div>
            <form action="./final.php" method="post">
                <fieldset>
                    <ul class="left">
                        <li class="column">
                            <label>What is the debt, rounded to the nearest trillion, of the United States of America?</label>
                        </li>
                        <li>
                            <input type="radio" name="answer" value="A"> $20 Trillion
                            <input type="radio" name="answer" value="B"> $42 Trillion
                            <input type="radio" name="answer" value="C"> $14 Trillion
                            <input type="radio" name="answer" value="D"> $8 Trillion
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