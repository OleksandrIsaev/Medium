<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Step 1</title>
</head>

<body>
    <div class="wrapper">
        <div class="column">
            <h1>Твій вибір</h1>
            <form action="psychics2.php" method="POST">
                <select name="shot">
                    <?php 
                        $komp = rand(1,100);
                        for($start = 1, $end = 10; $start <= 100; $start += 10, $end += 10){
                            echo("<option value='".$start."'>$start - $end</option>");
                        }
                    ?>
                </select>
                <label><input name="komp" type="hidden" value="<?php echo($komp);?>"></label>
                <label><input class="button" type="submit" value="Далі"></label>
            </form>
        </div>
    </div>
</body>
