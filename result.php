<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Result</title>
</head>

<body>
    <div class="wrapper">
        <div class="column">
            <h1>Your Choice</h1>
            <?php 
                $komp = $_POST["komp"];
                $victory = json_decode($_POST["victory"]);
                $poczatokDiapazony = $_POST["poczatokDiapazony"];
                $victory [] += $_POST["shot"];
                if($victory[3] == $komp){
                    if($victory[0] == 1){
                        echo("<p>Ти все ж таки переміг</p>");
                    }else{
                        echo("<p>Ти не вгадав Діапапзон, але вгадав з третьої спроби=)</p>");
                    }
                }else{
                    echo("Ти програв...");
                }
                echo ("
                    <form action='psychics1.php' method='POST'>
                        <input class='button' type='submit' value='Next'>
                    </form>
                ");
            ?>
        </div>
    </div>
</body>

</html>