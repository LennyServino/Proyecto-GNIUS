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
    <title>Uso de Oficina</title>
</head>
<body class="body2">
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                
                    <form name="frmUsoOficina" action="index.php?acc=insert_uso" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Uso de Oficina
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Actividad a Realizar:</label>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <input name="txtActividad" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Oficina:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="pregunta-group">
                                <select name="sltOficina" class="form-control selectpicker">
                                    <option value="" ></option>
                                    <?php
                                        while($fila=$resultado->fetch_array())
                                        {
                                            echo '<option value="'.$fila['cod_ofi'].'">'.$fila['nom_ofi'].' | '.'Asientos Disponibles: '.$fila['cap_per'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Fecha:</label>     
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="fecha-group">
                                <input name="txtFecha" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Hora:</label>     
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="tiempo-group">
                                <input name="txtHora" type="time" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Tiempo de estadia:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="tipo-group">
                                <input name="txtTiempo" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Cantidad de Acompañantes:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="tipo-group">
                                <input name="txtAcompa" type="number" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                    </form>
            </div>
        </div>
</body>
</html>