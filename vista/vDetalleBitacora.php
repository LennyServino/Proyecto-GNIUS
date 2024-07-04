<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <!--Iconos Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!--Estilos Perzonalizados-->
    <link rel="stylesheet" href="../recursos/css/estilos3.css">
    <title>Bitácora</title>
</head>
<body class="body2">
            <div class="col-sm-7 text-center main-section3">
                <table class="table table-hover tabla table-borderless">
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6" class="text-uppercase font-italic">Proyecto: <?php echo $resultado2['nom_pro']; ?></th>
                        </tr>
                    </thead>
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6">N° de Reunión</th>
                        </tr>
                    </thead>
                    <?php
                        echo '<tbody class="fondoContenido">';
                            echo '<tr>';
                                echo '<td>'.$consulta['num_r'].'</td>';
                            echo '</tr>';
                        echo '</tbody>';
                    ?>
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6">Fecha de Reunión</th>
                        </tr>
                    </thead>
                    <?php
                        echo '<tbody class="fondoContenido">';
                            echo '<tr>';
                                echo '<td>'.$consulta['fch'].'</td>';
                            echo '</tr>';
                        echo '</tbody>';
                    ?>
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6">Tema</th>
                        </tr>
                    </thead>
                    <?php
                        echo '<tbody class="fondoContenido">';
                            echo '<tr>';
                                echo '<td>'.$consulta['thm'].'</td>';
                            echo '</tr>';
                        echo '</tbody>';
                    ?>
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6">Actividades Realizadas</th>
                        </tr>
                    </thead>
                    <?php
                        echo '<tbody class="fondoContenido">';
                            echo '<tr>';
                                echo '<td>'.$consulta['act_rea'].'</td>';
                            echo '</tr>';
                        echo '</tbody>';
                    ?>
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6">Comentarios del Mentor</th>
                        </tr>
                    </thead>
                    <?php
                        echo '<tbody class="fondoContenido">';
                            echo '<tr>';
                                echo '<td>'.$consulta['com_men'].'</td>';
                            echo '</tr>';
                        echo '</tbody>';
                    ?>
                </table>
            </div>
    </body>
</html>