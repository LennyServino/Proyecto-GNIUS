    <!-- Este div pertenece a la estructura del menu -->
    <div> 
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section4 text-center">
            <div class="modal-content">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Perfil de Usuario
                                </label>
                            </div>
                        </div>
            </div>
        </div>
        <!-- codigo de la tabla -->
        <div class="col-sm-7 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <thead class="fondoT">
                    <tr>
                        <th scope="col" colspan="2">
                            <?php echo $filaperfil['nombres'].' '.$filaperfil['apellidos']; ?> 
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">
                            USUARIO: <?php echo $filaperfil['nombre_usuario']; ?>
                        </th>
                        <th scope="col">
                            CORREO: <?php echo $filaperfil['correo']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">
                            EDAD: <?php echo $filaperfil['edad']; ?>
                        </th>
                        <th scope="col">
                            TELÉFONO: <?php echo $filaperfil['telefono']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">
                            DIRECCIÓN: <?php echo $filaperfil['direccion']; ?>
                        </th>
                        <th scope="col">
                            GRADO ACADÉMICO: <?php echo $filaperfil['grado_academico']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">
                            FECHA DE NACIMIENTO: <?php echo $filaperfil['fecha_nac']; ?>
                        </th>
                        <th scope="col">
                            VÍNCULO UTEC: <?php echo $filaperfil['vinculo_utec']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">
                            PROFESIÓN: <?php echo $filaperfil['profesion']; ?>
                        </th>
                        <th scope="col">
                            EMPRESA: <?php echo $filaperfil['nombre_empresa']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col">
                            TELÉFONO DE EMPRESA: <?php echo $filaperfil['telefono_empresa']; ?>
                        </th>
                        <th scope="col">
                            PUESTO DE TRABAJO: <?php echo $filaperfil['puesto_trabajo']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col" colspan="2">
                            DESCRIPCIÓN: <?php echo $filaperfil['descripcion_puesto']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <th scope="col" colspan="2">
                            HABILIDADES: <?php echo $filaperfil['habilidades']; ?>
                        </th>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <td scope="col" colspan="2">
                            <?php echo '<a class="a-href" href="index.php?acc=vPerfilModif&cod='.$filaperfil['id_persona'].'"><i class="fas fa-edit"></i> Editar Datos Personales</a>'; ?>
                        </td>
                    </tr>
                </thead>
                <thead class="fondoT">
                    <tr>
                        <td scope="col" colspan="2">
                            <a class="a-href" href="index.php?acc=vCambioPass"><i class="fas fa-edit"></i> Cambiar Contraseña</a>
                        </td>
                    </tr>
                </thead>
            </table>
    </div><!-- Div cierre del menu -->
<!-- Este div cierre pertenece al cierre del menu -->
</div>