<?php
$estilos= new CargadorCabecera();
?>
    <div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Loguearse </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div class="centrar">                  
                    <form action="<?php echo Ruta; ?>Usuario/Login" method="post" class="form-control">
                        <label>Ingrese nombre de usuario:</label>
                        <input type="text" required name="nombreu" class="form-control"><br>
                        <label>Ingrese contraseña:</label>
                        <input type="password" required name="passw" class="form-control"><br><br>
                        <input type="submit" value="Loguearse" class="form-control btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>