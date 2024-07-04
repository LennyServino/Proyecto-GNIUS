<!-- Este div pertenece a la estructura del menu -->
<div>
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                
                    <form action="index.php?acc=bitaUpdated" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Modificar Bitácora
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12" id="">
                                <input type="hidden" class="form-control" name="txtIdBitacora" value="<?php echo $filabitacora['cod_bit']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">N° Reunión:</label>
                                <label class="col-sm-6">Fecha:</label> 
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="mensaje-group">
                                <input name="txtReunion" type="number" class="form-control" value="<?php echo $filabitacora['num_r']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input name="txtFecha" type="date" class="form-control" value="<?php echo $filabitacora['fch']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Tema:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <input name="txtTema" type="text" class="form-control" value="<?php echo $filabitacora['thm']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Actividades Realizadas:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="curriculum-group">
                                <textarea name="txtActividades" class="form-control" rows="4" id="comment"><?php echo $filabitacora['act_rea']; ?></textarea>
                            </div>
                        </div>
                        <button name="btnModificar" type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Modificar</button>
                    </form>
            </div>
        </div>
