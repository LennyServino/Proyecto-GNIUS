<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarEquipo" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Equipos de Proyecto
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
        <div class="col-sm-9 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">Persona</th>
                        <th scope="col">#Equipo</th>
                        <th scope="col">Proyecto</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaMiembros=$resultado2->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaMiembros['nomPer'].' '.$filaMiembros['apePer'].'</td>';
                                    echo '<td>'.$filaMiembros['codTeam'].'</td>';
                                    echo '<td>'.$filaMiembros['nomProyect'].'</td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>