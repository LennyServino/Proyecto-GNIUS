    <!-- Este div pertenece a la estructura del menu -->
    <div> 
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section3 text-center">
            <div class="modal-content">
                <!-- inicio del formulario -->
                <form name="frmEventos" action="index.php?acc=addEvent" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Crear Evento
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Nombre Evento:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="user-group">
                            <input type="text" class="form-control" name="nombreEvento">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Hora del Evento:</label>
                        <label class="col-sm-6">Fecha del Evento:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="clock-group">
                            <input type="time" class="form-control" name="horaEvento">
                        </div>
                        <div class="form-group col-sm-6" id="fecha-group">
                            <input type="date" class="form-control" name="fechaEvento">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Lugar del Evento:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="lugar-group">
                            <textarea id="ubi_evento" rows="4" class="form-control" name="ubicacionEvento"></textarea>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Cantidad de Asistentes:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="usuarios-group">
                            <input type="text" class="form-control" name="cantAsistentes">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Estado:</label>
                        <label class="col-sm-6">Tipo de Evento:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="pregunta-group">
                            <select class="form-control selectpicker" name="estadoEvento">
                                <option data-content="" value="Activo">Activo</option>
                                <option data-content="" value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6" id="pregunta-group">
                            <select class="form-control selectpicker" name="tipoEvento">
                                <?php
                                    while ($filaTipoEv=$resultado->fetch_array()) 
                                    {
                                        echo "<option value=".$filaTipoEv['id_tipo_evento'].">".$filaTipoEv['nombre_tipo']."</option>";
                                    }  
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="btnInsertar" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                    <br>    
                    <a class="a-href" href="index.php?acc=vEventosTodos"><i class="fas fa-edit"></i> Ver Eventos</a>
                    <br>
                </form>

            </div>
        </div><!-- Termina contenido -->

    </div><!-- Div cierre del menu -->

<!-- Este div cierre pertenece al cierre del menu -->
</div>  