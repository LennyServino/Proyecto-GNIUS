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
    <title>Registrarse</title>
</head>
<body class="body1">
        <div class="col-sm-5 main-section4 text-center">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="recursos/imagenes/Logo_GNIUS.jpg" alt="">
                </div>
                    <form name="frmRegistrarse" action="index.php?acc=auten_reg" method="POST" class="">
                        
                        <div class="row col-sm-12 pl-5">
                                <label class="col-sm-12">Nombre de Usuario:</label>
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <div class="form-group col-sm-12" id="user-group">
                                <input type="text" name="txtNombre" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <label class="col-sm-12">Contraseña:</label> 
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <div class="form-group col-sm-12" id="contrasena-group">
                                <input type="password" name="txtContrasena" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12 pl-5">
                                <label class="col-sm-12">Correo Electrónico:</label>
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <div class="form-group col-sm-12" id="email-group">
                                <input type="text" name="txtCorreo" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <label class="col-sm-12">Rol:</label> 
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <div class="form-group col-sm-12" id="roles-group">
                                <select name="txtRol" class="form-control selectpicker">
                                    <option value="" ></option>
                                    <?php
                                        while($filarol=$resultado->fetch_array())
                                        {
                                            echo '<option value="'.$filarol['id_rol'].'">'.$filarol['nombre_rol'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12 pl-5">
                                <label class="col-sm-12">Documento de Identificación -Pueden ser DUI, Pasaporte-</label> 
                        </div>
                        <br>
                        <div class="pl-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline1" onclick="ShowHideElementD()">DUI</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline pl-5">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2" onclick="ShowHideElementP()">Pasaporte</label>
                            </div>
                        </div>
                        <br>
                        <div class="row col-sm-12 pl-5">
                                <label class="col-sm-12 OcultarD">DUI:</label>
                                <label class="col-sm-12 OcultarP">Pasaporte:</label> 
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <div class="form-group col-sm-12" id="">
                                <input type="text" name="txtDui" class="form-control OcultarD" require>
                            </div>
                            <div class="form-group col-sm-12" id="">
                                <input type="text" name="txtPasaporte" class="form-control OcultarP" require>
                            </div>
                        </div>
                        <div class="row col-sm-12 pl-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn boton"><i class="fas fa-sign-in-alt"></i>  Registrarse</button>
                            </div>
                        </div>
                    </form>
                    
            </div>
        </div>

        <div class="col-sm-4 main-section4 text-center"></div>
</body>
</html>