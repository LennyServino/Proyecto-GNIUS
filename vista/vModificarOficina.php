<!-- Este div pertenece a la estructura del menu -->
<div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-5 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio del formulario -->
                <form action="index.php?acc=ofiUpdated" method="POST">
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
                            <input type="text" class="form-control" name="nomOficina" value="<?php echo $filaOfi['nombre']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col sm-12">Capacidad de Personas:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="usuarios-group">
                            <input type="number" class="form-control" name="capOficinas" value="<?php echo $filaOfi['capacidad_de_personas']; ?>">
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="">
                            <input type="hidden" class="form-control" name="idOficina" value="<?php echo $filaOfi['id_oficina']; ?>">
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