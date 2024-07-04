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
        <div class="col-sm-8 main-section4 text-center">
            <div class="modal-content">
                
                    <form>
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Uso de Oficina
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Actividad a Realizar:</label>
                                <label class="col-sm-6">Fecha:</label> 
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="mensaje-group">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Hora:</label>
                                <label class="col-sm-6">Tiempo de estadia:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="tiempo-group">
                                <input type="time" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="tipo-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Cantidad de Aconpañantes:</label>
                                <label class="col-sm-6">Oficina:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="pregunta-group">
                                <select class="form-control selectpicker">
                                    <option data-content="" ></option>
                                    <option data-content="" >Sala Prototipado</option>
                                    <option data-content="" >Sala Co-working</option>
                                    <option data-content="" >Sala Reuniones</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-4">Nombre:</label>
                                <label class="col-sm-4">Correo:</label>
                                <label class="col-sm-4">Telefono:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-4" id="user-group">
                                <input type="time" class="form-control">
                            </div>
                            <div class="form-group col-sm-4" id="email-group">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-sm-4" id="telefono-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                    </form>
            </div>
        </div>
</body>
</html>