    <!-- Este div pertenece a la estructura del menu -->
    <div>
        <!-- Inicio del contenido de la pagina -->
        <div class="col-sm-6 main-section3 text-center">
            <div class="modal-content">
                <!-- Inicio Formulario -->
                <form action="index.php?acc=addMiembros" method="POST">
                    <div class="row col-sm-12">
                        <div class="form-group col-11">
                            <label class="label-titulos">
                                Inscribirse a Idea de Negocio
                            </label>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <label class="col-sm-12">Idea de Negocio:</label>
                    </div>
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-12" id="user-group">
                            <select class="form-control selectpicker" name="sltEquipo">
                                <?php  
                                    while($filaEquipo=$resultado->fetch_array())
                                    {
                                        echo "<option value=".$filaEquipo['cod'].">".$filaEquipo['nom_pro'].' '.$filaMentor['apellidos']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-12">
                            <button type="submit" class="btn boton" name="btnInscribirse"><i class="fas fa-check-circle"></i>  Inscribirse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    <!-- Div cierre de la estructura del menu -->
    </div>

<!-- Este div cierre pertenece al cierre del menu -->
</div>