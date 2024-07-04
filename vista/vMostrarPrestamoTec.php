<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarPrestamo" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Prestamos de Equipo Tecnologico
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <select class="form-control selectpicker" name="bEstado">
                                <option value="Espera">Prestamos en espera</option>
                                <option value="Aceptado">Prestamos aceptados</option>
                                <option value="Todos">Todos los prestamos</option>
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
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Persona</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Tiempo</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaPrestaTec=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaPrestaTec['nomTec'].'</td>';
                                    echo '<td>'.$filaPrestaTec['nomPer'].' '.$filaPrestaTec['apePer'].'</td>';
                                    echo '<td>'.$filaPrestaTec['estadPres'].'</td>';
                                    echo '<td>'.$filaPrestaTec['fechPres'].'</td>';
                                    echo '<td>'.$filaPrestaTec['horaPres'].'</td>';
                                    echo '<td>'.$filaPrestaTec['tiempoPres'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vModEstadoPresta&id='.$filaPrestaTec['codPres'].'&idPer='.$filaPrestaTec['codPer'].'"><i class="fas fa-edit"></i> Estado</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>