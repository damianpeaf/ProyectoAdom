 <?php
  include_once('./php/validacionUsuario.php');

  ?>

 <div class="bg-dark ">
   <div class="container">
     <nav class="navbar navbar-expand-lg navbar-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="./index.php">
         <img src="./img/icono.svg" width="30" height="30" class="d-inline-block align-top" alt="">
         Compañia
       </a>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class=" navg navbar-nav w-100 justify-content-center ">
           <a class="nav-item nav-link active" href="./index.php">Inicio</a>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               ¿Quienes somos?
             </a>
             <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Mision</a>
               <a class="dropdown-item" href="#">Vision</a>
             </div>
           </li>
           <a class="nav-item nav-link" href="./Productos.php">Paquetes</a>
           <a class="nav-item nav-link" href="./Horarios.php">Horario</a>
           <a class="nav-item nav-link" href="./Contacto.php">contacto</a>

           <?php
            if ($userId == null || $userId == '') {
            ?>

             <button class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal" data-target="#formModal1" /> Iniciar sesión</button>
           <?php
            } else {
            ?>

             <button class="btn btn-outline-info my-2 my-sm-0" onclick="window.location='./php/cerrarSesion.php' "/> Cerar sesión</button>
           <?php
            }
            ?>
         </div>
       </div>
     </nav>
   </div>
 </div>