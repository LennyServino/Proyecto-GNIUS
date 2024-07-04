<div>
        <div class="col-sm-9 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <?php  
                    if(isset($filaIdea))
                    {
                        echo '<thead class="fondoT">';
                            echo '<tr>';
                                echo '<th scope="col" colspan="6" class="text-uppercase font-italic">'.'Proyecto: '.$filaIdea['nomProyect'].'</th>';
                            echo '</tr>';
                        echo '</thead>';
                    }
                ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Razon Social</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$filaIdea['rSocial'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Fecha de Inicio</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$filaIdea['fechInicio'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Estado</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$filaIdea['estad'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                        <th scope="col" colspan="6"><a class="a-href" href="index.php?acc=inicioConsultor">
                        <i class="fas fa-arrow-circle-left"></i> Regresar</a></th>
                   </tr>
               </thead>
            </table>
        </div>

    </div>
</div>