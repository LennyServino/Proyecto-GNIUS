    <!-- Este div pertenece a la estructura del menu -->
    <div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio del formulario -->
                <form action="index.php?acc=addOficina" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-11">
                            <label class="label-titulos">
                                Oficinas
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Nombre:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="empresa-group">
                            <input type="text" class="form-control" name="nomOficina">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col sm-12">Capacidad de Personas:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="usuarios-group">
                            <input type="number" class="form-control" name="capOficinas">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnIngresar"><i class="fas fa-check-circle"></i>  Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- codigo de la tabla -->
        <div class="col-sm-7 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaOfi=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<th scope="row">'.$filaOfi['id_oficina'].'</th>';
                                    echo '<td>'.$filaOfi['nombre'].'</td>';
                                    echo '<td>'.$filaOfi['capacidad_de_personas'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vOficinaModif&id='.$filaOfi['id_oficina'].'"><i class="fas fa-edit"></i> Modificar</a></td>';
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