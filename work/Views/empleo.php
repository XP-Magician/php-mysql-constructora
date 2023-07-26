<?php
$estilos= new CargadorCabecera();
?>   
    <div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Agregar Empleo </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div class="centrar">
                <form method="post" action="<?php echo Ruta; ?>Empleo/addEmpleo" class="form-control">
                    <label class="form-control"> Ingrese nombre del empleo:</label><br>
                    <input type="text" required name="Nombre" class="form-control"><br>
                    <button type="submit" class="btn btn-primary form-control">Registrar</button><br>
                </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
