
   <!-- Este div pertenece a la estructura del menu -->
   <div>
       <!-- Inicio del contenido de la pagina -->
        <div class="modal-dialog text-center">
            <div class="col-sm-12 main-section">
                <div class="modal-content">
                <div class="col-12">
                    <label for="" class="label-titulos pr-5">Cambio Estado Evento</label><br>
                </div>
                <br><br>
                        <form name="frmLogin" action="index.php?acc=eventUpdated" method="POST" class="col-12" autocomplete="off">
                            <div class="form-group" id="mensaje-group">
                                <input type="text" name="txtEvento" class="form-control" value="<?php echo $filaEvent['nom_eve']?>" readonly>
                            </div>
                            <div class="form-group" id="pregunta-group">
                                <select class="form-control selectpicker" name="bEstado">
                                    <option value="Inactivo">Inactivo</option>
                                    <option value="Activo">Activo</option>
                                </select>
                            </div>
                            <div class="form-group" id="contrasena-group">
                                <input type="text" name="idEvent" class="form-control" value="<?php echo $filaEvent['codigo']?>" readonly>
                            </div>
                            <div>
                                <?php
                                    $confirmar="return confirm('¿Esta seguro de cambiar?');";  
                                    echo '<button type="submit" name="btnLogin" class="btn boton" onclick="'.$confirmar.'"><i class="fas fa-sign-in-alt"></i>  Modificar</button>';
                                ?>
                            </div>
                            <a class="a-href" href="index.php?acc=vEventosTodos"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                        </form>
                        
                        
                </div>
            </div>
        </div>

    <!-- Div cierre del menu -->     
    </div>
<!-- Este div cierre pertenece al cierre del menu -->
</div>