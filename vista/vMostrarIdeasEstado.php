    <div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-5 main-section4 text-center">
            <div class="modal-content">
                <div class="row col-sm-11">
                    <div class="form-group col-12">
                        <label class="label-titulos">
                            Ideas de Negocio
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inicio tabla -->
        <div class="col-sm-7 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col">Nombre Idea</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="fondoContenido">
                    <?php  
                        if(@$resultado)
                        {
                            while($filaIdea=$resultado->fetch_array())
                            {
                                echo '<tr>';
                                    echo '<td>'.$filaIdea['proyecto'].'</td>';
                                    echo '<td>'.$filaIdea['estado'].'</td>';
                                    echo '<td><a class="a-href" href="index.php?acc=vModEstadoIdea&id='.$filaIdea['codigo'].'"><i class="fas fa-edit"></i> Estado</a></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>