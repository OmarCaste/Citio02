<?php include ("Header.php")?>
        <div>
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
        <table class="table">
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Nivel</th>
                    <th>Costo</th>
                    <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                    include("php/entities/card.php");
                    $registro = getAllCard();
                    if(count($registro) >0){
                        foreach($registro as $row){
                            echo "<tr>".
                            "<td>". $row->nombre."</td>".
                            "<td>". $row ->codigo."</td>".
                            "<td>". $row ->nivel."</td>".
                            "<td>". $row ->costo."</td>". 
                            "<td>". $row->color."</td>".
                            
                          "</tr>";
                        }
                       
                    }
                 ?>
                </tbody>
            </table>
                </table>
<?php include("Footer.php")?>
