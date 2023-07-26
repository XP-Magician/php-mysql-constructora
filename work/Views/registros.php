<?php
$estilos= new CargadorCabecera();
$tabla=1;
if (isset($_POST['pagina'])){
    $tabla=$_POST['pagina'];
    if ($tabla>6 || $tabla<1){
        $tabla=1;
    }

}
?>

    <div class="col overflow-auto h-100 w-100 ">
    <div class="tituloSuperior"> <h1 class="titulo"> Registros </h1> </div>
            <div class="bg-light border rounded-3 p-3 h-100 w-100">
                <div >
                <!--   FORMULARIO DE NAVEGACION -->
                    <form method='post' name='pagina' action="<?php echo Ruta ?>home/Registros">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
    
                            <li class="page-item">  <button class="page-link" type='submit' value=1 name='pagina'> Clientes  </button>   </li>
                            <li class="page-item">  <button class="page-link" type='submit' value=2 name='pagina'> Empleados  </button>   </li>
                            <li class="page-item">  <button class="page-link" type='submit' value=3 name='pagina'> Empleos  </button>    </li>
                            <li class="page-item">  <button class="page-link" type='submit' value=4 name='pagina'> Obras  </button>      </li>
                            <li class="page-item">  <button class="page-link" type='submit' value=5 name='pagina'> Usuarios  </button>   </li>
                            <li class="page-item">  <button class="page-link" type='submit' value=6 name='pagina'> Vehiculos  </button></li>

                        </ul>
                        </nav>
                    </form>


                    <?php switch ($tabla){
                            case 1:
                                ?>
                                <!--    TABLA DE CLIENTES   -->
                                <h1 class='tituloTabla'> Clientes </h1>
                                <table class="table table table-striped table-dark" title="Clientes">
                                <thead class="thead-dark">
                                        <th scope='col'>Rut</th>
                                        <th scope='col'>Nombre</th>
                                        <th scope='col'>Telefono</th>
                                        <th scope='col'>Correo</th>
                                </thead>
                                    <?php $clientes=$array["clientes"];  foreach ($clientes as $c) {?>
                                    <tr class="col-2 rounded-2">
                                        <td class="rounded-2"> <?php echo $c[0]; ?> </td>
                                        <td class="rounded-2"> <?php echo $c[1]; ?> </td>
                                        <td class="rounded-2"> <?php echo $c[2]; ?> </td>
                                        <td class="rounded-2"> <?php echo $c[3]; ?> </td>
                                    </tr>
                                    <?php } ?>
            
                                </table>
                                <?php
                                break;                           
                            case 2:
                            ?>
                    <!--    TABLA DE EMPLEADOS  -->
                    <h1 class='tituloTabla'> Empleados </h1>
                    <table class="table table table-striped table-dark">
                        <tr class="col-2 rounded-2">
                            <td>Rut</td>
                            <td>Nombre</td>
                            <td>Direccion</td>
                            <td>Telefono</td>
                            <td>Correo</td>
                            <td>Estado</td>
                            <td>Cargo</td>
                            <td>Vehiculo</td>
                            <td>Obra</td>
                        </tr>
                        <?php $empleados=$array["empleados"];  foreach ($empleados as $e) {?>
                            <tr class="col-2 rounded-2">
                                <td class="rounded-2"> <?php echo $e[0]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[1]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[2]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[3]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[4]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[5]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[6]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[7]; ?> </td>
                                <td class="rounded-2"> <?php echo $e[8]; ?> </td>
                            </tr>
                        <?php } ?>

                    </table> 
                    <?php
                    break;
                       
                    case 3:    
                        ?>                  
                        <!--    TABLA DE EMPLEOS   -->
                        <h1 class='tituloTabla'> Empleos </h1>
                        <table class="table table table-striped table-dark" >
                            <tr title="Clientes" class="col-2 rounded-2">
                                <td>ID</td>
                                <td>Nombre</td>

                            </tr>
                            <?php $empleos=$array["empleos"];  foreach ($empleos as $em) {?>
                                <tr class="col-2 rounded-2">
                                    <td class="rounded-2"> <?php echo $em[0]; ?> </td>
                                    <td class="rounded-2"> <?php echo $em[1]; ?> </td>
                                </tr>
                            <?php } ?>

                        </table>
                        <?php
                            break;
                        
                    case 4:
                        ?>

                    <!--    TABLA DE OBRA   -->
                    <h1 class='tituloTabla'> Obra </h1>
                    <table class="table table table-striped table-dark">
                        <tr title="Clientes" class="col-2 rounded-2">
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Direccion</td>
                            <td>Estado</td>
                            <td>Rut Cliente</td>
                            <td>Fecha Inicio</td>
                            <td>Fecha Termino</td>
                        </tr>
                        <?php $obras=$array["obras"];  foreach ($obras as $o) {?>
                            <tr class="col-2 rounded-2">
                                <td class="rounded-2"> <?php echo $o[0]; ?> </td>
                                <td class="rounded-2"> <?php echo $o[1]; ?> </td>
                                <td class="rounded-2"> <?php echo $o[2]; ?> </td>
                                <td class="rounded-2"> <?php echo $o[3]; ?> </td>
                                <td class="rounded-2"> <?php echo $o[4]; ?> </td>
                                <td class="rounded-2"> <?php echo $o[5]; ?> </td>
                                <td class="rounded-2"> <?php echo $o[6]; ?> </td>
                            </tr>
                        <?php } ?>

                    </table> 
                    <?php
                        break;

                    case 5:
                    ?>
                                            <!--    TABLA DE USUARIO   -->
                    <h1 class='tituloTabla'> Usuario </h1>                        
                    <table class="table table table-striped table-dark">
                        <tr title="Clientes" class="col-2 rounded-2">
                            <td>Rut Empleado</td>
                            <td>Nombre</td>
                            <td>Contraseña</td>
                            <td>Fecha Registro</td>
                            <td>Estado</td>
                        </tr>
                        <?php $users=$array["usuarios"];  foreach ($users as $u) {?>
                            <tr class="col-2 rounded-2">
                                <td class="rounded-2"> <?php echo $u[0]; ?> </td>
                                <td class="rounded-2"> <?php echo $u[1]; ?> </td>
                                <td class="rounded-2"> <?php echo $u[2]; ?> </td>
                                <td class="rounded-2"> <?php echo $u[3]; ?> </td>
                                <td class="rounded-2"> <?php echo $u[4]; ?> </td>
                            </tr>
                        <?php } ?>

                    </table> 
                    <?php        
                        break;

                    
                    case 6:
                        ?>
                    
                    <!--    TABLA DE VEHICULOS   -->
                    <h1 class='tituloTabla'> Vehiculos </h1>
                    <table class="table table table-striped table-dark" >
                        <tr title="Clientes" class="col-2 rounded-2">
                            <td>Matricula</td>
                            <td>Modelo</td>
                        </tr>
                        <?php  $vehiculo=$array["vehiculos"];  foreach ($vehiculo as $v) { if($v['Matricula']!='No asignado'){?>
                            <tr class="col-2 rounded-2">
                                <td class="rounded-2"> <?php echo $v[0]; ?> </td>
                                <td class="rounded-2"> <?php echo $v[1]; ?> </td>
                            </tr>
                        <?php } }?>

                    </table> 

                    <?php           
                        break;

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>