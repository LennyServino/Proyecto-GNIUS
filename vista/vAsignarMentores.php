    <!-- Este div pertenece a la estructura del menu -->
    <div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-6 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio Formulario -->
                <form action="index.php?acc=addMentor" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Asignar Mentores
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-6">Mentor:</label>
                        <label class="col-sm-6">Idea de Negocio:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6" id="user-group">
                            <select class="form-control selectpicker" name="mentores">
                                <?php  
                                    while($filaMentor=$resultado->fetch_array())
                                    {
                                        echo "<option value=".$filaMentor['codper'].">".$filaMentor['nomPer'].' '.$filaMentor['apePer']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6" id="curriculum-group">
                            <select class="form-control selectpicker" name="ideas">
                                <?php  
                                    while($filaIdea=$resultado2->fetch_array())
                                    {
                                        echo "<option value=".$filaIdea['codTeam'].">".$filaIdea['nomProyect']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnAsignar"><i class="fas fa-check-circle"></i>  Asignar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Inicio Tabla -->
        <div class="col-sm-8 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col"># Equipo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Idea de Negocio</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado3)
                        {
                            while($filaIdeaMentor=$resultado3->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<th scope="row">'.$filaIdeaMentor['codTeam'].'</th>';
                                    echo '<td>'.$filaIdeaMentor['nomPer'].'</td>';
                                    echo '<td>'.$filaIdeaMentor['apePer'].'</td>';
                                    echo '<td>'.$filaIdeaMentor['nomProyect'].'</td>';
                                    $confirmar="return confirm('¿Esta seguro de Eliminar?');";
	                                echo '<td><a class="text-danger" href="index.php?acc=deleteMent&id='.$filaIdeaMentor['codMiembro'].'" onclick="'.$confirmar.'"><i class="fas fa-trash-alt"></i> Eliminar</a></td>';
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