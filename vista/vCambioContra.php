
   <!-- Este div pertenece a la estructura del menu -->
   <div>
       <!-- Inicio del contenido de la pagina -->
        <div class="modal-dialog text-center">
            <div class="col-sm-9 main-section">
                <div class="modal-content">
                <div class="col-9">
                    <label for="" class="label-titulos">Cambio Contraseña</label><br>
                </div>
                <br><br>
                        <form name="frmLogin" action="index.php?acc=passUpdated" method="POST" class="col-12" autocomplete="off">
                            <div class="form-group" id="contrasena-group">
                                <input type="text" name="txtClave" class="form-control" placeholder="Contraseña">
                            </div>
                            <div>
                                <?php
                                    $confirmar="return confirm('¿Esta seguro de cambiar?');";  
                                    echo '<button type="submit" name="btnLogin" class="btn boton" onclick="'.$confirmar.'"><i class="fas fa-sign-in-alt"></i>  Modificar</button>';
                                ?>
                            </div>
                            
                        </form>
                        
                </div>
            </div>
        </div>

    <!-- Div cierre del menu -->     
    </div>
<!-- Este div cierre pertenece al cierre del menu -->
</div>