<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat&display=swap" rel="stylesheet">



    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilosh2.css">
</head>

<body>

    <header class="header">
        <?php
        include('header.php')
        ?>
    </header>

    <?php
    include('./inicioSesion.php');
    ?>

    <main role="main" class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-12 col-md-9">
                <p class="float-right d-md-none">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                </p>
                <div class="imgnos">
                    <img src="https://nubecolectiva.com/images/b1w.jpg" class="img-fluid">
                </div>
                <div class="row mt-4">
                    <div class="col-6 col-lg-4">
                        <h2>El Equipo</h2>
                        <p>Amamos la Internet, Tecnologia, Ciencia y Medicina. La Magia en Internet existe. A diferencia de la vida real, en la Internet podemos soñar, viajar, leer, pensar sin costo alguno. Internet nos dio la oportunidad de ser Felices. </p>
                        <p><a class="btn btn-secondary" href="https://blog.nubecolectiva.com/" target="_blank" role="button">Ver &raquo;</a></p>
                    </div>
                    <!--/span-->
                    <div class="col-6 col-lg-4">
                        <h2>Misión</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. </p>
                        <p><a class="btn btn-secondary" href="https://blog.nubecolectiva.com/" target="_blank" role="button">Ver &raquo;</a></p>
                    </div>
                    <!--/span-->
                    <div class="col-6 col-lg-4">
                        <h2>Visión</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. </p>
                        <p><a class="btn btn-secondary" href="https://blog.nubecolectiva.com/" target="_blank" role="button">Ver &raquo;</a></p>
                    </div>
                    <!--/span-->

                </div>
                <!--/row-->
            </div>
            <!--/span-->

            <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="https://blog.nubecolectiva.com/category/backend/" target="_blank" class="list-group-item">Backend</a>
                    <a href="https://blog.nubecolectiva.com/category/frontend/" target="_blank" class="list-group-item">Frontend</a>
                    <a href="https://blog.nubecolectiva.com/category/android/" v class="list-group-item">Android</a>
                    <a href="https://blog.nubecolectiva.com/category/marketing-digital/" target="_blank" class="list-group-item">Marketing Digital</a>
                    <a href="https://blog.nubecolectiva.com/category/tecnologia/" target="_blank" class="list-group-item">Tecnología</a>
                    <a href="https://www.youtube.com/channel/UCLFehboXrIhKu15JFpZt2Gw/videos" target="_blank" class="list-group-item">Videos</a>
                    <a href="https://blog.nubecolectiva.com/category/articulos/" target="_blank" class="list-group-item">Articulos</a>
                    <a href="https://blog.nubecolectiva.com/category/tutoriales/" target="_blank" class="list-group-item">Tutoriales</a>
                    <a href="https://blog.nubecolectiva.com/category/marketing-digital/" target="_blank" class="list-group-item">Marketing Digital</a>
                    <a href="https://blog.nubecolectiva.com/category/social-media/" target="_blank" class="list-group-item">Social Media</a>
                    <a href="https://blog.nubecolectiva.com/category/seo/" target="_blank" class="list-group-item">SEO</a>
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->

        <hr>

    </main>
</body>

</html>