    <!-- Este div pertenece a la estructura del menu -->
    <div> 
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                
                    <form name="frmIngresarBitacora" action="index.php?acc=insert_bitacora" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Bitácora
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">N° Reunión:</label>
                                <label class="col-sm-6">Fecha:</label> 
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="mensaje-group">
                                <input name="txtNumReunion" type="number" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input name="txtFecha" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Tema:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <input name="txtTema" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Actividades Realizadas:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="curriculum-group">
                                <textarea name="txtActividades" class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                            </div>    
                        </div>
                    </form>
            </div>
        </div>
        <!-- codigo de la tabla -->
        <div class="col-sm-10 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col" colspan="7" class="text-uppercase font-italic">Proyecto: <?php echo $resultado2['nom_pro']; ?></th>
                    </tr>
                </thead>
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
                            /*$ventana="window.open('index.php?acc=detabita&cod=".$filabitacora["cod_bit"]."','','top=100,left=400,width=800,height=600')";*/
                            echo '<td><a class="a-href" href="index.php?acc=detabita&cod='.$filabitacora['cod_bit'].'"><i class="fas fa-info-circle"></i>Detalles</a></td>';
                            echo '<td><a class="a-href" href="index.php?acc=vBitacoraModif&id='.$filabitacora['cod_bit'].'"><i class="fas fa-edit"></i> Modificar</a></td>';
                        echo '</tr>';
                    echo '</tbody>';
                }
                ?>
            </table>
        </div>
    </div><!-- Div cierre del menu -->

<!-- Este div cierre pertenece al cierre del menu -->
</div>