<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tabel Perkalian Matriks :</h3>
    <table border="2">
        <tr>
            <!-- $i baris & $j kolom-->
            <td>bilangan</td>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<td style='background-color: #00FF00;'>$i</td>";
                }
            ?>
        </tr>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td style='background-color: #00FF00;'>$i</td>";
                for ($j = 1; $j <= 10; $j++) {
                    $hasil = $i * $j;
                    if($hasil % 2 == 0){
                        $warna = "#00FFFF";
                    }else{
                        $warna = "#FFFF00";
                    }
                    echo "<td style='background-color: $warna;'>$hasil</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>