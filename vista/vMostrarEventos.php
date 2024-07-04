<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarEvento" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Eventos
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <select class="form-control selectpicker" name="bEstado">
                                <option value="Activo">Eventos Activos</option>
                                <option value="Inactivo">Eventos Inactivos</option>
                                <option value="Todos">Todos los Eventos</option>
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
                        <th scope="col">Codigo</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha/Hora</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Estado</th>
                        <th scope="col" colspan="2">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaPrestaTec=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaPrestaTec['codigo'].'</td>';
                                    echo '<td>'.$filaPrestaTec['nom_eve'].'</td>';
                                    echo '<td>'.$filaPrestaTec['nom_tip'].'</td>';
                                    echo '<td>'.$filaPrestaTec['fch'].'/'.$filaPrestaTec['hrs'].'</td>';
                                    echo '<td>'.$filaPrestaTec['lug_eve'].'</td>';
                                    echo '<td>'.$filaPrestaTec['cant'].'</td>';
                                    echo '<td>'.$filaPrestaTec['est'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vModEstadoEvent&id='.$filaPrestaTec['codigo'].'"><i class="fas fa-edit"></i> Estado</a></td>';
                                    $confirmar="return confirm('¿Esta seguro de Eliminar?');";
	                                echo '<td><a class="text-danger" href="index.php?acc=deleteEvet&id='.$filaPrestaTec['codigo'].'" onclick="'.$confirmar.'"><i class="fas fa-trash-alt"></i> Eliminar</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>