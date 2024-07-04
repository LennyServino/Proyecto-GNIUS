<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarBitacoras" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Bitácoras de Equipos Asignados
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tipo-group">
                            <select class="form-control selectpicker" name="equipo">
                                <option value="Todos">Todas las Bitácoras</option>
                                <?php
                                    while($filaIdeas=$resultado->fetch_array())
                                    {
                                        echo '<option value="'.$filaIdeas['cod_equip'].'">'.$filaIdeas['nom_pro'].'</option>';
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
        <div class="col-sm-9 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">N° Reunión</th>
                        <th scope="col">Fecha de Reunión</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Actividades Realizadas</th>
                        <th scope="col">Comentarios del Mentor</th>
                        <th scope="col" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaBita=$resultado2->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaBita['num_r'].'</td>';
                                    echo '<td>'.$filaBita['fch'].'</td>';
                                    echo '<td>'.$filaBita['thm'].'</td>';
                                    echo '<td>'.$filaBita['act'].'</td>';
                                    echo '<td>'.$filaBita['com_men'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=detabitaMentor&cod='.$filaBita['cod_bit'].'"><i class="fas fa-info-circle"></i>Detalles</a></td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vBitaModifMentor&cod='.$filaBita['cod_bit'].'"><i class="fas fa-edit"></i> Comentar</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>