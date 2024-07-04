<!-- Este div pertenece a la estructura del menu -->
<div>
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                <!-- inicio del formulario -->
                <form action="index.php?acc=equiUpdated" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Equipo Tecnologico
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Nombre del Equipo:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <input type="text" class="form-control" name="nomEquipo" value="<?php echo $filaTec['nombre_equipo']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Descripcion:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="pregunta-group">
                            <textarea id="Desc_Equipo" rows="4" class="form-control" name="descEquipo"><?php echo $filaTec['descripcion']; ?></textarea>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="idEquipo" value="<?php echo $filaTec['id_equipo_tec']; ?>">
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