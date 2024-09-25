<?php include ("Header.php")?>
        <div class="container">
            <h1>Registro de animales</h1>
            <h2>Consulta o ingrese los registros de animales existentes</h2>

            <table class="table">
                <thead>
                    <tr>
                    <th>Apodo</th>
                    <th>Especie</th>
                    <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                    include("php/entities/animal.php");
                    $registro = getAll();
                    if(count($registro) >0){
                        foreach($registro as $row){
                            echo "<tr>".
                            "<td>". $row->apodo."</td>".
                            "<td>". $row ->especie."</td>".
                            "<td>". $row->color."</td>".
                          "</tr>";
                        }
                       
                    }
                 ?>
                </tbody>
            </table>
        </div>
<?php include("Footer.php")?>
