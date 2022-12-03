<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP And HTML</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>PHP ร่วมกับ HTML</h1>
    <?php
    
        echo "Jaffry<br>";
        echo "<b>Banrai</b>";
        echo "<h1>เรียน PHP</h1>";

        print("Jaffry");

    ?>
    <form action="">
        <label for="">ชื่อ</label>
        <input type="text" name="" id="" value="<?php echo "๋เจฟ " ;?>">
        <label for="">นามสกุล</label>
        <input type="text" name="" id="" value="<?php echo "ฟี้" ;?>">
    </form>

</body>
</html>