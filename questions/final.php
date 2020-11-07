<!DOCTYPE html PUBLIC>
<html>
    <head>
        <title>Finale</title>
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
    </body>
</html>