<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarBitacora" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Bitácoras
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <select class="form-control selectpicker" name="equipo">
                                <option value="Todos">Todos los Equipos</option>
                                <?php
                                    while($filaIdeas=$resultado->fetch_array())
                                    {
                                        echo '<option value="'.$filaIdeas['codTeam'].'">'.$filaIdeas['nomProyect'].'</option>';
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
                <?php  
                    if(isset($resultado3))
                    {
                        echo '<thead class="fondoT">';
                            echo '<tr>';
                                echo '<th scope="col" colspan="6">'.'Proyecto: '.$resultado3['nomProyect'].'</th>';
                            echo '</tr>';
                        echo '</thead>';
                    }
                ?>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">N° Reunión</th>
                        <th scope="col">Fecha de Reunión</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Equipo</th>
                        <th scope="col">Actividades Realizadas</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filabitacora=$resultado2->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<th scope="row">'.$filabitacora['num_re'].'</th>';
                                    echo '<td>'.$filabitacora['fch'].'</td>';
                                    echo '<td>'.$filabitacora['thm'].'</td>';
                                    echo '<td>'.$filabitacora['cod_equi'].'</td>';
                                    echo '<td>'.$filabitacora['actividades'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vDetalleBitacora2&cod='.$filabitacora['cod_bit'].'">
                                    <i class="fas fa-info-circle"></i>Detalles</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>