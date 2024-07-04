<!-- Este div pertenece a la estructura del menu -->
<div>
        <div class="col-sm-8 main-section3 text-center">
            <div class="modal-content">
                
                    <form name="frmEmprendedor" action="index.php?acc=modif_perfil" method="POST">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Modificar Datos Personales
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="">
                                <input name="txtIdPersona" type="hidden" class="form-control" value="<?php echo $filaperfil['id_persona']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="">
                                <input name="txtIdUsuario" type="hidden" class="form-control" value="<?php echo $filaperfil['id_usuario']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Nombres:</label>
                                <label class="col-sm-6">Apellidos:</label>   
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtNombres" type="text" class="form-control" value="<?php echo $filaperfil['nombres']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtApellidos" type="text" class="form-control" value="<?php echo $filaperfil['apellidos']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Usuario:</label>
                                <label class="col-sm-6">Correo:</label> 
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtUsuario" type="text" class="form-control" value="<?php echo $filaperfil['nombre_usuario']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="email-group">
                                <input type="text" name="txtCorreo" class="form-control" value="<?php echo $filaperfil['correo']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Edad:</label>  
                                <label class="col-sm-6">Teléfono:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtEdad" type="text" class="form-control" value="<?php echo $filaperfil['edad']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="telefono-group">
                                <input name="txtTelefono" type="text" class="form-control" value="<?php echo $filaperfil['telefono']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Grado Academico:</label>
                                <label class="col-sm-6">Dirección:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="grado-group">
                                <input name="txtGradoAca" type="text" class="form-control" value="<?php echo $filaperfil['grado_academico']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="lugar-group">
                                <input name="txtDireccion" type="text" class="form-control" value="<?php echo $filaperfil['direccion']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-6">Vinculo UTEC:</label>
                            <label class="col-sm-6">Profesión:</label> 
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="grado-group">
                                <input name="txtVinculo" type="text" class="form-control" value="<?php echo $filaperfil['vinculo_utec']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="profesion-group">
                                <input name="txtProfesion" type="text" class="form-control" value="<?php echo $filaperfil['profesion']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Descripción de habilidades y destrezas personales:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtDesHabilidades" class="form-control" rows="4" id="comment"><?php echo $filaperfil['habilidades']; ?></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">¿Posse Trabajo?</label> 
                                <label class="col-sm-6">Nombre de la Empresa:</label>
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="pregunta-group">
                                <input name="txtTrabaja" type="text" class="form-control" value="<?php echo $filaperfil['trabaja']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="empresa-group">
                                <input name="txtNombreEmp" type="text" class="form-control" value="<?php echo $filaperfil['nombre_empresa']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12"> 
                                <label class="col-sm-6">Puesto de Trabajo:</label>
                                <label class="col-sm-6">Teléfono de Trabajo:</label>
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="profesion-group">
                                <input name="txtPuesto" type="text" class="form-control" value="<?php echo $filaperfil['puesto_trabajo']; ?>">
                            </div>
                            <div class="form-group col-sm-6" id="telefono-group">
                                <input name="txtTelTrabajo" type="text" class="form-control" value="<?php echo $filaperfil['telefono_empresa']; ?>">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Descripción del Puesto de Trabajo:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtDesPuesto" class="form-control" rows="4" id="comment"><?php echo $filaperfil['descripcion_puesto']; ?></textarea>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Modificar</button>
                    </form>
            </div>
        </div>
<!-- Este div cierre pertenece al cierre del menu -->
</div>