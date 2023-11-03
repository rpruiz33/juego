
    
    <section class="contenido-princ">
    <h2>Lista de productos</h2>

<div id= "tabla_artic">
<table border="1" width="90%" align="center">
            <tr>
                <th>Artículo</th>
                <th>Descripción</th>
                <th>Precio</th>
               <th></th>
                <th></th>
            </tr>
            <?php //acá se pasó el array, artic estaba como parámetro
            foreach ($artic->result() as $articulo){?>
               
                   <tr>
                        <td>
                           <?= $articulo->nombre; ?> <!--nombre, descripcion y precio -->
                       </td>                         <!-- son los campos de la bas de datos-->
                       <td>
                            <?= $articulo->descripcion; ?>
                       </td>
                       <td>
                            <?= $articulo->precio; ?>
                       </td>
                       
                       <td><a href="<?=base_url();?>eliminarArticulo/eliminar/<?= $articulos->id; ?>" >Eliminar</a></td>
                       <td><a href="#">Modificar</a></td>
                    </tr> 
               <?php 
               }
                ?>
        </table>

</div>

</body>
</html>