    <!-- Este div pertenece a la estructura del menu -->
    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="recursos/imagenes/fondo_GNIUS.jpg" class="d-block w-100" alt="..." style="height: 87vh;">
            </div>
            <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div> -->
            </div>
        </div>
        <!-- Seccion donde estan las ideas de negocio a mostrar -->
        <section class="container">   
            <div class="row">

                <?php  
                    while($filaIdeas=$resultado->fetch_array())
                    {
                        echo '<div class="col-sm-4 pt-5">';
                            echo '<div class="card fondoT" style="height: 285px;">';
                                echo '<div class="card-body text-center">';
                                    echo '<h5 class="card-title text-white">'.$filaIdeas['nomProyect'].'</h5>';
                                    echo '<hr>';
                                    echo '<div class="pb-4 text-center">';
                                        echo '<p class="card-text text-white">'.$filaIdeas['rSocial'].'</p>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="text-center">';
                                    echo '<a class="btn boton" href="index.php?acc=vDetalleIdea&id='.$filaIdeas['codIdea'].'"><i class="fas fa-check-circle"></i> Ver más</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
                

                

            </div>

            <div class="col-sm-9 text-center main-section3"></div>

            </section>

            
    </div>

<!-- Este div cierre pertenece al cierre del menu -->
</div>