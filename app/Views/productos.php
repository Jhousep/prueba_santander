<?= $this->extend('template/defaultTemplate') ?>

<!-- Esto es para el contenido principal !-->
<?= $this->section('content') ?>

<button type="button" class="btn btn-primary">
    <i class="fas fa-plus-square nav-icon mr-1"></i>
    Añadir nuevo producto
</button></a>

<table id="myDataTable" class="table table-bordered table-striped dataTable dtr-inline"
    aria-describedby="myDataTable_info">
    <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="myDataTable" rowspan="1" colspan="1">
                Nombre</th>
            <th class="sorting" tabindex="0" aria-controls="myDataTable" rowspan="1" colspan="1">
                Stock</th>
            <th class="sorting" tabindex="0" aria-controls="myDataTable" rowspan="1" colspan="1">
                Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($listadoProductos as $key => $producto)
            {
                if ( $key % 2 == 0){
                    echo "<tr class='odd'>";
                }
                else{
                    echo "<tr class='even'>";
                }
                echo "<td class='align-middle'>".$producto['name']."</td>";
                echo "<td class='align-middle'>".$producto['stock']."</td>";
                echo "<td>";
                echo "<div style='width: 150px;'>";
                echo "<a href='".base_url('Productos/EditarProducto/'.$producto['products_pk'])."'><button id='".$producto['name']."' class='btn btnCustom btn-primary ml-1' type='button'><i class='fas fa-pen'></i></button></a>";
                echo "<a href='".base_url('Productos/EliminarProducto/'.$producto['products_pk'])."'><button id='".$producto['name']."' class='btn btnCustom btn-danger ml-1' type='button'><i class='fas fa-pen'></i></button></a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>


<!-- Esto es para los scripts !-->
<?= $this->section('script') ?>

<?= $this->endSection() ?>