<!-- Este div pertenece a la estructura del menu -->
<div> 
        <!-- Aqui inicia el contenido de la pagina -->
        <div class="col-sm-7 main-section3 text-center">
            <div class="modal-content">
                
                    <form name="frmIdea" action="index.php?acc=insert_idea" method="POST" enctype="multipart/form-data">
                        <div class="row col-sm-12">
                            <div class="form-group col-12">
                                <label class="label-titulos">
                                    Información Idea de Negocio
                                </label>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-12">Nombre del Proyecto:</label>  
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <input type="text" name="txtNombreProyecto" class="form-control">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Tipo Idea de Negocio en Forma Jurídica:</label>
                                <label class="col-sm-6">Tipo de Servicio:</label>   
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="tipo-group">
                                <select name="sltTipoJuridica" class="form-control selectpicker">
                                    <option value="" ></option>
                                    <?php
                                            while($filajuridica=$juridica->fetch_array())
                                            {
                                                echo '<option value="'.$filajuridica['codigo'].'">'.$filajuridica['descripcion'].'</option>';
                                            }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6" id="tipo-group">
                                <select name="sltTipoServicio" class="form-control">
                                    <option value="" ></option>
                                    <?php  
                                        while($filajuridica2=$servicio->fetch_array())
                                        {
                                            echo '<option value="'.$filajuridica2['codigo'].'">'.$filajuridica2['descripcion'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Razón Social que da origen al negocio:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtRazonSocial" class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Oportunidad que da origen al negocio:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtOportunidad" class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">Fecha de Inicio</label>
                                <label class="col-sm-6">¿Cuenta con equipo propio?</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="fecha-group">
                                <input name="txtFecha" type="date" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="pregunta-group">
                                <select name="sltEquipoPropio" class="form-control selectpicker">
                                    <option value=""></option>
                                    <option value="Si" >Si</option>
                                    <option value="No" >No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <label class="col-sm-12">Descripción de su equipo tecnologico:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-12" id="mensaje-group">
                                <textarea name="txtDescripcionEquipo" class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row col-sm-12">
                                <label class="col-sm-6">¿Cuántas horas semanales dedicará?</label>
                                <label class="col-sm-6">Plan de Negocio:</label>  
                        </div>
                        <div class="row col-12">
                            <div class="form-group col-sm-6" id="tiempo-group">
                                <input name="txtHoras" type="text" class="form-control">
                            </div>
                            <div class="form-group col-sm-6" id="curriculum-group">
                                <input name="file" type="file" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn boton"><i class="fas fa-check-circle"></i>  Ingresar</button>
                    </form>
            </div>
        </div>
    </div><!-- Div cierre del menu -->

<!-- Este div cierre pertenece al cierre del menu -->
</div> 