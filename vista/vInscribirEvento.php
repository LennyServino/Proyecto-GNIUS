    <!-- Este div pertenece a la estructura del menu -->
    <div> 
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                
                    <form name="frmInscribirEvento" action="index.php?acc=insert_ins_evento" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Inscribirse a Evento
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Evento:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                            <div class="form-group col-sm-12" id="equipotec-group">
                                <select name="sltEvento" class="form-control selectpicker">
                                    <option value=""></option>
                                    <?php
                                        while($fila=$resultado->fetch_array())
                                        {
                                            echo '<option value="'.$fila['codigo'].'">'.$fila['nom_eve'].' | '.$fila['fch'].' | '.$fila['hrs'].' | '.'DISPONIBLES: '.$fila['cant'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Inscribirse</button>
                            </div>  
                        </div>
                    </form>
            </div>
        </div>
        <!-- codigo de la tabla -->
        <div class="col-sm-9 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col" colspan="7">Lista de Eventos Inscritos</th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <!--<th scope="col">#</th>-->
                        <th scope="col">Nombre Evento</th>
                        <th scope="col">Tipo de Evento</th>
                        <th scope="col">Fecha del Evento</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Lugar del Evento</th>
                        <th scope="col">Fecha de Inscripción</th>
                    </tr>
                </thead>
                <?php
                while ($filaevento=$inscripcion->fetch_array())
                {
                    echo '<tbody class="fondoContenido">';
                        echo '<tr>';
                            //echo '<th scope="row">'.$filaevento['id_inscripcion'].'</th>';
                            echo '<td>'.$filaevento['nom_eve'].'</td>';
                            echo '<td>'.$filaevento['nom_tip'].'</td>';
                            echo '<td>'.$filaevento['fch'].'</td>';
                            echo '<td>'.$filaevento['hrs'].'</td>';
                            echo '<td>'.$filaevento['lug_eve'].'</td>';
                            echo '<td>'.$filaevento['fch_ins'].'</td>';
                        echo '</tr>';
                    echo '</tbody>';
                }
                ?>
            </table>
        </div><!-- Termina contenido -->
    </div><!-- Div cierre del menu -->
<!-- Este div cierre pertenece al cierre del menu -->
</div>  