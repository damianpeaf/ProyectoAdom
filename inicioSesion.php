
  <!-- Modal 1 -->
    <div class=" modal fade" id="formModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Iniciar sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./php/ingresar.php" name="formAceptar" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo electrónico</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <center>
                            <p>¿No tienes una cuenta todavía? da click <a style="color: blue;" href="./crearCuenta.php">Aquí</a></p>
                        </center>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="btnAceptar" class="btn btn-primary">Ingresar</button></form>
                </div>
                </form>
            </div>
        </div>
    </div>
