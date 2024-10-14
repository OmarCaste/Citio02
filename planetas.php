<!DOCTYPE html>
<html>
<head>
    <title>Planetas</title>
    <link rel="stylesheet" href="CSS/planetastyle.css" type="text/css" />
</head>
<body>
    <h1>Planetas</h1>

    <p>
    <?php
        include("php/entities/planeta.php");
        $registros = getAllPlanetas();
        if (count($registros) > 0) {
            foreach ($registros as $row) {
                $url = str_replace('C:\\xampp\\htdocs', '', $row->imagen);                
                echo "<p>". htmlspecialchars($row->nombre) . "</p>";   
                echo "<img class='planetas' src='". htmlspecialchars($url) . "' alt='" . htmlspecialchars($row->nombre) . "' />";
            }
        } 
    ?>
    </p>
</body>
</html>
