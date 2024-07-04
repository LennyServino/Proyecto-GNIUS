<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                <form action="index.php?acc=buscarUsoOfi" method="POST">
                    <div class="row col-sm-11">
                        <div class="form-group col-12">
                            <label class="label-titulos">
                                Uso de Oficinas
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <select class="form-control selectpicker" name="bEstado">
                                <option value="Todos">Todos los Usos</option>
                                <option value="En Uso">Oficinas en uso</option>
                                <option value="Finalizado">Uso finalizado</option>
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
        <div class="col-sm-11 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">Oficina</th>
                        <th scope="col">fecha/hora</th>
                        <th scope="col">Tiempo de Estadia</th>
                        <th scope="col">Acompañantes</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Persona</th>
                        <th scope="col" colspan="2">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaUsoOfi=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaUsoOfi['nomofi'].'</td>';
                                    echo '<td>'.$filaUsoOfi['fechUso'].' / '.$filaUsoOfi['horaUso'].'</td>';
                                    echo '<td>'.$filaUsoOfi['tiempUso'].'</td>';
                                    echo '<td>'.$filaUsoOfi['cantAcomp'].'</td>';
                                    echo '<td>'.$filaUsoOfi['estad'].'</td>';
                                    echo '<td>'.$filaUsoOfi['nomPer'].' '.$filaUsoOfi['apePer'].'</td>';
                                    echo '<td><a class="a-href pr-3" href="index.php?acc=vModEstadoUso&id='.$filaUsoOfi['codRes'].'&idPer='.$filaUsoOfi['codPer'].'"><i class="fas fa-edit"></i> Estado</a>
                                    <a class="a-href" href="index.php?acc=vDetalleUso&id='.$filaUsoOfi['codRes'].'"><i class="fas fa-edit"></i> Detalle</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>