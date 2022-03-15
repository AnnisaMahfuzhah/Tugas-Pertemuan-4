<!DOCTYPE html>
<html>
<head></head>
<body><form action="" method = "post">
    <input type="text" name = "nilai">
    <input type="submit" value = "Input">
    <?php
    error_reporting(0);
    $nilai = $_POST['nilai'];
    echo "<br>";
    if($nilai >= 0 and $nilai <= 50)
    {
        echo "Nilai E";
    }
    elseif($nilai >=50 and $nilai <=60)
    {
        echo "Nilai D";
    }
    elseif($nilai >=60 and $nilai <=70)
    {
        echo "Nilai C";
    }
    elseif($nilai >70 and $nilai <=80)
    {
        echo "Nilai B";
    }
    else
    {
        echo "Nilai A";
    }
    ?>
</form>
</body>
</html>
    