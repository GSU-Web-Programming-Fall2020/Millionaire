<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Question 4</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $answer = $_POST["answer"];
    if (!($answer == "A")) {
        header("Location: ./wrong.php");
        exit();
    }
    ?>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div>
        <h1>Question 4</h1>
    </div>
    <div>
        <form action="./questionfive.php" method="post">
            <fieldset>
                <ul class="centered">
                    <li class="column">
                        <label>Answer to the Ultimate Question of Life, the Universe, and Everything?</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="A"> <label class="answertext">72</label>
                        <input class="answer" type="radio" name="answer" value="B"> <label class="answertext">84</label>
                        <input class="answer" type="radio" name="answer" value="C"> <label class="answertext">42</label>
                        <input class="answer" type="radio" name="answer" value="D"> <label class="answertext">24</label>
                    </li>
                </ul>
                <ul class="centered">
                    <li class="column">
                        <input class="button" type="submit" value="Submit">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</body>

</html>