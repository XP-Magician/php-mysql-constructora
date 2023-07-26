<?php
$estilos= new CargadorCabecera();
?>



<div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Agregar Obra </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div >
                        <form method="post" class="form-control" action="<?php echo Ruta; ?>Obra/AddObra">
                      <!-- Rut -->
                            <label for="full_name_id" class="control-label">Rut cliente</label> <br>
                            <select name="rut" id="full_name_id" class="form-select  align-items-center text-center" required>
                                <?php foreach ($array as $r1){ ?>
                                <option value= "<?php echo ($r1[0]); ?> ">  <?php echo ($r1[0]); ?></option>
                                <?php }?>
                            </select><br>

                                         <!-- Nombre -->
                            <label for="street1_id" class="control-label">Nombre Obra</label>
                            <input type="text" class="form-control" id="street1_id" name="nombre" required><br>

                                        <!-- Direccion -->
                            <label for="street2_id" class="control-label">Direccion</label>
                            <input type="text" class="form-control" id="street2_id" name="direccion" required><br>
                        

                                        <!-- Estado -->
                            <label for="street2_id">Estado</label>
                            <select name="estado" class="form-select align-items-center text-center" required>
                                <option value="0">Inactiva</option>
                                <option value="1">Activa</option>
                                <option value="2">Terminada</option>
                            </select><br>
                       

                                     <!-- Fecha inicio -->
                            <label for="street2_id" class="control-label">Fecha Inicio</label>
                            <input type="date" class="form-control" id="street2_id" name="fechaInicio" required><br>
                        

                                    <!-- Fecha termino -->
                            <label for="street2_id" class="control-label">Fecha Termino</label>
                            <input type="date" class="form-control" id="street2_id" name="fechaTermino" required><br>
                        

                                     <!-- Registrar -->
                            <button type="submit" class="form-control btn btn-primary">Registrar</button>
                        

                        </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>