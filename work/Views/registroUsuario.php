<?php
$estilos= new CargadorCabecera();
?>
    <div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Agregar Usuario </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div>                                     
                    <form action="<?php echo Ruta; ?>Usuario/AddUsuario" method="post" class="form-control">
                        <label >Seleccione el rut del empleado</label>
                        <select name="empleado" required class="form-select">
                        <?php foreach ($array as $emp) {?>  <option value="<?php echo $emp[0]; ?>"> <?php echo $emp[0]; ?></option> <?php } ?>
                        </select><br>
                        <label >Ingrese nombre de usuario:</label>
                        <input type="text" required name="nombre" class="form-control"><br>
                        <label>Ingrese contraseña:</label>
                        <input type="password" required name="pass" class="form-control"><br><br>
                        <input type="submit" value="Registrar" class="form-control btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>