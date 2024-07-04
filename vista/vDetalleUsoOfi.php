<div>
        <div class="col-sm-6 text-center main-section3">
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
                       <th scope="col" colspan="6">Actividad a Realizar</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['actRea'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Fecha / Hora </th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                            echo '<td>'.$consulta['fechUso'].' / '.$consulta['horaUso'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Tiempo de Uso</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['tiempUso'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Cantidad de Acompañantes</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['cantAcomp'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Oficina</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                           echo '<td>'.$consulta['nomofi'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                       <th scope="col" colspan="6">Persona</th>
                   </tr>
               </thead>
               <?php
                   echo '<tbody class="fondoContenido">';
                       echo '<tr>';
                            echo '<td>'.$consulta['nomPer'].' '.$consulta['apePer'].'</td>';
                       echo '</tr>';
                   echo '</tbody>';
               ?>
               <thead class="fondoT">
                   <tr>
                        <th scope="col" colspan="6"><a class="a-href" href="index.php?acc=vMostrarUsoOfi">
                        <i class="fas fa-arrow-circle-left"></i> Regresar</a></th>
                   </tr>
               </thead>
            </table>
        </div>

    </div>
</div>