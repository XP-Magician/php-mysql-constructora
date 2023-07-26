<?php
$estilos= new CargadorCabecera();
?>
        <div class="col overflow-auto w-100 h-100">
            <div class="bg-light border rounded-3 p-3 w-100 h-100">
                <h2>Exito!</h2>
                <br><br>
                <p>Su operacion fue realizada con exito, en caso de registro, puede verlo en el apartado correspondiente.</p> 
                        </hr>         
                        <form action="<?php echo Ruta; ?>home" method="post">
                            <button class="btn btn-success"> Volver al menú </button>
                        </form>
                        </hr>
            </div>
        </div>
    </div>
</main>

</body>
</html>