<!-- Este div pertenece a la estructura del menu -->
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-5 main-section4 text-center">
            <div class="modal-content">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Bitácoras del Proyecto
                                </label>
                            </div>
                        </div>
            </div>
        </div>
            <div class="col-sm-9 text-center main-section3">
                <table class="table table-hover tabla table-borderless">
                    <thead class="fondoT">
                        <tr>
                            <th scope="col" colspan="6" class="text-uppercase font-italic">Proyecto: <?php echo $resultado2['nom_pro']; ?></th>
                        </tr>
                    </thead>
                    <thead class="fondoT">
                        <tr>
                            <th scope="col">N° Reunión</th>
                            <th scope="col">Fecha de Reunión</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Actividades Realizadas</th>
                            <th scope="col">Comentarios del Mentor</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <?php
                    while($filabitacora=$resultado->fetch_array())
                    {
                        echo '<tbody class="fondoContenido">';
                            echo '<tr>';
                                echo '<th scope="row">'.$filabitacora['num_re'].'</th>';
                                echo '<td>'.$filabitacora['fch'].'</td>';
                                echo '<td>'.$filabitacora['thm'].'</td>';
                                echo '<td>'.$filabitacora['actividades'].'</td>';
                                echo '<td>'.$filabitacora['comentario'].'</td>';
                                /*$ventana="window.open('index.php?acc=detabita&cod=".$filabitacora["id_bitacora"]."','','top=100,left=400,width=800,height=600')";*/
                                echo '<td><a class="a-href" href="index.php?acc=detabita2&cod='.$filabitacora['cod_bit'].'"><i class="fas fa-info-circle"></i>Detalles</a></td>';
                            echo '</tr>';
                        echo '</tbody>';
                    }
                    ?>
                </table>
            </div>
        </div><!-- Div cierre del menu -->

<!-- Este div cierre pertenece al cierre del menu -->
</div>