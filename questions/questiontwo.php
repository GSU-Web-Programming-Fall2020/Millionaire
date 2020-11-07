<!DOCTYPE html PUBLIC>
<html>
    <head>
        <title>Question 2</title>
    </head>
    <body>
        <?php
            $answer = $_POST["answer"];
            if($answer == "B"){
                echo "correct";
            }
            else {
                echo "wrong!";
            }
		?>
        <div>
            <h1>Question 2</h1>
        </div>
        <div>
            <form action="./questionthree.php" method="post">
                <fieldset>
                    <ul class="left">
                        <li class="column">
                            <label>What is Africa?</label>
                        </li>
                        <li>
                            <input type="radio" name="answer" value="A"> A State
                            <input type="radio" name="answer" value="B"> A County
                            <input type="radio" name="answer" value="C"> A Planet
                            <input type="radio" name="answer" value="D"> A Continent
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