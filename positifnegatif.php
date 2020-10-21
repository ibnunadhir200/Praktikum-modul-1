<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tugas no 1</title>
    </head>
    <body>
        <form method="POST" ation="<?php echo $_SERVER["PHP_SELF"];?>"> 
            Masukan nilai = 
            <input type="text" name="nilai1" value="<?php echo $nilai1 ; ?>"/><br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
            $tampil = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bil = $_POST["nilai1"];
            
            if ($bil % 2 == 0){ //Kondisi
                echo "$nilai1 Merupakan Bilangan Genap"; //Kondisi true
        }else {
                echo "$nilai1 Merupakan Bilangan Ganjil"; //Kondisi false
        }
        }
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0) {
                echo $nilai1 . ' Bilangan positif';
            } else if ($nilai1 < 0) {
                echo $nilai1 . ' Bilangan negatif';
            }

            ?>

        </form>
    </body>
</html>