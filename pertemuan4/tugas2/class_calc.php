<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <style>
        body {
             background-color :#A9A9A9 ;
        }
        h1 {
            font-family: Georgia, serif; 
            text-align : center;
		}
        input{
            padding: 5px 10px ; 
            border: none; 
            border-radius: 3px;
            text-align : center;
            margin: auto;
		}

        div{
            background-color : #D3D3D3;
            border: 2px solid black; 
            padding: 25px; 
            margin: 0 auto;
            width: 500px; 
            height: 200px;
        }
    </style>

    <div style="display: flex; justify-content: center";>
        <form action="class_calc.php" method="post" >
        <h1> Kalkulator Sederhana </h1>
            <input name="bil1" type="number"  placeholder="Masukkan Angka" style="margin-bottom: 10px;">
        <br>
            <input name="bil2" type="number"  placeholder="Masukkan Angka" style="margin-bottom: 10px;" >
            <select name="operasi" style="margin-right: 10px;">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
            </select>
        <br>
            <button type="submit" name="hitung"> Hitung</button>
        </form>
    </div>
    <?php
if (isset($_POST['hitung'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];

    switch ($operasi) {
        case '+':
            $hasil = $bil1 + $bil2;
            break;
        case '-':
            $hasil = $bil1 - $bil2;
            break;
        case '*':
            $hasil = $bil1 * $bil2;
            break;
        case '/':
            $hasil = $bil1 / $bil2;
            break;
    }

    echo "Hasil: " . $hasil;
}
?>
</body>
</html>