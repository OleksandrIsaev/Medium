<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Step 4</title>
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
                echo("<p>Комп загадав число - $komp</p>");
                if($victory[2] == $komp){
                    if($victory[0] == 1){
                        echo("<p>Мої вітання ти дійсно Екстрасєнс!</p>");
                    }else{
                        echo("<p>Ти не вгадав Діапапзон, але вгадав з другої спроби=)</p>");
                    }
                    echo ("
                        <form action='psychics1.php' method='POST'>
                            <input class='button' type='submit' value='Next'>
                        </form>
                    ");
                }else{
                    echo("<p>Ти знову не вгадав</p>");
                    if($komp > $victory[2]){
                        echo("<h1>Більше число =)</h1>");
                    }else{
                        echo("<h1>Меньше число =)</h1>");
                    }
                    echo("
                    <form action='result.php' method='POST'>
                    <select name='shot'>
                ");
                for($i = $poczatokDiapazony; $i <=$poczatokDiapazony +4; $i++){
                    if($i == $victory[2] || $i == $victory[2]){
                        echo ("<option disabled value='".$i."'>$i</option>");
                    }else{
                    echo ("<option value='".$i."'>$i</option>");
                    }
                }
                echo("
                    </select>
                        <label><input name='victory' type='hidden' value='".json_encode ($victory)."'></label>
                        <label><input name='poczatokDiapazony' type='hidden' value='".$poczatokDiapazony."'></label>
                        <label><input name='komp' type='hidden' value='".$komp."'></label>
                        <input type = 'submit' value = 'Спробуй ще раз останній раз'>
                    </form>
                ");
                }
                
                echo("<p>Чи вгаданий діапазон - $victory[0]</p>");
                echo("<p>Перше число - $victory[1]</p>");
                echo("<p>Початок діапазону - $poczatokDiapazony</p>");
            ?>
        </div>
    </div>
</body>

</html>