<?php
$estilos= new CargadorCabecera();
?>

    

        <div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Agregar Vehiculo </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div class="centrar">
                    <form action="<?php echo Ruta; ?>Vehiculo/AddVehiculo" method="post" class="form-control">
                        <label class="form-label">Ingrese matricula vehiculo:</label> <br>
                        <input required type="text" name="Matricula" class="form-control"> <br><br>
                        <label class="form-label">Ingrese modelo del vehiculo:</label> <br>
                        <input required type="text" name="Modelo" class="form-control"> <br> <br>
                        <input type="submit" value="Registrar" class="form-control btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>