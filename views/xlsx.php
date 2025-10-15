<?php 

use PhpOffice\PhpSpreadsheet\IOFactory;

require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    try {
        // Charger le fichier Excel
        $spreadsheet = IOFactory::load("../INVENTAIRE-12.2024.xlsx");
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();


        // foreach ($data as $index => $row) {
        //     if ($index === 0) continue; // ignorer la première ligne (entêtes)
        //     echo "<tr>";
        //     echo "<td>" . htmlspecialchars($row[0]) . "</td><br>";
        //     echo "<td>" . htmlspecialchars($row[1]) . "</td><br>";
        //     echo "<td>" . htmlspecialchars($row[2]) . "</td><br>";
        //     echo "<td>" . htmlspecialchars($row[3]) . "</td><br>";
        //     echo "</tr>";
        // }

        echo "</table>";

    } catch (Exception $e) {
        echo "Erreur lors du chargement du fichier Excel : " . $e->getMessage();
    }
    ?>
</body>
</html>