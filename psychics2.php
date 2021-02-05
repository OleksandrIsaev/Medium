<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Step 2</title>
</head>

<body>
    <div class="wrapper">
        <div class="column">
            <h1>Твій вибір</h1>
            <form action="psychics3.php" method="POST">
                <select name='shot'>
                    <?php 
                        $poczatokDiapazony;
                        $victory = [];
                        $komp = $_POST["komp"];
                        $myPocztokDiapazony = $_POST["shot"];
                        $myKinecDiapazony = $myPocztokDiapazony + 9;
                        for($i = 91; $i >= 1; $i -= 10){
                            if($komp >= $i){
                                $poczatokDiapazony = $i;
                                break;
                            }
                        }
                        echo ("<p>Комп загадав число - $komp</p>");
                        echo ("<p>Чи вгаданий діапазон - $victory[0]</p>");
                        echo ("<p>Я вибрав діапазон - $myPocztokDiapazony .. $myKinecDiapazony</p>");
                        echo ("<p>Вірний початок діапазону - $poczatokDiapazony</p>");
                        for($i = $poczatokDiapazony; $i <= $poczatokDiapazony + 9; $i++){
                            echo ("<option value='".$i."'>$i</option>");
                        }
                    ?>
                </select>
            <?php
            if ($komp  >= $myKinecDiapazony && $komp  <= $myPocztokDiapazony + 9){
                echo ("<h2>Чудово, тепер зроби свій вибір</h2>");
                $victory [] += 1;
            }else{
                echo ("<h2>Ти не вгадав діапазон, тепер зроби свій вибір</h2>");
                $victory [] += 0;
            }
            ?>
                <label><input name="victory" type="hidden" value="<?php echo(json_encode($victory));?>"></label>
                <label><input name="poczatokDiapazony" type="hidden" value="<?php echo($poczatokDiapazony);?>"></label>
                <label><input name="komp" type="hidden" value="<?php echo($komp);?>"></label>
                <label><input class="button" type="submit" value="Next"></label>
            </form>
        </div>
    </div>
</body>

</html>