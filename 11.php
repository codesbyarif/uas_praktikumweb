<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tabel dengan 5 Kolom dan 10 Baris</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>Kolom 1</th>
        <th>Kolom 2</th>
        <th>Kolom 3</th>
        <th>Kolom 4</th>
        <th>Kolom 5</th>
      </tr>
    </thead>
    <tbody>
    
    <?php

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo '<tr style="background-color:green;">';
    } else {
        echo '<tr>';
    }

    for ($j = 1; $j <= 5; $j++) {
        echo "<td>baris ke-$i, kolom ke-$j</td>";
    }

    echo "</tr>";
}

?>

   
 
    </tbody>
  </table>
</body>
</html>
