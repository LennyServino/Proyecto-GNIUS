<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarEvento" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Inscritos a Eventos
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <select class="form-control selectpicker" name="evento">
                                <option value="Todos">Todos los Eventos</option>
                                <?php
                                    while($filaEvent=$resultado->fetch_array())
                                    {
                                        echo '<option value="'.$filaEvent['codigo'].'">'.$filaEvent['nom_eve'].' | '.$filaEvent['fch'].' | '.$filaEvent['hrs'].' | '.'UBICACION: '.$filaEvent['lug_eve'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnMostrar"><i class="fas fa-check-circle"></i>  Mostrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Inicio tabla -->
        <div class="col-sm-10 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">Persona</th>
                        <th scope="col">Inscripcion</th>
                        <th scope="col">Codigo Evento</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Fecha/Hora</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaInsEvent=$resultado2->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaInsEvent['nomPer'].' '.$filaInsEvent['apePer'].'</td>';
                                    echo '<td>'.$filaInsEvent['fechIns'].'</td>';
                                    echo '<td>'.$filaInsEvent['codEvent'].'</td>';
                                    echo '<td>'.$filaInsEvent['nomEvent'].'</td>';
                                    echo '<td>'.$filaInsEvent['ubiEvent'].'</td>';
                                    echo '<td>'.$filaInsEvent['fechEvent'].' / '.$filaInsEvent['horaEvent'].'</td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>