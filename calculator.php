<?php
//logic php
if(isset($_POST["submit"]))
{
    $drop = $_POST["drop"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    switch($drop)
    {
        case "tambah":
            $num3 = $num1 + $num2;
            break;
        case "kurang":
            $num3 = $num1 - $num2;
            break;  
        case "kali":
            $num3 = $num1*+ $num2;
            break; 
        case "bagi":
            $num3 = $num1 / $num2;
            break; 
        default:
            $num = "Pilih Operasi bilangan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>PHP CALCULATOR</h3>

        <form action="" method="POST">
            <input type="text" name="num1" placeholder="Masukkan angka pertama" value=<?= @$num1 ?> >
            <input type="text" name="num2" placeholder="Masukkan angka kedua"  value=<?=@$num2?>>
            <select name="drop">
                <option value="operasi" selected="true" disabled>Pilih bilangan operasi</option>
                <option value="tambah">TAMBAH [+]</option>
                <option value="kurang">KURANG [-]</option>
                <option value="kali">KALI [x]</option>
                <option value="bagi">BAGI [:]</option>
            </select>

            <input type="submit" name="submit">
            <h5>HASIL OPERASI :
                <br>
                <span><?=@$num3?></span>
            </h5>
        </form>
    </div>
</body>
</html>  