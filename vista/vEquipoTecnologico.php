    <!-- Este div pertenece a la estructura del menu -->
    <div>
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                <!-- inicio del formulario -->
                <form action="index.php?acc=addEquiTec" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Equipo Tecnologico
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Nombre del Equipo:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="tecnologia-group">
                            <input type="text" class="form-control" name="nomEquipo">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Descripcion:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="pregunta-group">
                            <textarea id="Desc_Equipo" rows="4" class="form-control" name="descEquipo"></textarea>
                        </div>
                    </div>
                    <!--<div class="row col-sm-12">
                        <label class="col-sm-12">Cantidad:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="pregunta-group">
                            <input type="number" class="form-control" min="1" name="cantEquipo">
                        </div>
                    </div>-->
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnIngresar"><i class="fas fa-check-circle"></i>  Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- codigo de la tabla -->
        <div class="col-sm-8 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php
                        if(@$resultado)
                        {
                            while($filaTec=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<th scope="row">'.$filaTec['id_equipo_tec'].'</th>';
                                    echo '<td>'.$filaTec['nombre_equipo'].'</td>';
                                    echo '<td>'.$filaTec['descripcion'].'</td>';
                                    echo '<td>'.$filaTec['estado'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vEquipoModif&id='.$filaTec['id_equipo_tec'].'"><i class="fas fa-edit"></i> Modificar</a></td>';
                                echo '</tr>';
                            }
                        }  
                    ?>
                </tbody>
            </table>
        </div>
        
    <!-- Div cierre del menu -->        
    </div>

<!-- Este div cierre pertenece al cierre del menu -->
</div>