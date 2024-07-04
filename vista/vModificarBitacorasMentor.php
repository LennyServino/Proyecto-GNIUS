<!-- Este div pertenece a la estructura del menu -->
<div>
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                
                    <form action="index.php?acc=bitaUpdatedMentor" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Comentario del Mentor
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12" id="">
                                <input type="hidden" class="form-control" name="txtIdBitacora" value="<?php echo $consulta['cod_bit']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">N° Reunión:</label>
                                <label class="col-sm-6">Fecha:</label> 
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="mensaje-group">
                                <input name="txtReunion" type="number" class="form-control" value="<?php echo $consulta['num_r']; ?>" readonly>
                            </div>
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input name="txtFecha" type="date" class="form-control" value="<?php echo $consulta['fch']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Tema:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <input name="txtTema" type="text" class="form-control" value="<?php echo $consulta['thm']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Actividades Realizadas:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="curriculum-group">
                                <textarea name="txtActividades" class="form-control" rows="4" id="comment" readonly><?php echo $consulta['act']; ?></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Comentario Mentor:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="user-group">
                                <textarea name="txtComentario" class="form-control" rows="4" id="comment"><?php echo $consulta['com_men']; ?></textarea>
                            </div>
                        </div>
                        <button name="btnModificar" type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Comentar</button>
                    </form>
            </div>
        </div>
