    <div>
        <div class="col-sm-9 text-center main-section3">
            <table class="table table-hover tabla table-borderless">
                <?php  
                    if(isset($resultado3))
                    {
                        echo '<thead class="fondoT">';
                            echo '<tr>';
                                echo '<th scope="col" colspan="6" class="text-uppercase font-italic">'.'Proyecto: '.$resultado3['nomProyect'].'</th>';
                            echo '</tr>';
                        echo '</thead>';
                    }
                ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">N° de Reunión</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['num_r'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Fecha de Reunión</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['fch'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Tema</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['thm'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Actividades Realizadas</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['act_rea'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Comentarios del Mentor</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['com_men'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                        <th scope="col" colspan="6"><a class="a-href" href="index.php?acc=vMostrarBitacoras">
                        <i class="fas fa-arrow-circle-left"></i> Regresar</a></th>
                   </tr>
               </thead>
            </table>
        </div>

    </div>
</div>