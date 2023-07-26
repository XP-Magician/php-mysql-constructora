<?php
$estilos= new CargadorCabecera();
?>

<div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Agregar Cliente</h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div class>                                           
                        <form method="post" action="<?php echo Ruta; ?>Cliente/AddCliente" class="form-control">
                                    
                                    <!-- Rut -->
                            <label for="full_name_id" class="control-label">Ingrese rut</label>
                            <input type="text" class="form-control" id="full_name_id" name="rut" required><br>

                                <!-- Nombre -->
                            <label for="street1_id" class="control-label">Ingrese nombre</label>
                            <input type="text" class="form-control" id="street1_id" name="nombre" required><br>

                                <!-- Telefono -->
                            <label for="street2_id" class="control-label">Telefono</label>
                            <input type="text" class="form-control" id="street2_id" name="telefono" required><br>

                                    <!-- Correo -->
                            <label for="street2_id" class="control-label">Correo</label>
                            <input type="text" class="form-control" id="street2_id" name="correo" required><br>

                                <!-- Enviar -->
                            <button type="submit" class="btn btn-primary form-control">Registrar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>