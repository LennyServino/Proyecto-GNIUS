    <div>
        <!-- Inicia el contenido de la pagina -->
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio del formulario -->
                <form action="index.php?acc=presUpdated" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Estado Prestamo
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Nombre del solicitante</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="user-group">
                            <input type="text" class="form-control" name="nomPersona" value="<?php echo $filaPrestamo['nomPer'].' '.$filaPrestamo['apePer']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Equipo solicitado</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <input type="text" class="form-control" name="nomEquipo" value="<?php echo $filaPrestamo['nomTec']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Idea que pertenece</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="pregunta-group">
                            <input type="text" class="form-control" name="nomIdea" value="<?php echo $filaPersona['nomProyect']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Fecha</label>
                        <label class="col-sm-6">Hora</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="fecha-group">
                            <input type="text" class="form-control" name="fechaPres" value="<?php echo $filaPrestamo['fechPres']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6" id="clock-group">
                            <input type="text" class="form-control" name="horaPres" value="<?php echo $filaPrestamo['horaPres']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Tiempo de prestamo</label>
                        <label class="col-sm-6">Estado</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="clock-group">
                            <input type="text" class="form-control" name="timePres" value="<?php echo $filaPrestamo['tiempoPres']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6" id="pregunta-group">
                            <select class="form-control selectpicker" name="bEstado">
                                <option value="Espera">Espera</option>
                                <option value="Aceptado">Aceptado</option>
                                <option value="Rechazado">Rechazado</option>
                                <option value="Devuelto">Devuelto</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="idPrestamo" value="<?php echo $filaPrestamo['codPres']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="idTec" value="<?php echo $filaPrestamo['codTec']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnMostrar"><i class="fas fa-check-circle"></i>  Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-9 text-center main-section3"></div>

    </div>
</div>