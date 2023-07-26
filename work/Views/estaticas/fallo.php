<?php
$estilos= new CargadorCabecera();
?>
        <div class="col overflow-auto w-100 h-100">
            <div class="bg-light border rounded-3 p-3 w-100 h-100">
                <h2>Fallo!</h2>
                <br><br>
                <p>No se pudo llevar a cabo el registro o inicio de sesion, probablemente este ya existia en la base de datos,o las credenciales que ingresó no sean las correctas,
                    puede revisar los registros en el apartado correspondiente.
                </p>           
                </hr>         
                        <form action="<?php echo Ruta; ?>home" method="post">
                            <button class="btn btn-danger"> Volver al menú </button>
                        </form>
                </hr>
            </div>
        </div>
    </div>
</main>

</body>
</html>