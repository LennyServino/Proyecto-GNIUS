<!-- Este div pertenece a la estructura del menu -->
<div>
        <div class="col-sm-7 main-section3 text-center">
            <div class="modal-content">
                
                    <form name="frmEmprendedor" action="index.php?acc=insert_emp" method="POST" enctype="multipart/form-data">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Información Personal
                                </label>
                            </div>
                            <div class="form-group col-12">
                                <label>INDICACIONES: Todos los campos marcados con (✱) son campos obligatorios, los campos relacionados al trabajo deberán 
                                ser todos completados dependiendo de la respuesta a la pregunta ¿Posee Trabajo?. La Hoja de Vida tiene que ser 
                                en formato PDF o Word.</label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Nombres:✱</label>
                                <label class="col-sm-6">Apellidos:✱</label>   
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtNombres" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtApellidos" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Edad:✱</label>
                                <label class="col-sm-6">NIT:✱</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="user-group">
                                <input name="txtEdad" type="number" class="form-control" min="18" max="50" required>
                            </div>
                            <div class="form-group col-sm-6" id="pasaporte-group">
                                <input name="txtNit" type="text" class="form-control" placeholder="ej: 0520-050698-288-0" min="17" max="17" required>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Nacionalidad:✱</label>
                                <label class="col-sm-6">Género:✱</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="nacionalidad-group">
                                <input name="txtNacionalidad" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6" id="genero-group">
                                <select name="txtGenero" class="form-control selectpicker" required>
                                    <option value="" ></option>
                                    <option value="Masculino" >Maculino</option>
                                    <option value="Femenino" >Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Lugar de Nacimiento:✱</label>
                                <label class="col-sm-6">Fecha de Nacimiento:✱</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="lugar-group">
                                <input name="txtLugarNac" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input name="txtFechaNac" type="date" class="form-control" required>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Teléfono/Celular:✱</label>
                                <label class="col-sm-6">Dirección:✱</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="telefono-group">
                                <input name="txtTelefono" type="text" class="form-control" placeholder="ej: 2134-6789" min="9" max="9" required>
                            </div>
                            <div class="form-group col-sm-6" id="lugar-group">
                                <input name="txtDireccion" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Grado Académico:✱</label>
                                <label class="col-sm-6">Profesión:✱</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="grado-group">
                                <input name="txtGradoAca" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6" id="profesion-group">
                                <input name="txtProfesion" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Descripción de habilidades y destrezas personales:✱</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtDesHabilidades" class="form-control" rows="4" id="comment" required></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Vínculo UTEC:✱</label>
                                <label class="col-sm-6">Hoja de Vida:✱</label>
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="grado-group">
                                <input name="txtVinculo" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6" id="curriculum-group">
                                <input name="file" type="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-6">¿Posse Trabajo?✱</label>
                            <label class="col-sm-6">Nombre de la Empresa:</label>  
                        </div>
                        <div class="row col-12"> 
                            <div class="form-group col-sm-6" id="pregunta-group">
                                <select name="sltPregunta" class="form-control selectpicker" required>
                                    <option value="" ></option>
                                    <option value="Si" >Si</option>
                                    <option value="No" >No</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6" id="empresa-group">
                                <input name="txtNombreEmp" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-6">Puesto de Trabajo:</label>
                            <label class="col-sm-6">Teléfono de la Empresa:</label>      
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="profesion-group">
                                <input name="txtPuesto" type="text" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="telefono-group">
                                <input name="txtTelTrabajo" type="text" class="form-control" placeholder="ej: 2134-6789" min="9" max="9">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Descripción del Puesto de Trabajo:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtDesPuesto" class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                    </form>
            </div>
        </div>
<!-- Este div cierre pertenece al cierre del menu -->
</div>