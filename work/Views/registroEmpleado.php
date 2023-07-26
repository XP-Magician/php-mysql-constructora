<?php
$estilos= new CargadorCabecera();
$vehiculos = $array[0];
$obras = $array[2];
$empleo = $array[1];
?>


<div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Agregar Empleado </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div>
                    <form action="<?php echo Ruta; ?>Empleado/AddEmpleado" method="post" class="form-control">
                          <!--Ingreso rut -->
                          <div class="form-outline mb-4">
                              <label class="form-label" for="form5Example1">Rut</label>
                            <input type="text" id="form5Example1" name="rut" class="form-control" required />

                          </div>
                            <!-- Ingreso nombre -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form5Example1">Nombre</label>
                                <input type="text" id="form5Example1" name="nombre" class="form-control" required/>

                            </div>

                            <!-- Ingreso Direccion -->
                          <div class="form-outline mb-4">
                              <label class="form-label" for="form5Example2">Direccion</label>
                            <input type="text" id="form5Example2" class="form-control" name="direccion" required/>

                          </div>

                            <!-- Ingreso Telefono -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form5Example2">Telefono</label>
                                <input type="text" id="form5Example2" class="form-control" name="fono" required/>

                            </div>

                            <!-- Ingreso correo -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form5Example2">Correo</label>
                                <input type="email" id="form5Example2" class="form-control" name="correo" required/>

                            </div>

                            <!-- Ingreso cargo-->
                            <br>
                            <label>Seleccione cargo</label>
                            <select name="cargo" required class="form-select">
                                <?php foreach ($empleo as $emp){ ?> <option value="<?php echo $emp[0]; ?>"> <?php echo $emp[1]; ?> </option> <?php } ?>
                            </select>
                            <br>

                            <!-- Ingreso matricula -->
                            <label>Seleccione vehiculo</label>
                            <select name="matricula" required class="form-select">
                                <?php foreach ($vehiculos as $vc){ ?> <option value="<?php echo $vc[0]; ?>"> <?php echo $vc[0];?> </option> <?php } ?>
                            </select>

                            <!-- Ingreso obra asignada -->
                            <br>

                            <label>Seleccione obra asignada</label>
                            <select name="obra" required class="form-select">
                                <?php foreach ($obras as $ob){ ?> <option value="<?php echo $ob[0]; ?> "> <?php echo $ob[1];  ?> </option> <?php }?>
                            </select>
                            <br>    <br>

                            <!-- Boton enviar -->
                          <button type="submit" class="btn btn-primary form-control">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>