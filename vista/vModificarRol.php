<!-- Este div pertenece a la estructura del menu -->
<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio del formulario -->
                <form action="index.php?acc=rolUpdated" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Asignar Roles
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Nombre:</label>
                        <label class="col-sm-6">Rol:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="user-group">
                            <input type="text" class="form-control" value="<?php echo $filaRol['nomPer'].' '.$filaRol['apePer']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6" id="usua-group">
                            <select class="form-control selectpicker" name="roles">
                                <?php
                                if(@$resultado2)
                                {  
                                    while ($filaNRol2=$resultado2->fetch_array()) 
                                    {
                                        echo "<option value=".$filaNRol2['codRol'].">".$filaNRol2['nomRol']."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="idUsuario" value="<?php echo $filaRol['codPer']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnAsignar"><i class="fas fa-check-circle"></i>  Asignar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Div cierre de la estructura del menu --> 
    </div>

<!-- Este div cierre pertenece al cierre del menu -->
</div>