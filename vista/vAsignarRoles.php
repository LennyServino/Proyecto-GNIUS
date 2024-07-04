    

        <div class="col-sm-4 main-section3 text-center">
            <div class="row col-sm-12 tabla">
                <div class="form-group col-11">
                    <label class="label-titulos">
                        Asignar Roles
                    </label>
                </div>
            </div>
        </div>
        <!-- Inicio Tabla -->
        <div class="col-sm-7 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaRol=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<th scope="row">'.$filaRol['id_persona'].'</th>';
                                    echo '<td>'.$filaRol['nombres'].'</td>';
                                    echo '<td>'.$filaRol['apellidos'].'</td>';
                                    echo '<td>'.$filaRol['nombre_rol'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vModificarRol&id='.$filaRol['id_usuario'].'"><i class="fas fa-edit"></i> Asignar</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    <!-- Div cierre de la estructura del menu --> 
    </div>

<!-- Este div cierre pertenece al cierre del menu -->
</div>