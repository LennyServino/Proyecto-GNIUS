    <!-- Este div pertenece a la estructura del menu -->
    <div> 
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                
                    <form name="frmPrestarEquipo" action="index.php?acc=insert_pres_equipo" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Prestamo de Equipos
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="txtEstado" value="Espera">
                        </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Equipo Tecnologico:</label> 
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12" id="equipotec-group">
                                <select name="sltEquipo" name="sltEquipo" class="form-control selectpicker">
                                    <option value=""></option>
                                    <?php
                                        while($fila=$resultado->fetch_array())
                                        {
                                            echo '<option value="'.$fila['codigo'].'">'.$fila['nom_equi'].' | '.$fila['des'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-6">Fecha:</label>
                            <label class="col-sm-6">Hora:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input name="txtFecha" type="date" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="tiempo-group">
                                <input name="txtHora" type="time" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Tiempo de Uso:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="tiempo-group">
                                <input name="txtTiempo" type="text" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                    </form>
            </div>
        </div>
        <!-- codigo de la tabla -->
    <div class="col-sm-9 text-center main-section3">
        <table class="table table-hover tabla table-borderless">
            <thead class="fondoT">
                <tr>
                    <th scope="col" colspan="6">Lista de Equipo Tecnologico Prestado</th>
                </tr>
            </thead>
            <thead class="fondoT">
                <tr>
                    <!--<th scope="col">#</th>-->
                    <th scope="col">Equipo Tecnologico</th> 
                    <th scope="col">Fecha de Prestamo</th>
                    <th scope="col">Hora de Prestamo</th>
                    <th scope="col">Tiempo de Uso</th>
                    <th scope="col">Estado Préstamo</th>
                </tr>
            </thead>
            <?php
                while($filaevento=$resultado2->fetch_array())
                {
                    echo '<tbody class="fondoContenido">';
                        echo '<tr>';
                            //echo '<th scope="row">'.$filaevento['id_prestamo'].'</th>';
                            echo '<td>'.$filaevento['nom_e'].'</td>';
                            echo '<td>'.$filaevento['fch'].'</td>';
                            echo '<td>'.$filaevento['hrs'].'</td>';
                            echo '<td>'.$filaevento['tmp_uso'].'</td>';
                            echo '<td>'.$filaevento['est'].'</td>';
                        echo '</tr>';
                    echo '</tbody>';
                }
                ?>
        </table>
    </div>
</div><!-- Div cierre del menu -->

<!-- Este div cierre pertenece al cierre del menu -->
</div> 