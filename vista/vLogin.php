<?php
@$mensaje=$_SESSION['vsMensaje'];

?>
   <!-- Este div pertenece a la estructura del menu -->
   <div>
       <!-- Inicio del contenido de la pagina -->
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="recursos/imagenes/Logo_GNIUS.jpg" alt="">
                    </div>
                        <form name="frmLogin" action="index.php?acc=auten_log" method="POST" class="col-12">
                            <div class="form-group" id="user-group">
                                <input type="text" name="txtUsuario" class="form-control" placeholder="Correo electronico">
                            </div>
                            <div class="form-group" id="contrasena-group">
                                <input type="password" name="txtClave" class="form-control" placeholder="Contraseña">
                            </div>
                            <div>
                                <button type="submit" name="btnLogin" class="btn boton"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                            </div>
                            
                            <div>
                                <!--<a href="Cerrar_Session.php" class="a-href">¿Olvidaste tu contraseña?</a>-->
                                <a href="index.php?acc=vRegistrarse" class="a-href">Registrarse</a>
                                <br>
                                <!--<label ><?php echo '+'.$mensaje.'+' ?></label>-->
                            </div>
                        </form>
                        
                </div>
            </div>
        </div>

    <!-- Div cierre del menu -->     
    </div>
<!-- Este div cierre pertenece al cierre del menu -->
</div>