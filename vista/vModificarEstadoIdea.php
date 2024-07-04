<!-- Este div pertenece a la estructura del menu -->
<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio del formulario -->
                <form action="index.php?acc=EstadoIdeaMod" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Modificar Estado Idea
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Nombre:</label>
                        <label class="col-sm-6">Estado:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="user-group">
                            <input type="text" class="form-control" value="<?php echo $filaIdea['proyecto'] ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6" id="usua-group">
                            <select class="form-control selectpicker" name="estado">
                                <option value="Finalizado">Inscrita</option>
                                <option value="En proceso">En proceso</option>
                                <option value="Finalizado">Finalizado</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="idIdea" value="<?php echo $filaIdea['codigo']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnModificar"><i class="fas fa-check-circle"></i>  Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Div cierre de la estructura del menu --> 
    </div>

<!-- Este div cierre pertenece al cierre del menu -->
</div>