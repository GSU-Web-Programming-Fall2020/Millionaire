<!DOCTYPE html PUBLIC>
<html>
    <head>
        <title>Question 3</title>
    </head>
    <body>
        <?php
            $answer = $_POST["answer"];
            if($answer == "D"){
                echo "correct";
            }
            else {
                echo "wrong!";
            }
		?>
        <div>
            <h1>Question 3</h1>
        </div>
        <div>
            <form action="./questionfour.php" method="post">
                <fieldset>
                    <ul class="left">
                        <li class="column">
                            <label>Who was the 24th President of the United States?</label>
                        </li>
                        <li>
                            <input type="radio" name="answer" value="A"> Grover Cleveland
                            <input type="radio" name="answer" value="B"> Theodore Roosevelt
                            <input type="radio" name="answer" value="C"> Benjamin Harrison
                            <input type="radio" name="answer" value="D"> Martin Van Buren
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