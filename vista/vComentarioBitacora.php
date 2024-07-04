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
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                
                    <form>
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Bitácora
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Comentario:</label>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                            </div>
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn boton"><i class="far fa-edit"></i>  Modificar</button>
                            </div>    
                        </div>
                    </form>
            </div>
        </div>
        <!-- codigo de la tabla -->
        <div class="col-sm-7 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">N° Reunión</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col">N° Grupo</th>
                        <th scope="col" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <tr>
                        <th scope="row">1</th>
                        <td>19/06/2020</td>
                        <td>Objetivos del Proyecto</td>
                        <td>Se revisaron y realizaron cambios a los objetivos del proyecto</td>
                        <td>2</td>
                        <td><a href>Detalles</a></td>
                        <td><a href>Comentar</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>02/07/2020</td>
                        <td>Cambios en la Base de Datos</td>
                        <td>Se modificaron y eliminaron tablas</td>
                        <td>3</td>
                        <td><a href>Detalles</a></td>
                        <td><a href>Comentar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>